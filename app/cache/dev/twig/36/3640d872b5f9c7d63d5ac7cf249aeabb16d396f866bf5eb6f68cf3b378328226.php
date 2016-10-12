<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_fc206ade6ac8a8b5d811bf83bb3208eee436cfd77a0dc48a1d39f53486383996 extends Twig_Template
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
        $__internal_e5298cb0166bddb5ebb42c6038ca1fd69df27185f2eb603a51115f93b08efc47 = $this->env->getExtension("native_profiler");
        $__internal_e5298cb0166bddb5ebb42c6038ca1fd69df27185f2eb603a51115f93b08efc47->enter($__internal_e5298cb0166bddb5ebb42c6038ca1fd69df27185f2eb603a51115f93b08efc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e5298cb0166bddb5ebb42c6038ca1fd69df27185f2eb603a51115f93b08efc47->leave($__internal_e5298cb0166bddb5ebb42c6038ca1fd69df27185f2eb603a51115f93b08efc47_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
