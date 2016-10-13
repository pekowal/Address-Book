<?php

/* ::base.html.twig */
class __TwigTemplate_6fda208c2ab5e9047e1cb4952230e2bf0b00fc46a9727a6d78d6b4f52531c3ac extends Twig_Template
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
        $__internal_380475ede106caa6ce03276f93e325f2e6555fb78206181a8fc52dae55831035 = $this->env->getExtension("native_profiler");
        $__internal_380475ede106caa6ce03276f93e325f2e6555fb78206181a8fc52dae55831035->enter($__internal_380475ede106caa6ce03276f93e325f2e6555fb78206181a8fc52dae55831035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_380475ede106caa6ce03276f93e325f2e6555fb78206181a8fc52dae55831035->leave($__internal_380475ede106caa6ce03276f93e325f2e6555fb78206181a8fc52dae55831035_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_da9ecba33bf5e26171b4e2a96a710f4ac3d21bb9fca87de2879ee8f23745148a = $this->env->getExtension("native_profiler");
        $__internal_da9ecba33bf5e26171b4e2a96a710f4ac3d21bb9fca87de2879ee8f23745148a->enter($__internal_da9ecba33bf5e26171b4e2a96a710f4ac3d21bb9fca87de2879ee8f23745148a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_da9ecba33bf5e26171b4e2a96a710f4ac3d21bb9fca87de2879ee8f23745148a->leave($__internal_da9ecba33bf5e26171b4e2a96a710f4ac3d21bb9fca87de2879ee8f23745148a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8a2ddb6a93fe79ccd6ff0286b8e64b8c3d94d58c6a11a5d9560215360a71ad3 = $this->env->getExtension("native_profiler");
        $__internal_c8a2ddb6a93fe79ccd6ff0286b8e64b8c3d94d58c6a11a5d9560215360a71ad3->enter($__internal_c8a2ddb6a93fe79ccd6ff0286b8e64b8c3d94d58c6a11a5d9560215360a71ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c8a2ddb6a93fe79ccd6ff0286b8e64b8c3d94d58c6a11a5d9560215360a71ad3->leave($__internal_c8a2ddb6a93fe79ccd6ff0286b8e64b8c3d94d58c6a11a5d9560215360a71ad3_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_073de37c2392ed25a2b84fce26a4d2b9dcdfe85e40f8d27c586eb45ee1992e75 = $this->env->getExtension("native_profiler");
        $__internal_073de37c2392ed25a2b84fce26a4d2b9dcdfe85e40f8d27c586eb45ee1992e75->enter($__internal_073de37c2392ed25a2b84fce26a4d2b9dcdfe85e40f8d27c586eb45ee1992e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    <div id=\"wrapper\">

        <!-- Sidebar -->
        <div id=\"sidebar-wrapper\">
            <div class=\"text-center\">
                ";
        // line 28
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 29
            echo "                    <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        
        $__internal_073de37c2392ed25a2b84fce26a4d2b9dcdfe85e40f8d27c586eb45ee1992e75->leave($__internal_073de37c2392ed25a2b84fce26a4d2b9dcdfe85e40f8d27c586eb45ee1992e75_prof);

    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        $__internal_ec67f0ebfed27a260393a165acab8d2b2cf598a5b6003ed2b36f05e19990b984 = $this->env->getExtension("native_profiler");
        $__internal_ec67f0ebfed27a260393a165acab8d2b2cf598a5b6003ed2b36f05e19990b984->enter($__internal_ec67f0ebfed27a260393a165acab8d2b2cf598a5b6003ed2b36f05e19990b984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 66
        echo "
                        ";
        
        $__internal_ec67f0ebfed27a260393a165acab8d2b2cf598a5b6003ed2b36f05e19990b984->leave($__internal_ec67f0ebfed27a260393a165acab8d2b2cf598a5b6003ed2b36f05e19990b984_prof);

    }

    // line 68
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59e1124b7251efa26098a10d363d4ce7138f2d0d65a500da7665186fa04ec2aa = $this->env->getExtension("native_profiler");
        $__internal_59e1124b7251efa26098a10d363d4ce7138f2d0d65a500da7665186fa04ec2aa->enter($__internal_59e1124b7251efa26098a10d363d4ce7138f2d0d65a500da7665186fa04ec2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 69
        echo "
                        ";
        
        $__internal_59e1124b7251efa26098a10d363d4ce7138f2d0d65a500da7665186fa04ec2aa->leave($__internal_59e1124b7251efa26098a10d363d4ce7138f2d0d65a500da7665186fa04ec2aa_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_372cb4c0d30c3097d99db1a3bad6ea543cb85c908aba8369706d67325253f80f = $this->env->getExtension("native_profiler");
        $__internal_372cb4c0d30c3097d99db1a3bad6ea543cb85c908aba8369706d67325253f80f->enter($__internal_372cb4c0d30c3097d99db1a3bad6ea543cb85c908aba8369706d67325253f80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_372cb4c0d30c3097d99db1a3bad6ea543cb85c908aba8369706d67325253f80f->leave($__internal_372cb4c0d30c3097d99db1a3bad6ea543cb85c908aba8369706d67325253f80f_prof);

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
        return array (  258 => 114,  250 => 69,  244 => 68,  236 => 66,  230 => 65,  214 => 71,  211 => 68,  209 => 65,  196 => 54,  187 => 47,  185 => 46,  168 => 31,  162 => 29,  160 => 28,  153 => 23,  147 => 22,  138 => 17,  134 => 16,  127 => 12,  124 => 11,  118 => 10,  106 => 9,  97 => 116,  95 => 114,  64 => 86,  58 => 83,  54 => 82,  51 => 81,  49 => 22,  44 => 19,  42 => 10,  38 => 9,  28 => 1,);
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
