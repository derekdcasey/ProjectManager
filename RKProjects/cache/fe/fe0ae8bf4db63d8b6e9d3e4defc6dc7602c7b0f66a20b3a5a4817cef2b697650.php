<?php

/* projects.html.twig */
class __TwigTemplate_ba40b8715134479701b41cb4d3bdc280282c0c233a46fa611cb39c12593c6c1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "projects.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "

                                <!-- DATA TABLE -->

                              
                                <h3 class=\"title-5 m-b-35\">Projects</h3>
                                <div class=\"table-data__tool\">
                                    <div class=\"table-data__tool-left\">
                                   
                                        <div class=\"rs-select2--light rs-select2--md\">

                                        <form method=\"POST\" id=\"filters\">
                                        <label for=\"status\">Status</label>
                                            <select class=\"form-control\" id=\"status\" name=\"status\" aria-hidden=\"true\">
                                                <option value=\"\">All</option>
                                                <option value=\"done\"";
        // line 20
        if ((($context["status"] ?? null) == "done")) {
            echo " selected";
        }
        echo " >Complete</option>
                                                <option value=\"onHold\" ";
        // line 21
        if ((($context["status"] ?? null) == "onHold")) {
            echo " selected";
        }
        echo " >On Hold</option>
                                                <option value=\"todo\" ";
        // line 22
        if ((($context["status"] ?? null) == "todo")) {
            echo " selected";
        }
        echo " >Todo</option>
                                                <option value=\"inProgress\" ";
        // line 23
        if ((($context["status"] ?? null) == "inProgress")) {
            echo " selected";
        }
        echo " >In Progress</option>
                                            </select>

                                        </div>

                                        <div class=\"rs-select2--light rs-select2--md\">

                                       
                                         <label for=\"assigned\">Assigned To</label>
                                            <select class=\"form-control\" id=\"assigned\" name=\"assigned\" aria-hidden=\"true\">
                                                <option value=\"\">All</option>
                                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 35
            echo "                                         <option ";
            if ((($context["assigned"] ?? null) == $this->getAttribute($context["e"], "name", array()))) {
                echo " selected";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                                            </select>
                                      
                                        </div>
                                        <div class=\"rs-select2--light rs-select2--md\">
                                         <label for=\"sort\">Sort By</label>
                                            <select class=\"form-control\" id=\"sort\" name=\"sort\" aria-hidden=\"true\">
                                                <option value=\"dateAdded ASC\" ";
        // line 43
        if ((($context["sort"] ?? null) == "dateAdded ASC")) {
            echo " selected";
        }
        echo ">Date ASC</option>
                                                 <option value=\"dateAdded DESC\" ";
        // line 44
        if ((($context["sort"] ?? null) == "dateAdded DESC")) {
            echo " selected";
        }
        echo ">Date DESC</option>
                                                <option value=\"priority DESC\" ";
        // line 45
        if ((($context["sort"] ?? null) == "priority DESC")) {
            echo " selected";
        }
        echo ">Priority</option>
                                            </select>
           
                                        </div>
                                        <div class=\"rs-select2--light rs-select2--md\">
                                        <button type=\"submit\" class=\"au-btn au-btn-icon au-btn--blue au-btn--small\">
                                            <i class=\"zmdi zmdi-filter-list\"></i>Filter</button>
                                          </form>
                                    </div>
                                            
                                    </div>

                                
                                </div>
                            
                            <br>


                                <div class=\"table-responsive table-responsive-data2\">
                                    <table class=\"table table-data2\">
                                        <thead>
                                            <tr>
                                                <th>working</th>
                                                <th>title</th>
                                                <th>description</th>
                                                <th>assigned to</th>
                                                <th>date added</th>
                                                <th>status</th>
                                                <th>priority</th>
                                                <th>    <div class=\"table-data__tool-right\">
                                        <a href=\"/projects/add\" class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                                            <i class=\"zmdi zmdi-plus\"></i>add project</a>
                                        
                                    </div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr><td colspan=8> 
                                        <div id=\"d0\" class=\"droppable\" style=\"height:80px;width:100%;border:1px solid gray; white-space: nowrap;\">  <span class=\"text-align-center\" style=\"font-size:4em;opacity: 0.1;margin-left:50%;float:right;\">&nbsp;INACTIVE USERS</span>
                                        </div>
                                        </td>
                                        </tr>
                                        <tr class=\"spacer\"></tr>
                                        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 89
            echo "                         
                                            <tr class=\"tr-shadow\">
                                                <td>
                                                <div class=\"droppable\" id=\"d";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\" style=\"height:40px;width:200px;border:2px dashed green\"></div>
                                                </td>
                                                <td> <a class=\"text-dark\" href=\"/projects/view/";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "title", array()), "html", null, true);
            echo "</a></td>
                                                <td title=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "desc", array()), "html", null, true);
            echo "\" class=\"desc\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["l"], "desc", array()), 0, 30), "html", null, true);
            echo "...</td>
                                                 <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "assigned", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["l"], "dateAdded", array()), "Y-d-m"), "html", null, true);
            echo "</td>
                                                <td><span class=\"badge badge-primary\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "status", array()), "html", null, true);
            echo "</span></td>
                                                <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "priority", array()), "html", null, true);
            echo "</td>
                                                <td>
                                                    <div class=\"table-data-feature\">
                                                        <a href=\"/projects/view/";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"View\">
                                                            <i class=\"zmdi zmdi-mail-send\"></i>
                                                        </a>
                                                        <a href =\"/projects/edit/";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Edit\">
                                                            <i class=\"zmdi zmdi-edit\"></i>
                                                        </a>
                                                        <a href =\"/projects/delete/";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Delete\">
                                                            <i class=\"zmdi zmdi-delete\"></i>
                                                        </a>
                                                        ";
            // line 114
            echo "                                                    </div>
                                                </td>
                                            </tr>
                                       
                                            <tr class=\"spacer\"></tr>
                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo " 
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->


