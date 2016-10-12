<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_1adb85da760a4e358a3ee23e2ea7555cad4bdfa5db7bb0016ad0a5c5a3440fdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9554e3afc0cf4e03cdfa9147415a454883651e5d7940df04e831ad40a393a78f = $this->env->getExtension("native_profiler");
        $__internal_9554e3afc0cf4e03cdfa9147415a454883651e5d7940df04e831ad40a393a78f->enter($__internal_9554e3afc0cf4e03cdfa9147415a454883651e5d7940df04e831ad40a393a78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9554e3afc0cf4e03cdfa9147415a454883651e5d7940df04e831ad40a393a78f->leave($__internal_9554e3afc0cf4e03cdfa9147415a454883651e5d7940df04e831ad40a393a78f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_b7097853bfc073f1b3ab1e567fe1ff69bd5f17045f9dd2488956a16502c712bd = $this->env->getExtension("native_profiler");
        $__internal_b7097853bfc073f1b3ab1e567fe1ff69bd5f17045f9dd2488956a16502c712bd->enter($__internal_b7097853bfc073f1b3ab1e567fe1ff69bd5f17045f9dd2488956a16502c712bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_b7097853bfc073f1b3ab1e567fe1ff69bd5f17045f9dd2488956a16502c712bd->leave($__internal_b7097853bfc073f1b3ab1e567fe1ff69bd5f17045f9dd2488956a16502c712bd_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc620e1d52b3a3dc41ca2faead76fa6ab38692be0af3c9a8293300a7a7cca69a = $this->env->getExtension("native_profiler");
        $__internal_dc620e1d52b3a3dc41ca2faead76fa6ab38692be0af3c9a8293300a7a7cca69a->enter($__internal_dc620e1d52b3a3dc41ca2faead76fa6ab38692be0af3c9a8293300a7a7cca69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"form-login\">
                        <div class=\"alert alert-success\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</div>
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_dc620e1d52b3a3dc41ca2faead76fa6ab38692be0af3c9a8293300a7a7cca69a->leave($__internal_dc620e1d52b3a3dc41ca2faead76fa6ab38692be0af3c9a8293300a7a7cca69a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  54 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block content %}*/
/*     {% block fos_user_content %}*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div id="form-login">*/
/*                         <div class="alert alert-success">{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock fos_user_content %}*/
/* {% endblock %}*/
/* */
