<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_33485720c3949bc81eba903a12bd708bfcab94ddc400db586ae81e9bb03f2b8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbd969cb04d5906f9781f09055d88b0551a405ca6903416facb3984e811d5f10 = $this->env->getExtension("native_profiler");
        $__internal_bbd969cb04d5906f9781f09055d88b0551a405ca6903416facb3984e811d5f10->enter($__internal_bbd969cb04d5906f9781f09055d88b0551a405ca6903416facb3984e811d5f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bbd969cb04d5906f9781f09055d88b0551a405ca6903416facb3984e811d5f10->leave($__internal_bbd969cb04d5906f9781f09055d88b0551a405ca6903416facb3984e811d5f10_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
