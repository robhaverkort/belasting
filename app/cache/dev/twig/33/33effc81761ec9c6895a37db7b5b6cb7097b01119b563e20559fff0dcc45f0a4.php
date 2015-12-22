<?php

/* BelastingBundle:Default:index.html.twig */
class __TwigTemplate_1f1b1952979a91265f69fb96f5c3c3f08b325713bb4a1c0b4de0520047951c47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BelastingBundle::base.html.twig", "BelastingBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BelastingBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0827e74c5e38e7325f6fe3224038cd5c1231b16b9f05029d4ddf2df73577977e = $this->env->getExtension("native_profiler");
        $__internal_0827e74c5e38e7325f6fe3224038cd5c1231b16b9f05029d4ddf2df73577977e->enter($__internal_0827e74c5e38e7325f6fe3224038cd5c1231b16b9f05029d4ddf2df73577977e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BelastingBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0827e74c5e38e7325f6fe3224038cd5c1231b16b9f05029d4ddf2df73577977e->leave($__internal_0827e74c5e38e7325f6fe3224038cd5c1231b16b9f05029d4ddf2df73577977e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75293dd0136af3987deecd8306c1c2b6d2d4478991b2f51dc285fb721c98c2ff = $this->env->getExtension("native_profiler");
        $__internal_75293dd0136af3987deecd8306c1c2b6d2d4478991b2f51dc285fb721c98c2ff->enter($__internal_75293dd0136af3987deecd8306c1c2b6d2d4478991b2f51dc285fb721c98c2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Belasting";
        
        $__internal_75293dd0136af3987deecd8306c1c2b6d2d4478991b2f51dc285fb721c98c2ff->leave($__internal_75293dd0136af3987deecd8306c1c2b6d2d4478991b2f51dc285fb721c98c2ff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_559b93b80dc37c3c8f9b70e703c2f9601113d4635c9753da417b29156837dc5e = $this->env->getExtension("native_profiler");
        $__internal_559b93b80dc37c3c8f9b70e703c2f9601113d4635c9753da417b29156837dc5e->enter($__internal_559b93b80dc37c3c8f9b70e703c2f9601113d4635c9753da417b29156837dc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    Hello World.
    
        <div class=\"page-header\">
        <h1>Labels</h1>
    </div>
    <h1>
        <span class=\"label label-default\">Default</span>
        <span class=\"label label-primary\">Primary</span>
        <span class=\"label label-success\">Success</span>
        <span class=\"label label-info\">Info</span>
        <span class=\"label label-warning\">Warning</span>
        <span class=\"label label-danger\">Danger</span>
    </h1>
    <h2>
        <span class=\"label label-default\">Default</span>
        <span class=\"label label-primary\">Primary</span>
        <span class=\"label label-success\">Success</span>
        <span class=\"label label-info\">Info</span>
        <span class=\"label label-warning\">Warning</span>
        <span class=\"label label-danger\">Danger</span>
    </h2>
    <h3>
        <span class=\"label label-default\">Default</span>
        <span class=\"label label-primary\">Primary</span>
        <span class=\"label label-success\">Success</span>
        <span class=\"label label-info\">Info</span>
        <span class=\"label label-warning\">Warning</span>
        <span class=\"label label-danger\">Danger</span>
    </h3>
    <h4>
        <span class=\"label label-default\">Default</span>
        <span class=\"label label-primary\">Primary</span>
        <span class=\"label label-success\">Success</span>
        <span class=\"label label-info\">Info</span>
        <span class=\"label label-warning\">Warning</span>
        <span class=\"label label-danger\">Danger</span>
    </h4>
    <h5>
        <span class=\"label label-default\">Default</span>
        <span class=\"label label-primary\">Primary</span>
        <span class=\"label label-success\">Success</span>
        <span class=\"label label-info\">Info</span>
        <span class=\"label label-warning\">Warning</span>
        <span class=\"label label-danger\">Danger</span>
    </h5>
    <h6>
        <span class=\"label label-default\">Default</span>
        <span class=\"label label-primary\">Primary</span>
        <span class=\"label label-success\">Success</span>
        <span class=\"label label-info\">Info</span>
        <span class=\"label label-warning\">Warning</span>
        <span class=\"label label-danger\">Danger</span>
    </h6>
    <p>
        <span class=\"label label-default\">Default</span>
        <span class=\"label label-primary\">Primary</span>
        <span class=\"label label-success\">Success</span>
        <span class=\"label label-info\">Info</span>
        <span class=\"label label-warning\">Warning</span>
        <span class=\"label label-danger\">Danger</span>
    </p>

";
        
        $__internal_559b93b80dc37c3c8f9b70e703c2f9601113d4635c9753da417b29156837dc5e->leave($__internal_559b93b80dc37c3c8f9b70e703c2f9601113d4635c9753da417b29156837dc5e_prof);

    }

    public function getTemplateName()
    {
        return "BelastingBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'BelastingBundle::base.html.twig' %}*/
/* */
/* {% block title %}Belasting{% endblock %}*/
/* */
/* {% block body %}*/
/*     Hello World.*/
/*     */
/*         <div class="page-header">*/
/*         <h1>Labels</h1>*/
/*     </div>*/
/*     <h1>*/
/*         <span class="label label-default">Default</span>*/
/*         <span class="label label-primary">Primary</span>*/
/*         <span class="label label-success">Success</span>*/
/*         <span class="label label-info">Info</span>*/
/*         <span class="label label-warning">Warning</span>*/
/*         <span class="label label-danger">Danger</span>*/
/*     </h1>*/
/*     <h2>*/
/*         <span class="label label-default">Default</span>*/
/*         <span class="label label-primary">Primary</span>*/
/*         <span class="label label-success">Success</span>*/
/*         <span class="label label-info">Info</span>*/
/*         <span class="label label-warning">Warning</span>*/
/*         <span class="label label-danger">Danger</span>*/
/*     </h2>*/
/*     <h3>*/
/*         <span class="label label-default">Default</span>*/
/*         <span class="label label-primary">Primary</span>*/
/*         <span class="label label-success">Success</span>*/
/*         <span class="label label-info">Info</span>*/
/*         <span class="label label-warning">Warning</span>*/
/*         <span class="label label-danger">Danger</span>*/
/*     </h3>*/
/*     <h4>*/
/*         <span class="label label-default">Default</span>*/
/*         <span class="label label-primary">Primary</span>*/
/*         <span class="label label-success">Success</span>*/
/*         <span class="label label-info">Info</span>*/
/*         <span class="label label-warning">Warning</span>*/
/*         <span class="label label-danger">Danger</span>*/
/*     </h4>*/
/*     <h5>*/
/*         <span class="label label-default">Default</span>*/
/*         <span class="label label-primary">Primary</span>*/
/*         <span class="label label-success">Success</span>*/
/*         <span class="label label-info">Info</span>*/
/*         <span class="label label-warning">Warning</span>*/
/*         <span class="label label-danger">Danger</span>*/
/*     </h5>*/
/*     <h6>*/
/*         <span class="label label-default">Default</span>*/
/*         <span class="label label-primary">Primary</span>*/
/*         <span class="label label-success">Success</span>*/
/*         <span class="label label-info">Info</span>*/
/*         <span class="label label-warning">Warning</span>*/
/*         <span class="label label-danger">Danger</span>*/
/*     </h6>*/
/*     <p>*/
/*         <span class="label label-default">Default</span>*/
/*         <span class="label label-primary">Primary</span>*/
/*         <span class="label label-success">Success</span>*/
/*         <span class="label label-info">Info</span>*/
/*         <span class="label label-warning">Warning</span>*/
/*         <span class="label label-danger">Danger</span>*/
/*     </p>*/
/* */
/* {% endblock %}*/
/* */
