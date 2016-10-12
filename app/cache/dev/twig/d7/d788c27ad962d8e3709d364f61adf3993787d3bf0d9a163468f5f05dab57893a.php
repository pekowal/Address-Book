<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_72b4c96ab931388f3dde7ad1e75ec351c72c1c83275df3f3b2054f3ee18c7517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_ef3a6c12ca47a1346d3e70ea8ba623bacda505a5dc461d0fa4c2500ea337e45d = $this->env->getExtension("native_profiler");
        $__internal_ef3a6c12ca47a1346d3e70ea8ba623bacda505a5dc461d0fa4c2500ea337e45d->enter($__internal_ef3a6c12ca47a1346d3e70ea8ba623bacda505a5dc461d0fa4c2500ea337e45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef3a6c12ca47a1346d3e70ea8ba623bacda505a5dc461d0fa4c2500ea337e45d->leave($__internal_ef3a6c12ca47a1346d3e70ea8ba623bacda505a5dc461d0fa4c2500ea337e45d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80572fa0e90af8d2b947080df9559d9064b38c82845b3e00bf733769aea95501 = $this->env->getExtension("native_profiler");
        $__internal_80572fa0e90af8d2b947080df9559d9064b38c82845b3e00bf733769aea95501->enter($__internal_80572fa0e90af8d2b947080df9559d9064b38c82845b3e00bf733769aea95501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_80572fa0e90af8d2b947080df9559d9064b38c82845b3e00bf733769aea95501->leave($__internal_80572fa0e90af8d2b947080df9559d9064b38c82845b3e00bf733769aea95501_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
