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

/* mailbox/tab-filters.twig */
class __TwigTemplate_a4f7c66b70b528276308f320ab274c25 extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab-filters\" role=\"tabpanel\" aria-labelledby=\"tab-filters\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-filters\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-filters\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 5), "filters", [], "any", false, false, false, 5), "html", null, true);
        echo " <span class=\"badge bg-info table-lines\"></span>
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 7), "filters", [], "any", false, false, false, 7), "html", null, true);
        echo " <span class=\"badge bg-info table-lines\"></span></span>

      <div class=\"btn-group ms-auto d-flex\">
        <button class=\"btn btn-xs btn-secondary refresh_table\" data-draw=\"draw_filter_table\" data-table=\"filter_table\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "refresh", [], "any", false, false, false, 10), "html", null, true);
        echo "</button>
      </div>
    </div>
    <div id=\"collapse-tab-filters\" class=\"card-body collapse\" data-bs-parent=\"#mail-content\">
      <div class=\"mass-actions-mailbox mb-4\">
        <div class=\"btn-group\" data-acl=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "filters", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
          <a class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"filter_item\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 16), "toggle_all", [], "any", false, false, false, 16), "html", null, true);
        echo "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "quick_actions", [], "any", false, false, false, 17), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"filter_item\" data-api-url='edit/filter' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 19), "activate", [], "any", false, false, false, 19), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"filter_item\" data-api-url='edit/filter' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 20), "deactivate", [], "any", false, false, false, 20), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"filter_item\" data-api-url='edit/filter' data-api-attr='{\"filter_type\":\"prefilter\"}' href=\"#\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 22), "set_prefilter", [], "any", false, false, false, 22), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"filter_item\" data-api-url='edit/filter' data-api-attr='{\"filter_type\":\"postfilter\"}' href=\"#\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 23), "set_postfilter", [], "any", false, false, false, 23), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-text=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 25), "eas_reset", [], "any", false, false, false, 25), "html", null, true);
        echo "?\" data-id=\"filter_item\" data-api-url='delete/filter' href=\"#\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 25), "remove", [], "any", false, false, false, 25), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"filter_table\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 27), "expand_all", [], "any", false, false, false, 27), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"filter_table\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 28), "collapse_all", [], "any", false, false, false, 28), "html", null, true);
        echo "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addFilterModalAdmin\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 30), "add_filter", [], "any", false, false, false, 30), "html", null, true);
        echo "</a>
        </div>
      </div>
      <p class=\"text-muted\">";
        // line 33
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 33), "sieve_info", [], "any", false, false, false, 33);
        echo "</p><br>
      <table id=\"filter_table\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-mailbox mt-4 mb-4\">
        <div class=\"btn-group\" data-acl=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "filters", [], "any", false, false, false, 36), "html", null, true);
        echo "\">
          <a class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"filter_item\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 37), "toggle_all", [], "any", false, false, false, 37), "html", null, true);
        echo "</a>
          <a class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 38), "quick_actions", [], "any", false, false, false, 38), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"filter_item\" data-api-url='edit/filter' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 40), "activate", [], "any", false, false, false, 40), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"filter_item\" data-api-url='edit/filter' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 41), "deactivate", [], "any", false, false, false, 41), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"filter_item\" data-api-url='edit/filter' data-api-attr='{\"filter_type\":\"prefilter\"}' href=\"#\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 43), "set_prefilter", [], "any", false, false, false, 43), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"filter_item\" data-api-url='edit/filter' data-api-attr='{\"filter_type\":\"postfilter\"}' href=\"#\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 44), "set_postfilter", [], "any", false, false, false, 44), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-text=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 46), "eas_reset", [], "any", false, false, false, 46), "html", null, true);
        echo "?\" data-id=\"filter_item\" data-api-url='delete/filter' href=\"#\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 46), "remove", [], "any", false, false, false, 46), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"filter_table\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 48), "expand_all", [], "any", false, false, false, 48), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"filter_table\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 49), "collapse_all", [], "any", false, false, false, 49), "html", null, true);
        echo "</a></li>
          </ul>
          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addFilterModalAdmin\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 51), "add_filter", [], "any", false, false, false, 51), "html", null, true);
        echo "</a>
        </div>
      </div>
      <div class=\"";
        // line 54
        if ((($context["mailcow_cc_role"] ?? null) != "admin")) {
            echo "hidden";
        }
        echo "\">
        <div class=\"row\">
          <div class=\"col-lg-6 mt-4\">
            <h5>Global Prefilter</h5>
            <form class=\"form-horizontal\" data-cached-form=\"false\" role=\"form\" data-id=\"add_prefilter\">
              <div class=\"row\">
                <div class=\"col-sm-12\">
                  <textarea autocorrect=\"off\" spellcheck=\"false\" autocapitalize=\"none\" class=\"form-control textarea-code script_data\" rows=\"10\" name=\"script_data\" required>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["global_filters"] ?? null), "prefilter", [], "any", false, false, false, 61), "html", null, true);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mt-2\">
                <div class=\"col-sm-10 add_filter_btns\">
                  <div class=\"btn-group\">
                    <button class=\"btn btn-sm btn-xs-half btn-secondary validate_sieve\" href=\"#\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 67), "validate", [], "any", false, false, false, 67), "html", null, true);
        echo "</button>
                    <button class=\"btn btn-sm btn-xs-half btn-success add_sieve_script\" data-action=\"add_item\" data-id=\"add_prefilter\" data-api-url='add/global-filter' data-api-attr='{\"filter_type\":\"prefilter\"}' href=\"#\" disabled><i class=\"bi bi-check-lg\"></i> ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 68), "save", [], "any", false, false, false, 68), "html", null, true);
        echo "</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class=\"col-lg-6 mt-4\">
            <h5>Global Postfilter</h5>
            <form class=\"form-horizontal\" data-cached-form=\"false\" role=\"form\" data-id=\"add_postfilter\">
              <div class=\"row\">
                <div class=\"col-sm-12\">
                  <textarea autocorrect=\"off\" spellcheck=\"false\" autocapitalize=\"none\" class=\"form-control textarea-code script_data\" rows=\"10\" name=\"script_data\" required>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["global_filters"] ?? null), "postfilter", [], "any", false, false, false, 79), "html", null, true);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mt-2\">
                <div class=\"col-sm-10 add_filter_btns\">
                  <div class=\"btn-group\">
                    <button class=\"btn btn-sm btn-xs-half btn-secondary validate_sieve\" href=\"#\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 85), "validate", [], "any", false, false, false, 85), "html", null, true);
        echo "</button>
                    <button class=\"btn btn-sm btn-xs-half btn-success add_sieve_script\" data-action=\"add_item\" data-id=\"add_postfilter\" data-api-url='add/global-filter' data-api-attr='{\"filter_type\":\"postfilter\"}' href=\"#\" disabled><i class=\"bi bi-check-lg\"></i> ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 86), "save", [], "any", false, false, false, 86), "html", null, true);
        echo "</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mailbox/tab-filters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 86,  222 => 85,  213 => 79,  199 => 68,  195 => 67,  186 => 61,  174 => 54,  168 => 51,  163 => 49,  159 => 48,  152 => 46,  147 => 44,  143 => 43,  138 => 41,  134 => 40,  129 => 38,  125 => 37,  121 => 36,  115 => 33,  109 => 30,  104 => 28,  100 => 27,  93 => 25,  88 => 23,  84 => 22,  79 => 20,  75 => 19,  70 => 17,  66 => 16,  62 => 15,  54 => 10,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mailbox/tab-filters.twig", "/web/templates/mailbox/tab-filters.twig");
    }
}
