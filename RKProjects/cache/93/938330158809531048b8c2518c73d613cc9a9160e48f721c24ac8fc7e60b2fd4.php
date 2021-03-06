<?php

/* master.html.twig */
class __TwigTemplate_7a8ef552a8af3099ab894cc40055666d80d66138c999c9c0c3600b844cc3a3d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>Dashboard</title>

    
    <!-- Fontfaces CSS-->
    <link href=\"/assets/css/font-face.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\" rel=\"stylesheet\">
    <link href=\"/assets/vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/assets/vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Bootstrap CSS-->
    <link href=\"/assets/vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Vendor CSS-->
    <link href=\"/assets/vendor/animsition/animsition.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/assets/vendor/wow/animate.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/assets/vendor/css-hamburgers/hamburgers.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/assets/vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/assets/vendor/select2/select2.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/assets/vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js\"></script>
    <!-- Main CSS-->
    <link href=\"/assets/css/theme.css\" rel=\"stylesheet\" media=\"all\">
    <!-- JQUERY UI -->
 <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
<style>
/* #### Mobile Phones Portrait #### */
@media screen and (max-device-width: 480px) and (orientation: portrait){
    .header-desktop
    {
        display:none;
    }
}

.smaller-image {
  width: 75px;
  border-radius:50%;
  height: auto;
  padding: 3px;
  border: solid;
  border-color: #0d6539;
  border-width: 2px;
}
.projects-image {
  width: 40px;
  border-radius:50%;
  height: auto;
  padding: 3px;
  border: solid;
  border-color: #0d6539;
  border-width: 2px;
}
</style>
</head>

<body class=\"animsition\">
    <div class=\"page-wrapper\">
        <!-- HEADER MOBILE-->
         
        <header class=\"header-mobile d-block d-lg-none\">
            <div class=\"header-mobile__bar\">
                <div class=\"container-fluid\">
           
                    <div class=\"header-mobile-inner\">
                        <a class=\"logo\" href=\"index.html\">
                            <img src=\"/images/smallRKTlogo.png\" alt=\"RKT\" />
                        </a>
                        <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                        </button>
                    </div>
              
                </div>
            </div>
            <nav class=\"navbar-mobile\">
                <div class=\"container-fluid\">
                    <ul class=\"navbar-mobile__list list-unstyled\">
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"/\">
                                <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href=\"/projects\">
                                <i class=\"fas fa-archive\"></i>Projects</a>
                        </li>
                        <li>
                            <a href=\"/employees\">
                                <i class=\"fas fa-user\"></i>Users</a>
                        </li>
                        <li>
                            <a href=\"/workflow\">
                                <i class=\"fas fa-chart-line\"></i>Workflow</a>
                        </li>
                        ";
        // line 117
        echo "
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
           
        <!-- MENU SIDEBAR-->
        <aside class=\"menu-sidebar d-none d-lg-block\">
            <div class=\"logo\">
                <a href=\"/\">
                    <img src=\"/images/smallRKTlogo.png\" alt=\"RKT\" /><span class=\"text-success\">Projects</span>
                </a>
            </div>
            <div class=\"menu-sidebar__content js-scrollbar1\">
                <nav class=\"navbar-sidebar\">
                    <ul class=\"list-unstyled navbar__list\">
                        <li class=\"active has-sub\">
                            <a class=\"js-arrow\" href=\"/\">
                                <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
   
                        </li>
                        <li>
                            <a href=\"/projects\">
                                <i class=\"fas fa-archive\"></i>Projects</a>
                        </li>
                        <li>
                            <a href=\"/employees\">
                                <i class=\"fas fa-user\"></i>Users</a>
                        </li>
                         <li>
                            <a href=\"/workflow\">
                                <i class=\"fas fa-chart-line\"></i>Workflow</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class=\"page-container\">
            <!-- HEADER DESKTOP-->
            <header class=\"header-desktop\">
                <div class=\"section__content section__content--p30\">
            ";
        // line 332
        echo "                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class=\"main-content\">
                <div class=\"section__content section__content--p30\">
           
                    <div class=\"container-fluid\">
            
                  ";
        // line 342
        $this->displayBlock('content', $context, $blocks);
        // line 604
        echo "                    </div>
                </div>

            </div>
            <br><br>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js\"></script>
    <!-- Bootstrap JS-->
    <script src=\"/assets/vendor/bootstrap-4.1/popper.min.js\"></script>
    <script src=\"/assets/vendor/bootstrap-4.1/bootstrap.min.js\"></script>
    <!-- Vendor JS       -->
    <script src=\"/assets/vendor/slick/slick.min.js\">
    </script>
    <script src=\"/assets/vendor/wow/wow.min.js\"></script>
    <script src=\"/assets/vendor/animsition/animsition.min.js\"></script>
    <script src=\"/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">
    </script>
    <script src=\"/assets/vendor/counter-up/jquery.waypoints.min.js\"></script>
    <script src=\"/assets/vendor/counter-up/jquery.counterup.min.js\">
    </script>
    <script src=\"/assets/vendor/circle-progress/circle-progress.min.js\"></script>
    <script src=\"/assets/vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
    <script src=\"/assets/vendor/chartjs/Chart.bundle.min.js\"></script>
    <script src=\"/assets/vendor/select2/select2.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js\"></script>  
    <script src=\"/assets/js/jquery.ui.touch-punch.min.js\"></script>
    <!-- Main JS-->
    <script src=\"/assets/js/main.js\"></script>
