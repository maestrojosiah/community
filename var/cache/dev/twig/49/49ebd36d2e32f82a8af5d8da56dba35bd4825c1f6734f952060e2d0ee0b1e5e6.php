<?php

/* default/home.html.twig */
class __TwigTemplate_e57bd55242da5349ec6dedb8f542ffb450dd1f80884bc8b2156f386e8e729810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86822c60cddbe7913f04b75b4e0af6d9856b671cc05ca4369ee15027a786514c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86822c60cddbe7913f04b75b4e0af6d9856b671cc05ca4369ee15027a786514c->enter($__internal_86822c60cddbe7913f04b75b4e0af6d9856b671cc05ca4369ee15027a786514c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $__internal_450c7f21062fa2a15400468660e469ca6e923f2d6fe8883bedc77c104df1879c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450c7f21062fa2a15400468660e469ca6e923f2d6fe8883bedc77c104df1879c->enter($__internal_450c7f21062fa2a15400468660e469ca6e923f2d6fe8883bedc77c104df1879c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86822c60cddbe7913f04b75b4e0af6d9856b671cc05ca4369ee15027a786514c->leave($__internal_86822c60cddbe7913f04b75b4e0af6d9856b671cc05ca4369ee15027a786514c_prof);

        
        $__internal_450c7f21062fa2a15400468660e469ca6e923f2d6fe8883bedc77c104df1879c->leave($__internal_450c7f21062fa2a15400468660e469ca6e923f2d6fe8883bedc77c104df1879c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_af436787b37adeec99585ea4239951dd4bebaafb045c9d485bd7ede40e0a938b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af436787b37adeec99585ea4239951dd4bebaafb045c9d485bd7ede40e0a938b->enter($__internal_af436787b37adeec99585ea4239951dd4bebaafb045c9d485bd7ede40e0a938b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dfb5627c7e6f3e663ef7f574a8f12d9dd4e90ee228539c1735dc16684c5070dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb5627c7e6f3e663ef7f574a8f12d9dd4e90ee228539c1735dc16684c5070dd->enter($__internal_dfb5627c7e6f3e663ef7f574a8f12d9dd4e90ee228539c1735dc16684c5070dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "  ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "page"), "method", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "page"), "method")))) {
            // line 5
            echo "    ";
            $context["nextPagez"] = ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "page"), "method") + 1);
            // line 6
            echo "  ";
        } else {
            // line 7
            echo "    ";
            $context["nextPagez"] = 2;
            // line 8
            echo "  ";
        }
        // line 9
        echo "    <!-- Main Content -->
    <div class=\"container\">
      <div class=\"row infinite-container\">
        <div class=\"col-lg-8 col-md-10 mx-auto infinite-item\">
          ";
        // line 13
        if ( !twig_test_empty(($context["posts"] ?? $this->getContext($context, "posts")))) {
            // line 14
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 15
                echo "            ";
                $context["postTitle"] = twig_replace_filter($this->getAttribute($context["post"], "title", array()), array(" " => "-", "’" => "", "'" => ""));
                // line 16
                echo "            <div class=\"post-preview\">
              <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_post", array("id" => $this->getAttribute($context["post"], "id", array()), "title" => ($context["postTitle"] ?? $this->getContext($context, "postTitle")))), "html", null, true);
                echo "\">
                <h2 class=\"post-title\">
                  ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "
                </h2>
                <h3 class=\"post-subtitle\">
                  _______________________________
                </h3>
              </a>
              <p class=\"post-meta\">Posted by
                <a href=\"#\"> ";
                // line 26
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "FirstName", array())), "html", null, true);
                echo "</a>
                on ";
                // line 27
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "F j o"), "html", null, true);
                echo "
                ";
                // line 28
                if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstName", array()) == $this->getAttribute($this->getAttribute($context["post"], "user", array()), "firstName", array())))) {
                    echo " | <a href=\"#\" data-toggle=\"modal\" data-target=\"#deleteModal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\">Delete</a> | <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_post", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\">Edit</a></p>";
                }
                // line 29
                echo "            </div>
            <hr>

            <!-- deleteModal -->
            <div class=\"modal fade\" id=\"deleteModal";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\" role=\"dialog\">
              <div class=\"modal-dialog modal-sm\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Delete?</h4>
                  </div>
                  <div class=\"modal-body\">
                    <p>Are you sure you want to delete \"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "\"?.</p>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    <a class=\"btn btn-danger\" href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_post", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\">Go ahead</a>
                  </div>
                </div>
              </div>
            </div>

          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "          ";
        }
        // line 53
        echo "          ";
        if ((array_key_exists("nextPage", $context) && (($context["nextPage"] ?? $this->getContext($context, "nextPage")) != "blank"))) {
            echo "       
            <a class=\"infinite-more-link\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => ($context["nextPage"] ?? $this->getContext($context, "nextPage")))), "html", null, true);
            echo "\" style=\"visibility: hidden;\"></a>
          ";
        }
        // line 56
        echo "        </div>
      </div>
    </div>
