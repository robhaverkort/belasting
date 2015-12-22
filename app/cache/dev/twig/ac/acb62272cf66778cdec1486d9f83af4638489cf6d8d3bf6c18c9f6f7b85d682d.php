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
        $__internal_198bbb228954d3eb5ccef3cf038fbee8ec1b32e7c7c60a2eb0ee30fcc90b67c6 = $this->env->getExtension("native_profiler");
        $__internal_198bbb228954d3eb5ccef3cf038fbee8ec1b32e7c7c60a2eb0ee30fcc90b67c6->enter($__internal_198bbb228954d3eb5ccef3cf038fbee8ec1b32e7c7c60a2eb0ee30fcc90b67c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BelastingBundle::base.html.twig"));

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
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jquery/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/docs/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/docs/assets/js/docs.min.js"), "html", null, true);
        echo "\"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_198bbb228954d3eb5ccef3cf038fbee8ec1b32e7c7c60a2eb0ee30fcc90b67c6->leave($__internal_198bbb228954d3eb5ccef3cf038fbee8ec1b32e7c7c60a2eb0ee30fcc90b67c6_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ef2e7f4f542f530a45c981f01d351d120c4b547530fb45fc2e357f225a241dc = $this->env->getExtension("native_profiler");
        $__internal_0ef2e7f4f542f530a45c981f01d351d120c4b547530fb45fc2e357f225a241dc->enter($__internal_0ef2e7f4f542f530a45c981f01d351d120c4b547530fb45fc2e357f225a241dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0ef2e7f4f542f530a45c981f01d351d120c4b547530fb45fc2e357f225a241dc->leave($__internal_0ef2e7f4f542f530a45c981f01d351d120c4b547530fb45fc2e357f225a241dc_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9e0e72aaf7be374453b8c76ac8479a40348edf15104b3b82f45e6b20adc157e = $this->env->getExtension("native_profiler");
        $__internal_f9e0e72aaf7be374453b8c76ac8479a40348edf15104b3b82f45e6b20adc157e->enter($__internal_f9e0e72aaf7be374453b8c76ac8479a40348edf15104b3b82f45e6b20adc157e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "
        ";
        
        $__internal_f9e0e72aaf7be374453b8c76ac8479a40348edf15104b3b82f45e6b20adc157e->leave($__internal_f9e0e72aaf7be374453b8c76ac8479a40348edf15104b3b82f45e6b20adc157e_prof);

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
        return array (  135 => 37,  129 => 36,  118 => 12,  107 => 48,  102 => 46,  98 => 45,  94 => 44,  90 => 43,  84 => 39,  82 => 36,  69 => 26,  62 => 22,  56 => 19,  51 => 17,  46 => 15,  40 => 12,  35 => 10,  24 => 1,);
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
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
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
