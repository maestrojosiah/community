<?php

/* security/login.html.twig */
class __TwigTemplate_3c300f24af4e997d4955b7af902153938d7552164325f7dc86e1442f3bf517b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_428f1edfa4266cf19c85df5038dacd3b6043c8ed87ee467cfa4644a194ca5c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428f1edfa4266cf19c85df5038dacd3b6043c8ed87ee467cfa4644a194ca5c50->enter($__internal_428f1edfa4266cf19c85df5038dacd3b6043c8ed87ee467cfa4644a194ca5c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_2615ae8980dc66382ec3252c71cdbb4869e4a144d21056e12230f26aba33c722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2615ae8980dc66382ec3252c71cdbb4869e4a144d21056e12230f26aba33c722->enter($__internal_2615ae8980dc66382ec3252c71cdbb4869e4a144d21056e12230f26aba33c722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_428f1edfa4266cf19c85df5038dacd3b6043c8ed87ee467cfa4644a194ca5c50->leave($__internal_428f1edfa4266cf19c85df5038dacd3b6043c8ed87ee467cfa4644a194ca5c50_prof);

        
        $__internal_2615ae8980dc66382ec3252c71cdbb4869e4a144d21056e12230f26aba33c722->leave($__internal_2615ae8980dc66382ec3252c71cdbb4869e4a144d21056e12230f26aba33c722_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d59cc7ecb93d7ef1e7cabcbf4b418303322c6d29855b0995786f674a4ccf5c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59cc7ecb93d7ef1e7cabcbf4b418303322c6d29855b0995786f674a4ccf5c79->enter($__internal_d59cc7ecb93d7ef1e7cabcbf4b418303322c6d29855b0995786f674a4ccf5c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4a8e4a58092abfb020adeb2156b04589e6c33afb2c7138395bf84d944c4fadda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8e4a58092abfb020adeb2156b04589e6c33afb2c7138395bf84d944c4fadda->enter($__internal_4a8e4a58092abfb020adeb2156b04589e6c33afb2c7138395bf84d944c4fadda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "<div class=\"container\">
<div class=\"row\">
<div class=\"col-lg-8 col-md-10 mx-auto\">
<a href=\"#\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a>

  <div class=\"modal fade\" id=\"login-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\" data-backdrop=\"static\" data-keyboard=\"false\">
        <div class=\"modal-dialog\">
        <div class=\"loginmodal-container\">
          <h1>Login to Your Account</h1><br>

            <form class=\"form-signin\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">

            <h2 class=\"form-signin-heading\">Please log in</h2>
            <label for=\"username\" class=\"sr-only\">Email address</label>
            <input type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
            <label for=\"password\" class=\"sr-only\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"_remember_me\" value=\"remember-me\" checked> Remember me
              </label>
            </div>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Login</button>
            </form>
          <div class=\"login-help\">
          <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
        echo "\">Register</a> - <a href=\"#\">Forgot Password</a> - <a href=\"#\" class=\"pull-right\" data-dismiss=\"modal\">Cancel</a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_4a8e4a58092abfb020adeb2156b04589e6c33afb2c7138395bf84d944c4fadda->leave($__internal_4a8e4a58092abfb020adeb2156b04589e6c33afb2c7138395bf84d944c4fadda_prof);

        
        $__internal_d59cc7ecb93d7ef1e7cabcbf4b418303322c6d29855b0995786f674a4ccf5c79->leave($__internal_d59cc7ecb93d7ef1e7cabcbf4b418303322c6d29855b0995786f674a4ccf5c79_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97a1292ad726e87752094249fabab12e6c7e7d80dd21008f9482b4807bc74c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a1292ad726e87752094249fabab12e6c7e7d80dd21008f9482b4807bc74c19->enter($__internal_97a1292ad726e87752094249fabab12e6c7e7d80dd21008f9482b4807bc74c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_78e9ac7f3393cc35d122c42f32b6b71cf675335696a5787e70d6e68cf193ac7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e9ac7f3393cc35d122c42f32b6b71cf675335696a5787e70d6e68cf193ac7a->enter($__internal_78e9ac7f3393cc35d122c42f32b6b71cf675335696a5787e70d6e68cf193ac7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "  <script>
      \$(document).ready(function() {
          \$('#login-modal').modal('show');
      });
  </script>
";
        
        $__internal_78e9ac7f3393cc35d122c42f32b6b71cf675335696a5787e70d6e68cf193ac7a->leave($__internal_78e9ac7f3393cc35d122c42f32b6b71cf675335696a5787e70d6e68cf193ac7a_prof);

        
        $__internal_97a1292ad726e87752094249fabab12e6c7e7d80dd21008f9482b4807bc74c19->leave($__internal_97a1292ad726e87752094249fabab12e6c7e7d80dd21008f9482b4807bc74c19_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  110 => 41,  91 => 32,  77 => 21,  70 => 17,  58 => 7,  52 => 5,  50 => 4,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block content %}
{# {{ include('templates/nav.html.twig') }}\t\t\t 
 #}{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"container\">
<div class=\"row\">
<div class=\"col-lg-8 col-md-10 mx-auto\">
<a href=\"#\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a>

  <div class=\"modal fade\" id=\"login-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\" data-backdrop=\"static\" data-keyboard=\"false\">
        <div class=\"modal-dialog\">
        <div class=\"loginmodal-container\">
          <h1>Login to Your Account</h1><br>

            <form class=\"form-signin\" action=\"{{ path('login') }}\" method=\"post\">

            <h2 class=\"form-signin-heading\">Please log in</h2>
            <label for=\"username\" class=\"sr-only\">Email address</label>
            <input type=\"email\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
            <label for=\"password\" class=\"sr-only\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"_remember_me\" value=\"remember-me\" checked> Remember me
              </label>
            </div>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Login</button>
            </form>
          <div class=\"login-help\">
          <a href=\"{{path('user_registration')}}\">Register</a> - <a href=\"#\">Forgot Password</a> - <a href=\"#\" class=\"pull-right\" data-dismiss=\"modal\">Cancel</a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
{% block javascripts %}
  <script>
      \$(document).ready(function() {
          \$('#login-modal').modal('show');
      });
  </script>
{% endblock %}", "security/login.html.twig", "/home/maestrojosiah/projects/theNewWalk/app/Resources/views/security/login.html.twig");
    }
}
