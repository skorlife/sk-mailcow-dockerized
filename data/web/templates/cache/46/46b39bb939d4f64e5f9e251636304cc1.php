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

/* admin/tab-sys-mails.twig */
class __TwigTemplate_a1ee12e3e19955e2b5488e8d6b5aae72 extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab-sys-mails\" role=\"tabpanel\" aria-labelledby=\"tab-sys-mails\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-sys-mails\" data-bs-toggle=\"collapse\" aria-controls=\"ollapse-tab-sys-mails\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "sys_mails", [], "any", false, false, false, 5), "html", null, true);
        echo "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "sys_mails", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
    </div>
    <div id=\"collapse-tab-sys-mails\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <form class=\"form-horizontal\" autocapitalize=\"none\" data-id=\"admin\" autocorrect=\"off\" role=\"form\" method=\"post\">
        <div class=\"row mb-2\">
          <label class=\"control-label col-sm-2 text-sm-end\" for=\"admin_mass_from\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 12), "from", [], "any", false, false, false, 12), "html", null, true);
        echo ":</label>
          <div class=\"col-sm-10\">
            <input type=\"email\" class=\"form-control\" id=\"admin_mass_from\" name=\"mass_from\" value=\"noreply@";
        // line 14
        echo twig_escape_filter($this->env, ($context["mailcow_hostname"] ?? null), "html", null, true);
        echo "\" required>
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"control-label col-sm-2 text-sm-end\" for=\"admin_mass_subject\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 18), "subject", [], "any", false, false, false, 18), "html", null, true);
        echo ":</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" class=\"form-control\" id=\"admin_mass_subject\" name=\"mass_subject\" required>
          </div>
        </div>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 24
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        <div class=\"row mb-4\">
          <label class=\"control-label col-sm-2 text-sm-end\" for=\"mass_subject\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 27), "include_exclude", [], "any", false, false, false, 27), "html", null, true);
        echo ":
            <p class=\"text-muted\">";
        // line 28
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 28), "include_exclude_info", [], "any", false, false, false, 28);
        echo "</p>
          </label>
          <div class=\"col-sm-5\">
            <label class=\"d-block\" for=\"mass_exclude\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 31), "excludes", [], "any", false, false, false, 31), "html", null, true);
        echo ":</label>
            <select id=\"mass_exclude\" name=\"mass_exclude[]\" data-live-search=\"true\" data-width=\"100%\"  size=\"30\" multiple>
              ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mailboxes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mailbox"]) {
            // line 34
            echo "                <option>";
            echo twig_escape_filter($this->env, $context["mailbox"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailbox'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </select>
          </div>
          <div class=\"col-sm-5\">
            <label class=\"d-block\" for=\"mass_include\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 39), "includes", [], "any", false, false, false, 39), "html", null, true);
        echo ":</label>
            <select id=\"mass_include\" name=\"mass_include[]\" data-live-search=\"true\" data-width=\"100%\"  size=\"30\" multiple>
              ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mailboxes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mailbox"]) {
            // line 42
            echo "                <option>";
            echo twig_escape_filter($this->env, $context["mailbox"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailbox'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </select>
          </div>
        </div>
        <div class=\"row mb-2\">
          <label class=\"control-label col-sm-2 text-sm-end\" for=\"mass_text\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 48), "text", [], "any", false, false, false, 48), "html", null, true);
        echo ":</label>
          <div class=\"col-sm-10\">
            <textarea class=\"form-control\" rows=\"10\" name=\"mass_text\" id=\"mass_text\" required></textarea>
          </div>
        </div>
        <div class=\"row mb-4\">
          <label class=\"control-label col-sm-2 text-sm-end\" for=\"mass_html\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 54), "html", [], "any", false, false, false, 54), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 54), "optional", [], "any", false, false, false, 54), "html", null, true);
        echo "):</label>
          <div class=\"col-sm-10\">
            <textarea class=\"form-control\" rows=\"10\" name=\"mass_html\" id=\"mass_html\"></textarea>
            <p class=\"small\"><i class=\"bi bi-arrow-return-right\"></i> <a target=\"_blank\" href=\"https://templates.mailchimp.com/resources/html-to-text/\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 57), "convert_html_to_text", [], "any", false, false, false, 57), "html", null, true);
        echo "</a></p>
          </div>
        </div>
        <div class=\"row mb-2\">
          <div class=\"offset-sm-2 col-sm-10\">
            <label>
              <input type=\"checkbox\" id=\"mass_disarm\"> ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 63), "activate_send", [], "any", false, false, false, 63), "html", null, true);
        echo "
            </label>
          </div>
        </div>
        <div class=\"row mb-2\">
          <div class=\"offset-sm-2 col-sm-10\">
            <button class=\"btn btn-sm d-block d-sm-inline btn-success\" type=\"submit\" id=\"mass_send\" name=\"mass_send\" disabled><i class=\"bi bi-envelope-fill\"></i> ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 69), "send", [], "any", false, false, false, 69), "html", null, true);
        echo "</button>
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
        return "admin/tab-sys-mails.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 69,  173 => 63,  164 => 57,  156 => 54,  147 => 48,  141 => 44,  132 => 42,  128 => 41,  123 => 39,  118 => 36,  109 => 34,  105 => 33,  100 => 31,  94 => 28,  90 => 27,  87 => 26,  80 => 24,  76 => 23,  68 => 18,  61 => 14,  56 => 12,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/tab-sys-mails.twig", "/web/templates/admin/tab-sys-mails.twig");
    }
}
