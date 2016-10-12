<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_476a21a8876d9a5334ae770b6b08379e464f75ed6e4b0038ba49a6f8a64e0c03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3de8419600bb735622d29e0eb42540c0b49304f8d5c51e4372e88f332fed2aed = $this->env->getExtension("native_profiler");
        $__internal_3de8419600bb735622d29e0eb42540c0b49304f8d5c51e4372e88f332fed2aed->enter($__internal_3de8419600bb735622d29e0eb42540c0b49304f8d5c51e4372e88f332fed2aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3de8419600bb735622d29e0eb42540c0b49304f8d5c51e4372e88f332fed2aed->leave($__internal_3de8419600bb735622d29e0eb42540c0b49304f8d5c51e4372e88f332fed2aed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0330787201b8dd20501779ebb568ae8fe7494eeded10cde827eba1c24ed95208 = $this->env->getExtension("native_profiler");
        $__internal_0330787201b8dd20501779ebb568ae8fe7494eeded10cde827eba1c24ed95208->enter($__internal_0330787201b8dd20501779ebb568ae8fe7494eeded10cde827eba1c24ed95208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0330787201b8dd20501779ebb568ae8fe7494eeded10cde827eba1c24ed95208->leave($__internal_0330787201b8dd20501779ebb568ae8fe7494eeded10cde827eba1c24ed95208_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
