<?php

/* dashboard.html.twig */
class __TwigTemplate_d03879b95182ab577813907ea1e60d50e4cffcdc9e21259c0ceca09390b79727 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "dashboard.html.twig", 1);
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
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"overview-wrap\">
                                    <h2 class=\"title-1\">overview</h2>
                                </div>
                            </div>
                        </div>
                        <div class=\"row m-t-25\">
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"overview-item overview-item--c1\">
                                    <div class=\"overview__inner\">
                                        <div class=\"overview-box clearfix\">
                                            <div class=\"icon\">
                                                <i class=\"zmdi zmdi-account-o\"></i>
                                            </div>
                                            <div class=\"text\">
                                                <h2>10368</h2>
                                                <span>members online</span>
                                            </div>
                                        </div>
                                        <div class=\"overview-chart\">
                                            <canvas id=\"widgetChart1\"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"overview-item overview-item--c2\">
                                    <div class=\"overview__inner\">
                                        <div class=\"overview-box clearfix\">
                                            <div class=\"icon\">
                                                <i class=\"zmdi zmdi-shopping-cart\"></i>
                                            </div>
                                            <div class=\"text\">
                                                <h2>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["projectCount"] ?? null), "number", array()), "html", null, true);
        echo "</h2>
                                                <span>total projects</span>
                                            </div>
                                        </div>
                                        <div class=\"overview-chart\">
                                            <canvas id=\"widgetChart2\"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"overview-item overview-item--c3\">
                                    <div class=\"overview__inner\">
                                        <div class=\"overview-box clearfix\">
                                            <div class=\"icon\">
                                                <i class=\"zmdi zmdi-calendar-note\"></i>
                                            </div>
                                            <div class=\"text\">
                                                <h2>1,086</h2>
                                                <span>completed projects</span>
                                            </div>
                                        </div>
                                        <div class=\"overview-chart\">
                                            <canvas id=\"widgetChart3\"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"overview-item overview-item--c4\">
                                    <div class=\"overview__inner\">
                                        <div class=\"overview-box clearfix\">
                                            <div class=\"icon\">
                                                <i class=\"zmdi zmdi-money\"></i>
                                            </div>
                                            <div class=\"text\">
                                                <h2>\$1,060,386</h2>
                                                <span>total hours</span>
                                            </div>
                                        </div>
                                        <div class=\"overview-chart\">
                                            <canvas id=\"widgetChart4\"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            

<div class=\"row\">
<div class=\"col-lg-6\"><a href=\"/RKProjects/projects/add\" class=\"au-btn btn-block au-btn-icon au-btn--green\"><i class=\"zmdi zmdi-plus\"></i>add project</a></div>
<div class=\"col-lg-6\"><a href=\"/RKProjects/employees/add\" class=\"au-btn btn-block au-btn-icon au-btn--green\"><i class=\"zmdi zmdi-plus\"></i>add user</a></div>
</div>
<br><br>
<div class=\"row\">
  <div class=\"col\">
                                <div class=\"table-responsive table--no-card m-b-30\">
                                    <table class=\"table table-borderless table-striped table-earning\">
                                        <thead>
                                           
                                            <tr>
                                                <th>Title</th>
                                                <th>ID</th>
                                                <th>Assigned</th>
                                            
                                                <th >Desc</th>
                                                <th >Date Added</th>
                                                <th >Status</th>
                                                <th >Priority</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 112
            echo "                                         
                                        <tr>
                                                <td><a href=\"/projects/";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "title", array()), "html", null, true);
            echo " </a></td>
                                                <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "assigned", array()), "html", null, true);
            echo "</td>
                                                <td class=\"desc\">";
            // line 117
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["l"], "desc", array()), 0, 30), "html", null, true);
            echo "...</td>
                                                <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "dateAdded", array()), "html", null, true);
            echo "</td>
                                                <td><span class=\"badge badge-primary\">";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "status", array()), "html", null, true);
            echo "</span></td>
                                                <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "priority", array()), "html", null, true);
            echo "</td>                                             
                                            </tr>
                                      
                                            <tr class=\"spacer\"></tr>
                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo " 
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
 </div>
                            



