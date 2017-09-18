<?php

/* templates/createModal.html.twig */
class __TwigTemplate_97c019a8254576555b51d7e7dd17af4dc0abb2228ea913c4b362c403127a9f12 extends Twig_Template
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
        $__internal_9d48b8c8ace6d8cc927bb0c0cf2618df7c75ebd24a0d12dab25b715a3713b6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d48b8c8ace6d8cc927bb0c0cf2618df7c75ebd24a0d12dab25b715a3713b6b7->enter($__internal_9d48b8c8ace6d8cc927bb0c0cf2618df7c75ebd24a0d12dab25b715a3713b6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/createModal.html.twig"));

        $__internal_0366f6acc58b897760730e0607a808df3c0d955f6f2cb858c0d39a5f5745ead8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0366f6acc58b897760730e0607a808df3c0d955f6f2cb858c0d39a5f5745ead8->enter($__internal_0366f6acc58b897760730e0607a808df3c0d955f6f2cb858c0d39a5f5745ead8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/createModal.html.twig"));

        // line 1
        echo "    <!-- Post Content -->
    <article>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
\t\t    <!-- Modal -->
\t\t    <div class=\"modal fade\" id=\"createModal\" role=\"dialog\" aria-labelledby=\"createModal\" aria-hidden=\"true\" data-backdrop=\"static\" data-keyboard=\"false\">
\t\t        <div class=\"modal-dialog\">
\t\t            <div class=\"modal-content\">
\t\t                <div class=\"modal-header\">
\t\t                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t                    <h4 class=\"modal-title\" id=\"createModalLabel\">Share with us</h4>
\t\t                </div>
\t\t                <div class=\"modal-body\">
\t\t                    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post"));
        echo "
\t\t                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
\t\t                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Post Title")));
        echo "
\t\t                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "body", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t\t                </div>
\t\t                <div class=\"modal-footer\">
\t\t                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t                    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t                </div>
\t\t            </div>
\t\t            <!-- /.modal-content -->
\t\t        </div>
\t\t        <!-- /.modal-dialog -->
\t\t    </div>
\t\t    <!-- /.modal -->
\t\t    <!-- /.modal -->
          </div>
        </div>
      </div>
    </article>
";
        
        $__internal_9d48b8c8ace6d8cc927bb0c0cf2618df7c75ebd24a0d12dab25b715a3713b6b7->leave($__internal_9d48b8c8ace6d8cc927bb0c0cf2618df7c75ebd24a0d12dab25b715a3713b6b7_prof);

        
        $__internal_0366f6acc58b897760730e0607a808df3c0d955f6f2cb858c0d39a5f5745ead8->leave($__internal_0366f6acc58b897760730e0607a808df3c0d955f6f2cb858c0d39a5f5745ead8_prof);

    }

    public function getTemplateName()
    {
        return "templates/createModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  60 => 22,  53 => 18,  49 => 17,  45 => 16,  41 => 15,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <!-- Post Content -->
    <article>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
\t\t    <!-- Modal -->
\t\t    <div class=\"modal fade\" id=\"createModal\" role=\"dialog\" aria-labelledby=\"createModal\" aria-hidden=\"true\" data-backdrop=\"static\" data-keyboard=\"false\">
\t\t        <div class=\"modal-dialog\">
\t\t            <div class=\"modal-content\">
\t\t                <div class=\"modal-header\">
\t\t                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t                    <h4 class=\"modal-title\" id=\"createModalLabel\">Share with us</h4>
\t\t                </div>
\t\t                <div class=\"modal-body\">
\t\t                    {{ form_start(form, {'method': 'post'} ) }}
\t\t                    {{ form_errors(form) }}
\t\t                    {{ form_row(form.title, {'attr': {'class': 'form-control', 'placeholder': 'Post Title' }} ) }}
\t\t                    {{ form_row(form.body, {'attr': {'class': 'form-control' }} ) }}
\t\t                </div>
\t\t                <div class=\"modal-footer\">
\t\t                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t                    {{ form_row(form.save, {'attr': {'class': 'btn btn-primary' }} ) }}
\t\t                    {{ form_end(form) }}
\t\t                </div>
\t\t            </div>
\t\t            <!-- /.modal-content -->
\t\t        </div>
\t\t        <!-- /.modal-dialog -->
\t\t    </div>
\t\t    <!-- /.modal -->
\t\t    <!-- /.modal -->
          </div>
        </div>
      </div>
    </article>
", "templates/createModal.html.twig", "/home/maestrojosiah/projects/theNewWalk/app/Resources/views/templates/createModal.html.twig");
    }
}
