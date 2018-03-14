<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8fb0a95e2d5c765dd83f0e7bd9221b26b5d3d1500864e4581b4c2e6c39eab5b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c30d5c0785715a3b7d610d9625fbc401553a7926711b58f359f481b567154cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30d5c0785715a3b7d610d9625fbc401553a7926711b58f359f481b567154cc0->enter($__internal_c30d5c0785715a3b7d610d9625fbc401553a7926711b58f359f481b567154cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c06e7a485755780be9217c6bc4cd4ccad252677c96d67912191cc411d52a6fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06e7a485755780be9217c6bc4cd4ccad252677c96d67912191cc411d52a6fc7->enter($__internal_c06e7a485755780be9217c6bc4cd4ccad252677c96d67912191cc411d52a6fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c30d5c0785715a3b7d610d9625fbc401553a7926711b58f359f481b567154cc0->leave($__internal_c30d5c0785715a3b7d610d9625fbc401553a7926711b58f359f481b567154cc0_prof);

        
        $__internal_c06e7a485755780be9217c6bc4cd4ccad252677c96d67912191cc411d52a6fc7->leave($__internal_c06e7a485755780be9217c6bc4cd4ccad252677c96d67912191cc411d52a6fc7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a44151784734bfa0f3d43bd630430efd0e72ad55244bc27b87f6519fa5da8f0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44151784734bfa0f3d43bd630430efd0e72ad55244bc27b87f6519fa5da8f0b->enter($__internal_a44151784734bfa0f3d43bd630430efd0e72ad55244bc27b87f6519fa5da8f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9d37f4ce206b1e2334109d79bdd2369fa956b6e1809ab5abbfe92b809a8e05ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d37f4ce206b1e2334109d79bdd2369fa956b6e1809ab5abbfe92b809a8e05ef->enter($__internal_9d37f4ce206b1e2334109d79bdd2369fa956b6e1809ab5abbfe92b809a8e05ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9d37f4ce206b1e2334109d79bdd2369fa956b6e1809ab5abbfe92b809a8e05ef->leave($__internal_9d37f4ce206b1e2334109d79bdd2369fa956b6e1809ab5abbfe92b809a8e05ef_prof);

        
        $__internal_a44151784734bfa0f3d43bd630430efd0e72ad55244bc27b87f6519fa5da8f0b->leave($__internal_a44151784734bfa0f3d43bd630430efd0e72ad55244bc27b87f6519fa5da8f0b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/test2hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
