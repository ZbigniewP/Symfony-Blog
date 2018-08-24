<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_ed0cfebac7a333961bc47a4a7accc205f45b7f041b4fc8a0804a52738b245d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b32dc841923635a55d050e8874d088cb13e25f7cf107305e698a8ee559421ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b32dc841923635a55d050e8874d088cb13e25f7cf107305e698a8ee559421ed->enter($__internal_2b32dc841923635a55d050e8874d088cb13e25f7cf107305e698a8ee559421ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_06025c4fcd7772af2c7628d9b96bb4eca1255761f09a6a9e29f18d3f24ef5774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06025c4fcd7772af2c7628d9b96bb4eca1255761f09a6a9e29f18d3f24ef5774->enter($__internal_06025c4fcd7772af2c7628d9b96bb4eca1255761f09a6a9e29f18d3f24ef5774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2b32dc841923635a55d050e8874d088cb13e25f7cf107305e698a8ee559421ed->leave($__internal_2b32dc841923635a55d050e8874d088cb13e25f7cf107305e698a8ee559421ed_prof);

        
        $__internal_06025c4fcd7772af2c7628d9b96bb4eca1255761f09a6a9e29f18d3f24ef5774->leave($__internal_06025c4fcd7772af2c7628d9b96bb4eca1255761f09a6a9e29f18d3f24ef5774_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_69eaf71c0858347919857ffa9a7f3675156bd139d10e1321a712ff45351453df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69eaf71c0858347919857ffa9a7f3675156bd139d10e1321a712ff45351453df->enter($__internal_69eaf71c0858347919857ffa9a7f3675156bd139d10e1321a712ff45351453df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_308e9e64c67df3f656923e8ac44c0934ab2be3a384f9cb5d5a6d1b53dfaeec28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308e9e64c67df3f656923e8ac44c0934ab2be3a384f9cb5d5a6d1b53dfaeec28->enter($__internal_308e9e64c67df3f656923e8ac44c0934ab2be3a384f9cb5d5a6d1b53dfaeec28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_308e9e64c67df3f656923e8ac44c0934ab2be3a384f9cb5d5a6d1b53dfaeec28->leave($__internal_308e9e64c67df3f656923e8ac44c0934ab2be3a384f9cb5d5a6d1b53dfaeec28_prof);

        
        $__internal_69eaf71c0858347919857ffa9a7f3675156bd139d10e1321a712ff45351453df->leave($__internal_69eaf71c0858347919857ffa9a7f3675156bd139d10e1321a712ff45351453df_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ed462173feeba9d98045f25a8c038ba371a0fc68386d65df5fa445a0af4b0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed462173feeba9d98045f25a8c038ba371a0fc68386d65df5fa445a0af4b0f6->enter($__internal_1ed462173feeba9d98045f25a8c038ba371a0fc68386d65df5fa445a0af4b0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_59fd8530278785d70dedc11801c3b48808c22abc88f0ce1c7421399fa27862cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fd8530278785d70dedc11801c3b48808c22abc88f0ce1c7421399fa27862cc->enter($__internal_59fd8530278785d70dedc11801c3b48808c22abc88f0ce1c7421399fa27862cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_59fd8530278785d70dedc11801c3b48808c22abc88f0ce1c7421399fa27862cc->leave($__internal_59fd8530278785d70dedc11801c3b48808c22abc88f0ce1c7421399fa27862cc_prof);

        
        $__internal_1ed462173feeba9d98045f25a8c038ba371a0fc68386d65df5fa445a0af4b0f6->leave($__internal_1ed462173feeba9d98045f25a8c038ba371a0fc68386d65df5fa445a0af4b0f6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8ff466f7f64ad8c9e4bb3990647c5308a3acff34b340edd8a24bb3288ea6fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ff466f7f64ad8c9e4bb3990647c5308a3acff34b340edd8a24bb3288ea6fa6->enter($__internal_d8ff466f7f64ad8c9e4bb3990647c5308a3acff34b340edd8a24bb3288ea6fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6d775e7912b6076e671f07e18907b3048639349b88a499d6d397684ec8f08fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d775e7912b6076e671f07e18907b3048639349b88a499d6d397684ec8f08fa->enter($__internal_e6d775e7912b6076e671f07e18907b3048639349b88a499d6d397684ec8f08fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e6d775e7912b6076e671f07e18907b3048639349b88a499d6d397684ec8f08fa->leave($__internal_e6d775e7912b6076e671f07e18907b3048639349b88a499d6d397684ec8f08fa_prof);

        
        $__internal_d8ff466f7f64ad8c9e4bb3990647c5308a3acff34b340edd8a24bb3288ea6fa6->leave($__internal_d8ff466f7f64ad8c9e4bb3990647c5308a3acff34b340edd8a24bb3288ea6fa6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\FrameWorks\\Symfony-test\\symfony_demo-old\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
