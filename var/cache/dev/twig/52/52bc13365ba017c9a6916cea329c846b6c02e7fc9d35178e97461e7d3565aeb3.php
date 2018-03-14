<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fb432cb2a926f5c0bae4a820050455fd38bb4bf20a529781b70730ba90751b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9ed559ee3a65bb663cbe975200d8832fab11c5e6068cd88fc778369cfd26a0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed559ee3a65bb663cbe975200d8832fab11c5e6068cd88fc778369cfd26a0a8->enter($__internal_9ed559ee3a65bb663cbe975200d8832fab11c5e6068cd88fc778369cfd26a0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4cd491d6117bec54b78f722459bbabc0d7ea8f32e81ae0819bddc66798afff66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd491d6117bec54b78f722459bbabc0d7ea8f32e81ae0819bddc66798afff66->enter($__internal_4cd491d6117bec54b78f722459bbabc0d7ea8f32e81ae0819bddc66798afff66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ed559ee3a65bb663cbe975200d8832fab11c5e6068cd88fc778369cfd26a0a8->leave($__internal_9ed559ee3a65bb663cbe975200d8832fab11c5e6068cd88fc778369cfd26a0a8_prof);

        
        $__internal_4cd491d6117bec54b78f722459bbabc0d7ea8f32e81ae0819bddc66798afff66->leave($__internal_4cd491d6117bec54b78f722459bbabc0d7ea8f32e81ae0819bddc66798afff66_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df1de792e67d0c64cdea27635dbee014482e190327ceb4aca9706ad0d6b97284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1de792e67d0c64cdea27635dbee014482e190327ceb4aca9706ad0d6b97284->enter($__internal_df1de792e67d0c64cdea27635dbee014482e190327ceb4aca9706ad0d6b97284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b0764ddb0426ed8fbe8e5785390c7bfedf642fdb10fa03ce64d2788e9356c0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0764ddb0426ed8fbe8e5785390c7bfedf642fdb10fa03ce64d2788e9356c0d6->enter($__internal_b0764ddb0426ed8fbe8e5785390c7bfedf642fdb10fa03ce64d2788e9356c0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b0764ddb0426ed8fbe8e5785390c7bfedf642fdb10fa03ce64d2788e9356c0d6->leave($__internal_b0764ddb0426ed8fbe8e5785390c7bfedf642fdb10fa03ce64d2788e9356c0d6_prof);

        
        $__internal_df1de792e67d0c64cdea27635dbee014482e190327ceb4aca9706ad0d6b97284->leave($__internal_df1de792e67d0c64cdea27635dbee014482e190327ceb4aca9706ad0d6b97284_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ae08d06abb1f26a2729eed6270934cebb87bbf89ad9bc9e0642287a389be660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae08d06abb1f26a2729eed6270934cebb87bbf89ad9bc9e0642287a389be660->enter($__internal_0ae08d06abb1f26a2729eed6270934cebb87bbf89ad9bc9e0642287a389be660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a3fe950b996726f46ff60749312f5b2ecf00e97cce8973657d5ba99b9a0bac3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3fe950b996726f46ff60749312f5b2ecf00e97cce8973657d5ba99b9a0bac3a->enter($__internal_a3fe950b996726f46ff60749312f5b2ecf00e97cce8973657d5ba99b9a0bac3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a3fe950b996726f46ff60749312f5b2ecf00e97cce8973657d5ba99b9a0bac3a->leave($__internal_a3fe950b996726f46ff60749312f5b2ecf00e97cce8973657d5ba99b9a0bac3a_prof);

        
        $__internal_0ae08d06abb1f26a2729eed6270934cebb87bbf89ad9bc9e0642287a389be660->leave($__internal_0ae08d06abb1f26a2729eed6270934cebb87bbf89ad9bc9e0642287a389be660_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c460a588bd89f02f7b75d465a06bec626b605d2b0e236dc63eea7f8da1ac351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c460a588bd89f02f7b75d465a06bec626b605d2b0e236dc63eea7f8da1ac351->enter($__internal_5c460a588bd89f02f7b75d465a06bec626b605d2b0e236dc63eea7f8da1ac351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a9090af7d3f31b797d90274d2aaef1ea8f1e470f022f882485dd6ba144b439a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9090af7d3f31b797d90274d2aaef1ea8f1e470f022f882485dd6ba144b439a->enter($__internal_0a9090af7d3f31b797d90274d2aaef1ea8f1e470f022f882485dd6ba144b439a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0a9090af7d3f31b797d90274d2aaef1ea8f1e470f022f882485dd6ba144b439a->leave($__internal_0a9090af7d3f31b797d90274d2aaef1ea8f1e470f022f882485dd6ba144b439a_prof);

        
        $__internal_5c460a588bd89f02f7b75d465a06bec626b605d2b0e236dc63eea7f8da1ac351->leave($__internal_5c460a588bd89f02f7b75d465a06bec626b605d2b0e236dc63eea7f8da1ac351_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/test2hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
