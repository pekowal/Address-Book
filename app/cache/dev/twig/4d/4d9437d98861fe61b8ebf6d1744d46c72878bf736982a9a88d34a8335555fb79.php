<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_95c60c8255b9f13379155b3d5a8e86b89770a23328b1443731b9358804ae6294 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e7355a9001710c9673f2f3d284529e1a77152ec4c463b395e43662b5207c34d = $this->env->getExtension("native_profiler");
        $__internal_2e7355a9001710c9673f2f3d284529e1a77152ec4c463b395e43662b5207c34d->enter($__internal_2e7355a9001710c9673f2f3d284529e1a77152ec4c463b395e43662b5207c34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <head>
        <meta charset=\"UTF-8\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/simple-sidebar.css"), "html", null, true);
        echo "\"/>
        <script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </head>

<body id=\"body-login\">

<div>
    ";
        // line 18
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
        echo "</div>
</body>
</html>";
        
        $__internal_2e7355a9001710c9673f2f3d284529e1a77152ec4c463b395e43662b5207c34d->leave($__internal_2e7355a9001710c9673f2f3d284529e1a77152ec4c463b395e43662b5207c34d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1df45c1eaa95aabaf92995cdb4707b6fffbb83546dbf7bad6b6c88b88611db38 = $this->env->getExtension("native_profiler");
        $__internal_1df45c1eaa95aabaf92995cdb4707b6fffbb83546dbf7bad6b6c88b88611db38->enter($__internal_1df45c1eaa95aabaf92995cdb4707b6fffbb83546dbf7bad6b6c88b88611db38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to AddressBook!";
        
        $__internal_1df45c1eaa95aabaf92995cdb4707b6fffbb83546dbf7bad6b6c88b88611db38->leave($__internal_1df45c1eaa95aabaf92995cdb4707b6fffbb83546dbf7bad6b6c88b88611db38_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27a370920ad0f776d7b70bd84ddba87d66cc4ae70745a8c51a40bfdfb2d134c7 = $this->env->getExtension("native_profiler");
        $__internal_27a370920ad0f776d7b70bd84ddba87d66cc4ae70745a8c51a40bfdfb2d134c7->enter($__internal_27a370920ad0f776d7b70bd84ddba87d66cc4ae70745a8c51a40bfdfb2d134c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_27a370920ad0f776d7b70bd84ddba87d66cc4ae70745a8c51a40bfdfb2d134c7->leave($__internal_27a370920ad0f776d7b70bd84ddba87d66cc4ae70745a8c51a40bfdfb2d134c7_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_158d06e7f0e196dd54f17391b6895cfcc2394df16927df38460e6f57fe09fc00 = $this->env->getExtension("native_profiler");
        $__internal_158d06e7f0e196dd54f17391b6895cfcc2394df16927df38460e6f57fe09fc00->enter($__internal_158d06e7f0e196dd54f17391b6895cfcc2394df16927df38460e6f57fe09fc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "
    ";
        
        $__internal_158d06e7f0e196dd54f17391b6895cfcc2394df16927df38460e6f57fe09fc00->leave($__internal_158d06e7f0e196dd54f17391b6895cfcc2394df16927df38460e6f57fe09fc00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 19,  95 => 18,  84 => 7,  72 => 6,  63 => 21,  61 => 18,  52 => 12,  47 => 10,  43 => 9,  38 => 8,  36 => 7,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <head>*/
/*         <meta charset="UTF-8"/>*/
/*         <title>{% block title %}Welcome to AddressBook!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}"/>*/
/*         <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*     </head>*/
/* */
/* <body id="body-login">*/
/* */
/* <div>*/
/*     {% block fos_user_content %}*/
/* */
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* </body>*/
/* </html>*/
