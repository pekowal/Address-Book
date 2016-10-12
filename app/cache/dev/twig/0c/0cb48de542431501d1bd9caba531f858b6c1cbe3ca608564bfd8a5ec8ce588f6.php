<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_50b77990aae668e31fb7705e698fb8cc44076928772b47d65527ac58c9610603 extends Twig_Template
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
        $__internal_bbe563ac7c4cdf379c899bc17832ad51b292a722cf8b547cb6ec26184716c625 = $this->env->getExtension("native_profiler");
        $__internal_bbe563ac7c4cdf379c899bc17832ad51b292a722cf8b547cb6ec26184716c625->enter($__internal_bbe563ac7c4cdf379c899bc17832ad51b292a722cf8b547cb6ec26184716c625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_bbe563ac7c4cdf379c899bc17832ad51b292a722cf8b547cb6ec26184716c625->leave($__internal_bbe563ac7c4cdf379c899bc17832ad51b292a722cf8b547cb6ec26184716c625_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
