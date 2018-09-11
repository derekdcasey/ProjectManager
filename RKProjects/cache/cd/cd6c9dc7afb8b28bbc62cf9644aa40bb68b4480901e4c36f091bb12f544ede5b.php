<?php

/* employees.html.twig */
class __TwigTemplate_0c365c26e24f48326674c79acab057b52a327558661a5b38ff1cb01df74d0400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "employees.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        echo "


<div class=\"top-campaign\">

                                    <h3 class=\"title-3 m-b-30\">Users</h3>
                                        <div class=\"pull-right\">
                                        <a href=\"/employees/add\" class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                                            <i class=\"zmdi zmdi-plus\"></i>add user</a> 
                                        </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-top-campaign\">
                                            <tbody>
                                            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["emp"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 18
            echo "                                                <tr>
                                                    <td>
                                                    <img class=\"smaller-image\" src=\"http://66.170.180.206";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "imgPath", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "\"></td>
                                                    
                                                    <td>
                                                    <div class=\"text\">
                                                                <h5 class=\"name\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "</h5>
                                                                <p class=\"text-success\">";
            // line 25
            if (($this->getAttribute($context["e"], "currentWorkflow", array()) != 0)) {
                echo "Active";
            }
            echo " </p>
                                                            </div></td>
                                                    <td>
                                                     <h5 class=\"name\">currently on</h5>
                                                     <p><strong>";
            // line 29
            if (($this->getAttribute($context["e"], "currentProj", array()) == 0)) {
                echo "Inactive";
            } else {
                echo "<a href=\"/projects/view/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "currentProj", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "projName", array()), "html", null, true);
                echo "</a>";
            }
            echo "</strong></p>
                                                    </td>
                                                    <td> ";
            // line 44
            echo "                                                    </td>
                                                </tr>
                                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
                                               
                                                            
                                           
                                  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>



";
    }

    public function getTemplateName()
    {
        return "employees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 47,  89 => 44,  76 => 29,  67 => 25,  63 => 24,  54 => 20,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
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



<div class=\"top-campaign\">

                                    <h3 class=\"title-3 m-b-30\">Users</h3>
                                        <div class=\"pull-right\">
                                        <a href=\"/employees/add\" class=\"au-btn au-btn-icon au-btn--green au-btn--small\">
                                            <i class=\"zmdi zmdi-plus\"></i>add user</a> 
                                        </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-top-campaign\">
                                            <tbody>
                                            {% for e in emp %}
                                                <tr>
                                                    <td>
                                                    <img class=\"smaller-image\" src=\"http://66.170.180.206{{e.imgPath}}\" alt=\"{{e.name}}\"></td>
                                                    
                                                    <td>
                                                    <div class=\"text\">
                                                                <h5 class=\"name\">{{e.name}}</h5>
                                                                <p class=\"text-success\">{% if e.currentWorkflow != 0 %}Active{% endif %} </p>
                                                            </div></td>
                                                    <td>
                                                     <h5 class=\"name\">currently on</h5>
                                                     <p><strong>{% if e.currentProj == 0 %}Inactive{% else %}<a href=\"/projects/view/{{e.currentProj}}\">{{e.projName}}</a>{% endif %}</strong></p>
                                                    </td>
                                                    <td> {#
                                                    <div class=\"table-data-feature\">
                                                        <a href =\"/employees/edit/{{e.id}}\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Edit\">
                                                            <i class=\"zmdi zmdi-edit\"></i>
                                                        </a>
                                                        <a href =\"/employees/delete/{{e.id}}\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Delete\">
                                                            <i class=\"zmdi zmdi-delete\"></i>
                                                        </a>
                                                        
                                                        <a class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"More\">
                                                            <i class=\"zmdi zmdi-more\"></i>
                                                        </a> 
                                                    </div>#}
                                                    </td>
                                                </tr>
                                               {% endfor %}

                                               
                                                            
                                           
                                  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>



{% endblock %}

", "employees.html.twig", "C:\\inetpub\\RKProjects\\templates\\employees.html.twig");
    }
}
