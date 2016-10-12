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
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 100
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
            <ul class=\"sidebar-nav\">
                <li class=\"sidebar-brand\">
                    <a href=\"/\">
                        Address Book
                    </a>
                </li>
                <li>
                    <a href=\"/new\">Dodaj nową osobę</a>
                </li>
                <li>
                    <a href=\"/squad/add\">Dodaj grupę</a>
                </li>
                <li>
                    <a href=\"/deleteSquad\">Usuń grupę</a>
                </li>
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
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "                    </div>

                </div>
            </div>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "                            <h1>Address Book</h1>
                            <a href=\"#menu-toggle\" class=\"btn btn-default\" id=\"menu-toggle\">Toggle Menu</a>
                        ";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.transit.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Menu Toggle Script -->
    <script>

        \$(\"#menu-toggle\").click(function (e) {
            var wrapper = \$(\"#wrapper\");
            var span = \$('#menu-toggle span');
            if (\$(this).css('transform') == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)'){
                \$(this).transition({rotate: '0deg'});
            }else{
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
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  156 => 71,  150 => 68,  145 => 67,  142 => 66,  136 => 53,  133 => 52,  120 => 56,  118 => 52,  87 => 23,  84 => 22,  78 => 17,  74 => 16,  67 => 12,  64 => 11,  61 => 10,  55 => 9,  49 => 100,  47 => 66,  45 => 22,  40 => 19,  38 => 10,  34 => 9,  24 => 1,);
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
/*             <ul class="sidebar-nav">*/
/*                 <li class="sidebar-brand">*/
/*                     <a href="/">*/
/*                         Address Book*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/new">Dodaj nową osobę</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/squad/add">Dodaj grupę</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/deleteSquad">Usuń grupę</a>*/
/*                 </li>*/
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
/*                             <h1>Address Book</h1>*/
/*                             <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>*/
/*                         {% endblock %}*/
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
/* {% block javascripts %}*/
/*     <script src="{{ asset('js/jquery.js') }}"></script>*/
/*     <script src="{{ asset('js/jquery.transit.min.js') }}"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* */
/*     <!-- Menu Toggle Script -->*/
/*     <script>*/
/* */
/*         $("#menu-toggle").click(function (e) {*/
/*             var wrapper = $("#wrapper");*/
/*             var span = $('#menu-toggle span');*/
/*             if ($(this).css('transform') == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)'){*/
/*                 $(this).transition({rotate: '0deg'});*/
/*             }else{*/
/*                 $(this).transition({rotate: '180deg'});*/
/*             }*/
/* */
/*             console.log($(this).css('transform'));*/
/* */
/*             /**/
/*             if (span.hasClass('glyphicon-menu-left')) {*/
/*                 //span.removeClass("glyphicon-menu-left");*/
/* */
/*             }else{*/
/*                 span.removeClass("glyphicon-menu-right");*/
/*                 span.addClass('glyphicon-menu-left');*/
/*             }*/
/*             *//* */
/*             wrapper.toggleClass("toggled");*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
