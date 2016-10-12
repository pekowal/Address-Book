<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c5333109c2e61854143e13e5e2e2faa3444d6967d1569e2ac1cc397bc9c9dad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a9dd57691d1275e7687893c6d9fea5cb016c644ce92f223ff2c8503c96d3454d = $this->env->getExtension("native_profiler");
        $__internal_a9dd57691d1275e7687893c6d9fea5cb016c644ce92f223ff2c8503c96d3454d->enter($__internal_a9dd57691d1275e7687893c6d9fea5cb016c644ce92f223ff2c8503c96d3454d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9dd57691d1275e7687893c6d9fea5cb016c644ce92f223ff2c8503c96d3454d->leave($__internal_a9dd57691d1275e7687893c6d9fea5cb016c644ce92f223ff2c8503c96d3454d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b8f5be0a2fc35d9d016efb14cd0078b1ce920266061a808cc9892292b397ca2 = $this->env->getExtension("native_profiler");
        $__internal_5b8f5be0a2fc35d9d016efb14cd0078b1ce920266061a808cc9892292b397ca2->enter($__internal_5b8f5be0a2fc35d9d016efb14cd0078b1ce920266061a808cc9892292b397ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_5b8f5be0a2fc35d9d016efb14cd0078b1ce920266061a808cc9892292b397ca2->leave($__internal_5b8f5be0a2fc35d9d016efb14cd0078b1ce920266061a808cc9892292b397ca2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
