<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7893501ee4c7bfab144bd2a1b350992717fc7cb27fac2419a5603c9015a183ac extends Twig_Template
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
        $__internal_205402b7932d186aa25124267de1786da8ba1433118dd50e5c94036c6c2771dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205402b7932d186aa25124267de1786da8ba1433118dd50e5c94036c6c2771dd->enter($__internal_205402b7932d186aa25124267de1786da8ba1433118dd50e5c94036c6c2771dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a06ae58f09e5d5def53dea79c91a9743a919a487ea9ceb3da14b182a380d2523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06ae58f09e5d5def53dea79c91a9743a919a487ea9ceb3da14b182a380d2523->enter($__internal_a06ae58f09e5d5def53dea79c91a9743a919a487ea9ceb3da14b182a380d2523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_205402b7932d186aa25124267de1786da8ba1433118dd50e5c94036c6c2771dd->leave($__internal_205402b7932d186aa25124267de1786da8ba1433118dd50e5c94036c6c2771dd_prof);

        
        $__internal_a06ae58f09e5d5def53dea79c91a9743a919a487ea9ceb3da14b182a380d2523->leave($__internal_a06ae58f09e5d5def53dea79c91a9743a919a487ea9ceb3da14b182a380d2523_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd8dc54986ea1e516adb74939d29b562563fc9e9df5b694420fea6bba4fad87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8dc54986ea1e516adb74939d29b562563fc9e9df5b694420fea6bba4fad87b->enter($__internal_bd8dc54986ea1e516adb74939d29b562563fc9e9df5b694420fea6bba4fad87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_61db0f0ee8eae28959157d144ccbeee1cc45633488a00779f71b007e82047372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61db0f0ee8eae28959157d144ccbeee1cc45633488a00779f71b007e82047372->enter($__internal_61db0f0ee8eae28959157d144ccbeee1cc45633488a00779f71b007e82047372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_61db0f0ee8eae28959157d144ccbeee1cc45633488a00779f71b007e82047372->leave($__internal_61db0f0ee8eae28959157d144ccbeee1cc45633488a00779f71b007e82047372_prof);

        
        $__internal_bd8dc54986ea1e516adb74939d29b562563fc9e9df5b694420fea6bba4fad87b->leave($__internal_bd8dc54986ea1e516adb74939d29b562563fc9e9df5b694420fea6bba4fad87b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_702fd1476dfc0395357d9289047c62294d99dd11086583602446651b4dd9ea53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702fd1476dfc0395357d9289047c62294d99dd11086583602446651b4dd9ea53->enter($__internal_702fd1476dfc0395357d9289047c62294d99dd11086583602446651b4dd9ea53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_217ae9b2ff0fa5035ccb046837ad2024f27fe1bac2087d9af05784295876a05c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217ae9b2ff0fa5035ccb046837ad2024f27fe1bac2087d9af05784295876a05c->enter($__internal_217ae9b2ff0fa5035ccb046837ad2024f27fe1bac2087d9af05784295876a05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo ")
";
        
        $__internal_217ae9b2ff0fa5035ccb046837ad2024f27fe1bac2087d9af05784295876a05c->leave($__internal_217ae9b2ff0fa5035ccb046837ad2024f27fe1bac2087d9af05784295876a05c_prof);

        
        $__internal_702fd1476dfc0395357d9289047c62294d99dd11086583602446651b4dd9ea53->leave($__internal_702fd1476dfc0395357d9289047c62294d99dd11086583602446651b4dd9ea53_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f029954a8adefd44458ce19a2eae2cd16d3a8dd09c3d1a32466694356aed3c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f029954a8adefd44458ce19a2eae2cd16d3a8dd09c3d1a32466694356aed3c52->enter($__internal_f029954a8adefd44458ce19a2eae2cd16d3a8dd09c3d1a32466694356aed3c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d284557c93f2b44405fa255f543f573f07c15944f47777b66d33eec98bbf389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d284557c93f2b44405fa255f543f573f07c15944f47777b66d33eec98bbf389->enter($__internal_1d284557c93f2b44405fa255f543f573f07c15944f47777b66d33eec98bbf389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1d284557c93f2b44405fa255f543f573f07c15944f47777b66d33eec98bbf389->leave($__internal_1d284557c93f2b44405fa255f543f573f07c15944f47777b66d33eec98bbf389_prof);

        
        $__internal_f029954a8adefd44458ce19a2eae2cd16d3a8dd09c3d1a32466694356aed3c52->leave($__internal_f029954a8adefd44458ce19a2eae2cd16d3a8dd09c3d1a32466694356aed3c52_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\FrameWorks\\Symfony-test\\symfony_demo-old\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
