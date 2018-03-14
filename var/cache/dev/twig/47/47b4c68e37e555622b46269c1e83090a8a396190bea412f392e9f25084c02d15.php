<?php

/* HTLImmobilierBundle:Front:listeadmin.html.twig */
class __TwigTemplate_797bb8f9d89faf5752636b1c7e33a6efa663984240c93d6e7e548f29a33081c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base1.html.twig", "HTLImmobilierBundle:Front:listeadmin.html.twig", 2);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b635a344ef1cbdd30a9291ecba15f4d93c097703a0728cdd7c972f3792fa4c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b635a344ef1cbdd30a9291ecba15f4d93c097703a0728cdd7c972f3792fa4c50->enter($__internal_b635a344ef1cbdd30a9291ecba15f4d93c097703a0728cdd7c972f3792fa4c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listeadmin.html.twig"));

        $__internal_b76fbe63338e7f55601a43929c95902426bed1f86adeb3f39861ad0323aa9fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76fbe63338e7f55601a43929c95902426bed1f86adeb3f39861ad0323aa9fc2->enter($__internal_b76fbe63338e7f55601a43929c95902426bed1f86adeb3f39861ad0323aa9fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listeadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b635a344ef1cbdd30a9291ecba15f4d93c097703a0728cdd7c972f3792fa4c50->leave($__internal_b635a344ef1cbdd30a9291ecba15f4d93c097703a0728cdd7c972f3792fa4c50_prof);

        
        $__internal_b76fbe63338e7f55601a43929c95902426bed1f86adeb3f39861ad0323aa9fc2->leave($__internal_b76fbe63338e7f55601a43929c95902426bed1f86adeb3f39861ad0323aa9fc2_prof);

    }

    // line 7
    public function block_table($context, array $blocks = array())
    {
        $__internal_897b1d01d4ddde8499137d3d455c7e8cf47343a10fffe94a4fce4b9298a8003f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897b1d01d4ddde8499137d3d455c7e8cf47343a10fffe94a4fce4b9298a8003f->enter($__internal_897b1d01d4ddde8499137d3d455c7e8cf47343a10fffe94a4fce4b9298a8003f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_44f988b6de219c3b95d3c3f50bcd71857404407dd4f1939eceeacbd02b7e5d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f988b6de219c3b95d3c3f50bcd71857404407dd4f1939eceeacbd02b7e5d01->enter($__internal_44f988b6de219c3b95d3c3f50bcd71857404407dd4f1939eceeacbd02b7e5d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 8
        echo "
<div class=\"container divtable\" >
<table class=\"table table-condensed\" id=\"listebientable\">
<thead>
    <style>
    </style>

    
    <tr class=\"row\"><th>typebien</th>
        <th>localite</th>
        <th>prix</th>
        <th>image</th>
        <th>details</th>
       
    </tr>
</thead>
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 25
            echo "  <tbody>
    <tr class=\"row\">
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
        <td><img class=\"card-img-top\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "html", null, true);
            echo "\" alt=\"Card image cap\" width=\"50px\">
</td>
         <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeadmin", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default bg-primary\">details</a></td>
        

    </tr>
    </tbody>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</table>        <div class=\"text-center\">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["biens"] ?? $this->getContext($context, "biens")));
        echo "</div>

</div>
";
        
        $__internal_44f988b6de219c3b95d3c3f50bcd71857404407dd4f1939eceeacbd02b7e5d01->leave($__internal_44f988b6de219c3b95d3c3f50bcd71857404407dd4f1939eceeacbd02b7e5d01_prof);

        
        $__internal_897b1d01d4ddde8499137d3d455c7e8cf47343a10fffe94a4fce4b9298a8003f->leave($__internal_897b1d01d4ddde8499137d3d455c7e8cf47343a10fffe94a4fce4b9298a8003f_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f6ebbeb22dd6e475d630b32cc41ad717d11e19014ffe913af55b09720013f91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ebbeb22dd6e475d630b32cc41ad717d11e19014ffe913af55b09720013f91e->enter($__internal_f6ebbeb22dd6e475d630b32cc41ad717d11e19014ffe913af55b09720013f91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_164cc7c6d85de525563f1e65e438948d963b469b819cddf47df84c7edc7fa16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164cc7c6d85de525563f1e65e438948d963b469b819cddf47df84c7edc7fa16f->enter($__internal_164cc7c6d85de525563f1e65e438948d963b469b819cddf47df84c7edc7fa16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 52
        echo "
";
        
        $__internal_164cc7c6d85de525563f1e65e438948d963b469b819cddf47df84c7edc7fa16f->leave($__internal_164cc7c6d85de525563f1e65e438948d963b469b819cddf47df84c7edc7fa16f_prof);

        
        $__internal_f6ebbeb22dd6e475d630b32cc41ad717d11e19014ffe913af55b09720013f91e->leave($__internal_f6ebbeb22dd6e475d630b32cc41ad717d11e19014ffe913af55b09720013f91e_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:listeadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 52,  129 => 51,  114 => 41,  107 => 39,  95 => 32,  89 => 30,  85 => 29,  81 => 28,  77 => 27,  73 => 25,  68 => 24,  50 => 8,  41 => 7,  11 => 2,);
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
{% extends \"base1.html.twig\" %}




    {% block table%}

<div class=\"container divtable\" >
<table class=\"table table-condensed\" id=\"listebientable\">
<thead>
    <style>
    </style>

    
    <tr class=\"row\"><th>typebien</th>
        <th>localite</th>
        <th>prix</th>
        <th>image</th>
        <th>details</th>
       
    </tr>
</thead>
  {% for bien in biens %}
  <tbody>
    <tr class=\"row\">
        <td>{{bien.typebien}}</td>
        <td>{{bien.libellelocalite}}</td>
        <td>{{bien.prixlocation}}</td>
        <td><img class=\"card-img-top\" src=\"{{ asset('image/') }}{{bien.images[0]}}\" alt=\"Card image cap\" width=\"50px\">
</td>
         <td><a href=\"{{path('listeadmin',{id:bien.id})}}\" class=\"btn btn-default bg-primary\">details</a></td>
        

    </tr>
    </tbody>

{% else %}

  {% endfor %}
</table>        <div class=\"text-center\">{{ knp_pagination_render(biens) }}</div>

</div>
{% endblock %}






{% block footer %}

{% endblock %}






", "HTLImmobilierBundle:Front:listeadmin.html.twig", "/var/www/html/test2hortala/src/HTL/ImmobilierBundle/Resources/views/Front/listeadmin.html.twig");
    }
}
