<?php

/* post/post.html.twig */
class __TwigTemplate_c757dd549f0db430c99c0e2d93c5f6fe27907bec3b5635cc6c8c94e093198ee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/post.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2b83edc8bca5347e5f430cfe4d865f0dcd278083786d6a06f7a8fb39f0daf46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b83edc8bca5347e5f430cfe4d865f0dcd278083786d6a06f7a8fb39f0daf46->enter($__internal_a2b83edc8bca5347e5f430cfe4d865f0dcd278083786d6a06f7a8fb39f0daf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/post.html.twig"));

        $__internal_72e8624c9b6bacfb38e05b84b0165f16e7b9632417feaa5f0a19078254383cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e8624c9b6bacfb38e05b84b0165f16e7b9632417feaa5f0a19078254383cb5->enter($__internal_72e8624c9b6bacfb38e05b84b0165f16e7b9632417feaa5f0a19078254383cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2b83edc8bca5347e5f430cfe4d865f0dcd278083786d6a06f7a8fb39f0daf46->leave($__internal_a2b83edc8bca5347e5f430cfe4d865f0dcd278083786d6a06f7a8fb39f0daf46_prof);

        
        $__internal_72e8624c9b6bacfb38e05b84b0165f16e7b9632417feaa5f0a19078254383cb5->leave($__internal_72e8624c9b6bacfb38e05b84b0165f16e7b9632417feaa5f0a19078254383cb5_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_9eca90b2715f7ed43702b0a070decf7e4983ff69c771afb4610891266a8e8512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eca90b2715f7ed43702b0a070decf7e4983ff69c771afb4610891266a8e8512->enter($__internal_9eca90b2715f7ed43702b0a070decf7e4983ff69c771afb4610891266a8e8512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_cd7350ba565f875dc4f6a3a1942403938905546665f22841f1d06b8cb86ba564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7350ba565f875dc4f6a3a1942403938905546665f22841f1d06b8cb86ba564->enter($__internal_cd7350ba565f875dc4f6a3a1942403938905546665f22841f1d06b8cb86ba564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image: url('";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/post-bg.jpg"), "html", null, true);
        echo "')\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"post-heading\">
              <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>
              <h2 class=\"subheading\">__________________________</h2>
              <span class=\"meta\">Posted by
                <a href=\"#\"> ";
        // line 12
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "FirstName", array())), "html", null, true);
        echo "</a>
                on ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "created", array()), "F j o"), "html", null, true);
        echo "
                ";
        // line 14
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstName", array()) == $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "firstName", array())))) {
            // line 15
            echo "                 | <a href=\"#\" data-toggle=\"modal\" data-target=\"#deleteModal";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
            echo "\">
                    Delete
                  </a>
                  | <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_post", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
            echo "\">
                    Edit
                  </a>
                ";
        }
        // line 22
        echo "              </span>
               <br /><br />
              ";
        // line 24
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 25
            echo "                <button type=\"button\" class=\"btn btn-outline btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#createModal\">Create Post</button>
              ";
        }
        // line 27
        echo "
            </div>
          </div>
        </div>
      </div>
    </header>
      <!-- Modal -->
    <div class=\"modal fade\" id=\"deleteModal";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" role=\"dialog\">
      <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">Delete?</h4>
          </div>
          <div class=\"modal-body\">
            <p>Are you sure you want to delete \"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "\"?.</p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            <a class=\"btn btn-danger\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_post", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Go ahead</a>
          </div>
        </div>
      </div>
    </div>

    ";
        
        $__internal_cd7350ba565f875dc4f6a3a1942403938905546665f22841f1d06b8cb86ba564->leave($__internal_cd7350ba565f875dc4f6a3a1942403938905546665f22841f1d06b8cb86ba564_prof);

        
        $__internal_9eca90b2715f7ed43702b0a070decf7e4983ff69c771afb4610891266a8e8512->leave($__internal_9eca90b2715f7ed43702b0a070decf7e4983ff69c771afb4610891266a8e8512_prof);

    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b85c4d496fdffca6262d2e2fcd9c22c38aae8419fcc82a4f7ff82fe40e61116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b85c4d496fdffca6262d2e2fcd9c22c38aae8419fcc82a4f7ff82fe40e61116->enter($__internal_8b85c4d496fdffca6262d2e2fcd9c22c38aae8419fcc82a4f7ff82fe40e61116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_764d37448e3159d8d289f599d2f7c7bf78d6bb2e098fa08987220a42a3152797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764d37448e3159d8d289f599d2f7c7bf78d6bb2e098fa08987220a42a3152797->enter($__internal_764d37448e3159d8d289f599d2f7c7bf78d6bb2e098fa08987220a42a3152797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 55
        echo "    <!-- Post Content -->
    <article>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">

            ";
        // line 61
        echo $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "body", array());
        echo "
          <div class=\"stats\">
            ";
        // line 63
        if ((($context["liked"] ?? $this->getContext($context, "liked")) == true)) {
            echo " ";
            $context["like_class"] = "primary";
            echo " ";
        } else {
            echo " ";
            $context["like_class"] = "default";
            echo " ";
        }
        // line 64
        echo "              <span id=\"likeArticle_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-";
        echo twig_escape_filter($this->env, ($context["like_class"] ?? $this->getContext($context, "like_class")), "html", null, true);
        echo " stat-item bg-faded\" style=\"border-color:#ccc; cursor:pointer;\" title=\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "likes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["like"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["like"], "user", array()), "firstName", array()), "html", null, true);
            echo " , ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['like'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
                  <i class=\"fa fa-thumbs-up icon\"></i><span id=\"countLikes\">  ";
        // line 65
        echo twig_escape_filter($this->env, ($context["likes"] ?? $this->getContext($context, "likes")), "html", null, true);
        echo " </span>
              </span>
          </div>     
          </div>
          <section id=\"commentHolder\" class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"titleBox\">
              <label>Comments</label>
                <button type=\"button\" class=\"close\" aria-hidden=\"true\">&times;</button>
            </div>
            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "comments", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 75
            echo "            ";
            if (twig_test_empty($this->getAttribute($context["comment"], "replies", array()))) {
                // line 76
                echo "              ";
                $context["classText"] = "display:none;";
                // line 77
                echo "              ";
                $context["direction"] = "down";
                // line 78
                echo "            ";
            } else {
                // line 79
                echo "              ";
                $context["classText"] = "";
                // line 80
                echo "              ";
                $context["direction"] = "";
                // line 81
                echo "            ";
            }
            // line 82
            echo "            <div class=\"commentBox\">
               <div id=\"comment";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\" class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                      <strong>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "firstName", array()), "html", null, true);
            echo "</strong> <span class=\"text-muted\">commented on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "F jS, Y"), "html", null, true);
            echo "</span>
                      ";
            // line 86
            if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
                // line 87
                echo "                        ";
                if ((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstName", array()) == $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "firstName", array()))) || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstName", array()) == $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "firstName", array())))) {
                    // line 88
                    echo "                         | <a href=\"#\" class=\"text-muted sm-text\" data-toggle=\"modal\" data-target=\"#deleteCommentModal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                    echo "\">
                            Delete
                          </a>
                          | <span style=\"cursor: pointer;\" class=\"text-muted sm-text\" id=\"editComment_";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                    echo "\">
                            Edit
                          </span>
                        ";
                }
                // line 95
                echo "                      ";
            }
            // line 96
            echo "
                  </div>
                  <div class=\"panel-body\">
                      <p id=\"commentBody_";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "body", array()), "html", null, true);
            echo " </p>
                  </div>
                  <button type=\"button\" style=\"display:none;\" id=\"updateComment_";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">Done</button>
                  ";
            // line 102
            if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
                // line 103
                echo "                  <div class=\"panel-footer\">
                      <span title=\"click here to reply to ";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "firstName", array()), "html", null, true);
                echo "\" style=\"cursor: pointer;\" class=\"sm-text\" id=\"reply_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\"><mark>Reply to ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "firstName", array()), "html", null, true);
                echo "'s comment</mark><i class=\"fa fa-chevron-";
                echo twig_escape_filter($this->env, ($context["direction"] ?? $this->getContext($context, "direction")), "html", null, true);
                echo "\"></i></span>
                  </div>  
                  ";
            } else {
                // line 107
                echo "                  <div class=\"panel-footer\">
                    <span  class=\"date sm-text\"><a href=\"";
                // line 108
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
                echo "\">Login</a> or <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
                echo "\">Register</a> to participate.</span>
                  </div>                      
                  ";
            }
            // line 110
            echo "                
              </div>
            </div>
            <div class=\"actionBox\" id=\"commentReplyHolder_";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\" style=\"";
            echo twig_escape_filter($this->env, ($context["classText"] ?? $this->getContext($context, "classText")), "html", null, true);
            echo "\" >
                <ul id=\"commentList_";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\" class=\"commentList\">
                  ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["comment"], "replies", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                // line 116
                echo "                    <!-- set profile picture if present -->
                  ";
                // line 117
                $context["link_to_profile_picture"] = (("photos/default_" . $this->getAttribute($this->getAttribute($context["reply"], "user", array()), "gender", array())) . ".png");
                // line 118
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["reply"], "user", array()), "photos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                    // line 119
                    echo "                    ";
                    if (($this->getAttribute($context["photo"], "profile", array()) == true)) {
                        // line 120
                        echo "                      ";
                        $context["link_to_profile_picture"] = ("photos/profile/" . $this->getAttribute($context["photo"], "filename", array()));
                        // line 121
                        echo "                    ";
                    }
                    // line 122
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "                    <li id=\"reply";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "id", array()), "html", null, true);
                echo "\">
                        <div class=\"commenterImage\">
                          <img src=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["link_to_profile_picture"] ?? $this->getContext($context, "link_to_profile_picture"))), "html", null, true);
                echo "\" style=\"width:30px; height:30px;\"/>
                        </div>
                        <div class=\"commentText\">
                            <p id=\"replyBody_";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "id", array()), "html", null, true);
                echo "\" class=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "body", array()), "html", null, true);
                echo "</p> 
                            <button type=\"button\" style=\"display:none;\" id=\"updateReply_";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-default\">Done</button>
                            <span class=\"date sub-text\">
                              ";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reply"], "user", array()), "firstName", array()), "html", null, true);
                echo " on ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reply"], "created", array()), "F jS, Y"), "html", null, true);
                echo "
                              ";
                // line 132
                if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
                    // line 133
                    echo "                                ";
                    if ((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstName", array()) == $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "user", array()), "firstName", array()))) || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "firstName", array()) == $this->getAttribute($this->getAttribute($context["reply"], "user", array()), "firstName", array())))) {
                        // line 134
                        echo "                                | <a style=\"cursor: pointer;\" class=\"text-muted\" id=\"deleteReply_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "id", array()), "html", null, true);
                        echo "\">
                                  Delete
                                </a>
                                | <a style=\"cursor: pointer;\" class=\"text-muted\" id=\"editReply_";
                        // line 137
                        echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "id", array()), "html", null, true);
                        echo "\">
                                  Edit
                                </a>
                                ";
                    }
                    // line 141
                    echo "                              ";
                }
                // line 142
                echo "                            </span>
                        </div>
                    </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "                </ul>
               ";
            // line 147
            echo twig_include($this->env, $context, "templates/commentReply.html.twig");
            echo "       
            </div>

      <!-- Delete comment Modal -->
    <div class=\"modal fade\" id=\"deleteCommentModal";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\" role=\"dialog\">
      <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">Delete?</h4>
          </div>
          <div class=\"modal-body\">
            <p>Are you sure you want to delete \"";
            // line 159
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["comment"], "body", array())) > 20)) ? ((twig_slice($this->env, $this->getAttribute($context["comment"], "body", array()), 0, 20) . "...")) : ($this->getAttribute($context["comment"], "body", array()))), "html", null, true);
            echo "\"?.</p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            <a class=\"btn btn-danger\" href=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_comment", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">Go ahead</a>
          </div>
        </div>
      </div>
    </div>

          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "          </section>
           <div class=\"actionBox col-lg-8 col-md-10 mx-auto\">
            <h5>Your comment about this article</h5>
             ";
        // line 173
        echo twig_include($this->env, $context, "templates/comment.html.twig");
        echo "
           </div>
        </div>
      </div>
    </article>
