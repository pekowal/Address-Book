<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_738404cc1eacf353b90a0555c72dd95fe339a9ca0a358c7a51c65abed8447ba1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cee91d186183f31f67b35004f1f759be3104cc1385c7b873fbc08e0e2981e131 = $this->env->getExtension("native_profiler");
        $__internal_cee91d186183f31f67b35004f1f759be3104cc1385c7b873fbc08e0e2981e131->enter($__internal_cee91d186183f31f67b35004f1f759be3104cc1385c7b873fbc08e0e2981e131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cee91d186183f31f67b35004f1f759be3104cc1385c7b873fbc08e0e2981e131->leave($__internal_cee91d186183f31f67b35004f1f759be3104cc1385c7b873fbc08e0e2981e131_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_46c275c25e85d3add5d3a19ecf8ffc2d4fcd1f2dcada472882686e825ff3c1b7 = $this->env->getExtension("native_profiler");
        $__internal_46c275c25e85d3add5d3a19ecf8ffc2d4fcd1f2dcada472882686e825ff3c1b7->enter($__internal_46c275c25e85d3add5d3a19ecf8ffc2d4fcd1f2dcada472882686e825ff3c1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_46c275c25e85d3add5d3a19ecf8ffc2d4fcd1f2dcada472882686e825ff3c1b7->leave($__internal_46c275c25e85d3add5d3a19ecf8ffc2d4fcd1f2dcada472882686e825ff3c1b7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
