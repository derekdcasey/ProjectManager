<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

use Dazzle\Loop\Model\SelectLoop;
use Dazzle\Loop\Loop;
use Dazzle\Socket\Socket;
use Dazzle\Socket\SocketInterface;
use Dazzle\Socket\SocketListener;
session_start();

require_once 'vendor/autoload.php';


DB::$user = 'root';
DB::$password = '2358e4cdde585de5b4ada7e5d3a6d274';
//DB::$host = '66.170.180.206'; //defaults to localhost if omitted
DB::$port = '33065'; // defaults to 3306 if omitted
DB::$dbName = 'rkprojectsDB';
DB::$encoding = 'utf8';

DB::$error_handler = 'sql_error_handler';
DB::$nonsql_error_handler = 'nonsql_error_handler';

function sql_error_handler($params) {
    global $app, $log;
    $log->err("Error: " . $params['error']);
    $log->err("Query: " . $params['query']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die; // don't want to keep going if a query broke
}

function nonsql_error_handler($params) {
    global $app, $log;
    echo "Error: " . $params['error'] . "<br>\n";
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die;
}

// Slim creation and setup
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);
$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');

// create a log channel
$log = new Logger('main');
$log->pushHandler(new StreamHandler('logs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('logs/errors.log', Logger::ERROR));


//first time on site set user to empty array
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
}

//debug only remove on release
$app->get('/session', function() {
    print_r($_SESSION);
});

//debug only
//Global Variables
$twig = $app->view()->getEnvironment();
$twig->addGlobal('userSession', $_SESSION['user']);

$app->get('/', function() use ($app) {
    
    $list = DB::query('SELECT * FROM projects');
    $projectCount = DB::queryfirstrow('SELECT COUNT(id) AS number FROM projects;');

    $app->render('dashboard.html.twig',array('list'=>$list,'projectCount'=>$projectCount));
});


$app->get('/udptest', function() use ($app) {
   phpinfo();
});

$app->get('/projects', function() use ($app) {
    $emps = DB::query('SELECT * FROM employees');
    $list = DB::query('SELECT * FROM projects WHERE status != %s','done');
    $app->render('projects.html.twig',array('list'=>$list,'employees'=>$emps));
});

//filter projects
$app->post('/projects', function() use ($app) {
    $emps = DB::query('SELECT * FROM employees');
        $list="";
        $status = $app->request()->post('status');
        $assigned = $app->request()->post('assigned');
        $sort = $app->request()->post('sort');
  
       if(empty($status)){
            $list = DB::query('SELECT * FROM projects WHERE assigned =%s ORDER BY '.$sort,$assigned);
        }
        else if(empty($assigned)){
            $list = DB::query('SELECT * FROM projects WHERE status =%s ORDER BY '.$sort,$status,$sort);
        }else{
            $list = DB::query('SELECT * FROM projects WHERE status =%s AND assigned =%s ORDER BY '.$sort,$status,$assigned);
        }
        
        if(empty($assigned) && empty($status)){
            $list = DB::query('SELECT * FROM projects order by '.$sort);
        }


        $app->render('projects.html.twig',array('list'=>$list,'employees'=>$emps,'status'=>$status,'assigned'=>$assigned,'sort'=>$sort));
    

});



$app->get('/projects/view/:id', function($id) use ($app) {
    $view = DB::queryFirstRow('SELECT * FROM projects WHERE id = %i',$id);
    $tasks = DB::query('SELECT * FROM tasks WHERE projectId =%i',$id);
    $flow = DB::query('SELECT * FROM workflow WHERE projectId =%i',$id);
   
        $total=0;
        foreach($flow as $f){    
                $date1 = strtotime($f['start']);
                if(empty($f['end']))
                {
                    $date2 = time();
                }
                else
                {
                    $date2 = strtotime($f['end']);
                }
                $diff = $date2-$date1;
                $hours = intval(floor($diff / 3600));
                $total += $hours;                      
        }
      
    


    $app->render('projectview.html.twig',array('v'=>$view,'total'=>$total,'tasks'=>$tasks));
});

$app->get('/projects/:op(/:id)', function($op, $id = -1) use ($app) {
    // if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'admin') {
    //     $app->render('access_denied.html.twig');
    //     return;
    // }
    $emps = DB::query('SELECT * FROM employees');
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        echo "INVALID REQUEST"; // FIXME - display standard 404 from slim
        return;
    }
    //
    if ($id != -1) {
        $values = DB::queryFirstRow('SELECT * FROM projects WHERE id=%i', $id);
        if (!$values) {
            echo "NOT FOUND";  // FIXME  - display standard 404 from slim
            return;
        }
    } else { // nothing to load from database - adding
        $values = array();
    }
    $app->render('projects_addedit.html.twig', array('employees'=>$emps,
        'v' => $values,
        'isEditing' => ($id != -1)
    ));
})->conditions(array(
    'op' => '(edit|add)',
    'id' => '\d+'
));

