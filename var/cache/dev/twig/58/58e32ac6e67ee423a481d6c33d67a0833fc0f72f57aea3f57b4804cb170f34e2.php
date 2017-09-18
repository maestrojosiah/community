<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_076b89db9181db76c5f079a5120972c0d1d66c0dd8b28eddbae7c847c090ae84 extends Twig_Template
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
        $__internal_a3564ef1f9d4e6d727655a579cb395c346477b29e9584e26272314f126cce9e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3564ef1f9d4e6d727655a579cb395c346477b29e9584e26272314f126cce9e8->enter($__internal_a3564ef1f9d4e6d727655a579cb395c346477b29e9584e26272314f126cce9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_6ac1f74ba5569322d24751bf5e01e7d1c9e076528ea1c35a923a8b2290c634b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac1f74ba5569322d24751bf5e01e7d1c9e076528ea1c35a923a8b2290c634b3->enter($__internal_6ac1f74ba5569322d24751bf5e01e7d1c9e076528ea1c35a923a8b2290c634b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_a3564ef1f9d4e6d727655a579cb395c346477b29e9584e26272314f126cce9e8->leave($__internal_a3564ef1f9d4e6d727655a579cb395c346477b29e9584e26272314f126cce9e8_prof);

        
        $__internal_6ac1f74ba5569322d24751bf5e01e7d1c9e076528ea1c35a923a8b2290c634b3->leave($__internal_6ac1f74ba5569322d24751bf5e01e7d1c9e076528ea1c35a923a8b2290c634b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/maestrojosiah/projects/theNewWalk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
