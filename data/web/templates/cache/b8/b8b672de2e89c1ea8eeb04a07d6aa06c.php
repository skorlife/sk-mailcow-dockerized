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

/* index.twig */
class __TwigTemplate_705a451d1b583ad1ddbee801efaf593c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
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
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"row mb-4\" style=\"margin-top: 60px\">
  <div class=\"col-12 col-md-7 col-lg-6 col-xl-5 ms-auto me-auto\">
    <div class=\"card\">
      <div class=\"card-header d-flex align-items-center\">
        <i class=\"bi bi-person-fill me-2\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 10), "login", [], "any", false, false, false, 10), "html", null, true);
        echo "
        <div class=\"ms-auto form-check form-switch my-auto d-flex align-items-center\">
          <label class=\"form-check-label\"><i class=\"bi bi-moon-fill\"></i></label>
          <input class=\"form-check-input ms-2\" type=\"checkbox\" id=\"dark-mode-toggle\">
        </div>
      </div>
      <div class=\"card-body\">
        <div class=\"text-center mailcow-logo mb-4\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("logo", $context)) ? (_twig_default_filter(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        echo "\" alt=\"mailcow\"></div>
        ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 18) && twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_active", [], "any", false, false, false, 18))) {
            // line 19
            echo "        <div class=\"my-4 alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 19), "html", null, true);
            echo " rot-enc ui-announcement-alert\">";
            echo twig_escape_filter($this->env, str_rot13(twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 19)), "html", null, true);
            echo "</div>
        ";
        }
        // line 21
        echo "        <legend>";
        if (($context["oauth2_request"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "oauth2", [], "any", false, false, false, 21), "authorize_app", [], "any", false, false, false, 21), "html", null, true);
        } else {
            echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 21);
        }
        echo "</legend><hr />
        ";
        // line 22
        if (($context["is_mobileconfig"] ?? null)) {
            // line 23
            echo "        <div class=\"my-4 alert alert-info \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 23), "mobileconfig_info", [], "any", false, false, false, 23), "html", null, true);
            echo "</div>
        ";
        }
        // line 25
        echo "        <form method=\"post\" autofill=\"off\">
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"login_user\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
        echo "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-person-fill\"></i></div>
              <input name=\"login_user\" autocorrect=\"off\" autocapitalize=\"none\" type=\"";
        // line 30
        if (($context["is_mobileconfig"] ?? null)) {
            echo "email";
        } else {
            echo "text";
        }
        echo "\" id=\"login_user\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 30), "username", [], "any", false, false, false, 30), "html", null, true);
        echo "\" required=\"\" autofocus=\"\" autocomplete=\"username\">
            </div>
          </div>
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"pass_user\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 34), "password", [], "any", false, false, false, 34), "html", null, true);
        echo "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-lock-fill\"></i></div>
              <input name=\"pass_user\" type=\"password\" id=\"pass_user\" class=\"form-control\" placeholder=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 37), "password", [], "any", false, false, false, 37), "html", null, true);
        echo "\" required=\"\" autocomplete=\"current-password\">
            </div>
          </div>
          <div class=\"d-flex mt-4\" style=\"position: relative\">
            <div class=\"btn-group\">
              <div class=\"btn-group\">
                <button type=\"submit\" class=\"btn btn-xs-lg btn-success\" value=\"Login\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 43), "login", [], "any", false, false, false, 43), "html", null, true);
        echo "</button>
                <button type=\"button\" class=\"btn btn-xs-lg btn-success dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"dropdown-item\" href=\"#\" id=\"fido2-login\"><i class=\"bi bi-shield-fill-check\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 46), "fido2_webauthn", [], "any", false, false, false, 46), "html", null, true);
        echo "</a></li>
                </ul>
              </div>
            </div>
            ";
        // line 50
        if ( !($context["oauth2_request"] ?? null)) {
            // line 51
            echo "            <button type=\"button\" ";
            if ((twig_length_filter($this->env, ($context["available_languages"] ?? null)) == 1)) {
                echo "disabled=\"true\"";
            }
            echo " class=\"btn btn-xs-lg btn-secondary ms-auto dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <span class=\"flag-icon flag-icon-";
            // line 52
            echo twig_escape_filter($this->env, twig_slice($this->env, ($context["mailcow_locale"] ?? null),  -2, null), "html", null, true);
            echo "\"></span>
            </button>
            <ul class=\"dropdown-menu ms-auto login\">
              ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["available_languages"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 56
                echo "                <li>
                  <a class=\"dropdown-item ";
                // line 57
                if ((($context["mailcow_locale"] ?? null) == $context["key"])) {
                    echo "active";
                }
                echo "\" href=\"?";
                echo twig_escape_filter($this->env, $this->env->getFunction('query_string')->getCallable()(["lang" => $context["key"]]), "html", null, true);
                echo "\">
                    <span class=\"flag-icon flag-icon-";
                // line 58
                echo twig_escape_filter($this->env, twig_slice($this->env, $context["key"],  -2, null), "html", null, true);
                echo "\"></span>";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "
                  </a>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            </ul>
            ";
        }
        // line 64
        echo "          </div>
        </form>
        ";
        // line 66
        if (($context["login_delay"] ?? null)) {
            // line 67
            echo "        <p><div class=\"my-4 alert alert-info\">";
            echo twig_escape_filter($this->env, twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 67), "delayed", [], "any", false, false, false, 67), ($context["login_delay"] ?? null)), "html", null, true);
            echo "</b></div></p>
        ";
        }
        // line 69
        echo "        <div class=\"my-4\" id=\"fido2-alerts\"></div>
        ";
        // line 70
        if (( !($context["oauth2_request"] ?? null) && (($context["mailcow_apps"] ?? null) || ($context["app_links"] ?? null)))) {
            // line 71
            echo "        <legend><i class=\"bi bi-link-45deg\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 71);
            echo "</legend><hr />
        <div class=\"my-2 d-flex flex-wrap apps\">
          ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mailcow_apps"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 74
                echo "            ";
                if (( !($context["skip_sogo"] ?? null) ||  !$this->env->getFunction('is_uri')->getCallable()("SOGo", twig_get_attribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 74)))) {
                    // line 75
                    echo "            <div class=\"m-2\">
              <a href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 76), "html", null, true);
                    echo "\" role=\"button\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 76)) {
                        echo "title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 76), "html", null, true);
                        echo "\"";
                    }
                    echo " class=\"btn btn-primary btn-block\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "name", [], "any", false, false, false, 76), "html", null, true);
                    echo "</a>
            </div>
          ";
                }
                // line 79
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["app_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 81
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 82
                    echo "              <div class=\"m-2\">
                <a href=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\" role=\"button\" class=\"btn btn-primary btn-block\">";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</a>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        </div>
        ";
        }
        // line 89
        echo "      </div>
    </div>
  </div>
