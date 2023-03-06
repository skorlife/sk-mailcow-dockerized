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

/* mailbox/tab-domains.twig */
class __TwigTemplate_327c8dc5cbf07f11ff27092f42833432 extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade show active\" id=\"tab-domains\" role=\"tabpanel\" aria-labelledby=\"tab-domains\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-sm-block d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-domains\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-domains\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 5), "domains", [], "any", false, false, false, 5), "html", null, true);
        echo " <span class=\"badge bg-info table-lines\"></span>
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 7), "domains", [], "any", false, false, false, 7), "html", null, true);
        echo " <span class=\"badge bg-info table-lines\"></span></span>
      
      <div class=\"btn-group ms-auto d-flex\">
        <button class=\"btn btn-xs btn-secondary refresh_table\" data-draw=\"draw_domain_table\" data-table=\"domain_table\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "refresh", [], "any", false, false, false, 10), "html", null, true);
        echo "</button>
      </div>
    </div>
    <div id=\"collapse-tab-domains\" class=\"card-body collapse show\" data-bs-parent=\"#mail-content\">
      ";
        // line 14
        echo "      
      <div class=\"mass-actions-mailbox mb-4\">
        <div class=\"btn-group\">
          <button class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"domain\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "toggle_all", [], "any", false, false, false, 17), "html", null, true);
        echo "</button>
          <button class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 18), "quick_actions", [], "any", false, false, false, 18), "html", null, true);
        echo "</button>
          <ul class=\"dropdown-menu\">
            ";
        // line 20
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 21
            echo "              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"domain\" data-api-url='edit/domain' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 21), "activate", [], "any", false, false, false, 21), "html", null, true);
            echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"domain\" data-api-url='edit/domain' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 22), "deactivate", [], "any", false, false, false, 22), "html", null, true);
            echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"domain\" data-api-url='delete/domain' href=\"#\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 24), "remove", [], "any", false, false, false, 24), "html", null, true);
            echo "</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            ";
        }
        // line 27
        echo "            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"domain_table\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 27), "expand_all", [], "any", false, false, false, 27), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"domain_table\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 28), "collapse_all", [], "any", false, false, false, 28), "html", null, true);
        echo "</a></li>
          </ul>
          ";
        // line 30
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 31
            echo "          <a class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addDomainModal\"><i class=\"bi bi-plus-lg\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 31), "add_domain", [], "any", false, false, false, 31), "html", null, true);
            echo "</a>
          ";
        }
        // line 33
        echo "        </div>
      </div>
      <table id=\"domain_table\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-mailbox mt-4\">
        <div class=\"btn-group\">
          <button class=\"btn btn-sm btn-xs-half btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"domain\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 38), "toggle_all", [], "any", false, false, false, 38), "html", null, true);
        echo "</button>
          <button class=\"btn btn-sm btn-xs-half btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 39), "quick_actions", [], "any", false, false, false, 39), "html", null, true);
        echo "</button>
          <ul class=\"dropdown-menu\">
            ";
        // line 41
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 42
            echo "              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"domain\" data-api-url='edit/domain' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 42), "activate", [], "any", false, false, false, 42), "html", null, true);
            echo "</a></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"domain\" data-api-url='edit/domain' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 43), "deactivate", [], "any", false, false, false, 43), "html", null, true);
            echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"domain\" data-api-url='delete/domain' href=\"#\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 45), "remove", [], "any", false, false, false, 45), "html", null, true);
            echo "</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
            ";
        }
        // line 48
        echo "            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"domain_table\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 48), "expand_all", [], "any", false, false, false, 48), "html", null, true);
        echo "</a></li>
            <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"domain_table\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 49), "collapse_all", [], "any", false, false, false, 49), "html", null, true);
        echo "</a></li>
          </ul>
          ";
        // line 51
        if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
            // line 52
            echo "            <button class=\"btn btn-sm btn-success\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addDomainModal\"><i class=\"bi bi-plus-lg\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 52), "add_domain", [], "any", false, false, false, 52), "html", null, true);
            echo "</button>
          ";
        }
        // line 54
        echo "        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mailbox/tab-domains.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 54,  157 => 52,  155 => 51,  150 => 49,  145 => 48,  139 => 45,  134 => 43,  129 => 42,  127 => 41,  122 => 39,  118 => 38,  111 => 33,  105 => 31,  103 => 30,  98 => 28,  93 => 27,  87 => 24,  82 => 22,  77 => 21,  75 => 20,  70 => 18,  66 => 17,  61 => 14,  54 => 10,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mailbox/tab-domains.twig", "/web/templates/mailbox/tab-domains.twig");
    }
}