///Add/Edit a Project

$app->post('/projects/:op(/:id)', function($op, $id = -1) use ($app, $log) {
    // if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'admin') {
    //     $app->render('access_denied.html.twig');
    //     return;
    // }
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        echo "INVALID REQUEST"; // FIXME - display standard 404 from slim
        return;
    }
    //
    $title = $app->request()->post('title');
    $desc = $app->request()->post('desc');
    $dateAdded = date("Y-m-d");
    $assign = $app->request()->post('assign');
    $status = $app->request()->post('status');
    $priority = $app->request()->post('priority');

    $values = array('title' => $title, 'desc' => $desc,'dateAdded'=>$dateAdded,'assigned'=>$assign,'status'=> $status,'priority'=>$priority);
    $errorList = array();
    //
    if (strlen($title) < 2 || strlen($title) > 50) {
        $values['title'] = '';
        array_push($errorList, "Title must be between 2 and 50 characters long");
    }
    if (strlen($desc) < 2 || strlen($desc) > 1000) {
        $values['desc'] = '';
        array_push($errorList, "Description must be between 2 and 500 characters long");
    }

    if ($errorList) { // 3. failed submission
        $app->render('projects_addedit.html.twig', array(
            'errorList' => $errorList,
            'isEditing' => ($id != -1),
            'v' => $values));
    } else { // 2. successful submission
        
        if ($id != -1) {
            unset($values['dateAdded']);
            DB::update('projects', $values, "id=%i", $id);
        } else {
            DB::insert('projects', $values);
        }
        $app->redirect('/projects');
    }
})->conditions(array(
    'op' => '(edit|add)',
    'id' => '\d+'
));

$app->get('/projects/delete/:id', function($id) use ($app) {
    // if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'admin') {
    //     $app->render('access_denied.html.twig');
    //     return;
    // }
    $hasActiveUser = DB::queryFirstRow('SELECT * FROM employees WHERE currentProj=%i', $id);
    if($hasActiveUser)
    {
        $app->render('cant_delete.html.twig');
        return;
    }
    $project = DB::queryFirstRow('SELECT * FROM projects WHERE id=%i', $id);
    if (!$project) {
        $app->render('not_found.html.twig');
        return;
    }
    $app->render('projects_delete.html.twig', array('p' => $project));
});

$app->post('/projects/delete/:id', function($id) use ($app) {
    // if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'admin') {
    //     $app->render('access_denied.html.twig');
    //     return;
    // }
    $confirmed = $app->request()->post('confirmed');
    if ($confirmed != 'true') {
        $app->redirect('/projects');
        return;
    }

    DB::delete('projects', "id=%i", $id);
    DB::delete('workflow', "projectId=%i", $id);
 
        $app->redirect('/projects');
    
});

///////////////Tasks
$app->get('/tasks/add/:id', function($id) use ($app) {
    $app->render('tasks_addedit.html.twig',array('projectId'=>$id));
});

$app->get('/tasks/edit/:id', function($id) use ($app) {
    $values = DB::queryFirstRow('SELECT * FROM tasks WHERE id=%i', $id);

    $app->render('tasks_addedit.html.twig',array('v'=>$values,'projectId'=>$values['projectId']));
});
$app->post('/tasks/edit/:id', function($id) use ($app) {
    $desc = $app->request()->post('desc');
    $getProj = DB::queryFirstRow('SELECT * FROM tasks WHERE id=%i', $id);
    $values = array('desc' => $desc);
    DB::update('tasks', $values, "id=%i", $id);
    $app->redirect('/projects/view/'.$getProj['projectId']);
});

$app->post('/tasks/add/:id', function($id) use ($app) {
    $desc = $app->request()->post('desc');
    $values = array('desc' => $desc,'projectId'=>$id);
    DB::insert('tasks', $values);
    $app->redirect('/projects/view/'.$id);
});


$app->get('/task/delete/:id', function($id) use ($app) {
    // if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'admin') {
    //     $app->render('access_denied.html.twig');
    //     return;
    // }
   
    $task = DB::queryFirstRow('SELECT * FROM tasks WHERE id=%i', $id);
    if (!$task) {
        $app->render('not_found.html.twig');
        return;
    }
    $app->render('tasks_delete.html.twig', array('p' => $task));
});

