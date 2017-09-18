<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_de284c85011eb8f2071015bd44a308d73b533c83b7fb8f8c6ba3db2b0f02979c extends Twig_Template
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
        $__internal_fe502a69276888768a6908a055c99d7b97d64f74b2cd1c9a54f2026105360d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe502a69276888768a6908a055c99d7b97d64f74b2cd1c9a54f2026105360d7f->enter($__internal_fe502a69276888768a6908a055c99d7b97d64f74b2cd1c9a54f2026105360d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3157d51203e367ce9f458eeb01b400973a281272e1f1417652c66fbde83571e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3157d51203e367ce9f458eeb01b400973a281272e1f1417652c66fbde83571e6->enter($__internal_3157d51203e367ce9f458eeb01b400973a281272e1f1417652c66fbde83571e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe502a69276888768a6908a055c99d7b97d64f74b2cd1c9a54f2026105360d7f->leave($__internal_fe502a69276888768a6908a055c99d7b97d64f74b2cd1c9a54f2026105360d7f_prof);

        
        $__internal_3157d51203e367ce9f458eeb01b400973a281272e1f1417652c66fbde83571e6->leave($__internal_3157d51203e367ce9f458eeb01b400973a281272e1f1417652c66fbde83571e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_006eb8373275732a3c317356505bb10722758a6215cb9ff67d3172800a9929e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006eb8373275732a3c317356505bb10722758a6215cb9ff67d3172800a9929e0->enter($__internal_006eb8373275732a3c317356505bb10722758a6215cb9ff67d3172800a9929e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5809e4609083e9605dc26c79a4b4ca56a6167920ba73e8b36fef5633f0c9da6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5809e4609083e9605dc26c79a4b4ca56a6167920ba73e8b36fef5633f0c9da6f->enter($__internal_5809e4609083e9605dc26c79a4b4ca56a6167920ba73e8b36fef5633f0c9da6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5809e4609083e9605dc26c79a4b4ca56a6167920ba73e8b36fef5633f0c9da6f->leave($__internal_5809e4609083e9605dc26c79a4b4ca56a6167920ba73e8b36fef5633f0c9da6f_prof);

        
        $__internal_006eb8373275732a3c317356505bb10722758a6215cb9ff67d3172800a9929e0->leave($__internal_006eb8373275732a3c317356505bb10722758a6215cb9ff67d3172800a9929e0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_661f52ca57bca6de30852535e850a1d645b31b208b301147e15a4935ebfbbf44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_661f52ca57bca6de30852535e850a1d645b31b208b301147e15a4935ebfbbf44->enter($__internal_661f52ca57bca6de30852535e850a1d645b31b208b301147e15a4935ebfbbf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63831f25b40bea33eff83457103acf9493d9dcd766c74e9012c88f6089f10f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63831f25b40bea33eff83457103acf9493d9dcd766c74e9012c88f6089f10f2f->enter($__internal_63831f25b40bea33eff83457103acf9493d9dcd766c74e9012c88f6089f10f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_63831f25b40bea33eff83457103acf9493d9dcd766c74e9012c88f6089f10f2f->leave($__internal_63831f25b40bea33eff83457103acf9493d9dcd766c74e9012c88f6089f10f2f_prof);

        
        $__internal_661f52ca57bca6de30852535e850a1d645b31b208b301147e15a4935ebfbbf44->leave($__internal_661f52ca57bca6de30852535e850a1d645b31b208b301147e15a4935ebfbbf44_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd9ca106c803aaba00f9f095197422e77a5f7ad1d0a8324bf89a6b534ebac0bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd9ca106c803aaba00f9f095197422e77a5f7ad1d0a8324bf89a6b534ebac0bf->enter($__internal_cd9ca106c803aaba00f9f095197422e77a5f7ad1d0a8324bf89a6b534ebac0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_870e67497e2390b68b3fe2772441225f711138deeb0856806adeb58b4c494bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870e67497e2390b68b3fe2772441225f711138deeb0856806adeb58b4c494bd6->enter($__internal_870e67497e2390b68b3fe2772441225f711138deeb0856806adeb58b4c494bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_870e67497e2390b68b3fe2772441225f711138deeb0856806adeb58b4c494bd6->leave($__internal_870e67497e2390b68b3fe2772441225f711138deeb0856806adeb58b4c494bd6_prof);

        
        $__internal_cd9ca106c803aaba00f9f095197422e77a5f7ad1d0a8324bf89a6b534ebac0bf->leave($__internal_cd9ca106c803aaba00f9f095197422e77a5f7ad1d0a8324bf89a6b534ebac0bf_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/maestrojosiah/projects/fix/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
