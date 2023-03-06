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

/* edit/admin.twig */
class __TwigTemplate_4b2f61b9f55a6f697c412136164c4eb7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'inner_content' => [$this, 'block_inner_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "edit.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("edit.twig", "edit/admin.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_inner_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (($context["result"] ?? null)) {
            // line 5
            echo "<h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 5), "admin", [], "any", false, false, false, 5), "html", null, true);
            echo "</h4>
<br>
<form class=\"form-horizontal\" data-id=\"editadmin\" role=\"form\" method=\"post\" autocomplete=\"off\">
  <input type=\"hidden\" value=\"0\" name=\"active\">
  <div class=\"row mb-4\">
    <label class=\"control-label col-sm-2\" for=\"username_new\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 10), "username", [], "any", false, false, false, 10), "html", null, true);
            echo "</label>
    <div class=\"col-sm-10\">
      <input class=\"form-control\" type=\"text\" name=\"username_new\" onkeyup=\"this.value = this.value.toLowerCase();\" required value=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["admin"] ?? null), "html", null, true);
            echo "\" />
      &rdsh; <kbd>a-z - _ .</kbd>
    </div>
  </div>
  <div class=\"row mb-2\">
    <label class=\"control-label col-sm-2\" for=\"password\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 17), "password", [], "any", false, false, false, 17), "html", null, true);
            echo " (<a href=\"#\" class=\"generate_password\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 17), "generate", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>)</label>
    <div class=\"col-sm-10\">
      <input type=\"password\" data-pwgen-field=\"true\" data-hibp=\"true\" class=\"form-control\" name=\"password\" placeholder=\"\" autocomplete=\"new-password\">
    </div>
  </div>
  <div class=\"row mb-4\">
    <label class=\"control-label col-sm-2\" for=\"password2\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 23), "password_repeat", [], "any", false, false, false, 23), "html", null, true);
            echo "</label>
    <div class=\"col-sm-10\">
      <input type=\"password\" data-pwgen-field=\"true\" class=\"form-control\" name=\"password2\" autocomplete=\"new-password\">
    </div>
  </div>
  <div class=\"row mb-2\">
    <div class=\"offset-sm-2 col-sm-10\">
      <div class=\"checkbox\">
        <label><input type=\"checkbox\" value=\"1\" name=\"active\"";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "active", [], "any", false, false, false, 31) == "1")) {
                echo " checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 31), "active", [], "any", false, false, false, 31), "html", null, true);
            echo "</label>
      </div>
    </div>
  </div>
  <div class=\"row mb-2\">
    <div class=\"offset-sm-2 col-sm-10\">
      <div class=\"checkbox\">
        <label><input type=\"checkbox\" value=\"1\" name=\"disable_tfa\"> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 38), "disable_tfa", [], "any", false, false, false, 38), "html", null, true);
            echo "</label>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"offset-sm-2 col-sm-10\">
      <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-api-reload-location=\"/admin\" data-id=\"editadmin\" data-item=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["admin"] ?? null), "html", null, true);
            echo "\" data-api-url='edit/admin' data-api-attr='{}' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 44), "save", [], "any", false, false, false, 44), "html", null, true);
            echo "</button>
    </div>
  </div>
</form>
";
        } else {
            // line 49
            echo "  ";
            $this->displayParentBlock("inner_content", $context, $blocks);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "edit/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 49,  119 => 44,  110 => 38,  96 => 31,  85 => 23,  74 => 17,  66 => 12,  61 => 10,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "edit/admin.twig", "/web/templates/edit/admin.twig");
    }
}