$app->post('/task/delete/:id', function($id) use ($app) {
    // if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'admin') {
    //     $app->render('access_denied.html.twig');
    //     return;
    // }
    $task = DB::queryFirstRow('SELECT * FROM tasks WHERE id=%i', $id);
    $confirmed = $app->request()->post('confirmed');
    if ($confirmed != 'true') {
        $app->redirect('/projects/view/'.$task['projectId']);
        return;
    }

    DB::delete('tasks', "id=%i", $id);
   
    if (DB::affectedRows() == 0) {
        $app->render('not_found.html.twig');
    } else {
        $app->redirect('/projects/view/'.$task['projectId']);
    }
});

///////////////Employees
$app->get('/employees', function() use ($app) {
    $emp = DB::query('SELECT employees.name,employees.imgPath,employees.currentProj,employees.currentWorkflow,projects.title as projName FROM employees LEFT JOIN projects ON employees.currentProj = projects.id ');
    $app->render('employees.html.twig', array('emp' => $emp));
});

$app->get('/employees/:op(/:id)', function($op, $id = -1) use ($app) {
    // if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'admin') {
    //     $app->render('access_denied.html.twig');
    //     return;
    // }
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        echo "INVALID REQUEST"; // FIXME on Monday - display standard 404 from slim
        return;
    }
    //
    if ($id != -1) {
        $values = DB::queryFirstRow('SELECT * FROM employees WHERE id=%i', $id);
        if (!$values) {
            echo "NOT FOUND";  // FIXME on Monday - display standard 404 from slim
            return;
        }
    } else { // nothing to load from database - adding
        $values = array();
    }
    $app->render('employees_addedit.html.twig', array(
        'v' => $values,
        'isEditing' => ($id != -1)
    ));
})->conditions(array(
    'op' => '(edit|add)',
    'id' => '\d+'
));



$app->post('/employees/:op(/:id)', function($op, $id = -1) use ($app, $log) {
    // if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'admin') {
    //     $app->render('access_denied.html.twig');
    //     return;
    // }
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        echo "INVALID REQUEST"; // FIXME on Monday - display standard 404 from slim
        return;
    }
    //
    $name = $app->request()->post('name');
   
    //
    $values = array('name' => $name);
    $errorList = array();
    //
    if (strlen($name) < 2 || strlen($name) > 50) {
        $values['name'] = '';
        array_push($errorList, "Name must be between 2 and 50 characters long");
    }
 

    $userImage = array();
    if ($_FILES['userImage']['error']!= UPLOAD_ERR_NO_FILE) {
        $userImage = $_FILES['userImage'];
        if ($userImage['error'] != 0) {
            array_push($errorList, "Error uploading file");
            $log->err("Error uploading file: " . print_r($userImage, true));
        } else {
            if (strstr($userImage['name'], '..')) {
                array_push($errorList, "Invalid file name");
                $log->warn("Uploaded file name with .. in it (possible attack): " . print_r($userImage, true));
            }
            // TODO: check if file already exists, check maximum size of the file, dimensions of the image etc.
            $info = getimagesize($userImage["tmp_name"]);
            if ($info == FALSE) {
                array_push($errorList, "File doesn't look like a valid image");
            } else {
                if ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/gif' || $info['mime'] == 'image/png') {
                    // image type is valid - all good
                } else {
                    array_push($errorList, "Image must be a JPG, GIF, or PNG only.");
                }
            }
        }
    } else { // no file uploaded
      /*  if ($op == 'add') {
            array_push($errorList, "Image is required when creating new module");
        }*/
    }

    //
    if ($errorList) { // 3. failed submission
        $app->render('employees_addedit.html.twig', array(
            'errorList' => $errorList,
            'isEditing' => ($id != -1),
            'v' => $values));
    } else { // 2. successful submission
        if ($userImage) {
            $sanitizedFileName = preg_replace('[^a-zA-Z0-9_\.-]', '_', $userImage['name']);
            $imagePath = 'uploads/' . $sanitizedFileName;
            if (!move_uploaded_file($userImage['tmp_name'], $imagePath)) {
                $log->err("Error moving uploaded file: " . print_r($userImage, true));
                $app->render('internal_error.html.twig');
                return;
            }
            // TODO: if EDITING and new file is uploaded we should delete the old one in uploads
            $values['imgPath'] = "/" . $imagePath;
        }
        if ($id != -1) {
            DB::update('employees', $values, "id=%i", $id);
        } else {
            DB::insert('employees', $values);
        }
        $app->redirect('/employees');
    }
})->conditions(array(
    'op' => '(edit|add)',
    'id' => '\d+'
));

