<?php

/* FOSUserBundle:Person:editPerson.html.twig */
class __TwigTemplate_28ed8663c92392829b6bc8567fb6ccc5551c2b588ae02eb1d63f96caa6032fe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Person:editPerson.html.twig", 1);
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
        $__internal_750063e570f962bb8f8e2d9951d157534c20d9c513cfd4a74f4cc4d977128ebd = $this->env->getExtension("native_profiler");
        $__internal_750063e570f962bb8f8e2d9951d157534c20d9c513cfd4a74f4cc4d977128ebd->enter($__internal_750063e570f962bb8f8e2d9951d157534c20d9c513cfd4a74f4cc4d977128ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Person:editPerson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_750063e570f962bb8f8e2d9951d157534c20d9c513cfd4a74f4cc4d977128ebd->leave($__internal_750063e570f962bb8f8e2d9951d157534c20d9c513cfd4a74f4cc4d977128ebd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c1537266cb1d0491c23aac82a5d1a7bd24be58872da5d6ec66c80cbe7a10de5 = $this->env->getExtension("native_profiler");
        $__internal_0c1537266cb1d0491c23aac82a5d1a7bd24be58872da5d6ec66c80cbe7a10de5->enter($__internal_0c1537266cb1d0491c23aac82a5d1a7bd24be58872da5d6ec66c80cbe7a10de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AddressBookBundle:Person:editPerson";
        
        $__internal_0c1537266cb1d0491c23aac82a5d1a7bd24be58872da5d6ec66c80cbe7a10de5->leave($__internal_0c1537266cb1d0491c23aac82a5d1a7bd24be58872da5d6ec66c80cbe7a10de5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a66dcc4956acfed33fe63503cff453ad951d0a70ddc3326484cdc78253afee5 = $this->env->getExtension("native_profiler");
        $__internal_2a66dcc4956acfed33fe63503cff453ad951d0a70ddc3326484cdc78253afee5->enter($__internal_2a66dcc4956acfed33fe63503cff453ad951d0a70ddc3326484cdc78253afee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_2a66dcc4956acfed33fe63503cff453ad951d0a70ddc3326484cdc78253afee5->leave($__internal_2a66dcc4956acfed33fe63503cff453ad951d0a70ddc3326484cdc78253afee5_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_6ca56bd5db210bb7a5ac0b7530839adfe391970c58f92b8f1a0556f0c8a824c3 = $this->env->getExtension("native_profiler");
        $__internal_6ca56bd5db210bb7a5ac0b7530839adfe391970c58f92b8f1a0556f0c8a824c3->enter($__internal_6ca56bd5db210bb7a5ac0b7530839adfe391970c58f92b8f1a0556f0c8a824c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        ";
        // line 11
        if ((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo"))) {
            // line 12
            echo "            <img class=\"img-responsive img\" src=\"/Uploads/";
            echo twig_escape_filter($this->env, (isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "html", null, true);
            echo "\" height=\"200\" width=\"200\"><br>
            <button class=\"btn-danger btn\" title=\"Usuń\" href=\"/person/photo/remove/";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">Usuń zdjęcie</button>
            <br>
            <br>
        ";
        }
        // line 17
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        
        $__internal_6ca56bd5db210bb7a5ac0b7530839adfe391970c58f92b8f1a0556f0c8a824c3->leave($__internal_6ca56bd5db210bb7a5ac0b7530839adfe391970c58f92b8f1a0556f0c8a824c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Person:editPerson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 18,  89 => 17,  82 => 13,  77 => 12,  75 => 11,  70 => 10,  64 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/*             <button class="btn-danger btn" title="Usuń" href="/person/photo/remove/{{ id }}">Usuń zdjęcie</button>*/
/*             <br>*/
/*             <br>*/
/*         {% endif %}*/
/*         {{ form_widget(form) }}*/
/*         {{ form_end(form) }}*/
/*     {% endblock %}*/
