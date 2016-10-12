<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b2d5966285401245739cc765b7df276c726cd477909c4aec590b074322eb2cdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_28f36750024dde603b86e0daec0f6220971d901647b51e5cc79af4d7a41baa0c = $this->env->getExtension("native_profiler");
        $__internal_28f36750024dde603b86e0daec0f6220971d901647b51e5cc79af4d7a41baa0c->enter($__internal_28f36750024dde603b86e0daec0f6220971d901647b51e5cc79af4d7a41baa0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f36750024dde603b86e0daec0f6220971d901647b51e5cc79af4d7a41baa0c->leave($__internal_28f36750024dde603b86e0daec0f6220971d901647b51e5cc79af4d7a41baa0c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fead090bb7e5c8f857b93b312a27ea5cde8b5ef03a1a57c5e1825534830b9a7 = $this->env->getExtension("native_profiler");
        $__internal_9fead090bb7e5c8f857b93b312a27ea5cde8b5ef03a1a57c5e1825534830b9a7->enter($__internal_9fead090bb7e5c8f857b93b312a27ea5cde8b5ef03a1a57c5e1825534830b9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9fead090bb7e5c8f857b93b312a27ea5cde8b5ef03a1a57c5e1825534830b9a7->leave($__internal_9fead090bb7e5c8f857b93b312a27ea5cde8b5ef03a1a57c5e1825534830b9a7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
