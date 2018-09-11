<?php

/* projectview.html.twig */
class __TwigTemplate_dbf2d1e718b15df7025fdc9ff84b42e82dc09feeaabd44cb0d23d454b0979493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "projectview.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "                                <div class=\"statistic__item\">
                                    <h2 class=\"number\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</h2>
                                    <span class=\"desc\">Hours Spent on this project</span>
                                    
                                    <div class=\"icon\">
                                        <i class=\"zmdi zmdi-time\"></i>
                                    </div>
                                   
                                </div>
                            <div class=\"top-campaign\">

                                    <h3 class=\"title-3 m-b-30\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "title", array()), "html", null, true);
        echo "&nbsp;";
        if (($this->getAttribute(($context["v"] ?? null), "status", array()) == "done")) {
            echo "<i class=\"text-success far fa-check-square fa-2x\"></i>";
        } else {
            echo "<i class=\"far fa-square fa-2x\"></i>";
        }
        echo "</h3>
                                        <div class=\"table-data-feature\">
                                                        <a href =\"/projects/edit/";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Edit\">
                                                            <i class=\"zmdi zmdi-edit\"></i>
                                                        </a>
                                                        <a href =\"/projects/delete/";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Delete\">
                                                            <i class=\"zmdi zmdi-delete\"></i>
                                                        </a>
                                                       ";
        // line 26
        echo "                                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-top-campaign\">
                                            <tbody>
                                                <tr>
                                                    <td>Description</td>
                                                    <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "desc", array()), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "status", array()), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>Assigned to</td>
                                                    <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "assigned", array()), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>Priority</td>
                                                    <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "priority", array()), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>Date Added</td>
                                                    <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["v"] ?? null), "dateAdded", array()), "Y-d-m"), "html", null, true);
        echo "</td>
                                                </tr>
                                           
                                  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
      
<div class=\"user-data m-b-30\">
                                    <h3 class=\"title-3 m-b-30\">
                                        <i class=\"zmdi zmdi-account-calendar\"></i>Tasks</h3>
                                    <div class=\"filters m-b-45\">
  <div class=\"table-data__tool-right\">
                                        <a href=\"/tasks/add/";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                                            <i class=\"zmdi zmdi-plus\"></i>add task</a>
                                        
                                    </div>

                                    </div>
                                    <div class=\"table-responsive table-data\">
                                        <table id=\"tasks\" class=\"table\">
                                            <thead>
                                                <tr>
                                                    <td>
                                                       Is Done?
                                                    </td>
                                                    <td>Description</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 81
            echo "                                                <tr ";
            if (($this->getAttribute($context["t"], "isDone", array()) == "true")) {
                echo "style=\"text-decoration:line-through\"";
            }
            echo ">
                                                    <td>
                                                        <label class=\"au-checkbox\">
                                                            <input id=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\" ";
            if (($this->getAttribute($context["t"], "isDone", array()) == "true")) {
                echo "checked";
            }
            echo ">
                                                            <span class=\"au-checkmark\"></span>
                                                        </label>
                                                    </td>
                                                       <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "desc", array()), "html", null, true);
            echo "</td>
                                                    <td>
                                                        <div class=\"table-data-feature\">
                                                        <a href =\"/tasks/edit/";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
            echo "\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Edit\">
                                                            <i class=\"zmdi zmdi-edit\"></i>
                                                        </a>
                                                        <a href =\"/task/delete/";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
            echo "\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Delete\">
                                                            <i class=\"zmdi zmdi-delete\"></i>
                                                        </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "

                                            </tbody>
                                        </table>
                                    </div>

                                </div>


<a href=\"/projects\" class=\"btn btn-primary btn-block btn-lg pull-right\"><i class=\"zmdi zmdi-arrow-left\"></i> Back To Projects</a>



          <br><br>

