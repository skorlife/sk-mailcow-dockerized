<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modals/mailbox.twig */
class __TwigTemplate_e591ff0c2997519048e7447ee818da2b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- add mailbox modal -->
<div class=\"modal fade\" id=\"addMailboxModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 6), "add_mailbox", [], "any", false, false, false, 6), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" data-id=\"add_mailbox\" role=\"form\" autocomplete=\"off\">
          <input type=\"hidden\" value=\"0\" name=\"force_pw_update\">
          <input type=\"hidden\" value=\"0\" name=\"sogo_access\">
          <input type=\"hidden\" value=\"0\" name=\"protocol_access\">

          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"local_part\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 16), "mailbox_username", [], "any", false, false, false, 16), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" pattern=\"[A-Za-z0-9\\.!#\$%&'*+/=?^_`{|}~-]+\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" name=\"local_part\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"domain\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 22), "domain", [], "any", false, false, false, 22), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select class=\"full-width-select\" data-live-search=\"true\" id=\"addSelectDomain\" name=\"domain\" required>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 26
            echo "                <option>";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"name\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 32), "full_name", [], "any", false, false, false, 32), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"name\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"password\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 38), "password", [], "any", false, false, false, 38), "html", null, true);
        echo " (<a href=\"#\" class=\"generate_password\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 38), "generate", [], "any", false, false, false, 38), "html", null, true);
        echo "</a>)</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" data-pwgen-field=\"true\" data-hibp=\"true\" class=\"form-control\" name=\"password\" placeholder=\"\" autocomplete=\"new-password\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"password2\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 44), "password_repeat", [], "any", false, false, false, 44), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" data-pwgen-field=\"true\" class=\"form-control\" name=\"password2\" placeholder=\"\" autocomplete=\"new-password\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"description\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 50), "template", [], "any", false, false, false, 50), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" id=\"mailbox_templates\" class=\"form-control\" title=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 52), "template", [], "any", false, false, false, 52), "html", null, true);
        echo "\">
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 57), "tags", [], "any", false, false, false, 57), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control tag-box\">
                <input type=\"text\" class=\"tag-input\" id=\"addMailbox_tags\">
                <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
                <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"addInputQuota\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 67), "quota_mb", [], "any", false, false, false, 67), "html", null, true);
        echo "
              <br /><span id=\"quotaBadge\" class=\"badge bg-primary\">max. - MiB</span>
            </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"quota\" min=\"0\" max=\"\" id=\"addInputQuota\" disabled value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 71), "select_domain", [], "any", false, false, false, 71), "html", null, true);
        echo "\" required>
              <small class=\"text-muted\">0 = ∞</small>
              <div class=\"badge fs-5 bg-warning addInputQuotaExhausted\" style=\"display:none;\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "warning", [], "any", false, false, false, 73), "quota_exceeded_scope", [], "any", false, false, false, 73), "html", null, true);
        echo "</div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 77), "quarantine_notification", [], "any", false, false, false, 77), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"quarantine_notification_never\" autocomplete=\"off\" value=\"never\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"quarantine_notification_never\">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 81), "never", [], "any", false, false, false, 81), "html", null, true);
        echo "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"quarantine_notification_hourly\" autocomplete=\"off\" value=\"hourly\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"quarantine_notification_hourly\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 84), "hourly", [], "any", false, false, false, 84), "html", null, true);
        echo "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"quarantine_notification_daily\" autocomplete=\"off\" value=\"daily\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"quarantine_notification_daily\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 87), "daily", [], "any", false, false, false, 87), "html", null, true);
        echo "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"quarantine_notification_weekly\" autocomplete=\"off\" value=\"weekly\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"quarantine_notification_weekly\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 90), "weekly", [], "any", false, false, false, 90), "html", null, true);
        echo "</label>
              </div>
              <p class=\"text-muted\"><small>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 92), "quarantine_notification_info", [], "any", false, false, false, 92), "html", null, true);
        echo "</small></p>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 96), "quarantine_category", [], "any", false, false, false, 96), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"quarantine_category_reject\" autocomplete=\"off\" value=\"reject\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"quarantine_category_reject\">";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 100), "q_reject", [], "any", false, false, false, 100), "html", null, true);
        echo "</label>
                
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"quarantine_category_add_header\" autocomplete=\"off\" value=\"add_header\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"quarantine_category_add_header\">";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 103), "q_add_header", [], "any", false, false, false, 103), "html", null, true);
        echo "</label>
                
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"quarantine_category_all\" autocomplete=\"off\" value=\"all\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"quarantine_category_all\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 106), "q_all", [], "any", false, false, false, 106), "html", null, true);
        echo "</label>
              </div>
              <p class=\"text-muted\"><small>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 108), "quarantine_category_info", [], "any", false, false, false, 108), "html", null, true);
        echo "</small></p>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"tls_enforce_in\">";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 112), "tls_policy", [], "any", false, false, false, 112), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"checkbox\" class=\"btn-check\" name=\"tls_enforce_in\" id=\"tls_enforce_in\" autocomplete=\"off\" value=\"1\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"tls_enforce_in\">";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 116), "tls_enforce_in", [], "any", false, false, false, 116), "html", null, true);
        echo "</label>
                
                <input type=\"checkbox\" class=\"btn-check\" name=\"tls_enforce_out\" id=\"tls_enforce_out\" autocomplete=\"off\" value=\"1\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"tls_enforce_out\">";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 119), "tls_enforce_out", [], "any", false, false, false, 119), "html", null, true);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"protocol_access\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 124), "allowed_protocols", [], "any", false, false, false, 124), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"protocol_access\" id=\"protocol_access\" multiple class=\"form-control\">
                <option value=\"imap\">IMAP</option>
                <option value=\"pop3\">POP3</option>
                <option value=\"smtp\">SMTP</option>
                <option value=\"sieve\">Sieve</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">ACL</label>
            <div class=\"col-sm-10\">
              <select id=\"user_acl\" name=\"acl\" multiple class=\"form-control\">
                  <option value=\"spam_alias\" selected>";
        // line 138
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 138)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["spam_alias"] ?? null) : null), "html", null, true);
        echo "</option>
                  <option value=\"tls_policy\" selected>";
        // line 139
        echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 139)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["tls_policy"] ?? null) : null), "html", null, true);
        echo "</option>
                  <option value=\"spam_score\" selected>";
        // line 140
        echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 140)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["spam_score"] ?? null) : null), "html", null, true);
        echo "</option>
                  <option value=\"spam_policy\" selected>";
        // line 141
        echo twig_escape_filter($this->env, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 141)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["spam_policy"] ?? null) : null), "html", null, true);
        echo "</option>
                  <option value=\"delimiter_action\" selected>";
        // line 142
        echo twig_escape_filter($this->env, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 142)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["delimiter_action"] ?? null) : null), "html", null, true);
        echo "</option>
                  <option value=\"syncjobs\">";
        // line 143
        echo twig_escape_filter($this->env, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 143)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["syncjobs"] ?? null) : null), "html", null, true);
        echo "</option>
                  <option value=\"eas_reset\" selected>";
        // line 144
        echo twig_escape_filter($this->env, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 144)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["eas_reset"] ?? null) : null), "html", null, true);
        echo "</option>
                  <option value=\"sogo_profile_reset\">";
        // line 145
        echo twig_escape_filter($this->env, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 145)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["sogo_profile_reset"] ?? null) : null), "html", null, true);
        echo "</option>
                  <option value=\"pushover\" selected>";
        // line 146
        echo twig_escape_filter($this->env, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 146)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["pushover"] ?? null) : null), "html", null, true);
        echo "</option>
                  <option value=\"quarantine\" selected>";
        // line 147
        echo twig_escape_filter($this->env, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 147)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["quarantine"] ?? null) : null), "html", null, true);
        echo "</option>
                  <option value=\"quarantine_attachments\" selected>";
        // line 148
        echo twig_escape_filter($this->env, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 148)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["quarantine_attachments"] ?? null) : null), "html", null, true);
        echo "</option>
                  <option value=\"quarantine_notification\" selected>";
        // line 149
        echo twig_escape_filter($this->env, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 149)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["quarantine_notification"] ?? null) : null), "html", null, true);
        echo "</option>
                  <option value=\"quarantine_category\" selected>";
        // line 150
        echo twig_escape_filter($this->env, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 150)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["quarantine_category"] ?? null) : null), "html", null, true);
        echo "</option>
                  <option value=\"app_passwds\" selected>";
        // line 151
        echo twig_escape_filter($this->env, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 151)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["app_passwds"] ?? null) : null), "html", null, true);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 156), "ratelimit", [], "any", false, false, false, 156), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input name=\"rl_value\" id=\"rl_value\" type=\"number\" autocomplete=\"off\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 158), "disabled", [], "any", false, false, false, 158), "html", null, true);
        echo "\">
              <select name=\"rl_frame\" id=\"rl_frame\" class=\"form-control\">
                <option value=\"s\">";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 160), "second", [], "any", false, false, false, 160), "html", null, true);
        echo "</option>
                <option value=\"m\">";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 161), "minute", [], "any", false, false, false, 161), "html", null, true);
        echo "</option>
                <option value=\"h\">";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 162), "hour", [], "any", false, false, false, 162), "html", null, true);
        echo "</option>
                <option value=\"d\">";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 163), "day", [], "any", false, false, false, 163), "html", null, true);
        echo "</option>
              </select>
              <p class=\"text-muted mt-3\">";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 165), "mbox_rl_info", [], "any", false, false, false, 165), "html", null, true);
        echo "</p>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <select name=\"active\" id=\"mbox_active\" class=\"form-control\">
                <option value=\"1\" selected>";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 171), "active", [], "any", false, false, false, 171), "html", null, true);
        echo "</option>
                <option value=\"2\">";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 172), "disable_login", [], "any", false, false, false, 172), "html", null, true);
        echo "</option>
                <option value=\"0\">";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 173), "inactive", [], "any", false, false, false, 173), "html", null, true);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"force_pw_update\" id=\"force_pw_update\"> ";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 180), "force_pw_update", [], "any", false, false, false, 180), "html", null, true);
        echo "</label>
                <small class=\"text-muted\">";
        // line 181
        echo twig_escape_filter($this->env, twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 181), "force_pw_update_info", [], "any", false, false, false, 181), twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 181)), "html", null, true);
        echo "</small>
              </div>
            </div>
          </div>
          ";
        // line 185
        if ( !($context["skip_sogo"] ?? null)) {
            // line 186
            echo "          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"sogo_access\" id=\"sogo_access\"> ";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 189), "sogo_access", [], "any", false, false, false, 189), "html", null, true);
            echo "</label>
                <small class=\"text-muted\">";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 190), "sogo_access_info", [], "any", false, false, false, 190), "html", null, true);
            echo "</small>
              </div>
            </div>
          </div>
          ";
        }
        // line 195
        echo "          <hr>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_mailbox\" data-api-url='add/mailbox' data-api-attr='{}' href=\"#\">";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 198), "add", [], "any", false, false, false, 198), "html", null, true);
        echo "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add mailbox modal -->
