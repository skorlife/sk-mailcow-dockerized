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

/* admin/tab-config-customize.twig */
class __TwigTemplate_b2fe37645658fccb2136d7a47bf50267 extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab-config-customize\" role=\"tabpanel\" aria-labelledby=\"tab-config-customize\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-customize\" data-bs-toggle=\"collapse\" aria-controls=\"ollapse-tab-config-customize\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "customize", [], "any", false, false, false, 5), "html", null, true);
        echo "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "customize", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
    </div>
    <div id=\"collapse-tab-config-customize\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <legend><i class=\"bi bi-file-image\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "change_logo", [], "any", false, false, false, 10), "html", null, true);
        echo "</legend><hr />
      <p class=\"text-muted\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 11), "logo_info", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
      <form class=\"form-inline\" role=\"form\" method=\"post\" enctype=\"multipart/form-data\">
        <p>
          <input class=\"mb-4\" type=\"file\" name=\"main_logo\" accept=\"image/gif, image/jpeg, image/pjpeg, image/x-png, image/png, image/svg+xml\"><br>
          <button name=\"submit_main_logo\" type=\"submit\" class=\"btn btn-sm d-block d-sm-inline btn-secondary\"><i class=\"bi bi-upload\"></i> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 15), "upload", [], "any", false, false, false, 15), "html", null, true);
        echo "</button>
        </p>
      </form>
      ";
        // line 18
        if (($context["logo"] ?? null)) {
            // line 19
            echo "        <div class=\"row\">
          <div class=\"col-sm-4\">
            <div class=\"thumbnail\">
              <img class=\"img-thumbnail\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["logo"] ?? null), "html", null, true);
            echo "\" alt=\"mailcow logo\">
              <div class=\"caption\">
                <span class=\"badge fs-5 bg-info\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["logo_specs"] ?? null), "geometry", [], "any", false, false, false, 24), "width", [], "any", false, false, false, 24), "html", null, true);
            echo "x";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["logo_specs"] ?? null), "geometry", [], "any", false, false, false, 24), "height", [], "any", false, false, false, 24), "html", null, true);
            echo " px</span>
                <span class=\"badge fs-5 bg-info\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["logo_specs"] ?? null), "mimetype", [], "any", false, false, false, 25), "html", null, true);
            echo "</span>
                <span class=\"badge fs-5 bg-info\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["logo_specs"] ?? null), "fileSize", [], "any", false, false, false, 26), "html", null, true);
            echo "</span>
              </div>
            </div>
            <hr>
            <form class=\"form-inline\" role=\"form\" method=\"post\">
              <p><button name=\"reset_main_logo\" type=\"submit\" class=\"btn btn-sm d-block d-sm-inline btn-secondary\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 31), "reset_default", [], "any", false, false, false, 31), "html", null, true);
            echo "</button></p>
            </form>
          </div>
        </div>
      ";
        }
        // line 36
        echo "      <legend style=\"padding-top:20px\" unselectable=\"on\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 36), "ip_check", [], "any", false, false, false, 36), "html", null, true);
        echo "</legend><hr />
      <div id=\"ip_check\">
        <form class=\"form\" data-id=\"ip_check\" role=\"form\" method=\"post\">
          <div class=\"mb-4\">
            <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" name=\"ip_check_opt_in\" id=\"ip_check_opt_in\" ";
        // line 40
        if ((($context["ip_check"] ?? null) == 1)) {
            echo "checked";
        }
        echo ">
            <label class=\"form-check-label\" for=\"ip_check_opt_in\">
              ";
        // line 42
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 42), "ip_check_opt_in", [], "any", false, false, false, 42);
        echo "
            </label>
          </div>
          <p><div class=\"btn-group\">
            <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-item=\"admin\" data-id=\"ip_check\" data-reload=\"no\" data-api-url='edit/ip_check' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 46), "save", [], "any", false, false, false, 46), "html", null, true);
        echo "</button>
          </div></p>
        </form>
      </div>
      <legend>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 50), "app_links", [], "any", false, false, false, 50), "html", null, true);
        echo "</legend><hr />
      <p class=\"text-muted\">";
        // line 51
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 51), "merged_vars_hint", [], "any", false, false, false, 51);
        echo "</p>
      <form class=\"form-inline\" data-id=\"app_links\" role=\"form\" method=\"post\">
        <table class=\"table table-condensed\" style=\"white-space: nowrap;\" id=\"app_link_table\">
          <tr>
            <th>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 55), "app_name", [], "any", false, false, false, 55), "html", null, true);
        echo "</th>
            <th>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 56), "link", [], "any", false, false, false, 56), "html", null, true);
        echo "</th>
            <th style=\"width:100px;\">&nbsp;</th>
          </tr>
          ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["app_links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 60
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 61
                echo "              <tr>
                <td><input class=\"input-sm input-xs-lg form-control\" data-id=\"app_links\" type=\"text\" name=\"app\" required value=\"";
                // line 62
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"></td>
                <td><input class=\"input-sm input-xs-lg form-control\" data-id=\"app_links\" type=\"text\" name=\"href\" required value=\"";
                // line 63
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\"></td>
                <td><a href=\"#\" role=\"button\" class=\"btn btn-sm btn-xs-lg btn-secondary h-100 w-100\" type=\"button\">";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 64), "remove_row", [], "any", false, false, false, 64), "html", null, true);
                echo "</a></td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mailcow_apps"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 69
            echo "            <tr>
              <td><input class=\"input-sm input-xs-lg form-control\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo "\" disabled></td>
              <td><input class=\"input-sm input-xs-lg form-control\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 71), "html", null, true);
            echo "\" disabled></td>
              <td><a href=\"#\" role=\"button\" class=\"btn btn-sm btn-xs-lg btn-secondary h-100 w-100 disabled\" type=\"button\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 72), "remove_row", [], "any", false, false, false, 72), "html", null, true);
            echo "</a></td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </table>
        <p><div class=\"btn-group\">
          <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-item=\"admin\" data-id=\"app_links\" data-reload=\"no\" data-api-url='edit/app_links' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 77), "save", [], "any", false, false, false, 77), "html", null, true);
        echo "</button>
          <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" type=\"button\" id=\"add_app_link_row\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 78), "add_row", [], "any", false, false, false, 78), "html", null, true);
        echo "</button>
        </div></p>
      </form>
      <legend data-bs-target=\"#ui_texts\" style=\"padding-top:20px\" unselectable=\"on\">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 81), "ui_texts", [], "any", false, false, false, 81), "html", null, true);
        echo "</legend><hr />
      <div id=\"ui_texts\">
        <form class=\"form\" data-id=\"uitexts\" role=\"form\" method=\"post\">
          <div class=\"mb-2\">
            <label for=\"uitests_title_name\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 85), "title_name", [], "any", false, false, false, 85), "html", null, true);
        echo ":</label>
            <input type=\"text\" class=\"form-control\" id=\"uitests_title_name\" name=\"title_name\" placeholder=\"mailcow UI\" value=\"";
        // line 86
        echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "title_name", [], "any", false, false, false, 86);
        echo "\">
          </div>
          <div class=\"mb-2\">
            <label for=\"uitests_main_name\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 89), "main_name", [], "any", false, false, false, 89), "html", null, true);
        echo ":</label>
            <input type=\"text\" class=\"form-control\" id=\"uitests_main_name\" name=\"main_name\" placeholder=\"mailcow UI\" value=\"";
        // line 90
        echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 90);
        echo "\">
          </div>
          <div class=\"mb-2\">
            <label for=\"uitests_apps_name\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 93), "apps_name", [], "any", false, false, false, 93), "html", null, true);
        echo ":</label>
            <input type=\"text\" class=\"form-control\" id=\"uitests_apps_name\" name=\"apps_name\" placeholder=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "header", [], "any", false, false, false, 94), "apps", [], "any", false, false, false, 94), "html", null, true);
        echo "\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 94);
        echo "\">
          </div>
          <div class=\"mb-4\">
            <label for=\"help_text\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 97), "help_text", [], "any", false, false, false, 97), "html", null, true);
        echo ":</label>
            <textarea class=\"form-control\" id=\"help_text\" name=\"help_text\" rows=\"7\">";
        // line 98
        echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "help_text", [], "any", false, false, false, 98);
        echo "</textarea>
          </div>
          <hr>
          <div>
            <p class=\"text-muted\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 102), "ui_header_announcement_help", [], "any", false, false, false, 102), "html", null, true);
        echo "</p>
            <label for=\"ui_announcement_type\">";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 103), "ui_header_announcement", [], "any", false, false, false, 103), "html", null, true);
        echo ":</label>
            <div class=\"row\">
              <div class=\"col-12 col-md-6 col-lg-4 col-xl-3\">
                <p><select multiple data-width=\"100%\" id=\"ui_announcement_type\" name=\"ui_announcement_type\" class=\"selectpicker show-tick\" data-max-options=\"1\" title=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 106), "ui_header_announcement_select", [], "any", false, false, false, 106), "html", null, true);
        echo "\">
                    <option ";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 107) == "info")) {
            echo "selected";
        }
        echo " value=\"info\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 107), "ui_header_announcement_type_info", [], "any", false, false, false, 107), "html", null, true);
        echo "</option>
                    <option ";
        // line 108
        if ((twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 108) == "warning")) {
            echo "selected";
        }
        echo " value=\"warning\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 108), "ui_header_announcement_type_warning", [], "any", false, false, false, 108), "html", null, true);
        echo "</option>
                    <option ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 109) == "danger")) {
            echo "selected";
        }
        echo " value=\"danger\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 109), "ui_header_announcement_type_danger", [], "any", false, false, false, 109), "html", null, true);
        echo "</option>
                  </select></p>
              </div>
            </div>
            <p><textarea class=\"form-control\" id=\"ui_announcement_text\" name=\"ui_announcement_text\" rows=\"7\">";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 113), "html", null, true);
        echo "</textarea></p>
            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"ui_announcement_active\" class=\"form-check-input\" ";
        // line 116
        if ((twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_active", [], "any", false, false, false, 116) == 1)) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 116), "ui_header_announcement_active", [], "any", false, false, false, 116), "html", null, true);
        echo "
              </label>
            </div>
          </div>
          <hr>
          <div class=\"mb-4\">
            <label for=\"ui_footer\">";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 122), "ui_footer", [], "any", false, false, false, 122), "html", null, true);
        echo ":</label>
            <textarea class=\"form-control\" id=\"ui_footer\" name=\"ui_footer\" rows=\"7\">";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_footer", [], "any", false, false, false, 123), "html", null, true);
        echo "</textarea>
          </div>
          <button class=\"btn btn-sm d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-item=\"ui\" data-id=\"uitexts\" data-api-url='edit/ui_texts' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 125), "save", [], "any", false, false, false, 125), "html", null, true);
        echo "</button>
        </form>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/tab-config-customize.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 125,  347 => 123,  343 => 122,  330 => 116,  324 => 113,  313 => 109,  305 => 108,  297 => 107,  293 => 106,  287 => 103,  283 => 102,  276 => 98,  272 => 97,  264 => 94,  260 => 93,  254 => 90,  250 => 89,  244 => 86,  240 => 85,  233 => 81,  227 => 78,  223 => 77,  219 => 75,  210 => 72,  206 => 71,  202 => 70,  199 => 69,  194 => 68,  188 => 67,  179 => 64,  175 => 63,  171 => 62,  168 => 61,  163 => 60,  159 => 59,  153 => 56,  149 => 55,  142 => 51,  138 => 50,  131 => 46,  124 => 42,  117 => 40,  109 => 36,  101 => 31,  93 => 26,  89 => 25,  83 => 24,  78 => 22,  73 => 19,  71 => 18,  65 => 15,  58 => 11,  54 => 10,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/tab-config-customize.twig", "/web/templates/admin/tab-config-customize.twig");
    }
}
