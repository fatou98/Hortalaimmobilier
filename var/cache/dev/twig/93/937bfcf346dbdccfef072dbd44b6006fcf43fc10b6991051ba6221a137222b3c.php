<?php

/* ::detailsproduit.html.twig */
class __TwigTemplate_d36b9dcdd27ed4db77ed69b3c4b4a46a7d7bf8fbb82cb17ba1ffaa43fa21b51b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'image' => array($this, 'block_image'),
            'image1' => array($this, 'block_image1'),
            'description' => array($this, 'block_description'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23f4b8245744baf6c0af60ad2f9196dd3db95c650629843ebb7061ef6f377e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f4b8245744baf6c0af60ad2f9196dd3db95c650629843ebb7061ef6f377e26->enter($__internal_23f4b8245744baf6c0af60ad2f9196dd3db95c650629843ebb7061ef6f377e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::detailsproduit.html.twig"));

        $__internal_6912bf1d42ccb2e82fcc5d1a97855ac51152141499d2b0faf74e9f9890d24ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6912bf1d42ccb2e82fcc5d1a97855ac51152141499d2b0faf74e9f9890d24ab7->enter($__internal_6912bf1d42ccb2e82fcc5d1a97855ac51152141499d2b0faf74e9f9890d24ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::detailsproduit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
\t<title>E-SHOP HTML Template</title>
\t<!-- Google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Hind:400,700\" rel=\"stylesheet\">
\t<!-- Bootstrap -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t<!-- Slick -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\" />
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/slick-theme.css"), "html", null, true);
        echo "\" />
\t<!-- nouislider -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nouislider.min.css"), "html", null, true);
        echo "\" />
\t<!-- Font Awesome Icon -->
\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t<!-- Custom stlylesheet -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style5.css"), "html", null, true);
        echo "\" />
\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
\t\t  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
</head>

<body>
\t


\t
\t<!-- section -->
\t<div class=\"section\">
\t\t<!-- container -->
\t\t<div class=\"container\">
\t\t\t<!-- row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!--  Product Details -->
\t\t\t\t<div class=\"product product-details clearfix\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div id=\"product-main-view\">
\t\t\t\t\t\t\t";
        // line 46
        $this->displayBlock('image', $context, $blocks);
        // line 48
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"product-view\">
\t\t\t\t\t\t";
        // line 51
        $this->displayBlock('image1', $context, $blocks);
        // line 53
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t
\t\t\t\t\t\t ";
        // line 59
        $this->displayBlock('description', $context, $blocks);
        // line 61
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\"><h1>Reserver le bien</h1>
\t\t\t\t\t\t<div class=\"product-tab\">
\t\t\t\t\t\t\t<ul class=\"tab-nav\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab1\">Connexion</a></li>
\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab2\">Inscription</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t<div id=\"tab1\" class=\"tab-pane fade in active col-md-6\">
\t\t\t\t\t\t\t\t\t<form id=\"connexion\" method=\"post\">
        <div class=\"card-header\"> <h2>CONNEXION</h2></div><hr>
                  <input type=\"hidden\" class=\"form-control\" name=\"form\" placeholder=\"\" value=\"connexion\">
    <input type=\"hidden\" class=\"form-control\" name=\"idBien\" placeholder=\"\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\">

  <div class=\"form-group\">
    <label for=\"formGroupExampleInput\">Email</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"example@example.com\">
  </div>
  <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"enter your password\"></div>

           <button type=\"submit\" class=\"btn btn-primary\" name=\"connexion\">Submit</button>
       

</form>

       
    </aside></div>
\t\t\t\t\t\t\t\t<div id=\"tab2\" class=\"tab-pane fade in col-md-6\">

\t\t\t\t\t\t\t\t\t <form id=\"inscription\" method=\"post\">
               <div class=\"card-header\"> <h2>Inscription</h2><hr>

            <div class=\"row\">
  <div class=\"form-group col-md-6\">
          <input type=\"hidden\" class=\"form-control\" name=\"form\" placeholder=\"\" value=\"inscription\">

    <input type=\"hidden\" class=\"form-control\" name=\"idBien\" placeholder=\"\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\">

      <label for=\"formGroupExampleInput2\">Numpiece</label>
    <input type=\"number\" class=\"form-control\" name=\"numpiece\" placeholder=\"enter your cni\" value=\"\">
  </div> <div class=\"form-group col-md-6\">
    <label for=\"formGroupExampleInput\">Nom</label>
    <input type=\"text\" class=\"form-control\" name=\"nomComplet\" placeholder=\"entrez votre nom\" value=\"\">
  </div>
                </div>
  <div class=\"form-group\">
       <label for=\"formGroupExampleInput2\">TEL</label>
    <input type=\"number\" class=\"form-control\" name=\"tel\" placeholder=\"enrter votre numero \" value=\"\">
                   </div><div class=\"form-group\">
       <label for=\"formGroupExampleInput2\">Adresse</label>
    <input type=\"text\" class=\"form-control\" name=\"adresse\" placeholder=\"entrer votre addresse\" value=\"\">
                   </div>
    <br><div class=\"form-group\">   <label for=\"formGroupExampleInput2\">Email</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"entrer votre email\" value=\"\">
                   </div>
           <br>
       <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"entrer votre password\" value=\"\"></div>

           <button type=\"submit\" class=\"btn btn-primary\" name=\"inscription\">Submit</button>
        
            </div>

</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /Product Details -->
\t\t\t</div>
\t\t\t<!-- /row -->
\t\t</div>
\t\t<!-- /container -->
\t</div>
\t<!-- /section -->

\t<!-- jQuery Plugins -->
\t<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nouislider.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.zoom.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_23f4b8245744baf6c0af60ad2f9196dd3db95c650629843ebb7061ef6f377e26->leave($__internal_23f4b8245744baf6c0af60ad2f9196dd3db95c650629843ebb7061ef6f377e26_prof);

        
        $__internal_6912bf1d42ccb2e82fcc5d1a97855ac51152141499d2b0faf74e9f9890d24ab7->leave($__internal_6912bf1d42ccb2e82fcc5d1a97855ac51152141499d2b0faf74e9f9890d24ab7_prof);

    }

    // line 46
    public function block_image($context, array $blocks = array())
    {
        $__internal_5cf51040ef673d77ae5b2d7bc192eefe165acbbe45e2fb66dd14807f858d5682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf51040ef673d77ae5b2d7bc192eefe165acbbe45e2fb66dd14807f858d5682->enter($__internal_5cf51040ef673d77ae5b2d7bc192eefe165acbbe45e2fb66dd14807f858d5682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image"));

        $__internal_01e4bfd6afa3a1f08003cffb78380e9490c82597a975f92a68dd578b60abb2e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e4bfd6afa3a1f08003cffb78380e9490c82597a975f92a68dd578b60abb2e8->enter($__internal_01e4bfd6afa3a1f08003cffb78380e9490c82597a975f92a68dd578b60abb2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image"));

        // line 47
        echo "\t\t\t\t\t\t\t";
        
        $__internal_01e4bfd6afa3a1f08003cffb78380e9490c82597a975f92a68dd578b60abb2e8->leave($__internal_01e4bfd6afa3a1f08003cffb78380e9490c82597a975f92a68dd578b60abb2e8_prof);

        
        $__internal_5cf51040ef673d77ae5b2d7bc192eefe165acbbe45e2fb66dd14807f858d5682->leave($__internal_5cf51040ef673d77ae5b2d7bc192eefe165acbbe45e2fb66dd14807f858d5682_prof);

    }

    // line 51
    public function block_image1($context, array $blocks = array())
    {
        $__internal_b148e354a68699d7d6bf189a0e278f80c7cdbefb4de4305b99e850660b055344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b148e354a68699d7d6bf189a0e278f80c7cdbefb4de4305b99e850660b055344->enter($__internal_b148e354a68699d7d6bf189a0e278f80c7cdbefb4de4305b99e850660b055344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image1"));

        $__internal_553235a85b29f4294b855f3372bfc1100702c4be3cb52313013b9aba0a672aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553235a85b29f4294b855f3372bfc1100702c4be3cb52313013b9aba0a672aab->enter($__internal_553235a85b29f4294b855f3372bfc1100702c4be3cb52313013b9aba0a672aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image1"));

        // line 52
        echo "\t\t\t\t\t\t\t";
        
        $__internal_553235a85b29f4294b855f3372bfc1100702c4be3cb52313013b9aba0a672aab->leave($__internal_553235a85b29f4294b855f3372bfc1100702c4be3cb52313013b9aba0a672aab_prof);

        
        $__internal_b148e354a68699d7d6bf189a0e278f80c7cdbefb4de4305b99e850660b055344->leave($__internal_b148e354a68699d7d6bf189a0e278f80c7cdbefb4de4305b99e850660b055344_prof);

    }

    // line 59
    public function block_description($context, array $blocks = array())
    {
        $__internal_d33049ae23d464dd33ec3b541ccc109d8f6ba0d43d2afa13e00e970868dcb080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33049ae23d464dd33ec3b541ccc109d8f6ba0d43d2afa13e00e970868dcb080->enter($__internal_d33049ae23d464dd33ec3b541ccc109d8f6ba0d43d2afa13e00e970868dcb080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_9158b691016f2e882a9af8635b99b788097c12662ee15880330393cb9cc277ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9158b691016f2e882a9af8635b99b788097c12662ee15880330393cb9cc277ee->enter($__internal_9158b691016f2e882a9af8635b99b788097c12662ee15880330393cb9cc277ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 60
        echo " ";
        
        $__internal_9158b691016f2e882a9af8635b99b788097c12662ee15880330393cb9cc277ee->leave($__internal_9158b691016f2e882a9af8635b99b788097c12662ee15880330393cb9cc277ee_prof);

        
        $__internal_d33049ae23d464dd33ec3b541ccc109d8f6ba0d43d2afa13e00e970868dcb080->leave($__internal_d33049ae23d464dd33ec3b541ccc109d8f6ba0d43d2afa13e00e970868dcb080_prof);

    }

    public function getTemplateName()
    {
        return "::detailsproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 60,  282 => 59,  272 => 52,  263 => 51,  253 => 47,  244 => 46,  229 => 155,  225 => 154,  221 => 153,  217 => 152,  213 => 151,  209 => 150,  157 => 101,  128 => 75,  112 => 61,  110 => 59,  102 => 53,  100 => 51,  95 => 48,  93 => 46,  66 => 22,  61 => 20,  56 => 18,  51 => 16,  47 => 15,  42 => 13,  28 => 1,);
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
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
\t<title>E-SHOP HTML Template</title>
\t<!-- Google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Hind:400,700\" rel=\"stylesheet\">
\t<!-- Bootstrap -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css')}}\" />
\t<!-- Slick -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{asset('css/slick.css')}}\" />
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{asset('css/slick-theme.css')}}\" />
\t<!-- nouislider -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{asset('css/nouislider.min.css')}}\" />
\t<!-- Font Awesome Icon -->
\t<link rel=\"stylesheet\" href=\"{{asset('css/font-awesome.min.css')}}\">
\t<!-- Custom stlylesheet -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{asset('css/style5.css')}}\" />
\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
\t\t  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
</head>

<body>
\t


\t
\t<!-- section -->
\t<div class=\"section\">
\t\t<!-- container -->
\t\t<div class=\"container\">
\t\t\t<!-- row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!--  Product Details -->
\t\t\t\t<div class=\"product product-details clearfix\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div id=\"product-main-view\">
\t\t\t\t\t\t\t{% block image %}
\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"product-view\">
\t\t\t\t\t\t{% block image1 %}
\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"product-body\">
\t\t\t\t\t\t
\t\t\t\t\t\t {% block description %}
 {% endblock %}

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\"><h1>Reserver le bien</h1>
\t\t\t\t\t\t<div class=\"product-tab\">
\t\t\t\t\t\t\t<ul class=\"tab-nav\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab1\">Connexion</a></li>
\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#tab2\">Inscription</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t<div id=\"tab1\" class=\"tab-pane fade in active col-md-6\">
\t\t\t\t\t\t\t\t\t<form id=\"connexion\" method=\"post\">
        <div class=\"card-header\"> <h2>CONNEXION</h2></div><hr>
                  <input type=\"hidden\" class=\"form-control\" name=\"form\" placeholder=\"\" value=\"connexion\">
    <input type=\"hidden\" class=\"form-control\" name=\"idBien\" placeholder=\"\" value=\"{{ biens[0].id }}\">

  <div class=\"form-group\">
    <label for=\"formGroupExampleInput\">Email</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"example@example.com\">
  </div>
  <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"enter your password\"></div>

           <button type=\"submit\" class=\"btn btn-primary\" name=\"connexion\">Submit</button>
       

</form>

       
    </aside></div>
\t\t\t\t\t\t\t\t<div id=\"tab2\" class=\"tab-pane fade in col-md-6\">

\t\t\t\t\t\t\t\t\t <form id=\"inscription\" method=\"post\">
               <div class=\"card-header\"> <h2>Inscription</h2><hr>

            <div class=\"row\">
  <div class=\"form-group col-md-6\">
          <input type=\"hidden\" class=\"form-control\" name=\"form\" placeholder=\"\" value=\"inscription\">

    <input type=\"hidden\" class=\"form-control\" name=\"idBien\" placeholder=\"\" value=\"{{ biens[0].id }}\">

      <label for=\"formGroupExampleInput2\">Numpiece</label>
    <input type=\"number\" class=\"form-control\" name=\"numpiece\" placeholder=\"enter your cni\" value=\"\">
  </div> <div class=\"form-group col-md-6\">
    <label for=\"formGroupExampleInput\">Nom</label>
    <input type=\"text\" class=\"form-control\" name=\"nomComplet\" placeholder=\"entrez votre nom\" value=\"\">
  </div>
                </div>
  <div class=\"form-group\">
       <label for=\"formGroupExampleInput2\">TEL</label>
    <input type=\"number\" class=\"form-control\" name=\"tel\" placeholder=\"enrter votre numero \" value=\"\">
                   </div><div class=\"form-group\">
       <label for=\"formGroupExampleInput2\">Adresse</label>
    <input type=\"text\" class=\"form-control\" name=\"adresse\" placeholder=\"entrer votre addresse\" value=\"\">
                   </div>
    <br><div class=\"form-group\">   <label for=\"formGroupExampleInput2\">Email</label>
    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"entrer votre email\" value=\"\">
                   </div>
           <br>
       <div class=\"form-group\">
    <label for=\"formGroupExampleInput2\">Password</label>
    <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"entrer votre password\" value=\"\"></div>

           <button type=\"submit\" class=\"btn btn-primary\" name=\"inscription\">Submit</button>
        
            </div>

</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /Product Details -->
\t\t\t</div>
\t\t\t<!-- /row -->
\t\t</div>
\t\t<!-- /container -->
\t</div>
\t<!-- /section -->

\t<!-- jQuery Plugins -->
\t<script src=\"{{asset('js/jquery1.min.js')}}\"></script>
\t<script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
\t<script src=\"{{asset('js/slick.min.js')}}\"></script>
\t<script src=\"{{asset('js/nouislider.min.js')}}\"></script>
\t<script src=\"{{asset('js/jquery.zoom.min.js')}}\"></script>
\t<script src=\"{{asset('js/main.js')}}\"></script>

</body>

</html>", "::detailsproduit.html.twig", "/var/www/html/test2hortala/app/Resources/views/detailsproduit.html.twig");
    }
}
