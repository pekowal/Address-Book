<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_875d74e89c05dca4aee9ca29de20b901cc9f998347b2ea6adaf356dc4b6bd7e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator:final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0d84d5c0501b90757c00fbfbc3ed8c6d34a7df24b1f2006b9a6a2b8067223db = $this->env->getExtension("native_profiler");
        $__internal_f0d84d5c0501b90757c00fbfbc3ed8c6d34a7df24b1f2006b9a6a2b8067223db->enter($__internal_f0d84d5c0501b90757c00fbfbc3ed8c6d34a7df24b1f2006b9a6a2b8067223db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0d84d5c0501b90757c00fbfbc3ed8c6d34a7df24b1f2006b9a6a2b8067223db->leave($__internal_f0d84d5c0501b90757c00fbfbc3ed8c6d34a7df24b1f2006b9a6a2b8067223db_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_8db79ad692848f6e3cd48e38447ad64e7e40ef69c22dee596f29c2db48118d07 = $this->env->getExtension("native_profiler");
        $__internal_8db79ad692848f6e3cd48e38447ad64e7e40ef69c22dee596f29c2db48118d07->enter($__internal_8db79ad692848f6e3cd48e38447ad64e7e40ef69c22dee596f29c2db48118d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_8db79ad692848f6e3cd48e38447ad64e7e40ef69c22dee596f29c2db48118d07->leave($__internal_8db79ad692848f6e3cd48e38447ad64e7e40ef69c22dee596f29c2db48118d07_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_06eac0ec7261c185f8ecf9f58f53d01fa39e4cee31e98249740f3fda50b1c1b1 = $this->env->getExtension("native_profiler");
        $__internal_06eac0ec7261c185f8ecf9f58f53d01fa39e4cee31e98249740f3fda50b1c1b1->enter($__internal_06eac0ec7261c185f8ecf9f58f53d01fa39e4cee31e98249740f3fda50b1c1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_06eac0ec7261c185f8ecf9f58f53d01fa39e4cee31e98249740f3fda50b1c1b1->leave($__internal_06eac0ec7261c185f8ecf9f58f53d01fa39e4cee31e98249740f3fda50b1c1b1_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SensioDistributionBundle::Configurator/layout.html.twig" %}*/
/* */
/* {% block content_class %}config_done{% endblock %}*/
/* {% block content %}*/
/*     <div class="step">*/
/*         <h1>Well done!</h1>*/
/*         {% if is_writable %}*/
/*         <h2>Your distribution is configured!</h2>*/
/*         {% else %}*/
/*         <h2 class="configure-error">Your distribution is almost configured but...</h2>*/
/*         {% endif %}*/
/*         <h3>*/
/*             <span>*/
/*                 {% if is_writable %}*/
/*                     Your parameters.yml file has been overwritten with these parameters (in <em>{{ yml_path }}</em>):*/
/*                 {% else %}*/
/*                     Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>{{ yml_path }}</em>:*/
/*                 {% endif %}*/
/*             </span>*/
/*         </h3>*/
/* */
/*         <textarea class="symfony-configuration">{{ parameters }}</textarea>*/
/* */
/*         {% if welcome_url %}*/
/*             <ul>*/
/*                 <li><a href="{{ welcome_url }}">Go to the Welcome page</a></li>*/
/*             </ul>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
