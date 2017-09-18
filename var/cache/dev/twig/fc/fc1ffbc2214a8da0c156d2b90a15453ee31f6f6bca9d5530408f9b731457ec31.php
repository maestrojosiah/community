<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2b26a2c721ce7342ea4dd3c2ffaad633789db21e974d727b9f586a9e3e118739 extends Twig_Template
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
        $__internal_4996755abdf88cc3f4223bcb4a9e9fd6f125135f5a1d25ebdf2947847fb242f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4996755abdf88cc3f4223bcb4a9e9fd6f125135f5a1d25ebdf2947847fb242f5->enter($__internal_4996755abdf88cc3f4223bcb4a9e9fd6f125135f5a1d25ebdf2947847fb242f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a35c0e0722bd01e539be998992e7cc187b15e107f10eaaf2fdc3808411cd07f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35c0e0722bd01e539be998992e7cc187b15e107f10eaaf2fdc3808411cd07f2->enter($__internal_a35c0e0722bd01e539be998992e7cc187b15e107f10eaaf2fdc3808411cd07f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_4996755abdf88cc3f4223bcb4a9e9fd6f125135f5a1d25ebdf2947847fb242f5->leave($__internal_4996755abdf88cc3f4223bcb4a9e9fd6f125135f5a1d25ebdf2947847fb242f5_prof);

        
        $__internal_a35c0e0722bd01e539be998992e7cc187b15e107f10eaaf2fdc3808411cd07f2->leave($__internal_a35c0e0722bd01e539be998992e7cc187b15e107f10eaaf2fdc3808411cd07f2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_81a6aff3d682b8c6ea37fac6688c82ae7175c3e53aa5cf44b0067106522045f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a6aff3d682b8c6ea37fac6688c82ae7175c3e53aa5cf44b0067106522045f6->enter($__internal_81a6aff3d682b8c6ea37fac6688c82ae7175c3e53aa5cf44b0067106522045f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5adef7e11fe992ce14e2a2cf91d876c64548bde6cf32b7b0b2d46b82b556ed73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5adef7e11fe992ce14e2a2cf91d876c64548bde6cf32b7b0b2d46b82b556ed73->enter($__internal_5adef7e11fe992ce14e2a2cf91d876c64548bde6cf32b7b0b2d46b82b556ed73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5adef7e11fe992ce14e2a2cf91d876c64548bde6cf32b7b0b2d46b82b556ed73->leave($__internal_5adef7e11fe992ce14e2a2cf91d876c64548bde6cf32b7b0b2d46b82b556ed73_prof);

        
        $__internal_81a6aff3d682b8c6ea37fac6688c82ae7175c3e53aa5cf44b0067106522045f6->leave($__internal_81a6aff3d682b8c6ea37fac6688c82ae7175c3e53aa5cf44b0067106522045f6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_47b99d50652560bf74da18b0031b971ebaf9207c8ba23801f2e3f091258c8775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b99d50652560bf74da18b0031b971ebaf9207c8ba23801f2e3f091258c8775->enter($__internal_47b99d50652560bf74da18b0031b971ebaf9207c8ba23801f2e3f091258c8775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9683918525a5f0e6884fbd57aaf931f39c9c8b48930ea115ee23709aba1c328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9683918525a5f0e6884fbd57aaf931f39c9c8b48930ea115ee23709aba1c328->enter($__internal_e9683918525a5f0e6884fbd57aaf931f39c9c8b48930ea115ee23709aba1c328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e9683918525a5f0e6884fbd57aaf931f39c9c8b48930ea115ee23709aba1c328->leave($__internal_e9683918525a5f0e6884fbd57aaf931f39c9c8b48930ea115ee23709aba1c328_prof);

        
        $__internal_47b99d50652560bf74da18b0031b971ebaf9207c8ba23801f2e3f091258c8775->leave($__internal_47b99d50652560bf74da18b0031b971ebaf9207c8ba23801f2e3f091258c8775_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_50cebd4d1f114c358465fec27a1b8bbaf385df6554eb1637682227af8c0fa330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50cebd4d1f114c358465fec27a1b8bbaf385df6554eb1637682227af8c0fa330->enter($__internal_50cebd4d1f114c358465fec27a1b8bbaf385df6554eb1637682227af8c0fa330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19a2acedc84c0852cd36a7c66b9826aa9414140504a996f0e62190373d1d149e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a2acedc84c0852cd36a7c66b9826aa9414140504a996f0e62190373d1d149e->enter($__internal_19a2acedc84c0852cd36a7c66b9826aa9414140504a996f0e62190373d1d149e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19a2acedc84c0852cd36a7c66b9826aa9414140504a996f0e62190373d1d149e->leave($__internal_19a2acedc84c0852cd36a7c66b9826aa9414140504a996f0e62190373d1d149e_prof);

        
        $__internal_50cebd4d1f114c358465fec27a1b8bbaf385df6554eb1637682227af8c0fa330->leave($__internal_50cebd4d1f114c358465fec27a1b8bbaf385df6554eb1637682227af8c0fa330_prof);

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
", "@Twig/layout.html.twig", "/home/maestrojosiah/projects/fix/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
