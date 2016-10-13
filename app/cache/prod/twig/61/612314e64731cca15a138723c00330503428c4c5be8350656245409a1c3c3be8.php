<?php

/* AddressBookBundle:Person:newPerson.html.twig */
class __TwigTemplate_8ee21fed37ea121d0a7eb4a2983a4867c939e87cc2c5a2a4d7b0bb29b2cf7b9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:newPerson.html.twig", 1);
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "AddressBookBundle:Person:newPerson";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "        ";
        if (array_key_exists("validError", $context)) {
            // line 13
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["validError"]) ? $context["validError"] : null), "html", null, true);
            echo "</div>
        ";
        }
        // line 15
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:newPerson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  67 => 16,  62 => 15,  56 => 13,  53 => 12,  50 => 11,  42 => 7,  39 => 6,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
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
