<?php

/* projects_delete.html.twig */
class __TwigTemplate_149e6962af74af0ae7e1c9a7c70bce54a6af02d45f41fc767974a5b723bed2ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "projects_delete.html.twig", 1);
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
   <p><b>Are you sure you want to delete this project? This will also delete any workflows associated with this project.</b></p>
    <form method=\"post\" style=\"display: inline;\">
        <input class=\"btn btn-success\" type=\"submit\" value=\"Cancel\">
    </form>
  
    <form method=\"post\"  style=\"display: inline;\">
        <input type=\"hidden\" name=\"confirmed\" value=\"true\">
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
    </form>
    <div>
        <p>Title: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "title", array()), "html", null, true);
        echo "</p>
        <p>Description: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "desc", array()), "html", null, true);
        echo "</p>
        <p>Assigned: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "assigned", array()), "html", null, true);
        echo "</p>
        <p>Status: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "status", array()), "html", null, true);
        echo "</p>
        <p>Priority:";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "priority", array()), "html", null, true);
        echo "</p>
        <p>Start Date:";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "startDate", array()), "html", null, true);
        echo "</p>
    </div>


";
    }

    public function getTemplateName()
    {
        return "projects_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  60 => 21,  56 => 20,  52 => 19,  48 => 18,  44 => 17,  31 => 6,  28 => 5,  11 => 1,);
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
   <p><b>Are you sure you want to delete this project? This will also delete any workflows associated with this project.</b></p>
    <form method=\"post\" style=\"display: inline;\">
        <input class=\"btn btn-success\" type=\"submit\" value=\"Cancel\">
    </form>
  
    <form method=\"post\"  style=\"display: inline;\">
        <input type=\"hidden\" name=\"confirmed\" value=\"true\">
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
    </form>
    <div>
        <p>Title: {{p.title}}</p>
        <p>Description: {{p.desc}}</p>
        <p>Assigned: {{p.assigned}}</p>
        <p>Status: {{p.status}}</p>
        <p>Priority:{{p.priority}}</p>
        <p>Start Date:{{p.startDate}}</p>
    </div>


{% endblock %}", "projects_delete.html.twig", "C:\\inetpub\\RKProjects\\templates\\projects_delete.html.twig");
    }
}
