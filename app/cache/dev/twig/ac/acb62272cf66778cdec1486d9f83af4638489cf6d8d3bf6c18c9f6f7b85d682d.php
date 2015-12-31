<?php

/* BelastingBundle::base.html.twig */
class __TwigTemplate_c310c9cb35ded31b6c67587815630e35ecb756c7d8356905ec55dd16e1a36df2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_078a18261866356d827978babcc271cd0a6ff34b4580d55e3b02d3ef744b88c4 = $this->env->getExtension("native_profiler");
        $__internal_078a18261866356d827978babcc271cd0a6ff34b4580d55e3b02d3ef744b88c4->enter($__internal_078a18261866356d827978babcc271cd0a6ff34b4580d55e3b02d3ef744b88c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BelastingBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/docs/favicon.ico"), "html", null, true);
        echo "\">

        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/docs/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Bootstrap theme -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/docs/dist/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/docs/assets/css/ie10-viewport-bug-workaround.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom styles for this template -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/docs/assets/js/ie-emulation-modes-warning.js"), "html", null, true);
        echo "\"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body role=\"document\">

        <!-- Fixed navbar -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("huishouden_list");
        echo "\">Bootstrap theme</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    ";
        // line 50
        if (array_key_exists("huishouden", $context)) {
            // line 51
            echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("huishouden_view", array("huishouden_id" => $this->getAttribute((isset($context["huishouden"]) ? $context["huishouden"] : $this->getContext($context, "huishouden")), "id", array()))), "html", null, true);
            echo "\">Overzicht</a></li>
                            <li><a href=\"#about\">About</a></li>
                            <li><a href=\"#contact\">Contact</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Details <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"dropdown-header\">Inkomsten</li>
                                    <li><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("salaris_view", array("huishouden_id" => $this->getAttribute((isset($context["huishouden"]) ? $context["huishouden"] : $this->getContext($context, "huishouden")), "id", array()))), "html", null, true);
            echo "\">Salaris</a></li>
                                    <li><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("toeslag_list", array("huishouden_id" => $this->getAttribute((isset($context["huishouden"]) ? $context["huishouden"] : $this->getContext($context, "huishouden")), "id", array()))), "html", null, true);
            echo "\">Toeslagen</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li class=\"dropdown-header\">Uitgaven</li>
                                    <li><a href=\"#\">Woning</a></li>
                                    <li><a href=\"#\">Kinderen</a></li>
                                    <li><a href=\"#\">Zorg</a></li>
                                    <li><a href=\"#\">Auto</a></li>
                                </ul>
                            </li>
                        </ul>
                    ";
        }
        // line 71
        echo "                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class=\"container theme-showcase\" role=\"main\">
            ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jquery/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/docs/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/docs/assets/js/docs.min.js"), "html", null, true);
        echo "\"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_078a18261866356d827978babcc271cd0a6ff34b4580d55e3b02d3ef744b88c4->leave($__internal_078a18261866356d827978babcc271cd0a6ff34b4580d55e3b02d3ef744b88c4_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_6807e8f6b6d9cbde7d9e942bc1b1fcbad9082012464256e71abc2e31ecdb6b47 = $this->env->getExtension("native_profiler");
        $__internal_6807e8f6b6d9cbde7d9e942bc1b1fcbad9082012464256e71abc2e31ecdb6b47->enter($__internal_6807e8f6b6d9cbde7d9e942bc1b1fcbad9082012464256e71abc2e31ecdb6b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6807e8f6b6d9cbde7d9e942bc1b1fcbad9082012464256e71abc2e31ecdb6b47->leave($__internal_6807e8f6b6d9cbde7d9e942bc1b1fcbad9082012464256e71abc2e31ecdb6b47_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_34b46b635727f72373e53ac76dac2e868f6010005ed77dfad5dacbc45e298918 = $this->env->getExtension("native_profiler");
        $__internal_34b46b635727f72373e53ac76dac2e868f6010005ed77dfad5dacbc45e298918->enter($__internal_34b46b635727f72373e53ac76dac2e868f6010005ed77dfad5dacbc45e298918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "
            ";
        
        $__internal_34b46b635727f72373e53ac76dac2e868f6010005ed77dfad5dacbc45e298918->leave($__internal_34b46b635727f72373e53ac76dac2e868f6010005ed77dfad5dacbc45e298918_prof);

    }

    public function getTemplateName()
    {
        return "BelastingBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 77,  187 => 76,  176 => 12,  165 => 89,  160 => 87,  156 => 86,  152 => 85,  148 => 84,  141 => 79,  139 => 76,  132 => 71,  118 => 60,  114 => 59,  104 => 52,  101 => 51,  99 => 50,  93 => 47,  69 => 26,  62 => 22,  56 => 19,  51 => 17,  46 => 15,  40 => 12,  35 => 10,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*         <link rel="icon" href="{{ asset('bundles/bootstrap/docs/favicon.ico') }}">*/
/* */
/*         <title>{% block title %}{% endblock %}</title>*/
/* */
/*         <!-- Bootstrap core CSS -->*/
/*         <link href="{{ asset('bundles/bootstrap/docs/dist/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <!-- Bootstrap theme -->*/
/*         <link href="{{ asset('bundles/bootstrap/docs/dist/css/bootstrap-theme.min.css') }}" rel="stylesheet">*/
/*         <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*         <link href="{{ asset('bundles/bootstrap/docs/assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">*/
/* */
/*         <!-- Custom styles for this template -->*/
/*         <link href="{{ asset('css/theme.css') }}" rel="stylesheet">*/
/* */
/*         <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->*/
/*         <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->*/
/*         <script src="{{ asset('bundles/bootstrap/docs/assets/js/ie-emulation-modes-warning.js') }}"></script>*/
/* */
/*         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*         <!--[if lt IE 9]>*/
/*           <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*           <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/* */
/*     <body role="document">*/
/* */
/*         <!-- Fixed navbar -->*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('huishouden_list') }}">Bootstrap theme</a>*/
/*                 </div>*/
/*                 <div id="navbar" class="navbar-collapse collapse">*/
/*                     {% if huishouden is defined %}*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="active"><a href="{{ path('huishouden_view',{'huishouden_id':huishouden.id}) }}">Overzicht</a></li>*/
/*                             <li><a href="#about">About</a></li>*/
/*                             <li><a href="#contact">Contact</a></li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Details <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li class="dropdown-header">Inkomsten</li>*/
/*                                     <li><a href="{{ path('salaris_view',{'huishouden_id':huishouden.id}) }}">Salaris</a></li>*/
/*                                     <li><a href="{{ path('toeslag_list',{'huishouden_id':huishouden.id}) }}">Toeslagen</a></li>*/
/*                                     <li role="separator" class="divider"></li>*/
/*                                     <li class="dropdown-header">Uitgaven</li>*/
/*                                     <li><a href="#">Woning</a></li>*/
/*                                     <li><a href="#">Kinderen</a></li>*/
/*                                     <li><a href="#">Zorg</a></li>*/
/*                                     <li><a href="#">Auto</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                     {% endif %}*/
/*                 </div><!--/.nav-collapse -->*/
/*             </div>*/
/*         </nav>*/
/* */
/*         <div class="container theme-showcase" role="main">*/
/*             {% block body %}*/
/* */
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         <!-- Bootstrap core JavaScript*/
/*         ================================================== -->*/
/*         <!-- Placed at the end of the document so the pages load faster -->*/
/*         <script src="{{ asset('bundles/jquery/jquery.min.js') }}"></script>*/
/*         <script>window.jQuery || document.write('<script src="{{ asset('bundles/jquery/jquery.min.js') }}"><\/script>')</script>*/
/*         <script src="{{ asset('bundles/bootstrap/docs/dist/js/bootstrap.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/bootstrap/docs/assets/js/docs.min.js') }}"></script>*/
/*         <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*         <script src="{{ asset('bundles/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js') }}"></script>*/
/*     </body>*/
/* </html>*/
/* */