";
        
        $__internal_764d37448e3159d8d289f599d2f7c7bf78d6bb2e098fa08987220a42a3152797->leave($__internal_764d37448e3159d8d289f599d2f7c7bf78d6bb2e098fa08987220a42a3152797_prof);

        
        $__internal_8b85c4d496fdffca6262d2e2fcd9c22c38aae8419fcc82a4f7ff82fe40e61116->leave($__internal_8b85c4d496fdffca6262d2e2fcd9c22c38aae8419fcc82a4f7ff82fe40e61116_prof);

    }

    public function getTemplateName()
    {
        return "post/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 173,  479 => 170,  458 => 163,  451 => 159,  440 => 151,  433 => 147,  430 => 146,  421 => 142,  418 => 141,  411 => 137,  404 => 134,  401 => 133,  399 => 132,  393 => 131,  388 => 129,  382 => 128,  376 => 125,  370 => 123,  364 => 122,  361 => 121,  358 => 120,  355 => 119,  350 => 118,  348 => 117,  345 => 116,  341 => 115,  337 => 114,  331 => 113,  326 => 110,  318 => 108,  315 => 107,  303 => 104,  300 => 103,  298 => 102,  294 => 101,  287 => 99,  282 => 96,  279 => 95,  272 => 91,  265 => 88,  262 => 87,  260 => 86,  254 => 85,  249 => 83,  246 => 82,  243 => 81,  240 => 80,  237 => 79,  234 => 78,  231 => 77,  228 => 76,  225 => 75,  208 => 74,  196 => 65,  179 => 64,  169 => 63,  164 => 61,  156 => 55,  147 => 54,  130 => 46,  123 => 42,  112 => 34,  103 => 27,  99 => 25,  97 => 24,  93 => 22,  84 => 18,  77 => 15,  75 => 14,  71 => 13,  67 => 12,  61 => 9,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
    {% block header %}
    <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image: url('{{ asset('img/post-bg.jpg') }}')\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"post-heading\">
              <h1>{{ post.title }}</h1>
              <h2 class=\"subheading\">__________________________</h2>
              <span class=\"meta\">Posted by
                <a href=\"#\"> {{ post.user.FirstName|capitalize }}</a>
                on {{ post.created|date('F j o') }}
                {% if app.user and app.user.firstName == post.user.firstName %}
                 | <a href=\"#\" data-toggle=\"modal\" data-target=\"#deleteModal{{ post.id }}\">
                    Delete
                  </a>
                  | <a href=\"{{ path('edit_post', {'id': post.id } ) }}\" id=\"{{ post.id }}\">
                    Edit
                  </a>
                {% endif %}
              </span>
               <br /><br />
              {% if app.user %}
                <button type=\"button\" class=\"btn btn-outline btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#createModal\">Create Post</button>
              {% endif %}

            </div>
          </div>
        </div>
      </div>
    </header>
      <!-- Modal -->
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

    {% endblock %}

{% block content %}
    <!-- Post Content -->
    <article>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">

            {{ post.body|raw }}
          <div class=\"stats\">
            {% if liked == true %} {% set like_class = \"primary\" %} {% else %} {% set like_class = \"default\" %} {% endif %}
              <span id=\"likeArticle_{{post.id}}\" class=\"btn btn-{{like_class}} stat-item bg-faded\" style=\"border-color:#ccc; cursor:pointer;\" title=\"{% for like in post.likes %}{{ like.user.firstName }} , {% endfor %}\">
                  <i class=\"fa fa-thumbs-up icon\"></i><span id=\"countLikes\">  {{ likes }} </span>
              </span>
          </div>     
          </div>
          <section id=\"commentHolder\" class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"titleBox\">
              <label>Comments</label>
                <button type=\"button\" class=\"close\" aria-hidden=\"true\">&times;</button>
            </div>
            {% for comment in post.comments %}
            {% if comment.replies is empty %}
              {% set classText = \"display:none;\" %}
              {% set direction = \"down\" %}
            {% else %}
              {% set classText = \"\" %}
              {% set direction = \"\" %}
            {% endif %}
            <div class=\"commentBox\">
               <div id=\"comment{{comment.id}}\" class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                      <strong>{{ comment.user.firstName }}</strong> <span class=\"text-muted\">commented on {{ comment.created | date('F jS, Y') }}</span>
                      {% if app.user %}
                        {% if app.user and app.user.firstName == post.user.firstName or app.user.firstName == comment.user.firstName %}
                         | <a href=\"#\" class=\"text-muted sm-text\" data-toggle=\"modal\" data-target=\"#deleteCommentModal{{ comment.id }}\">
                            Delete
                          </a>
                          | <span style=\"cursor: pointer;\" class=\"text-muted sm-text\" id=\"editComment_{{ comment.id }}\">
                            Edit
                          </span>
                        {% endif %}
                      {% endif %}

                  </div>
                  <div class=\"panel-body\">
                      <p id=\"commentBody_{{comment.id}}\">{{ comment.body }} </p>
                  </div>
                  <button type=\"button\" style=\"display:none;\" id=\"updateComment_{{comment.id}}\" class=\"btn btn-default\">Done</button>
                  {% if app.user %}
                  <div class=\"panel-footer\">
                      <span title=\"click here to reply to {{ comment.user.firstName }}\" style=\"cursor: pointer;\" class=\"sm-text\" id=\"reply_{{ comment.id }}\"><mark>Reply to {{ comment.user.firstName }}'s comment</mark><i class=\"fa fa-chevron-{{direction}}\"></i></span>
                  </div>  
                  {% else %}
                  <div class=\"panel-footer\">
                    <span  class=\"date sm-text\"><a href=\"{{ path('login') }}\">Login</a> or <a href=\"{{ path('user_registration') }}\">Register</a> to participate.</span>
                  </div>                      
                  {% endif %}                
              </div>
            </div>
            <div class=\"actionBox\" id=\"commentReplyHolder_{{comment.id}}\" style=\"{{ classText }}\" >
                <ul id=\"commentList_{{comment.id}}\" class=\"commentList\">
                  {% for reply in comment.replies %}
                    <!-- set profile picture if present -->
                  {% set link_to_profile_picture = \"photos/default_\" ~ reply.user.gender ~ \".png\" %}
                  {% for photo in reply.user.photos %}
                    {% if photo.profile == true %}
                      {% set link_to_profile_picture = \"photos/profile/\" ~ photo.filename %}
                    {% endif %}
                  {% endfor %}
                    <li id=\"reply{{reply.id}}\">
                        <div class=\"commenterImage\">
                          <img src=\"{{ asset(link_to_profile_picture) }}\" style=\"width:30px; height:30px;\"/>
                        </div>
                        <div class=\"commentText\">
                            <p id=\"replyBody_{{reply.id}}\" class=\"\">{{ reply.body }}</p> 
                            <button type=\"button\" style=\"display:none;\" id=\"updateReply_{{reply.id}}\" class=\"btn btn-default\">Done</button>
                            <span class=\"date sub-text\">
                              {{ reply.user.firstName }} on {{ reply.created | date('F jS, Y') }}
                              {% if app.user %}
                                {% if app.user and app.user.firstName == post.user.firstName or app.user.firstName == reply.user.firstName %}
                                | <a style=\"cursor: pointer;\" class=\"text-muted\" id=\"deleteReply_{{ reply.id }}\">
                                  Delete
                                </a>
                                | <a style=\"cursor: pointer;\" class=\"text-muted\" id=\"editReply_{{ reply.id }}\">
                                  Edit
                                </a>
                                {% endif %}
                              {% endif %}
                            </span>
                        </div>
                    </li>
                  {% endfor %}
                </ul>
               {{ include('templates/commentReply.html.twig') }}       
            </div>

      <!-- Delete comment Modal -->
    <div class=\"modal fade\" id=\"deleteCommentModal{{ comment.id }}\" role=\"dialog\">
      <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">Delete?</h4>
          </div>
          <div class=\"modal-body\">
            <p>Are you sure you want to delete \"{{ comment.body|length > 20 ? comment.body|slice(0, 20) ~ '...' : comment.body  }}\"?.</p>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            <a class=\"btn btn-danger\" href=\"{{ path('delete_comment', {'id': comment.id } ) }}\">Go ahead</a>
          </div>
        </div>
      </div>
    </div>

          {% endfor %}
          </section>
           <div class=\"actionBox col-lg-8 col-md-10 mx-auto\">
            <h5>Your comment about this article</h5>
             {{ include('templates/comment.html.twig') }}
           </div>
        </div>
      </div>
    </article>
{% endblock %}
", "post/post.html.twig", "/home/maestrojosiah/projects/theNewWalk/app/Resources/views/post/post.html.twig");
    }
}
