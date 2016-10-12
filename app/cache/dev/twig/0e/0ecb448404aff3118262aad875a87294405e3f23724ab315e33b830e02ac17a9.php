<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_10ba8b1984a5a49b15804c7ac13292b07a06983c5efea7de9b7f6fe471490f30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_1b82ac6942730c699692301e65faf81faa35bc9072f80057ea486c7507ab4868 = $this->env->getExtension("native_profiler");
        $__internal_1b82ac6942730c699692301e65faf81faa35bc9072f80057ea486c7507ab4868->enter($__internal_1b82ac6942730c699692301e65faf81faa35bc9072f80057ea486c7507ab4868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b82ac6942730c699692301e65faf81faa35bc9072f80057ea486c7507ab4868->leave($__internal_1b82ac6942730c699692301e65faf81faa35bc9072f80057ea486c7507ab4868_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2fdb2a8d5ed88759f474c08ab0fa8969e46ba0daefcdb8541a4fc1ccfcd25ee = $this->env->getExtension("native_profiler");
        $__internal_b2fdb2a8d5ed88759f474c08ab0fa8969e46ba0daefcdb8541a4fc1ccfcd25ee->enter($__internal_b2fdb2a8d5ed88759f474c08ab0fa8969e46ba0daefcdb8541a4fc1ccfcd25ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_b2fdb2a8d5ed88759f474c08ab0fa8969e46ba0daefcdb8541a4fc1ccfcd25ee->leave($__internal_b2fdb2a8d5ed88759f474c08ab0fa8969e46ba0daefcdb8541a4fc1ccfcd25ee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
