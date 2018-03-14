<?php

/* HTLImmobilierBundle:Front:details.html.twig */
class __TwigTemplate_05d7a7c6325572fdb73c8e32378bef00f0e7001d1a5d378a155d444399cbdc3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base1.html.twig", "HTLImmobilierBundle:Front:details.html.twig", 1);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b1112c30c32223a5d8fe5a38ae4c490138a35c481f503871eb85a11ac4be667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1112c30c32223a5d8fe5a38ae4c490138a35c481f503871eb85a11ac4be667->enter($__internal_6b1112c30c32223a5d8fe5a38ae4c490138a35c481f503871eb85a11ac4be667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:details.html.twig"));

        $__internal_d895de6b743b026351bd9d2e1c26750f87d0b836d84aab4c36a3c183e800acfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d895de6b743b026351bd9d2e1c26750f87d0b836d84aab4c36a3c183e800acfd->enter($__internal_d895de6b743b026351bd9d2e1c26750f87d0b836d84aab4c36a3c183e800acfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b1112c30c32223a5d8fe5a38ae4c490138a35c481f503871eb85a11ac4be667->leave($__internal_6b1112c30c32223a5d8fe5a38ae4c490138a35c481f503871eb85a11ac4be667_prof);

        
        $__internal_d895de6b743b026351bd9d2e1c26750f87d0b836d84aab4c36a3c183e800acfd->leave($__internal_d895de6b743b026351bd9d2e1c26750f87d0b836d84aab4c36a3c183e800acfd_prof);

    }

    // line 2
    public function block_table($context, array $blocks = array())
    {
        $__internal_2db294d091486e9db47927813a9b0d2551ea6d81fe210be51ae577dbb0e41c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db294d091486e9db47927813a9b0d2551ea6d81fe210be51ae577dbb0e41c81->enter($__internal_2db294d091486e9db47927813a9b0d2551ea6d81fe210be51ae577dbb0e41c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_c18cf3101a72bf53ee36fc28a78dbd945b3e662cea9039884af9d0775bcc928b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18cf3101a72bf53ee36fc28a78dbd945b3e662cea9039884af9d0775bcc928b->enter($__internal_c18cf3101a72bf53ee36fc28a78dbd945b3e662cea9039884af9d0775bcc928b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 3
        echo "<style>
div{
    font-family:Times New Roman;
}
.panel-title{
    background-color:gray;
    color:white;height:50px;border-radius:5px;text-align:center;
}
.container{
    border:1px solid gray;
    border-radius:10px;
  margin-right:20px;
  margin-bottom:10px;
        margin-left:100px;

}
.client{
    width:400px;
}
}
.montant{

  margin-top: 20px;
}
.contrat{
 
}
</style>
<div class=\"row container\">
               <div class=\"col-md-6 client\">
                    <div class=\"content-box-large\">
                            <div class=\"panel-title\"><h1>CLIENT</h1></div>
                        <div class=\"panel-body\">
                        </div>";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 37
            echo "        <h3>Nom :";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</h3>
    <h3>    CNI :";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "numpiece", array()), "html", null, true);
            echo "</h3>
    <h3>    Tel :";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "tel", array()), "html", null, true);
            echo "</h3>
        <h3>Adresse :";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "adresse", array()), "html", null, true);
            echo "</h3>
      <h3>  Email :";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "email", array()), "html", null, true);
            echo "</h3>
                    </div>
                </div>
                <div class=\"col-md-6\" bien>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-box-header\">
                                <div class=\"panel-title bg-primary\"><h1>BIEN</h1></div>
                            <div class=\"content-box-large box-with-header\">
                                  <h3>Type de bien :";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "typebien", array()), "html", null, true);
            echo "</h3>
                            <h3>      Localite :";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "libellelocalite", array()), "html", null, true);
            echo "</h3>
                           <h3>   Description :";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "description", array()), "html", null, true);
            echo "</h3>
                          <h3> Prix location :";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</h3>
                        <h3>Images:
                                  ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 56
                echo " <img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "image", array()), "html", null, true);
                echo "\" alt=\"Card image cap\" width=\"100px\" height=\"80px\">";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo " </h3>
                            </div>
                        </div>
                    </div>
                </div>  
                 </div> <div class=\"col-md-6 montant\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-box-header\">
                                <div class=\"panel-title bg-primary\"><h1>MOntant</h1></div>
                            <div class=\"content-box-large box-with-header\">
                                  <h3>Caution :";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</h3>
                            <h3>      Mensualite :";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "</h3><input type=\"hidden\" name=\"\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "\">
                           <h3>    Total:";
            // line 70
            echo twig_escape_filter($this->env, (2 * $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array())), "html", null, true);
            echo "</h3>
                        <div class=\"checkbox\">
      <label> <h3><input type=\"checkbox\" value=\"1ans\" name=\"\">Contrat de 1 an renouvelable</h3></label>
    </div>
  </div>
                            </div>
                        </div>
                    </div>
                </div> 
                 <div class=\"col-md-6  contrat\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-box-header\">
                                <div class=\"panel-title bg-primary\"><h1>Contrat</h1></div>
                            <div class=\"content-box-large box-with-header\">
                                  <h3>Terme du contrat</h3>
 <div class=\"form-group\">
  <textarea class=\"form-control\" rows=\"5\" id=\"contrat\"></textarea>
</div>             
<div class=\"radio\">
  <label><input type=\"radio\" name=\"optradio\" id=\"optradio\">Accepter</label>
</div>
<div class=\"radio\">
  <label><input type=\"radio\" name=\"optradio\" id=\"optradio1\">Refuser</label>
</div>
<div class=\"submit\">
<form method=\"post\" >
<input type=\"hidden\" name=\"idreser\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "id", array()), "html", null, true);
            echo "\" />
<input type=\"hidden\" name=\"idclient\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "id", array()), "html", null, true);
            echo "\" />
<input type=\"hidden\" name=\"idbien\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "id", array()), "html", null, true);
            echo "\" />
<input type=\"hidden\" name=\"caution\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array()), "html", null, true);
            echo "\" />
<input type=\"hidden\" name=\"montant\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, (2 * $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixlocation", array())), "html", null, true);
            echo "\" />
