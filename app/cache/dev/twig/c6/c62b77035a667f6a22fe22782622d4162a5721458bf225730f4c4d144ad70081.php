<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_462c9fd14bd496540db0042c67b898ffadb8661ad45afd112fffcdab671b9b6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_df13755a9e6310c48431a5f662d8ee4709fbcfc4e187cd0a63e0d9414c81f35b = $this->env->getExtension("native_profiler");
        $__internal_df13755a9e6310c48431a5f662d8ee4709fbcfc4e187cd0a63e0d9414c81f35b->enter($__internal_df13755a9e6310c48431a5f662d8ee4709fbcfc4e187cd0a63e0d9414c81f35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df13755a9e6310c48431a5f662d8ee4709fbcfc4e187cd0a63e0d9414c81f35b->leave($__internal_df13755a9e6310c48431a5f662d8ee4709fbcfc4e187cd0a63e0d9414c81f35b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6fa66624dfa0efc5099366bec92b1852606225b7c61b50fc893f7ac31fe3e50d = $this->env->getExtension("native_profiler");
        $__internal_6fa66624dfa0efc5099366bec92b1852606225b7c61b50fc893f7ac31fe3e50d->enter($__internal_6fa66624dfa0efc5099366bec92b1852606225b7c61b50fc893f7ac31fe3e50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6fa66624dfa0efc5099366bec92b1852606225b7c61b50fc893f7ac31fe3e50d->leave($__internal_6fa66624dfa0efc5099366bec92b1852606225b7c61b50fc893f7ac31fe3e50d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
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
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