";
    }

    // line 118
    public function block_scripts($context, array $blocks = array())
    {
        // line 119
        echo "<script>
\$( document ).ready(function() {
    
    \$(':checkbox').change(function() { 
        var isDoneRaw;
        var id = this.id;
       
            if (\$(this).is(':checked')) {
                               isDoneRaw = 'true';
                                \$(this).closest(\"tr\").css(\"text-decoration\", \"line-through\"); 
                                }else{
                               isDoneRaw = 'false';
                                \$(this).closest(\"tr\").css(\"text-decoration\", \"none\"); 
                                } 
               \$.ajax({
                            url: \"http://66.170.180.206/api/task/update\", 
                            data: JSON.stringify({
                                 \"isDone\": isDoneRaw,
                                 \"id\":id
                            }),
                            type: \"PUT\",
                            dataType: \"json\"
                        })
     }); 

});

</script>

";
    }

    public function getTemplateName()
    {
        return "projectview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 119,  213 => 118,  194 => 101,  181 => 94,  175 => 91,  169 => 88,  158 => 84,  149 => 81,  145 => 80,  124 => 62,  107 => 48,  100 => 44,  93 => 40,  86 => 36,  79 => 32,  71 => 26,  65 => 20,  59 => 17,  48 => 15,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
                                <div class=\"statistic__item\">
                                    <h2 class=\"number\">{{total}}</h2>
                                    <span class=\"desc\">Hours Spent on this project</span>
                                    
                                    <div class=\"icon\">
                                        <i class=\"zmdi zmdi-time\"></i>
                                    </div>
                                   
                                </div>
                            <div class=\"top-campaign\">

                                    <h3 class=\"title-3 m-b-30\">{{v.title}}&nbsp;{% if v.status == 'done' %}<i class=\"text-success far fa-check-square fa-2x\"></i>{% else %}<i class=\"far fa-square fa-2x\"></i>{% endif %}</h3>
                                        <div class=\"table-data-feature\">
                                                        <a href =\"/projects/edit/{{v.id}}\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Edit\">
                                                            <i class=\"zmdi zmdi-edit\"></i>
                                                        </a>
                                                        <a href =\"/projects/delete/{{v.id}}\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Delete\">
                                                            <i class=\"zmdi zmdi-delete\"></i>
                                                        </a>
                                                       {#} <a class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"More\">
                                                            <i class=\"zmdi zmdi-more\"></i>
                                                        </a>#}
                                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-top-campaign\">
                                            <tbody>
                                                <tr>
                                                    <td>Description</td>
                                                    <td>{{v.desc}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>{{v.status}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Assigned to</td>
                                                    <td>{{v.assigned}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Priority</td>
                                                    <td>{{v.priority}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Date Added</td>
                                                    <td>{{v.dateAdded|date(\"Y-d-m\")}}</td>
                                                </tr>
                                           
                                  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
      
<div class=\"user-data m-b-30\">
                                    <h3 class=\"title-3 m-b-30\">
                                        <i class=\"zmdi zmdi-account-calendar\"></i>Tasks</h3>
                                    <div class=\"filters m-b-45\">
  <div class=\"table-data__tool-right\">
                                        <a href=\"/tasks/add/{{v.id}}\" class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                                            <i class=\"zmdi zmdi-plus\"></i>add task</a>
                                        
                                    </div>

                                    </div>
                                    <div class=\"table-responsive table-data\">
                                        <table id=\"tasks\" class=\"table\">
                                            <thead>
                                                <tr>
                                                    <td>
                                                       Is Done?
                                                    </td>
                                                    <td>Description</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              {% for t in tasks %}
                                                <tr {% if t.isDone == 'true' %}style=\"text-decoration:line-through\"{% endif %}>
                                                    <td>
                                                        <label class=\"au-checkbox\">
                                                            <input id=\"{{t.id}}\" type=\"checkbox\" {% if t.isDone == 'true' %}checked{% endif %}>
                                                            <span class=\"au-checkmark\"></span>
                                                        </label>
                                                    </td>
                                                       <td>{{t.desc}}</td>
                                                    <td>
                                                        <div class=\"table-data-feature\">
                                                        <a href =\"/tasks/edit/{{t.id}}\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Edit\">
                                                            <i class=\"zmdi zmdi-edit\"></i>
                                                        </a>
                                                        <a href =\"/task/delete/{{t.id}}\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Delete\">
                                                            <i class=\"zmdi zmdi-delete\"></i>
                                                        </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            {% endfor %}


                                            </tbody>
                                        </table>
                                    </div>

                                </div>


<a href=\"/projects\" class=\"btn btn-primary btn-block btn-lg pull-right\"><i class=\"zmdi zmdi-arrow-left\"></i> Back To Projects</a>



          <br><br>

{% endblock %}

{% block scripts %}
<script>
\$( document ).ready(function() {
    
    \$(':checkbox').change(function() { 
        var isDoneRaw;
        var id = this.id;
       
            if (\$(this).is(':checked')) {
                               isDoneRaw = 'true';
                                \$(this).closest(\"tr\").css(\"text-decoration\", \"line-through\"); 
                                }else{
                               isDoneRaw = 'false';
                                \$(this).closest(\"tr\").css(\"text-decoration\", \"none\"); 
                                } 
               \$.ajax({
                            url: \"http://66.170.180.206/api/task/update\", 
                            data: JSON.stringify({
                                 \"isDone\": isDoneRaw,
                                 \"id\":id
                            }),
                            type: \"PUT\",
                            dataType: \"json\"
                        })
     }); 

});

</script>

{% endblock %}
", "projectview.html.twig", "C:\\inetpub\\RKProjects\\templates\\projectview.html.twig");
    }
}
