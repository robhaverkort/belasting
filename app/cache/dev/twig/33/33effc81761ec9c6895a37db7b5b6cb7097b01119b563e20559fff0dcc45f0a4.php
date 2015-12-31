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
        $__internal_21f945e22216b00120478b3f4b931b0184f4c094b2858021ab46589e38c7f102 = $this->env->getExtension("native_profiler");
        $__internal_21f945e22216b00120478b3f4b931b0184f4c094b2858021ab46589e38c7f102->enter($__internal_21f945e22216b00120478b3f4b931b0184f4c094b2858021ab46589e38c7f102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BelastingBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21f945e22216b00120478b3f4b931b0184f4c094b2858021ab46589e38c7f102->leave($__internal_21f945e22216b00120478b3f4b931b0184f4c094b2858021ab46589e38c7f102_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b6280e8581cbfabfa769262f226aef25c5bfb75dd0908cd3fb0c7a45d21d477 = $this->env->getExtension("native_profiler");
        $__internal_9b6280e8581cbfabfa769262f226aef25c5bfb75dd0908cd3fb0c7a45d21d477->enter($__internal_9b6280e8581cbfabfa769262f226aef25c5bfb75dd0908cd3fb0c7a45d21d477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Belasting";
        
        $__internal_9b6280e8581cbfabfa769262f226aef25c5bfb75dd0908cd3fb0c7a45d21d477->leave($__internal_9b6280e8581cbfabfa769262f226aef25c5bfb75dd0908cd3fb0c7a45d21d477_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f1b23ba266f559935a1af8dbed9d598d154db3aa75c98053a079f3cbfb77c1b = $this->env->getExtension("native_profiler");
        $__internal_1f1b23ba266f559935a1af8dbed9d598d154db3aa75c98053a079f3cbfb77c1b->enter($__internal_1f1b23ba266f559935a1af8dbed9d598d154db3aa75c98053a079f3cbfb77c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    Belasting Berekening.

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <table>
        <tr>
            <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "naam_1", array()), 'label');
        echo "</td>
            <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "naam_1", array()), 'widget');
        echo "</td>
            <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "naam_1", array()), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bruto_salaris_1", array()), 'label');
        echo "</td>
            <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bruto_salaris_1", array()), 'widget');
        echo "</td>
            <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bruto_salaris_1", array()), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "naam_2", array()), 'label');
        echo "</td>
            <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "naam_2", array()), 'widget');
        echo "</td>
            <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "naam_2", array()), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bruto_salaris_2", array()), 'label');
        echo "</td>
            <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bruto_salaris_2", array()), 'widget');
        echo "</td>
            <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bruto_salaris_2", array()), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eigenwoning_woz", array()), 'label');
        echo "</td>
            <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eigenwoning_woz", array()), 'widget');
        echo "</td>
            <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eigenwoning_woz", array()), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eigenwoning_rente", array()), 'label');
        echo "</td>
            <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eigenwoning_rente", array()), 'widget');
        echo "</td>
            <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eigenwoning_rente", array()), 'errors');
        echo "</td>
        </tr>

        <tr>
            <td></td>
            <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "</td>
        </tr>
    </table>        
    ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <table>
        <col width=\"240px\">
        <col width=\"80px\">
        <col width=\"80px\">
        <col width=\"80px\">
        <col width=\"80px\">
        <col width=\"80px\">
        <tr>
            <th>naam</td>
            <th></th>
            <th>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "naam_1", array()), "html", null, true);
        echo "</th>
            <td></td>
            <th>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "naam_2", array()), "html", null, true);
        echo "</th>
        </tr>
        <tr>
            <td>bruto salaris</td>
            <td></td>
            <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "bruto_salaris_1", array())), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "bruto_salaris_2", array())), "html", null, true);
        echo "</td>
        </tr>    
        <tr>
            <td>Eigen Woning WOZ</td>
            <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "eigenwoning_woz", array())), "html", null, true);
        echo "</td>
        </tr>    
        <tr>
            <td>Eigen Woning Rente</td>
            <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "eigenwoning_rente", array())), "html", null, true);
        echo "</td>
        </tr>    
        <tr>
            <td>Eigen Woning Forfait</td>
            <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "eigenwoning_forfait", array())), "html", null, true);
        echo "</td>
        </tr>    
        <tr>
            <td>Eigen Woning Opbrengst</td>
            <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "eigenwoning_opbrengst", array())), "html", null, true);
        echo "</td>
        </tr>    
        <tr>
            <td>belastbaar</td>
            <td></td>
            <td>";
        // line 89
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_1", array())), "html", null, true);
        echo "</td>
            <td></td>
            <td>";
        // line 91
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_2", array())), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>LoonBelasting</th>
        </tr>
        <tr>
            <td>schijf 1</td>
            <td></td>
            <td>";
        // line 99
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_schijf1_1", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 100
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "loonbelasting_schijf1_1", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 101
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_schijf1_2", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 102
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "loonbelasting_schijf1_2", array())), "html", null, true);
        echo "</td>
        </tr>    
        <tr>
            <td>schijf 2</td>
            <td></td>
            <td>";
        // line 107
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_schijf2_1", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 108
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "loonbelasting_schijf2_1", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 109
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_schijf2_2", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 110
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "loonbelasting_schijf2_2", array())), "html", null, true);
        echo "</td>
        </tr>    
        <tr>
            <td>schijf 3</td>
            <td></td>
            <td>";
        // line 115
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_schijf3_1", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 116
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "loonbelasting_schijf3_1", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 117
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_schijf3_2", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 118
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "loonbelasting_schijf3_2", array())), "html", null, true);
        echo "</td>
        </tr>    
        <tr>
            <td>schijf 4</td>
            <td></td>
            <td>";
        // line 123
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_schijf4_1", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 124
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "loonbelasting_schijf4_1", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 125
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_schijf4_2", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 126
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "loonbelasting_schijf4_2", array())), "html", null, true);
        echo "</td>
        </tr>    
        <tr>
            <th>premie Volksverzekeringen</th>
        </tr>
        <tr>
            <td>premie AOW</td>
            <td></td>
            <td>";
        // line 134
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_aow_1", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 135
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "premie_aow_1", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 136
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_aow_2", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 137
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "premie_aow_2", array())), "html", null, true);
        echo "</td>
        </tr>    
        <tr>
            <td>premie Anw</td>
            <td></td>
            <td>";
        // line 142
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_anw_1", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 143
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "premie_anw_1", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 144
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_anw_2", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 145
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "premie_anw_2", array())), "html", null, true);
        echo "</td>
        </tr>    
        <tr>
            <td>premie Wlz</td>
            <td></td>
            <td>";
        // line 150
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_wlz_1", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 151
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "premie_wlz_1", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 152
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "belastbaar_wlz_2", array())), "html", null, true);
        echo "</td>
            <td>";
        // line 153
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "premie_wlz_2", array())), "html", null, true);
        echo "</td>
        </tr>    
        <tr>
            <th>Heffingskortingen</th>
        </tr>
        <tr>
            <td>Algemene HeffingsKorting</td>
        </tr>
        <tr>
            <td>Arbeidskorting</td>
        </tr>
        <tr>
            <td>Werkbonus</td>
        </tr>
        <tr>
            <td>CombinatieKorting</td>
        </tr>
        <tr>
            <th>Toeslagen</th>
        </tr>
        <tr>
            <td>ZorgToeslag</td>
        </tr>
        <tr>
            <td>HuurToeslag</td>
        </tr>
        <tr>
            <td>KinderopvangToeslag</td>
        </tr>
        <tr>
            <td>Kindgebonden Budget</td>
        </tr>
        <tr>
            <td>KinderBijslag</td>
        </tr>
    </table>
