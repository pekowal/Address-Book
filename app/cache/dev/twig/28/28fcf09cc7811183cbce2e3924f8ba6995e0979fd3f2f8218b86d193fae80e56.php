<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_6556b0e02831fec9dce02472b357c8a4afd6cb373900edeb78a899d303142fc4 extends Twig_Template
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
        $__internal_2bc5a9a77100878dddb70adbdb6acd41fd94cd8b15461a98b99bcbbfddd075a2 = $this->env->getExtension("native_profiler");
        $__internal_2bc5a9a77100878dddb70adbdb6acd41fd94cd8b15461a98b99bcbbfddd075a2->enter($__internal_2bc5a9a77100878dddb70adbdb6acd41fd94cd8b15461a98b99bcbbfddd075a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2bc5a9a77100878dddb70adbdb6acd41fd94cd8b15461a98b99bcbbfddd075a2->leave($__internal_2bc5a9a77100878dddb70adbdb6acd41fd94cd8b15461a98b99bcbbfddd075a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
