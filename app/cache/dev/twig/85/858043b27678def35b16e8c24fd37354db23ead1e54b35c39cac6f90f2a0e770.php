<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_23194423bdb47997bbbdb67b805d8408deaec898fa38428ea12f63b418e6b89d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b52f809aff9f14cf96558a2512dc55be918e27a3a908bda3b7141c3374ea677 = $this->env->getExtension("native_profiler");
        $__internal_9b52f809aff9f14cf96558a2512dc55be918e27a3a908bda3b7141c3374ea677->enter($__internal_9b52f809aff9f14cf96558a2512dc55be918e27a3a908bda3b7141c3374ea677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b52f809aff9f14cf96558a2512dc55be918e27a3a908bda3b7141c3374ea677->leave($__internal_9b52f809aff9f14cf96558a2512dc55be918e27a3a908bda3b7141c3374ea677_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c78e078e3e8544553d472d642e43e8dd11a7890b05b5a7be78eecc7570e4c481 = $this->env->getExtension("native_profiler");
        $__internal_c78e078e3e8544553d472d642e43e8dd11a7890b05b5a7be78eecc7570e4c481->enter($__internal_c78e078e3e8544553d472d642e43e8dd11a7890b05b5a7be78eecc7570e4c481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
    ";
        
        $__internal_c78e078e3e8544553d472d642e43e8dd11a7890b05b5a7be78eecc7570e4c481->leave($__internal_c78e078e3e8544553d472d642e43e8dd11a7890b05b5a7be78eecc7570e4c481_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* */
/* */
/*     {% block fos_user_content %}*/
/*         {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/*     {% endblock fos_user_content %}*/
/* */
