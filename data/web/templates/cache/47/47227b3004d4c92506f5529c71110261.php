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

/* admin/tab-config-fwdhosts.twig */
class __TwigTemplate_175a83bfc18aab856c56b4861d7f15d7 extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab-config-fwdhosts\" role=\"tabpanel\" aria-labelledby=\"tab-config-fwdhosts\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-fwdhosts\" data-bs-toggle=\"collapse\" aria-controls=\"ollapse-tab-config-fwdhosts\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "forwarding_hosts", [], "any", false, false, false, 5), "html", null, true);
        echo "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "forwarding_hosts", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
    </div>
    <div id=\"collapse-tab-config-fwdhosts\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <p style=\"margin-bottom:40px\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "forwarding_hosts_hint", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
      <table id=\"forwardinghoststable\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-admin\">
        <div class=\"btn-group btn-group-sm\">
          <button type=\"button\" id=\"toggle_multi_select_all\" data-id=\"fwdhosts\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 14), "toggle_all", [], "any", false, false, false, 14), "html", null, true);
        echo "</button>
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 15), "quick_actions", [], "any", false, false, false, 15), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu top100\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"fwdhosts\" data-api-url='edit/fwdhost' data-api-attr='{\"keep_spam\":\"0\"}' href=\"#\">Enable spam filter</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"fwdhosts\" data-api-url='edit/fwdhost' data-api-attr='{\"keep_spam\":\"1\"}' href=\"#\">Disable spam filter</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"fwdhosts\" data-api-url='delete/fwdhost' href=\"#\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 20), "remove", [], "any", false, false, false, 20), "html", null, true);
        echo "</a></li>
          </ul>
        </div>
      </div>
      <legend>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 24), "add_forwarding_host", [], "any", false, false, false, 24), "html", null, true);
        echo "</legend><hr />
      <p class=\"text-muted\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 25), "forwarding_hosts_add_hint", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
      <form class=\"form\" data-id=\"fwdhost\" role=\"form\" method=\"post\">
        <div class=\"mb-2\">
          <label for=\"fwdhost_hostname\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 28), "host", [], "any", false, false, false, 28), "html", null, true);
        echo "</label>
          <input class=\"form-control\" id=\"fwdhost_hostname\" name=\"hostname\" placeholder=\"example.org\" required>
        </div>
        <div class=\"mb-4\">
          <select data-width=\"200px\" class=\"form-control\" id=\"filter_spam\" name=\"filter_spam\" title=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 32), "spamfilter", [], "any", false, false, false, 32), "html", null, true);
        echo "\" required>
            <option value=\"1\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 33), "active", [], "any", false, false, false, 33), "html", null, true);
        echo "</option>
            <option value=\"0\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 34), "inactive", [], "any", false, false, false, 34), "html", null, true);
        echo "</option>
          </select>
        </div>
        <button class=\"btn btn-sm d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"fwdhost\" data-api-url='add/fwdhost' data-api-attr='{}' href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 37), "add", [], "any", false, false, false, 37), "html", null, true);
        echo "</button>
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/tab-config-fwdhosts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 37,  105 => 34,  101 => 33,  97 => 32,  90 => 28,  84 => 25,  80 => 24,  73 => 20,  65 => 15,  61 => 14,  54 => 10,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/tab-config-fwdhosts.twig", "/web/templates/admin/tab-config-fwdhosts.twig");
    }
}
