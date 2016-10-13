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
        $__internal_983f36c1a6f746e4a4887eeeef1ca2ddec9c315d87e6c67e77f5a2139d0c86ef = $this->env->getExtension("native_profiler");
        $__internal_983f36c1a6f746e4a4887eeeef1ca2ddec9c315d87e6c67e77f5a2139d0c86ef->enter($__internal_983f36c1a6f746e4a4887eeeef1ca2ddec9c315d87e6c67e77f5a2139d0c86ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Person:editPerson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_983f36c1a6f746e4a4887eeeef1ca2ddec9c315d87e6c67e77f5a2139d0c86ef->leave($__internal_983f36c1a6f746e4a4887eeeef1ca2ddec9c315d87e6c67e77f5a2139d0c86ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f006006f0ea362e89624eaa8cb76bd093eac883258f635854bdc7aff9f9f8e1 = $this->env->getExtension("native_profiler");
        $__internal_3f006006f0ea362e89624eaa8cb76bd093eac883258f635854bdc7aff9f9f8e1->enter($__internal_3f006006f0ea362e89624eaa8cb76bd093eac883258f635854bdc7aff9f9f8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AddressBookBundle:Person:editPerson";
        
        $__internal_3f006006f0ea362e89624eaa8cb76bd093eac883258f635854bdc7aff9f9f8e1->leave($__internal_3f006006f0ea362e89624eaa8cb76bd093eac883258f635854bdc7aff9f9f8e1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9ae2821c04629f5b72ecd888f05e8c0aa2eb3a5ed5754534d0e55caf44a4b3a = $this->env->getExtension("native_profiler");
        $__internal_e9ae2821c04629f5b72ecd888f05e8c0aa2eb3a5ed5754534d0e55caf44a4b3a->enter($__internal_e9ae2821c04629f5b72ecd888f05e8c0aa2eb3a5ed5754534d0e55caf44a4b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_e9ae2821c04629f5b72ecd888f05e8c0aa2eb3a5ed5754534d0e55caf44a4b3a->leave($__internal_e9ae2821c04629f5b72ecd888f05e8c0aa2eb3a5ed5754534d0e55caf44a4b3a_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_7e419272df8ae87b138a87f667269541485c5bbe0a21b1b05860e19b77ced266 = $this->env->getExtension("native_profiler");
        $__internal_7e419272df8ae87b138a87f667269541485c5bbe0a21b1b05860e19b77ced266->enter($__internal_7e419272df8ae87b138a87f667269541485c5bbe0a21b1b05860e19b77ced266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_7e419272df8ae87b138a87f667269541485c5bbe0a21b1b05860e19b77ced266->leave($__internal_7e419272df8ae87b138a87f667269541485c5bbe0a21b1b05860e19b77ced266_prof);

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
