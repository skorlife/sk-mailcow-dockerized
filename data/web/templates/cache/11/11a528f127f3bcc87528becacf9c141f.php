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

/* admin/tab-config-f2b.twig */
class __TwigTemplate_b9905432b72428ea36f7dfec08d7106d extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab-config-f2b\" role=\"tabpanel\" aria-labelledby=\"tab-config-f2b\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-f2b\" data-bs-toggle=\"collapse\" aria-controls=\"ollapse-tab-config-f2b\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "f2b_parameters", [], "any", false, false, false, 5), "html", null, true);
        echo "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "f2b_parameters", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
    </div>
    <div id=\"collapse-tab-config-f2b\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <form class=\"form\" data-id=\"f2b\" role=\"form\" method=\"post\">
        <div class=\"mb-4\">
          <label for=\"f2b_ban_time\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 12), "f2b_ban_time", [], "any", false, false, false, 12), "html", null, true);
        echo ":</label>
          <input type=\"number\" class=\"form-control\" id=\"f2b_ban_time\" name=\"ban_time\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["f2b_data"] ?? null), "ban_time", [], "any", false, false, false, 13), "html", null, true);
        echo "\" required>
        </div>
        <div class=\"mb-4\">
          <label for=\"f2b_max_attempts\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 16), "f2b_max_attempts", [], "any", false, false, false, 16), "html", null, true);
        echo ":</label>
          <input type=\"number\" class=\"form-control\" id=\"f2b_max_attempts\" name=\"max_attempts\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["f2b_data"] ?? null), "max_attempts", [], "any", false, false, false, 17), "html", null, true);
        echo "\" required>
        </div>
        <div class=\"mb-4\">
          <label for=\"f2b_retry_window\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 20), "f2b_retry_window", [], "any", false, false, false, 20), "html", null, true);
        echo ":</label>
          <input type=\"number\" class=\"form-control\" id=\"f2b_retry_window\" name=\"retry_window\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["f2b_data"] ?? null), "retry_window", [], "any", false, false, false, 21), "html", null, true);
        echo "\" required>
        </div>
        <div class=\"mb-4\">
          <label for=\"f2b_netban_ipv4\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 24), "f2b_netban_ipv4", [], "any", false, false, false, 24), "html", null, true);
        echo ":</label>
          <div class=\"input-group\">
            <span class=\"input-group-text\">/</span>
            <input type=\"number\" class=\"form-control\" id=\"f2b_netban_ipv4\" name=\"netban_ipv4\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["f2b_data"] ?? null), "netban_ipv4", [], "any", false, false, false, 27), "html", null, true);
        echo "\" required>
          </div>
        </div>
        <div class=\"mb-4\">
          <label for=\"f2b_netban_ipv6\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 31), "f2b_netban_ipv6", [], "any", false, false, false, 31), "html", null, true);
        echo ":</label>
          <div class=\"input-group\">
            <span class=\"input-group-text\">/</span>
            <input type=\"number\" class=\"form-control\" id=\"f2b_netban_ipv6\" name=\"netban_ipv6\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["f2b_data"] ?? null), "netban_ipv6", [], "any", false, false, false, 34), "html", null, true);
        echo "\" required>
          </div>
        </div>
        <hr>
        <p class=\"text-muted\">";
        // line 38
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 38), "f2b_list_info", [], "any", false, false, false, 38);
        echo "</p>
        <div class=\"mb-2\">
          <label for=\"f2b_whitelist\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 40), "f2b_whitelist", [], "any", false, false, false, 40), "html", null, true);
        echo ":</label>
          <textarea class=\"form-control\" id=\"f2b_whitelist\" name=\"whitelist\" rows=\"5\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["f2b_data"] ?? null), "whitelist", [], "any", false, false, false, 41), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"mb-4\">
          <label for=\"f2b_blacklist\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 44), "f2b_blacklist", [], "any", false, false, false, 44), "html", null, true);
        echo ":</label>
          <textarea class=\"form-control\" id=\"f2b_blacklist\" name=\"blacklist\" rows=\"5\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["f2b_data"] ?? null), "blacklist", [], "any", false, false, false, 45), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"btn-group\">
          <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-item=\"self\" data-id=\"f2b\" data-api-url='edit/fail2ban' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 48), "save", [], "any", false, false, false, 48), "html", null, true);
        echo "</button>
          <a href=\"#\" role=\"button\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" data-bs-toggle=\"modal\" data-container=\"netfilter-mailcow\" data-bs-target=\"#RestartContainer\"><i class=\"bi bi-arrow-repeat\"></i> ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 49), "restart_netfilter", [], "any", false, false, false, 49), "html", null, true);
        echo "</a>
        </div>
      </form>
      <legend data-bs-target=\"#f2b_regex_filters\" style=\"margin-top:40px;cursor:pointer\" unselectable=\"on\" data-bs-toggle=\"collapse\">
        <i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 53), "f2b_filter", [], "any", false, false, false, 53), "html", null, true);
        echo "
      </legend>
      <hr />
      <div id=\"f2b_regex_filters\" class=\"collapse\">
        <p class=\"text-muted\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 57), "f2b_regex_info", [], "any", false, false, false, 57), "html", null, true);
        echo "</p>
        <form class=\"form-inline\" data-id=\"f2b_regex\" role=\"form\" method=\"post\">
          <table class=\"table table-condensed\" id=\"f2b_regex_table\">
            <tr>
              <th width=\"50px\">ID</th>
              <th>RegExp</th>
              <th width=\"100px\">&nbsp;</th>
            </tr>
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["f2b_data"] ?? null), "regex", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["regex_id"] => $context["regex_val"]) {
            // line 66
            echo "              <tr>
                <td><input disabled class=\"input-sm input-xs-lg form-control\" style=\"text-align:center\" data-id=\"f2b_regex\" type=\"text\" name=\"app\" required value=\"";
            // line 67
            echo twig_escape_filter($this->env, $context["regex_id"], "html", null, true);
            echo "\"></td>
                <td><input class=\"input-sm input-xs-lg form-control regex-input\" data-id=\"f2b_regex\" type=\"text\" name=\"regex\" required value=\"";
            // line 68
            echo twig_escape_filter($this->env, $context["regex_val"], "html", null, true);
            echo "\"></td>
                <td><a href=\"#\" role=\"button\" class=\"btn btn-sm btn-xs-lg btn-secondary h-100 w-100\" type=\"button\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 69), "remove_row", [], "any", false, false, false, 69), "html", null, true);
            echo "</a></td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['regex_id'], $context['regex_val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "          </table>
          <p><div class=\"btn-group\">
            <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-item=\"admin\" data-id=\"f2b_regex\" data-reload=\"no\" data-api-url='edit/fail2ban' data-api-attr='{\"action\":\"edit-regex\"}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 74), "save", [], "any", false, false, false, 74), "html", null, true);
        echo "</button>
            <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary admin-ays-dialog\" data-action=\"edit_selected\" data-item=\"self\" data-id=\"f2b-quick\" data-api-url='edit/fail2ban' data-api-attr='{\"action\":\"reset-regex\"}' href=\"#\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 75), "reset_default", [], "any", false, false, false, 75), "html", null, true);
        echo "</button>
            <button class=\"btn btn-sm d-block d-sm-inline btn-secondary\" type=\"button\" id=\"add_f2b_regex_row\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 76), "add_row", [], "any", false, false, false, 76), "html", null, true);
        echo "</button>
          </div></p>
        </form>
      </div>

      <p class=\"text-muted\">";
        // line 81
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 81), "ban_list_info", [], "any", false, false, false, 81);
        echo "</p>
      ";
        // line 82
        if (( !twig_get_attribute($this->env, $this->source, ($context["f2b_data"] ?? null), "active_bans", [], "any", false, false, false, 82) &&  !twig_get_attribute($this->env, $this->source, ($context["f2b_data"] ?? null), "perm_bans", [], "any", false, false, false, 82))) {
            // line 83
            echo "        <i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 83), "no_active_bans", [], "any", false, false, false, 83), "html", null, true);
            echo "</i>
      ";
        }
        // line 85
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["f2b_data"] ?? null), "active_bans", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["active_ban"]) {
            // line 86
            echo "        <p>
          <span class=\"badge fs-5 bg-info\" style=\"padding:4px;font-size:85%;\">
            <i class=\"bi bi-funnel-fill\"></i>
            <a href=\"https://bgp.he.net/ip/";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["active_ban"], "ip", [], "any", false, false, false, 89), "html", null, true);
            echo "\" target=\"_blank\" style=\"color:white\">
              ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["active_ban"], "network", [], "any", false, false, false, 90), "html", null, true);
            echo "
            </a>
            (";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["active_ban"], "banned_until", [], "any", false, false, false, 92), "html", null, true);
            echo ") -
            ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, $context["active_ban"], "queued_for_unban", [], "any", false, false, false, 93) == 0)) {
                // line 94
                echo "            <a data-action=\"edit_selected\" data-item=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["active_ban"], "network", [], "any", false, false, false, 94), "html", null, true);
                echo "\" data-id=\"f2b-quick\" data-api-url='edit/fail2ban' data-api-attr='{\"action\":\"unban\"}' href=\"#\">[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 94), "queue_unban", [], "any", false, false, false, 94), "html", null, true);
                echo "]</a>
            <a data-action=\"edit_selected\" data-item=\"";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["active_ban"], "network", [], "any", false, false, false, 95), "html", null, true);
                echo "\" data-id=\"f2b-quick\" data-api-url='edit/fail2ban' data-api-attr='{\"action\":\"whitelist\"}' href=\"#\">[whitelist]</a>
            <a data-action=\"edit_selected\" data-item=\"";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["active_ban"], "network", [], "any", false, false, false, 96), "html", null, true);
                echo "\" data-id=\"f2b-quick\" data-api-url='edit/fail2ban' data-api-attr='{\"action\":\"blacklist\"}' href=\"#\">[blacklist (<b>needs restart</b>)]</a>
            ";
            } else {
                // line 98
                echo "            <i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 98), "unban_pending", [], "any", false, false, false, 98), "html", null, true);
                echo "</i>
            ";
            }
            // line 100
            echo "          </span>
        </p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['active_ban'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "      <hr>
      ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["f2b_data"] ?? null), "perm_bans", [], "any", false, false, false, 104));
        foreach ($context['_seq'] as $context["_key"] => $context["perm_ban"]) {
            // line 105
            echo "        <p>
          <span class=\"badge fs-5 bg-danger\" style=\"padding: 0.1em 0.4em 0.1em;\">
            <i class=\"bi bi-funnel-fill\"></i>
            <a href=\"https://bgp.he.net/ip/";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perm_ban"], "ip", [], "any", false, false, false, 108), "html", null, true);
            echo "\" target=\"_blank\" style=\"color:white\">
              ";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perm_ban"], "network", [], "any", false, false, false, 109), "html", null, true);
            echo "
            </a>
          </span>
        </p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perm_ban'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/tab-config-f2b.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 114,  293 => 109,  289 => 108,  284 => 105,  280 => 104,  277 => 103,  269 => 100,  263 => 98,  258 => 96,  254 => 95,  247 => 94,  245 => 93,  241 => 92,  236 => 90,  232 => 89,  227 => 86,  222 => 85,  216 => 83,  214 => 82,  210 => 81,  202 => 76,  198 => 75,  194 => 74,  190 => 72,  181 => 69,  177 => 68,  173 => 67,  170 => 66,  166 => 65,  155 => 57,  148 => 53,  141 => 49,  137 => 48,  131 => 45,  127 => 44,  121 => 41,  117 => 40,  112 => 38,  105 => 34,  99 => 31,  92 => 27,  86 => 24,  80 => 21,  76 => 20,  70 => 17,  66 => 16,  60 => 13,  56 => 12,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/tab-config-f2b.twig", "/web/templates/admin/tab-config-f2b.twig");
    }
}
