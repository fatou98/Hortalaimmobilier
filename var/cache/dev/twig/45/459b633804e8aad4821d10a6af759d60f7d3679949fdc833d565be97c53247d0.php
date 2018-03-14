<?php

/* HTLImmobilierBundle:Admin:table.html.twig */
class __TwigTemplate_2dee83efdc4dea0e41baf32055f7cab3591ce7d16699b9d752ccf93208a6e8cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::table.html.twig", "HTLImmobilierBundle:Admin:table.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_395b23667eeb1560dc460454a8e41278b0fb0195241fbed048084dd4f34ed258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395b23667eeb1560dc460454a8e41278b0fb0195241fbed048084dd4f34ed258->enter($__internal_395b23667eeb1560dc460454a8e41278b0fb0195241fbed048084dd4f34ed258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:table.html.twig"));

        $__internal_3823fced62142905ce849509fdc4e4c12b26e449f3042574eeb99110669b3ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3823fced62142905ce849509fdc4e4c12b26e449f3042574eeb99110669b3ed3->enter($__internal_3823fced62142905ce849509fdc4e4c12b26e449f3042574eeb99110669b3ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:table.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_395b23667eeb1560dc460454a8e41278b0fb0195241fbed048084dd4f34ed258->leave($__internal_395b23667eeb1560dc460454a8e41278b0fb0195241fbed048084dd4f34ed258_prof);

        
        $__internal_3823fced62142905ce849509fdc4e4c12b26e449f3042574eeb99110669b3ed3->leave($__internal_3823fced62142905ce849509fdc4e4c12b26e449f3042574eeb99110669b3ed3_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Admin:table.html.twig";
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
        return new Twig_Source("{% extends \"::table.html.twig\" %}

", "HTLImmobilierBundle:Admin:table.html.twig", "/var/www/html/test2hortala/src/HTL/ImmobilierBundle/Resources/views/Admin/table.html.twig");
    }
}