<input type=\"submit\" value=\"enregistrer\" name=\"save\" id=\"save\" disabled/>

</form>
 
</div>
 
                            </div>
                        </div>
                    </div>
                </div>  
               </div>
              
               </div>
             
               
  <div class=\"col-md-2\"><a href=\"";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
            echo "\" class=\"btn btn-default bg-dark\">RETOUR</a>
</div>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 121
            echo "
 
 
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c18cf3101a72bf53ee36fc28a78dbd945b3e662cea9039884af9d0775bcc928b->leave($__internal_c18cf3101a72bf53ee36fc28a78dbd945b3e662cea9039884af9d0775bcc928b_prof);

        
        $__internal_2db294d091486e9db47927813a9b0d2551ea6d81fe210be51ae577dbb0e41c81->leave($__internal_2db294d091486e9db47927813a9b0d2551ea6d81fe210be51ae577dbb0e41c81_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 121,  236 => 117,  217 => 101,  213 => 100,  209 => 99,  205 => 98,  201 => 97,  171 => 70,  165 => 69,  161 => 68,  148 => 57,  139 => 56,  135 => 55,  130 => 53,  126 => 52,  122 => 51,  118 => 50,  106 => 41,  102 => 40,  98 => 39,  94 => 38,  89 => 37,  84 => 36,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base1.html.twig\" %}
{% block table %}
<style>
div{
    font-family:Times New Roman;
}
.panel-title{
    background-color:gray;
    color:white;height:50px;border-radius:5px;text-align:center;
}
.container{
    border:1px solid gray;
    border-radius:10px;
  margin-right:20px;
  margin-bottom:10px;
        margin-left:100px;

}
.client{
    width:400px;
}
}
.montant{

  margin-top: 20px;
}
.contrat{
 
}
</style>
<div class=\"row container\">
               <div class=\"col-md-6 client\">
                    <div class=\"content-box-large\">
                            <div class=\"panel-title\"><h1>CLIENT</h1></div>
                        <div class=\"panel-body\">
                        </div>{% for reservation in reservations %}
        <h3>Nom :{{reservation.client.nomComplet}}</h3>
    <h3>    CNI :{{reservation.client.numpiece}}</h3>
    <h3>    Tel :{{reservation.client.tel}}</h3>
        <h3>Adresse :{{reservation.client.adresse}}</h3>
      <h3>  Email :{{reservation.client.email}}</h3>
                    </div>
                </div>
                <div class=\"col-md-6\" bien>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-box-header\">
                                <div class=\"panel-title bg-primary\"><h1>BIEN</h1></div>
                            <div class=\"content-box-large box-with-header\">
                                  <h3>Type de bien :{{reservation.bien.typebien}}</h3>
                            <h3>      Localite :{{reservation.bien.libellelocalite}}</h3>
                           <h3>   Description :{{reservation.bien.description}}</h3>
                          <h3> Prix location :{{reservation.bien.prixlocation}}</h3>
                        <h3>Images:
                                  {% for image in reservation.bien.images %}
 <img class=\"card-img-top\" src=\"{{ asset('image/') }}{{image.image}}\" alt=\"Card image cap\" width=\"100px\" height=\"80px\">{% endfor %}
 </h3>
                            </div>
                        </div>
                    </div>
                </div>  
                 </div> <div class=\"col-md-6 montant\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-box-header\">
                                <div class=\"panel-title bg-primary\"><h1>MOntant</h1></div>
                            <div class=\"content-box-large box-with-header\">
                                  <h3>Caution :{{reservation.bien.prixlocation}}</h3>
                            <h3>      Mensualite :{{reservation.bien.prixlocation}}</h3><input type=\"hidden\" name=\"\" value=\"{{reservation.bien.prixlocation}}\">
                           <h3>    Total:{{2*reservation.bien.prixlocation}}</h3>
                        <div class=\"checkbox\">
      <label> <h3><input type=\"checkbox\" value=\"1ans\" name=\"\">Contrat de 1 an renouvelable</h3></label>
    </div>
  </div>
                            </div>
                        </div>
                    </div>
                </div> 
                 <div class=\"col-md-6  contrat\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"content-box-header\">
                                <div class=\"panel-title bg-primary\"><h1>Contrat</h1></div>
                            <div class=\"content-box-large box-with-header\">
                                  <h3>Terme du contrat</h3>
 <div class=\"form-group\">
  <textarea class=\"form-control\" rows=\"5\" id=\"contrat\"></textarea>
