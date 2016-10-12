<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9162c34785d2f068d5ec0e4658e15ab72be2f70cb9ae674abca0808564fdcb6a extends Twig_Template
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
        $__internal_a75f3996d9c7721aea20eb392e0ed00b1c26b83285c6cc9a1211055a8509fe39 = $this->env->getExtension("native_profiler");
        $__internal_a75f3996d9c7721aea20eb392e0ed00b1c26b83285c6cc9a1211055a8509fe39->enter($__internal_a75f3996d9c7721aea20eb392e0ed00b1c26b83285c6cc9a1211055a8509fe39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a75f3996d9c7721aea20eb392e0ed00b1c26b83285c6cc9a1211055a8509fe39->leave($__internal_a75f3996d9c7721aea20eb392e0ed00b1c26b83285c6cc9a1211055a8509fe39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
