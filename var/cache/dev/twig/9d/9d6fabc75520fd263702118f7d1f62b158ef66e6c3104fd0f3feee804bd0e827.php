<?php

/* HTLImmobilierBundle:Front:listereservation.html.twig */
class __TwigTemplate_6c4231136b5689985c70e5eabdb6e5f4e58d55cc40bf809b244aa0a6f237bef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base1.html.twig", "HTLImmobilierBundle:Front:listereservation.html.twig", 2);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec33612e79a5e082ce61607fdc15e05203e3c55e845169c3a86a04f041c80e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec33612e79a5e082ce61607fdc15e05203e3c55e845169c3a86a04f041c80e1c->enter($__internal_ec33612e79a5e082ce61607fdc15e05203e3c55e845169c3a86a04f041c80e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listereservation.html.twig"));

        $__internal_fcfdff782acd9a5d358c4bb93339aa33a6c737097ea398228b4eceb0559f9e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfdff782acd9a5d358c4bb93339aa33a6c737097ea398228b4eceb0559f9e38->enter($__internal_fcfdff782acd9a5d358c4bb93339aa33a6c737097ea398228b4eceb0559f9e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listereservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec33612e79a5e082ce61607fdc15e05203e3c55e845169c3a86a04f041c80e1c->leave($__internal_ec33612e79a5e082ce61607fdc15e05203e3c55e845169c3a86a04f041c80e1c_prof);

        
        $__internal_fcfdff782acd9a5d358c4bb93339aa33a6c737097ea398228b4eceb0559f9e38->leave($__internal_fcfdff782acd9a5d358c4bb93339aa33a6c737097ea398228b4eceb0559f9e38_prof);

    }

    // line 7
    public function block_table($context, array $blocks = array())
    {
        $__internal_7f92071a1190397155451d26e5258b64af5bcc8866da6be22e50d3a3272c3ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f92071a1190397155451d26e5258b64af5bcc8866da6be22e50d3a3272c3ab0->enter($__internal_7f92071a1190397155451d26e5258b64af5bcc8866da6be22e50d3a3272c3ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_0ede76b631ef90aafceb2a76a2d246e91fa2e0e26332ef6c64a0010ce65b24d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ede76b631ef90aafceb2a76a2d246e91fa2e0e26332ef6c64a0010ce65b24d9->enter($__internal_0ede76b631ef90aafceb2a76a2d246e91fa2e0e26332ef6c64a0010ce65b24d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 8
        echo "
<div class=\"container divtable\" style=\"margin-left:30px;\">
<table class=\"table table-condensed\" id=\"listebientable\">
<thead>
    <tr>
        <th>nom client</th>
        <th>adresse bien</th>
        <th>type bien</th>
                <th>prix</th>
        <th>image</th>

        <th>details</th>
    </tr>
</thead>
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 23
            echo "  <tbody>
    <tr>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "libellelocalite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "typebien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</td>
        <td><img class=\"card-img-top\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "html", null, true);
            echo "\" alt=\"Card image cap\" width=\"50px\">
</td>
         <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default bg-primary\" id=\"reservationid\">DETAILS</a></td>


    </tr>
    </tbody>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</table>
        <div class=\"text-center\">";
        // line 41
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["reservations"] ?? $this->getContext($context, "reservations")));
        echo "</div>

</div>
";
        
        $__internal_0ede76b631ef90aafceb2a76a2d246e91fa2e0e26332ef6c64a0010ce65b24d9->leave($__internal_0ede76b631ef90aafceb2a76a2d246e91fa2e0e26332ef6c64a0010ce65b24d9_prof);

        
        $__internal_7f92071a1190397155451d26e5258b64af5bcc8866da6be22e50d3a3272c3ab0->leave($__internal_7f92071a1190397155451d26e5258b64af5bcc8866da6be22e50d3a3272c3ab0_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2cac5db596a1cbe9f860aa2e0b1729d1c48ab8af2a0468a186ae40f14881e4de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cac5db596a1cbe9f860aa2e0b1729d1c48ab8af2a0468a186ae40f14881e4de->enter($__internal_2cac5db596a1cbe9f860aa2e0b1729d1c48ab8af2a0468a186ae40f14881e4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_2872d7de62bdeae72ea504e8a9b280ff3ad1790acf2fd4cd96e3cff8977cd8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2872d7de62bdeae72ea504e8a9b280ff3ad1790acf2fd4cd96e3cff8977cd8c5->enter($__internal_2872d7de62bdeae72ea504e8a9b280ff3ad1790acf2fd4cd96e3cff8977cd8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 52
        echo "
";
        
        $__internal_2872d7de62bdeae72ea504e8a9b280ff3ad1790acf2fd4cd96e3cff8977cd8c5->leave($__internal_2872d7de62bdeae72ea504e8a9b280ff3ad1790acf2fd4cd96e3cff8977cd8c5_prof);

        
        $__internal_2cac5db596a1cbe9f860aa2e0b1729d1c48ab8af2a0468a186ae40f14881e4de->leave($__internal_2cac5db596a1cbe9f860aa2e0b1729d1c48ab8af2a0468a186ae40f14881e4de_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:listereservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 52,  133 => 51,  119 => 41,  116 => 40,  109 => 38,  97 => 31,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 23,  66 => 22,  50 => 8,  41 => 7,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"::base1.html.twig\" %}




    {% block table%}

<div class=\"container divtable\" style=\"margin-left:30px;\">
<table class=\"table table-condensed\" id=\"listebientable\">
<thead>
    <tr>
        <th>nom client</th>
        <th>adresse bien</th>
        <th>type bien</th>
                <th>prix</th>
        <th>image</th>

        <th>details</th>
    </tr>
</thead>
  {% for reservation in reservations %}
  <tbody>
    <tr>
        <td>{{reservation.client.nomComplet}}</td>
        <td>{{reservation.bien.libellelocalite}}</td>
        <td>{{reservation.bien.typebien}}</td>
        <td>{{reservation.bien.prixlocation}}</td>
        <td><img class=\"card-img-top\" src=\"{{ asset('image/') }}{{reservation.bien.images[0]}}\" alt=\"Card image cap\" width=\"50px\">
</td>
         <td><a href=\"{{path('details',{id:reservation.id})}}\" class=\"btn btn-default bg-primary\" id=\"reservationid\">DETAILS</a></td>


    </tr>
    </tbody>

{% else %}

  {% endfor %}
</table>
        <div class=\"text-center\">{{ knp_pagination_render(reservations) }}</div>

</div>
{% endblock %}






{% block footer %}

{% endblock %}






", "HTLImmobilierBundle:Front:listereservation.html.twig", "/var/www/html/test2hortala/src/HTL/ImmobilierBundle/Resources/views/Front/listereservation.html.twig");
    }
}
