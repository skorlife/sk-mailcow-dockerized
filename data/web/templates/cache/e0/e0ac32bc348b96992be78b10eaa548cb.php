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

/* edit.twig */
class __TwigTemplate_0b6e2c148dccc878c7083de3501413df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'inner_content' => [$this, 'block_inner_content'],
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
        $this->parent = $this->loadTemplate("base.twig", "edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ($context["return_to"] ?? null), "html", null, true);
        echo "\">&#8592; ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 4), "previous", [], "any", false, false, false, 4), "html", null, true);
        echo "</a>
<div class=\"row my-4\">
  <div class=\"col-md-12\">
    <div class=\"card\">
      <div class=\"card-header fs-5\">
        <span>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</span>
      </div>
      <div class=\"card-body\">
        ";
        // line 12
        $this->displayBlock('inner_content', $context, $blocks);
        // line 19
        echo "      </div>
    </div>
  </div>
</div>
<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["return_to"] ?? null), "html", null, true);
        echo "\">&#8592; ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 23), "previous", [], "any", false, false, false, 23), "html", null, true);
        echo "</a>

<script type='text/javascript'>
  var lang_user = ";
        // line 26
        echo ($context["lang_user"] ?? null);
        echo ";
  var lang_datatables = ";
        // line 27
        echo ($context["lang_datatables"] ?? null);
        echo ";
  var csrf_token = '";
        // line 28
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "';
  var pagination_size = Math.trunc('";
        // line 29
        echo twig_escape_filter($this->env, ($context["pagination_size"] ?? null), "html", null, true);
        echo "');
  var table_for_domain = '";
        // line 30
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "';
</script>
";
    }

    // line 12
    public function block_inner_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "          ";
        if (($context["access_denied"] ?? null)) {
            // line 14
            echo "          <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "danger", [], "any", false, false, false, 14), "access_denied", [], "any", false, false, false, 14), "html", null, true);
            echo "</div>
          ";
        } else {
            // line 16
            echo "          <div class=\"alert alert-info\" role=\"alert\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "info", [], "any", false, false, false, 16), "no_action", [], "any", false, false, false, 16), "html", null, true);
            echo "</div>
          ";
        }
        // line 18
        echo "        ";
    }

    public function getTemplateName()
    {
        return "edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 18,  120 => 16,  114 => 14,  111 => 13,  107 => 12,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  76 => 23,  70 => 19,  68 => 12,  62 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "edit.twig", "/web/templates/edit.twig");
    }
}
