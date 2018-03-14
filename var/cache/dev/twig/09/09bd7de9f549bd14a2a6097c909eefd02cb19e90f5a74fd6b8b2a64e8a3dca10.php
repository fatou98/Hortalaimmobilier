<?php

/* HTLImmobilierBundle:Reservation:accueil.html.twig */
class __TwigTemplate_d9234811e23e6b86742f77afdda82d64da96360f917d01075bbcd713897f119b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::prop.html.twig", "HTLImmobilierBundle:Reservation:accueil.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::prop.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4545f97e10df1f054cfb0f609151a2ee9cb0719bb217b7788f663af0f6d201a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4545f97e10df1f054cfb0f609151a2ee9cb0719bb217b7788f663af0f6d201a4->enter($__internal_4545f97e10df1f054cfb0f609151a2ee9cb0719bb217b7788f663af0f6d201a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Reservation:accueil.html.twig"));

        $__internal_078d7a1146e3abc3a43da462cbdbbe76977d42f6bbd1d211cd39d0b401cdf1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078d7a1146e3abc3a43da462cbdbbe76977d42f6bbd1d211cd39d0b401cdf1f7->enter($__internal_078d7a1146e3abc3a43da462cbdbbe76977d42f6bbd1d211cd39d0b401cdf1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Reservation:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4545f97e10df1f054cfb0f609151a2ee9cb0719bb217b7788f663af0f6d201a4->leave($__internal_4545f97e10df1f054cfb0f609151a2ee9cb0719bb217b7788f663af0f6d201a4_prof);

        
        $__internal_078d7a1146e3abc3a43da462cbdbbe76977d42f6bbd1d211cd39d0b401cdf1f7->leave($__internal_078d7a1146e3abc3a43da462cbdbbe76977d42f6bbd1d211cd39d0b401cdf1f7_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Reservation:accueil.html.twig";
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
        return new Twig_Source("{% extends \"::prop.html.twig\" %}
", "HTLImmobilierBundle:Reservation:accueil.html.twig", "/var/www/html/tempintegrer/src/HTL/ImmobilierBundle/Resources/views/Reservation/accueil.html.twig");
    }
}
