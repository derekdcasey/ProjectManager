<?php

/* employees_addedit.html.twig */
class __TwigTemplate_dd3bdd5faea86442c6f60decfc62af8aefd71e54fbcc3f71d5233c7e84776ac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "employees_addedit.html.twig", 1);
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
                                        <strong>User</strong>
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
                       
<form method=\"post\"  enctype=\"multipart/form-data\">
  <div class=\"form-group\" >
    <label for=\"title\">Name</label>
    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "name", array()), "html", null, true);
        echo "\" placeholder=\"Enter Name\">
  </div>


 
  <div class=\"form-group\">
    <label for=\"priority\">Image</label>
   <input class=\"form-control\" type=\"file\" name=\"userImage\" accept=\"image/*\">
  </div>
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 27
            echo "<p class=\"text-danger\">";
            echo twig_escape_filter($this->env, $context["e"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<br>

  <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">";
        // line 31
        if (($context["isEditing"] ?? null)) {
            echo "Save";
        } else {
            echo "Add";
        }
        echo "</button>
</form>



                                    </div>
                                </div>
                            </div>





";
    }

    public function getTemplateName()
    {
        return "employees_addedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  84 => 29,  75 => 27,  71 => 26,  59 => 17,  45 => 10,  37 => 4,  34 => 3,  29 => 2,  11 => 1,);
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
                                        <strong>User</strong>
                                        <small> {% if isEditing %}Edit{% else %}Add{% endif %}</small>
                                    </div>
                                    <div class=\"card-body card-block\">
                       
<form method=\"post\"  enctype=\"multipart/form-data\">
  <div class=\"form-group\" >
    <label for=\"title\">Name</label>
    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"{{v.name}}\" placeholder=\"Enter Name\">
  </div>


 
  <div class=\"form-group\">
    <label for=\"priority\">Image</label>
   <input class=\"form-control\" type=\"file\" name=\"userImage\" accept=\"image/*\">
  </div>
{% for e in errorList %}
<p class=\"text-danger\">{{e}}</p>
{% endfor %}
<br>

  <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">{% if isEditing %}Save{% else %}Add{% endif %}</button>
</form>



                                    </div>
                                </div>
                            </div>





{% endblock %}", "employees_addedit.html.twig", "C:\\inetpub\\RKProjects\\templates\\employees_addedit.html.twig");
    }
}
