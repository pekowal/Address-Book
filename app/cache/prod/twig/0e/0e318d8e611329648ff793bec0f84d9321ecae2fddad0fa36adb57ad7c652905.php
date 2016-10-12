<?php

/* AddressBookBundle:Person:showPerson.html.twig */
class __TwigTemplate_f6e324d47b018c29bed65291148bd9e5f91dc6598045df77459792592702ff92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:showPerson.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "AddressBookBundle:Person:showPerson";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        if ($this->getAttribute((isset($context["person"]) ? $context["person"] : null), "photo", array())) {
            // line 11
            echo "            <img class=\"img-responsive img\" src=\"/Uploads/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "photo", array()), "html", null, true);
            echo "\" height=\"200\" width=\"200\"><br>
        ";
        }
        // line 13
        echo "
        <div class=\"panel panel-default text-left\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "surname", array()), "html", null, true);
        echo "</h3>
                <div class=\"editPanel text-right\">
                    <a title=\"Edytuj\" href=\"/";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "id", array()), "html", null, true);
        echo "/modify\"><span style=\"color: black;\"
                                                                           class=\"glyphicon glyphicon-edit\"></span></a>
                    <a title=\"Usuń\" href=\"/";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "id", array()), "html", null, true);
        echo "/delete\"><span style=\"color: red;\"
                                                                         class=\"glyphicon glyphicon-minus\"></span></a>
                </div>
            </div>
            <div class=\"panel-body\">
                ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "description", array()), "html", null, true);
        echo "
            </div>
            <div class=\"panel-heading text-left\">
                <h3 class=\"panel-title\">Grupy</h3>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["squads"]) ? $context["squads"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["squad"]) {
            // line 30
            echo "                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["squad"], "name", array()), "html", null, true);
            echo "</span><a title=\"Usuń\" href=\"/squad/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "id", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["squad"], "id", array()), "html", null, true);
            echo "/delete\"><span
                            style=\"color: red;\"
                            class=\"glyphicon glyphicon-minus\"></span></a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['squad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </div>
            <div class=\"panel-heading text-left\">
                <h3 class=\"panel-title\">Adres</h3>
                <div class=\"editPanel text-right\"><a title=\"Edytuj\" href=\"/addAddress/";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "id", array()), "html", null, true);
        echo "\"><span
                                style=\"color: forestgreen;\"
                                class=\"glyphicon glyphicon-plus\"></span></a>
                </div>
            </div>
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["address"]);
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 43
            echo "                <div class=\"panel-body text-left\">
                    <span>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "street", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "houseNumber", array()), "html", null, true);
            echo "
                        ";
            // line 45
            if ($this->getAttribute($context["address"], "localNumber", array())) {
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "localNumber", array()), "html", null, true);
            }
            echo "</span>
                    <div class=\"editPanel text-right\">
                        <a title=\"Usuń\" href=\"/deleteAddress/";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "id", array()), "html", null, true);
            echo "\"><span style=\"color: red\"
                                                                                     class=\"glyphicon glyphicon-minus\"></span></a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            <div class=\"panel-heading text-left\">
                <h3 class=\"panel-title\">Email</h3>
                <div class=\"editPanel text-right\"><a title=\"Edytuj\" href=\"/addEmail/";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "id", array()), "html", null, true);
        echo "\"><span
                                style=\"color: forestgreen;\"
                                class=\"glyphicon glyphicon-plus\"></span></a>
                </div>
            </div>
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["email"]);
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 60
            echo "                <div class=\"panel-body text-left\">
                    <span>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "type", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "email", array()), "html", null, true);
            echo "</span>
                    <div class=\"editPanel text-right\">
                        <a title=\"Usuń\" href=\"/deleteEmail/";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "id", array()), "html", null, true);
            echo "\"><span style=\"color: red\"
                                                                                 class=\"glyphicon glyphicon-minus\"></span></a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            <div class=\"panel-heading text-left\">
                <h3 class=\"panel-title\">Numer telefonu</h3>
                <div style=\"float: right\" class=\"editPanel text-right\"><a title=\"Edytuj\"
                                                                          href=\"/addPhone/";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "id", array()), "html", null, true);
        echo "\"><span
                                style=\"color: forestgreen;\"
                                class=\"glyphicon glyphicon-plus\"></span></a>
                </div>
            </div>
            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["phone"]);
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 77
            echo "                <div class=\"panel-body text-left\">
                    <span>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "type", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
            echo "</span>
                    <div class=\"editPanel text-right\">
                        <a title=\"Usuń\" href=\"/deletePhone/";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "id", array()), "html", null, true);
            echo "\"><span style=\"color: red\"
                                                                                 class=\"glyphicon glyphicon-minus\"></span></a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "

        </div>
    ";
    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:showPerson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 85,  220 => 80,  213 => 78,  210 => 77,  206 => 76,  198 => 71,  193 => 68,  182 => 63,  175 => 61,  172 => 60,  168 => 59,  160 => 54,  156 => 52,  145 => 47,  137 => 45,  129 => 44,  126 => 43,  122 => 42,  114 => 37,  109 => 34,  94 => 30,  90 => 29,  83 => 25,  75 => 20,  70 => 18,  63 => 16,  58 => 13,  52 => 11,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AddressBookBundle:Person:showPerson{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/*     {% block content %}*/
/*         {% if person.photo %}*/
/*             <img class="img-responsive img" src="/Uploads/{{ person.photo }}" height="200" width="200"><br>*/
/*         {% endif %}*/
/* */
/*         <div class="panel panel-default text-left">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">{{ person.name }} {{ person.surname }}</h3>*/
/*                 <div class="editPanel text-right">*/
/*                     <a title="Edytuj" href="/{{ person.id }}/modify"><span style="color: black;"*/
/*                                                                            class="glyphicon glyphicon-edit"></span></a>*/
/*                     <a title="Usuń" href="/{{ person.id }}/delete"><span style="color: red;"*/
/*                                                                          class="glyphicon glyphicon-minus"></span></a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 {{ person.description }}*/
/*             </div>*/
/*             <div class="panel-heading text-left">*/
/*                 <h3 class="panel-title">Grupy</h3>*/
/*                 {% for squad in squads %}*/
/*                 <span>{{ squad.name }}</span><a title="Usuń" href="/squad/{{ person.id }}/{{ squad.id }}/delete"><span*/
/*                             style="color: red;"*/
/*                             class="glyphicon glyphicon-minus"></span></a>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="panel-heading text-left">*/
/*                 <h3 class="panel-title">Adres</h3>*/
/*                 <div class="editPanel text-right"><a title="Edytuj" href="/addAddress/{{ person.id }}"><span*/
/*                                 style="color: forestgreen;"*/
/*                                 class="glyphicon glyphicon-plus"></span></a>*/
/*                 </div>*/
/*             </div>*/
/*             {% for address in address %}*/
/*                 <div class="panel-body text-left">*/
/*                     <span>{{ address.city }}, {{ address.street }} {{ address.houseNumber }}*/
/*                         {% if address.localNumber %}/{{ address.localNumber }}{% endif %}</span>*/
/*                     <div class="editPanel text-right">*/
/*                         <a title="Usuń" href="/deleteAddress/{{ address.id }}"><span style="color: red"*/
/*                                                                                      class="glyphicon glyphicon-minus"></span></a>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*             <div class="panel-heading text-left">*/
/*                 <h3 class="panel-title">Email</h3>*/
/*                 <div class="editPanel text-right"><a title="Edytuj" href="/addEmail/{{ person.id }}"><span*/
/*                                 style="color: forestgreen;"*/
/*                                 class="glyphicon glyphicon-plus"></span></a>*/
/*                 </div>*/
/*             </div>*/
/*             {% for email in email %}*/
/*                 <div class="panel-body text-left">*/
/*                     <span>{{ email.type }}: {{ email.email }}</span>*/
/*                     <div class="editPanel text-right">*/
/*                         <a title="Usuń" href="/deleteEmail/{{ email.id }}"><span style="color: red"*/
/*                                                                                  class="glyphicon glyphicon-minus"></span></a>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*             <div class="panel-heading text-left">*/
/*                 <h3 class="panel-title">Numer telefonu</h3>*/
/*                 <div style="float: right" class="editPanel text-right"><a title="Edytuj"*/
/*                                                                           href="/addPhone/{{ person.id }}"><span*/
/*                                 style="color: forestgreen;"*/
/*                                 class="glyphicon glyphicon-plus"></span></a>*/
/*                 </div>*/
/*             </div>*/
/*             {% for phone in phone %}*/
/*                 <div class="panel-body text-left">*/
/*                     <span>{{ phone.type }}: {{ phone.number }}</span>*/
/*                     <div class="editPanel text-right">*/
/*                         <a title="Usuń" href="/deletePhone/{{ phone.id }}"><span style="color: red"*/
/*                                                                                  class="glyphicon glyphicon-minus"></span></a>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/* */
/*         </div>*/
/*     {% endblock %}*/
