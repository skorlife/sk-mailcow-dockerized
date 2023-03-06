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

/* admin/tab-routing.twig */
class __TwigTemplate_1af84f693d17309165e4afd474ca3966 extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab-routing\" role=\"tabpanel\" aria-labelledby=\"tab-routing\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-routing\" data-bs-toggle=\"collapse\" aria-controls=\"ollapse-tab-routing\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "relayhosts", [], "any", false, false, false, 5), "html", null, true);
        echo "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "relayhosts", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
    </div>
    <div id=\"collapse-tab-routing\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <p class=\"mb-4\">";
        // line 10
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "relayhosts_hint", [], "any", false, false, false, 10);
        echo "</p>
      <table id=\"relayhoststable\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-admin mb-4\">
        <div class=\"btn-group btn-group-sm\">
          <button type=\"button\" id=\"toggle_multi_select_all\" data-id=\"rlyhosts\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 14), "toggle_all", [], "any", false, false, false, 14), "html", null, true);
        echo "</button>
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 15), "quick_actions", [], "any", false, false, false, 15), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu top100\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"rlyhosts\" data-api-url='edit/relayhost' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "activate", [], "any", false, false, false, 17), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"rlyhosts\" data-api-url='edit/relayhost' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 18), "deactivate", [], "any", false, false, false, 18), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"rlyhosts\" data-api-url='delete/relayhost' href=\"#\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 20), "remove", [], "any", false, false, false, 20), "html", null, true);
        echo "</a></li>
          </ul>
        </div>
      </div>
      <legend>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 24), "add_relayhost", [], "any", false, false, false, 24), "html", null, true);
        echo "</legend><hr />
      <p class=\"text-muted\">";
        // line 25
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 25), "add_relayhost_hint", [], "any", false, false, false, 25);
        echo "</p>
      <div class=\"row\">
        <div class=\"col-md-8\">
          <form class=\"form\" data-id=\"rlyhost\" role=\"form\" method=\"post\">
            <div class=\"mb-2\">
              <label for=\"rlyhost_hostname\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 30), "host", [], "any", false, false, false, 30), "html", null, true);
        echo "</label>
              <input class=\"form-control\" id=\"rlyhost_hostname\" name=\"hostname\" placeholder='[0.0.0.0], [0.0.0.0]:25, host:25, host, [host]:25' required>
            </div>
            <div class=\"mb-2\">
              <label for=\"rlyhost_username\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34), "html", null, true);
        echo "</label>
              <input class=\"form-control\" id=\"rlyhost_username\" name=\"username\">
            </div>
            <div class=\"mb-4\">
              <label for=\"rlyhost_password\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 38), "password", [], "any", false, false, false, 38), "html", null, true);
        echo "</label>
              <input class=\"form-control\" id=\"rlyhost_password\" name=\"password\" type=\"password\">
            </div>
            <button class=\"btn btn-sm d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"rlyhost\" data-api-url='add/relayhost' data-api-attr='{}' href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 41), "add", [], "any", false, false, false, 41), "html", null, true);
        echo "</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class=\"card mb-4\">
    <div class=\"card-header d-flex\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-maps\" data-bs-toggle=\"collapse\" aria-controls=\"ollapse-tab-maps\">
        ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 51), "transport_maps", [], "any", false, false, false, 51), "html", null, true);
        echo "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 53), "transport_maps", [], "any", false, false, false, 53), "html", null, true);
        echo "</span>
    </div>
    <div id=\"collapse-tab-maps\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <p style=\"margin-bottom:40px\">";
        // line 56
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 56), "transports_hint", [], "any", false, false, false, 56);
        echo "</p>
      <table id=\"transportstable\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-admin\">
        <div class=\"btn-group btn-group-sm\">
          <button type=\"button\" id=\"toggle_multi_select_all\" data-id=\"transports\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 60), "toggle_all", [], "any", false, false, false, 60), "html", null, true);
        echo "</button>
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 61), "quick_actions", [], "any", false, false, false, 61), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu top100\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"transports\" data-api-url='edit/transport' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 63), "activate", [], "any", false, false, false, 63), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"transports\" data-api-url='edit/transport' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 64), "deactivate", [], "any", false, false, false, 64), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"transports\" data-api-url='delete/transport' href=\"#\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 66), "remove", [], "any", false, false, false, 66), "html", null, true);
        echo "</a></li>
          </ul>
        </div>
      </div>
      <legend>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 70), "add_transport", [], "any", false, false, false, 70), "html", null, true);
        echo "</legend><hr />
      <p class=\"text-muted\">";
        // line 71
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 71), "add_transports_hint", [], "any", false, false, false, 71);
        echo "</p>
      <div class=\"row\">
        <div class=\"col-md-8\">
          <form class=\"form\" data-id=\"transport\" role=\"form\" method=\"post\">
            <div class=\"mb-2\">
              <label for=\"transport_destination\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 76), "destination", [], "any", false, false, false, 76), "html", null, true);
        echo "</label>
              <input class=\"form-control\" id=\"transport_destination\" name=\"destination\" placeholder='";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 77), "transport_dest_format", [], "any", false, false, false, 77), "html", null, true);
        echo "' required>
            </div>
            <div class=\"mb-2\">
              <label for=\"transport_nexthop\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 80), "nexthop", [], "any", false, false, false, 80), "html", null, true);
        echo "</label>
              <input class=\"form-control\" id=\"transport_nexthop\" name=\"nexthop\" placeholder='host:25, host, [host]:25, [0.0.0.0]:25' required>
            </div>
            <div class=\"mb-2\">
              <label for=\"transport_username\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 84), "username", [], "any", false, false, false, 84), "html", null, true);
        echo "</label>
              <input class=\"form-control\" id=\"transport_username\" name=\"username\">
            </div>
            <div class=\"mb-4\">
              <label for=\"transport_password\">";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 88), "password", [], "any", false, false, false, 88), "html", null, true);
        echo "</label>
              <input class=\"form-control\" id=\"transport_password\" name=\"password\" type=\"password\">
            </div>
            <div class=\"mb-2\">
              <label>
                <input type=\"checkbox\" name=\"is_mx_based\" value=\"1\"> ";
        // line 93
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 93), "lookup_mx", [], "any", false, false, false, 93);
        echo "
              </label>
            </div>
            <div class=\"mb-4\">
              <label>
                <input type=\"checkbox\" name=\"active\" value=\"1\"> ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 98), "active", [], "any", false, false, false, 98), "html", null, true);
        echo "
              </label>
            </div>
            <p class=\"text-muted\">";
        // line 101
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 101), "credentials_transport_warning", [], "any", false, false, false, 101);
        echo "</p>
            <button class=\"btn btn-sm d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"transport\" data-api-url='add/transport' data-api-attr='{}' href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 102), "add", [], "any", false, false, false, 102), "html", null, true);
        echo "</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/tab-routing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 102,  232 => 101,  226 => 98,  218 => 93,  210 => 88,  203 => 84,  196 => 80,  190 => 77,  186 => 76,  178 => 71,  174 => 70,  167 => 66,  162 => 64,  158 => 63,  153 => 61,  149 => 60,  142 => 56,  136 => 53,  131 => 51,  118 => 41,  112 => 38,  105 => 34,  98 => 30,  90 => 25,  86 => 24,  79 => 20,  74 => 18,  70 => 17,  65 => 15,  61 => 14,  54 => 10,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/tab-routing.twig", "/web/templates/admin/tab-routing.twig");
    }
}
