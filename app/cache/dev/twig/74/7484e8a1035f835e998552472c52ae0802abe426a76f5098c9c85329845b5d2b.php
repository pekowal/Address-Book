<?php

/* FOSUserBundle:Squad:addGroup.html.twig */
class __TwigTemplate_77b746e4b917631ba4a1feea08dff0adbd7c352076c4a56b4c8a2c45b7891b4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Squad:addGroup.html.twig", 1);
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
        $__internal_02eb054087fb47466f30019b6b448bbc39eab01feeb6fdc433c04af7d2aa08c4 = $this->env->getExtension("native_profiler");
        $__internal_02eb054087fb47466f30019b6b448bbc39eab01feeb6fdc433c04af7d2aa08c4->enter($__internal_02eb054087fb47466f30019b6b448bbc39eab01feeb6fdc433c04af7d2aa08c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Squad:addGroup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02eb054087fb47466f30019b6b448bbc39eab01feeb6fdc433c04af7d2aa08c4->leave($__internal_02eb054087fb47466f30019b6b448bbc39eab01feeb6fdc433c04af7d2aa08c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2410c5b555a92d6e2e011e8372c4aa033855b5778a3fa9c44c24217bc2b4a43f = $this->env->getExtension("native_profiler");
        $__internal_2410c5b555a92d6e2e011e8372c4aa033855b5778a3fa9c44c24217bc2b4a43f->enter($__internal_2410c5b555a92d6e2e011e8372c4aa033855b5778a3fa9c44c24217bc2b4a43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dodaj Grupę:";
        
        $__internal_2410c5b555a92d6e2e011e8372c4aa033855b5778a3fa9c44c24217bc2b4a43f->leave($__internal_2410c5b555a92d6e2e011e8372c4aa033855b5778a3fa9c44c24217bc2b4a43f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1183bee649325f11815d85e636b6b1d5c9c7107206332503fcaec05bb035ca7 = $this->env->getExtension("native_profiler");
        $__internal_f1183bee649325f11815d85e636b6b1d5c9c7107206332503fcaec05bb035ca7->enter($__internal_f1183bee649325f11815d85e636b6b1d5c9c7107206332503fcaec05bb035ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_f1183bee649325f11815d85e636b6b1d5c9c7107206332503fcaec05bb035ca7->leave($__internal_f1183bee649325f11815d85e636b6b1d5c9c7107206332503fcaec05bb035ca7_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_41d3f58acaf042edb5a2c5c4e80bef1eb106c019bfcfc2346e4bf1abdc87b564 = $this->env->getExtension("native_profiler");
        $__internal_41d3f58acaf042edb5a2c5c4e80bef1eb106c019bfcfc2346e4bf1abdc87b564->enter($__internal_41d3f58acaf042edb5a2c5c4e80bef1eb106c019bfcfc2346e4bf1abdc87b564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
        ";
        // line 11
        if (array_key_exists("error", $context)) {
            // line 12
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
        ";
        }
        // line 14
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        
        $__internal_41d3f58acaf042edb5a2c5c4e80bef1eb106c019bfcfc2346e4bf1abdc87b564->leave($__internal_41d3f58acaf042edb5a2c5c4e80bef1eb106c019bfcfc2346e4bf1abdc87b564_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Squad:addGroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  86 => 15,  81 => 14,  75 => 12,  73 => 11,  70 => 10,  64 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Dodaj Grupę:{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/*     {% block content %}*/
/* */
/*         {% if error is defined %}*/
/*             <div class="alert alert-danger">{{ error }}</div>*/
/*         {% endif %}*/
/*         {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         {{ form_end(form) }}*/
/*     {% endblock %}*/
/* */
