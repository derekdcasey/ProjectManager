<?php

/* cant_delete.html.twig */
class __TwigTemplate_e2f856b80b8150c016ce7c3a4b09b7946a4c444fce0c990674198dbbc3afc9a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "cant_delete.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Can't Delete</h1>
<br>
<p class=\"text-danger\">Project still has an active user!</p>
<p class=\"text-danger\">Please remove the user from the project if you want to delete it.</p>
<br>
<a class=\"btn btn-lg btn-primary\" href=\"/projects\">Go Back</a>
";
    }

    public function getTemplateName()
    {
        return "cant_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
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
<h1>Can't Delete</h1>
<br>
<p class=\"text-danger\">Project still has an active user!</p>
<p class=\"text-danger\">Please remove the user from the project if you want to delete it.</p>
<br>
<a class=\"btn btn-lg btn-primary\" href=\"/projects\">Go Back</a>
{% endblock %}", "cant_delete.html.twig", "C:\\inetpub\\RKProjects\\templates\\cant_delete.html.twig");
    }
}