";
        
        $__internal_1f1b23ba266f559935a1af8dbed9d598d154db3aa75c98053a079f3cbfb77c1b->leave($__internal_1f1b23ba266f559935a1af8dbed9d598d154db3aa75c98053a079f3cbfb77c1b_prof);

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
        return array (  379 => 153,  375 => 152,  371 => 151,  367 => 150,  359 => 145,  355 => 144,  351 => 143,  347 => 142,  339 => 137,  335 => 136,  331 => 135,  327 => 134,  316 => 126,  312 => 125,  308 => 124,  304 => 123,  296 => 118,  292 => 117,  288 => 116,  284 => 115,  276 => 110,  272 => 109,  268 => 108,  264 => 107,  256 => 102,  252 => 101,  248 => 100,  244 => 99,  233 => 91,  228 => 89,  220 => 84,  213 => 80,  206 => 76,  199 => 72,  192 => 68,  187 => 66,  179 => 61,  174 => 59,  159 => 47,  153 => 44,  145 => 39,  141 => 38,  137 => 37,  131 => 34,  127 => 33,  123 => 32,  117 => 29,  113 => 28,  109 => 27,  103 => 24,  99 => 23,  95 => 22,  89 => 19,  85 => 18,  81 => 17,  75 => 14,  71 => 13,  67 => 12,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'BelastingBundle::base.html.twig' %}*/
