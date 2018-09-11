<?php

/* projects_addedit.html.twig */
class __TwigTemplate_d8cbfbc1c97f1951edb41821b1efdc3c31b0c9388340d74b94b975101029bdec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "projects_addedit.html.twig", 1);
        $this->blocks = array(
            'overview' => array($this, 'block_overview'),
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

    // line 2
    public function block_overview($context, array $blocks = array())
    {
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

                 <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <strong>Project</strong>
                                        <small> ";
        // line 10
        if (($context["isEditing"] ?? null)) {
            echo "Edit";
        } else {
            echo "Add";
        }
        echo "</small>
                                    </div>
                                    <div class=\"card-body card-block\">
                       
<form method=\"post\">
  <div class=\"form-group\">
    <label for=\"title\">Title</label>
    <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "title", array()), "html", null, true);
        echo "\" placeholder=\"Enter title\">
  </div>
<div class=\"form-group\">
    <label for=\"desc\">Desc</label>
   <textarea id=\"desc\" name=\"desc\" class=\"form-control\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "desc", array()), "html", null, true);
        echo "</textarea>
    </div>
 <div class=\"form-group\">
    <label for=\"assign\">Assign To:</label>
    <select class=\"form-control\" id=\"assign\" name=\"assign\">
     
      <option value=\"\">Unassigned</option>
      ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 29
            echo "       <option ";
            if (($this->getAttribute(($context["v"] ?? null), "assigned", array()) == $this->getAttribute($context["e"], "name", array()))) {
                echo "selected";
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
        // line 31
        echo "    </select>
  </div>

<div class=\"form-group\">
    <label for=\"status\">Status</label>
    <select class=\"form-control\" id=\"status\" name=\"status\">
      <option ";
        // line 37
        if (($this->getAttribute(($context["v"] ?? null), "status", array()) == "inProgress")) {
            echo "selected";
        }
        echo " value=\"inProgress\">In Progress</option>
      <option ";
        // line 38
        if (($this->getAttribute(($context["v"] ?? null), "status", array()) == "done")) {
            echo "selected";
        }
        echo " value=\"done\">Complete</option>
      <option ";
        // line 39
        if (($this->getAttribute(($context["v"] ?? null), "status", array()) == "onHold")) {
            echo "selected";
        }
        echo " value=\"onHold\">On Hold</option>
      <option ";
        // line 40
        if (($this->getAttribute(($context["v"] ?? null), "status", array()) == "todo")) {
            echo "selected";
        }
        echo " value=\"todo\">Todo</option>
    </select>
  </div>
 
  <div class=\"form-group\">
    <label for=\"priority\">Priority</label>
    <input value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "priority", array()), "html", null, true);
        echo "\" type=\"number\" class=\"form-control\" id=\"priority\" name=\"priority\" placeholder=\"Priority level\">
  </div>
";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 49
            echo "<p class=\"text-danger\">";
            echo twig_escape_filter($this->env, $context["e"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "<br>
 <div class=\"row\"> 
 <div class=\"col\"><button type=\"submit\" class=\"btn btn-success btn-block btn-lg\">";
        // line 53
        if (($context["isEditing"] ?? null)) {
            echo "Save";
        } else {
            echo "Add";
        }
        echo "</button></div>
 ";
        // line 55
        echo " </div>
</form>



                                    </div>
                                </div>
                            </div>





";
    }

    public function getTemplateName()
    {
        return "projects_addedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 55,  154 => 53,  150 => 51,  141 => 49,  137 => 48,  132 => 46,  121 => 40,  115 => 39,  109 => 38,  103 => 37,  95 => 31,  80 => 29,  76 => 28,  66 => 21,  59 => 17,  45 => 10,  37 => 4,  34 => 3,  29 => 2,  11 => 1,);
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
{% block overview %}{% endblock %}
{% block content %}


                 <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <strong>Project</strong>
                                        <small> {% if isEditing %}Edit{% else %}Add{% endif %}</small>
                                    </div>
                                    <div class=\"card-body card-block\">
                       
<form method=\"post\">
  <div class=\"form-group\">
    <label for=\"title\">Title</label>
    <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" value=\"{{v.title}}\" placeholder=\"Enter title\">
  </div>
<div class=\"form-group\">
    <label for=\"desc\">Desc</label>
   <textarea id=\"desc\" name=\"desc\" class=\"form-control\">{{v.desc}}</textarea>
    </div>
 <div class=\"form-group\">
    <label for=\"assign\">Assign To:</label>
    <select class=\"form-control\" id=\"assign\" name=\"assign\">
     
      <option value=\"\">Unassigned</option>
      {% for e in employees %}
       <option {% if v.assigned == e.name %}selected{% endif %} value=\"{{e.name}}\">{{e.name}}</option>
      {% endfor %}
    </select>
  </div>

<div class=\"form-group\">
    <label for=\"status\">Status</label>
    <select class=\"form-control\" id=\"status\" name=\"status\">
      <option {% if v.status == \"inProgress\" %}selected{% endif %} value=\"inProgress\">In Progress</option>
      <option {% if v.status == \"done\" %}selected{% endif %} value=\"done\">Complete</option>
      <option {% if v.status == \"onHold\" %}selected{% endif %} value=\"onHold\">On Hold</option>
      <option {% if v.status == \"todo\" %}selected{% endif %} value=\"todo\">Todo</option>
    </select>
  </div>
 
  <div class=\"form-group\">
    <label for=\"priority\">Priority</label>
    <input value=\"{{v.priority}}\" type=\"number\" class=\"form-control\" id=\"priority\" name=\"priority\" placeholder=\"Priority level\">
  </div>
{% for e in errorList %}
<p class=\"text-danger\">{{e}}</p>
{% endfor %}
<br>
 <div class=\"row\"> 
 <div class=\"col\"><button type=\"submit\" class=\"btn btn-success btn-block btn-lg\">{% if isEditing %}Save{% else %}Add{% endif %}</button></div>
 {#<div class=\"col\"><a href=\"/projects\" class=\"btn btn-primary btn-block btn-lg pull-right\"><i class=\"zmdi zmdi-arrow-left\"></i> Back To Projects</a></div>#}
 </div>
</form>



                                    </div>
                                </div>
                            </div>





{% endblock %}", "projects_addedit.html.twig", "C:\\inetpub\\RKProjects\\templates\\projects_addedit.html.twig");
    }
}
