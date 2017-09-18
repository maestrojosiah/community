<?php

/* MgiletNotificationBundle::notification_dropdown.html.twig */
class __TwigTemplate_f9b4a35f5ca40dd1b391a0a8d4831a8febec60d8d1dd7fdbad55e912d55f46f2 extends Twig_Template
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
        $__internal_f71eef772c799d3379aeecbabfec13c1da27b9cd20c4cf0d3b9dd0b633a515aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71eef772c799d3379aeecbabfec13c1da27b9cd20c4cf0d3b9dd0b633a515aa->enter($__internal_f71eef772c799d3379aeecbabfec13c1da27b9cd20c4cf0d3b9dd0b633a515aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MgiletNotificationBundle::notification_dropdown.html.twig"));

        $__internal_d6b8ed76412da028748223939c7e74cf4b077431b45a60b13f02a98365a8e204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b8ed76412da028748223939c7e74cf4b077431b45a60b13f02a98365a8e204->enter($__internal_d6b8ed76412da028748223939c7e74cf4b077431b45a60b13f02a98365a8e204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MgiletNotificationBundle::notification_dropdown.html.twig"));

        // line 1
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 2
            echo "<li class=\"dropdown nav-item\">
    <a class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"fa fa-bell fa-fw\"></i>";
            // line 4
            if (($this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->countUnseenNotifications() > 0)) {
                echo "<span id=\"notifNumber\" class=\"badge badge-notify\">";
                echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->countUnseenNotifications();
                echo "</span>";
            }
            // line 5
            echo "    </a>
  
    <ul class=\"dropdown-menu dropdown-messages\">
    <li style=\"padding: 10px;\"><b class=\"text-muted\">";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("notifications", array(), "MgiletNotificationBundle"), "html", null, true);
            echo "</b>
        <a id=\"notification-MarkAllAsSeen\" href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification_mark_all_as_seen");
            echo "\" class=\"no-margin btn btn-xs pull-right\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mark all as seen", array(), "MgiletNotificationBundle"), "html", null, true);
            echo "</a>
    </li>
    <hr class=\"no-margin\">
    <div class=\"scrollable-menu\">
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? $this->getContext($context, "notifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                echo " 
      <div class=\"list-group no-margin\">
        <li>
          ";
                // line 16
                if ($this->getAttribute($context["notification"], "seen", array())) {
                    // line 17
                    echo "            <div id=\"sib\" class=\"text-black\">
                <strong>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "subject", array()), "html", null, true);
                    echo "</strong>
                <span class=\"pull-right text-muted\">
                    <em><small class=\"list-group-item-text\">";
                    // line 20
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notification"], "date", array()), "M jS, h.i a"), "html", null, true);
                    echo "</small></em><a class=\"ajax-notification text-muted\">...</a>
                </span>
            </div>
            <div><a style=\"cursor:pointer\" href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "link", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "message", array()), "html", null, true);
                    echo "</a></div>
          ";
                } else {
                    // line 25
                    echo "            <div id=\"sib\" class=\"text-primary\">
                <strong>";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "subject", array()), "html", null, true);
                    echo "</strong>
                <span class=\"pull-right text-muted\">
                    <em><small class=\"list-group-item-text\">";
                    // line 28
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notification"], "date", array()), "M jS, h.i a"), "html", null, true);
                    echo "</small></em><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification_mark_as_seen", array("notification" => $this->getAttribute($context["notification"], "id", array()))), "html", null, true);
                    echo "\" class=\"ajax-notification text-muted\">x</a>
                </span>
            </div>
            <div class=\"text-primary\" style=\"cursor:pointer\" ><a id=\"followNotif_";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "id", array()), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "message", array()), "html", null, true);
                    echo "</a></div>
          ";
                }
                // line 33
                echo "        </li>
      </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    </div>
    ";
            // line 37
            if ((twig_length_filter($this->env, ($context["notifications"] ?? $this->getContext($context, "notifications"))) < 1)) {
                // line 38
                echo "        <div class=\"well-lg text-muted text-center\">
            <b>";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no new notification", array(), "MgiletNotificationBundle"), "html", null, true);
                echo "</b>
        </div>
    ";
            }
            // line 42
            echo "    <li>
        <a class=\"text-center\" href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notifications_list");
            echo "\">
            <strong>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All notifications", array(), "MgiletNotificationBundle"), "html", null, true);
            echo "</strong>
            <i class=\"fa fa-angle-right\"></i>
        </a>
    </li>
