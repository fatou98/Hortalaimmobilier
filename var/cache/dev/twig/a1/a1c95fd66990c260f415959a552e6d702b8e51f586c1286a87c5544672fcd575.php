<?php

/* ::prop.html.twig */
class __TwigTemplate_f94344f033e7450d0e6370e0b04eb891e93c5f84629a4bcf0d522b6286985847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c9550477b8fc897aa7f867de363809dcb150310034e4d4fbd2a3561adacccf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9550477b8fc897aa7f867de363809dcb150310034e4d4fbd2a3561adacccf6->enter($__internal_3c9550477b8fc897aa7f867de363809dcb150310034e4d4fbd2a3561adacccf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::prop.html.twig"));

        $__internal_3a3ec05ad2633f7392333a8b0208acca078025fb1f6d07f1e9a1743880a6fbf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3ec05ad2633f7392333a8b0208acca078025fb1f6d07f1e9a1743880a6fbf5->enter($__internal_3a3ec05ad2633f7392333a8b0208acca078025fb1f6d07f1e9a1743880a6fbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::prop.html.twig"));

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
  <!-- Dropzone css -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

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
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchprix");
        echo "\">Accueil</a></li>
               
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
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchprix");
        echo "\">Accueil</a></li>
                
      </ul>
    </div>
  </div>
<br><br><br><br><br><br><br>
<div class=\"container\">
      <div class=\"row\">
        <div class=\"col text-center\">
          <div class=\"section_title\">
            <h2>PROPOSER UN BIEN</h2>
          </div>
        </div>
      </div>
        <div class=\"row\">
            <div class=\"col-md-6 register-sec\">
                <h2 class=\"text-center\">PROPRIETAIRE</h2>
                <form class=\"register-form\" action=\"\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"name\" class=\"text-uppercase\">Nom Complet</label>
                        <input type=\"name\" name=\"nomcomplet\" class=\"form-control\" placeholder=\"nom\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"Address\" class=\"text-uppercase\">Adresse</label>
                        <input type=\"address\" name=\"adresse\" class=\"form-control\" placeholder=\"adresse\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail\" class=\"text-uppercase\">Email</label>
                        <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"email\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"numpiece\" class=\"text-uppercase\">Numero Piece</label>
                        <input type=\"number\" name=\"numeropiece\" class=\"form-control\" placeholder=\"numero piece\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"tel\" class=\"text-uppercase\">TEL</label>
                        <input type=\"number\" name=\"tel\" class=\"form-control\" placeholder=\"tel\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"codebank\" class=\"text-uppercase\">Code Banque</label>
                        <input type=\"number\" name=\"codebanque\" class=\"form-control\" placeholder=\"code banque\">
                    </div>
                                           <div class=\"form-group\">
  <label for=\"comment\">Description Bien:</label>
  <textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>
</div> 
        

                    <div class=\"form-check\">
                      
                    </div>

                </form>

            </div>
                       <div class=\"col-md-6 register-sec\">                <h2 class=\"text-center\">BIEN</h2>
                          <form class=\"cmxform form-horizontal tasi-form\" id=\"signupForm\" method=\"get\" action=\"#\" novalidate=\"novalidate\">
                                               
                                                <div class=\"form-group\">
                                                    <label for=\"firstname\" class=\"control-label \">Nom bien </label>
                                                        <input class=\"form-control\" id=\"nombien\" name=\"nombien\" type=\"text\">
                                                    
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"lastname\" class=\"control-label \">Prix Location  *</label>
                                                        <input class=\"form-control\" id=\"prixlocation\" >
                                                </div>
                                                <div class=\"form-group\" id=\"typebien\">
  <label for=\"usr\">Type bien:</label>
  <input type=\"text\" class=\"form-control\" id=\"typebien\">
</div>
<div class=\"form-group\" id=\"localite\">
  <label for=\"usr\">Localite:</label>
  <input type=\"text\" class=\"form-control\" id=\"localite\">
</div>
                                                <div class=\"form-group\">
                                                    <label for=\"confirm_password\" class=\"control-label \">Parent bien</label>
                                                        <input class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" type=\"number\">
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"email\" class=\"control-label\">Etat*</label>
                                                        <input class=\"form-control\" id=\"email\" name=\"email\" type=\"number\">
                                                </div>
                                              <label for=\"confirm_password\" class=\"control-label col-lg-2\">Image:</label>
                                             <div class=\"row\">
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <div action=\"#\" class=\"dropzone\" id=\"dropzone\">
                                      <div class=\"fallback\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\">
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                                                <div class=\"form-group\">
                                                    <div class=\"col-lg-offset-2 col-lg-10\">
                                                        <button class=\"btn btn-danger waves-effect waves-light\" type=\"submit\">Enregistrer</button>
                                                        <button class=\"btn btn-default waves-effect\" type=\"button\">Annuler</button>
                                                    </div>
                                                </div>
                                            </form>

</div>
   </div></div></div>
  
</div>

<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1.custom/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/contact_custom.js"), "html", null, true);
        echo "\"></script>
   <!-- Page Specific JS Libraries -->
        <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_3c9550477b8fc897aa7f867de363809dcb150310034e4d4fbd2a3561adacccf6->leave($__internal_3c9550477b8fc897aa7f867de363809dcb150310034e4d4fbd2a3561adacccf6_prof);

        
        $__internal_3a3ec05ad2633f7392333a8b0208acca078025fb1f6d07f1e9a1743880a6fbf5->leave($__internal_3a3ec05ad2633f7392333a8b0208acca078025fb1f6d07f1e9a1743880a6fbf5_prof);

    }

    public function getTemplateName()
    {
        return "::prop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 255,  351 => 253,  347 => 252,  342 => 250,  338 => 249,  334 => 248,  330 => 247,  326 => 246,  322 => 245,  318 => 244,  314 => 243,  202 => 134,  168 => 103,  84 => 22,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  25 => 1,);
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
  <!-- Dropzone css -->
        <link href=\"{{asset('assets/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">

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
                
      </ul>
    </div>
  </div>
<br><br><br><br><br><br><br>
<div class=\"container\">
      <div class=\"row\">
        <div class=\"col text-center\">
          <div class=\"section_title\">
            <h2>PROPOSER UN BIEN</h2>
          </div>
        </div>
      </div>
        <div class=\"row\">
            <div class=\"col-md-6 register-sec\">
                <h2 class=\"text-center\">PROPRIETAIRE</h2>
                <form class=\"register-form\" action=\"\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"name\" class=\"text-uppercase\">Nom Complet</label>
                        <input type=\"name\" name=\"nomcomplet\" class=\"form-control\" placeholder=\"nom\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"Address\" class=\"text-uppercase\">Adresse</label>
                        <input type=\"address\" name=\"adresse\" class=\"form-control\" placeholder=\"adresse\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail\" class=\"text-uppercase\">Email</label>
                        <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"email\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"numpiece\" class=\"text-uppercase\">Numero Piece</label>
                        <input type=\"number\" name=\"numeropiece\" class=\"form-control\" placeholder=\"numero piece\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"tel\" class=\"text-uppercase\">TEL</label>
                        <input type=\"number\" name=\"tel\" class=\"form-control\" placeholder=\"tel\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"codebank\" class=\"text-uppercase\">Code Banque</label>
                        <input type=\"number\" name=\"codebanque\" class=\"form-control\" placeholder=\"code banque\">
                    </div>
                                           <div class=\"form-group\">
  <label for=\"comment\">Description Bien:</label>
  <textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>
</div> 
        

                    <div class=\"form-check\">
                      
                    </div>

                </form>

            </div>
                       <div class=\"col-md-6 register-sec\">                <h2 class=\"text-center\">BIEN</h2>
                          <form class=\"cmxform form-horizontal tasi-form\" id=\"signupForm\" method=\"get\" action=\"#\" novalidate=\"novalidate\">
                                               
                                                <div class=\"form-group\">
                                                    <label for=\"firstname\" class=\"control-label \">Nom bien </label>
                                                        <input class=\"form-control\" id=\"nombien\" name=\"nombien\" type=\"text\">
                                                    
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"lastname\" class=\"control-label \">Prix Location  *</label>
                                                        <input class=\"form-control\" id=\"prixlocation\" >
                                                </div>
                                                <div class=\"form-group\" id=\"typebien\">
  <label for=\"usr\">Type bien:</label>
  <input type=\"text\" class=\"form-control\" id=\"typebien\">
</div>
<div class=\"form-group\" id=\"localite\">
  <label for=\"usr\">Localite:</label>
  <input type=\"text\" class=\"form-control\" id=\"localite\">
</div>
                                                <div class=\"form-group\">
                                                    <label for=\"confirm_password\" class=\"control-label \">Parent bien</label>
                                                        <input class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" type=\"number\">
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"email\" class=\"control-label\">Etat*</label>
                                                        <input class=\"form-control\" id=\"email\" name=\"email\" type=\"number\">
                                                </div>
                                              <label for=\"confirm_password\" class=\"control-label col-lg-2\">Image:</label>
                                             <div class=\"row\">
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <div action=\"#\" class=\"dropzone\" id=\"dropzone\">
                                      <div class=\"fallback\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\">
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                                                <div class=\"form-group\">
                                                    <div class=\"col-lg-offset-2 col-lg-10\">
                                                        <button class=\"btn btn-danger waves-effect waves-light\" type=\"submit\">Enregistrer</button>
                                                        <button class=\"btn btn-default waves-effect\" type=\"button\">Annuler</button>
                                                    </div>
                                                </div>
                                            </form>

</div>
   </div></div></div>
  
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
   <!-- Page Specific JS Libraries -->
        <script src=\"{{asset('assets/plugins/dropzone/dist/dropzone.js')}}\"></script>

</body>

</html>", "::prop.html.twig", "/var/www/html/tempintegrer/app/Resources/views/prop.html.twig");
    }
}
