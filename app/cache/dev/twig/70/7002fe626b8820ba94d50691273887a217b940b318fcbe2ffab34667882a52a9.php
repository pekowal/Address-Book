<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_086889e7549fa68a14be58fccecc44b9bcb8893e6dd164eb20dfe9a69e1cec37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d231d6bae6ee44fbb5a4b2a3116d498c81b92c79117293d79ed2641da86c11cb = $this->env->getExtension("native_profiler");
        $__internal_d231d6bae6ee44fbb5a4b2a3116d498c81b92c79117293d79ed2641da86c11cb->enter($__internal_d231d6bae6ee44fbb5a4b2a3116d498c81b92c79117293d79ed2641da86c11cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d231d6bae6ee44fbb5a4b2a3116d498c81b92c79117293d79ed2641da86c11cb->leave($__internal_d231d6bae6ee44fbb5a4b2a3116d498c81b92c79117293d79ed2641da86c11cb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ec1661a73bc28666ebdff628d117f2b231bd497f1c3fc24546cf2b3ff381137 = $this->env->getExtension("native_profiler");
        $__internal_5ec1661a73bc28666ebdff628d117f2b231bd497f1c3fc24546cf2b3ff381137->enter($__internal_5ec1661a73bc28666ebdff628d117f2b231bd497f1c3fc24546cf2b3ff381137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_5ec1661a73bc28666ebdff628d117f2b231bd497f1c3fc24546cf2b3ff381137->leave($__internal_5ec1661a73bc28666ebdff628d117f2b231bd497f1c3fc24546cf2b3ff381137_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_94c8c657cfd3b2ea55fedc330c40fc09040cdd56c46c565cd40240b3a3c95c59 = $this->env->getExtension("native_profiler");
        $__internal_94c8c657cfd3b2ea55fedc330c40fc09040cdd56c46c565cd40240b3a3c95c59->enter($__internal_94c8c657cfd3b2ea55fedc330c40fc09040cdd56c46c565cd40240b3a3c95c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_94c8c657cfd3b2ea55fedc330c40fc09040cdd56c46c565cd40240b3a3c95c59->leave($__internal_94c8c657cfd3b2ea55fedc330c40fc09040cdd56c46c565cd40240b3a3c95c59_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7ad4e5dc64efe9be8454f2f4e554b552d7069d55fbfb372cd4402c101a28a17 = $this->env->getExtension("native_profiler");
        $__internal_a7ad4e5dc64efe9be8454f2f4e554b552d7069d55fbfb372cd4402c101a28a17->enter($__internal_a7ad4e5dc64efe9be8454f2f4e554b552d7069d55fbfb372cd4402c101a28a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "        ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
    ";
        
        $__internal_a7ad4e5dc64efe9be8454f2f4e554b552d7069d55fbfb372cd4402c101a28a17->leave($__internal_a7ad4e5dc64efe9be8454f2f4e554b552d7069d55fbfb372cd4402c101a28a17_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block content %}*/
/*     {% block fos_user_content %}*/
/*         {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/*     {% endblock fos_user_content %}*/
/* {% endblock %}*/
/* */
