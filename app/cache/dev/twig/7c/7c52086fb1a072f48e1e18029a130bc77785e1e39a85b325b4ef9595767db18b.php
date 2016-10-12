<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0c375a8b5b7a6283140042205f4c398e3a135d191922c77fc37e135a0718ebb5 extends Twig_Template
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
        $__internal_fcc8a8b11eb6d99e2b9f8ca57cea776edd754ec025ffebaf5cdb86d1c706cc99 = $this->env->getExtension("native_profiler");
        $__internal_fcc8a8b11eb6d99e2b9f8ca57cea776edd754ec025ffebaf5cdb86d1c706cc99->enter($__internal_fcc8a8b11eb6d99e2b9f8ca57cea776edd754ec025ffebaf5cdb86d1c706cc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fcc8a8b11eb6d99e2b9f8ca57cea776edd754ec025ffebaf5cdb86d1c706cc99->leave($__internal_fcc8a8b11eb6d99e2b9f8ca57cea776edd754ec025ffebaf5cdb86d1c706cc99_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
