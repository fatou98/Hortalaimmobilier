<?php

/* ::base.html.twig */
class __TwigTemplate_a0483be191faa1e02990afaa9a83b43734d803e33c36294e5b03b68faa847fc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'liste' => array($this, 'block_liste'),
            'liste1' => array($this, 'block_liste1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4dfaa3ea33d425ca3c04694a76c34741f76e167e374071d86a368d480492048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4dfaa3ea33d425ca3c04694a76c34741f76e167e374071d86a368d480492048->enter($__internal_e4dfaa3ea33d425ca3c04694a76c34741f76e167e374071d86a368d480492048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ca7ff00adb3cdd6737462c018d87c42c256fdb65bc73634cbc9d2816a9099fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7ff00adb3cdd6737462c018d87c42c256fdb65bc73634cbc9d2816a9099fb5->enter($__internal_ca7ff00adb3cdd6737462c018d87c42c256fdb65bc73634cbc9d2816a9099fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Hortala Immobilier</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"Colo Shop Template\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/main_styles.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/responsive.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1.custom/jquery-ui.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/contact_styles.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/contact_responsive.css"), "html", null, true);
        echo "\">
</head>
<body>
<style type=\"text/css\">
  
.reservations a{
    color:black;
}
.reservations a:hover ,.reservations a:focus , .reservations a:visited{
    color:black;
}
.pagination > li > a,
.pagination > li > span{
    color: black;

}

.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus{
    background-color: #246200;
    color:white;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus{
    background-color:#246200;
    color: white;
    border: 1px solid #dddddd;
}
</style>
<div class=\"super_container\">

  <!-- Header -->

  <header class=\"header trans_300\">

    <!-- Top Navigation -->

    <div class=\"top_nav\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <div class=\"top_nav_left\">77 000 000 00 | 77 777 77 77 </div>
          </div>
          <div class=\"col-md-6 text-right\">
            <div class=\"top_nav_right\">
              <ul class=\"top_nav_menu\">
                <li class=\"account\">
                  <a href=\"#\">
                    My Account
                    <i class=\"fa fa-angle-down\"></i>
                  </a>
                  <ul class=\"account_selection\">
                    <li><a href=\"#\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Sign In</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Register</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Navigation -->

    <div class=\"main_nav_container\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-right\">
            <div class=\"logo_container\">
              <a href=\"#\">Hortala <span>Immobilier</span></a>
            </div>
            <nav class=\"navbar\">
              <ul class=\"navbar_menu\">
                <li><a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchprix");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueiladmin");
        echo "\">Proposer</a></li>
                <li><a href=\"#\">Louer</a></li>
                <li><a href=\"#\">Contact</a></li>
              </ul>
              
              <div class=\"hamburger_container\">
                <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>

  </header>

  <div class=\"fs_menu_overlay\"></div>
  <div class=\"hamburger_menu\">
    <div class=\"hamburger_close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
    <div class=\"hamburger_menu_content text-right\">
      <ul class=\"menu_top_nav\">
      
        <li class=\"menu_item has-children\">
          <a href=\"#\">
            My Account
            <i class=\"fa fa-angle-down\"></i>
          </a>
          <ul class=\"menu_selection\">
            <li><a href=\"#\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Sign In</a></li>
            <li><a href=\"#\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Register</a></li>
          </ul>
        </li>
        <li><a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchprix");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueiladmin");
        echo "\">Proposer</a></li>
                <li><a href=\"#\">Louer</a></li>
                <li><a href=\"#\">Contact</a></li>
      </ul>
    </div>
  </div>
  <!-- Slider -->
  <div class=\"main_slider\" style=\"background-image:url('";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/slide3.jpg"), "html", null, true);
        echo "')\">
    <div class=\"container fill_height\">
      <div class=\"row align-items-center fill_height\">
        <div class=\"col\">
          <div class=\"main_slider_content\" style=\"width: 350px;background-color: white;padding: 30px; \">
            <h3 style=\"\">Rechercher le bien qui vous ressemble</h3>
            <form class=\"form-group\" method=\"post\">
              <div class=\"form-group\">
      <label for=\"usr\">Type:</label>
      <select name=\"libelletype\" class=\"form-control\"><option value=\"\" selected=\"true\">Choisir un type</option>
      ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typebiens"] ?? $this->getContext($context, "typebiens")));
        foreach ($context['_seq'] as $context["_key"] => $context["typebien"]) {
            // line 152
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typebien"], "libelletype", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typebien"], "libelletype", array()), "html", null, true);
            echo "</option>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typebien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "             </select></div>              <div class=\"form-group\">

      <label for=\"localite\">Localite:</label>
      <select name=\"libellelocalite\" class=\"form-control\"><option value=\"\" selected=\"true\">Choisir une localite</option>

      ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 160
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libellelocalite", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libellelocalite", array()), "html", null, true);
            echo "</option>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                        </select></div> <div class=\"form-group\">

      <label for=\"budget\">Budget:</label>
      <input type=\"number\" class=\"form-control\" name=\"prixlocation\" min=\"30000\">  </div>  
      <div class=\"form-group\"><label for=\"description\">Description:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"description\"></div>
          <button type=\"submit\" class=\"btn btn-danger mb-2\">Submit</button>
          
                                            </form></div>
        
        </div>
      </div>
    </div>
  </div>


