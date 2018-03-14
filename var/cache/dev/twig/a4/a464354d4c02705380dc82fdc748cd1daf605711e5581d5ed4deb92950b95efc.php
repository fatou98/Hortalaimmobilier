<?php

/* HTLImmobilierBundle:Front:listebien.html.twig */
class __TwigTemplate_b273c7524c3c59645c6ad33ce7371e9dfc993abc94f36b542af58c6a046a8776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::base.html.twig", "HTLImmobilierBundle:Front:listebien.html.twig", 4);
        $this->blocks = array(
            'liste' => array($this, 'block_liste'),
            'liste1' => array($this, 'block_liste1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f30ad520ed3234f54910876f2d4146aeb77da0a4532b733d6dfb18ee4e5a90e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f30ad520ed3234f54910876f2d4146aeb77da0a4532b733d6dfb18ee4e5a90e->enter($__internal_4f30ad520ed3234f54910876f2d4146aeb77da0a4532b733d6dfb18ee4e5a90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listebien.html.twig"));

        $__internal_27426e9e384ffeb67c2f3ac0e83f776909ef7d8ccf9f048fe8c33209ffc80abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27426e9e384ffeb67c2f3ac0e83f776909ef7d8ccf9f048fe8c33209ffc80abc->enter($__internal_27426e9e384ffeb67c2f3ac0e83f776909ef7d8ccf9f048fe8c33209ffc80abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:listebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f30ad520ed3234f54910876f2d4146aeb77da0a4532b733d6dfb18ee4e5a90e->leave($__internal_4f30ad520ed3234f54910876f2d4146aeb77da0a4532b733d6dfb18ee4e5a90e_prof);

        
        $__internal_27426e9e384ffeb67c2f3ac0e83f776909ef7d8ccf9f048fe8c33209ffc80abc->leave($__internal_27426e9e384ffeb67c2f3ac0e83f776909ef7d8ccf9f048fe8c33209ffc80abc_prof);

    }

    // line 6
    public function block_liste($context, array $blocks = array())
    {
        $__internal_77dbdb989309973cf957433a64c20b3c76a7d9a06671519b86779970e940224f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77dbdb989309973cf957433a64c20b3c76a7d9a06671519b86779970e940224f->enter($__internal_77dbdb989309973cf957433a64c20b3c76a7d9a06671519b86779970e940224f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste"));

        $__internal_75485d45642c5153eeb03a8755fee20ef78904fde9c075d31ae781a3e012bf0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75485d45642c5153eeb03a8755fee20ef78904fde9c075d31ae781a3e012bf0e->enter($__internal_75485d45642c5153eeb03a8755fee20ef78904fde9c075d31ae781a3e012bf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste"));

        // line 7
        echo "      <div class=\"row blogs_container reservations\">


  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 11
            echo "
  <div class=\"col-lg-4 blog_item_col\" style=\"margin-bottom:10px;\">
          <div class=\"blog_item\">
            <div class=\"blog_background\" style=\"background-image:url('";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "html", null, true);
            echo "')\"></div>
            <div class=\"blog_content d-flex flex-column align-items-center justify-content-center text-center\">
              <h4 class=\"blog_title\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</h4>
              <span class=\"blog_meta\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "| ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</span>
              <a class=\"btn btn-default reserver blog_more\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => $this->getAttribute($context["bien"], "id", array()), "libelletype" => $this->getAttribute($context["bien"], "typebien", array()))), "html", null, true);
            echo "\" >Reserver</a>
            </div>
          </div>
        </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "    <h1>aucun bien de ces criteres</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      </div>

        <div class=\"text-center\">";
        // line 26
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["biens"] ?? $this->getContext($context, "biens")));
        echo "</div>

";
        
        $__internal_75485d45642c5153eeb03a8755fee20ef78904fde9c075d31ae781a3e012bf0e->leave($__internal_75485d45642c5153eeb03a8755fee20ef78904fde9c075d31ae781a3e012bf0e_prof);

        
        $__internal_77dbdb989309973cf957433a64c20b3c76a7d9a06671519b86779970e940224f->leave($__internal_77dbdb989309973cf957433a64c20b3c76a7d9a06671519b86779970e940224f_prof);

    }

    // line 31
    public function block_liste1($context, array $blocks = array())
    {
        $__internal_dedc2c3355ab90922cb0869436a24db9123b89a5b6634ac70210c14b21a1c58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dedc2c3355ab90922cb0869436a24db9123b89a5b6634ac70210c14b21a1c58b->enter($__internal_dedc2c3355ab90922cb0869436a24db9123b89a5b6634ac70210c14b21a1c58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste1"));

        $__internal_b874f9b0b11b3a1dbad186171384f439d6a6ef0eda4ec9893b8fd11cab6bbdeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b874f9b0b11b3a1dbad186171384f439d6a6ef0eda4ec9893b8fd11cab6bbdeb->enter($__internal_b874f9b0b11b3a1dbad186171384f439d6a6ef0eda4ec9893b8fd11cab6bbdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste1"));

        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 33
            echo "
            <div class=\"product-item men\">
              <div class=\"product discount product_filter\">
                <div class=\"product_image\">
                  <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "html", null, true);
            echo "\" alt=\"\" height=\"200px\">
                </div>
                <div class=\"product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center\"><span>HTL</span></div>
                <div class=\"product_info\">
                  <h6 class=\"product_name\"><a href=\"single.html\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</a></h6>
                  <div class=\"product_price\"> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "libellelocalite", array()), "html", null, true);
            echo "|";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo " </div>
                </div>
              </div>
              <div class=\"red_button add_to_cart_button\">  <a class=\"btn btn-default reserver\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver", array("id" => $this->getAttribute($context["bien"], "id", array()), "libelletype" => $this->getAttribute($context["bien"], "typebien", array()))), "html", null, true);
            echo "\" >Reserver</a>
            </div>
            </div>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "    <h1>aucun bien de ces criteres</h1>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "          <div class=\"text-center\">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["biens"] ?? $this->getContext($context, "biens")));
        echo "</div>

";
        
        $__internal_b874f9b0b11b3a1dbad186171384f439d6a6ef0eda4ec9893b8fd11cab6bbdeb->leave($__internal_b874f9b0b11b3a1dbad186171384f439d6a6ef0eda4ec9893b8fd11cab6bbdeb_prof);

        
        $__internal_dedc2c3355ab90922cb0869436a24db9123b89a5b6634ac70210c14b21a1c58b->leave($__internal_dedc2c3355ab90922cb0869436a24db9123b89a5b6634ac70210c14b21a1c58b_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:listebien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 52,  165 => 50,  155 => 45,  147 => 42,  143 => 41,  135 => 37,  129 => 33,  124 => 32,  115 => 31,  102 => 26,  98 => 24,  91 => 23,  81 => 18,  75 => 17,  71 => 16,  65 => 14,  60 => 11,  55 => 10,  50 => 7,  41 => 6,  11 => 4,);
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


{% extends \"::base.html.twig\" %}

{% block liste %}
      <div class=\"row blogs_container reservations\">


  {% for bien in biens %}

  <div class=\"col-lg-4 blog_item_col\" style=\"margin-bottom:10px;\">
          <div class=\"blog_item\">
            <div class=\"blog_background\" style=\"background-image:url('{{ asset('image/') }}{{bien.images[0]}}')\"></div>
            <div class=\"blog_content d-flex flex-column align-items-center justify-content-center text-center\">
              <h4 class=\"blog_title\">{{bien.typebien}}</h4>
              <span class=\"blog_meta\">{{bien.libellelocalite}}| {{bien.prixlocation}}</span>
              <a class=\"btn btn-default reserver blog_more\" href=\"{{path('reserver',{id:bien.id,libelletype:bien.typebien})}}\" >Reserver</a>
            </div>
          </div>
        </div>
{% else %}
    <h1>aucun bien de ces criteres</h1>
  {% endfor %}      </div>

        <div class=\"text-center\">{{ knp_pagination_render(biens) }}</div>

{% endblock %}


 {% block liste1 %}
{% for bien in biens %}

            <div class=\"product-item men\">
              <div class=\"product discount product_filter\">
                <div class=\"product_image\">
                  <img src=\"{{ asset('image/') }}{{bien.images[0]}}\" alt=\"\" height=\"200px\">
                </div>
                <div class=\"product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center\"><span>HTL</span></div>
                <div class=\"product_info\">
                  <h6 class=\"product_name\"><a href=\"single.html\">{{bien.typebien}}</a></h6>
                  <div class=\"product_price\"> {{bien.libellelocalite}}|{{bien.prixlocation}} </div>
                </div>
              </div>
              <div class=\"red_button add_to_cart_button\">  <a class=\"btn btn-default reserver\" href=\"{{path('reserver',{id:bien.id,libelletype:bien.typebien})}}\" >Reserver</a>
            </div>
            </div>

{% else %}
    <h1>aucun bien de ces criteres</h1>
  {% endfor %}
          <div class=\"text-center\">{{ knp_pagination_render(biens) }}</div>

{% endblock %}








", "HTLImmobilierBundle:Front:listebien.html.twig", "/var/www/html/tempintegrer/src/HTL/ImmobilierBundle/Resources/views/Front/listebien.html.twig");
    }
}
