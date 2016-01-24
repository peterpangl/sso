<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_456afe20e1061bdd9358330acfb2fabd5a59621bf7d3d5ffe1d2efcc524d7886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_494806c16dafa77f584eb98c6dd3687f62710e17039a0ff466be57da5b881b2d = $this->env->getExtension("native_profiler");
        $__internal_494806c16dafa77f584eb98c6dd3687f62710e17039a0ff466be57da5b881b2d->enter($__internal_494806c16dafa77f584eb98c6dd3687f62710e17039a0ff466be57da5b881b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_494806c16dafa77f584eb98c6dd3687f62710e17039a0ff466be57da5b881b2d->leave($__internal_494806c16dafa77f584eb98c6dd3687f62710e17039a0ff466be57da5b881b2d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d0f93f95753345462f58c78a69be276607a9b32cd6c95d5b7822f3af10d0c3f5 = $this->env->getExtension("native_profiler");
        $__internal_d0f93f95753345462f58c78a69be276607a9b32cd6c95d5b7822f3af10d0c3f5->enter($__internal_d0f93f95753345462f58c78a69be276607a9b32cd6c95d5b7822f3af10d0c3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d0f93f95753345462f58c78a69be276607a9b32cd6c95d5b7822f3af10d0c3f5->leave($__internal_d0f93f95753345462f58c78a69be276607a9b32cd6c95d5b7822f3af10d0c3f5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3eebbe42618cea59953ffb3d6420c460166186a05da490f735099080be2de880 = $this->env->getExtension("native_profiler");
        $__internal_3eebbe42618cea59953ffb3d6420c460166186a05da490f735099080be2de880->enter($__internal_3eebbe42618cea59953ffb3d6420c460166186a05da490f735099080be2de880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3eebbe42618cea59953ffb3d6420c460166186a05da490f735099080be2de880->leave($__internal_3eebbe42618cea59953ffb3d6420c460166186a05da490f735099080be2de880_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df77c373a66b015fbb9f8e51328fdb5a4cd9aa474bcb849da1310428a017981f = $this->env->getExtension("native_profiler");
        $__internal_df77c373a66b015fbb9f8e51328fdb5a4cd9aa474bcb849da1310428a017981f->enter($__internal_df77c373a66b015fbb9f8e51328fdb5a4cd9aa474bcb849da1310428a017981f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_df77c373a66b015fbb9f8e51328fdb5a4cd9aa474bcb849da1310428a017981f->leave($__internal_df77c373a66b015fbb9f8e51328fdb5a4cd9aa474bcb849da1310428a017981f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
