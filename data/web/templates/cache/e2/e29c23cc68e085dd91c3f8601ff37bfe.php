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

/* admin/tab-config-quarantine.twig */
class __TwigTemplate_44dc5e56cf289ab6cda15b73a66cccda extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab-config-quarantine\" role=\"tabpanel\" aria-labelledby=\"tab-config-quarantine\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-quarantine\" data-bs-toggle=\"collapse\" aria-controls=\"ollapse-tab-config-quarantine\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "quarantine", [], "any", false, false, false, 5), "html", null, true);
        echo "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "quarantine", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
    </div>
    <div id=\"collapse-tab-config-quarantine\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      ";
        // line 10
        if (( !twig_get_attribute($this->env, $this->source, ($context["q_data"] ?? null), "retention_size", [], "any", false, false, false, 10) ||  !twig_get_attribute($this->env, $this->source, ($context["q_data"] ?? null), "max_size", [], "any", false, false, false, 10))) {
            // line 11
            echo "      <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 11), "disabled_by_config", [], "any", false, false, false, 11), "html", null, true);
            echo "</div>
      ";
        }
        // line 13
        echo "      <form class=\"form-horizontal\" data-id=\"quarantine\" role=\"form\" method=\"post\">
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_retention_size\">";
        // line 15
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 15), "quarantine_retention_size", [], "any", false, false, false, 15);
        echo "</label>
          <div class=\"col-sm-8\">
            <input type=\"number\" class=\"form-control\" id=\"quarantine_retention_size\" name=\"retention_size\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["q_data"] ?? null), "retention_size", [], "any", false, false, false, 17), "html", null, true);
        echo "\" placeholder=\"0\" required>
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_max_size\">";
        // line 21
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 21), "quarantine_max_size", [], "any", false, false, false, 21);
        echo "</label>
          <div class=\"col-sm-8\">
            <input type=\"number\" class=\"form-control\" id=\"quarantine_max_size\" name=\"max_size\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["q_data"] ?? null), "max_size", [], "any", false, false, false, 23), "html", null, true);
        echo "\" placeholder=\"0\" required>
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_max_score\">";
        // line 27
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 27), "quarantine_max_score", [], "any", false, false, false, 27);
        echo "</label>
          <div class=\"col-sm-8\">
            <input type=\"number\" class=\"form-control\" id=\"quarantine_max_score\" name=\"max_score\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["q_data"] ?? null), "max_score", [], "any", false, false, false, 29), "html", null, true);
        echo "\" placeholder=\"9999.0\">
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_max_age\">";
        // line 33
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 33), "quarantine_max_age", [], "any", false, false, false, 33);
        echo "</label>
          <div class=\"col-sm-8\">
            <input type=\"number\" class=\"form-control\" id=\"quarantine_max_age\" name=\"max_age\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["q_data"] ?? null), "max_age", [], "any", false, false, false, 35), "html", null, true);
        echo "\" min=\"1\" required>
          </div>
        </div>
        <hr>
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_redirect\"><i class=\"bi bi-box-arrow-right\"></i> ";
        // line 40
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 40), "quarantine_redirect", [], "any", false, false, false, 40);
        echo "</label>
          <div class=\"col-sm-8\">
            <input type=\"email\" class=\"form-control\" id=\"quarantine_redirect\" name=\"redirect\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["q_data"] ?? null), "redirect", [], "any", false, false, false, 42), "html", null, true);
        echo "\" placeholder=\"\">
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_bcc\"><i class=\"bi bi-files\"></i> ";
        // line 46
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 46), "quarantine_bcc", [], "any", false, false, false, 46);
        echo "</label>
          <div class=\"col-sm-8\">
            <input type=\"email\" class=\"form-control\" id=\"quarantine_bcc\" name=\"bcc\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["q_data"] ?? null), "bcc", [], "any", false, false, false, 48), "html", null, true);
        echo "\" placeholder=\"\">
          </div>
        </div>
        <hr>
        <div class=\"row mb-2\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_sender\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 53), "quarantine_notification_sender", [], "any", false, false, false, 53), "html", null, true);
        echo ":</label>
          <div class=\"col-sm-8\">
            <input type=\"email\" class=\"form-control\" id=\"quarantine_sender\" name=\"sender\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["q_data"] ?? null), "sender", [], "any", false, false, false, 55), "html", null, true);
        echo "\" placeholder=\"quarantine@localhost\">
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_subject\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 59), "quarantine_notification_subject", [], "any", false, false, false, 59), "html", null, true);
        echo ":</label>
          <div class=\"col-sm-8\">
            <input type=\"text\" class=\"form-control\" id=\"quarantine_subject\" name=\"subject\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["q_data"] ?? null), "subject", [], "any", false, false, false, 61), "html", null, true);
        echo "\" placeholder=\"Spam Quarantine Notification\">
          </div>
        </div>
        <hr>
        <div class=\"row mb-2\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"quarantine_release_format\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 66), "quarantine_release_format", [], "any", false, false, false, 66), "html", null, true);
        echo ":</label>
          <div class=\"col-sm-8 col-md-6 col-lg-4 col-xl-3\">
            <select data-width=\"100%\" id=\"quarantine_release_format\" name=\"release_format\" class=\"selectpicker\" title=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 68), "select", [], "any", false, false, false, 68), "html", null, true);
        echo "\">
              <option ";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, ($context["q_data"] ?? null), "release_format", [], "any", false, false, false, 69) == "raw")) {
            echo "selected";
        }
        echo " value=\"raw\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 69), "quarantine_release_format_raw", [], "any", false, false, false, 69), "html", null, true);
        echo "</option>
              <option ";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, ($context["q_data"] ?? null), "release_format", [], "any", false, false, false, 70) == "attachment")) {
            echo "selected";
        }
        echo " value=\"attachment\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 70), "quarantine_release_format_att", [], "any", false, false, false, 70), "html", null, true);
        echo "</option>
            </select>
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"col-sm-4 control-label text-sm-end\" for=\"exclude_domains\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 75), "quarantine_exclude_domains", [], "any", false, false, false, 75), "html", null, true);
        echo ":</label>
          <div class=\"col-sm-8 col-md-6 col-lg-4 col-xl-3\">
            <select data-width=\"100%\" name=\"exclude_domains\" class=\"selectpicker\" title=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 77), "select", [], "any", false, false, false, 77), "html", null, true);
        echo "\" multiple>
              ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 79
            echo "                <option ";
            if (twig_in_filter($context["domain"], twig_get_attribute($this->env, $this->source, ($context["q_data"] ?? null), "exclude_domains", [], "any", false, false, false, 79))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </select>
          </div>
        </div>
        <hr>
        <legend data-bs-target=\"#quarantine_template\" style=\"cursor:pointer\" unselectable=\"on\" data-bs-toggle=\"collapse\">
          <i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> ";
        // line 86
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 86), "quarantine_notification_html", [], "any", false, false, false, 86);
        echo "
        </legend>
        <hr />
        <div id=\"quarantine_template\" class=\"collapse\" >
          <textarea autocorrect=\"off\" spellcheck=\"false\" autocapitalize=\"none\" class=\"form-control textarea-code\" rows=\"40\" name=\"html_tmpl\">";
        // line 90
        echo twig_get_attribute($this->env, $this->source, ($context["q_data"] ?? null), "html_tmpl", [], "any", false, false, false, 90);
        echo "</textarea>
        </div>
        <button class=\"btn btn-sm d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-item=\"self\" data-id=\"quarantine\" data-api-url='edit/quarantine' data-api-attr='{\"action\":\"settings\"}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 92), "save", [], "any", false, false, false, 92), "html", null, true);
        echo "</button>
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/tab-config-quarantine.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 92,  234 => 90,  227 => 86,  220 => 81,  207 => 79,  203 => 78,  199 => 77,  194 => 75,  182 => 70,  174 => 69,  170 => 68,  165 => 66,  157 => 61,  152 => 59,  145 => 55,  140 => 53,  132 => 48,  127 => 46,  120 => 42,  115 => 40,  107 => 35,  102 => 33,  95 => 29,  90 => 27,  83 => 23,  78 => 21,  71 => 17,  66 => 15,  62 => 13,  56 => 11,  54 => 10,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/tab-config-quarantine.twig", "/web/templates/admin/tab-config-quarantine.twig");
    }
}
