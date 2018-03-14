<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8c374e12e73914b5f102e3be95402f14f258e97959a5553ee752256db776868e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbb5a4e18f91cecba4a8933f3726cb31fb7e39a0664fbde3931e202f91e05dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb5a4e18f91cecba4a8933f3726cb31fb7e39a0664fbde3931e202f91e05dbe->enter($__internal_dbb5a4e18f91cecba4a8933f3726cb31fb7e39a0664fbde3931e202f91e05dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d4e8aaff931ca4647b07a423ea7d0cc4ac11484b0a3b5e23a2b96e8025a64767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e8aaff931ca4647b07a423ea7d0cc4ac11484b0a3b5e23a2b96e8025a64767->enter($__internal_d4e8aaff931ca4647b07a423ea7d0cc4ac11484b0a3b5e23a2b96e8025a64767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbb5a4e18f91cecba4a8933f3726cb31fb7e39a0664fbde3931e202f91e05dbe->leave($__internal_dbb5a4e18f91cecba4a8933f3726cb31fb7e39a0664fbde3931e202f91e05dbe_prof);

        
        $__internal_d4e8aaff931ca4647b07a423ea7d0cc4ac11484b0a3b5e23a2b96e8025a64767->leave($__internal_d4e8aaff931ca4647b07a423ea7d0cc4ac11484b0a3b5e23a2b96e8025a64767_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c879b7de74df2c2fa5183ef99c1eb522b6b2009a3f8e875054624ae3b11592b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c879b7de74df2c2fa5183ef99c1eb522b6b2009a3f8e875054624ae3b11592b0->enter($__internal_c879b7de74df2c2fa5183ef99c1eb522b6b2009a3f8e875054624ae3b11592b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_469ee5843d68f090fe616012f569fd5eb2b2e96b5c12ac2d5757d8b1ecffbcd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469ee5843d68f090fe616012f569fd5eb2b2e96b5c12ac2d5757d8b1ecffbcd3->enter($__internal_469ee5843d68f090fe616012f569fd5eb2b2e96b5c12ac2d5757d8b1ecffbcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_469ee5843d68f090fe616012f569fd5eb2b2e96b5c12ac2d5757d8b1ecffbcd3->leave($__internal_469ee5843d68f090fe616012f569fd5eb2b2e96b5c12ac2d5757d8b1ecffbcd3_prof);

        
        $__internal_c879b7de74df2c2fa5183ef99c1eb522b6b2009a3f8e875054624ae3b11592b0->leave($__internal_c879b7de74df2c2fa5183ef99c1eb522b6b2009a3f8e875054624ae3b11592b0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_28c75e350d0368e7b35e504135be3fc248d04836a4b2323848ed9709d94df6ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c75e350d0368e7b35e504135be3fc248d04836a4b2323848ed9709d94df6ea->enter($__internal_28c75e350d0368e7b35e504135be3fc248d04836a4b2323848ed9709d94df6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f2cd2bb6294a444372648386455cb650a5c389ba937e247739ba71a9264fc51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2cd2bb6294a444372648386455cb650a5c389ba937e247739ba71a9264fc51->enter($__internal_1f2cd2bb6294a444372648386455cb650a5c389ba937e247739ba71a9264fc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1f2cd2bb6294a444372648386455cb650a5c389ba937e247739ba71a9264fc51->leave($__internal_1f2cd2bb6294a444372648386455cb650a5c389ba937e247739ba71a9264fc51_prof);

        
        $__internal_28c75e350d0368e7b35e504135be3fc248d04836a4b2323848ed9709d94df6ea->leave($__internal_28c75e350d0368e7b35e504135be3fc248d04836a4b2323848ed9709d94df6ea_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_359c65c12e20a0443daa16c3887f8a45ac318f6feb77315200750939b401de72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359c65c12e20a0443daa16c3887f8a45ac318f6feb77315200750939b401de72->enter($__internal_359c65c12e20a0443daa16c3887f8a45ac318f6feb77315200750939b401de72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f2eddc69622fcf0e1741d7bbd22a98e1d52cb78f46f090c01478ce0012c0f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2eddc69622fcf0e1741d7bbd22a98e1d52cb78f46f090c01478ce0012c0f6b->enter($__internal_9f2eddc69622fcf0e1741d7bbd22a98e1d52cb78f46f090c01478ce0012c0f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9f2eddc69622fcf0e1741d7bbd22a98e1d52cb78f46f090c01478ce0012c0f6b->leave($__internal_9f2eddc69622fcf0e1741d7bbd22a98e1d52cb78f46f090c01478ce0012c0f6b_prof);

        
        $__internal_359c65c12e20a0443daa16c3887f8a45ac318f6feb77315200750939b401de72->leave($__internal_359c65c12e20a0443daa16c3887f8a45ac318f6feb77315200750939b401de72_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/test2hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