<!-- add mailbox template modal -->
<div class=\"modal fade\" id=\"addMailboxTemplateModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 211), "add_template", [], "any", false, false, false, 211), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-id=\"addmailbox_template\" role=\"form\" method=\"post\">
          <input type=\"hidden\" value=\"default\" name=\"sender_acl\">
          <input type=\"hidden\" value=\"0\" name=\"force_pw_update\">
          <input type=\"hidden\" value=\"0\" name=\"sogo_access\">
          <input type=\"hidden\" value=\"0\" name=\"protocol_access\">     

          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"template\">";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 222), "template", [], "any", false, false, false, 222), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group mb-3\">
                <input type=\"text\" name=\"template\" class=\"form-control\" aria-label=\"Text input with dropdown button\" value=\"\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 230), "tags", [], "any", false, false, false, 230), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control tag-box\">
                <input type=\"text\" class=\"tag-input\" id=\"addMailbox_tags\">
                <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
                <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"quota\">";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 240), "quota_mb", [], "any", false, false, false, 240), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"quota\" style=\"width:100%\" min=\"0\" value=\"\" class=\"form-control\">
              <small class=\"text-muted\">0 = ∞</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 247), "quarantine_notification", [], "any", false, false, false, 247), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"template_quarantine_notification_never\" autocomplete=\"off\" value=\"never\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"template_quarantine_notification_never\">";
        // line 251
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 251), "never", [], "any", false, false, false, 251), "html", null, true);
        echo "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"template_quarantine_notification_hourly\" autocomplete=\"off\" value=\"hourly\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"template_quarantine_notification_hourly\">";
        // line 254
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 254), "hourly", [], "any", false, false, false, 254), "html", null, true);
        echo "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"template_quarantine_notification_daily\" autocomplete=\"off\" value=\"daily\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"template_quarantine_notification_daily\">";
        // line 257
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 257), "daily", [], "any", false, false, false, 257), "html", null, true);
        echo "</label>

                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_notification\" id=\"template_quarantine_notification_weekly\" autocomplete=\"off\" value=\"weekly\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"template_quarantine_notification_weekly\">";
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 260), "weekly", [], "any", false, false, false, 260), "html", null, true);
        echo "</label>
              </div>
              <p class=\"text-muted\"><small>";
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 262), "quarantine_notification_info", [], "any", false, false, false, 262), "html", null, true);
        echo "</small></p>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 266
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 266), "quarantine_category", [], "any", false, false, false, 266), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"template_quarantine_category_reject\" autocomplete=\"off\" value=\"reject\" >
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"template_quarantine_category_reject\">";
        // line 270
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 270), "q_reject", [], "any", false, false, false, 270), "html", null, true);
        echo "</label>
                
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"template_quarantine_category_add_header\" autocomplete=\"off\" value=\"add_header\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"template_quarantine_category_add_header\">";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 273), "q_add_header", [], "any", false, false, false, 273), "html", null, true);
        echo "</label>
                
                <input type=\"radio\" class=\"btn-check\" name=\"quarantine_category\" id=\"template_quarantine_category_all\" autocomplete=\"off\" value=\"all\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"template_quarantine_category_all\">";
        // line 276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 276), "q_all", [], "any", false, false, false, 276), "html", null, true);
        echo "</label>
              </div>
              <p class=\"text-muted\"><small>";
        // line 278
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 278), "quarantine_category_info", [], "any", false, false, false, 278), "html", null, true);
        echo "</small></p>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"sender_acl\">";
        // line 282
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 282), "tls_policy", [], "any", false, false, false, 282), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"btn-group\">
                <input type=\"checkbox\" class=\"btn-check\" name=\"tls_enforce_in\" id=\"template_tls_enforce_in\" autocomplete=\"off\" value=\"1\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"template_tls_enforce_in\">";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 286), "tls_enforce_in", [], "any", false, false, false, 286), "html", null, true);
        echo "</label>
                
                <input type=\"checkbox\" class=\"btn-check\" name=\"tls_enforce_out\" id=\"template_tls_enforce_out\" autocomplete=\"off\" value=\"1\">
                <label class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary\" for=\"template_tls_enforce_out\">";
        // line 289
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 289), "tls_enforce_out", [], "any", false, false, false, 289), "html", null, true);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"protocol_access\">";
        // line 294
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 294), "allowed_protocols", [], "any", false, false, false, 294), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"protocol_access\" multiple class=\"form-control\">
                <option value=\"imap\" selected>IMAP</option>
                <option value=\"pop3\" selected>POP3</option>
                <option value=\"smtp\" selected>SMTP</option>
                <option value=\"sieve\" selected>Sieve</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">ACL</label>
            <div class=\"col-sm-10\">
              <select id=\"template_user_acl\" name=\"acl\" size=\"10\" multiple class=\"form-control\">                  
                <option value=\"spam_alias\" selected>";
        // line 308
        echo twig_escape_filter($this->env, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 308)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["spam_alias"] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"tls_policy\" selected>";
        // line 309
        echo twig_escape_filter($this->env, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 309)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["tls_policy"] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"spam_score\" selected>";
        // line 310
        echo twig_escape_filter($this->env, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 310)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["spam_score"] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"spam_policy\" selected>";
        // line 311
        echo twig_escape_filter($this->env, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 311)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["spam_policy"] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"delimiter_action\" selected>";
        // line 312
        echo twig_escape_filter($this->env, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 312)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["delimiter_action"] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"syncjobs\">";
        // line 313
        echo twig_escape_filter($this->env, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 313)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["syncjobs"] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"eas_reset\" selected>";
        // line 314
        echo twig_escape_filter($this->env, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 314)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["eas_reset"] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"sogo_profile_reset\">";
        // line 315
        echo twig_escape_filter($this->env, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 315)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["sogo_profile_reset"] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"pushover\" selected>";
        // line 316
        echo twig_escape_filter($this->env, (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 316)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["pushover"] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"quarantine\" selected>";
        // line 317
        echo twig_escape_filter($this->env, (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 317)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["quarantine"] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"quarantine_attachments\" selected>";
        // line 318
        echo twig_escape_filter($this->env, (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 318)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["quarantine_attachments"] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"quarantine_notification\" selected>";
        // line 319
        echo twig_escape_filter($this->env, (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 319)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["quarantine_notification"] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"quarantine_category\" selected>";
        // line 320
        echo twig_escape_filter($this->env, (($__internal_compile_26 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 320)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["quarantine_category"] ?? null) : null), "html", null, true);
        echo "</option>
                <option value=\"app_passwds\" selected>";
        // line 321
        echo twig_escape_filter($this->env, (($__internal_compile_27 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 321)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["app_passwds"] ?? null) : null), "html", null, true);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 326
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 326), "ratelimit", [], "any", false, false, false, 326), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input name=\"rl_value\" type=\"number\" autocomplete=\"off\" value=\"\" class=\"form-control mb-2\" placeholder=\"";
        // line 328
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 328), "disabled", [], "any", false, false, false, 328), "html", null, true);
        echo "\">
              <select name=\"rl_frame\" class=\"form-control\">
                <option value=\"s\">";
        // line 330
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 330), "second", [], "any", false, false, false, 330), "html", null, true);
        echo "</option>
                <option value=\"m\">";
        // line 331
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 331), "minute", [], "any", false, false, false, 331), "html", null, true);
        echo "</option>
                <option value=\"h\">";
        // line 332
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 332), "hour", [], "any", false, false, false, 332), "html", null, true);
        echo "</option>
                <option value=\"d\">";
        // line 333
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 333), "day", [], "any", false, false, false, 333), "html", null, true);
        echo "</option>
              </select>
              <p class=\"text-muted mt-3\">";
        // line 335
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 335), "mbox_rl_info", [], "any", false, false, false, 335), "html", null, true);
        echo "</p>
            </div>
          </div>
          <hr>
          <div class=\"row my-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <select id=\"mbox_acitve\" name=\"active\" class=\"form-control\">
                <option value=\"1\" selected>";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 342), "active", [], "any", false, false, false, 342), "html", null, true);
        echo "</option>
                <option value=\"2\">";
        // line 343
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 343), "disable_login", [], "any", false, false, false, 343), "html", null, true);
        echo "</option>
                <option value=\"0\">";
        // line 344
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 344), "inactive", [], "any", false, false, false, 344), "html", null, true);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"force_pw_update\"> ";
        // line 351
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 351), "force_pw_update", [], "any", false, false, false, 351), "html", null, true);
        echo "</label>
                <small class=\"text-muted\">";
        // line 352
        echo twig_escape_filter($this->env, twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 352), "force_pw_update_info", [], "any", false, false, false, 352), twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 352)), "html", null, true);
        echo "</small>
              </div>
            </div>
          </div>
          ";
        // line 356
        if ( !($context["skip_sogo"] ?? null)) {
            // line 357
            echo "          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"sogo_access\"> ";
            // line 360
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 360), "sogo_access", [], "any", false, false, false, 360), "html", null, true);
            echo "</label>
                <small class=\"text-muted\">";
            // line 361
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 361), "sogo_access_info", [], "any", false, false, false, 361), "html", null, true);
            echo "</small>
              </div>
            </div>
          </div>
          ";
        }
        // line 366
        echo "          <div class=\"row my-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"addmailbox_template\" data-api-url='add/mailbox/template' data-api-attr='{}' href=\"#\">";
        // line 368
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 368), "add", [], "any", false, false, false, 368), "html", null, true);
        echo "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add mailbox template modal -->
