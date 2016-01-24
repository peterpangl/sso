<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7b232b2d0db7b71b8388ba1b646b426526f359bb68b6637acdb6b1708f437f7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4d22a043a0fdd88ba4511de4c3b811334b642ab361aa1d3cd5aad1dc062b58e = $this->env->getExtension("native_profiler");
        $__internal_b4d22a043a0fdd88ba4511de4c3b811334b642ab361aa1d3cd5aad1dc062b58e->enter($__internal_b4d22a043a0fdd88ba4511de4c3b811334b642ab361aa1d3cd5aad1dc062b58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d22a043a0fdd88ba4511de4c3b811334b642ab361aa1d3cd5aad1dc062b58e->leave($__internal_b4d22a043a0fdd88ba4511de4c3b811334b642ab361aa1d3cd5aad1dc062b58e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c504cb5238f9de91df57c65ddd7da23a2bcf88a0e0688b0d6442584a0049c831 = $this->env->getExtension("native_profiler");
        $__internal_c504cb5238f9de91df57c65ddd7da23a2bcf88a0e0688b0d6442584a0049c831->enter($__internal_c504cb5238f9de91df57c65ddd7da23a2bcf88a0e0688b0d6442584a0049c831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c504cb5238f9de91df57c65ddd7da23a2bcf88a0e0688b0d6442584a0049c831->leave($__internal_c504cb5238f9de91df57c65ddd7da23a2bcf88a0e0688b0d6442584a0049c831_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_abec2542acb88fba6ce4702da8a8c5a7df60cf4d9898219c841c674519bd2eee = $this->env->getExtension("native_profiler");
        $__internal_abec2542acb88fba6ce4702da8a8c5a7df60cf4d9898219c841c674519bd2eee->enter($__internal_abec2542acb88fba6ce4702da8a8c5a7df60cf4d9898219c841c674519bd2eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_abec2542acb88fba6ce4702da8a8c5a7df60cf4d9898219c841c674519bd2eee->leave($__internal_abec2542acb88fba6ce4702da8a8c5a7df60cf4d9898219c841c674519bd2eee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d021f3a8df5b3ae61630d9899972c03f47f1bb8fd3bd251515bbd7c8f15b974 = $this->env->getExtension("native_profiler");
        $__internal_2d021f3a8df5b3ae61630d9899972c03f47f1bb8fd3bd251515bbd7c8f15b974->enter($__internal_2d021f3a8df5b3ae61630d9899972c03f47f1bb8fd3bd251515bbd7c8f15b974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2d021f3a8df5b3ae61630d9899972c03f47f1bb8fd3bd251515bbd7c8f15b974->leave($__internal_2d021f3a8df5b3ae61630d9899972c03f47f1bb8fd3bd251515bbd7c8f15b974_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