";
        // line 638
        $this->displayBlock('scripts', $context, $blocks);
        // line 639
        echo "</body>

</html>
<!-- end document-->
";
    }

    // line 342
    public function block_content($context, array $blocks = array())
    {
        // line 343
        echo "               
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"au-card au-card--no-shadow au-card--no-pad m-b-40\">
                                    <div class=\"au-card-title\" style=\"background-image:url('images/bg-title-01.jpg');\">
                                        <div class=\"bg-overlay bg-overlay--blue\"></div>
                                        <h3>
                                            <i class=\"zmdi zmdi-account-calendar\"></i>26 April, 2018</h3>
                                        <button class=\"au-btn-plus\">
                                            <i class=\"zmdi zmdi-plus\"></i>
                                        </button>
                                    </div>
                                    <div class=\"au-task js-list-load\">
                                        <div class=\"au-task__title\">
                                            <p>Tasks for John Doe</p>
                                        </div>
                                        <div class=\"au-task-list js-scrollbar3\">
                                            <div class=\"au-task__item au-task__item--danger\">
                                                <div class=\"au-task__item-inner\">
                                                    <h5 class=\"task\">
                                                        <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class=\"time\">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class=\"au-task__item au-task__item--warning\">
                                                <div class=\"au-task__item-inner\">
                                                    <h5 class=\"task\">
                                                        <a href=\"#\">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class=\"time\">11:00 AM</span>
                                                </div>
                                            </div>
                                            <div class=\"au-task__item au-task__item--primary\">
                                                <div class=\"au-task__item-inner\">
                                                    <h5 class=\"task\">
                                                        <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class=\"time\">02:00 PM</span>
                                                </div>
                                            </div>
                                            <div class=\"au-task__item au-task__item--success\">
                                                <div class=\"au-task__item-inner\">
                                                    <h5 class=\"task\">
                                                        <a href=\"#\">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class=\"time\">03:30 PM</span>
                                                </div>
                                            </div>
                                            <div class=\"au-task__item au-task__item--danger js-load-item\">
                                                <div class=\"au-task__item-inner\">
                                                    <h5 class=\"task\">
                                                        <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class=\"time\">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class=\"au-task__item au-task__item--warning js-load-item\">
                                                <div class=\"au-task__item-inner\">
                                                    <h5 class=\"task\">
                                                        <a href=\"#\">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class=\"time\">11:00 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-task__footer\">
                                            <button class=\"au-btn au-btn-load js-load-btn\">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"au-card au-card--no-shadow au-card--no-pad m-b-40\">
                                    <div class=\"au-card-title\" style=\"background-image:url('images/bg-title-02.jpg');\">
                                        <div class=\"bg-overlay bg-overlay--blue\"></div>
                                        <h3>
                                            <i class=\"zmdi zmdi-comment-text\"></i>New Messages</h3>
                                        <button class=\"au-btn-plus\">
                                            <i class=\"zmdi zmdi-plus\"></i>
                                        </button>
                                    </div>
                                    <div class=\"au-inbox-wrap js-inbox-wrap\">
                                        <div class=\"au-message js-list-load\">
                                            <div class=\"au-message__noti\">
                                                <p>You Have
                                                    <span>2</span>

                                                    new messages
                                                </p>
                                            </div>
                                            <div class=\"au-message-list\">
                                                <div class=\"au-message__item unread\">
                                                    <div class=\"au-message__item-inner\">
                                                        <div class=\"au-message__item-text\">
                                                            <div class=\"avatar-wrap\">
                                                                <div class=\"avatar\">
                                                                    <img src=\"images/icon/avatar-02.jpg\" alt=\"John Smith\">
                                                                </div>
                                                            </div>
                                                            <div class=\"text\">
                                                                <h5 class=\"name\">John Smith</h5>
                                                                <p>Have sent a photo</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"au-message__item-time\">
                                                            <span>12 Min ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item unread\">
                                                    <div class=\"au-message__item-inner\">
                                                        <div class=\"au-message__item-text\">
                                                            <div class=\"avatar-wrap online\">
                                                                <div class=\"avatar\">
                                                                    <img src=\"images/icon/avatar-03.jpg\" alt=\"Nicholas Martinez\">
                                                                </div>
                                                            </div>
                                                            <div class=\"text\">
                                                                <h5 class=\"name\">Nicholas Martinez</h5>
                                                                <p>You are now connected on message</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"au-message__item-time\">
                                                            <span>11:00 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item\">
                                                    <div class=\"au-message__item-inner\">
                                                        <div class=\"au-message__item-text\">
                                                            <div class=\"avatar-wrap online\">
                                                                <div class=\"avatar\">
                                                                    <img src=\"images/icon/avatar-04.jpg\" alt=\"Michelle Sims\">
                                                                </div>
                                                            </div>
                                                            <div class=\"text\">
                                                                <h5 class=\"name\">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"au-message__item-time\">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item\">
                                                    <div class=\"au-message__item-inner\">
                                                        <div class=\"au-message__item-text\">
                                                            <div class=\"avatar-wrap\">
                                                                <div class=\"avatar\">
                                                                    <img src=\"images/icon/avatar-05.jpg\" alt=\"Michelle Sims\">
                                                                </div>
                                                            </div>
                                                            <div class=\"text\">
                                                                <h5 class=\"name\">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"au-message__item-time\">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item js-load-item\">
                                                    <div class=\"au-message__item-inner\">
                                                        <div class=\"au-message__item-text\">
                                                            <div class=\"avatar-wrap online\">
                                                                <div class=\"avatar\">
                                                                    <img src=\"images/icon/avatar-04.jpg\" alt=\"Michelle Sims\">
                                                                </div>
                                                            </div>
                                                            <div class=\"text\">
                                                                <h5 class=\"name\">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"au-message__item-time\">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item js-load-item\">
                                                    <div class=\"au-message__item-inner\">
                                                        <div class=\"au-message__item-text\">
                                                            <div class=\"avatar-wrap\">
                                                                <div class=\"avatar\">
                                                                    <img src=\"images/icon/avatar-05.jpg\" alt=\"Michelle Sims\">
                                                                </div>
                                                            </div>
                                                            <div class=\"text\">
                                                                <h5 class=\"name\">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"au-message__item-time\">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"au-message__footer\">
                                                <button class=\"au-btn au-btn-load js-load-btn\">load more</button>
                                            </div>
                                        </div>
                                        <div class=\"au-chat\">
                                            <div class=\"au-chat__title\">
                                                <div class=\"au-chat-info\">
                                                    <div class=\"avatar-wrap online\">
                                                        <div class=\"avatar avatar--small\">
                                                            <img src=\"images/icon/avatar-02.jpg\" alt=\"John Smith\">
                                                        </div>
                                                    </div>
                                                    <span class=\"nick\">
                                                        <a href=\"#\">John Smith</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class=\"au-chat__content\">
                                                <div class=\"recei-mess-wrap\">
                                                    <span class=\"mess-time\">12 Min ago</span>
                                                    <div class=\"recei-mess__inner\">
                                                        <div class=\"avatar avatar--tiny\">
                                                            <img src=\"images/icon/avatar-02.jpg\" alt=\"John Smith\">
                                                        </div>
                                                        <div class=\"recei-mess-list\">
                                                            <div class=\"recei-mess\">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                            <div class=\"recei-mess\">Donec tempor, sapien ac viverra</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"send-mess-wrap\">
                                                    <span class=\"mess-time\">30 Sec ago</span>
                                                    <div class=\"send-mess__inner\">
                                                        <div class=\"send-mess-list\">
                                                            <div class=\"send-mess\">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"au-chat-textfield\">
                                                <form class=\"au-form-icon\">
                                                    <input class=\"au-input au-input--full au-input--h65\" type=\"text\" placeholder=\"Type a message\">
                                                    <button class=\"au-input-icon\">
                                                        <i class=\"zmdi zmdi-camera\"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"copyright\">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href=\"https://colorlib.com\">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                ";
    }

    // line 638
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  504 => 638,  240 => 343,  237 => 342,  229 => 639,  227 => 638,  191 => 604,  189 => 342,  177 => 332,  130 => 117,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>Dashboard</title>

    
    <!-- Fontfaces CSS-->
    <link href=\"/assets/css/font-face.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\" rel=\"stylesheet\">
    <link href=\"/assets/vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/assets/vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Bootstrap CSS-->
    <link href=\"/assets/vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Vendor CSS-->
    <link href=\"/assets/vendor/animsition/animsition.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/assets/vendor/wow/animate.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/assets/vendor/css-hamburgers/hamburgers.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/assets/vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/assets/vendor/select2/select2.min.css\" rel=\"stylesheet\" media=\"all\">
    <link href=\"/assets/vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js\"></script>
    <!-- Main CSS-->
    <link href=\"/assets/css/theme.css\" rel=\"stylesheet\" media=\"all\">
    <!-- JQUERY UI -->
 <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
