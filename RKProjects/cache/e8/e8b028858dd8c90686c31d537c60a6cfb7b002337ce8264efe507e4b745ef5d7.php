<?php

/* error_internal.html.twig */
class __TwigTemplate_994d0d6196a115747612d3052db39942cde2af361caa0ed52efcb8eedf96e7aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "error_internal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Internal error";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        echo "   
    <img src='/images/ninja.png'>
    <p>Internal error occured, we're very sorry. Our team of coding ninjas has been notified and is already working on the problem</p>
    <p><a href='/'>Click</a> to continue.</p>
    
";
    }

    public function getTemplateName()
    {
        return "error_internal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  29 => 2,  11 => 1,);
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
{% block title %}Internal error{% endblock %}

{% block content %}   
    <img src='/images/ninja.png'>
    <p>Internal error occured, we're very sorry. Our team of coding ninjas has been notified and is already working on the problem</p>
    <p><a href='/'>Click</a> to continue.</p>
    
{% endblock %}", "error_internal.html.twig", "C:\\inetpub\\RKProjects\\templates\\error_internal.html.twig");
    }
}