<!-- Blogs -->

  <div class=\"blogs\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col text-center\">
          <div class=\"section_title\">
            <h2>Liste des Biens</h2>
          </div>
        </div>
      </div>
      
       ";
        // line 190
        $this->displayBlock('liste', $context, $blocks);
        // line 191
        echo "

    </div>
  </div>

  <!-- New Arrivals -->

  <div class=\"new_arrivals\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col text-center\">
          <div class=\"section_title new_arrivals_title\">
            <h2>New Arrivals</h2>
          </div>
        </div>
      </div>
      <div class=\"row align-items-center\">
        <div class=\"col text-center\">
          <div class=\"new_arrivals_sorting\">
            <ul class=\"arrivals_grid_sorting clearfix button-group filters-button-group\">
              <li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked\" data-filter=\"*\">all</li>
              <li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center\" data-filter=\".women\">Appartement</li>
              <li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center\" data-filter=\".accessories\">Maison</li>
              <li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center\" data-filter=\".men\">Studio</li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"product-grid\" data-isotope='{ \"itemSelector\": \".product-item\", \"layoutMode\": \"fitRows\" }'>

            <!-- Product 1 -->
       ";
        // line 224
        $this->displayBlock('liste1', $context, $blocks);
        // line 225
        echo "
           



          </div>
        </div>
      </div>
    </div>
  </div>

  

  <!-- Map Container -->

    <div class=\"row\">
      <div class=\"col\">
        <div id=\"google_map\">
          <div class=\"map_container\">
            <div id=\"map\"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Us -->

    <div class=\"row\">

  
        <!-- Follow Us -->

      <div class=\"col-lg-6 get_in_touch_col\">
        <div class=\"get_in_touch_contents\">
          <h1>CONTACTEZ-NOUS!</h1>
          <form action=\"post\">
            <div>
              <input id=\"input_name\" class=\"form_input input_name input_ph\" type=\"text\" name=\"name\" placeholder=\"Name\" required=\"required\" data-error=\"Name is required.\">
              <input id=\"input_email\" class=\"form_input input_email input_ph\" type=\"email\" name=\"email\" placeholder=\"Email\" required=\"required\" data-error=\"Valid email is required.\">
              <input id=\"input_website\" class=\"form_input input_website input_ph\" type=\"url\" name=\"name\" placeholder=\"Website\" required=\"required\" data-error=\"Name is required.\">
              <textarea id=\"input_message\" class=\"input_ph input_message\" name=\"message\"  placeholder=\"Message\" rows=\"3\" required data-error=\"Please, write us a message.\"></textarea>
            </div>
            <div>
              <button id=\"review_submit\" type=\"submit\" class=\"red_button message_submit_btn trans_300\" value=\"Submit\">send message</button>
            </div>
          </form>
        </div>
      </div>
    <div class=\"col-lg-6 contact_col\">
       
        <div class=\"follow_us_contents\">
          <h1>Nous rejoindre sur</h1>
          <ul class=\"social d-flex flex-row\">
            <li><a href=\"#\" style=\"background-color: #3a61c9\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\" style=\"background-color: #41a1f6\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\" style=\"background-color: #fb4343\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\" style=\"background-color: #8f6247\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
          </ul>
        </div>
        </div>

    </div>
  </div>

  
