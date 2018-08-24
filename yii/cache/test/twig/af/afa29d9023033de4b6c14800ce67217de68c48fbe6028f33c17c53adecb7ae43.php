<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_b105b6c8a787d132a2703052f8970982369b12a03effde4b46c6d4800d9f9e89 extends Twig_Template
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
        $__internal_b05672bb76328542350922a656b6f545c9b58d1733bdaf9286f6f07f4ac03769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05672bb76328542350922a656b6f545c9b58d1733bdaf9286f6f07f4ac03769->enter($__internal_b05672bb76328542350922a656b6f545c9b58d1733bdaf9286f6f07f4ac03769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_6a4383396d4da8760130f168dd3f238ae4e01833d10d2ce7453351d405a0cf82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4383396d4da8760130f168dd3f238ae4e01833d10d2ce7453351d405a0cf82->enter($__internal_6a4383396d4da8760130f168dd3f238ae4e01833d10d2ce7453351d405a0cf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute(($context["trace"] ?? null), "function", array())) {
            // line 2
            echo "at ";
            echo (($this->getAttribute(($context["trace"] ?? null), "class", array()) . $this->getAttribute(($context["trace"] ?? null), "type", array())) . $this->getAttribute(($context["trace"] ?? null), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs($this->getAttribute(($context["trace"] ?? null), "args", array()));
            echo ")";
        }
        // line 4
        if (( !twig_test_empty((($this->getAttribute(($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "file", array()), "")) : (""))) &&  !twig_test_empty((($this->getAttribute(($context["trace"] ?? null), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "line", array()), "")) : (""))))) {
            // line 5
            echo (($this->getAttribute(($context["trace"] ?? null), "function", array())) ? ("
     (") : ("at "));
            echo twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute(($context["trace"] ?? null), "file", array()), $this->getAttribute(($context["trace"] ?? null), "line", array()))), array((" at line " . $this->getAttribute(($context["trace"] ?? null), "line", array())) => ""));
            echo ":";
            echo $this->getAttribute(($context["trace"] ?? null), "line", array());
            echo (($this->getAttribute(($context["trace"] ?? null), "function", array())) ? (")") : (""));
        }
        
        $__internal_b05672bb76328542350922a656b6f545c9b58d1733bdaf9286f6f07f4ac03769->leave($__internal_b05672bb76328542350922a656b6f545c9b58d1733bdaf9286f6f07f4ac03769_prof);

        
        $__internal_6a4383396d4da8760130f168dd3f238ae4e01833d10d2ce7453351d405a0cf82->leave($__internal_6a4383396d4da8760130f168dd3f238ae4e01833d10d2ce7453351d405a0cf82_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  34 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args }})
{%- endif -%}
{% if trace.file|default('') is not empty and trace.line|default('') is not empty %}
  {{- trace.function ? '\\n     (' : 'at '}}{{ trace.file|format_file(trace.line)|striptags|replace({ (' at line ' ~ trace.line): '' }) }}:{{ trace.line }}{{ trace.function ? ')' }}
{%- endif %}
", "@Twig/Exception/trace.txt.twig", "C:\\FrameWorks\\Symfony-test\\symfony_demo-old\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\trace.txt.twig");
    }
}
