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

/* modals/quarantine.twig */
class __TwigTemplate_7b74e4716a9f046db5f7d18348d3ea4b extends Template
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
        echo "<div class=\"modal fade\" id=\"qidDetailModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\"><i class=\"bi bi-info-circle-fill\"></i> ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 5), "qitem", [], "any", false, false, false, 5), "html", null, true);
        echo "</h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"qid_error\" style=\"display:none\" class=\"alert alert-danger\"></div>
        <div>
          <label for=\"qid_detail_symbols\"><h4>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 11), "rspamd_result", [], "any", false, false, false, 11), "html", null, true);
        echo ":</h4></label>
          <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 12), "spam_score", [], "any", false, false, false, 12), "html", null, true);
        echo ": <span id=\"qid_detail_score\"></span></p>
          <hr>
          <p id=\"qid_detail_symbols\"></p>
        </div>
        <div>
          <label for=\"qid_detail_subj\"><h4>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 17), "subj", [], "any", false, false, false, 17), "html", null, true);
        echo ":</h4></label>
          <p id=\"qid_detail_subj\"></p>
        </div>
        <div>
          <label for=\"qid_detail_recipients\"><h4>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 21), "recipients", [], "any", false, false, false, 21), "html", null, true);
        echo ":</h4></label>
          <p id=\"qid_detail_recipients\"></p>
        </div>
        <div>
          <label for=\"qid_detail_hfrom\"><h4>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 25), "sender_header", [], "any", false, false, false, 25), "html", null, true);
        echo ":</h4></label>
          <p><span class=\"mail-address-item\" id=\"qid_detail_hfrom\"></span></p>
        </div>
        <div>
          <label for=\"qid_detail_efrom\"><h4>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 29), "sender", [], "any", false, false, false, 29), "html", null, true);
        echo ":</h4></label>
          <p><span class=\"mail-address-item\" id=\"qid_detail_efrom\"></span></p>
        </div>
        <div>
          <label for=\"qid_detail_fuzzy\"><h4>Fuzzy Hashes:</h4></label>
          <p id=\"qid_detail_fuzzy\"></p>
        </div>
        <div id=\"qTextPlain\">
          <label for=\"qid_detail_text\"><h4>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 37), "text_plain_content", [], "any", false, false, false, 37), "html", null, true);
        echo ":</h4></label>
          <pre id=\"qid_detail_text\"></pre>
        </div>
        <div id=\"qTextHtml\">
          <label for=\"qid_detail_text_from_html\"><h4>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 41), "text_from_html_content", [], "any", false, false, false, 41), "html", null, true);
        echo ":</h4></label>
          <pre id=\"qid_detail_text_from_html\"></pre>
        </div>
        ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "quarantine_attachments", [], "any", false, false, false, 44) == 1)) {
            // line 45
            echo "        <div>
          <label for=\"qid_detail_atts\"><h4>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 46), "atts", [], "any", false, false, false, 46), "html", null, true);
            echo ":</h4></label>
          <div id=\"qid_detail_atts\">-</div>
        </div>
        ";
        }
        // line 50
        echo "        <div class=\"btn-group dropup\" data-acl=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "quarantine", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
          <a class=\"btn btn-sm btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 51), "quick_actions", [], "any", false, false, false, 51), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"qitems_single\" data-item=\"\" data-api-url='edit/qitem' data-api-attr='{\"action\":\"release\"}' href=\"#\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 53), "deliver_inbox", [], "any", false, false, false, 53), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"qitems_single\" data-item=\"\" data-api-url='edit/qitem' data-api-attr='{\"action\":\"learnspam\"}' href=\"#\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 55), "learn_spam_delete", [], "any", false, false, false, 55), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-id=\"qitems_single\" data-item=\"\" id=\"quick_download_link\" href=\"#\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 57), "download_eml", [], "any", false, false, false, 57), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-id=\"qitems_single\" data-item=\"\" id=\"quick_release_link\" href=\"#\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 59), "quick_release_link", [], "any", false, false, false, 59), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-id=\"qitems_single\" data-item=\"\" id=\"quick_delete_link\" href=\"#\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 60), "quick_delete_link", [], "any", false, false, false, 60), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"qitems_single\" data-item=\"\" data-api-url='delete/qitem' href=\"#\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 62), "remove", [], "any", false, false, false, 62), "html", null, true);
        echo "</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modals/quarantine.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 62,  150 => 60,  146 => 59,  141 => 57,  136 => 55,  131 => 53,  126 => 51,  121 => 50,  114 => 46,  111 => 45,  109 => 44,  103 => 41,  96 => 37,  85 => 29,  78 => 25,  71 => 21,  64 => 17,  56 => 12,  52 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modals/quarantine.twig", "/web/templates/modals/quarantine.twig");
    }
}
