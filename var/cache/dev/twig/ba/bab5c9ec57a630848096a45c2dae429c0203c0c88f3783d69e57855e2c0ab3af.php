<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_677c3f2f9313e200db4b7d2cfccebe243c6daaad2009789dccbd3915ca97049d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b080fb386f89ff6211b42c78be5b66b1c302c65bbda8b81fd670a4514c2f513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b080fb386f89ff6211b42c78be5b66b1c302c65bbda8b81fd670a4514c2f513->enter($__internal_0b080fb386f89ff6211b42c78be5b66b1c302c65bbda8b81fd670a4514c2f513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_84f469e96ec653a1e343de5b1f492e6c4dd8931f2458e77d4bef52fabdaa3b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f469e96ec653a1e343de5b1f492e6c4dd8931f2458e77d4bef52fabdaa3b69->enter($__internal_84f469e96ec653a1e343de5b1f492e6c4dd8931f2458e77d4bef52fabdaa3b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b080fb386f89ff6211b42c78be5b66b1c302c65bbda8b81fd670a4514c2f513->leave($__internal_0b080fb386f89ff6211b42c78be5b66b1c302c65bbda8b81fd670a4514c2f513_prof);

        
        $__internal_84f469e96ec653a1e343de5b1f492e6c4dd8931f2458e77d4bef52fabdaa3b69->leave($__internal_84f469e96ec653a1e343de5b1f492e6c4dd8931f2458e77d4bef52fabdaa3b69_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cce7e13c760e9b3edf611722fbedc316a377bbab27d07851361254e86779b2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cce7e13c760e9b3edf611722fbedc316a377bbab27d07851361254e86779b2e0->enter($__internal_cce7e13c760e9b3edf611722fbedc316a377bbab27d07851361254e86779b2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ef0ba1ede359fda5cd2d7ce4202f60373f8a3ede3d463c9a3c83f078fe35e8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0ba1ede359fda5cd2d7ce4202f60373f8a3ede3d463c9a3c83f078fe35e8fc->enter($__internal_ef0ba1ede359fda5cd2d7ce4202f60373f8a3ede3d463c9a3c83f078fe35e8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef0ba1ede359fda5cd2d7ce4202f60373f8a3ede3d463c9a3c83f078fe35e8fc->leave($__internal_ef0ba1ede359fda5cd2d7ce4202f60373f8a3ede3d463c9a3c83f078fe35e8fc_prof);

        
        $__internal_cce7e13c760e9b3edf611722fbedc316a377bbab27d07851361254e86779b2e0->leave($__internal_cce7e13c760e9b3edf611722fbedc316a377bbab27d07851361254e86779b2e0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c41e0f1b5832e68265d9c6e049a48b1730cf83fa8ae866861f5b7d83558426ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41e0f1b5832e68265d9c6e049a48b1730cf83fa8ae866861f5b7d83558426ed->enter($__internal_c41e0f1b5832e68265d9c6e049a48b1730cf83fa8ae866861f5b7d83558426ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4cd3ed56390ef7f95d32ad3bbdc67e9f2bd28094ca6fa99ff8b11dc04a415e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd3ed56390ef7f95d32ad3bbdc67e9f2bd28094ca6fa99ff8b11dc04a415e8b->enter($__internal_4cd3ed56390ef7f95d32ad3bbdc67e9f2bd28094ca6fa99ff8b11dc04a415e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4cd3ed56390ef7f95d32ad3bbdc67e9f2bd28094ca6fa99ff8b11dc04a415e8b->leave($__internal_4cd3ed56390ef7f95d32ad3bbdc67e9f2bd28094ca6fa99ff8b11dc04a415e8b_prof);

        
        $__internal_c41e0f1b5832e68265d9c6e049a48b1730cf83fa8ae866861f5b7d83558426ed->leave($__internal_c41e0f1b5832e68265d9c6e049a48b1730cf83fa8ae866861f5b7d83558426ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2beb2b9e3354e9661bfe35af23390a40e57b20ccfbf8a547023d74cb654dcc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2beb2b9e3354e9661bfe35af23390a40e57b20ccfbf8a547023d74cb654dcc20->enter($__internal_2beb2b9e3354e9661bfe35af23390a40e57b20ccfbf8a547023d74cb654dcc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_364a60f1cffb07440e2834c53b52e17c0e72ce0076b793489d3ac3809877132c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364a60f1cffb07440e2834c53b52e17c0e72ce0076b793489d3ac3809877132c->enter($__internal_364a60f1cffb07440e2834c53b52e17c0e72ce0076b793489d3ac3809877132c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_364a60f1cffb07440e2834c53b52e17c0e72ce0076b793489d3ac3809877132c->leave($__internal_364a60f1cffb07440e2834c53b52e17c0e72ce0076b793489d3ac3809877132c_prof);

        
        $__internal_2beb2b9e3354e9661bfe35af23390a40e57b20ccfbf8a547023d74cb654dcc20->leave($__internal_2beb2b9e3354e9661bfe35af23390a40e57b20ccfbf8a547023d74cb654dcc20_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/test2hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
