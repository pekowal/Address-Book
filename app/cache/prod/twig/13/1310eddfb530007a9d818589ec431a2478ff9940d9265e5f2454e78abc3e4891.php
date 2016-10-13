<?php

/* ::base.html.twig */
class __TwigTemplate_838f08083bb1776200b38c0ed006c7de33219286cc5e559ba0b7a34474bd24f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, shrink-to-fit=no, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Przemysław Kowalczyk\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
</head>
<body>
";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.transit.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Menu Toggle Script -->
<script>

    \$(\"#menu-toggle\").click(function (e) {
        var wrapper = \$(\"#wrapper\");
        var span = \$('#menu-toggle span');
        if (\$(this).css('transform') == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)' || \$(this).css('transform') == 'matrix(-1, 0, 0, -1, 0, 0)') {
            \$(this).transition({rotate: '0deg'});
        } else {
            \$(this).transition({rotate: '180deg'});
        }

        console.log(\$(this).css('transform'));

        /*
         if (span.hasClass('glyphicon-menu-left')) {
         //span.removeClass(\"glyphicon-menu-left\");

         }else{
         span.removeClass(\"glyphicon-menu-right\");
         span.addClass('glyphicon-menu-left');
         }
         */
        wrapper.toggleClass(\"toggled\");
    });
</script>
";
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/simple-sidebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "    <div id=\"wrapper\">

        <!-- Sidebar -->
        <div id=\"sidebar-wrapper\">
            <div class=\"text-center\">
                ";
        // line 28
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 29
            echo "                    <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</h3>
                ";
        }
        // line 31
        echo "            </div>
            <div class=\"fos-icons text-center\">
                <a href=\"/profile/edit\"><span class=\"nav-icon glyphicon glyphicon-edit\"></span></a>
                <a href=\"/logout\"><span title=\"Wyloguj\" class=\"nav-icon glyphicon glyphicon-log-out\"></span></a>
            </div>

            <ul class=\"sidebar-nav\">
                <li class=\"sidebar-brand\">
                    <a href=\"/person\">
                        Address Book
                    </a>
                </li>
                <li>
                    <a href=\"/person/new\">Dodaj nową osobę</a>
                </li>
                ";
        // line 46
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 47
            echo "                    <li>
                        <a href=\"/squad/add\">Dodaj grupę</a>
                    </li>
                    <li>
                        <a href=\"/squad/remove\">Usuń grupę</a>
                    </li>
                ";
        }
        // line 54
        echo "
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id=\"page-content-wrapper\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div id=\"menu-toggle\" class=\"text-center\"><span class=\"glyphicon glyphicon-menu-left\"></span></div>
                    <div class=\"col-lg-12\">
                        ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "                        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 71
        echo "                    </div>

                </div>
            </div>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        // line 66
        echo "
                        ";
    }

    // line 68
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 69
        echo "
                        ";
    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 114,  217 => 69,  214 => 68,  209 => 66,  206 => 65,  193 => 71,  190 => 68,  188 => 65,  175 => 54,  166 => 47,  164 => 46,  147 => 31,  141 => 29,  139 => 28,  132 => 23,  129 => 22,  123 => 17,  119 => 16,  112 => 12,  109 => 11,  106 => 10,  100 => 9,  94 => 116,  92 => 114,  61 => 86,  55 => 83,  51 => 82,  48 => 81,  46 => 22,  41 => 19,  39 => 10,  35 => 9,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="Przemysław Kowalczyk">*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <!-- Bootstrap Core CSS -->*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">*/
/* */
/*         <!-- Custom CSS -->*/
/*         <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/*     {% endblock %}*/
/* */
/* </head>*/
/* <body>*/
/* {% block body %}*/
/*     <div id="wrapper">*/
/* */
/*         <!-- Sidebar -->*/
/*         <div id="sidebar-wrapper">*/
/*             <div class="text-center">*/
/*                 {% if app.user %}*/
/*                     <h3>{{ app.user.username }}</h3>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="fos-icons text-center">*/
/*                 <a href="/profile/edit"><span class="nav-icon glyphicon glyphicon-edit"></span></a>*/
/*                 <a href="/logout"><span title="Wyloguj" class="nav-icon glyphicon glyphicon-log-out"></span></a>*/
/*             </div>*/
/* */
/*             <ul class="sidebar-nav">*/
/*                 <li class="sidebar-brand">*/
/*                     <a href="/person">*/
/*                         Address Book*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/person/new">Dodaj nową osobę</a>*/
/*                 </li>*/
/*                 {% if is_granted('ROLE_ADMIN') %}*/
/*                     <li>*/
/*                         <a href="/squad/add">Dodaj grupę</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/squad/remove">Usuń grupę</a>*/
/*                     </li>*/
/*                 {% endif %}*/
/* */
/*             </ul>*/
/*         </div>*/
/*         <!-- /#sidebar-wrapper -->*/
/* */
/*         <!-- Page Content -->*/
/*         <div id="page-content-wrapper">*/
/*             <div class="container-fluid">*/
/*                 <div class="row">*/
/*                     <div id="menu-toggle" class="text-center"><span class="glyphicon glyphicon-menu-left"></span></div>*/
/*                     <div class="col-lg-12">*/
/*                         {% block content %}*/
/* */
/*                         {% endblock %}*/
/*                         {% block fos_user_content %}*/
/* */
/*                         {% endblock fos_user_content %}*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <!-- /#page-content-wrapper -->*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
/* <script src="{{ asset('js/jquery.js') }}"></script>*/
/* <script src="{{ asset('js/jquery.transit.min.js') }}"></script>*/
/* */
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* */
/* <!-- Menu Toggle Script -->*/
/* <script>*/
/* */
/*     $("#menu-toggle").click(function (e) {*/
/*         var wrapper = $("#wrapper");*/
/*         var span = $('#menu-toggle span');*/
/*         if ($(this).css('transform') == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)' || $(this).css('transform') == 'matrix(-1, 0, 0, -1, 0, 0)') {*/
/*             $(this).transition({rotate: '0deg'});*/
/*         } else {*/
/*             $(this).transition({rotate: '180deg'});*/
/*         }*/
/* */
/*         console.log($(this).css('transform'));*/
/* */
/*         /**/
/*          if (span.hasClass('glyphicon-menu-left')) {*/
/*          //span.removeClass("glyphicon-menu-left");*/
/* */
/*          }else{*/
/*          span.removeClass("glyphicon-menu-right");*/
/*          span.addClass('glyphicon-menu-left');*/
/*          }*/
/*          *//* */
/*         wrapper.toggleClass("toggled");*/
/*     });*/
/* </script>*/
/* {% block javascripts %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
