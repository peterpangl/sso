<?php

/* base.html.twig */
class __TwigTemplate_b475979aef5ba96270c1b9a5b0d2c20ca62ce02f30912e5237a45de2ca2b8b76 extends Twig_Template
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
        $__internal_645d46cf7c6287eb4806997f771e498d1e8d35a06a934d5cb6ae1cbdd0565557 = $this->env->getExtension("native_profiler");
        $__internal_645d46cf7c6287eb4806997f771e498d1e8d35a06a934d5cb6ae1cbdd0565557->enter($__internal_645d46cf7c6287eb4806997f771e498d1e8d35a06a934d5cb6ae1cbdd0565557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_645d46cf7c6287eb4806997f771e498d1e8d35a06a934d5cb6ae1cbdd0565557->leave($__internal_645d46cf7c6287eb4806997f771e498d1e8d35a06a934d5cb6ae1cbdd0565557_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_136058ac08e6c1122b0d9c8afce7945e840f987f8846d405a87923b01e040f70 = $this->env->getExtension("native_profiler");
        $__internal_136058ac08e6c1122b0d9c8afce7945e840f987f8846d405a87923b01e040f70->enter($__internal_136058ac08e6c1122b0d9c8afce7945e840f987f8846d405a87923b01e040f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_136058ac08e6c1122b0d9c8afce7945e840f987f8846d405a87923b01e040f70->leave($__internal_136058ac08e6c1122b0d9c8afce7945e840f987f8846d405a87923b01e040f70_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c521609778f6bb9136441ca47c8e46d3a527ad7f1730fd1d697ee0a664d229d = $this->env->getExtension("native_profiler");
        $__internal_7c521609778f6bb9136441ca47c8e46d3a527ad7f1730fd1d697ee0a664d229d->enter($__internal_7c521609778f6bb9136441ca47c8e46d3a527ad7f1730fd1d697ee0a664d229d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7c521609778f6bb9136441ca47c8e46d3a527ad7f1730fd1d697ee0a664d229d->leave($__internal_7c521609778f6bb9136441ca47c8e46d3a527ad7f1730fd1d697ee0a664d229d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a178f9a3018f3b3eafe4b23a8a5e05ee3996e607778db2930ff057828c8b3ff4 = $this->env->getExtension("native_profiler");
        $__internal_a178f9a3018f3b3eafe4b23a8a5e05ee3996e607778db2930ff057828c8b3ff4->enter($__internal_a178f9a3018f3b3eafe4b23a8a5e05ee3996e607778db2930ff057828c8b3ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a178f9a3018f3b3eafe4b23a8a5e05ee3996e607778db2930ff057828c8b3ff4->leave($__internal_a178f9a3018f3b3eafe4b23a8a5e05ee3996e607778db2930ff057828c8b3ff4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38167bc22ea1e0784cf74851544bc7430e9557893ee8939968c75aa84edef408 = $this->env->getExtension("native_profiler");
        $__internal_38167bc22ea1e0784cf74851544bc7430e9557893ee8939968c75aa84edef408->enter($__internal_38167bc22ea1e0784cf74851544bc7430e9557893ee8939968c75aa84edef408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_38167bc22ea1e0784cf74851544bc7430e9557893ee8939968c75aa84edef408->leave($__internal_38167bc22ea1e0784cf74851544bc7430e9557893ee8939968c75aa84edef408_prof);

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
