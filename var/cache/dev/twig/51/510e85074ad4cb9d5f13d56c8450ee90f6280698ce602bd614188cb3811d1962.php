<?php

/* HTLImmobilierBundle:Front:accueil.html.twig */
class __TwigTemplate_afa557905a675e3bee7afd78e2c3e18941139f0809c818ed030a4dd2b27bf1ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::pageadmin.html.twig", "HTLImmobilierBundle:Front:accueil.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::pageadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0399b65b47295993daa43917f93247ecca9dd383b6cf92719f7afb1be0a436a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0399b65b47295993daa43917f93247ecca9dd383b6cf92719f7afb1be0a436a3->enter($__internal_0399b65b47295993daa43917f93247ecca9dd383b6cf92719f7afb1be0a436a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:accueil.html.twig"));

        $__internal_05c418fe639a19a712978f52cbd2f002717b259a24655eaaf0f67f363c9c0c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c418fe639a19a712978f52cbd2f002717b259a24655eaaf0f67f363c9c0c05->enter($__internal_05c418fe639a19a712978f52cbd2f002717b259a24655eaaf0f67f363c9c0c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0399b65b47295993daa43917f93247ecca9dd383b6cf92719f7afb1be0a436a3->leave($__internal_0399b65b47295993daa43917f93247ecca9dd383b6cf92719f7afb1be0a436a3_prof);

        
        $__internal_05c418fe639a19a712978f52cbd2f002717b259a24655eaaf0f67f363c9c0c05->leave($__internal_05c418fe639a19a712978f52cbd2f002717b259a24655eaaf0f67f363c9c0c05_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:accueil.html.twig";
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
        return new Twig_Source("{% extends \"::pageadmin.html.twig\" %}

      ", "HTLImmobilierBundle:Front:accueil.html.twig", "/var/www/html/test2hortala/src/HTL/ImmobilierBundle/Resources/views/Front/accueil.html.twig");
    }
}
