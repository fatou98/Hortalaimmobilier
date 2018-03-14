<?php

/* HTLImmobilierBundle:Admin:liste_bien.html.twig */
class __TwigTemplate_bf70ac9692808041c8ad1b3e4691f167a243a9c04549ff5004965abc7e9b40e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::table.html.twig", "HTLImmobilierBundle:Admin:liste_bien.html.twig", 1);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4d62cc892d5c85147c34e7329b120642dc8be61b2868433757167a2e8868943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d62cc892d5c85147c34e7329b120642dc8be61b2868433757167a2e8868943->enter($__internal_d4d62cc892d5c85147c34e7329b120642dc8be61b2868433757167a2e8868943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:liste_bien.html.twig"));

        $__internal_6b1583da426d7c140ab62a2471d06da4d103e76dc80fd53b897a0420cd25796d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1583da426d7c140ab62a2471d06da4d103e76dc80fd53b897a0420cd25796d->enter($__internal_6b1583da426d7c140ab62a2471d06da4d103e76dc80fd53b897a0420cd25796d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Admin:liste_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4d62cc892d5c85147c34e7329b120642dc8be61b2868433757167a2e8868943->leave($__internal_d4d62cc892d5c85147c34e7329b120642dc8be61b2868433757167a2e8868943_prof);

        
        $__internal_6b1583da426d7c140ab62a2471d06da4d103e76dc80fd53b897a0420cd25796d->leave($__internal_6b1583da426d7c140ab62a2471d06da4d103e76dc80fd53b897a0420cd25796d_prof);

    }

    // line 2
    public function block_table($context, array $blocks = array())
    {
        $__internal_6c1a983f4af2505e0a508048e36d44ccd016c34a608857e58eabfd7f07ece284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1a983f4af2505e0a508048e36d44ccd016c34a608857e58eabfd7f07ece284->enter($__internal_6c1a983f4af2505e0a508048e36d44ccd016c34a608857e58eabfd7f07ece284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_cb5278fcf82bb0c60051c3180fe1023e97597939cbe693f469a39f7dcf35aedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5278fcf82bb0c60051c3180fe1023e97597939cbe693f469a39f7dcf35aedb->enter($__internal_cb5278fcf82bb0c60051c3180fe1023e97597939cbe693f469a39f7dcf35aedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 3
        echo " <span class=\"\" style=\"background-color:blue;color:white;padding:5px;\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addbien");
        echo "\" id=\"ajouterbien\" style=\"color:white;\">Ajouter<i class=\"fa fa-plus\"></i></a></span><br><br><br>
<table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" style=\"background-color: white;\">
<thead>
    <tr>
        <th>nombien</th>
        <th>localite</th>
        <th>typebien</th>
        <th>prixlocation</th>
        <th>image</th>
        <th>Actions</th>
    </tr>
</thead> <tbody>
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 16
            echo " 
    <tr class=\"gradeA\">
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
        <td><img class=\"card-img-top\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "html", null, true);
            echo "\" alt=\"Card image cap\" width=\"50px\" ></td>
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
            // line 33
            echo "<h1>ce bien n'existe pas</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo " </tbody></table>
";
        
        $__internal_cb5278fcf82bb0c60051c3180fe1023e97597939cbe693f469a39f7dcf35aedb->leave($__internal_cb5278fcf82bb0c60051c3180fe1023e97597939cbe693f469a39f7dcf35aedb_prof);

        
        $__internal_6c1a983f4af2505e0a508048e36d44ccd016c34a608857e58eabfd7f07ece284->leave($__internal_6c1a983f4af2505e0a508048e36d44ccd016c34a608857e58eabfd7f07ece284_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Admin:liste_bien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  107 => 33,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 16,  65 => 15,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::table.html.twig\" %}
{% block table %}
 <span class=\"\" style=\"background-color:blue;color:white;padding:5px;\"><a href=\"{{path('addbien')}}\" id=\"ajouterbien\" style=\"color:white;\">Ajouter<i class=\"fa fa-plus\"></i></a></span><br><br><br>
<table id=\"datatable-responsive\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" style=\"background-color: white;\">
<thead>
    <tr>
        <th>nombien</th>
        <th>localite</th>
        <th>typebien</th>
        <th>prixlocation</th>
        <th>image</th>
        <th>Actions</th>
    </tr>
</thead> <tbody>
  {% for bien in biens %}
 
    <tr class=\"gradeA\">
        <td>{{bien.nombien}}</td>
        <td>{{bien.libellelocalite}}</td>
        <td>{{bien.typebien}}</td>
        <td>{{bien.prixlocation}}</td>
        <td><img class=\"card-img-top\" src=\"{{ asset('image/') }}{{bien.images[0]}}\" alt=\"Card image cap\" width=\"50px\" ></td>
         <td class=\"actions\">
                                                <a href=\"#\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                                <a href=\"#\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                                <a href=\"#\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                            </td>
    
</tr>
   
{% else %}
<h1>ce bien n'existe pas</h1>
  {% endfor %} </tbody></table>
{% endblock %}







", "HTLImmobilierBundle:Admin:liste_bien.html.twig", "/var/www/html/test2hortala/src/HTL/ImmobilierBundle/Resources/views/Admin/liste_bien.html.twig");
    }
}
