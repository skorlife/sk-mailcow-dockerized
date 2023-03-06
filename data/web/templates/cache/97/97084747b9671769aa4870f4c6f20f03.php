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

/* admin/tab-config-rspamd.twig */
class __TwigTemplate_48f07f5cb5e749ef3ef2fc6369bec67b extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab-config-rspamd\" role=\"tabpanel\" aria-labelledby=\"tab-config-rspamd\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-rspamd\" data-bs-toggle=\"collapse\" aria-controls=\"ollapse-tab-config-rspamd\">
        Rspamd UI
      </button>
      <span class=\"d-none d-md-block\">Rspamd UI</span>
    </div>
    <div id=\"collapse-tab-config-rspamd\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <div class=\"row\">
        <div class=\"col-12 d-flex d-sm-none mb-4\">
          <img id=\"rspamd_logo_sm\" class=\"img-responsive mx-auto\" src=\"/img/rspamd_logo_dark.png\" alt=\"Rspamd UI\">
        </div>
        <div class=\"col-sm-9 col-12\">
          <form class=\"form-horizontal\" autocapitalize=\"none\" data-id=\"admin\" autocorrect=\"off\" role=\"form\" method=\"post\">
            <div class=\"row mb-4\">
              <div class=\"offset-sm-3 col-sm-9\">
                <label>
                  <a href=\"/rspamd/\" target=\"_blank\"><i class=\"bi bi-window\"></i> Rspamd UI</a>
                </label>
              </div>
            </div>
            <div class=\"row mb-2\">
              <label class=\"control-label col-sm-3 text-sm-end\" for=\"rspamd_ui_pass\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 24), "password", [], "any", false, false, false, 24), "html", null, true);
        echo ":</label>
              <div class=\"col-sm-9\">
                <input type=\"password\" class=\"form-control\" id=\"rspamd_ui_pass\" name=\"rspamd_ui_pass\" autocomplete=\"new-password\" required>
              </div>
            </div>
            <div class=\"row mb-4\">
              <label class=\"control-label col-sm-3 text-sm-end\" for=\"rspamd_ui_pass2\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 30), "password_repeat", [], "any", false, false, false, 30), "html", null, true);
        echo ":</label>
              <div class=\"col-sm-9\">
                <input type=\"password\" class=\"form-control\" id=\"rspamd_ui_pass2\" name=\"rspamd_ui_pass2\" autocomplete=\"new-password\" required>
              </div>
            </div>
            <div class=\"row mb-4\">
              <div class=\"offset-sm-3 col-sm-9\">
                <button type=\"submit\" class=\"btn btn-sm d-block d-sm-inline btn-success\" id=\"rspamd_ui\" name=\"rspamd_ui\" href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 37), "save", [], "any", false, false, false, 37), "html", null, true);
        echo "</button>
              </div>
            </div>
          </form>
        </div>
        <div class=\"col-sm-3 d-none d-sm-block\">
          <img id=\"rspamd_logo\" class=\"img-responsive\" src=\"/img/rspamd_logo_dark.png\" alt=\"Rspamd UI\">
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/tab-config-rspamd.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 37,  71 => 30,  62 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/tab-config-rspamd.twig", "/web/templates/admin/tab-config-rspamd.twig");
    }
}
