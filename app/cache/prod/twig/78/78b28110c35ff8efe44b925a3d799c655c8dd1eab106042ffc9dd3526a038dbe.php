<?php

/* AddressBookBundle:Person:index.html.twig */
class __TwigTemplate_0611ffbce6bbf3c72c118b50a0eb447368ffff366268904ed56940ec541558fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "AddressBookBundle:Person:index";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "


";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            <br>
            <br>

            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th>Imię:</th>
                    <th>Nazwisko:</th>
                    <th>Edycja:</th>
                </tr>
                </thead>
                <tbody>

                ";
        // line 29
        if (array_key_exists("persons", $context)) {
            // line 30
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) ? $context["persons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 31
                echo "                        <tr>
                            <th>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
                echo "</th>
                            <th>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "surname", array()), "html", null, true);
                echo "</th>
                            <th><a href=\"/person/show/";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
                echo "\">
                                    <button class=\"btn btn-success\">Edytuj</button>
                                </a></th>
                        </tr>
                        ";
                // line 39
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                ";
        } else {
            // line 41
            echo "                    <tr>
                        <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "name", array()), "html", null, true);
            echo "</th>
                        <th>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "surname", array()), "html", null, true);
            echo "</th>
                        <th><a href=\"/person/show/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "id", array()), "html", null, true);
            echo "\">
                                <button class=\"btn btn-success\">Edytuj</button>
                            </a></th>
                    </tr>
                    ";
            // line 49
            echo "
                ";
        }
        // line 51
        echo "                </tbody>
            </table>
        ";
    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 51,  129 => 49,  122 => 44,  118 => 43,  114 => 42,  111 => 41,  108 => 40,  102 => 39,  95 => 34,  91 => 33,  87 => 32,  84 => 31,  79 => 30,  77 => 29,  60 => 15,  56 => 14,  51 => 13,  48 => 12,  39 => 8,  36 => 7,  30 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* {% block title %}AddressBookBundle:Person:index{% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* */
/* */
/* {% endblock %}*/
/*         {% block content %}*/
/*             {{ form_start(form) }}*/
/*             {{ form_widget(form) }}*/
/*             {{ form_end(form) }}*/
/*             <br>*/
/*             <br>*/
/* */
/*             <table class="table table-hover">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Imię:</th>*/
/*                     <th>Nazwisko:</th>*/
/*                     <th>Edycja:</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/*                 {% if persons is defined %}*/
/*                     {% for person in persons %}*/
/*                         <tr>*/
/*                             <th>{{ person.name }}</th>*/
/*                             <th>{{ person.surname }}</th>*/
/*                             <th><a href="/person/show/{{ person.id }}">*/
/*                                     <button class="btn btn-success">Edytuj</button>*/
/*                                 </a></th>*/
/*                         </tr>*/
/*                         {#<img src="/Uploads/{{ person.photo }}" height="200" width="200"><br>#}*/
/*                     {% endfor %}*/
/*                 {% else %}*/
/*                     <tr>*/
/*                         <th>{{ person.name }}</th>*/
/*                         <th>{{ person.surname }}</th>*/
/*                         <th><a href="/person/show/{{ person.id }}">*/
/*                                 <button class="btn btn-success">Edytuj</button>*/
/*                             </a></th>*/
/*                     </tr>*/
/*                     {#<img src="/Uploads/{{ person.photo }}" height="200" width="200"><br>#}*/
/* */
/*                 {% endif %}*/
/*                 </tbody>*/
/*             </table>*/
/*         {% endblock %}*/
