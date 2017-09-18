<?php

/* base.html.twig */
class __TwigTemplate_b0d5c55dee9cf19806911ba2be1654523f9ba24e51e3dcc83c11893796e2e73b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'includeCreate' => array($this, 'block_includeCreate'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bab2964648c9186c11219f7e7a4f6c490cd78e092b602cbf8b04cca931a69bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bab2964648c9186c11219f7e7a4f6c490cd78e092b602cbf8b04cca931a69bf->enter($__internal_3bab2964648c9186c11219f7e7a4f6c490cd78e092b602cbf8b04cca931a69bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_86ab2bf00a462d26dd8adf01829112961b131ddaee8292577e2264d5f92dd846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ab2bf00a462d26dd8adf01829112961b131ddaee8292577e2264d5f92dd846->enter($__internal_86ab2bf00a462d26dd8adf01829112961b131ddaee8292577e2264d5f92dd846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- notiny CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("notiny/notiny.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/clean-blog.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/thenewwalk.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mgiletnotification/css/mgilet_notification.css"), "html", null, true);
        echo "\">

    <!-- styles for cropper -->    
    <link  href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("cropper/dist/cropper.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  </head>

  <body>

    ";
        // line 37
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 38
            echo "        ";
            $context["link"] = "homepage";
            // line 39
            echo "        ";
            $context["loggedIn"] = true;
            // line 40
            echo "    ";
        } else {
            // line 41
            echo "        ";
            $context["link"] = "login";
            // line 42
            echo "        ";
            $context["loggedIn"] = false;
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        if ( !array_key_exists("user", $context)) {
            // line 45
            echo "      ";
            $context["user"] = $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "user", array());
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 49
            echo "      ";
            if ((array_key_exists("profile_pic", $context) && (($context["profile_pic"] ?? $this->getContext($context, "profile_pic")) == false))) {
                // line 50
                echo "        ";
                $context["myProfPicLink"] = (("photos/default_" . $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "gender", array())) . ".png");
                // line 51
                echo "      ";
            } elseif ((array_key_exists("profile_pic", $context) && (($context["profile_pic"] ?? $this->getContext($context, "profile_pic")) == true))) {
                // line 52
                echo "        ";
                $context["myProfPicLink"] = ("photos/profile/" . ($context["profPic"] ?? $this->getContext($context, "profPic")));
                // line 53
                echo "      ";
            } else {
                // line 54
                echo "        ";
                $context["myProfPicLink"] = "";
                // line 55
                echo "      ";
            }
            // line 56
            echo "    ";
        }
        // line 57
        echo "
    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
      <div class=\"container\" style=\"position: relative;\">
        <a class=\"navbar-brand\" href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">HHES Blog</a>
        <form class=\"navbar-form\" role=\"search\">
        <div class=\"input-group\">
            <input type=\"text\" id=\"searchItem\" class=\"form-input form-control\" placeholder=\"Search\" name=\"q\">
            <button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
        </div>
        </form>
        <div class=\"panel panel-default\" id=\"searchResults\" style=\"position: absolute; left: 20px; top: 70px;\">
            <span id='close' style=\"display:none; cursor: pointer;\"><i class=\"fa fa-times\"></i></span>
              <div id=\"listGroup\" class=\"list-group\">
              </div>
        </div>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          Menu
          <i class=\"fa fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto navbar-top-links\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Blog</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"http://hheskenya.org\">Public Website</a>
            </li>
";
        // line 91
        echo "            ";
        echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->render(array("display" => "dropdown", "seen" => false));
        echo "            <li class=\"nav-item dropdown show\">
                 <a class=\"dropdown-toggle nav-link\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["link"] ?? $this->getContext($context, "link")));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</a>
                ";
        // line 93
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 94
            echo "                  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("slug" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "randomAuth", array()))), "html", null, true);
            echo "\">My account</a>
                    <a class=\"dropdown-item\" href=\"#\">My articles</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a>
                  </div>
                ";
        } else {
            // line 100
            echo "                  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"";
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
            echo "\">Register</a>
                  </div>
                ";
        }
        // line 105
        echo "            </li>
          </ul>
        </div>
      </div>
    </nav>

    ";
        // line 111
        $this->displayBlock('header', $context, $blocks);
        // line 130
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 131
        echo "
    <hr>

    <!-- Footer -->
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            <ul class=\"list-inline text-center\">
              <li class=\"list-inline-item\">
                <a href=\"#\">
                  <span class=\"fa-stack fa-lg\">
                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                    <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                  </span>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"#\">
                  <span class=\"fa-stack fa-lg\">
                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                    <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                  </span>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"#\">
                  <span class=\"fa-stack fa-lg\">
                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                    <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class=\"copyright text-muted\">Copyright &copy; Your Website 2017</p>
          </div>
        </div>
      </div>
    </footer>
    ";
        // line 170
        $this->displayBlock('includeCreate', $context, $blocks);
        // line 176
        echo "

    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Notification javascript - notiny -->
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("notiny/notiny.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/clean-blog.min.js"), "html", null, true);
        echo "\"></script>

    <!-- scripts for cropper -->
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("cropper/dist/cropper.js"), "html", null, true);
        echo "\"></script>
    <script type=\"application/javascript\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mgiletnotification/js/ajax-notification.js"), "html", null, true);
        echo "\"></script>

    <!-- Waypoint scroll plugin -->
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("waypoints/lib/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("waypoints/lib/shortcuts/infinite.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery.ns-autogrow/dist/jquery.ns-autogrow.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
      // \$('#image').cropper({
      //   aspectRatio: 9 / 9,
      //   crop: function(e) {
      //     // Output the result data for cropping image.
      //     console.log(e.x);
      //     console.log(e.y);
      //     console.log(e.width);
      //     console.log(e.height);
      //     console.log(e.rotate);
      //     console.log(e.scaleX);
      //     console.log(e.scaleY);
      //   }
      // });
    </script>

    <script type=\"text/javascript\">
      \$(document).on('click', '[id^=\"followNotif_\"]', function(){ 
        //when you click on \"comment\" button to repond to a post
        var nameId = jQuery(this).attr(\"id\");
        var arrStr = nameId.split(\"_\");
        var id = arrStr[1];
        \$.ajax({
            url:\"";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification_mark_as_seen_ajax");
        echo "\",
            type: \"POST\",
            dataType: \"json\",
            data: {
                \"id\": id,
            },
            async: true,
            success: function (data)
            {
              console.log(data.link);
              location.href = data.link;              
            }
        });
      });
    </script>    
    <script>
      \$( \"#searchItem\" ).keyup(function( event ) {
        var value = \$(this).val();
        if(\$(\"#searchItem\").val().length >= 3) {
          \$.ajax({
              url:'";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_matches");
        echo "',
              type: \"POST\",
              dataType: \"json\",
              data: {
                  \"thisValue\": value,
              },
              async: true,
              success: function (data)
              {
                 console.log(data);
                 \$( \"#listGroup\" ).empty();
                \$.each(data.combined, function( key, value ) {
                  
                    \$(\"#listGroup\").append('<a href=\"'+key+'\" class=\"list-group-item list-group-item-action\">...'+value+'...</a>');
                  
                });
                
              }
          });
        }

      });
    </script>

    <script>
    \$(document).on('click', '[id^=\"addComment_\"]', function(){ 
      //when you click on \"comment\" button to repond to a post
      var nameId = jQuery(this).attr(\"id\");
      var arrStr = nameId.split(\"_\");
      var id = arrStr[1];
  
      var comment = \$(\"#comment\").val();

      \$.ajax({
            url:'";
        // line 274
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_comment");
        echo "',
            type: \"POST\",
            dataType: \"json\",
            data: {
                \"comment\": comment,
                \"id\": id,
            },
            async: true,
            success: function (data)
            {
              console.log(data.comment);
              \$(\"#commentHolder\").append(data.comment);
              \$(\"#comment\").val(\"\");
            }
        });

      });
    </script>
";
        // line 292
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 293
            echo "    <script>
    \$(document).on('click', '[id^=\"makeProfile_\"]', function(){ 
      //when you click on \"make profile\" button to change profile picture
      var nameId = jQuery(this).attr(\"id\");
      var arrStr = nameId.split(\"_\");
      var id = arrStr[1];
  
      \$.ajax({
            url:'";
            // line 301
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("make_profile_picture");
            echo "',
            type: \"POST\",
            dataType: \"json\",
            data: {
                \"id\": id,
            },
            async: true,
            success: function (data)
            {
                location.href = \"";
            // line 310
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("slug" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "randomAuth", array()))), "html", null, true);
            echo "\";
            }
        });

      });
    </script>
";
        }
        // line 317
        echo "    <script>
    \$(document).on('click', '[id^=\"updateComment_\"]', function(){ 
      //when you click on \"commentEdit\" button to edit a comment
      var nameId = jQuery(this).attr(\"id\");
      var arrStr = nameId.split(\"_\");
      var id = arrStr[1];
  
      var comment = \$(\"#commentBody_\"+id).text();

      \$.ajax({
            url:'";
        // line 327
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_comment");
        echo "',
            type: \"POST\",
            dataType: \"json\",
            data: {
                \"comment\": comment,
                \"id\": id,
            },
            async: true,
            success: function (data)
            {
              console.log(data.comment);
              \$(\"#commentBody_\"+id).val(data.comment);
              \$(\"#commentBody_\"+id).attr('contenteditable', 'false');        
              \$(\"#commentBody_\"+id).css(\"background-color\", \"white\"); 
              \$(\"#updateComment_\"+id).hide();     

            }
        });

      });
    </script>

    <script>
    \$(document).on('click', '[id^=\"updateReply_\"]', function(){ 
      //when you click on \"updateReply_\" button to edit a reply
      var nameId = jQuery(this).attr(\"id\");
      var arrStr = nameId.split(\"_\");
      var id = arrStr[1];
  
      var reply = \$(\"#replyBody_\"+id).text();

      \$.ajax({
            url:'";
        // line 359
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_reply");
        echo "',
            type: \"POST\",
            dataType: \"json\",
            data: {
                \"reply\": reply,
                \"id\": id,
            },
            async: true,
            success: function (data)
            {
              console.log(data.reply);
              \$(\"#replyBody_\"+id).val(data.reply);
              \$(\"#replyBody_\"+id).attr('contenteditable', 'false');        
              \$(\"#replyBody_\"+id).css(\"background-color\", \"white\"); 
              \$(\"#updateReply_\"+id).hide();     

            }
        });

      });
    </script>

    <script>
    \$(document).on('click', '[id^=\"deleteReply_\"]', function(){ 
      //when you click on \"deleteReply\" button to delete a reply
      var result = confirm(\"Are you sure you want to delete?\");
      if (result) {
        
        var nameId = jQuery(this).attr(\"id\");
        var arrStr = nameId.split(\"_\");
        var id = arrStr[1];

        \$.ajax({
              url:'";
        // line 392
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_reply");
        echo "',
              type: \"POST\",
              dataType: \"json\",
              data: {
                  \"id\": id,
              },
              async: true,
              success: function (data)
              {
                console.log(data.reply);
                \$(\"#replyBody_\"+id).parent().parent().hide();
              }
          });
      }

      });
    </script>

    <script>
    // make comment paragraph editable
    \$(document).on('click', '[id^=\"editComment_\"]', function(){ 
        var nameId = jQuery(this).attr(\"id\");
        var arrStr = nameId.split(\"_\");
        var id = arrStr[1]; 
        console.log(id);
        \$(\"#commentBody_\"+id).attr('contenteditable', 'true');        
        \$(\"#commentBody_\"+id).css(\"background-color\", \"#F4F9B4\"); 
        \$(\"#commentBody_\"+id).focus(); 
        \$(\"#updateComment_\"+id).show();     
      });
    </script>

    <script>
    // make reply paragraph editable
    \$(document).on('click', '[id^=\"editReply_\"]', function(){ 
        var nameId = jQuery(this).attr(\"id\");
        var arrStr = nameId.split(\"_\");
        var id = arrStr[1]; 
        console.log(id);
        \$(\"#replyBody_\"+id).attr('contenteditable', 'true');        
        \$(\"#replyBody_\"+id).css(\"background-color\", \"#F4F9B4\"); 
        \$(\"#replyBody_\"+id).focus(); 
        \$(\"#updateReply_\"+id).show();     
      });
    </script>
";
        // line 437
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 438
            echo "    <script>
    // click on reply button to respond to a comment
    \$(document).on('click', '[id^=\"addCommentReply_\"]', function(){ 
        var nameId = jQuery(this).attr(\"id\");
        var arrStr = nameId.split(\"_\");
        var id = arrStr[1];
    
        var commentReply = \$(\"#commentReply_\"+id).val();

        \$.ajax({
              url:'";
            // line 448
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_comment_reply");
            echo "',
              type: \"POST\",
              dataType: \"json\",
              data: {
                  \"commentReply\": commentReply,
                  \"id\": id,
              },
              async: true,
              success: function (data)
              {
                console.log(data.commentReply);
                var replyBeginning = '<li><div class=\"commenterImage\"><img src=\\'";
            // line 459
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["myProfPicLink"] ?? $this->getContext($context, "myProfPicLink"))), "html", null, true);
            echo "\\'style=\"width:30px; height:30px;\" /></div>';
                \$(\"#commentList_\"+id).append(replyBeginning + data.commentReply);
                \$(\"#commentReply_\"+id).val(\"\");
              }
          });

        });
    </script>
";
        }
        // line 468
        echo "    <script>
    // when clicking on enter in the reply to comment input
        \$(document).on('keypress', '[id^=\"commentReply_\"]', function(e){
           var key = e.which;
           if(key == 13){ 
            var nameId = jQuery(this).attr(\"id\");
            var arrStr = nameId.split(\"_\");
            var id = arrStr[1];

            \$(\"#addCommentReply_\"+id).click();
            return false;
          }
        });

    </script>
    <script>
    //toggle opening and closing the replies section of a comment
    \$(document).on('click', '[id^=\"reply_\"]', function(){ 
        var nameId = jQuery(this).attr(\"id\");
        var arrStr = nameId.split(\"_\");
        var id = arrStr[1];
        console.log(id); 
        \$(\"#commentReplyHolder_\"+id).toggle();
      });
    </script>

    <script type=\"text/javascript\">
    //infinite scrolling
        var infinite = new Waypoint.Infinite({
          element: \$('.infinite-container')[0]
        })
    </script>
    ";
        // line 500
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 501
            echo "        <script type=\"text/javascript\">
            \$.notiny({ text: '";
            // line 502
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "' });
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 505
        echo "
    <script type=\"text/javascript\">
      \$(document).on('click', '[id^=\"likeArticle_\"]', function(){ 
        var nameId = jQuery(this).attr(\"id\");
        var arrStr = nameId.split(\"_\");
        var id = arrStr[1];
        \$.ajax({
            url:'";
        // line 512
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_like");
        echo "',
            type: \"POST\",
            dataType: \"json\",
            data: {
                \"id\": id,
            },
            async: true,
            success: function (data)
            {
                \$(\"#likeArticle_\"+id).removeClass(\"btn-\"+data.prevClass);
                \$(\"#likeArticle_\"+id).addClass(\"btn-\"+data.class);
                \$(\"#countLikes\").text(\" \"+data.likes+\" \");
            }
        });

      });
    </script>

    <script type=\"text/javascript\">
      \$(document).ready(function() {
          \$(\".sfirePost\").click(function(event) {
              var id = event.target.id;
              \$.ajax({
                  url:'";
        // line 535
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_post_for_edit");
        echo "',
                  type: \"POST\",
                  dataType: \"json\",
                  data: {
                      \"id\": id,
                  },
                  async: true,
                  success: function (data)
                  {
                      console.log(\"results:\"+ data.title);
                      \$(\"#post_title\").val(data.title);
                      CKEDITOR.instances['post_body'].setData(data.body);
                  }
              });

          });

          \$('textarea').autogrow({vertical: true, horizontal: false, flickering: false});

          // (function(w, \$) {

          //     'use strict';

          //     \$(function() {
          //         \$('.cropper').each(function() {
          //             new Cropper(\$(this));
          //         });
          //     });

          // })(window, jQuery);      
          //new Crop(\$('#crop'), 16/9);
      });
    </script>
    ";
        // line 568
        $this->displayBlock('javascripts', $context, $blocks);
        // line 569
        echo "    
  </body>

</html>";
        
        $__internal_3bab2964648c9186c11219f7e7a4f6c490cd78e092b602cbf8b04cca931a69bf->leave($__internal_3bab2964648c9186c11219f7e7a4f6c490cd78e092b602cbf8b04cca931a69bf_prof);

        
        $__internal_86ab2bf00a462d26dd8adf01829112961b131ddaee8292577e2264d5f92dd846->leave($__internal_86ab2bf00a462d26dd8adf01829112961b131ddaee8292577e2264d5f92dd846_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b0b0cc4e5565557277ff984870794c92e216f2f254675577ca0656c2b93230a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0b0cc4e5565557277ff984870794c92e216f2f254675577ca0656c2b93230a->enter($__internal_9b0b0cc4e5565557277ff984870794c92e216f2f254675577ca0656c2b93230a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6751271d190763b2282fc446862c995224eedd88c86035c2edd1a9bfe61ead8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6751271d190763b2282fc446862c995224eedd88c86035c2edd1a9bfe61ead8e->enter($__internal_6751271d190763b2282fc446862c995224eedd88c86035c2edd1a9bfe61ead8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "HHES Blog";
        
        $__internal_6751271d190763b2282fc446862c995224eedd88c86035c2edd1a9bfe61ead8e->leave($__internal_6751271d190763b2282fc446862c995224eedd88c86035c2edd1a9bfe61ead8e_prof);

        
        $__internal_9b0b0cc4e5565557277ff984870794c92e216f2f254675577ca0656c2b93230a->leave($__internal_9b0b0cc4e5565557277ff984870794c92e216f2f254675577ca0656c2b93230a_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73fa9796c73a3aa84adaf20d12c5c4759de722f0b17413f40769012f30e63331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73fa9796c73a3aa84adaf20d12c5c4759de722f0b17413f40769012f30e63331->enter($__internal_73fa9796c73a3aa84adaf20d12c5c4759de722f0b17413f40769012f30e63331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c70b61a471405b65da55f5b735a038f51c9caa294bbbf275d2672a185bd46f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70b61a471405b65da55f5b735a038f51c9caa294bbbf275d2672a185bd46f91->enter($__internal_c70b61a471405b65da55f5b735a038f51c9caa294bbbf275d2672a185bd46f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c70b61a471405b65da55f5b735a038f51c9caa294bbbf275d2672a185bd46f91->leave($__internal_c70b61a471405b65da55f5b735a038f51c9caa294bbbf275d2672a185bd46f91_prof);

        
        $__internal_73fa9796c73a3aa84adaf20d12c5c4759de722f0b17413f40769012f30e63331->leave($__internal_73fa9796c73a3aa84adaf20d12c5c4759de722f0b17413f40769012f30e63331_prof);

    }

    // line 111
    public function block_header($context, array $blocks = array())
    {
        $__internal_90b7b74b869ce193afbbd0d7516be33120e93dbceb5f025a191da981a9b3df01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b7b74b869ce193afbbd0d7516be33120e93dbceb5f025a191da981a9b3df01->enter($__internal_90b7b74b869ce193afbbd0d7516be33120e93dbceb5f025a191da981a9b3df01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_4aec34907e462d522aed19576c4df1351b0423a1fdd914489dbd3fd7dc7ee75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aec34907e462d522aed19576c4df1351b0423a1fdd914489dbd3fd7dc7ee75e->enter($__internal_4aec34907e462d522aed19576c4df1351b0423a1fdd914489dbd3fd7dc7ee75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 112
        echo "    <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image: url('";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/home-bg.jpg"), "html", null, true);
        echo "')\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"site-heading\">
              <h1>Daily Inspiration</h1>
              <span class=\"subheading\">Do you have a minute? God has a minute for you. Get inspired!</span>
              <br /><br />
              ";
        // line 121
        if ((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && array_key_exists("form", $context)) &&  !twig_test_empty(($context["form"] ?? $this->getContext($context, "form"))))) {
            // line 122
            echo "                <button type=\"button\" class=\"btn btn-outline btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#createModal\">Create Post</button>
              ";
        }
        // line 124
        echo "            </div>
          </div>
        </div>
      </div>
    </header>
    ";
        
        $__internal_4aec34907e462d522aed19576c4df1351b0423a1fdd914489dbd3fd7dc7ee75e->leave($__internal_4aec34907e462d522aed19576c4df1351b0423a1fdd914489dbd3fd7dc7ee75e_prof);

        
        $__internal_90b7b74b869ce193afbbd0d7516be33120e93dbceb5f025a191da981a9b3df01->leave($__internal_90b7b74b869ce193afbbd0d7516be33120e93dbceb5f025a191da981a9b3df01_prof);

    }

    // line 130
    public function block_content($context, array $blocks = array())
    {
        $__internal_f0aef2bd0ad13829ff38fcbc20755bbf945b3f1de627fba16586f27be41e4639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0aef2bd0ad13829ff38fcbc20755bbf945b3f1de627fba16586f27be41e4639->enter($__internal_f0aef2bd0ad13829ff38fcbc20755bbf945b3f1de627fba16586f27be41e4639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_714ba5e8563ed2b57d1a8047eecdeab9c426025e838ca4c62c36ee7a48fa8a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714ba5e8563ed2b57d1a8047eecdeab9c426025e838ca4c62c36ee7a48fa8a80->enter($__internal_714ba5e8563ed2b57d1a8047eecdeab9c426025e838ca4c62c36ee7a48fa8a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_714ba5e8563ed2b57d1a8047eecdeab9c426025e838ca4c62c36ee7a48fa8a80->leave($__internal_714ba5e8563ed2b57d1a8047eecdeab9c426025e838ca4c62c36ee7a48fa8a80_prof);

        
        $__internal_f0aef2bd0ad13829ff38fcbc20755bbf945b3f1de627fba16586f27be41e4639->leave($__internal_f0aef2bd0ad13829ff38fcbc20755bbf945b3f1de627fba16586f27be41e4639_prof);

    }

    // line 170
    public function block_includeCreate($context, array $blocks = array())
    {
        $__internal_66b381128e23cebf8286e931b91a4f38963ddd4220bf0126601c18898a8ef6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b381128e23cebf8286e931b91a4f38963ddd4220bf0126601c18898a8ef6e7->enter($__internal_66b381128e23cebf8286e931b91a4f38963ddd4220bf0126601c18898a8ef6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "includeCreate"));

        $__internal_1ca4a1562fb1246cf3678e0b4a1da3170fc68e2b79f226cb1fd77e3df768dd92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca4a1562fb1246cf3678e0b4a1da3170fc68e2b79f226cb1fd77e3df768dd92->enter($__internal_1ca4a1562fb1246cf3678e0b4a1da3170fc68e2b79f226cb1fd77e3df768dd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "includeCreate"));

        // line 171
        echo "    ";
        if ((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && array_key_exists("form", $context)) &&  !twig_test_empty(($context["form"] ?? $this->getContext($context, "form"))))) {
            // line 172
            echo "    <!-- Modal -->
    ";
            // line 173
            echo twig_include($this->env, $context, "templates/createModal.html.twig");
            echo "       
    ";
        }
        // line 175
        echo "    ";
        
        $__internal_1ca4a1562fb1246cf3678e0b4a1da3170fc68e2b79f226cb1fd77e3df768dd92->leave($__internal_1ca4a1562fb1246cf3678e0b4a1da3170fc68e2b79f226cb1fd77e3df768dd92_prof);

        
        $__internal_66b381128e23cebf8286e931b91a4f38963ddd4220bf0126601c18898a8ef6e7->leave($__internal_66b381128e23cebf8286e931b91a4f38963ddd4220bf0126601c18898a8ef6e7_prof);

    }

    // line 568
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9fab62a50272e699a669ba8ae976e492bc020dbaaaba8853da6a89f41caad0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9fab62a50272e699a669ba8ae976e492bc020dbaaaba8853da6a89f41caad0d->enter($__internal_c9fab62a50272e699a669ba8ae976e492bc020dbaaaba8853da6a89f41caad0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b955e18c5049a09434744a86830cb924a9a5ad834431c459be77c54bb529f41f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b955e18c5049a09434744a86830cb924a9a5ad834431c459be77c54bb529f41f->enter($__internal_b955e18c5049a09434744a86830cb924a9a5ad834431c459be77c54bb529f41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b955e18c5049a09434744a86830cb924a9a5ad834431c459be77c54bb529f41f->leave($__internal_b955e18c5049a09434744a86830cb924a9a5ad834431c459be77c54bb529f41f_prof);

        
        $__internal_c9fab62a50272e699a669ba8ae976e492bc020dbaaaba8853da6a89f41caad0d->leave($__internal_c9fab62a50272e699a669ba8ae976e492bc020dbaaaba8853da6a89f41caad0d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  910 => 568,  900 => 175,  895 => 173,  892 => 172,  889 => 171,  880 => 170,  863 => 130,  848 => 124,  844 => 122,  842 => 121,  831 => 113,  828 => 112,  819 => 111,  802 => 12,  784 => 11,  771 => 569,  769 => 568,  733 => 535,  707 => 512,  698 => 505,  689 => 502,  686 => 501,  682 => 500,  648 => 468,  636 => 459,  622 => 448,  610 => 438,  608 => 437,  560 => 392,  524 => 359,  489 => 327,  477 => 317,  467 => 310,  455 => 301,  445 => 293,  443 => 292,  422 => 274,  385 => 240,  362 => 220,  335 => 196,  331 => 195,  327 => 194,  321 => 191,  317 => 190,  311 => 187,  305 => 184,  299 => 181,  295 => 180,  291 => 179,  286 => 176,  284 => 170,  243 => 131,  240 => 130,  238 => 111,  230 => 105,  224 => 102,  220 => 101,  217 => 100,  211 => 97,  206 => 95,  203 => 94,  201 => 93,  195 => 92,  190 => 91,  182 => 80,  160 => 61,  154 => 57,  151 => 56,  148 => 55,  145 => 54,  142 => 53,  139 => 52,  136 => 51,  133 => 50,  130 => 49,  128 => 48,  125 => 47,  122 => 46,  119 => 45,  116 => 44,  113 => 43,  110 => 42,  107 => 41,  104 => 40,  101 => 39,  98 => 38,  96 => 37,  87 => 31,  81 => 28,  77 => 27,  73 => 26,  65 => 21,  59 => 18,  53 => 15,  49 => 13,  47 => 12,  43 => 11,  31 => 1,);
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
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}HHES Blog{% endblock %}</title>
    {% block stylesheets %}{% endblock %}

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- notiny CSS -->
    <link href=\"{{ asset('notiny/notiny.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom fonts for this template -->
    <link href=\"{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/clean-blog.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/thenewwalk.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/mgiletnotification/css/mgilet_notification.css') }}\">

    <!-- styles for cropper -->    
    <link  href=\"{{ asset('cropper/dist/cropper.css') }}\" rel=\"stylesheet\">

  </head>

  <body>

    {% if app.user %}
        {% set link = \"homepage\" %}
        {% set loggedIn = true %}
    {% else %}
        {% set link = 'login' %}
        {% set loggedIn = false %}
    {% endif %}
    {% if user is not defined %}
      {% set user = data.user %}
    {% endif %}

    {% if app.user %}
      {% if profile_pic is defined and profile_pic == false %}
        {% set myProfPicLink = \"photos/default_\" ~ user.gender ~ \".png\" %}
      {% elseif profile_pic is defined and profile_pic == true %}
        {% set myProfPicLink = \"photos/profile/\" ~ profPic %}
      {% else %}
        {% set myProfPicLink = \"\" %}
      {% endif %}
    {% endif %}

    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
      <div class=\"container\" style=\"position: relative;\">
        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">HHES Blog</a>
        <form class=\"navbar-form\" role=\"search\">
        <div class=\"input-group\">
            <input type=\"text\" id=\"searchItem\" class=\"form-input form-control\" placeholder=\"Search\" name=\"q\">
            <button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
        </div>
        </form>
        <div class=\"panel panel-default\" id=\"searchResults\" style=\"position: absolute; left: 20px; top: 70px;\">
            <span id='close' style=\"display:none; cursor: pointer;\"><i class=\"fa fa-times\"></i></span>
              <div id=\"listGroup\" class=\"list-group\">
              </div>
        </div>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          Menu
          <i class=\"fa fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto navbar-top-links\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Blog</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"http://hheskenya.org\">Public Website</a>
            </li>
{#             <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"post.html\">Discussions</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"contact.html\">Lesson</a>
            </li>
 #}            {{ mgilet_notification_render({ 'display': 'dropdown', 'seen': false}) }}            <li class=\"nav-item dropdown show\">
                 <a class=\"dropdown-toggle nav-link\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"{{ path(link) }}\">{{ user.firstName }}</a>
                {% if app.user %}
                  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"{{ path('user_profile', {'slug': app.user.randomAuth } ) }}\">My account</a>
                    <a class=\"dropdown-item\" href=\"#\">My articles</a>
                    <a class=\"dropdown-item\" href=\"{{ path('logout') }}\">Logout</a>
                  </div>
                {% else %}
                  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"{{ path('login') }}\">Login</a>
                    <a class=\"dropdown-item\" href=\"{{ path('user_registration') }}\">Register</a>
                  </div>
                {% endif %}
            </li>
          </ul>
        </div>
      </div>
    </nav>

    {% block header %}
    <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image: url('{{ asset('img/home-bg.jpg') }}')\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"site-heading\">
              <h1>Daily Inspiration</h1>
              <span class=\"subheading\">Do you have a minute? God has a minute for you. Get inspired!</span>
              <br /><br />
              {% if app.user and form is defined and form is not empty %}
                <button type=\"button\" class=\"btn btn-outline btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#createModal\">Create Post</button>
              {% endif %}
            </div>
          </div>
        </div>
      </div>
    </header>
    {% endblock %}
    {% block content %}{% endblock %}

    <hr>

    <!-- Footer -->
    <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            <ul class=\"list-inline text-center\">
              <li class=\"list-inline-item\">
                <a href=\"#\">
                  <span class=\"fa-stack fa-lg\">
                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                    <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                  </span>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"#\">
                  <span class=\"fa-stack fa-lg\">
                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                    <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                  </span>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"#\">
                  <span class=\"fa-stack fa-lg\">
                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                    <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class=\"copyright text-muted\">Copyright &copy; Your Website 2017</p>
          </div>
        </div>
      </div>
    </footer>
    {% block includeCreate %}
    {% if app.user and form is defined and form is not empty %}
    <!-- Modal -->
    {{ include('templates/createModal.html.twig') }}       
    {% endif %}
    {% endblock %}


    <!-- Bootstrap core JavaScript -->
    <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/popper/popper.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

    <!-- Notification javascript - notiny -->
    <script src=\"{{ asset('notiny/notiny.min.js') }}\"></script>

    <!-- Custom scripts for this template -->
    <script src=\"{{ asset('js/clean-blog.min.js') }}\"></script>

    <!-- scripts for cropper -->
    <script src=\"{{ asset('cropper/dist/cropper.js') }}\"></script>
    <script type=\"application/javascript\" src=\"{{ asset('bundles/mgiletnotification/js/ajax-notification.js') }}\"></script>

    <!-- Waypoint scroll plugin -->
    <script src=\"{{ asset('waypoints/lib/jquery.waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('waypoints/lib/shortcuts/infinite.min.js') }}\"></script>
    <script src=\"{{ asset('jquery.ns-autogrow/dist/jquery.ns-autogrow.min.js') }}\"></script>
    <script type=\"text/javascript\">
      // \$('#image').cropper({
      //   aspectRatio: 9 / 9,
      //   crop: function(e) {
      //     // Output the result data for cropping image.
      //     console.log(e.x);
      //     console.log(e.y);
      //     console.log(e.width);
      //     console.log(e.height);
      //     console.log(e.rotate);
      //     console.log(e.scaleX);
      //     console.log(e.scaleY);
      //   }
      // });
    </script>

    <script type=\"text/javascript\">
      \$(document).on('click', '[id^=\"followNotif_\"]', function(){ 
        //when you click on \"comment\" button to repond to a post
        var nameId = jQuery(this).attr(\"id\");
        var arrStr = nameId.split(\"_\");
        var id = arrStr[1];
        \$.ajax({
            url:\"{{ (path('notification_mark_as_seen_ajax')) }}\",
            type: \"POST\",
            dataType: \"json\",
            data: {
                \"id\": id,
            },
            async: true,
            success: function (data)
            {
              console.log(data.link);
              location.href = data.link;              
            }
        });
      });
    </script>    
    <script>
      \$( \"#searchItem\" ).keyup(function( event ) {
        var value = \$(this).val();
        if(\$(\"#searchItem\").val().length >= 3) {
          \$.ajax({
              url:'{{ (path('get_matches')) }}',
              type: \"POST\",
              dataType: \"json\",
              data: {
                  \"thisValue\": value,
              },
              async: true,
              success: function (data)
              {
                 console.log(data);
                 \$( \"#listGroup\" ).empty();
                \$.each(data.combined, function( key, value ) {
                  
                    \$(\"#listGroup\").append('<a href=\"'+key+'\" class=\"list-group-item list-group-item-action\">...'+value+'...</a>');
                  
                });
                
              }
          });
        }

      });
    </script>

    <script>
    \$(document).on('click', '[id^=\"addComment_\"]', function(){ 
      //when you click on \"comment\" button to repond to a post
      var nameId = jQuery(this).attr(\"id\");
      var arrStr = nameId.split(\"_\");
      var id = arrStr[1];
  
      var comment = \$(\"#comment\").val();

      \$.ajax({
            url:'{{ (path('create_comment')) }}',
            type: \"POST\",
            dataType: \"json\",
            data: {
                \"comment\": comment,
                \"id\": id,
            },
            async: true,
            success: function (data)
            {
              console.log(data.comment);
              \$(\"#commentHolder\").append(data.comment);
              \$(\"#comment\").val(\"\");
            }
        });

      });
    </script>
{% if app.user %}
    <script>
    \$(document).on('click', '[id^=\"makeProfile_\"]', function(){ 
      //when you click on \"make profile\" button to change profile picture
      var nameId = jQuery(this).attr(\"id\");
      var arrStr = nameId.split(\"_\");
      var id = arrStr[1];
  
      \$.ajax({
            url:'{{ (path('make_profile_picture')) }}',
            type: \"POST\",
            dataType: \"json\",
            data: {
                \"id\": id,
            },
            async: true,
            success: function (data)
            {
                location.href = \"{{ path('user_profile', {'slug': user.randomAuth}) }}\";
            }
        });

      });
    </script>
{% endif %}
    <script>
    \$(document).on('click', '[id^=\"updateComment_\"]', function(){ 
      //when you click on \"commentEdit\" button to edit a comment
      var nameId = jQuery(this).attr(\"id\");
      var arrStr = nameId.split(\"_\");
      var id = arrStr[1];
  
      var comment = \$(\"#commentBody_\"+id).text();

      \$.ajax({
            url:'{{ (path('edit_comment')) }}',
            type: \"POST\",
            dataType: \"json\",
            data: {
                \"comment\": comment,
                \"id\": id,
            },
            async: true,
            success: function (data)
            {
              console.log(data.comment);
              \$(\"#commentBody_\"+id).val(data.comment);
              \$(\"#commentBody_\"+id).attr('contenteditable', 'false');        
              \$(\"#commentBody_\"+id).css(\"background-color\", \"white\"); 
              \$(\"#updateComment_\"+id).hide();     

            }
        });

      });
    </script>

    <script>
    \$(document).on('click', '[id^=\"updateReply_\"]', function(){ 
      //when you click on \"updateReply_\" button to edit a reply
      var nameId = jQuery(this).attr(\"id\");
      var arrStr = nameId.split(\"_\");
      var id = arrStr[1];
  
      var reply = \$(\"#replyBody_\"+id).text();

      \$.ajax({
            url:'{{ (path('edit_reply')) }}',
            type: \"POST\",
            dataType: \"json\",
            data: {
                \"reply\": reply,
                \"id\": id,
            },
            async: true,
            success: function (data)
            {
              console.log(data.reply);
              \$(\"#replyBody_\"+id).val(data.reply);
              \$(\"#replyBody_\"+id).attr('contenteditable', 'false');        
              \$(\"#replyBody_\"+id).css(\"background-color\", \"white\"); 
              \$(\"#updateReply_\"+id).hide();     

            }
        });

      });
    </script>

    <script>
    \$(document).on('click', '[id^=\"deleteReply_\"]', function(){ 
      //when you click on \"deleteReply\" button to delete a reply
      var result = confirm(\"Are you sure you want to delete?\");
      if (result) {
        
        var nameId = jQuery(this).attr(\"id\");
        var arrStr = nameId.split(\"_\");
        var id = arrStr[1];

        \$.ajax({
              url:'{{ (path('delete_reply')) }}',
              type: \"POST\",
              dataType: \"json\",
              data: {
                  \"id\": id,
              },
              async: true,
              success: function (data)
              {
                console.log(data.reply);
                \$(\"#replyBody_\"+id).parent().parent().hide();
              }
          });
      }

      });
    </script>

    <script>
    // make comment paragraph editable
    \$(document).on('click', '[id^=\"editComment_\"]', function(){ 
        var nameId = jQuery(this).attr(\"id\");
        var arrStr = nameId.split(\"_\");
        var id = arrStr[1]; 
        console.log(id);
        \$(\"#commentBody_\"+id).attr('contenteditable', 'true');        
        \$(\"#commentBody_\"+id).css(\"background-color\", \"#F4F9B4\"); 
        \$(\"#commentBody_\"+id).focus(); 
        \$(\"#updateComment_\"+id).show();     
      });
    </script>

    <script>
    // make reply paragraph editable
    \$(document).on('click', '[id^=\"editReply_\"]', function(){ 
        var nameId = jQuery(this).attr(\"id\");
        var arrStr = nameId.split(\"_\");
        var id = arrStr[1]; 
        console.log(id);
        \$(\"#replyBody_\"+id).attr('contenteditable', 'true');        
        \$(\"#replyBody_\"+id).css(\"background-color\", \"#F4F9B4\"); 
        \$(\"#replyBody_\"+id).focus(); 
        \$(\"#updateReply_\"+id).show();     
      });
    </script>
{% if app.user %}
    <script>
    // click on reply button to respond to a comment
    \$(document).on('click', '[id^=\"addCommentReply_\"]', function(){ 
        var nameId = jQuery(this).attr(\"id\");
        var arrStr = nameId.split(\"_\");
        var id = arrStr[1];
    
        var commentReply = \$(\"#commentReply_\"+id).val();

        \$.ajax({
              url:'{{ (path('create_comment_reply')) }}',
              type: \"POST\",
              dataType: \"json\",
              data: {
                  \"commentReply\": commentReply,
                  \"id\": id,
              },
              async: true,
              success: function (data)
              {
                console.log(data.commentReply);
                var replyBeginning = '<li><div class=\"commenterImage\"><img src=\\'{{ asset(myProfPicLink) }}\\'style=\"width:30px; height:30px;\" /></div>';
                \$(\"#commentList_\"+id).append(replyBeginning + data.commentReply);
                \$(\"#commentReply_\"+id).val(\"\");
              }
          });

        });
    </script>
{% endif %}
    <script>
    // when clicking on enter in the reply to comment input
        \$(document).on('keypress', '[id^=\"commentReply_\"]', function(e){
           var key = e.which;
           if(key == 13){ 
            var nameId = jQuery(this).attr(\"id\");
            var arrStr = nameId.split(\"_\");
            var id = arrStr[1];

            \$(\"#addCommentReply_\"+id).click();
            return false;
          }
        });

    </script>
    <script>
    //toggle opening and closing the replies section of a comment
    \$(document).on('click', '[id^=\"reply_\"]', function(){ 
        var nameId = jQuery(this).attr(\"id\");
        var arrStr = nameId.split(\"_\");
        var id = arrStr[1];
        console.log(id); 
        \$(\"#commentReplyHolder_\"+id).toggle();
      });
    </script>

    <script type=\"text/javascript\">
    //infinite scrolling
        var infinite = new Waypoint.Infinite({
          element: \$('.infinite-container')[0]
        })
    </script>
    {% for message in app.flashes('success') %}
        <script type=\"text/javascript\">
            \$.notiny({ text: '{{ message }}' });
        </script>
    {% endfor %}

    <script type=\"text/javascript\">
      \$(document).on('click', '[id^=\"likeArticle_\"]', function(){ 
        var nameId = jQuery(this).attr(\"id\");
        var arrStr = nameId.split(\"_\");
        var id = arrStr[1];
        \$.ajax({
            url:'{{ (path('add_like')) }}',
            type: \"POST\",
            dataType: \"json\",
            data: {
                \"id\": id,
            },
            async: true,
            success: function (data)
            {
                \$(\"#likeArticle_\"+id).removeClass(\"btn-\"+data.prevClass);
                \$(\"#likeArticle_\"+id).addClass(\"btn-\"+data.class);
                \$(\"#countLikes\").text(\" \"+data.likes+\" \");
            }
        });

      });
    </script>

    <script type=\"text/javascript\">
      \$(document).ready(function() {
          \$(\".sfirePost\").click(function(event) {
              var id = event.target.id;
              \$.ajax({
                  url:'{{ (path('get_post_for_edit')) }}',
                  type: \"POST\",
                  dataType: \"json\",
                  data: {
                      \"id\": id,
                  },
                  async: true,
                  success: function (data)
                  {
                      console.log(\"results:\"+ data.title);
                      \$(\"#post_title\").val(data.title);
                      CKEDITOR.instances['post_body'].setData(data.body);
                  }
              });

          });

          \$('textarea').autogrow({vertical: true, horizontal: false, flickering: false});

          // (function(w, \$) {

          //     'use strict';

          //     \$(function() {
          //         \$('.cropper').each(function() {
          //             new Cropper(\$(this));
          //         });
          //     });

          // })(window, jQuery);      
          //new Crop(\$('#crop'), 16/9);
      });
    </script>
    {% block javascripts %}{% endblock %}
    
  </body>

</html>", "base.html.twig", "/home/maestrojosiah/projects/community/app/Resources/views/base.html.twig");
    }
}
