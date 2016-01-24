<?php

/* base.html.twig */
class __TwigTemplate_e432b0cd8f1df32229cd5c084dfca55c7182e90bf242a353b75adc02dc65cb95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e097011aa95fc60a84f527e58257ac1d4021b88689cab7667f63f4e19b83eb28 = $this->env->getExtension("native_profiler");
        $__internal_e097011aa95fc60a84f527e58257ac1d4021b88689cab7667f63f4e19b83eb28->enter($__internal_e097011aa95fc60a84f527e58257ac1d4021b88689cab7667f63f4e19b83eb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e097011aa95fc60a84f527e58257ac1d4021b88689cab7667f63f4e19b83eb28->leave($__internal_e097011aa95fc60a84f527e58257ac1d4021b88689cab7667f63f4e19b83eb28_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_04a922d71652d1ac35ff2e4aae8716f100100137110ef197b63506294d11d287 = $this->env->getExtension("native_profiler");
        $__internal_04a922d71652d1ac35ff2e4aae8716f100100137110ef197b63506294d11d287->enter($__internal_04a922d71652d1ac35ff2e4aae8716f100100137110ef197b63506294d11d287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_04a922d71652d1ac35ff2e4aae8716f100100137110ef197b63506294d11d287->leave($__internal_04a922d71652d1ac35ff2e4aae8716f100100137110ef197b63506294d11d287_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_804d138d2ec63e7420b933cb7220100c90fb19a62143c92275b4522ffcf683fb = $this->env->getExtension("native_profiler");
        $__internal_804d138d2ec63e7420b933cb7220100c90fb19a62143c92275b4522ffcf683fb->enter($__internal_804d138d2ec63e7420b933cb7220100c90fb19a62143c92275b4522ffcf683fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_804d138d2ec63e7420b933cb7220100c90fb19a62143c92275b4522ffcf683fb->leave($__internal_804d138d2ec63e7420b933cb7220100c90fb19a62143c92275b4522ffcf683fb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1408f9a55756e826b346daf58eb34b05867aeb4675c5983e0c9699f8ad34f14 = $this->env->getExtension("native_profiler");
        $__internal_e1408f9a55756e826b346daf58eb34b05867aeb4675c5983e0c9699f8ad34f14->enter($__internal_e1408f9a55756e826b346daf58eb34b05867aeb4675c5983e0c9699f8ad34f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e1408f9a55756e826b346daf58eb34b05867aeb4675c5983e0c9699f8ad34f14->leave($__internal_e1408f9a55756e826b346daf58eb34b05867aeb4675c5983e0c9699f8ad34f14_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75fbe9e04fe6e7d024fa81c75130390ab4d71e9f5a7e4afd230cf04ab660e649 = $this->env->getExtension("native_profiler");
        $__internal_75fbe9e04fe6e7d024fa81c75130390ab4d71e9f5a7e4afd230cf04ab660e649->enter($__internal_75fbe9e04fe6e7d024fa81c75130390ab4d71e9f5a7e4afd230cf04ab660e649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_75fbe9e04fe6e7d024fa81c75130390ab4d71e9f5a7e4afd230cf04ab660e649->leave($__internal_75fbe9e04fe6e7d024fa81c75130390ab4d71e9f5a7e4afd230cf04ab660e649_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
