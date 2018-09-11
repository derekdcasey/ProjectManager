<?php

/* workflow.html.twig */
class __TwigTemplate_3c12a70a76a00dcd060e66d6bec16473284218cffdd47dd171dd6b57efe796c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "workflow.html.twig", 1);
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
        echo "
\t <div class=\"au-card m-b-30\">
                                    <div class=\"au-card-inner\">
                                        <h3 class=\"title-2 m-b-40\">Project Workflows</h3>
                                                     <div class=\"rs-select2--light rs-select2--md\">

                                        <form method=\"POST\" id=\"filters\">
                                        <label for=\"status\">Status</label>
                                            <select class=\"form-control\" id=\"status\" name=\"status\" aria-hidden=\"true\">
                                                <option value=\"\">All</option>
                                                <option value=\"done\"";
        // line 14
        if ((($context["status"] ?? null) == "done")) {
            echo " selected";
        }
        echo " >Complete</option>
                                                <option value=\"onHold\" ";
        // line 15
        if ((($context["status"] ?? null) == "onHold")) {
            echo " selected";
        }
        echo " >On Hold</option>
                                                <option value=\"todo\" ";
        // line 16
        if ((($context["status"] ?? null) == "todo")) {
            echo " selected";
        }
        echo " >Todo</option>
                                                <option value=\"inProgress\" ";
        // line 17
        if ((($context["status"] ?? null) == "inProgress")) {
            echo " selected";
        }
        echo " >In Progress</option>
                                            </select>

                                        </div>

                                        <div class=\"rs-select2--light rs-select2--md\">

                                       
                                         <label for=\"time\">Time Scale</label>
                                            <select class=\"form-control\" id=\"time\" name=\"time\" aria-hidden=\"true\">
                                            <option value=\"hours\" ";
        // line 27
        if ((($context["time"] ?? null) == "hours")) {
            echo " selected";
        }
        echo ">Hours</option>
                                                <option value=\"minutes\"";
        // line 28
        if ((($context["time"] ?? null) == "minutes")) {
            echo " selected";
        }
        echo ">Minutes</option>
                                                <option value=\"days\"";
        // line 29
        if ((($context["time"] ?? null) == "days")) {
            echo " selected";
        }
        echo ">Days</option>
                                            </select>
                                      
                                        </div>

                                        <div class=\"rs-select2--light rs-select2--md\">
                                        <button type=\"submit\" class=\"au-btn au-btn-icon au-btn--blue au-btn--small\">
                                            <i class=\"zmdi zmdi-filter-list\"></i>Filter</button>
                                          </form>
                                    </div>
                                        <canvas id=\"myChart\"></canvas>
                                    </div>
                                </div>\t
\t\t\t
";
    }

    // line 44
    public function block_scripts($context, array $blocks = array())
    {
        // line 45
        echo "<script>
var ctx = document.getElementById(\"myChart\");
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: [";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo "\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
                echo "\"";
            } else {
                echo "\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
                echo "\",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
        datasets: [{
            label: '# of ";
        // line 52
        echo twig_escape_filter($this->env, ($context["time"] ?? null), "html", null, true);
        echo "',
             backgroundColor: 'rgba(13, 101, 57, 0.6)',
            data: [";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo " ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "total", array(), "array"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "total", array(), "array"), "html", null, true);
                echo ",";
            }
            echo " ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
            borderWidth: 1
        }]
    },
 options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                    suggestedMin: 0,
                    suggestedMax: 1000
                }
            }]
        }
    }
});


</script>

";
    }

    public function getTemplateName()
    {
        return "workflow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 54,  161 => 52,  120 => 50,  113 => 45,  110 => 44,  89 => 29,  83 => 28,  77 => 27,  62 => 17,  56 => 16,  50 => 15,  44 => 14,  32 => 4,  29 => 3,  11 => 1,);
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

\t <div class=\"au-card m-b-30\">
                                    <div class=\"au-card-inner\">
                                        <h3 class=\"title-2 m-b-40\">Project Workflows</h3>
                                                     <div class=\"rs-select2--light rs-select2--md\">

                                        <form method=\"POST\" id=\"filters\">
                                        <label for=\"status\">Status</label>
                                            <select class=\"form-control\" id=\"status\" name=\"status\" aria-hidden=\"true\">
                                                <option value=\"\">All</option>
                                                <option value=\"done\"{% if status =='done' %} selected{% endif %} >Complete</option>
                                                <option value=\"onHold\" {% if status =='onHold' %} selected{% endif %} >On Hold</option>
                                                <option value=\"todo\" {% if status =='todo' %} selected{% endif %} >Todo</option>
                                                <option value=\"inProgress\" {% if status =='inProgress' %} selected{% endif %} >In Progress</option>
                                            </select>

                                        </div>

                                        <div class=\"rs-select2--light rs-select2--md\">

                                       
                                         <label for=\"time\">Time Scale</label>
                                            <select class=\"form-control\" id=\"time\" name=\"time\" aria-hidden=\"true\">
                                            <option value=\"hours\" {% if time =='hours' %} selected{% endif %}>Hours</option>
                                                <option value=\"minutes\"{% if time =='minutes' %} selected{% endif %}>Minutes</option>
                                                <option value=\"days\"{% if time =='days' %} selected{% endif %}>Days</option>
                                            </select>
                                      
                                        </div>

                                        <div class=\"rs-select2--light rs-select2--md\">
                                        <button type=\"submit\" class=\"au-btn au-btn-icon au-btn--blue au-btn--small\">
                                            <i class=\"zmdi zmdi-filter-list\"></i>Filter</button>
                                          </form>
                                    </div>
                                        <canvas id=\"myChart\"></canvas>
                                    </div>
                                </div>\t
\t\t\t
{% endblock %}
{% block scripts %}
<script>
var ctx = document.getElementById(\"myChart\");
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: [{% for p in projects %}{% if loop.last %}\"{{p.title}}\"{% else %}\"{{p.title}}\",{% endif %}{% endfor %}],
        datasets: [{
            label: '# of {{time}}',
             backgroundColor: 'rgba(13, 101, 57, 0.6)',
            data: [{% for p in projects %} {% if loop.last %} {{p['total'] }} {% else %} {{p['total']}},{% endif %} {% endfor %}],
            borderWidth: 1
        }]
    },
 options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                    suggestedMin: 0,
                    suggestedMax: 1000
                }
            }]
        }
    }
});


</script>

{% endblock %} 
", "workflow.html.twig", "C:\\inetpub\\RKProjects\\templates\\workflow.html.twig");
    }
}
