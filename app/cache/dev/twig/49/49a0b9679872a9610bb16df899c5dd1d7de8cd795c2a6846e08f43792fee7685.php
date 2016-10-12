<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_35328ae66f308b9928a44be25074c8259dab5f8791805b0d17ec6dab7df6f2a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e93473fd009e8e90373ff44645a78a9a08e4505b8460a17764854c5ec7e7846 = $this->env->getExtension("native_profiler");
        $__internal_4e93473fd009e8e90373ff44645a78a9a08e4505b8460a17764854c5ec7e7846->enter($__internal_4e93473fd009e8e90373ff44645a78a9a08e4505b8460a17764854c5ec7e7846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4e93473fd009e8e90373ff44645a78a9a08e4505b8460a17764854c5ec7e7846->leave($__internal_4e93473fd009e8e90373ff44645a78a9a08e4505b8460a17764854c5ec7e7846_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2d8c3508ab8cba3ec3f453e0a70efd14020945d36e806b727e13abb8dec7a7e1 = $this->env->getExtension("native_profiler");
        $__internal_2d8c3508ab8cba3ec3f453e0a70efd14020945d36e806b727e13abb8dec7a7e1->enter($__internal_2d8c3508ab8cba3ec3f453e0a70efd14020945d36e806b727e13abb8dec7a7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2d8c3508ab8cba3ec3f453e0a70efd14020945d36e806b727e13abb8dec7a7e1->leave($__internal_2d8c3508ab8cba3ec3f453e0a70efd14020945d36e806b727e13abb8dec7a7e1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3c60de6519855b9912b35fbc4e19799c0fb8a7404a2ac7be88dd76b0a81fa002 = $this->env->getExtension("native_profiler");
        $__internal_3c60de6519855b9912b35fbc4e19799c0fb8a7404a2ac7be88dd76b0a81fa002->enter($__internal_3c60de6519855b9912b35fbc4e19799c0fb8a7404a2ac7be88dd76b0a81fa002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3c60de6519855b9912b35fbc4e19799c0fb8a7404a2ac7be88dd76b0a81fa002->leave($__internal_3c60de6519855b9912b35fbc4e19799c0fb8a7404a2ac7be88dd76b0a81fa002_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_000f0949fb36128c14556edee4241b39b85eed68260f77e3d9915a4c1bbbf101 = $this->env->getExtension("native_profiler");
        $__internal_000f0949fb36128c14556edee4241b39b85eed68260f77e3d9915a4c1bbbf101->enter($__internal_000f0949fb36128c14556edee4241b39b85eed68260f77e3d9915a4c1bbbf101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_000f0949fb36128c14556edee4241b39b85eed68260f77e3d9915a4c1bbbf101->leave($__internal_000f0949fb36128c14556edee4241b39b85eed68260f77e3d9915a4c1bbbf101_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
