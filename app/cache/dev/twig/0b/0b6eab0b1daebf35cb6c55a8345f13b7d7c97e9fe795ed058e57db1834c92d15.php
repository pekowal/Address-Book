<?php

/* AddressBookBundle:Email:addEmail.html.twig */
class __TwigTemplate_c0f282bb911518d0a0b0f58d98d103cf9036e0ae7bd5e9bbe24f2f03041f887a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Email:addEmail.html.twig", 1);
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
        $__internal_2019bb9b33f51f03009a6f09f32ca0213fe8e021cfce06716ea6521355fee1f6 = $this->env->getExtension("native_profiler");
        $__internal_2019bb9b33f51f03009a6f09f32ca0213fe8e021cfce06716ea6521355fee1f6->enter($__internal_2019bb9b33f51f03009a6f09f32ca0213fe8e021cfce06716ea6521355fee1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Email:addEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2019bb9b33f51f03009a6f09f32ca0213fe8e021cfce06716ea6521355fee1f6->leave($__internal_2019bb9b33f51f03009a6f09f32ca0213fe8e021cfce06716ea6521355fee1f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f37e970f5cf19583174aeaeb6616e84ba96fb68ea5ba24f210d098dac905670 = $this->env->getExtension("native_profiler");
        $__internal_4f37e970f5cf19583174aeaeb6616e84ba96fb68ea5ba24f210d098dac905670->enter($__internal_4f37e970f5cf19583174aeaeb6616e84ba96fb68ea5ba24f210d098dac905670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dodaj Email:";
        
        $__internal_4f37e970f5cf19583174aeaeb6616e84ba96fb68ea5ba24f210d098dac905670->leave($__internal_4f37e970f5cf19583174aeaeb6616e84ba96fb68ea5ba24f210d098dac905670_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_928174185cba3d9f37e24aa8d64a938cefe1637353bfa45f67499b1dbeedfeec = $this->env->getExtension("native_profiler");
        $__internal_928174185cba3d9f37e24aa8d64a938cefe1637353bfa45f67499b1dbeedfeec->enter($__internal_928174185cba3d9f37e24aa8d64a938cefe1637353bfa45f67499b1dbeedfeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_928174185cba3d9f37e24aa8d64a938cefe1637353bfa45f67499b1dbeedfeec->leave($__internal_928174185cba3d9f37e24aa8d64a938cefe1637353bfa45f67499b1dbeedfeec_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_c53a504ab869b45ea58edc9f289b98dc64fdf2ada5ad53d9be0add31b5106b37 = $this->env->getExtension("native_profiler");
        $__internal_c53a504ab869b45ea58edc9f289b98dc64fdf2ada5ad53d9be0add31b5106b37->enter($__internal_c53a504ab869b45ea58edc9f289b98dc64fdf2ada5ad53d9be0add31b5106b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        
        $__internal_c53a504ab869b45ea58edc9f289b98dc64fdf2ada5ad53d9be0add31b5106b37->leave($__internal_c53a504ab869b45ea58edc9f289b98dc64fdf2ada5ad53d9be0add31b5106b37_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Email:addEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 12,  75 => 11,  70 => 10,  64 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Dodaj Email:{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/*     {% block content %}*/
/*         {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         {{ form_end(form) }}*/
/*     {% endblock %}*/
