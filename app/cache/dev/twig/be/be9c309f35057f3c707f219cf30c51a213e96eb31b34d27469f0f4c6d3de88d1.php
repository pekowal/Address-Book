<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_2ed2e505ab2afa7442aebd297624bb0d291dbe0ed76174452736d4ee1bebac4c extends Twig_Template
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
        $__internal_feda4e6840c6c96f33b9f44949fab416e01c184f5769786166a8d2b40407730d = $this->env->getExtension("native_profiler");
        $__internal_feda4e6840c6c96f33b9f44949fab416e01c184f5769786166a8d2b40407730d->enter($__internal_feda4e6840c6c96f33b9f44949fab416e01c184f5769786166a8d2b40407730d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_feda4e6840c6c96f33b9f44949fab416e01c184f5769786166a8d2b40407730d->leave($__internal_feda4e6840c6c96f33b9f44949fab416e01c184f5769786166a8d2b40407730d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0b90b9497ca64d4a1f5c8d7755efbfc07e437ddbeba7ac76066845c0d0591311 = $this->env->getExtension("native_profiler");
        $__internal_0b90b9497ca64d4a1f5c8d7755efbfc07e437ddbeba7ac76066845c0d0591311->enter($__internal_0b90b9497ca64d4a1f5c8d7755efbfc07e437ddbeba7ac76066845c0d0591311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_0b90b9497ca64d4a1f5c8d7755efbfc07e437ddbeba7ac76066845c0d0591311->leave($__internal_0b90b9497ca64d4a1f5c8d7755efbfc07e437ddbeba7ac76066845c0d0591311_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f8f250456a8aad0f44fd8c252b3fac9eb93a613a75cb6a7b964f7e0eddbb569f = $this->env->getExtension("native_profiler");
        $__internal_f8f250456a8aad0f44fd8c252b3fac9eb93a613a75cb6a7b964f7e0eddbb569f->enter($__internal_f8f250456a8aad0f44fd8c252b3fac9eb93a613a75cb6a7b964f7e0eddbb569f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f8f250456a8aad0f44fd8c252b3fac9eb93a613a75cb6a7b964f7e0eddbb569f->leave($__internal_f8f250456a8aad0f44fd8c252b3fac9eb93a613a75cb6a7b964f7e0eddbb569f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5808982c249abdc8177b8b4297e45a808ace4a776ee413696d87060a17f9d82a = $this->env->getExtension("native_profiler");
        $__internal_5808982c249abdc8177b8b4297e45a808ace4a776ee413696d87060a17f9d82a->enter($__internal_5808982c249abdc8177b8b4297e45a808ace4a776ee413696d87060a17f9d82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5808982c249abdc8177b8b4297e45a808ace4a776ee413696d87060a17f9d82a->leave($__internal_5808982c249abdc8177b8b4297e45a808ace4a776ee413696d87060a17f9d82a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