<!-- add domain modal -->
<div class=\"modal fade\" id=\"addDomainModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 381
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 381), "add_domain", [], "any", false, false, false, 381), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" data-id=\"add_domain\" role=\"form\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"domain\">";
        // line 387
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 387), "domain", [], "any", false, false, false, 387), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" name=\"domain\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"description\">";
        // line 393
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 393), "description", [], "any", false, false, false, 393), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"description\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"description\">";
        // line 399
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 399), "template", [], "any", false, false, false, 399), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" id=\"domain_templates\" class=\"form-control\">
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 406
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 406), "tags", [], "any", false, false, false, 406), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control tag-box\">
                <input type=\"text\" class=\"tag-input\" id=\"addDomain_tags\">
                <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
                <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"aliases\">";
        // line 416
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 416), "max_aliases", [], "any", false, false, false, 416), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_max_aliases\" class=\"form-control\" name=\"aliases\" value=\"400\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"mailboxes\">";
        // line 422
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 422), "max_mailboxes", [], "any", false, false, false, 422), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_max_mailboxes\" class=\"form-control\" name=\"mailboxes\" value=\"10\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"defquota\">";
        // line 428
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 428), "mailbox_quota_def", [], "any", false, false, false, 428), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_mailbox_quota_def\" class=\"form-control\" name=\"defquota\" value=\"3072\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"maxquota\">";
        // line 434
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 434), "mailbox_quota_m", [], "any", false, false, false, 434), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_mailbox_quota_m\" class=\"form-control\" name=\"maxquota\" value=\"10240\" required>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"quota\">";
        // line 440
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 440), "domain_quota_m", [], "any", false, false, false, 440), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" id=\"addDomain_domain_quota_m\" class=\"form-control\" name=\"quota\" value=\"10240\" required>
            </div>
          </div>
          ";
        // line 445
        if ( !($context["skip_sogo"] ?? null)) {
            // line 446
            echo "          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" id=\"addDomain_gal\" value=\"1\" name=\"gal\" checked> ";
            // line 449
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 449), "gal", [], "any", false, false, false, 449), "html", null, true);
            echo "</label>
                <small class=\"text-muted\">";
            // line 450
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 450), "gal_info", [], "any", false, false, false, 450);
            echo "</small>
              </div>
            </div>
          </div>
          ";
        }
        // line 455
        echo "          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" id=\"addDomain_active\" value=\"1\" name=\"active\" checked> ";
        // line 458
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 458), "active", [], "any", false, false, false, 458), "html", null, true);
        echo "</label>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"rl_frame\">";
        // line 464
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 464), "ratelimit", [], "any", false, false, false, 464), "html", null, true);
        echo "</label>
            <div class=\"col-sm-7\">
              <input name=\"rl_value\" id=\"addDomain_rl_value\" type=\"number\" class=\"form-control\" placeholder=\"";
        // line 466
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 466), "disabled", [], "any", false, false, false, 466), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-sm-3\">
              <select name=\"rl_frame\" id=\"addDomain_rl_frame\" class=\"form-control\">
              ";
        // line 470
        $this->loadTemplate("mailbox/rl-frame.twig", "modals/mailbox.twig", 470)->display($context);
        // line 471
        echo "              </select>
            </div>
          </div>
          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"dkim_selector\">";
        // line 476
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 476), "dkim_domains_selector", [], "any", false, false, false, 476), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input class=\"form-control\" id=\"dkim_selector\" name=\"dkim_selector\" value=\"dkim\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"key_size\">";
        // line 482
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 482), "dkim_key_length", [], "any", false, false, false, 482), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select data-style=\"btn btn-secondary btn-sm\" class=\"form-control\" id=\"key_size\" name=\"key_size\">
                <option data-subtext=\"bits\" value=\"1024\">1024</option>
                <option data-subtext=\"bits\" value=\"2048\" selected>2048</option>
              </select>
            </div>
          </div>
          <hr>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 492
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 492), "backup_mx_options", [], "any", false, false, false, 492), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" id=\"addDomain_relay_domain\" value=\"1\" name=\"backupmx\"> ";
        // line 495
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 495), "relay_domain", [], "any", false, false, false, 495), "html", null, true);
        echo "</label>
                <br>
                <label><input type=\"checkbox\" id=\"addDomain_relay_all\" value=\"1\" name=\"relay_all_recipients\"> ";
        // line 497
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 497), "relay_all", [], "any", false, false, false, 497), "html", null, true);
        echo "</label>
                <p>";
        // line 498
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 498), "relay_all_info", [], "any", false, false, false, 498);
        echo "</p>
                <label><input type=\"checkbox\" id=\"addDomain_relay_unknown_only\" value=\"1\" name=\"relay_unknown_only\"> ";
        // line 499
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 499), "relay_unknown_only", [], "any", false, false, false, 499), "html", null, true);
        echo "</label>
                <br>
                <p>";
        // line 501
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 501), "relay_transport_info", [], "any", false, false, false, 501);
        echo "</p>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10 btn-group\">
              ";
        // line 508
        if ( !($context["skip_sogo"] ?? null)) {
            // line 509
            echo "              <button class=\"btn btn-xs-lg btn-xs-half d-block d-sm-inline btn-secondary\" data-action=\"add_item\" data-id=\"add_domain\" data-api-url='add/domain' data-api-attr='{\"tags\": []}' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 509), "add_domain_only", [], "any", false, false, false, 509), "html", null, true);
            echo "</button>
              <button class=\"btn btn-xs-lg btn-xs-half d-block d-sm-inline btn-secondary\" data-action=\"add_item\" data-id=\"add_domain\" data-api-url='add/domain' data-api-attr='{\"restart_sogo\":\"1\", \"tags\": []}' href=\"#\">";
            // line 510
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 510), "add_domain_restart", [], "any", false, false, false, 510), "html", null, true);
            echo "</button>
              <div class=\"clearfix visible-xs\"></div>
              ";
        } else {
            // line 513
            echo "              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_domain\" data-api-url='add/domain' data-api-attr='{\"tags\": []}' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 513), "add", [], "any", false, false, false, 513), "html", null, true);
            echo "</button>
              ";
        }
        // line 515
        echo "            </div>
          </div>
          ";
        // line 518
        echo "          ";
        if ( !($context["skip_sogo"] ?? null)) {
            // line 519
            echo "          <p><i class=\"bi bi-shield-fill-exclamation text-danger\"></i> ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 519), "post_domain_add", [], "any", false, false, false, 519);
            echo "</p>
          ";
        }
        // line 521
        echo "        </form>
      </div>
    </div>
  </div>
