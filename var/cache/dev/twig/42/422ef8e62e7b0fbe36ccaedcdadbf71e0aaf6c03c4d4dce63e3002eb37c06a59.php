<?php

/* base1.html.twig */
class __TwigTemplate_9d66a7b4db70199422f19fe7a288c4c962e3b2884b8dacabb4283492931d41d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'table' => array($this, 'block_table'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_509f0b4a5e82a067343bc6923381335fafd82883d20a49e6ebffa3bbdce8a145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_509f0b4a5e82a067343bc6923381335fafd82883d20a49e6ebffa3bbdce8a145->enter($__internal_509f0b4a5e82a067343bc6923381335fafd82883d20a49e6ebffa3bbdce8a145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_c3873f7fbcb1e5d8bc6bd934db4e335eafa353a7a6e7bce76c3197478883468d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3873f7fbcb1e5d8bc6bd934db4e335eafa353a7a6e7bce76c3197478883468d->enter($__internal_c3873f7fbcb1e5d8bc6bd934db4e335eafa353a7a6e7bce76c3197478883468d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
                <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.js"), "html", null, true);
        echo "\"></script>
    </head>

    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        echo "  
        ";
        // line 22
        $this->displayBlock('table', $context, $blocks);
        // line 23
        echo "
     ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
        
        $__internal_509f0b4a5e82a067343bc6923381335fafd82883d20a49e6ebffa3bbdce8a145->leave($__internal_509f0b4a5e82a067343bc6923381335fafd82883d20a49e6ebffa3bbdce8a145_prof);

        
        $__internal_c3873f7fbcb1e5d8bc6bd934db4e335eafa353a7a6e7bce76c3197478883468d->leave($__internal_c3873f7fbcb1e5d8bc6bd934db4e335eafa353a7a6e7bce76c3197478883468d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c4d8dbfa8e287cd44caac5f8ecef590bf3b2cd0a59d41762b3f0c206c29b889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c4d8dbfa8e287cd44caac5f8ecef590bf3b2cd0a59d41762b3f0c206c29b889->enter($__internal_7c4d8dbfa8e287cd44caac5f8ecef590bf3b2cd0a59d41762b3f0c206c29b889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_056fdfa8e183b3c50f6118e73b89986424c7a4e8ffb2f65067af609781a91e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056fdfa8e183b3c50f6118e73b89986424c7a4e8ffb2f65067af609781a91e52->enter($__internal_056fdfa8e183b3c50f6118e73b89986424c7a4e8ffb2f65067af609781a91e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_056fdfa8e183b3c50f6118e73b89986424c7a4e8ffb2f65067af609781a91e52->leave($__internal_056fdfa8e183b3c50f6118e73b89986424c7a4e8ffb2f65067af609781a91e52_prof);

        
        $__internal_7c4d8dbfa8e287cd44caac5f8ecef590bf3b2cd0a59d41762b3f0c206c29b889->leave($__internal_7c4d8dbfa8e287cd44caac5f8ecef590bf3b2cd0a59d41762b3f0c206c29b889_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74f84dbedc96180e5a05fa0a69aef2a5bebbc60c0b6164656fc97e58c915bdbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f84dbedc96180e5a05fa0a69aef2a5bebbc60c0b6164656fc97e58c915bdbc->enter($__internal_74f84dbedc96180e5a05fa0a69aef2a5bebbc60c0b6164656fc97e58c915bdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a61362532efc5094bc682824faf629d97a9997b0251754b62f989add2f44d031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61362532efc5094bc682824faf629d97a9997b0251754b62f989add2f44d031->enter($__internal_a61362532efc5094bc682824faf629d97a9997b0251754b62f989add2f44d031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
          <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  
";
        
        $__internal_a61362532efc5094bc682824faf629d97a9997b0251754b62f989add2f44d031->leave($__internal_a61362532efc5094bc682824faf629d97a9997b0251754b62f989add2f44d031_prof);

        
        $__internal_74f84dbedc96180e5a05fa0a69aef2a5bebbc60c0b6164656fc97e58c915bdbc->leave($__internal_74f84dbedc96180e5a05fa0a69aef2a5bebbc60c0b6164656fc97e58c915bdbc_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e990bf3d04e941abc42563776923efe5405b6ef18cba3aaebc98c764297614b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e990bf3d04e941abc42563776923efe5405b6ef18cba3aaebc98c764297614b->enter($__internal_8e990bf3d04e941abc42563776923efe5405b6ef18cba3aaebc98c764297614b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f21c7302afc5dc3be8e08d05c8ec5e199982c2a56dda70a75d1efcbf9ce0c5e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21c7302afc5dc3be8e08d05c8ec5e199982c2a56dda70a75d1efcbf9ce0c5e3->enter($__internal_f21c7302afc5dc3be8e08d05c8ec5e199982c2a56dda70a75d1efcbf9ce0c5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f21c7302afc5dc3be8e08d05c8ec5e199982c2a56dda70a75d1efcbf9ce0c5e3->leave($__internal_f21c7302afc5dc3be8e08d05c8ec5e199982c2a56dda70a75d1efcbf9ce0c5e3_prof);

        
        $__internal_8e990bf3d04e941abc42563776923efe5405b6ef18cba3aaebc98c764297614b->leave($__internal_8e990bf3d04e941abc42563776923efe5405b6ef18cba3aaebc98c764297614b_prof);

    }

    // line 22
    public function block_table($context, array $blocks = array())
    {
        $__internal_aae2f37f61afbf5b6ee135025619c904c181dfc6f901764845d58f7edc429301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae2f37f61afbf5b6ee135025619c904c181dfc6f901764845d58f7edc429301->enter($__internal_aae2f37f61afbf5b6ee135025619c904c181dfc6f901764845d58f7edc429301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_30b5d7a38b38e95fd19821b053460b29a49027dd65844f208a6be908d3a36a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b5d7a38b38e95fd19821b053460b29a49027dd65844f208a6be908d3a36a68->enter($__internal_30b5d7a38b38e95fd19821b053460b29a49027dd65844f208a6be908d3a36a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_30b5d7a38b38e95fd19821b053460b29a49027dd65844f208a6be908d3a36a68->leave($__internal_30b5d7a38b38e95fd19821b053460b29a49027dd65844f208a6be908d3a36a68_prof);

        
        $__internal_aae2f37f61afbf5b6ee135025619c904c181dfc6f901764845d58f7edc429301->leave($__internal_aae2f37f61afbf5b6ee135025619c904c181dfc6f901764845d58f7edc429301_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2c53863a9c12cbcc230455a85019b12358adfbf667b3bfa76d1b88377919f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c53863a9c12cbcc230455a85019b12358adfbf667b3bfa76d1b88377919f28->enter($__internal_a2c53863a9c12cbcc230455a85019b12358adfbf667b3bfa76d1b88377919f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2adaeb458eb3d7ff9c8c9db69cb816160bc30b87fb335ddd1bf4deead48e77e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2adaeb458eb3d7ff9c8c9db69cb816160bc30b87fb335ddd1bf4deead48e77e3->enter($__internal_2adaeb458eb3d7ff9c8c9db69cb816160bc30b87fb335ddd1bf4deead48e77e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"> </script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

         ";
        
        $__internal_2adaeb458eb3d7ff9c8c9db69cb816160bc30b87fb335ddd1bf4deead48e77e3->leave($__internal_2adaeb458eb3d7ff9c8c9db69cb816160bc30b87fb335ddd1bf4deead48e77e3_prof);

        
        $__internal_a2c53863a9c12cbcc230455a85019b12358adfbf667b3bfa76d1b88377919f28->leave($__internal_a2c53863a9c12cbcc230455a85019b12358adfbf667b3bfa76d1b88377919f28_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 27,  178 => 26,  175 => 25,  166 => 24,  149 => 22,  132 => 21,  115 => 9,  111 => 8,  108 => 7,  99 => 6,  81 => 5,  69 => 30,  67 => 24,  64 => 23,  62 => 22,  58 => 21,  51 => 17,  47 => 16,  42 => 15,  40 => 6,  36 => 5,  30 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
{% block stylesheets %}

          <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
          <link rel=\"stylesheet\" href=\"{{ asset('css/datatables.css') }}\">
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  
{% endblock %}        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
                <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('js/datatables.js' )}}\"></script>
    </head>

    <body>
        {% block body %}{% endblock %}  
        {% block table %}{% endblock %}

     {% block javascripts %}

        <script src=\"{{ asset('js/script.js') }}\"> </script>
        <script src=\"{{ asset('js/bootstrap.js') }}\"></script>

         {% endblock %}
    </body>
</html>
", "base1.html.twig", "/var/www/html/test2hortala/app/Resources/views/base1.html.twig");
    }
}