";
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 124,  177 => 120,  173 => 119,  169 => 118,  165 => 117,  161 => 116,  157 => 115,  151 => 114,  147 => 112,  143 => 111,  68 => 39,  31 => 4,  28 => 3,  11 => 1,);
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
  
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"overview-wrap\">
                                    <h2 class=\"title-1\">overview</h2>
                                </div>
                            </div>
                        </div>
                        <div class=\"row m-t-25\">
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"overview-item overview-item--c1\">
                                    <div class=\"overview__inner\">
                                        <div class=\"overview-box clearfix\">
                                            <div class=\"icon\">
                                                <i class=\"zmdi zmdi-account-o\"></i>
                                            </div>
                                            <div class=\"text\">
                                                <h2>10368</h2>
                                                <span>members online</span>
                                            </div>
                                        </div>
                                        <div class=\"overview-chart\">
                                            <canvas id=\"widgetChart1\"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"overview-item overview-item--c2\">
                                    <div class=\"overview__inner\">
                                        <div class=\"overview-box clearfix\">
                                            <div class=\"icon\">
                                                <i class=\"zmdi zmdi-shopping-cart\"></i>
                                            </div>
                                            <div class=\"text\">
                                                <h2>{{projectCount.number}}</h2>
                                                <span>total projects</span>
                                            </div>
                                        </div>
                                        <div class=\"overview-chart\">
                                            <canvas id=\"widgetChart2\"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"overview-item overview-item--c3\">
                                    <div class=\"overview__inner\">
                                        <div class=\"overview-box clearfix\">
                                            <div class=\"icon\">
                                                <i class=\"zmdi zmdi-calendar-note\"></i>
                                            </div>
                                            <div class=\"text\">
                                                <h2>1,086</h2>
                                                <span>completed projects</span>
                                            </div>
                                        </div>
                                        <div class=\"overview-chart\">
                                            <canvas id=\"widgetChart3\"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 col-lg-3\">
                                <div class=\"overview-item overview-item--c4\">
                                    <div class=\"overview__inner\">
                                        <div class=\"overview-box clearfix\">
                                            <div class=\"icon\">
                                                <i class=\"zmdi zmdi-money\"></i>
                                            </div>
                                            <div class=\"text\">
                                                <h2>\$1,060,386</h2>
                                                <span>total hours</span>
                                            </div>
                                        </div>
                                        <div class=\"overview-chart\">
                                            <canvas id=\"widgetChart4\"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            

<div class=\"row\">
<div class=\"col-lg-6\"><a href=\"/RKProjects/projects/add\" class=\"au-btn btn-block au-btn-icon au-btn--green\"><i class=\"zmdi zmdi-plus\"></i>add project</a></div>
<div class=\"col-lg-6\"><a href=\"/RKProjects/employees/add\" class=\"au-btn btn-block au-btn-icon au-btn--green\"><i class=\"zmdi zmdi-plus\"></i>add user</a></div>
</div>
<br><br>
<div class=\"row\">
  <div class=\"col\">
                                <div class=\"table-responsive table--no-card m-b-30\">
                                    <table class=\"table table-borderless table-striped table-earning\">
                                        <thead>
                                           
                                            <tr>
                                                <th>Title</th>
                                                <th>ID</th>
                                                <th>Assigned</th>
                                            
                                                <th >Desc</th>
                                                <th >Date Added</th>
                                                <th >Status</th>
                                                <th >Priority</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {% for l in list %}
                                         
                                        <tr>
                                                <td><a href=\"/projects/{{l.id}}\">{{l.title}} </a></td>
                                                <td>{{l.id}}</td>
                                                <td>{{l.assigned}}</td>
                                                <td class=\"desc\">{{l.desc|slice(0,30)}}...</td>
                                                <td>{{l.dateAdded}}</td>
                                                <td><span class=\"badge badge-primary\">{{l.status}}</span></td>
                                                <td>{{l.priority}}</td>                                             
                                            </tr>
                                      
                                            <tr class=\"spacer\"></tr>
                                     {% endfor %} 
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
 </div>
                            



{% endblock %}", "dashboard.html.twig", "C:\\inetpub\\RKProjects\\templates\\dashboard.html.twig");
    }
}