</div><!-- add domain modal -->
<!-- add domain template modal -->
<div class=\"modal fade\" id=\"addDomainTemplateModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 531
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 531), "add_template", [], "any", false, false, false, 531), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form data-id=\"adddomain_template\" class=\"form-horizontal\" role=\"form\" method=\"post\">
          ";
        // line 536
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 537
            echo "          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"template\">";
            // line 538
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 538), "template", [], "any", false, false, false, 538), "html", null, true);
            echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group mb-3\">
                <input type=\"text\" name=\"template\" class=\"form-control\" aria-label=\"Text input with dropdown button\" value=\"\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
            // line 546
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 546), "tags", [], "any", false, false, false, 546), "html", null, true);
            echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control tag-box\">
                <input type=\"text\" class=\"tag-input\">
                <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
                <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"max_num_aliases_for_domain\">";
            // line 556
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 556), "max_aliases", [], "any", false, false, false, 556), "html", null, true);
            echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"max_num_aliases_for_domain\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"max_num_mboxes_for_domain\">";
            // line 562
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 562), "max_mailboxes", [], "any", false, false, false, 562), "html", null, true);
            echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"max_num_mboxes_for_domain\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"def_quota_for_mbox\">";
            // line 568
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 568), "mailbox_quota_def", [], "any", false, false, false, 568), "html", null, true);
            echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"def_quota_for_mbox\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"max_quota_for_mbox\">";
            // line 574
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 574), "mailbox_quota_m", [], "any", false, false, false, 574), "html", null, true);
            echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"max_quota_for_mbox\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"max_quota_for_domain\">";
            // line 580
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 580), "domain_quota_m", [], "any", false, false, false, 580), "html", null, true);
            echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"max_quota_for_domain\" value=\"\">
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"gal\" checked> ";
            // line 588
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 588), "gal", [], "any", false, false, false, 588), "html", null, true);
            echo "</label>
                <small class=\"text-muted\">";
            // line 589
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 589), "gal_info", [], "any", false, false, false, 589);
            echo "</small>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"active\" checked> ";
            // line 596
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 596), "active", [], "any", false, false, false, 596), "html", null, true);
            echo "</label>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
            // line 602
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 602), "ratelimit", [], "any", false, false, false, 602), "html", null, true);
            echo "</label>
            <div class=\"col-sm-7\">
              <input name=\"rl_value\" type=\"number\" value=\"\" autocomplete=\"off\" class=\"form-control mb-4\" placeholder=\"";
            // line 604
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 604), "disabled", [], "any", false, false, false, 604), "html", null, true);
            echo "\">
            </div>
            <div class=\"col-sm-3\">
              <select name=\"rl_frame\" class=\"form-control\">
                <option value=\"s\">";
            // line 608
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 608), "second", [], "any", false, false, false, 608), "html", null, true);
            echo "</option>
                <option value=\"m\">";
            // line 609
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 609), "minute", [], "any", false, false, false, 609), "html", null, true);
            echo "</option>
                <option value=\"h\">";
            // line 610
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 610), "hour", [], "any", false, false, false, 610), "html", null, true);
            echo "</option>
                <option value=\"d\">";
            // line 611
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 611), "day", [], "any", false, false, false, 611), "html", null, true);
            echo "</option>
              </select>
            </div>
          </div>
          ";
        }
        // line 616
        echo "          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"dkim_selector\">";
        // line 618
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 618), "dkim_domains_selector", [], "any", false, false, false, 618), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input class=\"form-control\" id=\"dkim_selector\" name=\"dkim_selector\" value=\"dkim\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"key_size\">";
        // line 624
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 624), "dkim_key_length", [], "any", false, false, false, 624), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select data-style=\"btn btn-secondary btn-sm\" class=\"form-control\" id=\"key_size\" name=\"key_size\">
                <option data-subtext=\"bits\">1024</option>
                <option data-subtext=\"bits\" selected>2048</option>
              </select>
            </div>
          </div>
          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\">";
        // line 634
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 634), "backup_mx_options", [], "any", false, false, false, 634), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"backupmx\"> ";
        // line 637
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 637), "relay_domain", [], "any", false, false, false, 637), "html", null, true);
        echo "</label>
                <br>
                <label><input type=\"checkbox\" value=\"1\" name=\"relay_all_recipients\"> ";
        // line 639
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 639), "relay_all", [], "any", false, false, false, 639), "html", null, true);
        echo "</label>
                <p>";
        // line 640
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 640), "relay_all_info", [], "any", false, false, false, 640);
        echo "</p>
                <label><input type=\"checkbox\" value=\"1\" name=\"relay_unknown_only\"> ";
        // line 641
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 641), "relay_unknown_only", [], "any", false, false, false, 641), "html", null, true);
        echo "</label>
                <br>
                <p>";
        // line 643
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 643), "relay_transport_info", [], "any", false, false, false, 643);
        echo "</p>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"adddomain_template\" data-item=\"";
        // line 650
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "\" data-api-url='add/domain/template' data-api-attr='{}' href=\"#\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 650), "add", [], "any", false, false, false, 650), "html", null, true);
        echo "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add domain template modal -->