<style>
/* #### Mobile Phones Portrait #### */
@media screen and (max-device-width: 480px) and (orientation: portrait){
    .header-desktop
    {
        display:none;
    }
}

.smaller-image {
  width: 75px;
  border-radius:50%;
  height: auto;
  padding: 3px;
  border: solid;
  border-color: #0d6539;
  border-width: 2px;
}
.projects-image {
  width: 40px;
  border-radius:50%;
  height: auto;
  padding: 3px;
  border: solid;
  border-color: #0d6539;
  border-width: 2px;
}
</style>
</head>

<body class=\"animsition\">
    <div class=\"page-wrapper\">
        <!-- HEADER MOBILE-->
         
        <header class=\"header-mobile d-block d-lg-none\">
            <div class=\"header-mobile__bar\">
                <div class=\"container-fluid\">
           
                    <div class=\"header-mobile-inner\">
                        <a class=\"logo\" href=\"index.html\">
                            <img src=\"/images/smallRKTlogo.png\" alt=\"RKT\" />
                        </a>
                        <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                        </button>
                    </div>
              
                </div>
            </div>
            <nav class=\"navbar-mobile\">
                <div class=\"container-fluid\">
                    <ul class=\"navbar-mobile__list list-unstyled\">
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"/\">
                                <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href=\"/projects\">
                                <i class=\"fas fa-archive\"></i>Projects</a>
                        </li>
                        <li>
                            <a href=\"/employees\">
                                <i class=\"fas fa-user\"></i>Users</a>
                        </li>
                        <li>
                            <a href=\"/workflow\">
                                <i class=\"fas fa-chart-line\"></i>Workflow</a>
                        </li>
                        {# 
                        <li>
                            <a href=\"#\">
                                <i class=\"fas fa-calendar-alt\"></i>Calendar</a>
                        </li>
                        <li>
                            <a href=\"map.html\">
                                <i class=\"fas fa-map-marker-alt\"></i>Maps</a>
                        </li> #}

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
           
        <!-- MENU SIDEBAR-->
        <aside class=\"menu-sidebar d-none d-lg-block\">
            <div class=\"logo\">
                <a href=\"/\">
                    <img src=\"/images/smallRKTlogo.png\" alt=\"RKT\" /><span class=\"text-success\">Projects</span>
                </a>
            </div>
            <div class=\"menu-sidebar__content js-scrollbar1\">
                <nav class=\"navbar-sidebar\">
                    <ul class=\"list-unstyled navbar__list\">
                        <li class=\"active has-sub\">
                            <a class=\"js-arrow\" href=\"/\">
                                <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>
   
                        </li>
                        <li>
                            <a href=\"/projects\">
                                <i class=\"fas fa-archive\"></i>Projects</a>
                        </li>
                        <li>
                            <a href=\"/employees\">
                                <i class=\"fas fa-user\"></i>Users</a>
                        </li>
                         <li>
                            <a href=\"/workflow\">
                                <i class=\"fas fa-chart-line\"></i>Workflow</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class=\"page-container\">
            <!-- HEADER DESKTOP-->
            <header class=\"header-desktop\">
                <div class=\"section__content section__content--p30\">
            {#
                    <div class=\"container-fluid\">

                        <div class=\"header-wrap\">
                            <form class=\"form-header\" action=\"\" method=\"POST\">
                                <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                                <button class=\"au-btn--submit\" type=\"submit\">
                                    <i class=\"zmdi zmdi-search\"></i>
                                </button>
                            </form>
                            <div class=\"header-button\">
                                <div class=\"noti-wrap\">
                                    <div class=\"noti__item js-item-menu\">
                                        <i class=\"zmdi zmdi-comment-more\"></i>
                                        <span class=\"quantity\">1</span>
                                        <div class=\"mess-dropdown js-dropdown\">
                                            <div class=\"mess__title\">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class=\"mess__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"images/icon/avatar-06.jpg\" alt=\"Michelle Moreno\" />
                                                </div>
                                                <div class=\"content\">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class=\"time\">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class=\"mess__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"images/icon/avatar-04.jpg\" alt=\"Diane Myers\" />
                                                </div>
                                                <div class=\"content\">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class=\"time\">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class=\"mess__footer\">
                                                <a href=\"#\">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"noti__item js-item-menu\">
                                        <i class=\"zmdi zmdi-email\"></i>
                                        <span class=\"quantity\">1</span>
                                        <div class=\"email-dropdown js-dropdown\">
                                            <div class=\"email__title\">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class=\"email__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"images/icon/avatar-06.jpg\" alt=\"Cynthia Harvey\" />
                                                </div>
                                                <div class=\"content\">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class=\"email__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"images/icon/avatar-05.jpg\" alt=\"Cynthia Harvey\" />
                                                </div>
                                                <div class=\"content\">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class=\"email__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"images/icon/avatar-04.jpg\" alt=\"Cynthia Harvey\" />
                                                </div>
                                                <div class=\"content\">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class=\"email__footer\">
                                                <a href=\"#\">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"noti__item js-item-menu\">
                                        <i class=\"zmdi zmdi-notifications\"></i>
                                        <span class=\"quantity\">3</span>
                                        <div class=\"notifi-dropdown js-dropdown\">
                                            <div class=\"notifi__title\">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class=\"notifi__item\">
                                                <div class=\"bg-c1 img-cir img-40\">
                                                    <i class=\"zmdi zmdi-email-open\"></i>
                                                </div>
                                                <div class=\"content\">
                                                    <p>You got a email notification</p>
                                                    <span class=\"date\">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class=\"notifi__item\">
                                                <div class=\"bg-c2 img-cir img-40\">
                                                    <i class=\"zmdi zmdi-account-box\"></i>
                                                </div>
                                                <div class=\"content\">
                                                    <p>Your account has been blocked</p>
                                                    <span class=\"date\">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class=\"notifi__item\">
                                                <div class=\"bg-c3 img-cir img-40\">
                                                    <i class=\"zmdi zmdi-file-text\"></i>
                                                </div>
                                                <div class=\"content\">
                                                    <p>You got a new file</p>
                                                    <span class=\"date\">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class=\"notifi__footer\">
                                                <a href=\"#\">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"account-wrap\">
                                    <div class=\"account-item clearfix js-item-menu\">
                                        <div class=\"image\">
                                            <img src=\"images/icon/avatar-01.jpg\" alt=\"John Doe\" />
                                        </div>
                                        <div class=\"content\">
                                            <a class=\"js-acc-btn\" href=\"#\">john doe</a>
                                        </div>
                                        <div class=\"account-dropdown js-dropdown\">
                                            <div class=\"info clearfix\">
                                                <div class=\"image\">
                                                    <a href=\"#\">
                                                        <img src=\"images/icon/avatar-01.jpg\" alt=\"John Doe\" />
                                                    </a>
                                                </div>
                                                <div class=\"content\">
                                                    <h5 class=\"name\">
                                                        <a href=\"#\">john doe</a>
                                                    </h5>
                                                    <span class=\"email\">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class=\"account-dropdown__body\">
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"#\">
                                                        <i class=\"zmdi zmdi-account\"></i>Account</a>
                                                </div>
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"#\">
                                                        <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                                </div>
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"#\">
                                                        <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class=\"account-dropdown__footer\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-power\"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            #}
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class=\"main-content\">
                <div class=\"section__content section__content--p30\">
           
                    <div class=\"container-fluid\">
            
                  {% block content %}
               
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"au-card au-card--no-shadow au-card--no-pad m-b-40\">
                                    <div class=\"au-card-title\" style=\"background-image:url('images/bg-title-01.jpg');\">
                                        <div class=\"bg-overlay bg-overlay--blue\"></div>
                                        <h3>
                                            <i class=\"zmdi zmdi-account-calendar\"></i>26 April, 2018</h3>
                                        <button class=\"au-btn-plus\">
                                            <i class=\"zmdi zmdi-plus\"></i>
                                        </button>
                                    </div>
                                    <div class=\"au-task js-list-load\">
                                        <div class=\"au-task__title\">
                                            <p>Tasks for John Doe</p>
                                        </div>
                                        <div class=\"au-task-list js-scrollbar3\">
                                            <div class=\"au-task__item au-task__item--danger\">
                                                <div class=\"au-task__item-inner\">
                                                    <h5 class=\"task\">
                                                        <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class=\"time\">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class=\"au-task__item au-task__item--warning\">
                                                <div class=\"au-task__item-inner\">
                                                    <h5 class=\"task\">
                                                        <a href=\"#\">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class=\"time\">11:00 AM</span>
                                                </div>
                                            </div>
                                            <div class=\"au-task__item au-task__item--primary\">
                                                <div class=\"au-task__item-inner\">
                                                    <h5 class=\"task\">
                                                        <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class=\"time\">02:00 PM</span>
                                                </div>
                                            </div>
                                            <div class=\"au-task__item au-task__item--success\">
                                                <div class=\"au-task__item-inner\">
                                                    <h5 class=\"task\">
                                                        <a href=\"#\">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class=\"time\">03:30 PM</span>
                                                </div>
                                            </div>
                                            <div class=\"au-task__item au-task__item--danger js-load-item\">
                                                <div class=\"au-task__item-inner\">
                                                    <h5 class=\"task\">
                                                        <a href=\"#\">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class=\"time\">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class=\"au-task__item au-task__item--warning js-load-item\">
                                                <div class=\"au-task__item-inner\">
                                                    <h5 class=\"task\">
                                                        <a href=\"#\">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class=\"time\">11:00 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"au-task__footer\">
                                            <button class=\"au-btn au-btn-load js-load-btn\">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"au-card au-card--no-shadow au-card--no-pad m-b-40\">
                                    <div class=\"au-card-title\" style=\"background-image:url('images/bg-title-02.jpg');\">
                                        <div class=\"bg-overlay bg-overlay--blue\"></div>
                                        <h3>
                                            <i class=\"zmdi zmdi-comment-text\"></i>New Messages</h3>
                                        <button class=\"au-btn-plus\">
                                            <i class=\"zmdi zmdi-plus\"></i>
                                        </button>
                                    </div>
                                    <div class=\"au-inbox-wrap js-inbox-wrap\">
                                        <div class=\"au-message js-list-load\">
                                            <div class=\"au-message__noti\">
                                                <p>You Have
                                                    <span>2</span>

                                                    new messages
                                                </p>
                                            </div>
                                            <div class=\"au-message-list\">
                                                <div class=\"au-message__item unread\">
                                                    <div class=\"au-message__item-inner\">
                                                        <div class=\"au-message__item-text\">
                                                            <div class=\"avatar-wrap\">
                                                                <div class=\"avatar\">
                                                                    <img src=\"images/icon/avatar-02.jpg\" alt=\"John Smith\">
                                                                </div>
                                                            </div>
                                                            <div class=\"text\">
                                                                <h5 class=\"name\">John Smith</h5>
                                                                <p>Have sent a photo</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"au-message__item-time\">
                                                            <span>12 Min ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item unread\">
                                                    <div class=\"au-message__item-inner\">
                                                        <div class=\"au-message__item-text\">
                                                            <div class=\"avatar-wrap online\">
                                                                <div class=\"avatar\">
                                                                    <img src=\"images/icon/avatar-03.jpg\" alt=\"Nicholas Martinez\">
                                                                </div>
                                                            </div>
                                                            <div class=\"text\">
                                                                <h5 class=\"name\">Nicholas Martinez</h5>
                                                                <p>You are now connected on message</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"au-message__item-time\">
                                                            <span>11:00 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item\">
                                                    <div class=\"au-message__item-inner\">
                                                        <div class=\"au-message__item-text\">
                                                            <div class=\"avatar-wrap online\">
                                                                <div class=\"avatar\">
                                                                    <img src=\"images/icon/avatar-04.jpg\" alt=\"Michelle Sims\">
                                                                </div>
                                                            </div>
                                                            <div class=\"text\">
                                                                <h5 class=\"name\">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"au-message__item-time\">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item\">
                                                    <div class=\"au-message__item-inner\">
                                                        <div class=\"au-message__item-text\">
                                                            <div class=\"avatar-wrap\">
                                                                <div class=\"avatar\">
                                                                    <img src=\"images/icon/avatar-05.jpg\" alt=\"Michelle Sims\">
                                                                </div>
                                                            </div>
                                                            <div class=\"text\">
                                                                <h5 class=\"name\">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"au-message__item-time\">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item js-load-item\">
                                                    <div class=\"au-message__item-inner\">
                                                        <div class=\"au-message__item-text\">
                                                            <div class=\"avatar-wrap online\">
                                                                <div class=\"avatar\">
                                                                    <img src=\"images/icon/avatar-04.jpg\" alt=\"Michelle Sims\">
                                                                </div>
                                                            </div>
                                                            <div class=\"text\">
                                                                <h5 class=\"name\">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"au-message__item-time\">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"au-message__item js-load-item\">
                                                    <div class=\"au-message__item-inner\">
                                                        <div class=\"au-message__item-text\">
                                                            <div class=\"avatar-wrap\">
                                                                <div class=\"avatar\">
                                                                    <img src=\"images/icon/avatar-05.jpg\" alt=\"Michelle Sims\">
                                                                </div>
                                                            </div>
                                                            <div class=\"text\">
                                                                <h5 class=\"name\">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"au-message__item-time\">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"au-message__footer\">
                                                <button class=\"au-btn au-btn-load js-load-btn\">load more</button>
                                            </div>
                                        </div>
                                        <div class=\"au-chat\">
                                            <div class=\"au-chat__title\">
                                                <div class=\"au-chat-info\">
                                                    <div class=\"avatar-wrap online\">
                                                        <div class=\"avatar avatar--small\">
                                                            <img src=\"images/icon/avatar-02.jpg\" alt=\"John Smith\">
                                                        </div>
                                                    </div>
                                                    <span class=\"nick\">
                                                        <a href=\"#\">John Smith</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class=\"au-chat__content\">
                                                <div class=\"recei-mess-wrap\">
                                                    <span class=\"mess-time\">12 Min ago</span>
                                                    <div class=\"recei-mess__inner\">
                                                        <div class=\"avatar avatar--tiny\">
                                                            <img src=\"images/icon/avatar-02.jpg\" alt=\"John Smith\">
                                                        </div>
                                                        <div class=\"recei-mess-list\">
                                                            <div class=\"recei-mess\">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                            <div class=\"recei-mess\">Donec tempor, sapien ac viverra</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"send-mess-wrap\">
                                                    <span class=\"mess-time\">30 Sec ago</span>
                                                    <div class=\"send-mess__inner\">
                                                        <div class=\"send-mess-list\">
                                                            <div class=\"send-mess\">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"au-chat-textfield\">
                                                <form class=\"au-form-icon\">
                                                    <input class=\"au-input au-input--full au-input--h65\" type=\"text\" placeholder=\"Type a message\">
                                                    <button class=\"au-input-icon\">
                                                        <i class=\"zmdi zmdi-camera\"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"copyright\">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href=\"https://colorlib.com\">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                {% endblock %}
                    </div>
                </div>

            </div>
            <br><br>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js\"></script>
    <!-- Bootstrap JS-->
    <script src=\"/assets/vendor/bootstrap-4.1/popper.min.js\"></script>
    <script src=\"/assets/vendor/bootstrap-4.1/bootstrap.min.js\"></script>
    <!-- Vendor JS       -->
    <script src=\"/assets/vendor/slick/slick.min.js\">
    </script>
    <script src=\"/assets/vendor/wow/wow.min.js\"></script>
    <script src=\"/assets/vendor/animsition/animsition.min.js\"></script>
    <script src=\"/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">
    </script>
    <script src=\"/assets/vendor/counter-up/jquery.waypoints.min.js\"></script>
    <script src=\"/assets/vendor/counter-up/jquery.counterup.min.js\">
    </script>
    <script src=\"/assets/vendor/circle-progress/circle-progress.min.js\"></script>
    <script src=\"/assets/vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>
    <script src=\"/assets/vendor/chartjs/Chart.bundle.min.js\"></script>
    <script src=\"/assets/vendor/select2/select2.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js\"></script>  
    <script src=\"/assets/js/jquery.ui.touch-punch.min.js\"></script>
    <!-- Main JS-->
    <script src=\"/assets/js/main.js\"></script>
{% block scripts %}{% endblock %}
</body>

</html>
<!-- end document-->
", "master.html.twig", "C:\\inetpub\\RKProjects\\templates\\master.html.twig");
    }
}
