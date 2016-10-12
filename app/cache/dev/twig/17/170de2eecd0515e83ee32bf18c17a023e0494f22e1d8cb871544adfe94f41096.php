<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_dd91d0a27d5bf0bb004bdbddaf3789db7913a6dab8a4f7677ec10d919ed26555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3db54bab236d89e2bd825f65611f2d91ed7538586913255de4a8fa3fc86f2ab6 = $this->env->getExtension("native_profiler");
        $__internal_3db54bab236d89e2bd825f65611f2d91ed7538586913255de4a8fa3fc86f2ab6->enter($__internal_3db54bab236d89e2bd825f65611f2d91ed7538586913255de4a8fa3fc86f2ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3db54bab236d89e2bd825f65611f2d91ed7538586913255de4a8fa3fc86f2ab6->leave($__internal_3db54bab236d89e2bd825f65611f2d91ed7538586913255de4a8fa3fc86f2ab6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6b841a69d880fe2f73dab4086e6610ef2c24fb3aa27c1efe9d1fa7d3e114469 = $this->env->getExtension("native_profiler");
        $__internal_e6b841a69d880fe2f73dab4086e6610ef2c24fb3aa27c1efe9d1fa7d3e114469->enter($__internal_e6b841a69d880fe2f73dab4086e6610ef2c24fb3aa27c1efe9d1fa7d3e114469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e6b841a69d880fe2f73dab4086e6610ef2c24fb3aa27c1efe9d1fa7d3e114469->leave($__internal_e6b841a69d880fe2f73dab4086e6610ef2c24fb3aa27c1efe9d1fa7d3e114469_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