<!-- add resource modal -->
<div class=\"modal fade\" id=\"addResourceModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 663
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 663), "add_resource", [], "any", false, false, false, 663), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_resource\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"description\">";
        // line 669
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 669), "description", [], "any", false, false, false, 669), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"description\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"domain\">";
        // line 675
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 675), "domain", [], "any", false, false, false, 675), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" name=\"domain\" title=\"";
        // line 677
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 677), "select", [], "any", false, false, false, 677), "html", null, true);
        echo "\" required>
                ";
        // line 678
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 679
            echo "                  <option>";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 681
        echo "              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"domain\">";
        // line 685
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 685), "kind", [], "any", false, false, false, 685), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"kind\" title=\"";
        // line 687
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 687), "select", [], "any", false, false, false, 687), "html", null, true);
        echo "\" required>
                <option value=\"location\">Location</option>
                <option value=\"group\">Group</option>
                <option value=\"thing\">Thing</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end text-sm-end\" for=\"multiple_bookings_select\">";
        // line 695
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 695), "multiple_bookings", [], "any", false, false, false, 695), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"multiple_bookings_select\" id=\"multiple_bookings_select\" title=\"";
        // line 697
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 697), "select", [], "any", false, false, false, 697), "html", null, true);
        echo "\" required>
                <option value=\"0\">";
        // line 698
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 698), "booking_null", [], "any", false, false, false, 698), "html", null, true);
        echo "</option>
                <option value=\"-1\" selected>";
        // line 699
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 699), "booking_ltnull", [], "any", false, false, false, 699), "html", null, true);
        echo "</option>
                <option value=\"custom\">";
        // line 700
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 700), "booking_custom", [], "any", false, false, false, 700), "html", null, true);
        echo "</option>
              </select>
              <div style=\"display:none\" id=\"multiple_bookings_custom_div\">
                <hr>
                <input type=\"number\" class=\"form-control\" name=\"multiple_bookings_custom\" id=\"multiple_bookings_custom\">
              </div>
              <input type=\"hidden\" name=\"multiple_bookings\" id=\"multiple_bookings\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"active\" checked> ";
        // line 712
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 712), "active", [], "any", false, false, false, 712), "html", null, true);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_resource\" data-api-url='add/resource' data-api-attr='{}' href=\"#\">";
        // line 718
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 718), "add", [], "any", false, false, false, 718), "html", null, true);
        echo "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add resource modal -->
<!-- add alias modal -->
<div class=\"modal fade\" id=\"addAliasModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 731
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 731), "add_alias", [], "any", false, false, false, 731), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_alias\">
          <input type=\"hidden\" value=\"0\" name=\"active\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"address\">";
        // line 738
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 738), "alias_address", [], "any", false, false, false, 738), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" rows=\"5\" name=\"address\" id=\"address\" required></textarea>
              <p>";
        // line 741
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 741), "alias_address_info", [], "any", false, false, false, 741);
        echo "</p>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"goto\">";
        // line 745
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 745), "target_address", [], "any", false, false, false, 745), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea id=\"textarea_alias_goto\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" rows=\"5\" id=\"goto\" name=\"goto\" required></textarea>
              <p>";
        // line 748
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 748), "target_address_info", [], "any", false, false, false, 748);
        echo "</p>
              <div class=\"checkbox\">
                <label><input class=\"goto_checkbox\" type=\"checkbox\" value=\"1\" name=\"goto_null\"> ";
        // line 750
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 750), "goto_null", [], "any", false, false, false, 750), "html", null, true);
        echo "</label>
              </div>
              <div class=\"checkbox\">
                <label><input class=\"goto_checkbox\" type=\"checkbox\" value=\"1\" name=\"goto_spam\"> ";
        // line 753
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 753), "goto_spam", [], "any", false, false, false, 753);
        echo "</label>
              </div>
              <div class=\"checkbox\">
                <label><input class=\"goto_checkbox\" type=\"checkbox\" value=\"1\" name=\"goto_ham\"> ";
        // line 756
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 756), "goto_ham", [], "any", false, false, false, 756);
        echo "</label>
              </div>
              ";
        // line 758
        if ( !($context["skip_sogo"] ?? null)) {
            // line 759
            echo "              <hr>
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"sogo_visible\" checked> ";
            // line 761
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 761), "sogo_visible", [], "any", false, false, false, 761), "html", null, true);
            echo "</label>
              </div>
              <p class=\"text-muted\">";
            // line 763
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 763), "sogo_visible_info", [], "any", false, false, false, 763), "html", null, true);
            echo "</p>
              ";
        }
        // line 765
        echo "            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"active\" checked> ";
        // line 770
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 770), "active", [], "any", false, false, false, 770), "html", null, true);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_alias\" data-api-url='add/alias' data-api-attr='{}' href=\"#\">";
        // line 776
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 776), "add", [], "any", false, false, false, 776), "html", null, true);
        echo "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add alias modal -->
