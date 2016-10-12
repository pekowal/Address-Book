<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9a4883eaad5c27b8947e170fbe3d1154c107481e4b449761924f3cb0c5be660e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_8ef25a95235de5ba00260fd845b6f4ead14106323ae6aff3c71758dd0ac16e7f = $this->env->getExtension("native_profiler");
        $__internal_8ef25a95235de5ba00260fd845b6f4ead14106323ae6aff3c71758dd0ac16e7f->enter($__internal_8ef25a95235de5ba00260fd845b6f4ead14106323ae6aff3c71758dd0ac16e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ef25a95235de5ba00260fd845b6f4ead14106323ae6aff3c71758dd0ac16e7f->leave($__internal_8ef25a95235de5ba00260fd845b6f4ead14106323ae6aff3c71758dd0ac16e7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45f8c2f3bf262131134c866fc01292ac6d1c0207930bc56885ad1cc4afb2fe8f = $this->env->getExtension("native_profiler");
        $__internal_45f8c2f3bf262131134c866fc01292ac6d1c0207930bc56885ad1cc4afb2fe8f->enter($__internal_45f8c2f3bf262131134c866fc01292ac6d1c0207930bc56885ad1cc4afb2fe8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_45f8c2f3bf262131134c866fc01292ac6d1c0207930bc56885ad1cc4afb2fe8f->leave($__internal_45f8c2f3bf262131134c866fc01292ac6d1c0207930bc56885ad1cc4afb2fe8f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