</div>             
<div class=\"radio\">
  <label><input type=\"radio\" name=\"optradio\" id=\"optradio\">Accepter</label>
</div>
<div class=\"radio\">
  <label><input type=\"radio\" name=\"optradio\" id=\"optradio1\">Refuser</label>
</div>
<div class=\"submit\">
<form method=\"post\" >
<input type=\"hidden\" name=\"idreser\" value=\"{{reservation.id}}\" />
<input type=\"hidden\" name=\"idclient\" value=\"{{reservation.client.id}}\" />
<input type=\"hidden\" name=\"idbien\" value=\"{{reservation.bien.id}}\" />
<input type=\"hidden\" name=\"caution\" value=\"{{reservation.bien.prixlocation}}\" />
<input type=\"hidden\" name=\"montant\" value=\"{{2*reservation.bien.prixlocation}}\" />
<input type=\"submit\" value=\"enregistrer\" name=\"save\" id=\"save\" disabled/>

</form>
 
</div>
 
                            </div>
                        </div>
                    </div>
                </div>  
               </div>
              
               </div>
             
               
  <div class=\"col-md-2\"><a href=\"{{path('accueil')}}\" class=\"btn btn-default bg-dark\">RETOUR</a>
</div>

{% else %}

 
 
  {% endfor %}
{% endblock %}

", "HTLImmobilierBundle:Front:details.html.twig", "/var/www/html/tempintegrer/src/HTL/ImmobilierBundle/Resources/views/Front/details.html.twig");
    }
}
