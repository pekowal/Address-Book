<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c0573932709c6679d3700c5ce16ca19afb216bca1730561f78843e595120e59e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d56010e6c2bd345ec333a19ae04c8f891bc4e3727fbde9df3a7d8ab3409c8e9f = $this->env->getExtension("native_profiler");
        $__internal_d56010e6c2bd345ec333a19ae04c8f891bc4e3727fbde9df3a7d8ab3409c8e9f->enter($__internal_d56010e6c2bd345ec333a19ae04c8f891bc4e3727fbde9df3a7d8ab3409c8e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d56010e6c2bd345ec333a19ae04c8f891bc4e3727fbde9df3a7d8ab3409c8e9f->leave($__internal_d56010e6c2bd345ec333a19ae04c8f891bc4e3727fbde9df3a7d8ab3409c8e9f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ece9a0764a1fa5be0a4a934e2b44c3a6a2aae5bc07b13a7af6aec63a8ae434f = $this->env->getExtension("native_profiler");
        $__internal_7ece9a0764a1fa5be0a4a934e2b44c3a6a2aae5bc07b13a7af6aec63a8ae434f->enter($__internal_7ece9a0764a1fa5be0a4a934e2b44c3a6a2aae5bc07b13a7af6aec63a8ae434f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7ece9a0764a1fa5be0a4a934e2b44c3a6a2aae5bc07b13a7af6aec63a8ae434f->leave($__internal_7ece9a0764a1fa5be0a4a934e2b44c3a6a2aae5bc07b13a7af6aec63a8ae434f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b04b75c556f720ea2b6813a00a0b84997786593b07f3f28b5f96011ea8c6c6b = $this->env->getExtension("native_profiler");
        $__internal_0b04b75c556f720ea2b6813a00a0b84997786593b07f3f28b5f96011ea8c6c6b->enter($__internal_0b04b75c556f720ea2b6813a00a0b84997786593b07f3f28b5f96011ea8c6c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0b04b75c556f720ea2b6813a00a0b84997786593b07f3f28b5f96011ea8c6c6b->leave($__internal_0b04b75c556f720ea2b6813a00a0b84997786593b07f3f28b5f96011ea8c6c6b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
