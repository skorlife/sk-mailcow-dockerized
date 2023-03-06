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

/* mailbox/tab-templates-mbox.twig */
class __TwigTemplate_ac0db8ed3bc71d767b94514328f73727 extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade show\" id=\"tab-templates-mbox\" role=\"tabpanel\" aria-labelledby=\"tab-templates-mbox\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-sm-block d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-templates-mbox\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-templates-mbox\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 5), "mailbox_templates", [], "any", false, false, false, 5), "html", null, true);
        echo " <span class=\"badge bg-info table-lines\"></span>
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 7), "mailbox_templates", [], "any", false, false, false, 7), "html", null, true);
        echo " <span class=\"badge bg-info table-lines\"></span></span>
      
      <div class=\"btn-group ms-auto d-flex\">
        <button class=\"btn btn-xs btn-secondary refresh_table\" data-draw=\"draw_templates_mbox_table\" data-table=\"templates_mbox_table\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "refresh", [], "any", false, false, false, 10), "html", null, true);
        echo "</button>
      </div>
    </div>
    <div id=\"collapse-tab-templates-mbox\" class=\"card-body collapse show\" data-bs-parent=\"#mail-content\">
      <div class=\"mass-actions-mailbox mb-4\">
        <div class=\"btn-group\">
          <button class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailbox_template\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 16), "toggle_all", [], "any", false, false, false, 16), "html", null, true);
        echo "</button>
          <button class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "quick_actions", [], "any", false, false, false, 17), "html", null, true);
        echo "</button>
          <ul class=\"dropdown-menu\">
            ";
        // line 19
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 20
            echo "              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"mailbox_template\" data-api-url='delete/mailbox/template' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 20), "remove", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"templates_mbox_table\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 22), "expand_all", [], "any", false, false, false, 22), "html", null, true);
            echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"templates_mbox_table\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 23), "collapse_all", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 25
        echo "          </ul>
          ";
        // line 26
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 27
            echo "          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addMailboxTemplateModal\"><i class=\"bi bi-plus-lg\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 27), "add_template", [], "any", false, false, false, 27), "html", null, true);
            echo "</a>
          ";
        }
        // line 29
        echo "        </div>
      </div>
      <table id=\"templates_mbox_table\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-mailbox mt-4\">
        <div class=\"btn-group\">
          <button class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailbox_template\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 34), "toggle_all", [], "any", false, false, false, 34), "html", null, true);
        echo "</button>
          <button class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 35), "quick_actions", [], "any", false, false, false, 35), "html", null, true);
        echo "</button>
          <ul class=\"dropdown-menu\">
            ";
        // line 37
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 38
            echo "              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"mailbox_template\" data-api-url='delete/mailbox/template' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 38), "remove", [], "any", false, false, false, 38), "html", null, true);
            echo "</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"templates_mbox_table\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 40), "expand_all", [], "any", false, false, false, 40), "html", null, true);
            echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"templates_mbox_table\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 41), "collapse_all", [], "any", false, false, false, 41), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 43
        echo "          </ul>
          ";
        // line 44
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 45
            echo "          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addMailboxTemplateModal\"><i class=\"bi bi-plus-lg\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 45), "add_template", [], "any", false, false, false, 45), "html", null, true);
            echo "</a>
          ";
        }
        // line 47
        echo "        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mailbox/tab-templates-mbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  138 => 45,  136 => 44,  133 => 43,  128 => 41,  124 => 40,  118 => 38,  116 => 37,  111 => 35,  107 => 34,  100 => 29,  94 => 27,  92 => 26,  89 => 25,  84 => 23,  80 => 22,  74 => 20,  72 => 19,  67 => 17,  63 => 16,  54 => 10,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mailbox/tab-templates-mbox.twig", "/web/templates/mailbox/tab-templates-mbox.twig");
    }
}
