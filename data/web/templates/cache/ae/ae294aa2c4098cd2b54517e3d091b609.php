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

/* mailbox/tab-bcc.twig */
class __TwigTemplate_339c17b99e762baada7a4fd206754f29 extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab-bcc\" role=\"tabpanel\" aria-labelledby=\"tab-bcc\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-bcc\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-bcc\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 5), "bcc_maps", [], "any", false, false, false, 5), "html", null, true);
        echo " <span class=\"badge bg-info table-lines\"></span>
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 7), "bcc_maps", [], "any", false, false, false, 7), "html", null, true);
        echo " <span class=\"badge bg-info table-lines\"></span></span>

      <div class=\"btn-group ms-auto d-flex\">
        <button class=\"btn btn-xs btn-secondary refresh_table\" data-draw=\"draw_bcc_table\" data-table=\"bcc_table\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "refresh", [], "any", false, false, false, 10), "html", null, true);
        echo "</button>
      </div>
    </div>
    <div id=\"collapse-tab-bcc\" class=\"card-body collapse\" data-bs-parent=\"#mail-content\">
      <div class=\"mass-actions-mailbox mb-4\">
        <div class=\"btn-group\" data-acl=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "bcc_maps", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
          <a class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"bcc\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 16), "toggle_all", [], "any", false, false, false, 16), "html", null, true);
        echo "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "quick_actions", [], "any", false, false, false, 17), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"bcc\" data-api-url='edit/bcc' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 19), "activate", [], "any", false, false, false, 19), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"bcc\" data-api-url='edit/bcc' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 20), "deactivate", [], "any", false, false, false, 20), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"bcc\" data-api-url='edit/bcc' data-api-attr='{\"type\":\"sender\"}' href=\"#\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 22), "bcc_to_sender", [], "any", false, false, false, 22), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"bcc\" data-api-url='edit/bcc' data-api-attr='{\"type\":\"rcpt\"}' href=\"#\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 23), "bcc_to_rcpt", [], "any", false, false, false, 23), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"bcc\" data-api-url='delete/bcc' href=\"#\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 25), "remove", [], "any", false, false, false, 25), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"bcc_table\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 27), "expand_all", [], "any", false, false, false, 27), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"bcc_table\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 28), "collapse_all", [], "any", false, false, false, 28), "html", null, true);
        echo "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addBCCModalAdmin\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 30), "add_bcc_entry", [], "any", false, false, false, 30), "html", null, true);
        echo "</a>
        </div>
      </div>
      <p class=\"text-muted\">";
        // line 33
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 33), "bcc_info", [], "any", false, false, false, 33);
        echo "</p>
      <table id=\"bcc_table\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-mailbox mt-4\">
        <div class=\"btn-group\" data-acl=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "bcc_maps", [], "any", false, false, false, 36), "html", null, true);
        echo "\">
          <a class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"bcc\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 37), "toggle_all", [], "any", false, false, false, 37), "html", null, true);
        echo "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 38), "quick_actions", [], "any", false, false, false, 38), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"bcc\" data-api-url='edit/bcc' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 40), "activate", [], "any", false, false, false, 40), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"bcc\" data-api-url='edit/bcc' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 41), "deactivate", [], "any", false, false, false, 41), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"bcc\" data-api-url='edit/bcc' data-api-attr='{\"type\":\"sender\"}' href=\"#\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 43), "bcc_to_sender", [], "any", false, false, false, 43), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"bcc\" data-api-url='edit/bcc' data-api-attr='{\"type\":\"rcpt\"}' href=\"#\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 44), "bcc_to_rcpt", [], "any", false, false, false, 44), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"bcc\" data-api-url='delete/bcc' href=\"#\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 46), "remove", [], "any", false, false, false, 46), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"bcc_table\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 48), "expand_all", [], "any", false, false, false, 48), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"bcc_table\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 49), "collapse_all", [], "any", false, false, false, 49), "html", null, true);
        echo "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addBCCModalAdmin\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 51), "add_bcc_entry", [], "any", false, false, false, 51), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"card mb-4";
        // line 56
        if ((($context["mailcow_cc_role"] ?? null) != "admin")) {
            echo " d-none";
        }
        echo "\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-bcc-filters\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-bcc-filters\">
        ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 59), "recipient_maps", [], "any", false, false, false, 59), "html", null, true);
        echo " <span class=\"badge bg-info table-lines\"></span>
      </button>
      <span class=\"d-none d-md-block\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 61), "recipient_maps", [], "any", false, false, false, 61), "html", null, true);
        echo " <span class=\"badge bg-info table-lines\"></span></span>

      <div class=\"btn-group ms-auto d-flex\">
        <button class=\"btn btn-xs btn-secondary refresh_table\" data-draw=\"draw_recipient_map_table\" data-table=\"recipient_map_table\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 64), "refresh", [], "any", false, false, false, 64), "html", null, true);
        echo "</button>
      </div>
    </div>
    <div id=\"collapse-tab-bcc-filters\" class=\"card-body collapse\" data-bs-parent=\"#mail-content\">
      <div class=\"mass-actions-mailbox mb-4\">
        <div class=\"btn-group\">
          <a class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"recipient_map\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 70), "toggle_all", [], "any", false, false, false, 70), "html", null, true);
        echo "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 71), "quick_actions", [], "any", false, false, false, 71), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"recipient_map\" data-api-url='edit/recipient_map' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 73), "activate", [], "any", false, false, false, 73), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"recipient_map\" data-api-url='edit/recipient_map' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 74), "deactivate", [], "any", false, false, false, 74), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"recipient_map\" data-api-url='delete/recipient_map' href=\"#\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 76), "remove", [], "any", false, false, false, 76), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"recipient_map_table\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 78), "expand_all", [], "any", false, false, false, 78), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"recipient_map_table\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 79), "collapse_all", [], "any", false, false, false, 79), "html", null, true);
        echo "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addRecipientMapModalAdmin\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 81), "add_recipient_map_entry", [], "any", false, false, false, 81), "html", null, true);
        echo "</a>
        </div>
      </div>
      <p class=\"text-muted\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 84), "recipient_map_info", [], "any", false, false, false, 84), "html", null, true);
        echo "</p>
      <table id=\"recipient_map_table\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-mailbox mt-4\">
        <div class=\"btn-group\">
          <a class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"recipient_map\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 88), "toggle_all", [], "any", false, false, false, 88), "html", null, true);
        echo "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 89), "quick_actions", [], "any", false, false, false, 89), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"recipient_map\" data-api-url='edit/recipient_map' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 91), "activate", [], "any", false, false, false, 91), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"recipient_map\" data-api-url='edit/recipient_map' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 92), "deactivate", [], "any", false, false, false, 92), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"recipient_map\" data-api-url='delete/recipient_map' href=\"#\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 94), "remove", [], "any", false, false, false, 94), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"recipient_map_table\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 96), "expand_all", [], "any", false, false, false, 96), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"recipient_map_table\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 97), "collapse_all", [], "any", false, false, false, 97), "html", null, true);
        echo "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addRecipientMapModalAdmin\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 99), "add_recipient_map_entry", [], "any", false, false, false, 99), "html", null, true);
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
        return "mailbox/tab-bcc.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 99,  272 => 97,  268 => 96,  263 => 94,  258 => 92,  254 => 91,  249 => 89,  245 => 88,  238 => 84,  232 => 81,  227 => 79,  223 => 78,  218 => 76,  213 => 74,  209 => 73,  204 => 71,  200 => 70,  191 => 64,  185 => 61,  180 => 59,  172 => 56,  164 => 51,  159 => 49,  155 => 48,  150 => 46,  145 => 44,  141 => 43,  136 => 41,  132 => 40,  127 => 38,  123 => 37,  119 => 36,  113 => 33,  107 => 30,  102 => 28,  98 => 27,  93 => 25,  88 => 23,  84 => 22,  79 => 20,  75 => 19,  70 => 17,  66 => 16,  62 => 15,  54 => 10,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mailbox/tab-bcc.twig", "/web/templates/mailbox/tab-bcc.twig");
    }
}
