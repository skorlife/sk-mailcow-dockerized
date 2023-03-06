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

/* admin/tab-config-rsettings.twig */
class __TwigTemplate_3fe1fc55bffa6ac5ba2ba9041bb8420f extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab-config-rsettings\" role=\"tabpanel\" aria-labelledby=\"tab-config-rsettings\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-rsettings\" data-bs-toggle=\"collapse\" aria-controls=\"ollapse-tab-config-rsettings\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "rspamd_settings_map", [], "any", false, false, false, 5), "html", null, true);
        echo "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "rspamd_settings_map", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
    </div>
    <div id=\"collapse-tab-config-rsettings\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <legend data-bs-target=\"#active_settings_map\" style=\"cursor:pointer\" unselectable=\"on\" data-bs-toggle=\"collapse\">
        <i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 11), "active_rspamd_settings_map", [], "any", false, false, false, 11), "html", null, true);
        echo "
      </legend>
      <hr />
      <div id=\"active_settings_map\" class=\"collapse\" >
        <textarea autocorrect=\"off\" spellcheck=\"false\" autocapitalize=\"none\" class=\"form-control textarea-code\" rows=\"20\" name=\"settings_map\" readonly>";
        // line 15
        echo twig_escape_filter($this->env, ($context["rsettings_map"] ?? null), "html", null, true);
        echo "</textarea>
      </div>
      <br>
      <form class=\"form\" data-id=\"rsettings\" role=\"form\" method=\"post\">
        <div class=\"row\">
          <div class=\"col-sm-3\">
            <div class=\"list-group\">
              ";
        // line 22
        if ( !($context["rsettings"] ?? null)) {
            // line 23
            echo "
              ";
        }
        // line 25
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rsettings"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rsetting"]) {
            // line 26
            echo "                <a href=\"#\" class=\"list-group-item list-group-item-";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 26), "active", [], "any", false, false, false, 26)) {
                echo "success";
            }
            echo "\" data-dont-remember=\"1\" data-bs-target=\"#settings_tab";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\" data-bs-toggle=\"tab\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 26), "desc", [], "any", false, false, false, 26), "html", null, true);
            echo " (ID #";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rsetting"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo ")</a>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "                <span class=\"list-group-item\"><em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 28), "rsetting_none", [], "any", false, false, false, 28), "html", null, true);
            echo "</em></span>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rsetting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "              <a href=\"#\" class=\"list-group-item list-group-item-default\"
                 data-bs-toggle=\"modal\"
                 data-dont-remember=\"1\"
                 data-bs-target=\"#addRsettingModal\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 33), "rsetting_add_rule", [], "any", false, false, false, 33), "html", null, true);
        echo "</a>
            </div>
          </div>
          <div class=\"col-sm-9\">
            <div class=\"tab-content\">
              ";
        // line 38
        if ( !($context["rsettings"] ?? null)) {
            // line 39
            echo "                <div id=\"none\" class=\"tab-pane active\">
                  <p class=\"text-muted\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 40), "rsetting_none", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
                </div>
              ";
        } else {
            // line 43
            echo "                <div id=\"none\" class=\"tab-pane active\">
                  <p class=\"text-muted\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 44), "rsetting_no_selection", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                </div>
                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rsettings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rsetting"]) {
                // line 47
                echo "                  <div id=\"settings_tab";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
                echo "\" class=\"tab-pane\">
                    <form class=\"form\" data-id=\"rsettings\" role=\"form\" method=\"post\">
                      <input type=\"hidden\" name=\"active\" value=\"0\">
                      <div>
                        <label for=\"rsettings_desc\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 51), "rsetting_desc", [], "any", false, false, false, 51), "html", null, true);
                echo ":</label>
                        <input type=\"text\" class=\"form-control\" id=\"rsettings_desc\" name=\"desc\" value=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 52), "desc", [], "any", false, false, false, 52), "html", null, true);
                echo "\">
                      </div>
                      <div class=\"mt-4\">
                        <label for=\"rsettings_content\">";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 55), "rsetting_content", [], "any", false, false, false, 55), "html", null, true);
                echo ":</label>
                        <textarea class=\"form-control\" id=\"rsettings_content\" name=\"content\" rows=\"10\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 56), "content", [], "any", false, false, false, 56), "html", null, true);
                echo "</textarea>
                      </div>
                      <div class=\"mt-4 mb-2\">
                        <label>
                          <input type=\"checkbox\" name=\"active\" value=\"1\" ";
                // line 60
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 60), "active", [], "any", false, false, false, 60)) {
                    echo "checked";
                }
                echo "> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 60), "active", [], "any", false, false, false, 60), "html", null, true);
                echo "
                        </label>
                      </div>
                      <button class=\"btn btn-sm btn-success\" data-action=\"edit_selected\" data-item=\"";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
                echo "\" data-id=\"rsettings\" data-api-url='edit/rsetting' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 63), "save", [], "any", false, false, false, 63), "html", null, true);
                echo "</button>
                      <button class=\"btn btn-sm btn-danger\" data-action=\"delete_selected\" data-item=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rsetting"], "details", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
                echo "\" data-id=\"rsettings\" data-api-url=\"delete/rsetting\" data-api-attr='{}' href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 64), "remove", [], "any", false, false, false, 64), "html", null, true);
                echo "</button>
                    </form>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rsetting'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "              ";
        }
        // line 69
        echo "            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/tab-config-rsettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 69,  202 => 68,  190 => 64,  184 => 63,  174 => 60,  167 => 56,  163 => 55,  157 => 52,  153 => 51,  145 => 47,  141 => 46,  136 => 44,  133 => 43,  127 => 40,  124 => 39,  122 => 38,  114 => 33,  109 => 30,  100 => 28,  84 => 26,  78 => 25,  74 => 23,  72 => 22,  62 => 15,  55 => 11,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/tab-config-rsettings.twig", "/web/templates/admin/tab-config-rsettings.twig");
    }
}
