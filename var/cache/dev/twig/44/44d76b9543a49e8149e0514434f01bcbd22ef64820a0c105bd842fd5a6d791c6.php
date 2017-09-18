<?php

/* templates/comment.html.twig */
class __TwigTemplate_c2c1a92848ebf6118a1f57191fda7a8315428a12c5ebb1026f1574a227b4c21a extends Twig_Template
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
        $__internal_d7fe14d3a07bdcc88b4b1ad315fe110262f3dece310fdf3578ad6da701a70742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7fe14d3a07bdcc88b4b1ad315fe110262f3dece310fdf3578ad6da701a70742->enter($__internal_d7fe14d3a07bdcc88b4b1ad315fe110262f3dece310fdf3578ad6da701a70742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/comment.html.twig"));

        $__internal_5ca4032cb1690784da36e008f1eb82e35fe3d609bf898637c3f0bf93222d163a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca4032cb1690784da36e008f1eb82e35fe3d609bf898637c3f0bf93222d163a->enter($__internal_5ca4032cb1690784da36e008f1eb82e35fe3d609bf898637c3f0bf93222d163a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/comment.html.twig"));

        // line 1
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 2
            echo "<form class=\"\" role=\"form\" style=\"width:100%!important\">
  <div class=\"\">
      <textarea class=\"form-control\" id=\"comment\" placeholder=\"Your comment\"></textarea>
  </div>
  <div class=\"\">
      <button type=\"button\" id=\"addComment_";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">Comment</a>
  </div>
</form>
";
        }
        
        $__internal_d7fe14d3a07bdcc88b4b1ad315fe110262f3dece310fdf3578ad6da701a70742->leave($__internal_d7fe14d3a07bdcc88b4b1ad315fe110262f3dece310fdf3578ad6da701a70742_prof);

        
        $__internal_5ca4032cb1690784da36e008f1eb82e35fe3d609bf898637c3f0bf93222d163a->leave($__internal_5ca4032cb1690784da36e008f1eb82e35fe3d609bf898637c3f0bf93222d163a_prof);

    }

    public function getTemplateName()
    {
        return "templates/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  27 => 2,  25 => 1,);
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
<form class=\"\" role=\"form\" style=\"width:100%!important\">
  <div class=\"\">
      <textarea class=\"form-control\" id=\"comment\" placeholder=\"Your comment\"></textarea>
  </div>
  <div class=\"\">
      <button type=\"button\" id=\"addComment_{{ post.id }}\" class=\"btn btn-default\">Comment</a>
  </div>
</form>
{% endif %}", "templates/comment.html.twig", "/home/maestrojosiah/projects/theNewWalk/app/Resources/views/templates/comment.html.twig");
    }
}
