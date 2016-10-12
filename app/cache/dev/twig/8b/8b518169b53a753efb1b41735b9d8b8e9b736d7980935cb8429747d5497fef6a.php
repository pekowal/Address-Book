<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_368737871c37f0d7145abc835e6838c0574ed78a74def422fadc374dd29b79f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3ca0b15d849ecc191c61a132ca09467ffb9363d812aa269c18f0a5570e5fb452 = $this->env->getExtension("native_profiler");
        $__internal_3ca0b15d849ecc191c61a132ca09467ffb9363d812aa269c18f0a5570e5fb452->enter($__internal_3ca0b15d849ecc191c61a132ca09467ffb9363d812aa269c18f0a5570e5fb452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ca0b15d849ecc191c61a132ca09467ffb9363d812aa269c18f0a5570e5fb452->leave($__internal_3ca0b15d849ecc191c61a132ca09467ffb9363d812aa269c18f0a5570e5fb452_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f4cb066843ddce49d0aec78efed044c568d3f0bfe2b11db5a87b299f409f15c = $this->env->getExtension("native_profiler");
        $__internal_2f4cb066843ddce49d0aec78efed044c568d3f0bfe2b11db5a87b299f409f15c->enter($__internal_2f4cb066843ddce49d0aec78efed044c568d3f0bfe2b11db5a87b299f409f15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f4cb066843ddce49d0aec78efed044c568d3f0bfe2b11db5a87b299f409f15c->leave($__internal_2f4cb066843ddce49d0aec78efed044c568d3f0bfe2b11db5a87b299f409f15c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7ef4c00db0e0cde8797f6f7c6b586e191b8afc83fd546c46ce0c10c0d486fef = $this->env->getExtension("native_profiler");
        $__internal_d7ef4c00db0e0cde8797f6f7c6b586e191b8afc83fd546c46ce0c10c0d486fef->enter($__internal_d7ef4c00db0e0cde8797f6f7c6b586e191b8afc83fd546c46ce0c10c0d486fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d7ef4c00db0e0cde8797f6f7c6b586e191b8afc83fd546c46ce0c10c0d486fef->leave($__internal_d7ef4c00db0e0cde8797f6f7c6b586e191b8afc83fd546c46ce0c10c0d486fef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_36d9274fb098219833e03888b1cc78058e99eb9c8df9a702a1da15ae9947bc19 = $this->env->getExtension("native_profiler");
        $__internal_36d9274fb098219833e03888b1cc78058e99eb9c8df9a702a1da15ae9947bc19->enter($__internal_36d9274fb098219833e03888b1cc78058e99eb9c8df9a702a1da15ae9947bc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_36d9274fb098219833e03888b1cc78058e99eb9c8df9a702a1da15ae9947bc19->leave($__internal_36d9274fb098219833e03888b1cc78058e99eb9c8df9a702a1da15ae9947bc19_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
