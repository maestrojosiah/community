<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d1a3bb07f6b20f0e8ec1842f68f3ee0e328d307bed714f883ad921509d878108 extends Twig_Template
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
        $__internal_c4b8c3372138cff357133a6eb4692dd120348fe5ef8f9ae0fbb7c9a68afab8f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b8c3372138cff357133a6eb4692dd120348fe5ef8f9ae0fbb7c9a68afab8f0->enter($__internal_c4b8c3372138cff357133a6eb4692dd120348fe5ef8f9ae0fbb7c9a68afab8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_10e66cfbdf12d4dd5e7ea47cebfba7439e26754c03612d3b1660726bba3a6d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e66cfbdf12d4dd5e7ea47cebfba7439e26754c03612d3b1660726bba3a6d2a->enter($__internal_10e66cfbdf12d4dd5e7ea47cebfba7439e26754c03612d3b1660726bba3a6d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4b8c3372138cff357133a6eb4692dd120348fe5ef8f9ae0fbb7c9a68afab8f0->leave($__internal_c4b8c3372138cff357133a6eb4692dd120348fe5ef8f9ae0fbb7c9a68afab8f0_prof);

        
        $__internal_10e66cfbdf12d4dd5e7ea47cebfba7439e26754c03612d3b1660726bba3a6d2a->leave($__internal_10e66cfbdf12d4dd5e7ea47cebfba7439e26754c03612d3b1660726bba3a6d2a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19ee45c7143d2201013b94929e06ddc65ee2dc117e67733a353ea693d6e3e981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ee45c7143d2201013b94929e06ddc65ee2dc117e67733a353ea693d6e3e981->enter($__internal_19ee45c7143d2201013b94929e06ddc65ee2dc117e67733a353ea693d6e3e981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_114416d0aa632216e7b46e5e8a042ba9f92e449422da4110dde900be4d7778bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114416d0aa632216e7b46e5e8a042ba9f92e449422da4110dde900be4d7778bd->enter($__internal_114416d0aa632216e7b46e5e8a042ba9f92e449422da4110dde900be4d7778bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_114416d0aa632216e7b46e5e8a042ba9f92e449422da4110dde900be4d7778bd->leave($__internal_114416d0aa632216e7b46e5e8a042ba9f92e449422da4110dde900be4d7778bd_prof);

        
        $__internal_19ee45c7143d2201013b94929e06ddc65ee2dc117e67733a353ea693d6e3e981->leave($__internal_19ee45c7143d2201013b94929e06ddc65ee2dc117e67733a353ea693d6e3e981_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0d4dd0325a565a37270da9ab1b3dc4e985afe212ece788dc34fb5929f083db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d4dd0325a565a37270da9ab1b3dc4e985afe212ece788dc34fb5929f083db5->enter($__internal_b0d4dd0325a565a37270da9ab1b3dc4e985afe212ece788dc34fb5929f083db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d7491e265b44ddb1338d7027123f98d08cd0b302a48d1e6cb767e9174b45a8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7491e265b44ddb1338d7027123f98d08cd0b302a48d1e6cb767e9174b45a8de->enter($__internal_d7491e265b44ddb1338d7027123f98d08cd0b302a48d1e6cb767e9174b45a8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7491e265b44ddb1338d7027123f98d08cd0b302a48d1e6cb767e9174b45a8de->leave($__internal_d7491e265b44ddb1338d7027123f98d08cd0b302a48d1e6cb767e9174b45a8de_prof);

        
        $__internal_b0d4dd0325a565a37270da9ab1b3dc4e985afe212ece788dc34fb5929f083db5->leave($__internal_b0d4dd0325a565a37270da9ab1b3dc4e985afe212ece788dc34fb5929f083db5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec9e7d9f7742b36fc432e31fd5fee0c0eed841d3a59ecdb0430a99e06238a7af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec9e7d9f7742b36fc432e31fd5fee0c0eed841d3a59ecdb0430a99e06238a7af->enter($__internal_ec9e7d9f7742b36fc432e31fd5fee0c0eed841d3a59ecdb0430a99e06238a7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0e595e9ab306902ec7cbdbe0ded7593a3f42e2cd60afdb77f8bee5bb0adcc392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e595e9ab306902ec7cbdbe0ded7593a3f42e2cd60afdb77f8bee5bb0adcc392->enter($__internal_0e595e9ab306902ec7cbdbe0ded7593a3f42e2cd60afdb77f8bee5bb0adcc392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0e595e9ab306902ec7cbdbe0ded7593a3f42e2cd60afdb77f8bee5bb0adcc392->leave($__internal_0e595e9ab306902ec7cbdbe0ded7593a3f42e2cd60afdb77f8bee5bb0adcc392_prof);

        
        $__internal_ec9e7d9f7742b36fc432e31fd5fee0c0eed841d3a59ecdb0430a99e06238a7af->leave($__internal_ec9e7d9f7742b36fc432e31fd5fee0c0eed841d3a59ecdb0430a99e06238a7af_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/maestrojosiah/projects/fix/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
