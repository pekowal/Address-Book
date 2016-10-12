<?php

/* AddressBookBundle:Email:deleteEmail.html.twig */
class __TwigTemplate_798cfad29bccd7dd2e36fc7c02ccdf25d2b17f3c778c188eef33ebb1130e5278 extends Twig_Template
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
        $__internal_89419941fb0537f83b61cfb95fea10cfb45e001b62fa248241e79f6672ea47ba = $this->env->getExtension("native_profiler");
        $__internal_89419941fb0537f83b61cfb95fea10cfb45e001b62fa248241e79f6672ea47ba->enter($__internal_89419941fb0537f83b61cfb95fea10cfb45e001b62fa248241e79f6672ea47ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Email:deleteEmail.html.twig"));

        // line 1
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")));
        
        $__internal_89419941fb0537f83b61cfb95fea10cfb45e001b62fa248241e79f6672ea47ba->leave($__internal_89419941fb0537f83b61cfb95fea10cfb45e001b62fa248241e79f6672ea47ba_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Email:deleteEmail.html.twig";
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
/* {{ dump(email) }}*/
