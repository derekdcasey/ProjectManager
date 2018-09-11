<?php

/* tasks_delete.html.twig */
class __TwigTemplate_d8c372c79446b891904b6c2e8fd02db2c96e1ae72654929cacc2dd4dbf942407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "tasks_delete.html.twig", 1);
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Confirm delete</h1>
   <p><b>Are you sure you want to delete this task?</b></p>
    <form method=\"post\" style=\"display: inline;\">
        <input class=\"btn btn-success\" type=\"submit\" value=\"Cancel\">
    </form>
  
    <form method=\"post\"  style=\"display: inline;\">
        <input type=\"hidden\" name=\"confirmed\" value=\"true\">
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
    </form>
    <br>
    <br>
    <div>
        <p>Description: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "desc", array()), "html", null, true);
        echo "</p>
    </div>


";
    }

    public function getTemplateName()
    {
        return "tasks_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 19,  31 => 6,  28 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}



{% block content %}
<h1>Confirm delete</h1>
   <p><b>Are you sure you want to delete this task?</b></p>
    <form method=\"post\" style=\"display: inline;\">
        <input class=\"btn btn-success\" type=\"submit\" value=\"Cancel\">
    </form>
  
    <form method=\"post\"  style=\"display: inline;\">
        <input type=\"hidden\" name=\"confirmed\" value=\"true\">
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
    </form>
    <br>
    <br>
    <div>
        <p>Description: {{p.desc}}</p>
    </div>


{% endblock %}", "tasks_delete.html.twig", "C:\\inetpub\\RKProjects\\templates\\tasks_delete.html.twig");
    }
}
