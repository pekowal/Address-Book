<?php

/* AddressBookBundle:Person:deletePerson.html.twig */
class __TwigTemplate_eb0df51e6947a93510e03baab3098d25aaea79e83c01dbf792cffbaa709e46c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:deletePerson.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "AddressBookBundle:Person:deletePerson";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Person:deletePerson page</h1>
";
    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:deletePerson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AddressBookBundle:Person:deletePerson{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Person:deletePerson page</h1>*/
/* {% endblock %}*/
/* */
