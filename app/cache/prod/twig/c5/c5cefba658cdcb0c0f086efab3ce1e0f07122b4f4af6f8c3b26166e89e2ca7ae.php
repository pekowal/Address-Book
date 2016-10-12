<?php

/* AddressBookBundle:Person:editPerson.html.twig */
class __TwigTemplate_e9d3a1e28b9d96993780f98266d464f58de3046154e4f652a58404ca178a9d7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:editPerson.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "AddressBookBundle:Person:editPerson";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        ";
        // line 11
        if ((isset($context["photo"]) ? $context["photo"] : null)) {
            // line 12
            echo "            <img class=\"img-responsive img\" src=\"/Uploads/";
            echo twig_escape_filter($this->env, (isset($context["photo"]) ? $context["photo"] : null), "html", null, true);
            echo "\" height=\"200\" width=\"200\"><br>
        ";
        }
        // line 14
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:editPerson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  62 => 14,  56 => 12,  54 => 11,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AddressBookBundle:Person:editPerson{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/*     {% block content %}*/
/*         {{ form_start(form, {'attr':{'novalidate': 'novalidate'}}) }}*/
/*         {% if photo %}*/
/*             <img class="img-responsive img" src="/Uploads/{{ photo }}" height="200" width="200"><br>*/
/*         {% endif %}*/
/*         {{ form_widget(form) }}*/
/*         {{ form_end(form) }}*/
/*     {% endblock %}*/
