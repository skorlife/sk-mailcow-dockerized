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

/* quarantine.twig */
class __TwigTemplate_6f79f5860b56914563da074295e9a312 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "quarantine.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"row\">
  <div class=\"col-md-12\">
    <div class=\"card card-xs-lg\">
      <div class=\"card-header d-flex\">
        ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 8), "quarantine", [], "any", false, false, false, 8), "html", null, true);
        echo " <span class=\"badge bg-info table-lines\"></span>
        <div class=\"btn-group ms-auto\">
          <button class=\"btn btn-xs btn-xs-lg btn-secondary refresh_table\" data-draw=\"draw_quarantine_table\" data-table=\"quarantinetable\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 10), "refresh", [], "any", false, false, false, 10), "html", null, true);
        echo "</button>
        </div>
      </div>
      <div class=\"card-body\">
        <div class=\"mass-actions-quarantine mb-4\">
          <div class=\"btn-group\" data-acl=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "quarantine", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"qitems\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 16), "toggle_all", [], "any", false, false, false, 16), "html", null, true);
        echo "</a>
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 17), "quick_actions", [], "any", false, false, false, 17), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"quarantinetable\" data-table=\"quarantinetable\" href=\"#\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 19), "expand_all", [], "any", false, false, false, 19), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"quarantinetable\" data-table=\"quarantinetable\" href=\"#\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 20), "collapse_all", [], "any", false, false, false, 20), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"qitems\" data-api-url='edit/qitem' data-api-attr='{\"action\":\"release\"}' href=\"#\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 22), "deliver_inbox", [], "any", false, false, false, 22), "html", null, true);
        echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"qitems\" data-api-url='edit/qitem' data-api-attr='{\"action\":\"learnspam\"}' href=\"#\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 24), "learn_spam_delete", [], "any", false, false, false, 24), "html", null, true);
        echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"qitems\" data-api-url='delete/qitem' href=\"#\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 26), "remove", [], "any", false, false, false, 26), "html", null, true);
        echo "</a></li>
            </ul>
          </div>
        </div>
        <p class=\"text-muted\">";
        // line 30
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 30), "qinfo", [], "any", false, false, false, 30);
        echo "</p>
        <p>
          ";
        // line 32
        if (( !twig_get_attribute($this->env, $this->source, ($context["quarantine_settings"] ?? null), "retention_size", [], "any", false, false, false, 32) ||  !twig_get_attribute($this->env, $this->source, ($context["quarantine_settings"] ?? null), "max_size", [], "any", false, false, false, 32))) {
            // line 33
            echo "          <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 33), "disabled_by_config", [], "any", false, false, false, 33), "html", null, true);
            echo "</div>
          ";
        } else {
            // line 35
            echo "          <p style=\"margin:10px\" class=\"text-muted\">
            ";
            // line 36
            echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 36), "settings_info", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, ($context["quarantine_settings"] ?? null), "retention_size", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, ($context["quarantine_settings"] ?? null), "max_size", [], "any", false, false, false, 36));
            echo "
          </p>
          ";
        }
        // line 39
        echo "        </p>
        <table id=\"quarantinetable\" class=\"table table-striped w-100\"></table>
        <div class=\"mass-actions-quarantine mt-4\">
          <div class=\"btn-group\" data-acl=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "quarantine", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"qitems\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 43), "toggle_all", [], "any", false, false, false, 43), "html", null, true);
        echo "</a>
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 44), "quick_actions", [], "any", false, false, false, 44), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"quarantinetable\" data-table=\"quarantinetable\" href=\"#\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 46), "expand_all", [], "any", false, false, false, 46), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"quarantinetable\" data-table=\"quarantinetable\" href=\"#\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 47), "collapse_all", [], "any", false, false, false, 47), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"qitems\" data-api-url='edit/qitem' data-api-attr='{\"action\":\"release\"}' href=\"#\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 49), "deliver_inbox", [], "any", false, false, false, 49), "html", null, true);
        echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"qitems\" data-api-url='edit/qitem' data-api-attr='{\"action\":\"learnspam\"}' href=\"#\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 51), "learn_spam_delete", [], "any", false, false, false, 51), "html", null, true);
        echo "</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"qitems\" data-api-url='delete/qitem' href=\"#\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "quarantine", [], "any", false, false, false, 53), "remove", [], "any", false, false, false, 53), "html", null, true);
        echo "</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /col-md-12 -->
</div> <!-- /row -->

";
        // line 62
        $this->loadTemplate("modals/quarantine.twig", "quarantine.twig", 62)->display($context);
        // line 63
        echo "
<script type='text/javascript'>
var acl = '";
        // line 65
        echo ($context["acl_json"] ?? null);
        echo "';
var lang = ";
        // line 66
        echo ($context["lang_quarantine"] ?? null);
        echo ";
var lang_datatables = ";
        // line 67
        echo ($context["lang_datatables"] ?? null);
        echo ";
var csrf_token = '";
        // line 68
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "';
var pagination_size = Math.trunc('";
        // line 69
        echo twig_escape_filter($this->env, ($context["pagination_size"] ?? null), "html", null, true);
        echo "');
var role = '";
        // line 70
        echo twig_escape_filter($this->env, ($context["role"] ?? null), "html", null, true);
        echo "';
</script>
";
    }

    public function getTemplateName()
    {
        return "quarantine.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 70,  201 => 69,  197 => 68,  193 => 67,  189 => 66,  185 => 65,  181 => 63,  179 => 62,  167 => 53,  162 => 51,  157 => 49,  152 => 47,  148 => 46,  143 => 44,  139 => 43,  135 => 42,  130 => 39,  124 => 36,  121 => 35,  115 => 33,  113 => 32,  108 => 30,  101 => 26,  96 => 24,  91 => 22,  86 => 20,  82 => 19,  77 => 17,  73 => 16,  69 => 15,  61 => 10,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quarantine.twig", "/web/templates/quarantine.twig");
    }
}
