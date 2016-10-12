<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_def6be415eac0871125bc64efceea6bab3b89f5464e56e5f82a940f75dda2ac1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1333114fa9f9f6ef9cd96240184c1a67326a13a6291b786ec3a4e34c37b292b7 = $this->env->getExtension("native_profiler");
        $__internal_1333114fa9f9f6ef9cd96240184c1a67326a13a6291b786ec3a4e34c37b292b7->enter($__internal_1333114fa9f9f6ef9cd96240184c1a67326a13a6291b786ec3a4e34c37b292b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "


";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_1333114fa9f9f6ef9cd96240184c1a67326a13a6291b786ec3a4e34c37b292b7->leave($__internal_1333114fa9f9f6ef9cd96240184c1a67326a13a6291b786ec3a4e34c37b292b7_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_b8578f7d13d7efdff202b144523bc2050fbb0bab461b93e65f84d823e54091d1 = $this->env->getExtension("native_profiler");
        $__internal_b8578f7d13d7efdff202b144523bc2050fbb0bab461b93e65f84d823e54091d1->enter($__internal_b8578f7d13d7efdff202b144523bc2050fbb0bab461b93e65f84d823e54091d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <div class=\"login-div\">
        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>
            <div class=\"form-group\">
                <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\"
                       value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"password\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\"
                       required=\"required\"/>
            </div>
            <div class=\"form-group\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>
            <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"
                    class=\"btn btn-primary\">Zaloguj
            </button>
            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Przypomnij hasło</a>
        </form>
        <br>
        <p>Nie masz konta? <a class=\"btn btn-success\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Zarejestruj się</a></p>
    </div>
";
        
        $__internal_b8578f7d13d7efdff202b144523bc2050fbb0bab461b93e65f84d823e54091d1->leave($__internal_b8578f7d13d7efdff202b144523bc2050fbb0bab461b93e65f84d823e54091d1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 34,  95 => 31,  89 => 28,  84 => 26,  75 => 20,  69 => 17,  64 => 15,  59 => 13,  55 => 12,  51 => 10,  39 => 9,  34 => 6,  28 => 4,  26 => 3,  23 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="login-div">*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/*             <div class="form-group">*/
/*                 <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                 <input type="text" class="form-control" id="username" name="_username"*/
/*                        value="{{ last_username }}" required="required"/>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                 <input type="password" class="form-control" id="password" name="_password"*/
/*                        required="required"/>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*                 <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*             </div>*/
/*             <button type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}"*/
/*                     class="btn btn-primary">Zaloguj*/
/*             </button>*/
/*             <a href="{{ path('fos_user_resetting_request') }}">Przypomnij hasło</a>*/
/*         </form>*/
/*         <br>*/
/*         <p>Nie masz konta? <a class="btn btn-success" href="{{ path('fos_user_registration_register') }}">Zarejestruj się</a></p>*/
/*     </div>*/
/* {% endblock %}*/
