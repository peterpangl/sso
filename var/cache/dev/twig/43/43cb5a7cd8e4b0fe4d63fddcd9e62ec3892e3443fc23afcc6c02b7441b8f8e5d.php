<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e8e2c037917eca04b204a33ec67a8519ca64250cbe65fe70793e16080406e5c4 extends Twig_Template
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
        $__internal_bf6cec72c3bf1c9e98e4a056a772994a4ea85bd5a1df9ec7dd514b0d675e4142 = $this->env->getExtension("native_profiler");
        $__internal_bf6cec72c3bf1c9e98e4a056a772994a4ea85bd5a1df9ec7dd514b0d675e4142->enter($__internal_bf6cec72c3bf1c9e98e4a056a772994a4ea85bd5a1df9ec7dd514b0d675e4142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf6cec72c3bf1c9e98e4a056a772994a4ea85bd5a1df9ec7dd514b0d675e4142->leave($__internal_bf6cec72c3bf1c9e98e4a056a772994a4ea85bd5a1df9ec7dd514b0d675e4142_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64f62f1970e6de131255f9a545a247c529ce36f4b06b79666e04deb7bb2216bf = $this->env->getExtension("native_profiler");
        $__internal_64f62f1970e6de131255f9a545a247c529ce36f4b06b79666e04deb7bb2216bf->enter($__internal_64f62f1970e6de131255f9a545a247c529ce36f4b06b79666e04deb7bb2216bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_64f62f1970e6de131255f9a545a247c529ce36f4b06b79666e04deb7bb2216bf->leave($__internal_64f62f1970e6de131255f9a545a247c529ce36f4b06b79666e04deb7bb2216bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_59e9054108517467c3098bdb1fd5098c927e3721d06d1d6e124ca2d413c4ce0d = $this->env->getExtension("native_profiler");
        $__internal_59e9054108517467c3098bdb1fd5098c927e3721d06d1d6e124ca2d413c4ce0d->enter($__internal_59e9054108517467c3098bdb1fd5098c927e3721d06d1d6e124ca2d413c4ce0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_59e9054108517467c3098bdb1fd5098c927e3721d06d1d6e124ca2d413c4ce0d->leave($__internal_59e9054108517467c3098bdb1fd5098c927e3721d06d1d6e124ca2d413c4ce0d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_89ca3976994b757805650d1e968183ee4ac375e8254c5f93827dd90d495c430c = $this->env->getExtension("native_profiler");
        $__internal_89ca3976994b757805650d1e968183ee4ac375e8254c5f93827dd90d495c430c->enter($__internal_89ca3976994b757805650d1e968183ee4ac375e8254c5f93827dd90d495c430c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_89ca3976994b757805650d1e968183ee4ac375e8254c5f93827dd90d495c430c->leave($__internal_89ca3976994b757805650d1e968183ee4ac375e8254c5f93827dd90d495c430c_prof);

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
