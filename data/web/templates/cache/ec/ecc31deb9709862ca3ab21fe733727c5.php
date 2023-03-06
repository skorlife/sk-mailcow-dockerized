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

/* mailbox/tab-mailboxes.twig */
class __TwigTemplate_cc902d5aa409ddedaa58c992fe1f1a3c extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab-mailboxes\" role=\"tabpanel\" aria-labelledby=\"tab-mailboxes\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-mailboxes\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-mailboxes\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 5), "mailboxes", [], "any", false, false, false, 5), "html", null, true);
        echo " <span class=\"badge bg-info table-lines\"></span>
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 7), "mailboxes", [], "any", false, false, false, 7), "html", null, true);
        echo " <span class=\"badge bg-info table-lines\"></span></span>

      <div class=\"btn-group ms-auto d-flex\">
        <button class=\"btn btn-xs btn-secondary refresh_table\" data-draw=\"draw_mailbox_table\" data-table=\"mailbox_table\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "refresh", [], "any", false, false, false, 10), "html", null, true);
        echo "</button>
      </div>
    </div>
    <div id=\"collapse-tab-mailboxes\" class=\"card-body collapse\" data-bs-parent=\"#mail-content\">
      <div class=\"mass-actions-mailbox mb-4\">
        <div class=\"btn-group d-flex d-lg-none\">
          <a class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailbox\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 16), "toggle_all", [], "any", false, false, false, 16), "html", null, true);
        echo "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "quick_actions", [], "any", false, false, false, 17), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu\">
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"mailbox_table\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 19), "expand_all", [], "any", false, false, false, 19), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"mailbox_table\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 20), "collapse_all", [], "any", false, false, false, 20), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 22), "mailbox", [], "any", false, false, false, 22), "html", null, true);
        echo "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 23), "activate", [], "any", false, false, false, 23), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 24), "deactivate", [], "any", false, false, false, 24), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"mailbox\" data-api-url='delete/mailbox' href=\"#\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 25), "remove", [], "any", false, false, false, 25), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 27), "tls_enforce_in", [], "any", false, false, false, 27), "html", null, true);
        echo "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"1\"}' href=\"#\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 28), "activate", [], "any", false, false, false, 28), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"0\"}' href=\"#\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 29), "deactivate", [], "any", false, false, false, 29), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 31), "tls_enforce_out", [], "any", false, false, false, 31), "html", null, true);
        echo "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"1\"}' href=\"#\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 32), "activate", [], "any", false, false, false, 32), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"0\"}' href=\"#\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 33), "deactivate", [], "any", false, false, false, 33), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 35), "quarantine_notification", [], "any", false, false, false, 35), "html", null, true);
        echo "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"hourly\"}' href=\"#\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 36), "hourly", [], "any", false, false, false, 36), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"daily\"}' href=\"#\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 37), "daily", [], "any", false, false, false, 37), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"weekly\"}' href=\"#\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 38), "weekly", [], "any", false, false, false, 38), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"never\"}' href=\"#\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 39), "never", [], "any", false, false, false, 39), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"reject\"}' href=\"#\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 41), "q_reject", [], "any", false, false, false, 41), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"add_header\"}' href=\"#\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 42), "q_add_header", [], "any", false, false, false, 42), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"all\"}' href=\"#\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 43), "q_all", [], "any", false, false, false, 43), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 45), "allowed_protocols", [], "any", false, false, false, 45), "html", null, true);
        echo "</li>
            <li class=\"dropdown-header\">IMAP</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":1}' href=\"#\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 47), "activate", [], "any", false, false, false, 47), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":0}' href=\"#\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 48), "deactivate", [], "any", false, false, false, 48), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">POP3</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":1}' href=\"#\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 51), "activate", [], "any", false, false, false, 51), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":0}' href=\"#\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 52), "deactivate", [], "any", false, false, false, 52), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">SMTP</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":1}' href=\"#\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 55), "activate", [], "any", false, false, false, 55), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":0}' href=\"#\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 56), "deactivate", [], "any", false, false, false, 56), "html", null, true);
        echo "</a></li>
            <li class=\"dropdown-header\">Sieve</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":1}' href=\"#\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 58), "activate", [], "any", false, false, false, 58), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":0}' href=\"#\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 59), "deactivate", [], "any", false, false, false, 59), "html", null, true);
        echo "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addMailboxModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 61), "add_mailbox", [], "any", false, false, false, 61), "html", null, true);
        echo "</a>
        </div>
        <div class=\"btn-group d-none d-lg-flex\">
          <a class=\"btn btn-sm btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailbox\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 64), "toggle_all", [], "any", false, false, false, 64), "html", null, true);
        echo "</a>          
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 65), "quick_actions", [], "any", false, false, false, 65), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu\">
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"mailbox_table\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 67), "expand_all", [], "any", false, false, false, 67), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"mailbox_table\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 68), "collapse_all", [], "any", false, false, false, 68), "html", null, true);
        echo "</a></li>
          </ul>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 71), "mailbox", [], "any", false, false, false, 71), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 73), "activate", [], "any", false, false, false, 73), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"2\"}' href=\"#\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 74), "disable_login", [], "any", false, false, false, 74), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 75), "deactivate", [], "any", false, false, false, 75), "html", null, true);
        echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"mailbox\" data-api-url='delete/mailbox' href=\"#\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 77), "remove", [], "any", false, false, false, 77), "html", null, true);
        echo "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">TLS</a>
            <ul class=\"dropdown-menu\">
              <li class=\"dropdown-header\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 83), "tls_enforce_in", [], "any", false, false, false, 83), "html", null, true);
        echo "</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"1\"}' href=\"#\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 84), "activate", [], "any", false, false, false, 84), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"0\"}' href=\"#\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 85), "deactivate", [], "any", false, false, false, 85), "html", null, true);
        echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 87), "tls_enforce_out", [], "any", false, false, false, 87), "html", null, true);
        echo "</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"1\"}' href=\"#\">";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 88), "activate", [], "any", false, false, false, 88), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"0\"}' href=\"#\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 89), "deactivate", [], "any", false, false, false, 89), "html", null, true);
        echo "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 93), "allowed_protocols", [], "any", false, false, false, 93), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li class=\"dropdown-header\">IMAP</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":1}' href=\"#\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 96), "activate", [], "any", false, false, false, 96), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":0}' href=\"#\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 97), "deactivate", [], "any", false, false, false, 97), "html", null, true);
        echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">POP3</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":1}' href=\"#\">";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 100), "activate", [], "any", false, false, false, 100), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":0}' href=\"#\">";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 101), "deactivate", [], "any", false, false, false, 101), "html", null, true);
        echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">SMTP</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":1}' href=\"#\">";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 104), "activate", [], "any", false, false, false, 104), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":0}' href=\"#\">";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 105), "deactivate", [], "any", false, false, false, 105), "html", null, true);
        echo "</a></li>
              <li class=\"dropdown-header\">Sieve</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":1}' href=\"#\">";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 107), "activate", [], "any", false, false, false, 107), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":0}' href=\"#\">";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 108), "deactivate", [], "any", false, false, false, 108), "html", null, true);
        echo "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 112), "quarantine_notification", [], "any", false, false, false, 112), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"hourly\"}' href=\"#\">";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 114), "hourly", [], "any", false, false, false, 114), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"daily\"}' href=\"#\">";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 115), "daily", [], "any", false, false, false, 115), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"weekly\"}' href=\"#\">";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 116), "weekly", [], "any", false, false, false, 116), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"never\"}' href=\"#\">";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 117), "never", [], "any", false, false, false, 117), "html", null, true);
        echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"reject\"}' href=\"#\">";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 119), "q_reject", [], "any", false, false, false, 119), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"add_header\"}' href=\"#\">";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 120), "q_add_header", [], "any", false, false, false, 120), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"all\"}' href=\"#\">";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 121), "q_all", [], "any", false, false, false, 121), "html", null, true);
        echo "</a></li>
            </ul>
          </div>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addMailboxModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 124), "add_mailbox", [], "any", false, false, false, 124), "html", null, true);
        echo "</a>
        </div>
      </div>
      <table id=\"mailbox_table\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-mailbox mt-4\">
        <div class=\"btn-group d-flex d-lg-none\">
          <a class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailbox\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 130), "toggle_all", [], "any", false, false, false, 130), "html", null, true);
        echo "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 131), "quick_actions", [], "any", false, false, false, 131), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu\">
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"mailbox_table\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 133), "expand_all", [], "any", false, false, false, 133), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"mailbox_table\">";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 134), "collapse_all", [], "any", false, false, false, 134), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 136), "mailbox", [], "any", false, false, false, 136), "html", null, true);
        echo "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 137), "activate", [], "any", false, false, false, 137), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 138), "deactivate", [], "any", false, false, false, 138), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"mailbox\" data-api-url='delete/mailbox' href=\"#\">";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 139), "remove", [], "any", false, false, false, 139), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 141), "tls_enforce_in", [], "any", false, false, false, 141), "html", null, true);
        echo "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"1\"}' href=\"#\">";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 142), "activate", [], "any", false, false, false, 142), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"0\"}' href=\"#\">";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 143), "deactivate", [], "any", false, false, false, 143), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 145), "tls_enforce_out", [], "any", false, false, false, 145), "html", null, true);
        echo "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"1\"}' href=\"#\">";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 146), "activate", [], "any", false, false, false, 146), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"0\"}' href=\"#\">";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 147), "deactivate", [], "any", false, false, false, 147), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 149), "quarantine_notification", [], "any", false, false, false, 149), "html", null, true);
        echo "</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"hourly\"}' href=\"#\">";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 150), "hourly", [], "any", false, false, false, 150), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"daily\"}' href=\"#\">";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 151), "daily", [], "any", false, false, false, 151), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"weekly\"}' href=\"#\">";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 152), "weekly", [], "any", false, false, false, 152), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"never\"}' href=\"#\">";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 153), "never", [], "any", false, false, false, 153), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"reject\"}' href=\"#\">";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 155), "q_reject", [], "any", false, false, false, 155), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"add_header\"}' href=\"#\">";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 156), "q_add_header", [], "any", false, false, false, 156), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"all\"}' href=\"#\">";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 157), "q_all", [], "any", false, false, false, 157), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 159), "allowed_protocols", [], "any", false, false, false, 159), "html", null, true);
        echo "</li>
            <li class=\"dropdown-header\">IMAP</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":1}' href=\"#\">";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 161), "activate", [], "any", false, false, false, 161), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":0}' href=\"#\">";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 162), "deactivate", [], "any", false, false, false, 162), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">POP3</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":1}' href=\"#\">";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 165), "activate", [], "any", false, false, false, 165), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":0}' href=\"#\">";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 166), "deactivate", [], "any", false, false, false, 166), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li class=\"dropdown-header\">SMTP</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":1}' href=\"#\">";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 169), "activate", [], "any", false, false, false, 169), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":0}' href=\"#\">";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 170), "deactivate", [], "any", false, false, false, 170), "html", null, true);
        echo "</a></li>
            <li class=\"dropdown-header\">Sieve</li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":1}' href=\"#\">";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 172), "activate", [], "any", false, false, false, 172), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":0}' href=\"#\">";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 173), "deactivate", [], "any", false, false, false, 173), "html", null, true);
        echo "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addMailboxModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 175), "add_mailbox", [], "any", false, false, false, 175), "html", null, true);
        echo "</a>
        </div>
        <div class=\"btn-group d-none d-lg-flex\">
          <a class=\"btn btn-sm btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailbox\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 178), "toggle_all", [], "any", false, false, false, 178), "html", null, true);
        echo "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 179), "quick_actions", [], "any", false, false, false, 179), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu\">
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"mailbox_table\">";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 181), "expand_all", [], "any", false, false, false, 181), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"mailbox_table\">";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 182), "collapse_all", [], "any", false, false, false, 182), "html", null, true);
        echo "</a></li>
          </ul>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 185), "mailbox", [], "any", false, false, false, 185), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 187), "activate", [], "any", false, false, false, 187), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"2\"}' href=\"#\">";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 188), "disable_login", [], "any", false, false, false, 188), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 189), "deactivate", [], "any", false, false, false, 189), "html", null, true);
        echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"mailbox\" data-api-url='delete/mailbox' href=\"#\">";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 191), "remove", [], "any", false, false, false, 191), "html", null, true);
        echo "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">TLS</a>
            <ul class=\"dropdown-menu\">
              <li class=\"dropdown-header\">";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 197), "tls_enforce_in", [], "any", false, false, false, 197), "html", null, true);
        echo "</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"1\"}' href=\"#\">";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 198), "activate", [], "any", false, false, false, 198), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_in\":\"0\"}' href=\"#\">";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 199), "deactivate", [], "any", false, false, false, 199), "html", null, true);
        echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 201), "tls_enforce_out", [], "any", false, false, false, 201), "html", null, true);
        echo "</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"1\"}' href=\"#\">";
        // line 202
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 202), "activate", [], "any", false, false, false, 202), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/tls_policy' data-api-attr='{\"tls_enforce_out\":\"0\"}' href=\"#\">";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 203), "deactivate", [], "any", false, false, false, 203), "html", null, true);
        echo "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 207), "allowed_protocols", [], "any", false, false, false, 207), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li class=\"dropdown-header\">IMAP</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":1}' href=\"#\">";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 210), "activate", [], "any", false, false, false, 210), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"imap_access\":0}' href=\"#\">";
        // line 211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 211), "deactivate", [], "any", false, false, false, 211), "html", null, true);
        echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">POP3</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":1}' href=\"#\">";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 214), "activate", [], "any", false, false, false, 214), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"pop3_access\":0}' href=\"#\">";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 215), "deactivate", [], "any", false, false, false, 215), "html", null, true);
        echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li class=\"dropdown-header\">SMTP</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":1}' href=\"#\">";
        // line 218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 218), "activate", [], "any", false, false, false, 218), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"smtp_access\":0}' href=\"#\">";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 219), "deactivate", [], "any", false, false, false, 219), "html", null, true);
        echo "</a></li>
              <li class=\"dropdown-header\">Sieve</li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":1}' href=\"#\">";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 221), "activate", [], "any", false, false, false, 221), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/mailbox' data-api-attr='{\"sieve_access\":0}' href=\"#\">";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 222), "deactivate", [], "any", false, false, false, 222), "html", null, true);
        echo "</a></li>
            </ul>
          </div>
          <div class=\"btn-group\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 226), "quarantine_notification", [], "any", false, false, false, 226), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"hourly\"}' href=\"#\">";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 228), "hourly", [], "any", false, false, false, 228), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"daily\"}' href=\"#\">";
        // line 229
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 229), "daily", [], "any", false, false, false, 229), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"weekly\"}' href=\"#\">";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 230), "weekly", [], "any", false, false, false, 230), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_notification' data-api-attr='{\"quarantine_notification\":\"never\"}' href=\"#\">";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 231), "never", [], "any", false, false, false, 231), "html", null, true);
        echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"reject\"}' href=\"#\">";
        // line 233
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 233), "q_reject", [], "any", false, false, false, 233), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"add_header\"}' href=\"#\">";
        // line 234
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 234), "q_add_header", [], "any", false, false, false, 234), "html", null, true);
        echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"mailbox\" data-api-url='edit/quarantine_category' data-api-attr='{\"quarantine_category\":\"all\"}' href=\"#\">";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 235), "q_all", [], "any", false, false, false, 235), "html", null, true);
        echo "</a></li>
            </ul>
          </div>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addMailboxModal\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 238
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 238), "add_mailbox", [], "any", false, false, false, 238), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mailbox/tab-mailboxes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  672 => 238,  666 => 235,  662 => 234,  658 => 233,  653 => 231,  649 => 230,  645 => 229,  641 => 228,  636 => 226,  629 => 222,  625 => 221,  620 => 219,  616 => 218,  610 => 215,  606 => 214,  600 => 211,  596 => 210,  590 => 207,  583 => 203,  579 => 202,  575 => 201,  570 => 199,  566 => 198,  562 => 197,  553 => 191,  548 => 189,  544 => 188,  540 => 187,  535 => 185,  529 => 182,  525 => 181,  520 => 179,  516 => 178,  510 => 175,  505 => 173,  501 => 172,  496 => 170,  492 => 169,  486 => 166,  482 => 165,  476 => 162,  472 => 161,  467 => 159,  462 => 157,  458 => 156,  454 => 155,  449 => 153,  445 => 152,  441 => 151,  437 => 150,  433 => 149,  428 => 147,  424 => 146,  420 => 145,  415 => 143,  411 => 142,  407 => 141,  402 => 139,  398 => 138,  394 => 137,  390 => 136,  385 => 134,  381 => 133,  376 => 131,  372 => 130,  363 => 124,  357 => 121,  353 => 120,  349 => 119,  344 => 117,  340 => 116,  336 => 115,  332 => 114,  327 => 112,  320 => 108,  316 => 107,  311 => 105,  307 => 104,  301 => 101,  297 => 100,  291 => 97,  287 => 96,  281 => 93,  274 => 89,  270 => 88,  266 => 87,  261 => 85,  257 => 84,  253 => 83,  244 => 77,  239 => 75,  235 => 74,  231 => 73,  226 => 71,  220 => 68,  216 => 67,  211 => 65,  207 => 64,  201 => 61,  196 => 59,  192 => 58,  187 => 56,  183 => 55,  177 => 52,  173 => 51,  167 => 48,  163 => 47,  158 => 45,  153 => 43,  149 => 42,  145 => 41,  140 => 39,  136 => 38,  132 => 37,  128 => 36,  124 => 35,  119 => 33,  115 => 32,  111 => 31,  106 => 29,  102 => 28,  98 => 27,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  76 => 20,  72 => 19,  67 => 17,  63 => 16,  54 => 10,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mailbox/tab-mailboxes.twig", "/web/templates/mailbox/tab-mailboxes.twig");
    }
}
