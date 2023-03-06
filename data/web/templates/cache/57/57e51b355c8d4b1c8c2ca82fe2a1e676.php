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

/* queue.twig */
class __TwigTemplate_f84c5d5384848d80b8cf451ef32b90ae extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "queue.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <span>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 6), "queue_manager", [], "any", false, false, false, 6), "html", null, true);
        echo " <span class=\"badge bg-info table-lines\"></span></span>
      <div class=\"btn-group ms-auto\">
        <button class=\"btn btn-xs btn-secondary refresh_table\" data-draw=\"draw_queue\" data-table=\"queuetable\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 8), "refresh", [], "any", false, false, false, 8), "html", null, true);
        echo "</button>
      </div>
    </div>
    <div class=\"card-body\">
      <p class=\"text-muted\">";
        // line 12
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 12), "info", [], "any", false, false, false, 12);
        echo "</p>
      <p class=\"text-muted\"><b>";
        // line 13
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 13), "legend", [], "any", false, false, false, 13);
        echo "</b></p>
      <ul class=\"text-muted\">
      <li>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 15), "deliver_mail", [], "any", false, false, false, 15), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 15), "deliver_mail_legend", [], "any", false, false, false, 15), "html", null, true);
        echo "</li>
      <li>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 16), "unhold_mail", [], "any", false, false, false, 16), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 16), "unhold_mail_legend", [], "any", false, false, false, 16), "html", null, true);
        echo "</li>
      <li>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 17), "hold_mail", [], "any", false, false, false, 17), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 17), "hold_mail_legend", [], "any", false, false, false, 17), "html", null, true);
        echo "</li>
      </ul>
      <table id=\"queuetable\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-admin\">
        <div class=\"btn-group\">
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"mailqitems\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 22), "toggle_all", [], "any", false, false, false, 22), "html", null, true);
        echo "</a>
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 23), "quick_actions", [], "any", false, false, false, 23), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-bs-toggle=\"tooltip\" title=\"postqueue -i\" data-action=\"edit_selected\" data-id=\"mailqitems\" data-api-url='edit/mailq' data-api-attr='{\"action\":\"deliver\"}' href=\"#\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 25), "deliver_mail", [], "any", false, false, false, 25), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-bs-toggle=\"tooltip\" title=\"postsuper -H\" data-action=\"edit_selected\" data-id=\"mailqitems\" data-api-url='edit/mailq' data-api-attr='{\"action\":\"unhold\"}' href=\"#\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 26), "unhold_mail", [], "any", false, false, false, 26), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-bs-toggle=\"tooltip\" title=\"postsuper -h\" data-action=\"edit_selected\" data-id=\"mailqitems\" data-api-url='edit/mailq' data-api-attr='{\"action\":\"hold\"}' href=\"#\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 27), "hold_mail", [], "any", false, false, false, 27), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-bs-toggle=\"tooltip\" title=\"postsuper -d\" data-action=\"delete_selected\" data-id=\"mailqitems\" data-api-url='delete/mailq' href=\"#\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 29), "remove", [], "any", false, false, false, 29), "html", null, true);
        echo "</a></li>
          </ul>
          <a class=\"btn btn-sm d-block d-sm-inline btn-primary\"
             data-action=\"edit_selected\"
             data-item=\"mailqitems-all\"
             data-api-url='edit/mailq'
             data-api-attr='{\"action\":\"flush\"}'
             data-bs-toggle=\"tooltip\" title=\"postqueue -f\"
             href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 37), "flush", [], "any", false, false, false, 37), "html", null, true);
        echo "</a>
          <a class=\"btn btn-sm d-block d-sm-inline btn-danger\"
             id=\"super_delete\"
             data-action=\"edit_selected\"
             data-item=\"mailqitems-all\"
             data-api-url='edit/mailq'
             data-api-attr='{\"action\":\"super_delete\"}'
             data-bs-toggle=\"tooltip\" title=\"postsuper -d ALL\"
             href=\"#\"><i class=\"bi bi-trash\"></i> ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "queue", [], "any", false, false, false, 45), "delete", [], "any", false, false, false, 45), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>

";
        // line 51
        $this->loadTemplate("modals/queue.twig", "queue.twig", 51)->display($context);
        // line 52
        echo "
<script type='text/javascript'>
  var lang_admin = ";
        // line 54
        echo ($context["lang_admin"] ?? null);
        echo ";
  var lang = ";
        // line 55
        echo ($context["lang_queue"] ?? null);
        echo ";
  var lang_datatables = ";
        // line 56
        echo ($context["lang_datatables"] ?? null);
        echo ";
  var csrf_token = '";
        // line 57
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "';
  var pagination_size = Math.trunc('";
        // line 58
        echo twig_escape_filter($this->env, ($context["pagination_size"] ?? null), "html", null, true);
        echo "');
  var table_for_domain = '";
        // line 59
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "';
</script>
";
    }

    public function getTemplateName()
    {
        return "queue.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 59,  172 => 58,  168 => 57,  164 => 56,  160 => 55,  156 => 54,  152 => 52,  150 => 51,  141 => 45,  130 => 37,  119 => 29,  114 => 27,  110 => 26,  106 => 25,  101 => 23,  97 => 22,  87 => 17,  81 => 16,  75 => 15,  70 => 13,  66 => 12,  59 => 8,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "queue.twig", "/web/templates/queue.twig");
    }
}
