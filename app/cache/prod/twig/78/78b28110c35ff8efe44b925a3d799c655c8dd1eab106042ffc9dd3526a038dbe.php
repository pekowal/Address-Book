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
        echo "        <div class=\"row\">
            <h2>Wyszukiwarka:</h2>
            <form class=\"form-inline\">
                <div class=\"form-group\">
                    <label>Imię</label>
                    <input class=\"form-control\" type=\"text\" name=\"name\" placeholder=\"Podaj imię\"></br>
                </div>
                <div class=\"form-group\">
                    <label>Nazwisko:</label>
                    <input class=\"form-control\" type=\"text\" name=\"surname\" placeholder=\"Podaj nazwisko\">
                </div>
                <button class=\"btn btn-success\" type=\"submit\">Szukaj</button>
            </form>
        </div>
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
        // line 40
        if (array_key_exists("persons", $context)) {
            // line 41
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) ? $context["persons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 42
                echo "                    <tr>
                        <th>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
                echo "</th>
                        <th>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "surname", array()), "html", null, true);
                echo "</th>
                        <th><a href=\"showPerson/";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
                echo "\">
                                <button class=\"btn btn-success\">Edytuj</button>
                            </a></th>
                    </tr>
                    ";
                // line 50
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            ";
        } else {
            // line 52
            echo "                <tr>
                    <th>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "name", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "surname", array()), "html", null, true);
            echo "</th>
                    <th><a href=\"showPerson/";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "id", array()), "html", null, true);
            echo "\">
                            <button class=\"btn btn-success\">Edytuj</button>
                        </a></th>
                </tr>
                ";
            // line 60
            echo "
            ";
        }
        // line 62
        echo "            </tbody>
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
        return array (  136 => 62,  132 => 60,  125 => 55,  121 => 54,  117 => 53,  114 => 52,  111 => 51,  105 => 50,  98 => 45,  94 => 44,  90 => 43,  87 => 42,  82 => 41,  80 => 40,  51 => 13,  48 => 12,  39 => 8,  36 => 7,  30 => 4,  11 => 1,);
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
/*     {% block content %}*/
/*         <div class="row">*/
/*             <h2>Wyszukiwarka:</h2>*/
/*             <form class="form-inline">*/
/*                 <div class="form-group">*/
/*                     <label>Imię</label>*/
/*                     <input class="form-control" type="text" name="name" placeholder="Podaj imię"></br>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label>Nazwisko:</label>*/
/*                     <input class="form-control" type="text" name="surname" placeholder="Podaj nazwisko">*/
/*                 </div>*/
/*                 <button class="btn btn-success" type="submit">Szukaj</button>*/
/*             </form>*/
/*         </div>*/
/*         <br>*/
/*         <br>*/
/* */
/*         <table class="table table-hover">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Imię:</th>*/
/*                 <th>Nazwisko:</th>*/
/*                 <th>Edycja:</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% if persons is defined %}*/
/*                 {% for person in persons %}*/
/*                     <tr>*/
/*                         <th>{{ person.name }}</th>*/
/*                         <th>{{ person.surname }}</th>*/
/*                         <th><a href="showPerson/{{ person.id }}">*/
/*                                 <button class="btn btn-success">Edytuj</button>*/
/*                             </a></th>*/
/*                     </tr>*/
/*                     {#<img src="/Uploads/{{ person.photo }}" height="200" width="200"><br>#}*/
/*                 {% endfor %}*/
/*             {% else %}*/
/*                 <tr>*/
/*                     <th>{{ person.name }}</th>*/
/*                     <th>{{ person.surname }}</th>*/
/*                     <th><a href="showPerson/{{ person.id }}">*/
/*                             <button class="btn btn-success">Edytuj</button>*/
/*                         </a></th>*/
/*                 </tr>*/
/*                 {#<img src="/Uploads/{{ person.photo }}" height="200" width="200"><br>#}*/
/* */
/*             {% endif %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endblock %}*/