";
    }

    // line 128
    public function block_scripts($context, array $blocks = array())
    {
        // line 129
        echo "<script>
\$( document ).ready(function() {



    


          //drop listeners
          \$(\"#d0\").droppable({
                  drop: function(event, ui) {
                        var draggableId = ui.draggable.attr(\"id\").substring(1);
                            var droppableId = \$(this).attr(\"id\").substring(1);
                            \$.ajax({
                            url: \"http://66.170.180.206/api/workflow\",   
                            data: JSON.stringify({
                                \"empId\": draggableId,
                                \"projId\": droppableId,
                            }),
                            type: \"POST\",
                            dataType: \"json\"
                        }).done(function (data) {
                        });
                  },
                  over: function(event, ui) {
                   
                  }
              });

            ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 159
            echo "            createListener(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo ");
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "
            ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 163
            echo "            \$( \" <div id='e";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
            echo "' title='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "' style='display: inline-block;' class='drag'><img class='projects-image' src='http://66.170.180.206";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "imgPath", array()), "html", null, true);
            echo "' alt='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "'><br></div>\" ).appendTo( \"#d";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "currentProj", array()), "html", null, true);
            echo "\" );           
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "
    jQuery(\".drag\").draggable({
        revert: 'invalid'
      });

  

});
 function createListener(projectID){
              \$(\"#d\" + projectID +\"\" ).droppable({
                  drop: function(event, ui) {
                        var draggableId = ui.draggable.attr(\"id\").substring(1);
                        var droppableId = \$(this).attr(\"id\").substring(1);
                           // alert(draggableId + \" \" + droppableId);
                        \$.ajax({
                            url: \"http://66.170.180.206/api/workflow\",   
                            data: JSON.stringify({
                                \"empId\": draggableId,
                                \"projId\": droppableId,
                            }),
                            type: \"POST\",
                            dataType: \"json\"
                        }).done(function (data) {
                         
                        });
                            
                  },
                  over: function(event, ui) {
                  //addHighlight
                  }
              });
            }

</script>
";
    }

    public function getTemplateName()
    {
        return "projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 165,  308 => 163,  304 => 162,  301 => 161,  292 => 159,  288 => 158,  257 => 129,  254 => 128,  243 => 119,  232 => 114,  226 => 108,  220 => 105,  214 => 102,  208 => 99,  204 => 98,  200 => 97,  196 => 96,  190 => 95,  184 => 94,  179 => 92,  174 => 89,  170 => 88,  122 => 45,  116 => 44,  110 => 43,  102 => 37,  87 => 35,  83 => 34,  67 => 23,  61 => 22,  55 => 21,  49 => 20,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'master.html.twig' %}


{% block content %}


                                <!-- DATA TABLE -->

                              
                                <h3 class=\"title-5 m-b-35\">Projects</h3>
                                <div class=\"table-data__tool\">
                                    <div class=\"table-data__tool-left\">
                                   
                                        <div class=\"rs-select2--light rs-select2--md\">

                                        <form method=\"POST\" id=\"filters\">
                                        <label for=\"status\">Status</label>
                                            <select class=\"form-control\" id=\"status\" name=\"status\" aria-hidden=\"true\">
                                                <option value=\"\">All</option>
                                                <option value=\"done\"{% if status =='done' %} selected{% endif %} >Complete</option>
                                                <option value=\"onHold\" {% if status =='onHold' %} selected{% endif %} >On Hold</option>
                                                <option value=\"todo\" {% if status =='todo' %} selected{% endif %} >Todo</option>
                                                <option value=\"inProgress\" {% if status =='inProgress' %} selected{% endif %} >In Progress</option>
                                            </select>

                                        </div>

                                        <div class=\"rs-select2--light rs-select2--md\">

                                       
                                         <label for=\"assigned\">Assigned To</label>
                                            <select class=\"form-control\" id=\"assigned\" name=\"assigned\" aria-hidden=\"true\">
                                                <option value=\"\">All</option>
                                        {% for e in employees %}
                                         <option {% if assigned == e.name %} selected{% endif %} value=\"{{e.name}}\">{{e.name}}</option>
                                        {% endfor %}
                                            </select>
                                      
                                        </div>
                                        <div class=\"rs-select2--light rs-select2--md\">
                                         <label for=\"sort\">Sort By</label>
                                            <select class=\"form-control\" id=\"sort\" name=\"sort\" aria-hidden=\"true\">
                                                <option value=\"dateAdded ASC\" {% if sort =='dateAdded ASC' %} selected{% endif %}>Date ASC</option>
                                                 <option value=\"dateAdded DESC\" {% if sort =='dateAdded DESC' %} selected{% endif %}>Date DESC</option>
                                                <option value=\"priority DESC\" {% if sort =='priority DESC' %} selected{% endif %}>Priority</option>
                                            </select>
           
                                        </div>
                                        <div class=\"rs-select2--light rs-select2--md\">
                                        <button type=\"submit\" class=\"au-btn au-btn-icon au-btn--blue au-btn--small\">
                                            <i class=\"zmdi zmdi-filter-list\"></i>Filter</button>
                                          </form>
                                    </div>
                                            
                                    </div>

                                
                                </div>
                            
                            <br>


                                <div class=\"table-responsive table-responsive-data2\">
                                    <table class=\"table table-data2\">
                                        <thead>
                                            <tr>
                                                <th>working</th>
                                                <th>title</th>
                                                <th>description</th>
                                                <th>assigned to</th>
                                                <th>date added</th>
                                                <th>status</th>
                                                <th>priority</th>
                                                <th>    <div class=\"table-data__tool-right\">
                                        <a href=\"/projects/add\" class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                                            <i class=\"zmdi zmdi-plus\"></i>add project</a>
                                        
                                    </div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr><td colspan=8> 
                                        <div id=\"d0\" class=\"droppable\" style=\"height:80px;width:100%;border:1px solid gray; white-space: nowrap;\">  <span class=\"text-align-center\" style=\"font-size:4em;opacity: 0.1;margin-left:50%;float:right;\">&nbsp;INACTIVE USERS</span>
                                        </div>
                                        </td>
                                        </tr>
                                        <tr class=\"spacer\"></tr>
                                        {% for l in list %}
                         
                                            <tr class=\"tr-shadow\">
                                                <td>
                                                <div class=\"droppable\" id=\"d{{l.id}}\" style=\"height:40px;width:200px;border:2px dashed green\"></div>
                                                </td>
                                                <td> <a class=\"text-dark\" href=\"/projects/view/{{l.id}}\">{{l.title}}</a></td>
                                                <td title=\"{{l.desc}}\" class=\"desc\">{{l.desc|slice(0,30)}}...</td>
                                                 <td>{{l.assigned}}</td>
                                                <td>{{l.dateAdded|date(\"Y-d-m\")}}</td>
                                                <td><span class=\"badge badge-primary\">{{l.status}}</span></td>
                                                <td>{{l.priority}}</td>
                                                <td>
                                                    <div class=\"table-data-feature\">
                                                        <a href=\"/projects/view/{{l.id}}\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"View\">
                                                            <i class=\"zmdi zmdi-mail-send\"></i>
                                                        </a>
                                                        <a href =\"/projects/edit/{{l.id}}\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Edit\">
                                                            <i class=\"zmdi zmdi-edit\"></i>
                                                        </a>
                                                        <a href =\"/projects/delete/{{l.id}}\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Delete\">
                                                            <i class=\"zmdi zmdi-delete\"></i>
                                                        </a>
                                                        {#<a class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"More\">
                                                            <i class=\"zmdi zmdi-more\"></i>
                                                        </a>#}
                                                    </div>
                                                </td>
                                            </tr>
                                       
                                            <tr class=\"spacer\"></tr>
                                     {% endfor %} 
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->


{% endblock %}

{% block scripts %}
<script>
\$( document ).ready(function() {



    


          //drop listeners
          \$(\"#d0\").droppable({
                  drop: function(event, ui) {
                        var draggableId = ui.draggable.attr(\"id\").substring(1);
                            var droppableId = \$(this).attr(\"id\").substring(1);
                            \$.ajax({
                            url: \"http://66.170.180.206/api/workflow\",   
                            data: JSON.stringify({
                                \"empId\": draggableId,
                                \"projId\": droppableId,
                            }),
                            type: \"POST\",
                            dataType: \"json\"
                        }).done(function (data) {
                        });
                  },
                  over: function(event, ui) {
                   
                  }
              });

            {% for p in list%}
            createListener({{p.id}});
            {% endfor %}

            {% for e in employees %}
            \$( \" <div id='e{{e.id}}' title='{{e.name}}' style='display: inline-block;' class='drag'><img class='projects-image' src='http://66.170.180.206{{e.imgPath}}' alt='{{e.name}}'><br></div>\" ).appendTo( \"#d{{e.currentProj}}\" );           
            {% endfor %}

    jQuery(\".drag\").draggable({
        revert: 'invalid'
      });

  

});
 function createListener(projectID){
              \$(\"#d\" + projectID +\"\" ).droppable({
                  drop: function(event, ui) {
                        var draggableId = ui.draggable.attr(\"id\").substring(1);
                        var droppableId = \$(this).attr(\"id\").substring(1);
                           // alert(draggableId + \" \" + droppableId);
                        \$.ajax({
                            url: \"http://66.170.180.206/api/workflow\",   
                            data: JSON.stringify({
                                \"empId\": draggableId,
                                \"projId\": droppableId,
                            }),
                            type: \"POST\",
                            dataType: \"json\"
                        }).done(function (data) {
                         
                        });
                            
                  },
                  over: function(event, ui) {
                  //addHighlight
                  }
              });
            }

</script>
{% endblock %}", "projects.html.twig", "C:\\inetpub\\RKProjects\\templates\\projects.html.twig");
    }
}
