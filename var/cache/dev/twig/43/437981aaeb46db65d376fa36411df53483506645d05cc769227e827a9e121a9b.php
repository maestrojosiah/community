<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b4ba85c41fb15b9a5e49d392459f5ea4baf39fc2873f4d2b3dfd7aaf94cfb515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_523f738133858d74a9dbec7bfd76ba0d1b71eb9c12fac6079e80e991cae2864f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523f738133858d74a9dbec7bfd76ba0d1b71eb9c12fac6079e80e991cae2864f->enter($__internal_523f738133858d74a9dbec7bfd76ba0d1b71eb9c12fac6079e80e991cae2864f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b2b798c4e78825d0b4bb108e8508589188174fe55752f6fa5c1a02a95362352c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b798c4e78825d0b4bb108e8508589188174fe55752f6fa5c1a02a95362352c->enter($__internal_b2b798c4e78825d0b4bb108e8508589188174fe55752f6fa5c1a02a95362352c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_523f738133858d74a9dbec7bfd76ba0d1b71eb9c12fac6079e80e991cae2864f->leave($__internal_523f738133858d74a9dbec7bfd76ba0d1b71eb9c12fac6079e80e991cae2864f_prof);

        
        $__internal_b2b798c4e78825d0b4bb108e8508589188174fe55752f6fa5c1a02a95362352c->leave($__internal_b2b798c4e78825d0b4bb108e8508589188174fe55752f6fa5c1a02a95362352c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75c356b37339ec5b39a449417696de476de2850cac37830a19adeb6f1977fd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c356b37339ec5b39a449417696de476de2850cac37830a19adeb6f1977fd1f->enter($__internal_75c356b37339ec5b39a449417696de476de2850cac37830a19adeb6f1977fd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5787aa884ebd87e7283fdcf887a734dc6333f2f14ea6ba861ddf50f2d23a187f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5787aa884ebd87e7283fdcf887a734dc6333f2f14ea6ba861ddf50f2d23a187f->enter($__internal_5787aa884ebd87e7283fdcf887a734dc6333f2f14ea6ba861ddf50f2d23a187f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5787aa884ebd87e7283fdcf887a734dc6333f2f14ea6ba861ddf50f2d23a187f->leave($__internal_5787aa884ebd87e7283fdcf887a734dc6333f2f14ea6ba861ddf50f2d23a187f_prof);

        
        $__internal_75c356b37339ec5b39a449417696de476de2850cac37830a19adeb6f1977fd1f->leave($__internal_75c356b37339ec5b39a449417696de476de2850cac37830a19adeb6f1977fd1f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_38b2ef89d3bef215cb23648a6989af9961f396efab8f7a92fc851d04990d8d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b2ef89d3bef215cb23648a6989af9961f396efab8f7a92fc851d04990d8d0e->enter($__internal_38b2ef89d3bef215cb23648a6989af9961f396efab8f7a92fc851d04990d8d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63306a90e4aacb0082481f7e4b79653c002b6e88d297c13aedc50639e4884827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63306a90e4aacb0082481f7e4b79653c002b6e88d297c13aedc50639e4884827->enter($__internal_63306a90e4aacb0082481f7e4b79653c002b6e88d297c13aedc50639e4884827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_63306a90e4aacb0082481f7e4b79653c002b6e88d297c13aedc50639e4884827->leave($__internal_63306a90e4aacb0082481f7e4b79653c002b6e88d297c13aedc50639e4884827_prof);

        
        $__internal_38b2ef89d3bef215cb23648a6989af9961f396efab8f7a92fc851d04990d8d0e->leave($__internal_38b2ef89d3bef215cb23648a6989af9961f396efab8f7a92fc851d04990d8d0e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47f8e28ac3ac207a04accf753224b817d913bc660039ad54579fc2464ef6a910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f8e28ac3ac207a04accf753224b817d913bc660039ad54579fc2464ef6a910->enter($__internal_47f8e28ac3ac207a04accf753224b817d913bc660039ad54579fc2464ef6a910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e03b5fffe507e79cccf9275da8e4c09b4dcbb1c91076d40e7336bd2e14d434d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e03b5fffe507e79cccf9275da8e4c09b4dcbb1c91076d40e7336bd2e14d434d->enter($__internal_2e03b5fffe507e79cccf9275da8e4c09b4dcbb1c91076d40e7336bd2e14d434d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2e03b5fffe507e79cccf9275da8e4c09b4dcbb1c91076d40e7336bd2e14d434d->leave($__internal_2e03b5fffe507e79cccf9275da8e4c09b4dcbb1c91076d40e7336bd2e14d434d_prof);

        
        $__internal_47f8e28ac3ac207a04accf753224b817d913bc660039ad54579fc2464ef6a910->leave($__internal_47f8e28ac3ac207a04accf753224b817d913bc660039ad54579fc2464ef6a910_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/maestrojosiah/projects/fix/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
