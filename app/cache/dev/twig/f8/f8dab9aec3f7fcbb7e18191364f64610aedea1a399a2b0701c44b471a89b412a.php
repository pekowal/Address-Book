<?php

/* AddressBookBundle:Person:deletePerson.html.twig */
class __TwigTemplate_a86d708d5e50e514c62db5eee8ffcf8860fb744416adebe0440a8a420d4e7ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:deletePerson.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cae5bb832f400d445f0f0ab53fe891291d6ae2ad63dc2099c76521aec0f77720 = $this->env->getExtension("native_profiler");
        $__internal_cae5bb832f400d445f0f0ab53fe891291d6ae2ad63dc2099c76521aec0f77720->enter($__internal_cae5bb832f400d445f0f0ab53fe891291d6ae2ad63dc2099c76521aec0f77720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:deletePerson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cae5bb832f400d445f0f0ab53fe891291d6ae2ad63dc2099c76521aec0f77720->leave($__internal_cae5bb832f400d445f0f0ab53fe891291d6ae2ad63dc2099c76521aec0f77720_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b6fe4b08d78528a43e59bdcb856b16bcc3c99ea440a660ae9ba020945115745 = $this->env->getExtension("native_profiler");
        $__internal_4b6fe4b08d78528a43e59bdcb856b16bcc3c99ea440a660ae9ba020945115745->enter($__internal_4b6fe4b08d78528a43e59bdcb856b16bcc3c99ea440a660ae9ba020945115745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AddressBookBundle:Person:deletePerson";
        
        $__internal_4b6fe4b08d78528a43e59bdcb856b16bcc3c99ea440a660ae9ba020945115745->leave($__internal_4b6fe4b08d78528a43e59bdcb856b16bcc3c99ea440a660ae9ba020945115745_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_267fa2430fdc7f009fa40148747942372d44ddba76afc1bc6b5a54aff2a2268b = $this->env->getExtension("native_profiler");
        $__internal_267fa2430fdc7f009fa40148747942372d44ddba76afc1bc6b5a54aff2a2268b->enter($__internal_267fa2430fdc7f009fa40148747942372d44ddba76afc1bc6b5a54aff2a2268b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Person:deletePerson page</h1>
";
        
        $__internal_267fa2430fdc7f009fa40148747942372d44ddba76afc1bc6b5a54aff2a2268b->leave($__internal_267fa2430fdc7f009fa40148747942372d44ddba76afc1bc6b5a54aff2a2268b_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:deletePerson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AddressBookBundle:Person:deletePerson{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Person:deletePerson page</h1>*/
/* {% endblock %}*/
/* */
