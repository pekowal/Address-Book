<?php

/* AddressBookBundle:Squad:deleteGroup.html.twig */
class __TwigTemplate_d5e42d7c9c08133032ec6451ab6e3a93fc9af884255dd07e2fc17c5157e8e11c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Squad:deleteGroup.html.twig", 1);
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
        $__internal_410681a9a28430161108df637094a27470a22fbe738cad2885f4f77d093ca62d = $this->env->getExtension("native_profiler");
        $__internal_410681a9a28430161108df637094a27470a22fbe738cad2885f4f77d093ca62d->enter($__internal_410681a9a28430161108df637094a27470a22fbe738cad2885f4f77d093ca62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Squad:deleteGroup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_410681a9a28430161108df637094a27470a22fbe738cad2885f4f77d093ca62d->leave($__internal_410681a9a28430161108df637094a27470a22fbe738cad2885f4f77d093ca62d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5094a544344a568e14c8ecee48feeadadd3d0e961a84d663ed01abf93da8ef08 = $this->env->getExtension("native_profiler");
        $__internal_5094a544344a568e14c8ecee48feeadadd3d0e961a84d663ed01abf93da8ef08->enter($__internal_5094a544344a568e14c8ecee48feeadadd3d0e961a84d663ed01abf93da8ef08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Usuń Grupę:";
        
        $__internal_5094a544344a568e14c8ecee48feeadadd3d0e961a84d663ed01abf93da8ef08->leave($__internal_5094a544344a568e14c8ecee48feeadadd3d0e961a84d663ed01abf93da8ef08_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_68f2aaa98fd5918f7a5c04e09b85e2b80bb0639392cd22e11e5dd084ba328fa4 = $this->env->getExtension("native_profiler");
        $__internal_68f2aaa98fd5918f7a5c04e09b85e2b80bb0639392cd22e11e5dd084ba328fa4->enter($__internal_68f2aaa98fd5918f7a5c04e09b85e2b80bb0639392cd22e11e5dd084ba328fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_68f2aaa98fd5918f7a5c04e09b85e2b80bb0639392cd22e11e5dd084ba328fa4->leave($__internal_68f2aaa98fd5918f7a5c04e09b85e2b80bb0639392cd22e11e5dd084ba328fa4_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_c33c774fe9b2cda5878fc0c604fc5ac937aab7e03594ffc08e11871db63c442d = $this->env->getExtension("native_profiler");
        $__internal_c33c774fe9b2cda5878fc0c604fc5ac937aab7e03594ffc08e11871db63c442d->enter($__internal_c33c774fe9b2cda5878fc0c604fc5ac937aab7e03594ffc08e11871db63c442d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
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
        
        $__internal_c33c774fe9b2cda5878fc0c604fc5ac937aab7e03594ffc08e11871db63c442d->leave($__internal_c33c774fe9b2cda5878fc0c604fc5ac937aab7e03594ffc08e11871db63c442d_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Squad:deleteGroup.html.twig";
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
/* {% block title %}Usuń Grupę:{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/*     {% block content %}*/
/*         {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         {{ form_end(form) }}*/
/*     {% endblock %}*/
/* */
