<?php

/* HTLImmobilierBundle:Admin:log.html.twig */
class __TwigTemplate_78d3cc6e50451a9365d5b50782e53b580d2fa1fc43ab7f144bc0f2ab8e0a52fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::adminpage.html.twig", "HTLImmobilierBundle:Admin:log.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::adminpage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e1400098eaf5c1b901c607d541896c1d0d92b6890861558784e1d3af9757dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1400098eaf5c1b901c607d541896c1d0d92b6890861558784e1d3af9757dc6->enter($__internal_5e1400098eaf5c1b901c607d541896c1d0d92b6890861558784e1d3af9757dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:log.html.twig"));

        $__internal_44cf877f4606010e08162a7e27e49c2483109e9f50cfcd17929814fc5a9e2f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cf877f4606010e08162a7e27e49c2483109e9f50cfcd17929814fc5a9e2f01->enter($__internal_44cf877f4606010e08162a7e27e49c2483109e9f50cfcd17929814fc5a9e2f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:log.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e1400098eaf5c1b901c607d541896c1d0d92b6890861558784e1d3af9757dc6->leave($__internal_5e1400098eaf5c1b901c607d541896c1d0d92b6890861558784e1d3af9757dc6_prof);

        
        $__internal_44cf877f4606010e08162a7e27e49c2483109e9f50cfcd17929814fc5a9e2f01->leave($__internal_44cf877f4606010e08162a7e27e49c2483109e9f50cfcd17929814fc5a9e2f01_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Admin:log.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::adminpage.html.twig\" %}

", "HTLImmobilierBundle:Admin:log.html.twig", "/var/www/html/test2hortala/src/HTL/ImmobilierBundle/Resources/views/Admin/log.html.twig");
    }
}
