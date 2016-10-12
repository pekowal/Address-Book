<?php

/* FOSUserBundle:Person:showPerson.html.twig */
class __TwigTemplate_2b0a69051e93986b08f3475569b212ba332d8c8b9892068e14e988b716aac285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Person:showPerson.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a48b2abe47a65760b8e71db25e5ff9a97712c61008cb13b157e46dd336c7093 = $this->env->getExtension("native_profiler");
        $__internal_6a48b2abe47a65760b8e71db25e5ff9a97712c61008cb13b157e46dd336c7093->enter($__internal_6a48b2abe47a65760b8e71db25e5ff9a97712c61008cb13b157e46dd336c7093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Person:showPerson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a48b2abe47a65760b8e71db25e5ff9a97712c61008cb13b157e46dd336c7093->leave($__internal_6a48b2abe47a65760b8e71db25e5ff9a97712c61008cb13b157e46dd336c7093_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fafc3d34460e3cc25a67ab64fd6fcda4ffd5169b60393e25a8dc5f0bf464afc5 = $this->env->getExtension("native_profiler");
        $__internal_fafc3d34460e3cc25a67ab64fd6fcda4ffd5169b60393e25a8dc5f0bf464afc5->enter($__internal_fafc3d34460e3cc25a67ab64fd6fcda4ffd5169b60393e25a8dc5f0bf464afc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AddressBookBundle:Person:showPerson";
        
        $__internal_fafc3d34460e3cc25a67ab64fd6fcda4ffd5169b60393e25a8dc5f0bf464afc5->leave($__internal_fafc3d34460e3cc25a67ab64fd6fcda4ffd5169b60393e25a8dc5f0bf464afc5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_50db4103183dee1617febb4a37e49d6e5a8d7baa0b69698c6d13b267f514ba78 = $this->env->getExtension("native_profiler");
        $__internal_50db4103183dee1617febb4a37e49d6e5a8d7baa0b69698c6d13b267f514ba78->enter($__internal_50db4103183dee1617febb4a37e49d6e5a8d7baa0b69698c6d13b267f514ba78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_50db4103183dee1617febb4a37e49d6e5a8d7baa0b69698c6d13b267f514ba78->leave($__internal_50db4103183dee1617febb4a37e49d6e5a8d7baa0b69698c6d13b267f514ba78_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8db63d76aabb948d161cc0aeb224c75827a523fb652788a6f5b4a04b599bd49f = $this->env->getExtension("native_profiler");
        $__internal_8db63d76aabb948d161cc0aeb224c75827a523fb652788a6f5b4a04b599bd49f->enter($__internal_8db63d76aabb948d161cc0aeb224c75827a523fb652788a6f5b4a04b599bd49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "
";
        
        $__internal_8db63d76aabb948d161cc0aeb224c75827a523fb652788a6f5b4a04b599bd49f->leave($__internal_8db63d76aabb948d161cc0aeb224c75827a523fb652788a6f5b4a04b599bd49f_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_4d1855898a920de174ea23f09e9436f269caa7ff6f5e35214283ee28d56c9cc7 = $this->env->getExtension("native_profiler");
        $__internal_4d1855898a920de174ea23f09e9436f269caa7ff6f5e35214283ee28d56c9cc7->enter($__internal_4d1855898a920de174ea23f09e9436f269caa7ff6f5e35214283ee28d56c9cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "        ";
        if ($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "photo", array())) {
            // line 14
            echo "            <div id=\"photoDiv\">
                <img class=\"img-responsive img\"
                     src=\"/Uploads/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "photo", array()), "html", null, true);
            echo "\" height=\"200\"
                     width=\"200\">
                <br>
            </div>
        ";
        }
        // line 21
        echo "
        <div class=\"panel panel-default text-left\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo "</h3>
                <div class=\"editPanel text-right\">
                    <a title=\"Edytuj\" href=\"/person/";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "/modify\"><span style=\"color: black;\"
                                                                                  class=\"glyphicon glyphicon-edit\"></span></a>
                    <a title=\"Usuń\" href=\"/person/";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "/delete\"><span style=\"color: red;\"
                                                                                class=\"glyphicon glyphicon-minus\"></span></a>
                </div>
            </div>
            <div class=\"panel-body\">
                ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "description", array()), "html", null, true);
        echo "
            </div>
            <div class=\"panel-heading text-left\">
                <h3 class=\"panel-title\">Grupy</h3>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["squads"]) ? $context["squads"] : $this->getContext($context, "squads")));
        foreach ($context['_seq'] as $context["_key"] => $context["squad"]) {
            // line 38
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["squad"], "name", array()), "html", null, true);
            echo "</span><a title=\"Usuń\"
                                                    href=\"/squad/";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id", array()), "html", null, true);
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
        // line 43
        echo "                <div class=\"editPanel text-right\"><a title=\"Dodaj\" href=\"/squad/addToPerson/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "\"><span
                                style=\"color: forestgreen;\"
                                class=\"glyphicon glyphicon-plus\"></span></a>
                </div>
            </div>
            <div class=\"panel-heading text-left\">
                <h3 class=\"panel-title\">Adres</h3>
                <div class=\"editPanel text-right\"><a title=\"Dodaj\" href=\"/addAddress/";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "\"><span
                                style=\"color: forestgreen;\"
                                class=\"glyphicon glyphicon-plus\"></span></a>
                </div>
            </div>
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["address"]);
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 56
            echo "                <div class=\"panel-body text-left\">
                    <span>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "street", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "houseNumber", array()), "html", null, true);
            echo "
                        ";
            // line 58
            if ($this->getAttribute($context["address"], "localNumber", array())) {
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "localNumber", array()), "html", null, true);
            }
            echo "</span>
                    <div class=\"editPanel text-right\">
                        <a title=\"Usuń\" href=\"/deleteAddress/";
            // line 60
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
        // line 65
        echo "            <div class=\"panel-heading text-left\">
                <h3 class=\"panel-title\">Email</h3>
                <div class=\"editPanel text-right\"><a title=\"Dodaj\" href=\"/addEmail/";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "\"><span
                                style=\"color: forestgreen;\"
                                class=\"glyphicon glyphicon-plus\"></span></a>
                </div>
            </div>
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["email"]);
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 73
            echo "                <div class=\"panel-body text-left\">
                    <span>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "type", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "email", array()), "html", null, true);
            echo "</span>
                    <div class=\"editPanel text-right\">
                        <a title=\"Usuń\" href=\"/deleteEmail/";
            // line 76
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
        // line 81
        echo "            <div class=\"panel-heading text-left\">
                <h3 class=\"panel-title\">Numer telefonu</h3>
                <div style=\"float: right\" class=\"editPanel text-right\"><a title=\"Dodaj\"
                                                                          href=\"/addPhone/";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "\"><span
                                style=\"color: forestgreen;\"
                                class=\"glyphicon glyphicon-plus\"></span></a>
                </div>
            </div>
            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["phone"]);
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 90
            echo "                <div class=\"panel-body text-left\">
                    <span>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "type", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
            echo "</span>
                    <div class=\"editPanel text-right\">
                        <a title=\"Usuń\" href=\"/deletePhone/";
            // line 93
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
        // line 98
        echo "

        </div>
    ";
        
        $__internal_4d1855898a920de174ea23f09e9436f269caa7ff6f5e35214283ee28d56c9cc7->leave($__internal_4d1855898a920de174ea23f09e9436f269caa7ff6f5e35214283ee28d56c9cc7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Person:showPerson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 98,  270 => 93,  263 => 91,  260 => 90,  256 => 89,  248 => 84,  243 => 81,  232 => 76,  225 => 74,  222 => 73,  218 => 72,  210 => 67,  206 => 65,  195 => 60,  187 => 58,  179 => 57,  176 => 56,  172 => 55,  164 => 50,  153 => 43,  141 => 39,  136 => 38,  132 => 37,  125 => 33,  117 => 28,  112 => 26,  105 => 24,  100 => 21,  92 => 16,  88 => 14,  85 => 13,  79 => 12,  71 => 9,  65 => 8,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}AddressBookBundle:Person:showPerson{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* */
/* {% endblock %}*/
/* */
/*     {% block content %}*/
/*         {% if person.photo %}*/
/*             <div id="photoDiv">*/
/*                 <img class="img-responsive img"*/
/*                      src="/Uploads/{{ person.photo }}" height="200"*/
/*                      width="200">*/
/*                 <br>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="panel panel-default text-left">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">{{ person.name }} {{ person.surname }}</h3>*/
/*                 <div class="editPanel text-right">*/
/*                     <a title="Edytuj" href="/person/{{ person.id }}/modify"><span style="color: black;"*/
/*                                                                                   class="glyphicon glyphicon-edit"></span></a>*/
/*                     <a title="Usuń" href="/person/{{ person.id }}/delete"><span style="color: red;"*/
/*                                                                                 class="glyphicon glyphicon-minus"></span></a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 {{ person.description }}*/
/*             </div>*/
/*             <div class="panel-heading text-left">*/
/*                 <h3 class="panel-title">Grupy</h3>*/
/*                 {% for squad in squads %}*/
/*                     <span>{{ squad.name }}</span><a title="Usuń"*/
/*                                                     href="/squad/{{ person.id }}/{{ squad.id }}/delete"><span*/
/*                             style="color: red;"*/
/*                             class="glyphicon glyphicon-minus"></span></a>*/
/*                 {% endfor %}*/
/*                 <div class="editPanel text-right"><a title="Dodaj" href="/squad/addToPerson/{{ person.id }}"><span*/
/*                                 style="color: forestgreen;"*/
/*                                 class="glyphicon glyphicon-plus"></span></a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="panel-heading text-left">*/
/*                 <h3 class="panel-title">Adres</h3>*/
/*                 <div class="editPanel text-right"><a title="Dodaj" href="/addAddress/{{ person.id }}"><span*/
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
/*                 <div class="editPanel text-right"><a title="Dodaj" href="/addEmail/{{ person.id }}"><span*/
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
/*                 <div style="float: right" class="editPanel text-right"><a title="Dodaj"*/
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
