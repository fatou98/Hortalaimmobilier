<?php

/* HTLImmobilierBundle:Default:index.html.twig */
class __TwigTemplate_722df834f6c08c37847d9a91b074b819301311f3830dfce415fb867b9918df63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dae23397bbbd9cfab7e390068ea3556d7b76223ff281824c2d9513b622955519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae23397bbbd9cfab7e390068ea3556d7b76223ff281824c2d9513b622955519->enter($__internal_dae23397bbbd9cfab7e390068ea3556d7b76223ff281824c2d9513b622955519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Default:index.html.twig"));

        $__internal_98828909e505d8e6dce947facf60ee3e3da9010ac3b07c760c995c3067285a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98828909e505d8e6dce947facf60ee3e3da9010ac3b07c760c995c3067285a31->enter($__internal_98828909e505d8e6dce947facf60ee3e3da9010ac3b07c760c995c3067285a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
<body>
    Hello World!
</body>
</html>";
        
        $__internal_dae23397bbbd9cfab7e390068ea3556d7b76223ff281824c2d9513b622955519->leave($__internal_dae23397bbbd9cfab7e390068ea3556d7b76223ff281824c2d9513b622955519_prof);

        
        $__internal_98828909e505d8e6dce947facf60ee3e3da9010ac3b07c760c995c3067285a31->leave($__internal_98828909e505d8e6dce947facf60ee3e3da9010ac3b07c760c995c3067285a31_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<body>
    Hello World!
</body>
</html>", "HTLImmobilierBundle:Default:index.html.twig", "/var/www/html/tempintegrer/src/HTL/ImmobilierBundle/Resources/views/Default/index.html.twig");
    }
}
