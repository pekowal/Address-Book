<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a015a21080cae7236f02c866212744365dc25b8a10ded06b3a11270340725ec0 extends Twig_Template
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
        $__internal_5145c28abeffee06f12ad82ffa4bd0f7245475d397909c18bec37fd27ed77b71 = $this->env->getExtension("native_profiler");
        $__internal_5145c28abeffee06f12ad82ffa4bd0f7245475d397909c18bec37fd27ed77b71->enter($__internal_5145c28abeffee06f12ad82ffa4bd0f7245475d397909c18bec37fd27ed77b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5145c28abeffee06f12ad82ffa4bd0f7245475d397909c18bec37fd27ed77b71->leave($__internal_5145c28abeffee06f12ad82ffa4bd0f7245475d397909c18bec37fd27ed77b71_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
