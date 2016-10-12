<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_9f25e1973ae420bfd946186d8a92d69df9289c839075eb71feb8a56afc588b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9681fd88abb85c0cc0143b9ce38e206980c2d6fccf3fa644a6be313db1ffc702 = $this->env->getExtension("native_profiler");
        $__internal_9681fd88abb85c0cc0143b9ce38e206980c2d6fccf3fa644a6be313db1ffc702->enter($__internal_9681fd88abb85c0cc0143b9ce38e206980c2d6fccf3fa644a6be313db1ffc702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9681fd88abb85c0cc0143b9ce38e206980c2d6fccf3fa644a6be313db1ffc702->leave($__internal_9681fd88abb85c0cc0143b9ce38e206980c2d6fccf3fa644a6be313db1ffc702_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0a06091f7caa1fa231d3041adef7702baca0327ddc6194c158dea94de169c66f = $this->env->getExtension("native_profiler");
        $__internal_0a06091f7caa1fa231d3041adef7702baca0327ddc6194c158dea94de169c66f->enter($__internal_0a06091f7caa1fa231d3041adef7702baca0327ddc6194c158dea94de169c66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_0a06091f7caa1fa231d3041adef7702baca0327ddc6194c158dea94de169c66f->leave($__internal_0a06091f7caa1fa231d3041adef7702baca0327ddc6194c158dea94de169c66f_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ecbbe224e92eba01ea6065790ba307bc4187d91ed1cdba9ff74eaf15a7497580 = $this->env->getExtension("native_profiler");
        $__internal_ecbbe224e92eba01ea6065790ba307bc4187d91ed1cdba9ff74eaf15a7497580->enter($__internal_ecbbe224e92eba01ea6065790ba307bc4187d91ed1cdba9ff74eaf15a7497580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "FOSUserBundle:Registration:register_content.html.twig");
        echo "
    ";
        
        $__internal_ecbbe224e92eba01ea6065790ba307bc4187d91ed1cdba9ff74eaf15a7497580->leave($__internal_ecbbe224e92eba01ea6065790ba307bc4187d91ed1cdba9ff74eaf15a7497580_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     {% block fos_user_content %}*/
/*         {{ include('FOSUserBundle:Registration:register_content.html.twig') }}*/
/*     {% endblock fos_user_content %}*/
/* {% endblock %}*/
/* */
