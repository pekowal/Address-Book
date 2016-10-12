<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7367360ffb0611de609707b73bdac9b4854abcdec56dd536cf0c4178899685c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16515f261cb2afeffb70a71b9996a8f00921365ed16e124f59395e40caef123d = $this->env->getExtension("native_profiler");
        $__internal_16515f261cb2afeffb70a71b9996a8f00921365ed16e124f59395e40caef123d->enter($__internal_16515f261cb2afeffb70a71b9996a8f00921365ed16e124f59395e40caef123d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_16515f261cb2afeffb70a71b9996a8f00921365ed16e124f59395e40caef123d->leave($__internal_16515f261cb2afeffb70a71b9996a8f00921365ed16e124f59395e40caef123d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
