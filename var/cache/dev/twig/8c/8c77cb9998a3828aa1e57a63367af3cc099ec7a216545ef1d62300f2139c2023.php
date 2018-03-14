<?php

/* ::pageadmin.html.twig */
class __TwigTemplate_a5b83d794ad63ff5f053a23f16247f78c6820de90959b8efef77218a852d9aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8035e9eca9991ecbfda4efc045a648494eba5f63bf5c9cba35b8d626f9bd97c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8035e9eca9991ecbfda4efc045a648494eba5f63bf5c9cba35b8d626f9bd97c9->enter($__internal_8035e9eca9991ecbfda4efc045a648494eba5f63bf5c9cba35b8d626f9bd97c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::pageadmin.html.twig"));

        $__internal_4455b96729d08102b329241413c19a083453a1613c740db8a568b8d36545b76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4455b96729d08102b329241413c19a083453a1613c740db8a568b8d36545b76b->enter($__internal_4455b96729d08102b329241413c19a083453a1613c740db8a568b8d36545b76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::pageadmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "     
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
       <body>
    <div class=\"header\">
         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-md-5\">
                  <!-- Logo -->
                  <div class=\"logo\">
                     <h1><a href=\"index.html\">GERANT</a></h1>
                  </div>
               </div>
               <div class=\"col-md-5\">
                  <div class=\"row\">
                    <div class=\"col-lg-12\">
                      <div class=\"input-group form\">
                           <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                           <span class=\"input-group-btn\">
                             <button class=\"btn btn-primary\" type=\"button\">Search</button>
                           </span>
                      </div>
                    </div>
                  </div>
               </div>
               <div class=\"col-md-2\">
                  <div class=\"navbar navbar-inverse\" role=\"banner\">
                      <nav class=\"collapse navbar-collapse bs-navbar-collapse navbar-right\" role=\"navigation\">
                        <ul class=\"nav navbar-nav\">
                          <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">My Account <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu animated fadeInUp\">
                              <li><a href=\"profile.html\">Profile</a></li>
                              <li><a href=\"login.html\">Logout</a></li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
    </div>

    <div class=\"page-content\">
        <div class=\"row\">
          <div class=\"col-md-2\">
            <div class=\"sidebar content-box\" style=\"display: block;\">
                <ul class=\"nav\">
                    <!-- Main menu -->
                    <li><a href=\"#\" id=\"bien\"><i class=\"glyphicon glyphicon-list\" ></i>Biens</a></li>
                    <li><a href=\"#\"  id=\"Reservations\"><i class=\"glyphicon glyphicon-list\"></i>Reservations</a></li>
                </ul>
             </div>
          </div>
          <div class=\"col-md-10\">
            <div class=\"row\">
                <div class=\"row\">
                    <div class=\"content-box-large\">
                        <div class=\"panel-heading\">
                            <div class=\"panel-title\"><h4>LISTE</h4></div>
                            <div class=\"panel-options\" id=\"liste\">
                                
                            </div>   
                        </div>
                        <div class=\"panel-body\"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <footer>
         <div class=\"container\">
         
            <div class=\"copy text-center\">
               Copyright 2018 <a href='#'>HORTALA IMMO</a>
            </div>
            
         </div>
      </footer></div>
 ";
        // line 101
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "
  </body>
</html>
 ";
        
        $__internal_8035e9eca9991ecbfda4efc045a648494eba5f63bf5c9cba35b8d626f9bd97c9->leave($__internal_8035e9eca9991ecbfda4efc045a648494eba5f63bf5c9cba35b8d626f9bd97c9_prof);

        
        $__internal_4455b96729d08102b329241413c19a083453a1613c740db8a568b8d36545b76b->leave($__internal_4455b96729d08102b329241413c19a083453a1613c740db8a568b8d36545b76b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_726ed15e584fcacfe9d6e550f7c99d2751748f3787ca4e0cf55916581bdc3759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726ed15e584fcacfe9d6e550f7c99d2751748f3787ca4e0cf55916581bdc3759->enter($__internal_726ed15e584fcacfe9d6e550f7c99d2751748f3787ca4e0cf55916581bdc3759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_796a26fd50472f9dbcbfcccec609e150c33b834725da61a8fa59d61ccccd2f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796a26fd50472f9dbcbfcccec609e150c33b834725da61a8fa59d61ccccd2f90->enter($__internal_796a26fd50472f9dbcbfcccec609e150c33b834725da61a8fa59d61ccccd2f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "HORTALA!";
        
        $__internal_796a26fd50472f9dbcbfcccec609e150c33b834725da61a8fa59d61ccccd2f90->leave($__internal_796a26fd50472f9dbcbfcccec609e150c33b834725da61a8fa59d61ccccd2f90_prof);

        
        $__internal_726ed15e584fcacfe9d6e550f7c99d2751748f3787ca4e0cf55916581bdc3759->leave($__internal_726ed15e584fcacfe9d6e550f7c99d2751748f3787ca4e0cf55916581bdc3759_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_11fc7b19d45e266b044f145b46fba37c1e43787a9203c28f51edabea343c8c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11fc7b19d45e266b044f145b46fba37c1e43787a9203c28f51edabea343c8c00->enter($__internal_11fc7b19d45e266b044f145b46fba37c1e43787a9203c28f51edabea343c8c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_73ab39857cac2e8c12f5120c17ff31a89fc5fb0a542bf2ad55de85f92adb9d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ab39857cac2e8c12f5120c17ff31a89fc5fb0a542bf2ad55de85f92adb9d89->enter($__internal_73ab39857cac2e8c12f5120c17ff31a89fc5fb0a542bf2ad55de85f92adb9d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
                        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables.css"), "html", null, true);
        echo "\">

    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_73ab39857cac2e8c12f5120c17ff31a89fc5fb0a542bf2ad55de85f92adb9d89->leave($__internal_73ab39857cac2e8c12f5120c17ff31a89fc5fb0a542bf2ad55de85f92adb9d89_prof);

        
        $__internal_11fc7b19d45e266b044f145b46fba37c1e43787a9203c28f51edabea343c8c00->leave($__internal_11fc7b19d45e266b044f145b46fba37c1e43787a9203c28f51edabea343c8c00_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0f2afcab104568abee409656469f1821cf6468129130b49017167762db47963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f2afcab104568abee409656469f1821cf6468129130b49017167762db47963->enter($__internal_a0f2afcab104568abee409656469f1821cf6468129130b49017167762db47963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7885de13fc65ae9e9b9abd8b9338b01ea9f506e48450cd2e37fa3c931a6323b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7885de13fc65ae9e9b9abd8b9338b01ea9f506e48450cd2e37fa3c931a6323b4->enter($__internal_7885de13fc65ae9e9b9abd8b9338b01ea9f506e48450cd2e37fa3c931a6323b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>

     <script type=\"text/javascript\">
        \$(document).ready(function(){
      \$(\"#liste\").load(\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeadmin");
        echo "\");

  \$('#bien').on(\"click\",function(){
        \$(\"#liste\").load(\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeadmin");
        echo "\");
    });
     \$('#Reservations').on(\"click\",function(){
        \$(\"#liste\").load(\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listereservation");
        echo "\");
    });
     \$(\"#reservationid\").on(\"click\",function(){
        \$(\"#liste\").load(\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details");
        echo "\");

     });
      });</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"js/custom.js\"></script>         ";
        
        $__internal_7885de13fc65ae9e9b9abd8b9338b01ea9f506e48450cd2e37fa3c931a6323b4->leave($__internal_7885de13fc65ae9e9b9abd8b9338b01ea9f506e48450cd2e37fa3c931a6323b4_prof);

        
        $__internal_a0f2afcab104568abee409656469f1821cf6468129130b49017167762db47963->leave($__internal_a0f2afcab104568abee409656469f1821cf6468129130b49017167762db47963_prof);

    }

    public function getTemplateName()
    {
        return "::pageadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 115,  235 => 112,  229 => 109,  223 => 106,  215 => 102,  206 => 101,  193 => 17,  188 => 15,  180 => 10,  176 => 9,  172 => 8,  169 => 7,  160 => 6,  142 => 5,  129 => 123,  127 => 101,  43 => 20,  40 => 19,  38 => 6,  34 => 5,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}HORTALA!{% endblock %}</title>
{% block stylesheets %}

            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style1.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/datatables.css') }}\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
                        <link rel=\"stylesheet\" href=\"{{ asset('css/datatables.css') }}\">

    <link href=\"{{ asset('css/styles.css')}}\" rel=\"stylesheet\">

{% endblock %}     
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
       <body>
    <div class=\"header\">
         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-md-5\">
                  <!-- Logo -->
                  <div class=\"logo\">
                     <h1><a href=\"index.html\">GERANT</a></h1>
                  </div>
               </div>
               <div class=\"col-md-5\">
                  <div class=\"row\">
                    <div class=\"col-lg-12\">
                      <div class=\"input-group form\">
                           <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                           <span class=\"input-group-btn\">
                             <button class=\"btn btn-primary\" type=\"button\">Search</button>
                           </span>
                      </div>
                    </div>
                  </div>
               </div>
               <div class=\"col-md-2\">
                  <div class=\"navbar navbar-inverse\" role=\"banner\">
                      <nav class=\"collapse navbar-collapse bs-navbar-collapse navbar-right\" role=\"navigation\">
                        <ul class=\"nav navbar-nav\">
                          <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">My Account <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu animated fadeInUp\">
                              <li><a href=\"profile.html\">Profile</a></li>
                              <li><a href=\"login.html\">Logout</a></li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
    </div>

    <div class=\"page-content\">
        <div class=\"row\">
          <div class=\"col-md-2\">
            <div class=\"sidebar content-box\" style=\"display: block;\">
                <ul class=\"nav\">
                    <!-- Main menu -->
                    <li><a href=\"#\" id=\"bien\"><i class=\"glyphicon glyphicon-list\" ></i>Biens</a></li>
                    <li><a href=\"#\"  id=\"Reservations\"><i class=\"glyphicon glyphicon-list\"></i>Reservations</a></li>
                </ul>
             </div>
          </div>
          <div class=\"col-md-10\">
            <div class=\"row\">
                <div class=\"row\">
                    <div class=\"content-box-large\">
                        <div class=\"panel-heading\">
                            <div class=\"panel-title\"><h4>LISTE</h4></div>
                            <div class=\"panel-options\" id=\"liste\">
                                
                            </div>   
                        </div>
                        <div class=\"panel-body\"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <footer>
         <div class=\"container\">
         
            <div class=\"copy text-center\">
               Copyright 2018 <a href='#'>HORTALA IMMO</a>
            </div>
            
         </div>
      </footer></div>
 {% block javascripts %}
     <script src=\"{{asset('admin/vendors/jquery/dist/jquery.min.js')}}\"></script>

     <script type=\"text/javascript\">
        \$(document).ready(function(){
      \$(\"#liste\").load(\"{{path('listeadmin')}}\");

  \$('#bien').on(\"click\",function(){
        \$(\"#liste\").load(\"{{path('listeadmin')}}\");
    });
     \$('#Reservations').on(\"click\",function(){
        \$(\"#liste\").load(\"{{path('listereservation')}}\");
    });
     \$(\"#reservationid\").on(\"click\",function(){
        \$(\"#liste\").load(\"{{path('details')}}\");

     });
      });</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"js/custom.js\"></script>         {% endblock %}

  </body>
</html>
 ", "::pageadmin.html.twig", "/var/www/html/test2hortala/app/Resources/views/pageadmin.html.twig");
    }
}
