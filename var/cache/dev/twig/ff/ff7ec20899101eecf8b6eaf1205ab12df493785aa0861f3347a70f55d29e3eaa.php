<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_fdd7963c3d6a7ccae4fb290bb322396089da74054913fd6886f9de69edc4c83f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5af42ee473af4cbac3fe8673b6cbcf0f55a78cb476bc111257eba65eeb240283 = $this->env->getExtension("native_profiler");
        $__internal_5af42ee473af4cbac3fe8673b6cbcf0f55a78cb476bc111257eba65eeb240283->enter($__internal_5af42ee473af4cbac3fe8673b6cbcf0f55a78cb476bc111257eba65eeb240283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5af42ee473af4cbac3fe8673b6cbcf0f55a78cb476bc111257eba65eeb240283->leave($__internal_5af42ee473af4cbac3fe8673b6cbcf0f55a78cb476bc111257eba65eeb240283_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea1415e9043357d2be04235e914e44b608f2c1ddacb294015ad1f9cd871b29f5 = $this->env->getExtension("native_profiler");
        $__internal_ea1415e9043357d2be04235e914e44b608f2c1ddacb294015ad1f9cd871b29f5->enter($__internal_ea1415e9043357d2be04235e914e44b608f2c1ddacb294015ad1f9cd871b29f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ea1415e9043357d2be04235e914e44b608f2c1ddacb294015ad1f9cd871b29f5->leave($__internal_ea1415e9043357d2be04235e914e44b608f2c1ddacb294015ad1f9cd871b29f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
