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

/* mailbox/rl-frame.twig */
class __TwigTemplate_f4f2a461ba761a7bec5fd56212b028df extends Template
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
        echo "<option value=\"s\"";
        if ((twig_get_attribute($this->env, $this->source, ($context["rl"] ?? null), "frame", [], "any", false, false, false, 1) == "s")) {
            echo " selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 1), "second", [], "any", false, false, false, 1), "html", null, true);
        echo "</option>
<option value=\"m\"";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["rl"] ?? null), "frame", [], "any", false, false, false, 2) == "m")) {
            echo " selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 2), "minute", [], "any", false, false, false, 2), "html", null, true);
        echo "</option>
<option value=\"h\"";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["rl"] ?? null), "frame", [], "any", false, false, false, 3) == "h")) {
            echo " selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 3), "hour", [], "any", false, false, false, 3), "html", null, true);
        echo "</option>
<option value=\"d\"";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["rl"] ?? null), "frame", [], "any", false, false, false, 4) == "d")) {
            echo " selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 4), "day", [], "any", false, false, false, 4), "html", null, true);
        echo "</option>
";
    }

    public function getTemplateName()
    {
        return "mailbox/rl-frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 4,  54 => 3,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mailbox/rl-frame.twig", "/web/templates/mailbox/rl-frame.twig");
    }
}
