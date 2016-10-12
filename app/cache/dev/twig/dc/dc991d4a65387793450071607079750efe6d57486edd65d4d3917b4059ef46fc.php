<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_7c3da56a46417e431b789c48f71b49f4c5cca5f288055ed977c895e33ab5c673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3fb59ee3c453ab178eba36928db09fc5d22f796f677eb8e7351b89059b4ed07 = $this->env->getExtension("native_profiler");
        $__internal_c3fb59ee3c453ab178eba36928db09fc5d22f796f677eb8e7351b89059b4ed07->enter($__internal_c3fb59ee3c453ab178eba36928db09fc5d22f796f677eb8e7351b89059b4ed07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_c3fb59ee3c453ab178eba36928db09fc5d22f796f677eb8e7351b89059b4ed07->leave($__internal_c3fb59ee3c453ab178eba36928db09fc5d22f796f677eb8e7351b89059b4ed07_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b19abf46cabe3a1d08bff1611497cbdd29cd137bfe572033176078543cb8d91e = $this->env->getExtension("native_profiler");
        $__internal_b19abf46cabe3a1d08bff1611497cbdd29cd137bfe572033176078543cb8d91e->enter($__internal_b19abf46cabe3a1d08bff1611497cbdd29cd137bfe572033176078543cb8d91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_b19abf46cabe3a1d08bff1611497cbdd29cd137bfe572033176078543cb8d91e->leave($__internal_b19abf46cabe3a1d08bff1611497cbdd29cd137bfe572033176078543cb8d91e_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f06693078379a0f2738106eee4ae7cebbbdcc7a546683a3d0e46c5d3d62ea9e = $this->env->getExtension("native_profiler");
        $__internal_2f06693078379a0f2738106eee4ae7cebbbdcc7a546683a3d0e46c5d3d62ea9e->enter($__internal_2f06693078379a0f2738106eee4ae7cebbbdcc7a546683a3d0e46c5d3d62ea9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div>
                <button class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>Edytuj użytkownika</button>
            </div>
            ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    ";
        
        $__internal_2f06693078379a0f2738106eee4ae7cebbbdcc7a546683a3d0e46c5d3d62ea9e->leave($__internal_2f06693078379a0f2738106eee4ae7cebbbdcc7a546683a3d0e46c5d3d62ea9e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  69 => 11,  64 => 9,  59 => 8,  53 => 7,  45 => 4,  39 => 3,  32 => 7,  29 => 6,  27 => 3,  24 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* */
/*     {% block fos_user_content %}*/
/*             {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*             {{ form_widget(form) }}*/
/*             <div>*/
/*                 <button class="btn btn-success" type="submit" value="{{ 'profile.edit.submit'|trans }}"/>Edytuj użytkownika</button>*/
/*             </div>*/
/*             {{ form_end(form) }}*/
/* */
/*     {% endblock fos_user_content %}*/
