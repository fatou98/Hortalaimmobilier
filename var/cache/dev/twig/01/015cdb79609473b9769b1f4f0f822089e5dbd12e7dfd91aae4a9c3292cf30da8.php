<?php

/* HTLImmobilierBundle:Admin:liste_typebien.html.twig */
class __TwigTemplate_44ebab619903697ca6e5ccaac1c0bfef6b38fcabfaa7829d8ab10e9ad46c40f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::adminpage.html.twig", "HTLImmobilierBundle:Admin:liste_typebien.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::adminpage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ee71a8647e3328638d826a672582ece029865a25ba5ef6bd6718e6299bc4c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee71a8647e3328638d826a672582ece029865a25ba5ef6bd6718e6299bc4c08->enter($__internal_4ee71a8647e3328638d826a672582ece029865a25ba5ef6bd6718e6299bc4c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:liste_typebien.html.twig"));

        $__internal_a27566fb283d7b4833249b15c482fef0c2f6c1448c04ce7679eab942cc5c15bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27566fb283d7b4833249b15c482fef0c2f6c1448c04ce7679eab942cc5c15bd->enter($__internal_a27566fb283d7b4833249b15c482fef0c2f6c1448c04ce7679eab942cc5c15bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:liste_typebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ee71a8647e3328638d826a672582ece029865a25ba5ef6bd6718e6299bc4c08->leave($__internal_4ee71a8647e3328638d826a672582ece029865a25ba5ef6bd6718e6299bc4c08_prof);

        
        $__internal_a27566fb283d7b4833249b15c482fef0c2f6c1448c04ce7679eab942cc5c15bd->leave($__internal_a27566fb283d7b4833249b15c482fef0c2f6c1448c04ce7679eab942cc5c15bd_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_8fba1625b571cf9ad53f7ec8d7d89a1612e58c1550a29e46d70e31d6fe2c297b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fba1625b571cf9ad53f7ec8d7d89a1612e58c1550a29e46d70e31d6fe2c297b->enter($__internal_8fba1625b571cf9ad53f7ec8d7d89a1612e58c1550a29e46d70e31d6fe2c297b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fcc29da1d72e31a7d01f873533970fa0936ac1956d775cb621d039be460eac39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc29da1d72e31a7d01f873533970fa0936ac1956d775cb621d039be460eac39->enter($__internal_fcc29da1d72e31a7d01f873533970fa0936ac1956d775cb621d039be460eac39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
                       <div class=\"card-header row\" style=\"display:flex;\">
    <strong class=\"card-title\">LISTE LOCALITE</strong></div>
    <span class=\"\" style=\"background-color:blue;color:white;padding:5px;\"><a href=\"#\" id=\"ajoutertype\" style=\"color:white;\">Ajouter<i class=\"fa fa-plus\"></i></a></span><br><br><br>
                       <form class=\"input-group col-sm-7\" style=\"margin-left: 290px;\" method=\"post\" id=\"type\">
     <div class=\"input-group\">
    <input type=\"text\" class=\"form-control\" placeholder=\"Type bien\" name=\"libelle\" >
    <div class=\"input-group-btn\">
      <button class=\"btn btn-default\" type=\"submit\" name=\"typebien\">
        <i class=\"fa fa-save\"></i>
      </button>
    </div>
</form></div>
                        <div class=\"card-body\" >
<table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" style=\"background-color: white;\">
<thead>
    <tr>
        <th>#</th>
        <th>Libelle type</th>
        <th>Actions</th>
    </tr>
</thead>  <tbody>
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["libelletypes"] ?? $this->getContext($context, "libelletypes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["libelletype"]) {
            // line 26
            echo "
    <tr>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["libelletype"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["libelletype"], "libelletype", array()), "html", null, true);
            echo "</td>
        <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                            </td>
</tr>
   
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "<h1>ce bien n'existe pas</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libelletype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "  </tbody></table>  </div>
";
        
        $__internal_fcc29da1d72e31a7d01f873533970fa0936ac1956d775cb621d039be460eac39->leave($__internal_fcc29da1d72e31a7d01f873533970fa0936ac1956d775cb621d039be460eac39_prof);

        
        $__internal_8fba1625b571cf9ad53f7ec8d7d89a1612e58c1550a29e46d70e31d6fe2c297b->leave($__internal_8fba1625b571cf9ad53f7ec8d7d89a1612e58c1550a29e46d70e31d6fe2c297b_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Admin:liste_typebien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 39,  86 => 29,  82 => 28,  78 => 26,  73 => 25,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::adminpage.html.twig\" %}
{% block content %}

                       <div class=\"card-header row\" style=\"display:flex;\">
    <strong class=\"card-title\">LISTE LOCALITE</strong></div>
    <span class=\"\" style=\"background-color:blue;color:white;padding:5px;\"><a href=\"#\" id=\"ajoutertype\" style=\"color:white;\">Ajouter<i class=\"fa fa-plus\"></i></a></span><br><br><br>
                       <form class=\"input-group col-sm-7\" style=\"margin-left: 290px;\" method=\"post\" id=\"type\">
     <div class=\"input-group\">
    <input type=\"text\" class=\"form-control\" placeholder=\"Type bien\" name=\"libelle\" >
    <div class=\"input-group-btn\">
      <button class=\"btn btn-default\" type=\"submit\" name=\"typebien\">
        <i class=\"fa fa-save\"></i>
      </button>
    </div>
</form></div>
                        <div class=\"card-body\" >
<table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" style=\"background-color: white;\">
<thead>
    <tr>
        <th>#</th>
        <th>Libelle type</th>
        <th>Actions</th>
    </tr>
</thead>  <tbody>
  {% for libelletype in libelletypes %}

    <tr>
        <td>{{libelletype.id}}</td>
        <td>{{libelletype.libelletype}}</td>
        <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                            </td>
</tr>
   
{% else %}
<h1>ce bien n'existe pas</h1>
  {% endfor %}  </tbody></table>  </div>
{% endblock %}", "HTLImmobilierBundle:Admin:liste_typebien.html.twig", "/var/www/html/test2hortala/src/HTL/ImmobilierBundle/Resources/views/Admin/liste_typebien.html.twig");
    }
}