</div>

<script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
<script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1.custom/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/contact_custom.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_e4dfaa3ea33d425ca3c04694a76c34741f76e167e374071d86a368d480492048->leave($__internal_e4dfaa3ea33d425ca3c04694a76c34741f76e167e374071d86a368d480492048_prof);

        
        $__internal_ca7ff00adb3cdd6737462c018d87c42c256fdb65bc73634cbc9d2816a9099fb5->leave($__internal_ca7ff00adb3cdd6737462c018d87c42c256fdb65bc73634cbc9d2816a9099fb5_prof);

    }

    // line 190
    public function block_liste($context, array $blocks = array())
    {
        $__internal_aba45c8ed0010e7e19273c85b80c9145aaebe202239d342c10cecc3351837f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba45c8ed0010e7e19273c85b80c9145aaebe202239d342c10cecc3351837f45->enter($__internal_aba45c8ed0010e7e19273c85b80c9145aaebe202239d342c10cecc3351837f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste"));

        $__internal_d40508fe125a80e87605436c265f21dbf81a89da832c76ee35d31a7a633eaf8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40508fe125a80e87605436c265f21dbf81a89da832c76ee35d31a7a633eaf8a->enter($__internal_d40508fe125a80e87605436c265f21dbf81a89da832c76ee35d31a7a633eaf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste"));

        
        $__internal_d40508fe125a80e87605436c265f21dbf81a89da832c76ee35d31a7a633eaf8a->leave($__internal_d40508fe125a80e87605436c265f21dbf81a89da832c76ee35d31a7a633eaf8a_prof);

        
        $__internal_aba45c8ed0010e7e19273c85b80c9145aaebe202239d342c10cecc3351837f45->leave($__internal_aba45c8ed0010e7e19273c85b80c9145aaebe202239d342c10cecc3351837f45_prof);

    }

    // line 224
    public function block_liste1($context, array $blocks = array())
    {
        $__internal_9cf3dba934821a4552b7e44fb47d679b3450b03eb8f697030aff50edaf1d8291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf3dba934821a4552b7e44fb47d679b3450b03eb8f697030aff50edaf1d8291->enter($__internal_9cf3dba934821a4552b7e44fb47d679b3450b03eb8f697030aff50edaf1d8291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste1"));

        $__internal_734462c2b89e66407f1fcd30ee078a84a159ee52814ce10b7aa93541fbbb4352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734462c2b89e66407f1fcd30ee078a84a159ee52814ce10b7aa93541fbbb4352->enter($__internal_734462c2b89e66407f1fcd30ee078a84a159ee52814ce10b7aa93541fbbb4352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liste1"));

        
        $__internal_734462c2b89e66407f1fcd30ee078a84a159ee52814ce10b7aa93541fbbb4352->leave($__internal_734462c2b89e66407f1fcd30ee078a84a159ee52814ce10b7aa93541fbbb4352_prof);

        
        $__internal_9cf3dba934821a4552b7e44fb47d679b3450b03eb8f697030aff50edaf1d8291->leave($__internal_9cf3dba934821a4552b7e44fb47d679b3450b03eb8f697030aff50edaf1d8291_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 224,  456 => 190,  442 => 302,  438 => 301,  433 => 299,  429 => 298,  425 => 297,  421 => 296,  417 => 295,  413 => 294,  409 => 293,  405 => 292,  336 => 225,  334 => 224,  299 => 191,  297 => 190,  267 => 162,  256 => 160,  252 => 159,  245 => 154,  234 => 152,  230 => 151,  217 => 141,  207 => 134,  203 => 133,  168 => 101,  164 => 100,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  27 => 1,);
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
<html lang=\"en\">
<head>
<title>Hortala Immobilier</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"Colo Shop Template\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/bootstrap4/bootstrap.min.css')}}\">
<link href=\"{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/main_styles.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/responsive.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('plugins/themify-icons/themify-icons.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/contact_styles.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/contact_responsive.css')}}\">
</head>
<body>
<style type=\"text/css\">
  
.reservations a{
    color:black;
}
.reservations a:hover ,.reservations a:focus , .reservations a:visited{
    color:black;
}
.pagination > li > a,
.pagination > li > span{
    color: black;

}

.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus{
    background-color: #246200;
    color:white;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus{
    background-color:#246200;
    color: white;
    border: 1px solid #dddddd;
}
</style>
<div class=\"super_container\">

  <!-- Header -->

  <header class=\"header trans_300\">

    <!-- Top Navigation -->

    <div class=\"top_nav\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <div class=\"top_nav_left\">77 000 000 00 | 77 777 77 77 </div>
          </div>
          <div class=\"col-md-6 text-right\">
            <div class=\"top_nav_right\">
              <ul class=\"top_nav_menu\">
                <li class=\"account\">
                  <a href=\"#\">
                    My Account
                    <i class=\"fa fa-angle-down\"></i>
                  </a>
                  <ul class=\"account_selection\">
                    <li><a href=\"#\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Sign In</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Register</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Navigation -->

    <div class=\"main_nav_container\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-right\">
            <div class=\"logo_container\">
              <a href=\"#\">Hortala <span>Immobilier</span></a>
            </div>
            <nav class=\"navbar\">
              <ul class=\"navbar_menu\">
                <li><a href=\"{{path('searchprix')}}\">Accueil</a></li>
                <li><a href=\"{{path('accueiladmin')}}\">Proposer</a></li>
                <li><a href=\"#\">Louer</a></li>
                <li><a href=\"#\">Contact</a></li>
              </ul>
              
              <div class=\"hamburger_container\">
                <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>

  </header>

  <div class=\"fs_menu_overlay\"></div>
  <div class=\"hamburger_menu\">
    <div class=\"hamburger_close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
    <div class=\"hamburger_menu_content text-right\">
      <ul class=\"menu_top_nav\">
      
        <li class=\"menu_item has-children\">
          <a href=\"#\">
            My Account
            <i class=\"fa fa-angle-down\"></i>
          </a>
          <ul class=\"menu_selection\">
            <li><a href=\"#\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>Sign In</a></li>
            <li><a href=\"#\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Register</a></li>
          </ul>
        </li>
        <li><a href=\"{{path('searchprix')}}\">Accueil</a></li>
                <li><a href=\"{{path('accueiladmin')}}\">Proposer</a></li>
                <li><a href=\"#\">Louer</a></li>
                <li><a href=\"#\">Contact</a></li>
      </ul>
    </div>
  </div>
  <!-- Slider -->
  <div class=\"main_slider\" style=\"background-image:url('{{asset('image/slide3.jpg')}}')\">
    <div class=\"container fill_height\">
      <div class=\"row align-items-center fill_height\">
        <div class=\"col\">
          <div class=\"main_slider_content\" style=\"width: 350px;background-color: white;padding: 30px; \">
            <h3 style=\"\">Rechercher le bien qui vous ressemble</h3>
            <form class=\"form-group\" method=\"post\">
              <div class=\"form-group\">
      <label for=\"usr\">Type:</label>
      <select name=\"libelletype\" class=\"form-control\"><option value=\"\" selected=\"true\">Choisir un type</option>
      {% for typebien in typebiens %}
      <option value=\"{{typebien.libelletype}}\">{{typebien.libelletype}}</option>
           {% endfor %}
             </select></div>              <div class=\"form-group\">

      <label for=\"localite\">Localite:</label>
      <select name=\"libellelocalite\" class=\"form-control\"><option value=\"\" selected=\"true\">Choisir une localite</option>

      {% for localite in localites %}
      <option value=\"{{localite.libellelocalite}}\">{{localite.libellelocalite}}</option>
               {% endfor %}
                        </select></div> <div class=\"form-group\">

      <label for=\"budget\">Budget:</label>
      <input type=\"number\" class=\"form-control\" name=\"prixlocation\" min=\"30000\">  </div>  
      <div class=\"form-group\"><label for=\"description\">Description:</label>
                                              <input type=\"text\" class=\"form-control\" name=\"description\"></div>
          <button type=\"submit\" class=\"btn btn-danger mb-2\">Submit</button>
          
                                            </form></div>
        
        </div>
      </div>
    </div>
  </div>


<!-- Blogs -->

  <div class=\"blogs\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col text-center\">
          <div class=\"section_title\">
            <h2>Liste des Biens</h2>
          </div>
        </div>
      </div>
      
       {% block liste %}{% endblock %}


    </div>
  </div>

  <!-- New Arrivals -->

  <div class=\"new_arrivals\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col text-center\">
          <div class=\"section_title new_arrivals_title\">
            <h2>New Arrivals</h2>
          </div>
        </div>
      </div>
      <div class=\"row align-items-center\">
        <div class=\"col text-center\">
          <div class=\"new_arrivals_sorting\">
            <ul class=\"arrivals_grid_sorting clearfix button-group filters-button-group\">
              <li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked\" data-filter=\"*\">all</li>
              <li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center\" data-filter=\".women\">Appartement</li>
              <li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center\" data-filter=\".accessories\">Maison</li>
              <li class=\"grid_sorting_button button d-flex flex-column justify-content-center align-items-center\" data-filter=\".men\">Studio</li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"product-grid\" data-isotope='{ \"itemSelector\": \".product-item\", \"layoutMode\": \"fitRows\" }'>

            <!-- Product 1 -->
       {% block liste1 %}{% endblock %}

           



          </div>
        </div>
      </div>
    </div>
  </div>

  

  <!-- Map Container -->

    <div class=\"row\">
      <div class=\"col\">
        <div id=\"google_map\">
          <div class=\"map_container\">
            <div id=\"map\"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Us -->

    <div class=\"row\">

  
        <!-- Follow Us -->

      <div class=\"col-lg-6 get_in_touch_col\">
        <div class=\"get_in_touch_contents\">
          <h1>CONTACTEZ-NOUS!</h1>
          <form action=\"post\">
            <div>
              <input id=\"input_name\" class=\"form_input input_name input_ph\" type=\"text\" name=\"name\" placeholder=\"Name\" required=\"required\" data-error=\"Name is required.\">
              <input id=\"input_email\" class=\"form_input input_email input_ph\" type=\"email\" name=\"email\" placeholder=\"Email\" required=\"required\" data-error=\"Valid email is required.\">
              <input id=\"input_website\" class=\"form_input input_website input_ph\" type=\"url\" name=\"name\" placeholder=\"Website\" required=\"required\" data-error=\"Name is required.\">
              <textarea id=\"input_message\" class=\"input_ph input_message\" name=\"message\"  placeholder=\"Message\" rows=\"3\" required data-error=\"Please, write us a message.\"></textarea>
            </div>
            <div>
              <button id=\"review_submit\" type=\"submit\" class=\"red_button message_submit_btn trans_300\" value=\"Submit\">send message</button>
            </div>
          </form>
        </div>
      </div>
    <div class=\"col-lg-6 contact_col\">
       
        <div class=\"follow_us_contents\">
          <h1>Nous rejoindre sur</h1>
          <ul class=\"social d-flex flex-row\">
            <li><a href=\"#\" style=\"background-color: #3a61c9\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\" style=\"background-color: #41a1f6\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\" style=\"background-color: #fb4343\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\" style=\"background-color: #8f6247\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
          </ul>
        </div>
        </div>

    </div>
  </div>

  
</div>

<script src=\"{{asset('js/jquery-3.2.1.min.js')}}\"></script>
<script src=\"{{asset('styles/bootstrap4/popper.js')}}\"></script>
<script src=\"{{asset('styles/bootstrap4/bootstrap.min.js')}}\"></script>
<script src=\"{{asset('plugins/Isotope/isotope.pkgd.min.js')}}\"></script>
<script src=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}\"></script>
<script src=\"{{asset('plugins/easing/easing.js')}}\"></script>
<script src=\"{{asset('js/custom.js')}}\"></script>
<script src=\"{{asset('plugins/easing/easing.js')}}\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
<script src=\"{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}\"></script>
<script src=\"{{asset('js/contact_custom.js')}}\"></script>
</body>

</html>", "::base.html.twig", "/var/www/html/tempintegrer/app/Resources/views/base.html.twig");
    }
}