";
        
        $__internal_dfb5627c7e6f3e663ef7f574a8f12d9dd4e90ee228539c1735dc16684c5070dd->leave($__internal_dfb5627c7e6f3e663ef7f574a8f12d9dd4e90ee228539c1735dc16684c5070dd_prof);

        
        $__internal_af436787b37adeec99585ea4239951dd4bebaafb045c9d485bd7ede40e0a938b->leave($__internal_af436787b37adeec99585ea4239951dd4bebaafb045c9d485bd7ede40e0a938b_prof);

    }

    public function getTemplateName()
    {
        return "default/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 56,  161 => 54,  156 => 53,  153 => 52,  140 => 45,  133 => 41,  122 => 33,  116 => 29,  106 => 28,  102 => 27,  98 => 26,  88 => 19,  83 => 17,  80 => 16,  77 => 15,  72 => 14,  70 => 13,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
  {% if app.request.query.get(\"page\") is defined and app.request.query.get(\"page\") is not empty %}
    {% set nextPagez = app.request.query.get(\"page\") + 1 %}
  {% else %}
    {% set nextPagez = 2 %}
  {% endif %}
    <!-- Main Content -->
    <div class=\"container\">
      <div class=\"row infinite-container\">
        <div class=\"col-lg-8 col-md-10 mx-auto infinite-item\">
          {% if posts is not empty %}
          {% for post in posts %}
            {% set postTitle = post.title|replace({\" \": \"-\", \"’\": \"\", \"'\": \"\"}) %}
            <div class=\"post-preview\">
              <a href=\"{{ path('show_post', {'id':post.id, 'title':postTitle } ) }}\">
                <h2 class=\"post-title\">
                  {{ post.title }}
                </h2>
                <h3 class=\"post-subtitle\">
                  _______________________________
                </h3>
              </a>
              <p class=\"post-meta\">Posted by
                <a href=\"#\"> {{ post.user.FirstName|capitalize }}</a>
                on {{ post.created|date('F j o') }}
                {% if app.user and app.user.firstName == post.user.firstName %} | <a href=\"#\" data-toggle=\"modal\" data-target=\"#deleteModal{{ post.id }}\">Delete</a> | <a href=\"{{ path('edit_post', {'id': post.id } ) }}\" id=\"{{ post.id }}\">Edit</a></p>{% endif %}
            </div>
            <hr>

            <!-- deleteModal -->
            <div class=\"modal fade\" id=\"deleteModal{{ post.id }}\" role=\"dialog\">
              <div class=\"modal-dialog modal-sm\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Delete?</h4>
                  </div>
                  <div class=\"modal-body\">
                    <p>Are you sure you want to delete \"{{ post.title }}\"?.</p>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    <a class=\"btn btn-danger\" href=\"{{ path('delete_post', {'id': post.id } ) }}\">Go ahead</a>
                  </div>
                </div>
              </div>
            </div>

          {% endfor %}
          {% endif %}
          {% if nextPage is defined and nextPage != \"blank\" %}       
            <a class=\"infinite-more-link\" href=\"{{ path('homepage', {'page':nextPage} ) }}\" style=\"visibility: hidden;\"></a>
          {% endif %}
        </div>
      </div>
    </div>
{% endblock %}
", "default/home.html.twig", "/home/maestrojosiah/projects/fix/app/Resources/views/default/home.html.twig");
    }
}
