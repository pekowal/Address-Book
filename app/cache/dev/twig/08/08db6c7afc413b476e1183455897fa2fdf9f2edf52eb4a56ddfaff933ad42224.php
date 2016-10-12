<?php

/* AddressBookBundle:Default:index.html.twig */
class __TwigTemplate_b952a8955d909f9ad9aafbe8ea4b392d261820be7536c8eed263c97f3bc9ac32 extends Twig_Template
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
        $__internal_03ff6ba82a10a0a78ed2e125cfb63acc43ba2159f1b324a61abd1a21ed4e4382 = $this->env->getExtension("native_profiler");
        $__internal_03ff6ba82a10a0a78ed2e125cfb63acc43ba2159f1b324a61abd1a21ed4e4382->enter($__internal_03ff6ba82a10a0a78ed2e125cfb63acc43ba2159f1b324a61abd1a21ed4e4382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_03ff6ba82a10a0a78ed2e125cfb63acc43ba2159f1b324a61abd1a21ed4e4382->leave($__internal_03ff6ba82a10a0a78ed2e125cfb63acc43ba2159f1b324a61abd1a21ed4e4382_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Default:index.html.twig";
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
/* Hello {{ name }}!*/
/* */
