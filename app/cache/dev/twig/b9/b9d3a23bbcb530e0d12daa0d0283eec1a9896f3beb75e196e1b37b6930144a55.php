<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_869bf82f5fb32b26ce0a9235ebffd3b93f10ad0a7217b78724328a32e20b571c extends Twig_Template
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
        $__internal_62476dd7b744b0c642f4cb9622df00e93b6112857f2bb08400efcb1cea819aea = $this->env->getExtension("native_profiler");
        $__internal_62476dd7b744b0c642f4cb9622df00e93b6112857f2bb08400efcb1cea819aea->enter($__internal_62476dd7b744b0c642f4cb9622df00e93b6112857f2bb08400efcb1cea819aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_62476dd7b744b0c642f4cb9622df00e93b6112857f2bb08400efcb1cea819aea->leave($__internal_62476dd7b744b0c642f4cb9622df00e93b6112857f2bb08400efcb1cea819aea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