<!-- add domain alias modal -->
<div class=\"modal fade\" id=\"addAliasDomainModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 789
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 789), "add_domain_alias", [], "any", false, false, false, 789), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_alias_domain\">
          <input type=\"hidden\" value=\"0\" name=\"active\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"alias_domain\">";
        // line 796
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 796), "alias_domain", [], "any", false, false, false, 796), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" rows=\"5\" name=\"alias_domain\" id=\"alias_domain\" required></textarea>
              <p>";
        // line 799
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 799), "alias_domain_info", [], "any", false, false, false, 799);
        echo "</p>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"target_domain\">";
        // line 803
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 803), "target_domain", [], "any", false, false, false, 803), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" name=\"target_domain\" title=\"";
        // line 805
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 805), "select", [], "any", false, false, false, 805), "html", null, true);
        echo "\" required>
                ";
        // line 806
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 807
            echo "                  <option>";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 809
        echo "              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"active\" checked> ";
        // line 815
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 815), "active", [], "any", false, false, false, 815), "html", null, true);
        echo "</label>
              </div>
            </div>
          </div>
          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"rl_frame\">";
        // line 821
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 821), "ratelimit", [], "any", false, false, false, 821), "html", null, true);
        echo "</label>
            <div class=\"col-sm-7\">
              <input name=\"rl_value\" type=\"number\" class=\"form-control\" placeholder=\"";
        // line 823
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 823), "disabled", [], "any", false, false, false, 823), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-sm-3\">
              <select name=\"rl_frame\" class=\"form-control\">
                ";
        // line 827
        $this->loadTemplate("mailbox/rl-frame.twig", "modals/mailbox.twig", 827)->display($context);
        // line 828
        echo "              </select>
            </div>
          </div>
          <hr>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"dkim_selector2\">";
        // line 833
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 833), "dkim_domains_selector", [], "any", false, false, false, 833), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input class=\"form-control\" id=\"dkim_selector2\" name=\"dkim_selector\" value=\"dkim\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"key_size2\">";
        // line 839
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 839), "dkim_key_length", [], "any", false, false, false, 839), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select data-style=\"btn btn-secondary btn-sm\" class=\"form-control\" id=\"key_size2\" name=\"key_size\">
                <option data-subtext=\"bits\">1024</option>
                <option data-subtext=\"bits\" selected>2048</option>
              </select>
            </div>
          </div>
          <hr>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_alias_domain\" data-api-url='add/alias-domain' data-api-attr='{}' href=\"#\">";
        // line 850
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 850), "add", [], "any", false, false, false, 850), "html", null, true);
        echo "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add domain alias modal -->
<!-- add sync job modal -->
<div class=\"modal fade\" id=\"addSyncJobModalAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 863
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 863), "syncjob", [], "any", false, false, false, 863), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p class=\"text-muted\">";
        // line 867
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 867), "syncjob_hint", [], "any", false, false, false, 867), "html", null, true);
        echo "</p>
        <form class=\"form-horizontal\" data-cached-form=\"false\" role=\"form\" data-id=\"add_syncjob\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"username\">";
        // line 870
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 870), "username", [], "any", false, false, false, 870), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" name=\"username\" title=\"";
        // line 872
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 872), "select", [], "any", false, false, false, 872), "html", null, true);
        echo "\" required>
                ";
        // line 873
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mailboxes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mailbox"]) {
            // line 874
            echo "                  <option>";
            echo twig_escape_filter($this->env, $context["mailbox"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailbox'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 876
        echo "              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"host1\">";
        // line 880
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 880), "hostname", [], "any", false, false, false, 880), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"host1\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"port1\">";
        // line 886
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 886), "port", [], "any", false, false, false, 886), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"port1\" min=\"1\" max=\"65535\" value=\"143\" required>
              <small class=\"text-muted\">1-65535</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"user1\">";
        // line 893
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 893), "username", [], "any", false, false, false, 893), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"user1\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"password1\">";
        // line 899
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 899), "password", [], "any", false, false, false, 899), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" name=\"password1\" required>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"enc1\">";
        // line 905
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 905), "enc_method", [], "any", false, false, false, 905), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"enc1\" title=\"";
        // line 907
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 907), "select", [], "any", false, false, false, 907), "html", null, true);
        echo "\" required>
                <option value=\"SSL\" selected>SSL</option>
                <option value=\"TLS\">STARTTLS</option>
                <option value=\"PLAIN\">PLAIN</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"mins_interval\">";
        // line 915
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 915), "mins_interval", [], "any", false, false, false, 915), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"mins_interval\" min=\"1\" max=\"43800\" value=\"20\" required>
              <small class=\"text-muted\">1-43800</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"subfolder2\">";
        // line 922
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 922), "subfolder2", [], "any", false, false, false, 922);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"subfolder2\" value=\"\">
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"maxage\">";
        // line 928
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 928), "maxage", [], "any", false, false, false, 928);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"maxage\" min=\"0\" max=\"32000\" value=\"0\">
              <small class=\"text-muted\">0-32000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"maxbytespersecond\">";
        // line 935
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 935), "maxbytespersecond", [], "any", false, false, false, 935);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"maxbytespersecond\" min=\"0\" max=\"125000000\" value=\"0\">
              <small class=\"text-muted\">0-125000000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"timeout1\">";
        // line 942
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 942), "timeout1", [], "any", false, false, false, 942), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"timeout1\" min=\"1\" max=\"32000\" value=\"600\">
              <small class=\"text-muted\">1-32000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"timeout2\">";
        // line 949
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 949), "timeout2", [], "any", false, false, false, 949), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" class=\"form-control\" name=\"timeout2\" min=\"1\" max=\"32000\" value=\"600\">
              <small class=\"text-muted\">1-32000</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"exclude\">";
        // line 956
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 956), "exclude", [], "any", false, false, false, 956), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"exclude\" value=\"(?i)spam|(?i)junk\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"custom_params\">";
        // line 962
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 962), "custom_params", [], "any", false, false, false, 962), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"custom_params\" placeholder=\"--dry --some-param=xy --other-param=yx\">
              <small class=\"text-muted\">";
        // line 965
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 965), "custom_params_hint", [], "any", false, false, false, 965), "html", null, true);
        echo "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"delete2duplicates\" checked> ";
        // line 971
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 971), "delete2duplicates", [], "any", false, false, false, 971), "html", null, true);
        echo " (--delete2duplicates)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"delete1\"> ";
        // line 978
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 978), "delete1", [], "any", false, false, false, 978), "html", null, true);
        echo " (--delete1)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"delete2\"> ";
        // line 985
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 985), "delete2", [], "any", false, false, false, 985), "html", null, true);
        echo " (--delete2)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"automap\" checked> ";
        // line 992
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 992), "automap", [], "any", false, false, false, 992), "html", null, true);
        echo " (--automap)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"skipcrossduplicates\"> ";
        // line 999
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 999), "skipcrossduplicates", [], "any", false, false, false, 999), "html", null, true);
        echo " (--skipcrossduplicates)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"subscribeall\" checked> ";
        // line 1006
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1006), "subscribeall", [], "any", false, false, false, 1006), "html", null, true);
        echo " (--subscribeall)</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"active\" checked> ";
        // line 1013
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1013), "active", [], "any", false, false, false, 1013), "html", null, true);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_syncjob\" data-api-url='add/syncjob' data-api-attr='{}' href=\"#\">";
        // line 1019
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1019), "add", [], "any", false, false, false, 1019), "html", null, true);
        echo "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add sync job modal -->
