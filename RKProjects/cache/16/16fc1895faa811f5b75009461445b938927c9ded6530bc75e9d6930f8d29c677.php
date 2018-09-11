<?php

/* tasks_addedit.html.twig */
class __TwigTemplate_97256b4bdf83565d901da042b292ae5b9e401a2dc496f7ddc4292b7a5500b5bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "tasks_addedit.html.twig", 1);
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
                                        <strong>Task</strong>
                                        <small> ";
        // line 10
        if (($context["isEditing"] ?? null)) {
            echo "Edit";
        } else {
            echo "Add";
        }
        echo "</small>
                                        <a href =\"/projects/view/";
        // line 11
        echo twig_escape_filter($this->env, ($context["projectId"] ?? null), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primarybtn-lg pull-right\">Go Back</a>
                                    </div>
                                    <div class=\"card-body card-block\">
                       
<form method=\"post\">
  <div class=\"form-group\" >
    <label for=\"title\">Task</label>
    <input type=\"text\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "desc", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"desc\" name=\"desc\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "desc", array()), "html", null, true);
        echo "\" placeholder=\"Enter Task\">
  </div>

";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 22
            echo "<p class=\"text-danger\">";
            echo twig_escape_filter($this->env, $context["e"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "<br>

  <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">";
        // line 26
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
        return "tasks_addedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  84 => 24,  75 => 22,  71 => 21,  63 => 18,  53 => 11,  45 => 10,  37 => 4,  34 => 3,  29 => 2,  11 => 1,);
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
                                        <strong>Task</strong>
                                        <small> {% if isEditing %}Edit{% else %}Add{% endif %}</small>
                                        <a href =\"/projects/view/{{projectId}}\" type=\"submit\" class=\"btn btn-primarybtn-lg pull-right\">Go Back</a>
                                    </div>
                                    <div class=\"card-body card-block\">
                       
<form method=\"post\">
  <div class=\"form-group\" >
    <label for=\"title\">Task</label>
    <input type=\"text\" value=\"{{v.desc}}\" class=\"form-control\" id=\"desc\" name=\"desc\" value=\"{{v.desc}}\" placeholder=\"Enter Task\">
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





{% endblock %}", "tasks_addedit.html.twig", "C:\\inetpub\\RKProjects\\templates\\tasks_addedit.html.twig");
    }
}
