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

/* fido2.twig */
class __TwigTemplate_a11d8f1dd434f3141fce1fdc2c1a74f2 extends Template
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
        if (($context["fido2_data"] ?? null)) {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fido2_data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["key_info"]) {
                // line 3
                echo "    <tr>
      <td>
        ";
                // line 5
                if ((($context["fido2_cid"] ?? null) == twig_get_attribute($this->env, $this->source, $context["key_info"], "cid", [], "any", false, false, false, 5))) {
                    // line 6
                    echo "          <i class=\"bi bi-unlock-fill\"></i>
        ";
                }
                // line 8
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["key_info"], "fn", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "          ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key_info"], "fn", [], "any", false, false, false, 9), "html", null, true);
                    echo "
        ";
                } else {
                    // line 11
                    echo "          ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key_info"], "subject", [], "any", false, false, false, 11), "html", null, true);
                    echo "
        ";
                }
                // line 13
                echo "      </td>
      <td style=\"min-width:240px;text-align: right\">
        <form style=\"display:inline;\" method=\"post\">
          <input type=\"hidden\" name=\"unset_fido2_key\" value=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key_info"], "cid", [], "any", false, false, false, 16), "html", null, true);
                echo "\">
          <div class=\"btn-group\">
            <a href=\"#\" class=\"btn btn-xs btn-secondary\" data-cid=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["key_info"], "cid", [], "any", false, false, false, 18), "html", null, true);
                echo "\" data-subject=\"";
                echo twig_escape_filter($this->env, base64_encode(twig_get_attribute($this->env, $this->source, $context["key_info"], "subject", [], "any", false, false, false, 18)), "html", null, true);
                echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#fido2ChangeFn\">
              <i class=\"bi bi-pencil-fill\"></i> ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 19), "rename", [], "any", false, false, false, 19), "html", null, true);
                echo "
            </a>
            <a href=\"#\" onClick='return confirm(\"";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 21), "ays", [], "any", false, false, false, 21), "html", null, true);
                echo "\")?\$(this).closest(\"form\").submit():\"\";' class=\"btn btn-xs btn-danger\">
              <i class=\"bi bi-trash\"></i> ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 22), "remove", [], "any", false, false, false, 22), "html", null, true);
                echo "
            </a>
          </div>
        </form>
      </td>
    </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "fido2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  90 => 21,  85 => 19,  79 => 18,  74 => 16,  69 => 13,  63 => 11,  57 => 9,  54 => 8,  50 => 6,  48 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fido2.twig", "/web/templates/fido2.twig");
    }
}
