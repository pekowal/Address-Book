<?php

/* FOSUserBundle:Person:newPerson.html.twig */
class __TwigTemplate_7740ef2a7ce34f7c7b14d4662a7b6fdc79c23ad98b8f35b64f919b21bda41e4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Person:newPerson.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaa77c91edfbfabf12bf4729d98faccfcb1f1af25e37c494eb0dce853d1f26e5 = $this->env->getExtension("native_profiler");
        $__internal_eaa77c91edfbfabf12bf4729d98faccfcb1f1af25e37c494eb0dce853d1f26e5->enter($__internal_eaa77c91edfbfabf12bf4729d98faccfcb1f1af25e37c494eb0dce853d1f26e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Person:newPerson.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaa77c91edfbfabf12bf4729d98faccfcb1f1af25e37c494eb0dce853d1f26e5->leave($__internal_eaa77c91edfbfabf12bf4729d98faccfcb1f1af25e37c494eb0dce853d1f26e5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d11e3e9de03be026612380696fcae3b38517afc9f46dc79de93c043fc8ae6e0 = $this->env->getExtension("native_profiler");
        $__internal_9d11e3e9de03be026612380696fcae3b38517afc9f46dc79de93c043fc8ae6e0->enter($__internal_9d11e3e9de03be026612380696fcae3b38517afc9f46dc79de93c043fc8ae6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AddressBookBundle:Person:newPerson";
        
        $__internal_9d11e3e9de03be026612380696fcae3b38517afc9f46dc79de93c043fc8ae6e0->leave($__internal_9d11e3e9de03be026612380696fcae3b38517afc9f46dc79de93c043fc8ae6e0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8912e2ee7714400c4af7b474b01d54b615b04e92f7c37be44a38ec7476508328 = $this->env->getExtension("native_profiler");
        $__internal_8912e2ee7714400c4af7b474b01d54b615b04e92f7c37be44a38ec7476508328->enter($__internal_8912e2ee7714400c4af7b474b01d54b615b04e92f7c37be44a38ec7476508328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

";
        
        $__internal_8912e2ee7714400c4af7b474b01d54b615b04e92f7c37be44a38ec7476508328->leave($__internal_8912e2ee7714400c4af7b474b01d54b615b04e92f7c37be44a38ec7476508328_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ee3b42293c62862aa781600b18a154b586c711a35b247416bed444ce63f0ce8c = $this->env->getExtension("native_profiler");
        $__internal_ee3b42293c62862aa781600b18a154b586c711a35b247416bed444ce63f0ce8c->enter($__internal_ee3b42293c62862aa781600b18a154b586c711a35b247416bed444ce63f0ce8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "        ";
        if (array_key_exists("validError", $context)) {
            // line 13
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["validError"]) ? $context["validError"] : $this->getContext($context, "validError")), "html", null, true);
            echo "</div>
        ";
        }
        // line 15
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        
        $__internal_ee3b42293c62862aa781600b18a154b586c711a35b247416bed444ce63f0ce8c->leave($__internal_ee3b42293c62862aa781600b18a154b586c711a35b247416bed444ce63f0ce8c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Person:newPerson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 17,  88 => 16,  83 => 15,  77 => 13,  74 => 12,  68 => 11,  57 => 7,  51 => 6,  39 => 4,  32 => 1,  30 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block title %}AddressBookBundle:Person:newPerson{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/*     {% block content %}*/
/*         {% if validError is defined %}*/
/*             <div class="alert alert-danger">{{ validError }}</div>*/
/*         {% endif %}*/
/*         {{ form_start(form, {'attr':{'novalidate': 'novalidate'}}) }}*/
/*         {{ form_widget(form) }}*/
/*         {{ form_end(form) }}*/
/*     {% endblock %}*/
