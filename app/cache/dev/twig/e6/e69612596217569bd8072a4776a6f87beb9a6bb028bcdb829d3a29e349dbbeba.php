<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_f70bd300dfb61abef99c8a20354f0f4c1c2acd11338fcde632f6e9690ddb8e0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66423df5da3d9d6085d4c88bbebb6031083fff0e4c391b24478700144d7d94cd = $this->env->getExtension("native_profiler");
        $__internal_66423df5da3d9d6085d4c88bbebb6031083fff0e4c391b24478700144d7d94cd->enter($__internal_66423df5da3d9d6085d4c88bbebb6031083fff0e4c391b24478700144d7d94cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_66423df5da3d9d6085d4c88bbebb6031083fff0e4c391b24478700144d7d94cd->leave($__internal_66423df5da3d9d6085d4c88bbebb6031083fff0e4c391b24478700144d7d94cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7adcc1dfa872a7128cbc243c76c539036644e9205cd0ce9a766d07bd92191c46 = $this->env->getExtension("native_profiler");
        $__internal_7adcc1dfa872a7128cbc243c76c539036644e9205cd0ce9a766d07bd92191c46->enter($__internal_7adcc1dfa872a7128cbc243c76c539036644e9205cd0ce9a766d07bd92191c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_7adcc1dfa872a7128cbc243c76c539036644e9205cd0ce9a766d07bd92191c46->leave($__internal_7adcc1dfa872a7128cbc243c76c539036644e9205cd0ce9a766d07bd92191c46_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0143f9d0df880de9e65a3e7566967f2565e603baee0fcb3376613bde309e1bbf = $this->env->getExtension("native_profiler");
        $__internal_0143f9d0df880de9e65a3e7566967f2565e603baee0fcb3376613bde309e1bbf->enter($__internal_0143f9d0df880de9e65a3e7566967f2565e603baee0fcb3376613bde309e1bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "        <div class=\"request-div\">
            <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\"
                  class=\"fos_user_resetting_request form-horizontal\">
                <div class=\"form-group\">
                    ";
        // line 12
        if (array_key_exists("invalid_username", $context)) {
            // line 13
            echo "                        <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
                    ";
        }
        // line 15
        echo "                    <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"username\" required=\"required\"/>
                </div>
                <div>
                    <input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                </div>
            </form>
        </div>
    ";
        
        $__internal_0143f9d0df880de9e65a3e7566967f2565e603baee0fcb3376613bde309e1bbf->leave($__internal_0143f9d0df880de9e65a3e7566967f2565e603baee0fcb3376613bde309e1bbf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  76 => 15,  70 => 13,  68 => 12,  62 => 9,  59 => 8,  53 => 7,  45 => 4,  39 => 3,  32 => 7,  29 => 6,  27 => 3,  24 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* */
/*     {% block fos_user_content %}*/
/*         <div class="request-div">*/
/*             <form action="{{ path('fos_user_resetting_send_email') }}" method="POST"*/
/*                   class="fos_user_resetting_request form-horizontal">*/
/*                 <div class="form-group">*/
/*                     {% if invalid_username is defined %}*/
/*                         <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>*/
/*                     {% endif %}*/
/*                     <label for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*                     <input class="form-control" type="text" id="username" name="username" required="required"/>*/
/*                 </div>*/
/*                 <div>*/
/*                     <input class="btn btn-success" type="submit" value="{{ 'resetting.request.submit'|trans }}"/>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     {% endblock fos_user_content %}*/
