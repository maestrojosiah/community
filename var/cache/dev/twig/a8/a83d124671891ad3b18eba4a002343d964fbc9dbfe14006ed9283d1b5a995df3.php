<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1348da28f05e4963b5fe6a690186e1084a651b3a49069b71b2f83d1a3a107fb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10699db0ba8b9ca4dff25f25f80957a966e08a6ebaaf664aa4fd469ee1e21b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10699db0ba8b9ca4dff25f25f80957a966e08a6ebaaf664aa4fd469ee1e21b38->enter($__internal_10699db0ba8b9ca4dff25f25f80957a966e08a6ebaaf664aa4fd469ee1e21b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1be0c3cf0156819448bcf36b7c77669d45da0e10225f3d77ffcb7a3000a759c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be0c3cf0156819448bcf36b7c77669d45da0e10225f3d77ffcb7a3000a759c7->enter($__internal_1be0c3cf0156819448bcf36b7c77669d45da0e10225f3d77ffcb7a3000a759c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10699db0ba8b9ca4dff25f25f80957a966e08a6ebaaf664aa4fd469ee1e21b38->leave($__internal_10699db0ba8b9ca4dff25f25f80957a966e08a6ebaaf664aa4fd469ee1e21b38_prof);

        
        $__internal_1be0c3cf0156819448bcf36b7c77669d45da0e10225f3d77ffcb7a3000a759c7->leave($__internal_1be0c3cf0156819448bcf36b7c77669d45da0e10225f3d77ffcb7a3000a759c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f6e151b28a9a9d9af11a826420a5da5563705db3863d84332985d02441a4cd00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e151b28a9a9d9af11a826420a5da5563705db3863d84332985d02441a4cd00->enter($__internal_f6e151b28a9a9d9af11a826420a5da5563705db3863d84332985d02441a4cd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f78eb90050f4ffd07fce2b89065937c3f6eec4cc7052d074ee54c0eb8baa8c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78eb90050f4ffd07fce2b89065937c3f6eec4cc7052d074ee54c0eb8baa8c99->enter($__internal_f78eb90050f4ffd07fce2b89065937c3f6eec4cc7052d074ee54c0eb8baa8c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f78eb90050f4ffd07fce2b89065937c3f6eec4cc7052d074ee54c0eb8baa8c99->leave($__internal_f78eb90050f4ffd07fce2b89065937c3f6eec4cc7052d074ee54c0eb8baa8c99_prof);

        
        $__internal_f6e151b28a9a9d9af11a826420a5da5563705db3863d84332985d02441a4cd00->leave($__internal_f6e151b28a9a9d9af11a826420a5da5563705db3863d84332985d02441a4cd00_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/maestrojosiah/projects/fix/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
