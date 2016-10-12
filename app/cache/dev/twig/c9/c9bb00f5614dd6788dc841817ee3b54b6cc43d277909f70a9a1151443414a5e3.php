<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_01e99251b761749a17358b9563a719b2cbd1abf48559c4f4b3992ece0c4d85d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_0d4416bdec7d440173deba60d82c9e7accc5a71a63036669cde6e06d9e73d6f0 = $this->env->getExtension("native_profiler");
        $__internal_0d4416bdec7d440173deba60d82c9e7accc5a71a63036669cde6e06d9e73d6f0->enter($__internal_0d4416bdec7d440173deba60d82c9e7accc5a71a63036669cde6e06d9e73d6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d4416bdec7d440173deba60d82c9e7accc5a71a63036669cde6e06d9e73d6f0->leave($__internal_0d4416bdec7d440173deba60d82c9e7accc5a71a63036669cde6e06d9e73d6f0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53a80b72d3bfdd03e987d52395759153be8a6976692cba6fe883595eba2b4fa4 = $this->env->getExtension("native_profiler");
        $__internal_53a80b72d3bfdd03e987d52395759153be8a6976692cba6fe883595eba2b4fa4->enter($__internal_53a80b72d3bfdd03e987d52395759153be8a6976692cba6fe883595eba2b4fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_53a80b72d3bfdd03e987d52395759153be8a6976692cba6fe883595eba2b4fa4->leave($__internal_53a80b72d3bfdd03e987d52395759153be8a6976692cba6fe883595eba2b4fa4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