</div>
";
        // line 93
        if ( !($context["oauth2_request"] ?? null)) {
            // line 94
            echo "<div class=\"row\">
  <div class=\"col-12 col-md-7 col-lg-6 col-xl-5 ms-auto me-auto\">
    <div class=\"card\">
      <div class=\"card-header\">
        <a class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#collapse1\"><i class=\"bi bi-patch-question-fill\"></i> ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "start", [], "any", false, false, false, 98), "help", [], "any", false, false, false, 98), "html", null, true);
            echo "</a>
      </div>
      <div id=\"collapse1\" class=\"card-collapse collapse\">
        <div class=\"card-body\">
          ";
            // line 102
            if (twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "help_text", [], "any", false, false, false, 102)) {
                // line 103
                echo "          <p>";
                echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "help_text", [], "any", false, false, false, 103);
                echo "</p>
          ";
            } else {
                // line 105
                echo "          <p><span style=\"border-bottom: 1px dotted #999;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 105);
                echo "</span></p>
          <p>";
                // line 106
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "start", [], "any", false, false, false, 106), "mailcow_panel_detail", [], "any", false, false, false, 106);
                echo "</p>
          <p><span style=\"border-bottom: 1px dotted #999;\">";
                // line 107
                echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 107);
                echo "</span></p>
          <p>";
                // line 108
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "start", [], "any", false, false, false, 108), "mailcow_apps_detail", [], "any", false, false, false, 108);
                echo "</p>
          ";
            }
            // line 110
            echo "        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 115
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 115,  335 => 110,  330 => 108,  326 => 107,  322 => 106,  317 => 105,  311 => 103,  309 => 102,  302 => 98,  296 => 94,  294 => 93,  288 => 89,  284 => 87,  278 => 86,  267 => 83,  264 => 82,  259 => 81,  254 => 80,  248 => 79,  234 => 76,  231 => 75,  228 => 74,  224 => 73,  218 => 71,  216 => 70,  213 => 69,  207 => 67,  205 => 66,  201 => 64,  197 => 62,  185 => 58,  177 => 57,  174 => 56,  170 => 55,  164 => 52,  157 => 51,  155 => 50,  148 => 46,  142 => 43,  133 => 37,  127 => 34,  114 => 30,  108 => 27,  104 => 25,  98 => 23,  96 => 22,  87 => 21,  79 => 19,  77 => 18,  73 => 17,  63 => 10,  57 => 6,  53 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/web/templates/index.twig");
    }
}