<!-- add add_filter modal -->
<div class=\"modal fade\" id=\"addFilterModalAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">Filter</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_filter\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"username\">";
        // line 1038
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1038), "username", [], "any", false, false, false, 1038), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select data-live-search=\"true\" name=\"username\" required>
                ";
        // line 1041
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mailboxes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mailbox"]) {
            // line 1042
            echo "                  <option>";
            echo twig_escape_filter($this->env, $context["mailbox"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailbox'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1044
        echo "              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"filter_type\">";
        // line 1048
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1048), "sieve_type", [], "any", false, false, false, 1048), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select id=\"addFilterType\" name=\"filter_type\" required>
                <option value=\"prefilter\">Prefilter</option>
                <option value=\"postfilter\">Postfilter</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"script_desc\">";
        // line 1057
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1057), "sieve_desc", [], "any", false, false, false, 1057), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"script_desc\" name=\"script_desc\" required maxlength=\"255\">
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"script_data\">Script:</label>
            <div class=\"col-sm-10\">
              <textarea autocorrect=\"off\" spellcheck=\"false\" autocapitalize=\"none\" class=\"form-control textarea-code script_data\" rows=\"20\" name=\"script_data\" required></textarea>
              <p class=\"text-muted\">";
        // line 1066
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1066), "activate_filter_warn", [], "any", false, false, false, 1066), "html", null, true);
        echo "</p>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"active\" checked> ";
        // line 1072
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1072), "active", [], "any", false, false, false, 1072), "html", null, true);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10 add_filter_btns btn-group\">
              <button class=\"btn btn-xs-lg btn-xs-half d-block d-sm-inline btn-secondary validate_sieve\" href=\"#\">";
        // line 1078
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1078), "validate", [], "any", false, false, false, 1078), "html", null, true);
        echo "</button>
              <button class=\"btn btn-xs-lg btn-xs-half d-block d-sm-inline btn-success add_sieve_script\" data-action=\"add_item\" data-id=\"add_filter\" data-api-url='add/filter' data-api-attr='{}' href=\"#\" disabled>";
        // line 1079
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1079), "add", [], "any", false, false, false, 1079), "html", null, true);
        echo "</button>
            </div>
          </div>
        </form>
        ";
        // line 1083
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1083), "sieve_preset_header", [], "any", false, false, false, 1083);
        echo "
        <ul id=\"sieve_presets\"></ul>
      </div>
    </div>
  </div>
</div><!-- add add_filter modal -->
<!-- add add_bcc modal -->
<div class=\"modal fade\" id=\"addBCCModalAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 1094
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1094), "bcc_maps", [], "any", false, false, false, 1094), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_bcc\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"local_dest\">";
        // line 1100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1100), "bcc_local_dest", [], "any", false, false, false, 1100), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select id=\"bcc-local-dest\" data-live-search=\"true\" data-size=\"20\" name=\"local_dest\" required>
              </select>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"type\">";
        // line 1107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1107), "bcc_map_type", [], "any", false, false, false, 1107), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"type\" required>
                <option value=\"sender\">";
        // line 1110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1110), "bcc_sender_map", [], "any", false, false, false, 1110), "html", null, true);
        echo "</option>
                <option value=\"rcpt\">";
        // line 1111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1111), "bcc_rcpt_map", [], "any", false, false, false, 1111), "html", null, true);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"bcc_dest\">";
        // line 1116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1116), "bcc_destination", [], "any", false, false, false, 1116), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"bcc_dest\">
              <small>";
        // line 1119
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1119), "bcc_dest_format", [], "any", false, false, false, 1119);
        echo "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"active\" checked> ";
        // line 1125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1125), "active", [], "any", false, false, false, 1125), "html", null, true);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_bcc\" data-api-url='add/bcc' data-api-attr='{}' href=\"#\">";
        // line 1131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1131), "add", [], "any", false, false, false, 1131), "html", null, true);
        echo "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add add_bcc modal -->
<!-- add add_recipient_map modal -->
<div class=\"modal fade\" id=\"addRecipientMapModalAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 1144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1144), "recipient_maps", [], "any", false, false, false, 1144), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_recipient_map\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"recipient_map_old\">";
        // line 1150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1150), "recipient_map_old", [], "any", false, false, false, 1150), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"recipient_map_old\">
              <small>";
        // line 1153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1153), "recipient_map_old_info", [], "any", false, false, false, 1153), "html", null, true);
        echo "</small>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"recipient_map_new\">";
        // line 1157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1157), "recipient_map_new", [], "any", false, false, false, 1157), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"recipient_map_new\">
              <small>";
        // line 1160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1160), "recipient_map_new_info", [], "any", false, false, false, 1160), "html", null, true);
        echo "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"active\" checked> ";
        // line 1166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1166), "active", [], "any", false, false, false, 1166), "html", null, true);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_recipient_map\" data-api-url='add/recipient_map' data-api-attr='{}' href=\"#\">";
        // line 1172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1172), "add", [], "any", false, false, false, 1172), "html", null, true);
        echo "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add add_recipient_map modal -->
<!-- add add_tls_policy_map modal -->
<div class=\"modal fade\" id=\"addTLSPolicyMapAdmin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 1185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1185), "tls_policy_maps", [], "any", false, false, false, 1185), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" data-cached-form=\"true\" role=\"form\" data-id=\"add_tls_policy_map\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"dest\">";
        // line 1191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1191), "tls_map_dest", [], "any", false, false, false, 1191), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"dest\">
              <small>";
        // line 1194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1194), "tls_map_dest_info", [], "any", false, false, false, 1194), "html", null, true);
        echo "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"policy\">";
        // line 1198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1198), "tls_map_policy", [], "any", false, false, false, 1198), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <select class=\"full-width-select\" name=\"policy\" required>
                <option value=\"none\">none</option>
                <option value=\"may\">may</option>
                <option value=\"encrypt\">encrypt</option>
                <option value=\"dane\">dane</option>
                <option value=\"dane-only\">dane-only</option>
                <option value=\"fingerprint\">fingerprint</option>
                <option value=\"verify\">verify</option>
                <option value=\"secure\">secure</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"parameters\">";
        // line 1213
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1213), "tls_map_parameters", [], "any", false, false, false, 1213), "html", null, true);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"parameters\">
              <small>";
        // line 1216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 1216), "tls_map_parameters_info", [], "any", false, false, false, 1216), "html", null, true);
        echo "</small>
            </div>
          </div>
          <div class=\"row mb-2\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"active\" checked> ";
        // line 1222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 1222), "active", [], "any", false, false, false, 1222), "html", null, true);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"add_tls_policy_map\" data-api-url='add/tls-policy-map' data-api-attr='{}' href=\"#\">";
        // line 1228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 1228), "add", [], "any", false, false, false, 1228), "html", null, true);
        echo "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- add add_tls_policy_map modal -->
