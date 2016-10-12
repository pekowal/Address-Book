<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_bce23e199d5e83693d17030a550dffd631ada9bf270b996a3343e08c666baed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_8d25553e34a05febf7cdd3a26809599048219248f937286fe13c41d92c7b80d5 = $this->env->getExtension("native_profiler");
        $__internal_8d25553e34a05febf7cdd3a26809599048219248f937286fe13c41d92c7b80d5->enter($__internal_8d25553e34a05febf7cdd3a26809599048219248f937286fe13c41d92c7b80d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d25553e34a05febf7cdd3a26809599048219248f937286fe13c41d92c7b80d5->leave($__internal_8d25553e34a05febf7cdd3a26809599048219248f937286fe13c41d92c7b80d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_434bdb7253b4ebcb52acbe52386e69949d7a81af252653c4f6129506c719d074 = $this->env->getExtension("native_profiler");
        $__internal_434bdb7253b4ebcb52acbe52386e69949d7a81af252653c4f6129506c719d074->enter($__internal_434bdb7253b4ebcb52acbe52386e69949d7a81af252653c4f6129506c719d074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_434bdb7253b4ebcb52acbe52386e69949d7a81af252653c4f6129506c719d074->leave($__internal_434bdb7253b4ebcb52acbe52386e69949d7a81af252653c4f6129506c719d074_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
