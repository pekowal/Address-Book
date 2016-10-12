<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_dfaa2ef054e81d617473479d8b243360ca7debc5fef40c7de1121e082962e00b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed6ec96b4cf52bdadfc8ae4f2f203353e2c1dd68befd731ee858f5ef87581cdf = $this->env->getExtension("native_profiler");
        $__internal_ed6ec96b4cf52bdadfc8ae4f2f203353e2c1dd68befd731ee858f5ef87581cdf->enter($__internal_ed6ec96b4cf52bdadfc8ae4f2f203353e2c1dd68befd731ee858f5ef87581cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed6ec96b4cf52bdadfc8ae4f2f203353e2c1dd68befd731ee858f5ef87581cdf->leave($__internal_ed6ec96b4cf52bdadfc8ae4f2f203353e2c1dd68befd731ee858f5ef87581cdf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c605a849d862a98f611d0ae48374b00520ad5be532dfd1fdca7a5c4f0bf39019 = $this->env->getExtension("native_profiler");
        $__internal_c605a849d862a98f611d0ae48374b00520ad5be532dfd1fdca7a5c4f0bf39019->enter($__internal_c605a849d862a98f611d0ae48374b00520ad5be532dfd1fdca7a5c4f0bf39019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c605a849d862a98f611d0ae48374b00520ad5be532dfd1fdca7a5c4f0bf39019->leave($__internal_c605a849d862a98f611d0ae48374b00520ad5be532dfd1fdca7a5c4f0bf39019_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8ea3db7aef0fd601b013bbdc0749bf242f2bcaa4832219ed589ce3916371992 = $this->env->getExtension("native_profiler");
        $__internal_a8ea3db7aef0fd601b013bbdc0749bf242f2bcaa4832219ed589ce3916371992->enter($__internal_a8ea3db7aef0fd601b013bbdc0749bf242f2bcaa4832219ed589ce3916371992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_a8ea3db7aef0fd601b013bbdc0749bf242f2bcaa4832219ed589ce3916371992->leave($__internal_a8ea3db7aef0fd601b013bbdc0749bf242f2bcaa4832219ed589ce3916371992_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f0beb0d7b256e74b26554f5017222ffe0a0216557c68c011e7d03ae9cd717fc = $this->env->getExtension("native_profiler");
        $__internal_8f0beb0d7b256e74b26554f5017222ffe0a0216557c68c011e7d03ae9cd717fc->enter($__internal_8f0beb0d7b256e74b26554f5017222ffe0a0216557c68c011e7d03ae9cd717fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_8f0beb0d7b256e74b26554f5017222ffe0a0216557c68c011e7d03ae9cd717fc->leave($__internal_8f0beb0d7b256e74b26554f5017222ffe0a0216557c68c011e7d03ae9cd717fc_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_02a6dfb9fc0fc23769e9379c9012e3df29e915d16425e8abfb4011eb675adac9 = $this->env->getExtension("native_profiler");
        $__internal_02a6dfb9fc0fc23769e9379c9012e3df29e915d16425e8abfb4011eb675adac9->enter($__internal_02a6dfb9fc0fc23769e9379c9012e3df29e915d16425e8abfb4011eb675adac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_02a6dfb9fc0fc23769e9379c9012e3df29e915d16425e8abfb4011eb675adac9->leave($__internal_02a6dfb9fc0fc23769e9379c9012e3df29e915d16425e8abfb4011eb675adac9_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