///////////////workflows

$app->get('/workflow/:id', function($id) use ($app) {

 

});
$app->post('/workflow', function() use ($app) {

    $flow = DB::query('SELECT * FROM workflow');
    $status = $app->request()->post('status');
    $time = $app->request()->post('time');
    $projectsRaw = "";
    if(empty($status))
    {  
        $projectsRaw = DB::query('SELECT * FROM projects');
    }
    else
    {
        $projectsRaw = DB::query('SELECT * FROM projects WHERE status =%s',$status);
    }

    $projects = array();
    foreach($projectsRaw as $p){
        $total=0;
        foreach($flow as $f){    

            if($f['projectId'] == $p['id'])
            {
                $date1 = strtotime($f['start']);
                if(empty($f['end'])){
                    $date2 = time();
                }else{
                    $date2 = strtotime($f['end']);
                }
                $diff = $date2-$date1;
                $timescale='';

                switch ($time) {
                    case 'minutes':
                    $timescale = floor($diff / 60);
                        break;
                    case 'hours':
                    $timescale = intval(floor($diff / 3600));
                        break;
                    case 'days':
                    $timescale = abs($diff)/60/60/24;
                        break;
                }

                $total += $timescale;             
            }
        }
        $p += ['total' => $total];
      
        array_push($projects,$p);
    }
    
  $app->render('workflow.html.twig', array('projects'=>$projects,'time'=>$time));
});

$app->get('/workflow', function() use ($app) {

    $flow = DB::query('SELECT * FROM workflow');
    $projectsRaw = DB::query('SELECT * FROM projects');
    $projects = array();
    foreach($projectsRaw as $p){
        $total=0;
        foreach($flow as $f){    

            if($f['projectId'] == $p['id'])
            {
                $date1 = strtotime($f['start']);
                if(empty($f['end'])){
                    $date2 = time();
                }else{
                    $date2 = strtotime($f['end']);
                }
                $diff = $date2-$date1;
                $hours = intval(floor($diff / 3600));
                $total += $hours;             
            }
        }
        $p += ['total' => $total];
      
        array_push($projects,$p);
    }
    
        //$years = floor($diff / (365*60*60*24));
        //$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        //$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        //$minutes = floor($diff / 60);
        //$sec = intval($seconds % 60);

    
  $app->render('workflow.html.twig', array('projects'=>$projects));
});


///////////////////////api
$app->post('/api/workflow', function() use ($app, $log) {
    
    $json = $app->request()->getBody();
    $data = json_decode($json, true);

    $datetime = date("Y-m-d H:i:s");

    $emp = DB::queryFirstRow('SELECT * FROM employees WHERE id =%i',$data['empId']);
    //do nothing if it was dropped on the same project
    if($emp['currentProj'] == $data['projId'])
    {
        return;
    }
    //checking if employee is currently working on something
    if($emp['currentWorkflow'] != 0){
        //if he is end that project
        DB::update('workflow', array('end' => $datetime), "id=%i", $emp['currentWorkflow']);
        //check if he is switching projects or going inactive
            if($data['projId']!= 0){
                //if he is create a new workflow and update employees current info
                DB::insert('workflow', array('employeeId'=>$data['empId'],'projectId'=>$data['projId'],'start'=>$datetime));
                DB::update('employees', array('currentProj' => $data['projId'],'currentWorkflow'=>DB::insertId()), "id=%i", $emp['id']);
            }
            else
            {
                //reset employees current info
                DB::update('employees', array('currentProj' => $data['projId'],'currentWorkflow'=>0), "id=%i", $emp['id']);
            }
    }
    else
    {
        //employee is starting a new workflow
        DB::insert('workflow', array('employeeId'=>$data['empId'],'projectId'=>$data['projId'],'start'=>$datetime));
        DB::update('employees', array('currentProj' => $data['projId'],'currentWorkflow'=>DB::insertId()), "id=%i", $emp['id']);
    }

    $app->response->setStatus(201);
});

$app->put('/api/task/update', function() use ($app, $log) {
    
    $json = $app->request()->getBody();
    $data = json_decode($json, true);

    DB::update('tasks', array('isDone' => $data['isDone']), "id=%i", $data['id']);
});


//keep run() at bottom 
$app->run();