/* */
/* {% block title %}Belasting{% endblock %}*/
/* */
/* {% block body %}*/
/*     Belasting Berekening.*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/*     <table>*/
/*         <tr>*/
/*             <td>{{ form_label(form.naam_1) }}</td>*/
/*             <td>{{ form_widget(form.naam_1) }}</td>*/
/*             <td>{{ form_errors(form.naam_1) }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>{{ form_label(form.bruto_salaris_1) }}</td>*/
/*             <td>{{ form_widget(form.bruto_salaris_1) }}</td>*/
/*             <td>{{ form_errors(form.bruto_salaris_1) }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>{{ form_label(form.naam_2) }}</td>*/
/*             <td>{{ form_widget(form.naam_2) }}</td>*/
/*             <td>{{ form_errors(form.naam_2) }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>{{ form_label(form.bruto_salaris_2) }}</td>*/
/*             <td>{{ form_widget(form.bruto_salaris_2) }}</td>*/
/*             <td>{{ form_errors(form.bruto_salaris_2) }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>{{ form_label(form.eigenwoning_woz) }}</td>*/
/*             <td>{{ form_widget(form.eigenwoning_woz) }}</td>*/
/*             <td>{{ form_errors(form.eigenwoning_woz) }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>{{ form_label(form.eigenwoning_rente) }}</td>*/
/*             <td>{{ form_widget(form.eigenwoning_rente) }}</td>*/
/*             <td>{{ form_errors(form.eigenwoning_rente) }}</td>*/
/*         </tr>*/
/* */
/*         <tr>*/
/*             <td></td>*/
/*             <td>{{ form_widget(form.save) }}</td>*/
/*         </tr>*/
/*     </table>        */
/*     {{ form_end(form) }}*/
/* */
/*     <table>*/
/*         <col width="240px">*/
/*         <col width="80px">*/
/*         <col width="80px">*/
/*         <col width="80px">*/
/*         <col width="80px">*/
/*         <col width="80px">*/
/*         <tr>*/
/*             <th>naam</td>*/
/*             <th></th>*/
/*             <th>{{ data.naam_1 }}</th>*/
/*             <td></td>*/
/*             <th>{{ data.naam_2 }}</th>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>bruto salaris</td>*/
/*             <td></td>*/
/*             <td>{{ data.bruto_salaris_1|number_format }}</td>*/
/*             <td></td>*/
/*             <td>{{ data.bruto_salaris_2|number_format }}</td>*/
/*         </tr>    */
/*         <tr>*/
/*             <td>Eigen Woning WOZ</td>*/
/*             <td>{{ data.eigenwoning_woz|number_format }}</td>*/
/*         </tr>    */
/*         <tr>*/
/*             <td>Eigen Woning Rente</td>*/
/*             <td>{{ data.eigenwoning_rente|number_format }}</td>*/
/*         </tr>    */
/*         <tr>*/
/*             <td>Eigen Woning Forfait</td>*/
/*             <td>{{ data.eigenwoning_forfait|number_format }}</td>*/
/*         </tr>    */
/*         <tr>*/
/*             <td>Eigen Woning Opbrengst</td>*/
/*             <td>{{ data.eigenwoning_opbrengst|number_format }}</td>*/
/*         </tr>    */
/*         <tr>*/
/*             <td>belastbaar</td>*/
/*             <td></td>*/
/*             <td>{{ data.belastbaar_1|number_format }}</td>*/
/*             <td></td>*/
/*             <td>{{ data.belastbaar_2|number_format }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>LoonBelasting</th>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>schijf 1</td>*/
/*             <td></td>*/
/*             <td>{{ data.belastbaar_schijf1_1|number_format }}</td>*/
/*             <td>{{ data.loonbelasting_schijf1_1|number_format }}</td>*/
/*             <td>{{ data.belastbaar_schijf1_2|number_format }}</td>*/
/*             <td>{{ data.loonbelasting_schijf1_2|number_format }}</td>*/
/*         </tr>    */
/*         <tr>*/
/*             <td>schijf 2</td>*/
/*             <td></td>*/
/*             <td>{{ data.belastbaar_schijf2_1|number_format }}</td>*/
/*             <td>{{ data.loonbelasting_schijf2_1|number_format }}</td>*/
/*             <td>{{ data.belastbaar_schijf2_2|number_format }}</td>*/
/*             <td>{{ data.loonbelasting_schijf2_2|number_format }}</td>*/
/*         </tr>    */
/*         <tr>*/
/*             <td>schijf 3</td>*/
/*             <td></td>*/
/*             <td>{{ data.belastbaar_schijf3_1|number_format }}</td>*/
/*             <td>{{ data.loonbelasting_schijf3_1|number_format }}</td>*/
/*             <td>{{ data.belastbaar_schijf3_2|number_format }}</td>*/
/*             <td>{{ data.loonbelasting_schijf3_2|number_format }}</td>*/
/*         </tr>    */
/*         <tr>*/
/*             <td>schijf 4</td>*/
/*             <td></td>*/
/*             <td>{{ data.belastbaar_schijf4_1|number_format }}</td>*/
/*             <td>{{ data.loonbelasting_schijf4_1|number_format }}</td>*/
/*             <td>{{ data.belastbaar_schijf4_2|number_format }}</td>*/
/*             <td>{{ data.loonbelasting_schijf4_2|number_format }}</td>*/
/*         </tr>    */
/*         <tr>*/
/*             <th>premie Volksverzekeringen</th>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>premie AOW</td>*/
/*             <td></td>*/
/*             <td>{{ data.belastbaar_aow_1|number_format }}</td>*/
/*             <td>{{ data.premie_aow_1|number_format }}</td>*/
/*             <td>{{ data.belastbaar_aow_2|number_format }}</td>*/
/*             <td>{{ data.premie_aow_2|number_format }}</td>*/
/*         </tr>    */
/*         <tr>*/
/*             <td>premie Anw</td>*/
/*             <td></td>*/
/*             <td>{{ data.belastbaar_anw_1|number_format }}</td>*/
/*             <td>{{ data.premie_anw_1|number_format }}</td>*/
/*             <td>{{ data.belastbaar_anw_2|number_format }}</td>*/
/*             <td>{{ data.premie_anw_2|number_format }}</td>*/
/*         </tr>    */
/*         <tr>*/
/*             <td>premie Wlz</td>*/
/*             <td></td>*/
/*             <td>{{ data.belastbaar_wlz_1|number_format }}</td>*/
/*             <td>{{ data.premie_wlz_1|number_format }}</td>*/
/*             <td>{{ data.belastbaar_wlz_2|number_format }}</td>*/
/*             <td>{{ data.premie_wlz_2|number_format }}</td>*/
/*         </tr>    */
/*         <tr>*/
/*             <th>Heffingskortingen</th>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>Algemene HeffingsKorting</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>Arbeidskorting</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>Werkbonus</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>CombinatieKorting</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Toeslagen</th>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>ZorgToeslag</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>HuurToeslag</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>KinderopvangToeslag</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>Kindgebonden Budget</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>KinderBijslag</td>*/
/*         </tr>*/
/*     </table>*/
/* {% endblock %}*/
/* */
