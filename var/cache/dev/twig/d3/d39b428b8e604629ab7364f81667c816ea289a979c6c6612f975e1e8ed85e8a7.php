<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0cdd528a2f8672c7f4c6b3ff4c7f44e592c90b2b224171742ac0d2342bef09f extends Twig_Template
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
        $__internal_73f03b66c27f0fec701e4b59ae001c9a9e38fd56a0db7f0b7a000211ac8ec137 = $this->env->getExtension("native_profiler");
        $__internal_73f03b66c27f0fec701e4b59ae001c9a9e38fd56a0db7f0b7a000211ac8ec137->enter($__internal_73f03b66c27f0fec701e4b59ae001c9a9e38fd56a0db7f0b7a000211ac8ec137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73f03b66c27f0fec701e4b59ae001c9a9e38fd56a0db7f0b7a000211ac8ec137->leave($__internal_73f03b66c27f0fec701e4b59ae001c9a9e38fd56a0db7f0b7a000211ac8ec137_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d516044596f6457d42aa2cf713ae22106005664f541c8ce7fe7ec83e327c3455 = $this->env->getExtension("native_profiler");
        $__internal_d516044596f6457d42aa2cf713ae22106005664f541c8ce7fe7ec83e327c3455->enter($__internal_d516044596f6457d42aa2cf713ae22106005664f541c8ce7fe7ec83e327c3455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d516044596f6457d42aa2cf713ae22106005664f541c8ce7fe7ec83e327c3455->leave($__internal_d516044596f6457d42aa2cf713ae22106005664f541c8ce7fe7ec83e327c3455_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6a050b416e253ee9ff5550671ccac2bdb0125721aa719f68f25b62c2d6582f7f = $this->env->getExtension("native_profiler");
        $__internal_6a050b416e253ee9ff5550671ccac2bdb0125721aa719f68f25b62c2d6582f7f->enter($__internal_6a050b416e253ee9ff5550671ccac2bdb0125721aa719f68f25b62c2d6582f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6a050b416e253ee9ff5550671ccac2bdb0125721aa719f68f25b62c2d6582f7f->leave($__internal_6a050b416e253ee9ff5550671ccac2bdb0125721aa719f68f25b62c2d6582f7f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1754ffc5e2ffe9d4b468eb425e872c7b4f0858304c8ff4629272136ffcdb8b37 = $this->env->getExtension("native_profiler");
        $__internal_1754ffc5e2ffe9d4b468eb425e872c7b4f0858304c8ff4629272136ffcdb8b37->enter($__internal_1754ffc5e2ffe9d4b468eb425e872c7b4f0858304c8ff4629272136ffcdb8b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1754ffc5e2ffe9d4b468eb425e872c7b4f0858304c8ff4629272136ffcdb8b37->leave($__internal_1754ffc5e2ffe9d4b468eb425e872c7b4f0858304c8ff4629272136ffcdb8b37_prof);

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
