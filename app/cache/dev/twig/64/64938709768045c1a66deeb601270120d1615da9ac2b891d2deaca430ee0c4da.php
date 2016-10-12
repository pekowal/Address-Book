<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c2ba0a5c81e53b28463efb102b8f6e1d8e649080bb7a2e3d7e35386055d100ae extends Twig_Template
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
        $__internal_43098ca10a0133932343a321735da567804331d02fd6c01d32c00d4242cdbe43 = $this->env->getExtension("native_profiler");
        $__internal_43098ca10a0133932343a321735da567804331d02fd6c01d32c00d4242cdbe43->enter($__internal_43098ca10a0133932343a321735da567804331d02fd6c01d32c00d4242cdbe43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_43098ca10a0133932343a321735da567804331d02fd6c01d32c00d4242cdbe43->leave($__internal_43098ca10a0133932343a321735da567804331d02fd6c01d32c00d4242cdbe43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
