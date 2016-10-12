<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1aa9b3d355d09b2a4c4d93da24371dfc4b21633500671dbb86ee588fb628c2a2 extends Twig_Template
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
        $__internal_7944675604d921854590da96ac8ad4318bdfbfc9fb03ac6564a5863cf9074640 = $this->env->getExtension("native_profiler");
        $__internal_7944675604d921854590da96ac8ad4318bdfbfc9fb03ac6564a5863cf9074640->enter($__internal_7944675604d921854590da96ac8ad4318bdfbfc9fb03ac6564a5863cf9074640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7944675604d921854590da96ac8ad4318bdfbfc9fb03ac6564a5863cf9074640->leave($__internal_7944675604d921854590da96ac8ad4318bdfbfc9fb03ac6564a5863cf9074640_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
