<?php

/* HTLImmobilierBundle:Admin:liste_localite.html.twig */
class __TwigTemplate_405746a1974e1a101b0ca67a7e9795efade59382424062b2013b9eccecc1af08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::adminpage.html.twig", "HTLImmobilierBundle:Admin:liste_localite.html.twig", 1);
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
        $__internal_b25176520f83597485e9a703ff475b407786b7ede7b1c039cd7b81d547ee831d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b25176520f83597485e9a703ff475b407786b7ede7b1c039cd7b81d547ee831d->enter($__internal_b25176520f83597485e9a703ff475b407786b7ede7b1c039cd7b81d547ee831d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:liste_localite.html.twig"));

        $__internal_3ffcde0ce8012b9ecf60d9d4d8c29cc0f565d1c53fa8e3936cf9ce1bce7b674b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffcde0ce8012b9ecf60d9d4d8c29cc0f565d1c53fa8e3936cf9ce1bce7b674b->enter($__internal_3ffcde0ce8012b9ecf60d9d4d8c29cc0f565d1c53fa8e3936cf9ce1bce7b674b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:liste_localite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b25176520f83597485e9a703ff475b407786b7ede7b1c039cd7b81d547ee831d->leave($__internal_b25176520f83597485e9a703ff475b407786b7ede7b1c039cd7b81d547ee831d_prof);

        
        $__internal_3ffcde0ce8012b9ecf60d9d4d8c29cc0f565d1c53fa8e3936cf9ce1bce7b674b->leave($__internal_3ffcde0ce8012b9ecf60d9d4d8c29cc0f565d1c53fa8e3936cf9ce1bce7b674b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_e672a96d97db3c1a1df7ef63241a45aaa7f4c0369689a701e7519b2871bd3421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e672a96d97db3c1a1df7ef63241a45aaa7f4c0369689a701e7519b2871bd3421->enter($__internal_e672a96d97db3c1a1df7ef63241a45aaa7f4c0369689a701e7519b2871bd3421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fb403d37d5994b5f0823577b8dd3b5fee24120bee4038c128b4c813f71fca00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb403d37d5994b5f0823577b8dd3b5fee24120bee4038c128b4c813f71fca00b->enter($__internal_fb403d37d5994b5f0823577b8dd3b5fee24120bee4038c128b4c813f71fca00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
<div class=\"card-header row\" style=\"display:flex;\">
    <strong class=\"card-title\">LISTE LOCALITE</strong></div>
     <span class=\"\" style=\"background-color:blue;color:white;padding:5px;\"><a href=\"#\" id=\"ajouterlocalite\" style=\"color:white;\">Ajouter<i class=\"fa fa-plus\"></i></a></span><br><br><br>
                       <form class=\"input-group col-sm-7\" style=\"margin-left: 290px;\" method=\"post\" id=\"localiteform\">
     <div class=\"input-group\">
    <input type=\"text\" class=\"form-control\" placeholder=\"Localite\" name=\"libelle\" >
    <div class=\"input-group-btn\">
      <button class=\"btn btn-default\" type=\"submit\" name=\"typebien\">
        <i class=\"fa fa-save\"></i>
      </button>
    </div>
</form>
                         </div>
                        <div class=\"card-body\" >
<table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" style=\"background-color: white;\">

<thead>
    <tr>
        <th>#</th>
        <th>Libelle Localite</th>
        <th>Actions</th>
    </tr>
</thead><tbody>
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Localites"] ?? $this->getContext($context, "Localites")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Localite"]) {
            // line 28
            echo "
    <tr>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["Localite"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["Localite"], "libellelocalite", array()), "html", null, true);
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
            // line 41
            echo "<h1>ce bien n'existe pas</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  </tbody></table>  </div>
";
        
        $__internal_fb403d37d5994b5f0823577b8dd3b5fee24120bee4038c128b4c813f71fca00b->leave($__internal_fb403d37d5994b5f0823577b8dd3b5fee24120bee4038c128b4c813f71fca00b_prof);

        
        $__internal_e672a96d97db3c1a1df7ef63241a45aaa7f4c0369689a701e7519b2871bd3421->leave($__internal_e672a96d97db3c1a1df7ef63241a45aaa7f4c0369689a701e7519b2871bd3421_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Admin:liste_localite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  103 => 41,  88 => 31,  84 => 30,  80 => 28,  75 => 27,  49 => 3,  40 => 2,  11 => 1,);
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
     <span class=\"\" style=\"background-color:blue;color:white;padding:5px;\"><a href=\"#\" id=\"ajouterlocalite\" style=\"color:white;\">Ajouter<i class=\"fa fa-plus\"></i></a></span><br><br><br>
                       <form class=\"input-group col-sm-7\" style=\"margin-left: 290px;\" method=\"post\" id=\"localiteform\">
     <div class=\"input-group\">
    <input type=\"text\" class=\"form-control\" placeholder=\"Localite\" name=\"libelle\" >
    <div class=\"input-group-btn\">
      <button class=\"btn btn-default\" type=\"submit\" name=\"typebien\">
        <i class=\"fa fa-save\"></i>
      </button>
    </div>
</form>
                         </div>
                        <div class=\"card-body\" >
<table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" style=\"background-color: white;\">

<thead>
    <tr>
        <th>#</th>
        <th>Libelle Localite</th>
        <th>Actions</th>
    </tr>
</thead><tbody>
  {% for Localite in Localites %}

    <tr>
        <td>{{Localite.id}}</td>
        <td>{{Localite.libellelocalite}}</td>
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
{% endblock %}", "HTLImmobilierBundle:Admin:liste_localite.html.twig", "/var/www/html/test2hortala/src/HTL/ImmobilierBundle/Resources/views/Admin/liste_localite.html.twig");
    }
}
