<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3c2b105b8d5520c90cefb9c426aac7eefd7b62920229b2d62aac962a8d3f428f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c09d485faa3b5195a0cbdc7d89d41dc2e6d03bb2ba4e317191ecf062f3e6701 = $this->env->getExtension("native_profiler");
        $__internal_6c09d485faa3b5195a0cbdc7d89d41dc2e6d03bb2ba4e317191ecf062f3e6701->enter($__internal_6c09d485faa3b5195a0cbdc7d89d41dc2e6d03bb2ba4e317191ecf062f3e6701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c09d485faa3b5195a0cbdc7d89d41dc2e6d03bb2ba4e317191ecf062f3e6701->leave($__internal_6c09d485faa3b5195a0cbdc7d89d41dc2e6d03bb2ba4e317191ecf062f3e6701_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_42a4fbffdb8ccc753542bad3c40fe2c2fec549e171559be80e9388d9e1a2458a = $this->env->getExtension("native_profiler");
        $__internal_42a4fbffdb8ccc753542bad3c40fe2c2fec549e171559be80e9388d9e1a2458a->enter($__internal_42a4fbffdb8ccc753542bad3c40fe2c2fec549e171559be80e9388d9e1a2458a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_42a4fbffdb8ccc753542bad3c40fe2c2fec549e171559be80e9388d9e1a2458a->leave($__internal_42a4fbffdb8ccc753542bad3c40fe2c2fec549e171559be80e9388d9e1a2458a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49ec4efa1ebe5986d79112a8577bc66e86d82586349ffa8d0fffb66ff840b53e = $this->env->getExtension("native_profiler");
        $__internal_49ec4efa1ebe5986d79112a8577bc66e86d82586349ffa8d0fffb66ff840b53e->enter($__internal_49ec4efa1ebe5986d79112a8577bc66e86d82586349ffa8d0fffb66ff840b53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_49ec4efa1ebe5986d79112a8577bc66e86d82586349ffa8d0fffb66ff840b53e->leave($__internal_49ec4efa1ebe5986d79112a8577bc66e86d82586349ffa8d0fffb66ff840b53e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_781ab295779a82f1d50a00d3aa890bf98bd061eb9be9ebb4312333219757c04c = $this->env->getExtension("native_profiler");
        $__internal_781ab295779a82f1d50a00d3aa890bf98bd061eb9be9ebb4312333219757c04c->enter($__internal_781ab295779a82f1d50a00d3aa890bf98bd061eb9be9ebb4312333219757c04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_781ab295779a82f1d50a00d3aa890bf98bd061eb9be9ebb4312333219757c04c->leave($__internal_781ab295779a82f1d50a00d3aa890bf98bd061eb9be9ebb4312333219757c04c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
