<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_d7b2a956d1fdfac32c171fe4fbce0f14740753b6737d4713358264f8b43ab53e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_d0217058ce572e7a8bbcff7776e6a58cf5331d34199ae7b31b48a0aca39e6882 = $this->env->getExtension("native_profiler");
        $__internal_d0217058ce572e7a8bbcff7776e6a58cf5331d34199ae7b31b48a0aca39e6882->enter($__internal_d0217058ce572e7a8bbcff7776e6a58cf5331d34199ae7b31b48a0aca39e6882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0217058ce572e7a8bbcff7776e6a58cf5331d34199ae7b31b48a0aca39e6882->leave($__internal_d0217058ce572e7a8bbcff7776e6a58cf5331d34199ae7b31b48a0aca39e6882_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de0e742501ff4115ad1052e7778f5b754f2e9ade21d9c5ae82695f6fd1ccea04 = $this->env->getExtension("native_profiler");
        $__internal_de0e742501ff4115ad1052e7778f5b754f2e9ade21d9c5ae82695f6fd1ccea04->enter($__internal_de0e742501ff4115ad1052e7778f5b754f2e9ade21d9c5ae82695f6fd1ccea04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_de0e742501ff4115ad1052e7778f5b754f2e9ade21d9c5ae82695f6fd1ccea04->leave($__internal_de0e742501ff4115ad1052e7778f5b754f2e9ade21d9c5ae82695f6fd1ccea04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
