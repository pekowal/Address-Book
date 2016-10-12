<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_5eb9fe24c60c72ac02cd9d0bbe5d241ace2388bb4bb37bf90089bf42166f85d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c70cbe3b42b407b1d8e83c2325bc488fbc9257337f35d28a6def5c05a6590f03 = $this->env->getExtension("native_profiler");
        $__internal_c70cbe3b42b407b1d8e83c2325bc488fbc9257337f35d28a6def5c05a6590f03->enter($__internal_c70cbe3b42b407b1d8e83c2325bc488fbc9257337f35d28a6def5c05a6590f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_c70cbe3b42b407b1d8e83c2325bc488fbc9257337f35d28a6def5c05a6590f03->leave($__internal_c70cbe3b42b407b1d8e83c2325bc488fbc9257337f35d28a6def5c05a6590f03_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_42e7b1507a013f72ea619bd0c2433a0c9c19f073012392772daa004517829097 = $this->env->getExtension("native_profiler");
        $__internal_42e7b1507a013f72ea619bd0c2433a0c9c19f073012392772daa004517829097->enter($__internal_42e7b1507a013f72ea619bd0c2433a0c9c19f073012392772daa004517829097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"register-div\">
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register", "novalidate" => "novalidate")));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div>
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
        </div>
        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_42e7b1507a013f72ea619bd0c2433a0c9c19f073012392772daa004517829097->leave($__internal_42e7b1507a013f72ea619bd0c2433a0c9c19f073012392772daa004517829097_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  51 => 9,  46 => 7,  42 => 6,  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="register-div">*/
/*         {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register','novalidate': 'novalidate'}}) }}*/
/*         {{ form_widget(form) }}*/
/*         <div>*/
/*             <input class="btn btn-primary" type="submit" value="{{ 'registration.submit'|trans }}"/>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
