<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_b8c792d457e5d96634062de61425c8dac18d2e08891c3ce50eda6ab29c4e3101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67ee4aab5e504bb8bdbe4a3e8b8983eb21c3fb366cfc536416d659326e157571 = $this->env->getExtension("native_profiler");
        $__internal_67ee4aab5e504bb8bdbe4a3e8b8983eb21c3fb366cfc536416d659326e157571->enter($__internal_67ee4aab5e504bb8bdbe4a3e8b8983eb21c3fb366cfc536416d659326e157571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_67ee4aab5e504bb8bdbe4a3e8b8983eb21c3fb366cfc536416d659326e157571->leave($__internal_67ee4aab5e504bb8bdbe4a3e8b8983eb21c3fb366cfc536416d659326e157571_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
