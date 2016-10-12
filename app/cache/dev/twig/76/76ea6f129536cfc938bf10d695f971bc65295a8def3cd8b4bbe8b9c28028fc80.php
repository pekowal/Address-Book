<?php

/* AddressBookBundle:Phone:addPhone.html.twig */
class __TwigTemplate_d2781498daea5fb098a80dadf9f43470a140db025e4f33344c8e21d359f05e5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Phone:addPhone.html.twig", 1);
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
        $__internal_3c1f5196263a9818cffc35aa33d26b2816d86eb896d7fce6d16940fcca3b3513 = $this->env->getExtension("native_profiler");
        $__internal_3c1f5196263a9818cffc35aa33d26b2816d86eb896d7fce6d16940fcca3b3513->enter($__internal_3c1f5196263a9818cffc35aa33d26b2816d86eb896d7fce6d16940fcca3b3513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Phone:addPhone.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c1f5196263a9818cffc35aa33d26b2816d86eb896d7fce6d16940fcca3b3513->leave($__internal_3c1f5196263a9818cffc35aa33d26b2816d86eb896d7fce6d16940fcca3b3513_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_48e9e910d0ca3b2c6884a29bcb673199dfe2fac62850c33e9c9502757bb7ea83 = $this->env->getExtension("native_profiler");
        $__internal_48e9e910d0ca3b2c6884a29bcb673199dfe2fac62850c33e9c9502757bb7ea83->enter($__internal_48e9e910d0ca3b2c6884a29bcb673199dfe2fac62850c33e9c9502757bb7ea83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AddressBookBundle:Person:editEmail";
        
        $__internal_48e9e910d0ca3b2c6884a29bcb673199dfe2fac62850c33e9c9502757bb7ea83->leave($__internal_48e9e910d0ca3b2c6884a29bcb673199dfe2fac62850c33e9c9502757bb7ea83_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9a9de624bdf4e0212a80ec0b234b71744515b800b581afe3f97367391fc66df = $this->env->getExtension("native_profiler");
        $__internal_e9a9de624bdf4e0212a80ec0b234b71744515b800b581afe3f97367391fc66df->enter($__internal_e9a9de624bdf4e0212a80ec0b234b71744515b800b581afe3f97367391fc66df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_e9a9de624bdf4e0212a80ec0b234b71744515b800b581afe3f97367391fc66df->leave($__internal_e9a9de624bdf4e0212a80ec0b234b71744515b800b581afe3f97367391fc66df_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_7b808ee0accf8a5621d88c7d684bf1fa493243eabfe987a2cf0a911b8ea02d10 = $this->env->getExtension("native_profiler");
        $__internal_7b808ee0accf8a5621d88c7d684bf1fa493243eabfe987a2cf0a911b8ea02d10->enter($__internal_7b808ee0accf8a5621d88c7d684bf1fa493243eabfe987a2cf0a911b8ea02d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
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
        
        $__internal_7b808ee0accf8a5621d88c7d684bf1fa493243eabfe987a2cf0a911b8ea02d10->leave($__internal_7b808ee0accf8a5621d88c7d684bf1fa493243eabfe987a2cf0a911b8ea02d10_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Phone:addPhone.html.twig";
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
/* {% block title %}AddressBookBundle:Person:editEmail{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/*     {% block content %}*/
/*         {{ form_start(form, {'attr':{'novalidate': 'novalidate'}}) }}*/
/*         {{ form_widget(form) }}*/
/*         {{ form_end(form) }}*/
/*     {% endblock %}*/
/* */
/* */
/* */
