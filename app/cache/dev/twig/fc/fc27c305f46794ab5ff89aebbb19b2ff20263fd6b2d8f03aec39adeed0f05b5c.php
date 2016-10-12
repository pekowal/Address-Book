<?php

/* FOSUserBundle:Person:index.html.twig */
class __TwigTemplate_92a13f1a977a4092c034a9933592a5e96308b1c28d141af286abb6c98cf215ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Person:index.html.twig", 1);
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
        $__internal_d13c9b7fcfa88a93654e56f2dca64a61d0232a0e2c13c477b99e274f145022e5 = $this->env->getExtension("native_profiler");
        $__internal_d13c9b7fcfa88a93654e56f2dca64a61d0232a0e2c13c477b99e274f145022e5->enter($__internal_d13c9b7fcfa88a93654e56f2dca64a61d0232a0e2c13c477b99e274f145022e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Person:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d13c9b7fcfa88a93654e56f2dca64a61d0232a0e2c13c477b99e274f145022e5->leave($__internal_d13c9b7fcfa88a93654e56f2dca64a61d0232a0e2c13c477b99e274f145022e5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9eb80c2453f8b9c0bdd44b6c4a723e12d4f1f2864ed365b7a291d78a5ab2efa = $this->env->getExtension("native_profiler");
        $__internal_d9eb80c2453f8b9c0bdd44b6c4a723e12d4f1f2864ed365b7a291d78a5ab2efa->enter($__internal_d9eb80c2453f8b9c0bdd44b6c4a723e12d4f1f2864ed365b7a291d78a5ab2efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AddressBookBundle:Person:index";
        
        $__internal_d9eb80c2453f8b9c0bdd44b6c4a723e12d4f1f2864ed365b7a291d78a5ab2efa->leave($__internal_d9eb80c2453f8b9c0bdd44b6c4a723e12d4f1f2864ed365b7a291d78a5ab2efa_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f576a953d4a2a2b91bfd1246aa6271c21795ed4b00029e509e63409c6f3843d = $this->env->getExtension("native_profiler");
        $__internal_4f576a953d4a2a2b91bfd1246aa6271c21795ed4b00029e509e63409c6f3843d->enter($__internal_4f576a953d4a2a2b91bfd1246aa6271c21795ed4b00029e509e63409c6f3843d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "


";
        
        $__internal_4f576a953d4a2a2b91bfd1246aa6271c21795ed4b00029e509e63409c6f3843d->leave($__internal_4f576a953d4a2a2b91bfd1246aa6271c21795ed4b00029e509e63409c6f3843d_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_ccd291257654bf6a1b0142e9a2ad889fa2fe2f94ef55402134f5302604e2ec32 = $this->env->getExtension("native_profiler");
        $__internal_ccd291257654bf6a1b0142e9a2ad889fa2fe2f94ef55402134f5302604e2ec32->enter($__internal_ccd291257654bf6a1b0142e9a2ad889fa2fe2f94ef55402134f5302604e2ec32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
            $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")));
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "name", array()), "html", null, true);
            echo "</th>
                        <th>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "surname", array()), "html", null, true);
            echo "</th>
                        <th><a href=\"/person/show/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id", array()), "html", null, true);
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
        
        $__internal_ccd291257654bf6a1b0142e9a2ad889fa2fe2f94ef55402134f5302604e2ec32->leave($__internal_ccd291257654bf6a1b0142e9a2ad889fa2fe2f94ef55402134f5302604e2ec32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Person:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 51,  150 => 49,  143 => 44,  139 => 43,  135 => 42,  132 => 41,  129 => 40,  123 => 39,  116 => 34,  112 => 33,  108 => 32,  105 => 31,  100 => 30,  98 => 29,  81 => 15,  77 => 14,  72 => 13,  66 => 12,  54 => 8,  48 => 7,  36 => 4,  11 => 1,);
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
