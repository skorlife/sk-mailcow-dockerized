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

/* tfa_keys.twig */
class __TwigTemplate_ed85439cf91aa50c4d57346b7708fa8c extends Template
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
        echo "<div id=\"tfa_keys\">
  ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["tfa_data"] ?? null), "additional", [], "any", false, false, false, 2)) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tfa_data"] ?? null), "additional", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["key_info"]) {
                // line 4
                echo "      <form style=\"display:inline;\" method=\"post\">
        <input type=\"hidden\" name=\"unset_tfa_key\" value=\"";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key_info"], "id", [], "any", false, false, false, 5), "html", null, true);
                echo "\">
        <div class=\"d-flex flex-column\">
          <span style=\"padding:4px;margin:4px\" class=\"me-auto badge fs-6 bg-";
                // line 7
                if ((($context["tfa_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["key_info"], "id", [], "any", false, false, false, 7))) {
                    echo "success";
                } else {
                    echo "dark";
                }
                echo "\">
            ";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key_info"], "key_id", [], "any", false, false, false, 8), "html", null, true);
                echo "
            <a href=\"#\" class=\"btn p-0 text-white\" style=\"font-size: 12px; line-height: 1rem;\" onClick='return confirm(\"";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 9), "ays", [], "any", false, false, false, 9), "html", null, true);
                echo "\")?\$(this).closest(\"form\").submit():\"\";'>[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 9), "remove", [], "any", false, false, false, 9), "html", null, true);
                echo "]</a>
          </span>
        </div>
      </form>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "  ";
        }
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "tfa_keys.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 15,  80 => 14,  67 => 9,  63 => 8,  55 => 7,  50 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tfa_keys.twig", "/web/templates/tfa_keys.twig");
    }
}
