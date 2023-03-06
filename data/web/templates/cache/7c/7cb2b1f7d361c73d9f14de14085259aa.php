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

/* admin/tab-config-password-policy.twig */
class __TwigTemplate_69fd87b82b8a80d76fe7dd5e8c0aae2b extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab-config-password-policy\" role=\"tabpanel\" aria-labelledby=\"tab-config-password-policy\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-password-policy\" data-bs-toggle=\"collapse\" aria-controls=\"ollapse-tab-config-password-policy\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "password_policy", [], "any", false, false, false, 5), "html", null, true);
        echo "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "password_policy", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
    </div>
    <div id=\"collapse-tab-config-password-policy\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <form class=\"form-horizontal\" data-id=\"passwordpolicy\" role=\"form\" method=\"post\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["password_complexity"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 12
            echo "          ";
            if (($context["name"] == "length")) {
                // line 13
                echo "            <div class=\"row mb-4\">
              <label class=\"control-label col-sm-3 text-sm-end\" for=\"length\">";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 14), "password_length", [], "any", false, false, false, 14), "html", null, true);
                echo ":</label>
              <div class=\"col-sm-2\">
                <input type=\"number\" class=\"form-control\" min=\"3\" max=\"64\" name=\"length\" id=\"length\" value=\"";
                // line 16
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" required>
              </div>
            </div>
          ";
            } else {
                // line 20
                echo "            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" value=\"0\">
            <div class=\"row mb-2\">
              <div class=\"offset-sm-3 col-sm-9\">
                <label>
                  <input type=\"checkbox\" name=\"";
                // line 24
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" value=\"1\" ";
                if (($context["value"] == 1)) {
                    echo "checked";
                }
                echo "> ";
                echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 24)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[("password_policy_" . $context["name"])] ?? null) : null), "html", null, true);
                echo "
                </label>
              </div>
            </div>
          ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        <div class=\"row mt-4 mb-2\">
          <div class=\"offset-sm-3 col-sm-9\">
            <div class=\"btn-group\">
              <button class=\"btn btn-sm d-block d-sm-inline btn-success\" data-item=\"passwordpolicy\" data-action=\"edit_selected\" data-id=\"passwordpolicy\" data-api-url='edit/passwordpolicy' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 33), "save", [], "any", false, false, false, 33), "html", null, true);
        echo "</button>
            </div>
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
        return "admin/tab-config-password-policy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  107 => 30,  101 => 29,  85 => 24,  77 => 20,  70 => 16,  65 => 14,  62 => 13,  59 => 12,  55 => 11,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/tab-config-password-policy.twig", "/web/templates/admin/tab-config-password-policy.twig");
    }
}
