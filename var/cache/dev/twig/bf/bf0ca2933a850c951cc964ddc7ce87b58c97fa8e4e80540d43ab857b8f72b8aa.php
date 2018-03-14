<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e65021b70df3063e338bc3fb48ad3dcec789e7d1cea81df187348b0363f5c53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_799bf08ca2d6fbd28482bcd5e98f9c62dbc2766c43a3e5eb91fd9d7734f11da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799bf08ca2d6fbd28482bcd5e98f9c62dbc2766c43a3e5eb91fd9d7734f11da3->enter($__internal_799bf08ca2d6fbd28482bcd5e98f9c62dbc2766c43a3e5eb91fd9d7734f11da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_44d1c242bdce0e74a8a874f1e29e1099b1824ac620b96162cbef333ff2698ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d1c242bdce0e74a8a874f1e29e1099b1824ac620b96162cbef333ff2698ae3->enter($__internal_44d1c242bdce0e74a8a874f1e29e1099b1824ac620b96162cbef333ff2698ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_799bf08ca2d6fbd28482bcd5e98f9c62dbc2766c43a3e5eb91fd9d7734f11da3->leave($__internal_799bf08ca2d6fbd28482bcd5e98f9c62dbc2766c43a3e5eb91fd9d7734f11da3_prof);

        
        $__internal_44d1c242bdce0e74a8a874f1e29e1099b1824ac620b96162cbef333ff2698ae3->leave($__internal_44d1c242bdce0e74a8a874f1e29e1099b1824ac620b96162cbef333ff2698ae3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_112e8a15861c58e4a1e640f97aa2274412137e92cfef4d006981c0dcb7bc0a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112e8a15861c58e4a1e640f97aa2274412137e92cfef4d006981c0dcb7bc0a1b->enter($__internal_112e8a15861c58e4a1e640f97aa2274412137e92cfef4d006981c0dcb7bc0a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dbb0a92657a3b871cffe90ddce011a1df45915be6b8f8a94132cbf6250bb914b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb0a92657a3b871cffe90ddce011a1df45915be6b8f8a94132cbf6250bb914b->enter($__internal_dbb0a92657a3b871cffe90ddce011a1df45915be6b8f8a94132cbf6250bb914b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dbb0a92657a3b871cffe90ddce011a1df45915be6b8f8a94132cbf6250bb914b->leave($__internal_dbb0a92657a3b871cffe90ddce011a1df45915be6b8f8a94132cbf6250bb914b_prof);

        
        $__internal_112e8a15861c58e4a1e640f97aa2274412137e92cfef4d006981c0dcb7bc0a1b->leave($__internal_112e8a15861c58e4a1e640f97aa2274412137e92cfef4d006981c0dcb7bc0a1b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_88ecbf6b5b0b3b728601757c68463334b2540cd44301d4ca8784f0848b6253c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ecbf6b5b0b3b728601757c68463334b2540cd44301d4ca8784f0848b6253c1->enter($__internal_88ecbf6b5b0b3b728601757c68463334b2540cd44301d4ca8784f0848b6253c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_20bd7be521492d4e96a5ac12eb23a3c83d637478423b1d733f40f5f19b80672a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bd7be521492d4e96a5ac12eb23a3c83d637478423b1d733f40f5f19b80672a->enter($__internal_20bd7be521492d4e96a5ac12eb23a3c83d637478423b1d733f40f5f19b80672a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_20bd7be521492d4e96a5ac12eb23a3c83d637478423b1d733f40f5f19b80672a->leave($__internal_20bd7be521492d4e96a5ac12eb23a3c83d637478423b1d733f40f5f19b80672a_prof);

        
        $__internal_88ecbf6b5b0b3b728601757c68463334b2540cd44301d4ca8784f0848b6253c1->leave($__internal_88ecbf6b5b0b3b728601757c68463334b2540cd44301d4ca8784f0848b6253c1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_050af836d0deece720bde0f27d296b3994a27887be90c4714ec17c1f28fec8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050af836d0deece720bde0f27d296b3994a27887be90c4714ec17c1f28fec8b6->enter($__internal_050af836d0deece720bde0f27d296b3994a27887be90c4714ec17c1f28fec8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31d5b478c1b0b5d2acbc497123451da5cefb364b448fae9e4cb4e59ea7212981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d5b478c1b0b5d2acbc497123451da5cefb364b448fae9e4cb4e59ea7212981->enter($__internal_31d5b478c1b0b5d2acbc497123451da5cefb364b448fae9e4cb4e59ea7212981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_31d5b478c1b0b5d2acbc497123451da5cefb364b448fae9e4cb4e59ea7212981->leave($__internal_31d5b478c1b0b5d2acbc497123451da5cefb364b448fae9e4cb4e59ea7212981_prof);

        
        $__internal_050af836d0deece720bde0f27d296b3994a27887be90c4714ec17c1f28fec8b6->leave($__internal_050af836d0deece720bde0f27d296b3994a27887be90c4714ec17c1f28fec8b6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/test2hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