</ul>
        <!-- /.dropdown-messages -->
</li>
";
        }
        
        $__internal_f71eef772c799d3379aeecbabfec13c1da27b9cd20c4cf0d3b9dd0b633a515aa->leave($__internal_f71eef772c799d3379aeecbabfec13c1da27b9cd20c4cf0d3b9dd0b633a515aa_prof);

        
        $__internal_d6b8ed76412da028748223939c7e74cf4b077431b45a60b13f02a98365a8e204->leave($__internal_d6b8ed76412da028748223939c7e74cf4b077431b45a60b13f02a98365a8e204_prof);

    }

    public function getTemplateName()
    {
        return "MgiletNotificationBundle::notification_dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 44,  134 => 43,  131 => 42,  125 => 39,  122 => 38,  120 => 37,  117 => 36,  109 => 33,  102 => 31,  94 => 28,  89 => 26,  86 => 25,  79 => 23,  73 => 20,  68 => 18,  65 => 17,  63 => 16,  55 => 13,  46 => 9,  42 => 8,  37 => 5,  31 => 4,  27 => 2,  25 => 1,);
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
<li class=\"dropdown nav-item\">
    <a class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"fa fa-bell fa-fw\"></i>{% if mgilet_unseen_notification_count() > 0 %}<span id=\"notifNumber\" class=\"badge badge-notify\">{{ mgilet_unseen_notification_count() }}</span>{% endif %}
    </a>
  
    <ul class=\"dropdown-menu dropdown-messages\">
    <li style=\"padding: 10px;\"><b class=\"text-muted\">{{ 'notifications'|trans({},'MgiletNotificationBundle') }}</b>
        <a id=\"notification-MarkAllAsSeen\" href=\"{{ path('notification_mark_all_as_seen') }}\" class=\"no-margin btn btn-xs pull-right\">{{ 'mark all as seen'|trans({},'MgiletNotificationBundle') }}</a>
    </li>
    <hr class=\"no-margin\">
    <div class=\"scrollable-menu\">
    {% for notification in notifications %} 
      <div class=\"list-group no-margin\">
        <li>
          {% if notification.seen %}
            <div id=\"sib\" class=\"text-black\">
                <strong>{{ notification.subject }}</strong>
                <span class=\"pull-right text-muted\">
                    <em><small class=\"list-group-item-text\">{{ notification.date|date('M jS, h.i a') }}</small></em><a class=\"ajax-notification text-muted\">...</a>
                </span>
            </div>
            <div><a style=\"cursor:pointer\" href=\"{{ notification.link }}\">{{ notification.message }}</a></div>
          {% else %}
            <div id=\"sib\" class=\"text-primary\">
                <strong>{{ notification.subject }}</strong>
                <span class=\"pull-right text-muted\">
                    <em><small class=\"list-group-item-text\">{{ notification.date|date('M jS, h.i a') }}</small></em><a href=\"{{ path('notification_mark_as_seen', {'notification': notification.id}) }}\" class=\"ajax-notification text-muted\">x</a>
                </span>
            </div>
            <div class=\"text-primary\" style=\"cursor:pointer\" ><a id=\"followNotif_{{notification.id}}\" >{{ notification.message }}</a></div>
          {% endif %}
        </li>
      </div>
        {% endfor %}
    </div>
    {% if notifications|length < 1 %}
        <div class=\"well-lg text-muted text-center\">
            <b>{{ 'no new notification'|trans({},'MgiletNotificationBundle') }}</b>
        </div>
    {% endif %}
    <li>
        <a class=\"text-center\" href=\"{{ path('notifications_list') }}\">
            <strong>{{ 'All notifications'|trans({},'MgiletNotificationBundle') }}</strong>
            <i class=\"fa fa-angle-right\"></i>
        </a>
    </li>
</ul>
        <!-- /.dropdown-messages -->
</li>
{% endif %}", "MgiletNotificationBundle::notification_dropdown.html.twig", "/home/maestrojosiah/projects/fix/app/Resources/MgiletNotificationBundle/views/notification_dropdown.html.twig");
    }
}
