<?php

/* templates/commentReply.html.twig */
class __TwigTemplate_11eaf928359cdede0f242fd63e65b238bd2a8ff3ecf61a623be3133c6897e2c3 extends Twig_Template
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
        $__internal_cf33ee986c80301b80041a08791660c9c42f7c7d3a9a9e0a16ebca7db21c0dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf33ee986c80301b80041a08791660c9c42f7c7d3a9a9e0a16ebca7db21c0dbe->enter($__internal_cf33ee986c80301b80041a08791660c9c42f7c7d3a9a9e0a16ebca7db21c0dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/commentReply.html.twig"));

        $__internal_524ef41d0ee31be2ca30632aa2f0f38eac72ceff93f41a734584e6846a82b1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524ef41d0ee31be2ca30632aa2f0f38eac72ceff93f41a734584e6846a82b1b0->enter($__internal_524ef41d0ee31be2ca30632aa2f0f38eac72ceff93f41a734584e6846a82b1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/commentReply.html.twig"));

        // line 1
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 2
            echo "<form class=\"form-inline\" role=\"form\" style=\"width:100%!important\">
  <div class=\"form-group\">
      <input class=\"form-control\" id=\"commentReply_";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
            echo "\" type=\"text\" placeholder=\"Your reply\" />
  </div>
  <div class=\"form-group\">
      <button type=\"button\" id=\"addCommentReply_";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default btn-xs\">Reply</a>
  </div>
</form>
";
        }
        
        $__internal_cf33ee986c80301b80041a08791660c9c42f7c7d3a9a9e0a16ebca7db21c0dbe->leave($__internal_cf33ee986c80301b80041a08791660c9c42f7c7d3a9a9e0a16ebca7db21c0dbe_prof);

        
        $__internal_524ef41d0ee31be2ca30632aa2f0f38eac72ceff93f41a734584e6846a82b1b0->leave($__internal_524ef41d0ee31be2ca30632aa2f0f38eac72ceff93f41a734584e6846a82b1b0_prof);

    }

    public function getTemplateName()
    {
        return "templates/commentReply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.user %}
<form class=\"form-inline\" role=\"form\" style=\"width:100%!important\">
  <div class=\"form-group\">
      <input class=\"form-control\" id=\"commentReply_{{comment.id}}\" type=\"text\" placeholder=\"Your reply\" />
  </div>
  <div class=\"form-group\">
      <button type=\"button\" id=\"addCommentReply_{{comment.id}}\" class=\"btn btn-default btn-xs\">Reply</a>
  </div>
</form>
{% endif %}", "templates/commentReply.html.twig", "/home/maestrojosiah/projects/theNewWalk/app/Resources/views/templates/commentReply.html.twig");
    }
}
