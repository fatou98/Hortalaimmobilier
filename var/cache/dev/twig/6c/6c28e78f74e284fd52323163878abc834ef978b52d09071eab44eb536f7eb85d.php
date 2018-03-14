<?php

/* HTLImmobilierBundle:Front:formsearch.html.twig */
class __TwigTemplate_0636b17d9fd4f29c666f6c356d9de9e99c076018ea122e4e95ca03aed96145ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "HTLImmobilierBundle:Front:formsearch.html.twig", 1);
        $this->blocks = array(
            'image' => array($this, 'block_image'),
            'image1' => array($this, 'block_image1'),
            'description' => array($this, 'block_description'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d87027d1dd969840fbd7b267bd6537cce3bc3a60ff78ea1da7fca480e0dfcde5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87027d1dd969840fbd7b267bd6537cce3bc3a60ff78ea1da7fca480e0dfcde5->enter($__internal_d87027d1dd969840fbd7b267bd6537cce3bc3a60ff78ea1da7fca480e0dfcde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearch.html.twig"));

        $__internal_ceb5d12727a210d14a8109d8e921fcf5b47d0998ca169671d9023012e8d006c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb5d12727a210d14a8109d8e921fcf5b47d0998ca169671d9023012e8d006c5->enter($__internal_ceb5d12727a210d14a8109d8e921fcf5b47d0998ca169671d9023012e8d006c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:formsearch.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d87027d1dd969840fbd7b267bd6537cce3bc3a60ff78ea1da7fca480e0dfcde5->leave($__internal_d87027d1dd969840fbd7b267bd6537cce3bc3a60ff78ea1da7fca480e0dfcde5_prof);

        
        $__internal_ceb5d12727a210d14a8109d8e921fcf5b47d0998ca169671d9023012e8d006c5->leave($__internal_ceb5d12727a210d14a8109d8e921fcf5b47d0998ca169671d9023012e8d006c5_prof);

    }

    // line 2
    public function block_image($context, array $blocks = array())
    {
        $__internal_6919e8f8d74b8921dd9a6aefce489634c50d808ad3054a613a4ca76634d0459e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6919e8f8d74b8921dd9a6aefce489634c50d808ad3054a613a4ca76634d0459e->enter($__internal_6919e8f8d74b8921dd9a6aefce489634c50d808ad3054a613a4ca76634d0459e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image"));

        $__internal_5e05f83fc314af0bd95d44cd6de294db4cbdae585ac2a69e6862f5bb53ab30dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e05f83fc314af0bd95d44cd6de294db4cbdae585ac2a69e6862f5bb53ab30dd->enter($__internal_5e05f83fc314af0bd95d44cd6de294db4cbdae585ac2a69e6862f5bb53ab30dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image"));

        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 4
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bien"], "images", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 5
                echo "<li style=\"\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "image", array()), "html", null, true);
                echo "\" alt=\"\" data-image=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "image", array()), "html", null, true);
                echo "\"  height=\"110px\"></li>       
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 7
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 9
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo " ";
        
        $__internal_5e05f83fc314af0bd95d44cd6de294db4cbdae585ac2a69e6862f5bb53ab30dd->leave($__internal_5e05f83fc314af0bd95d44cd6de294db4cbdae585ac2a69e6862f5bb53ab30dd_prof);

        
        $__internal_6919e8f8d74b8921dd9a6aefce489634c50d808ad3054a613a4ca76634d0459e->leave($__internal_6919e8f8d74b8921dd9a6aefce489634c50d808ad3054a613a4ca76634d0459e_prof);

    }

    // line 11
    public function block_image1($context, array $blocks = array())
    {
        $__internal_b00eb0819253617d8f92290a3b9ccb8ddfb69b05983467619d20dca4646b4d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00eb0819253617d8f92290a3b9ccb8ddfb69b05983467619d20dca4646b4d04->enter($__internal_b00eb0819253617d8f92290a3b9ccb8ddfb69b05983467619d20dca4646b4d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image1"));

        $__internal_e6d415107cca738892fa945f5bd39dbb4c09c939dbae2cd14a35b777fe4ebce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d415107cca738892fa945f5bd39dbb4c09c939dbae2cd14a35b777fe4ebce5->enter($__internal_e6d415107cca738892fa945f5bd39dbb4c09c939dbae2cd14a35b777fe4ebce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image1"));

        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 13
            echo "<div class=\"single_product_image_background\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "html", null, true);
            echo "')\"></div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo " ";
        
        $__internal_e6d415107cca738892fa945f5bd39dbb4c09c939dbae2cd14a35b777fe4ebce5->leave($__internal_e6d415107cca738892fa945f5bd39dbb4c09c939dbae2cd14a35b777fe4ebce5_prof);

        
        $__internal_b00eb0819253617d8f92290a3b9ccb8ddfb69b05983467619d20dca4646b4d04->leave($__internal_b00eb0819253617d8f92290a3b9ccb8ddfb69b05983467619d20dca4646b4d04_prof);

    }

    // line 17
    public function block_description($context, array $blocks = array())
    {
        $__internal_71c6cbcf0dd82cca7fa79a8411b1fe73e5ec6be0df04f42783505af1cabbc5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c6cbcf0dd82cca7fa79a8411b1fe73e5ec6be0df04f42783505af1cabbc5b4->enter($__internal_71c6cbcf0dd82cca7fa79a8411b1fe73e5ec6be0df04f42783505af1cabbc5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_fbf59dc739a2db1d108697eb0e055e9b6722d215942b9331d67b014e2ce897b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf59dc739a2db1d108697eb0e055e9b6722d215942b9331d67b014e2ce897b4->enter($__internal_fbf59dc739a2db1d108697eb0e055e9b6722d215942b9331d67b014e2ce897b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 19
            echo " <div class=\"col-lg-5\">
  <div class=\"product_details\">
          <div class=\"product_details_title\">
            <h2>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</h2>
    <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</p>
  </div>
  <div class=\"free_delivery d-flex flex-row align-items-center justify-content-center\">
  <span class=\"ti-truck\"></span><span> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "</span>
          </div>
          <div class=\"\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</div>
        </div>
      </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo " ";
        
        $__internal_fbf59dc739a2db1d108697eb0e055e9b6722d215942b9331d67b014e2ce897b4->leave($__internal_fbf59dc739a2db1d108697eb0e055e9b6722d215942b9331d67b014e2ce897b4_prof);

        
        $__internal_71c6cbcf0dd82cca7fa79a8411b1fe73e5ec6be0df04f42783505af1cabbc5b4->leave($__internal_71c6cbcf0dd82cca7fa79a8411b1fe73e5ec6be0df04f42783505af1cabbc5b4_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:formsearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 33,  181 => 32,  172 => 28,  167 => 26,  161 => 23,  157 => 22,  152 => 19,  147 => 18,  138 => 17,  128 => 16,  122 => 15,  113 => 13,  108 => 12,  99 => 11,  89 => 10,  83 => 9,  74 => 7,  62 => 5,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}
{% block image %}
{% for bien in biens %}
               {% for image in  bien.images %}
<li style=\"\"><img src=\"{{ asset('image/') }}{{image.image}}\" alt=\"\" data-image=\"{{ asset('image/') }}{{image.image}}\"  height=\"110px\"></li>       
{% else %}
               {% endfor %}
{% else %}
  {% endfor %}
 {% endblock %}
 {% block image1 %}
{% for bien in biens %}
<div class=\"single_product_image_background\" style=\"background-image:url('{{ asset('image/') }}{{bien.images[0]}}')\"></div>
{% else %}
  {% endfor %}
 {% endblock %}
  {% block description %}
{% for bien in biens %}
 <div class=\"col-lg-5\">
  <div class=\"product_details\">
          <div class=\"product_details_title\">
            <h2>{{bien.nombien}}</h2>
    <p>{{bien.description}}</p>
  </div>
  <div class=\"free_delivery d-flex flex-row align-items-center justify-content-center\">
  <span class=\"ti-truck\"></span><span> {{bien.libellelocalite}}</span>
          </div>
          <div class=\"\">{{bien.prixlocation}}</div>
        </div>
      </div>
      {% else %}
  {% endfor %}
 {% endblock %}", "HTLImmobilierBundle:Front:formsearch.html.twig", "/var/www/html/tempintegrer/src/HTL/ImmobilierBundle/Resources/views/Front/formsearch.html.twig");
    }
}