<!-- log modal -->
<div class=\"modal fade\" id=\"syncjobLogModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"syncjobLogModalLabel\">
  <div class=\"modal-dialog modal-xl\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">Log</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <textarea class=\"form-control\" rows=\"20\" id=\"logText\" spellcheck=\"false\"></textarea>
      </div>
    </div>
  </div>
</div><!-- log modal -->
<!-- DNS info modal -->
<div class=\"modal fade\" id=\"dnsInfoModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"dnsInfoModalLabel\">
  <div class=\"modal-dialog modal-xl\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\">";
        // line 1255
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "diagnostics", [], "any", false, false, false, 1255), "dns_records", [], "any", false, false, false, 1255), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>";
        // line 1259
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "diagnostics", [], "any", false, false, false, 1259), "dns_records_24hours", [], "any", false, false, false, 1259), "html", null, true);
        echo "</p>
        <div class=\"dns-modal-body\"></div>
        <p>";
        // line 1261
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "diagnostics", [], "any", false, false, false, 1261), "dns_records_docs", [], "any", false, false, false, 1261);
        echo "</p>
      </div>
    </div>
  </div>
</div><!-- DNS info modal -->
";
    }

    public function getTemplateName()
    {
        return "modals/mailbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2165 => 1261,  2160 => 1259,  2153 => 1255,  2123 => 1228,  2114 => 1222,  2105 => 1216,  2099 => 1213,  2081 => 1198,  2074 => 1194,  2068 => 1191,  2059 => 1185,  2043 => 1172,  2034 => 1166,  2025 => 1160,  2019 => 1157,  2012 => 1153,  2006 => 1150,  1997 => 1144,  1981 => 1131,  1972 => 1125,  1963 => 1119,  1957 => 1116,  1949 => 1111,  1945 => 1110,  1939 => 1107,  1929 => 1100,  1920 => 1094,  1906 => 1083,  1899 => 1079,  1895 => 1078,  1886 => 1072,  1877 => 1066,  1865 => 1057,  1853 => 1048,  1847 => 1044,  1838 => 1042,  1834 => 1041,  1828 => 1038,  1806 => 1019,  1797 => 1013,  1787 => 1006,  1777 => 999,  1767 => 992,  1757 => 985,  1747 => 978,  1737 => 971,  1728 => 965,  1722 => 962,  1713 => 956,  1703 => 949,  1693 => 942,  1683 => 935,  1673 => 928,  1664 => 922,  1654 => 915,  1643 => 907,  1638 => 905,  1629 => 899,  1620 => 893,  1610 => 886,  1601 => 880,  1595 => 876,  1586 => 874,  1582 => 873,  1578 => 872,  1573 => 870,  1567 => 867,  1560 => 863,  1544 => 850,  1530 => 839,  1521 => 833,  1514 => 828,  1512 => 827,  1505 => 823,  1500 => 821,  1491 => 815,  1483 => 809,  1474 => 807,  1470 => 806,  1466 => 805,  1461 => 803,  1454 => 799,  1448 => 796,  1438 => 789,  1422 => 776,  1413 => 770,  1406 => 765,  1401 => 763,  1396 => 761,  1392 => 759,  1390 => 758,  1385 => 756,  1379 => 753,  1373 => 750,  1368 => 748,  1362 => 745,  1355 => 741,  1349 => 738,  1339 => 731,  1323 => 718,  1314 => 712,  1299 => 700,  1295 => 699,  1291 => 698,  1287 => 697,  1282 => 695,  1271 => 687,  1266 => 685,  1260 => 681,  1251 => 679,  1247 => 678,  1243 => 677,  1238 => 675,  1229 => 669,  1220 => 663,  1202 => 650,  1192 => 643,  1187 => 641,  1183 => 640,  1179 => 639,  1174 => 637,  1168 => 634,  1155 => 624,  1146 => 618,  1142 => 616,  1134 => 611,  1130 => 610,  1126 => 609,  1122 => 608,  1115 => 604,  1110 => 602,  1101 => 596,  1091 => 589,  1087 => 588,  1076 => 580,  1067 => 574,  1058 => 568,  1049 => 562,  1040 => 556,  1027 => 546,  1016 => 538,  1013 => 537,  1011 => 536,  1003 => 531,  991 => 521,  985 => 519,  982 => 518,  978 => 515,  972 => 513,  966 => 510,  961 => 509,  959 => 508,  949 => 501,  944 => 499,  940 => 498,  936 => 497,  931 => 495,  925 => 492,  912 => 482,  903 => 476,  896 => 471,  894 => 470,  887 => 466,  882 => 464,  873 => 458,  868 => 455,  860 => 450,  856 => 449,  851 => 446,  849 => 445,  841 => 440,  832 => 434,  823 => 428,  814 => 422,  805 => 416,  792 => 406,  782 => 399,  773 => 393,  764 => 387,  755 => 381,  739 => 368,  735 => 366,  727 => 361,  723 => 360,  718 => 357,  716 => 356,  709 => 352,  705 => 351,  695 => 344,  691 => 343,  687 => 342,  677 => 335,  672 => 333,  668 => 332,  664 => 331,  660 => 330,  655 => 328,  650 => 326,  642 => 321,  638 => 320,  634 => 319,  630 => 318,  626 => 317,  622 => 316,  618 => 315,  614 => 314,  610 => 313,  606 => 312,  602 => 311,  598 => 310,  594 => 309,  590 => 308,  573 => 294,  565 => 289,  559 => 286,  552 => 282,  545 => 278,  540 => 276,  534 => 273,  528 => 270,  521 => 266,  514 => 262,  509 => 260,  503 => 257,  497 => 254,  491 => 251,  484 => 247,  474 => 240,  461 => 230,  450 => 222,  436 => 211,  420 => 198,  415 => 195,  407 => 190,  403 => 189,  398 => 186,  396 => 185,  389 => 181,  385 => 180,  375 => 173,  371 => 172,  367 => 171,  358 => 165,  353 => 163,  349 => 162,  345 => 161,  341 => 160,  336 => 158,  331 => 156,  323 => 151,  319 => 150,  315 => 149,  311 => 148,  307 => 147,  303 => 146,  299 => 145,  295 => 144,  291 => 143,  287 => 142,  283 => 141,  279 => 140,  275 => 139,  271 => 138,  254 => 124,  246 => 119,  240 => 116,  233 => 112,  226 => 108,  221 => 106,  215 => 103,  209 => 100,  202 => 96,  195 => 92,  190 => 90,  184 => 87,  178 => 84,  172 => 81,  165 => 77,  158 => 73,  153 => 71,  146 => 67,  133 => 57,  125 => 52,  120 => 50,  111 => 44,  100 => 38,  91 => 32,  85 => 28,  76 => 26,  72 => 25,  66 => 22,  57 => 16,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modals/mailbox.twig", "/web/templates/modals/mailbox.twig");
    }
}
