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

/* admin/tab-globalfilter-regex.twig */
class __TwigTemplate_65d6142a663226d3b37297cfa677a5f4 extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab-globalfilter-regex\" role=\"tabpanel\" aria-labelledby=\"tab-globalfilter-regex\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-regex\" data-bs-toggle=\"collapse\" aria-controls=\"ollapse-tab-config-regex\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "rspamd_global_filters", [], "any", false, false, false, 5), "html", null, true);
        echo "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "rspamd_global_filters", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
    </div>
    <div id=\"collapse-tab-config-regex\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "rspamd_global_filters_info", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
      <div id=\"confirm_show_rspamd_global_filters\"";
        // line 11
        if (($context["show_rspamd_global_filters"] ?? null)) {
            echo " class=\"d-none\"";
        }
        echo ">
        <div class=\"row\">
          <div class=\"offset-sm-2 col-sm-10\">
            <label>
              <input type=\"checkbox\" id=\"show_rspamd_global_filters\"> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 15), "rspamd_global_filters_agree", [], "any", false, false, false, 15), "html", null, true);
        echo "
            </label>
          </div>
        </div>
      </div>
      <div id=\"rspamd_global_filters\"";
        // line 20
        if ((($context["show_rspamd_global_filters"] ?? null) != true)) {
            echo " class=\"d-none\"";
        }
        echo ">
        <hr>
        <span class=\"anchor\" id=\"regexmaps\"></span>
        <h4>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 23), "regex_maps", [], "any", false, false, false, 23), "html", null, true);
        echo "</h4>
        <p>";
        // line 24
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 24), "rspamd_global_filters_regex", [], "any", false, false, false, 24);
        echo "</p>
        <ul>
          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rspamd_regex_maps"] ?? null));
        foreach ($context['_seq'] as $context["rspamd_regex_desc"] => $context["rspamd_regex_map"]) {
            // line 27
            echo "            <li><a href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 27), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["rspamd_regex_desc"], "html", null, true);
            echo "</a> (<small>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 27), "html", null, true);
            echo "</small>)</li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rspamd_regex_desc'], $context['rspamd_regex_map'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </ul>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rspamd_regex_maps"] ?? null));
        foreach ($context['_seq'] as $context["rspamd_regex_desc"] => $context["rspamd_regex_map"]) {
            // line 31
            echo "        <hr>
        <span class=\"anchor\" id=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 32), "html", null, true);
            echo "\"></span>
        <form class=\"form-horizontal\" data-cached-form=\"false\" data-id=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 33), "html", null, true);
            echo "\" role=\"form\" method=\"post\">
          <div class=\"row\">
            <label class=\"control-label col-sm-3\" for=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 35), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["rspamd_regex_desc"], "html", null, true);
            echo "<br><small>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 35), "html", null, true);
            echo "</small></label>
            <div class=\"col-sm-9\">
              <textarea id=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 37), "html", null, true);
            echo "\" spellcheck=\"false\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control textarea-code\" rows=\"10\" name=\"rspamd_map_data\" required>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rspamd_regex_map"], "data", [], "any", false, false, false, 37), "html", null, true);
            echo "</textarea>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-3 col-sm-9\">
              <div class=\"btn-group mt-2\">
                <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary validate_rspamd_regex\" data-regex-map=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 43), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 43), "validate", [], "any", false, false, false, 43), "html", null, true);
            echo "</button>
                <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success submit_rspamd_regex\" data-action=\"edit_selected\" data-id=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 44), "html", null, true);
            echo "\" data-item=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rspamd_regex_map"], "map", [], "any", false, false, false, 44), "html", null, true);
            echo "\" data-api-url='edit/rspamd-map' data-api-attr='{}' href=\"#\" disabled>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 44), "save", [], "any", false, false, false, 44), "html", null, true);
            echo "</button>
              </div>
            </div>
          </div>
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rspamd_regex_desc'], $context['rspamd_regex_map'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/tab-globalfilter-regex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 50,  154 => 44,  148 => 43,  137 => 37,  128 => 35,  123 => 33,  119 => 32,  116 => 31,  112 => 30,  109 => 29,  96 => 27,  92 => 26,  87 => 24,  83 => 23,  75 => 20,  67 => 15,  58 => 11,  54 => 10,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/tab-globalfilter-regex.twig", "/web/templates/admin/tab-globalfilter-regex.twig");
    }
}
