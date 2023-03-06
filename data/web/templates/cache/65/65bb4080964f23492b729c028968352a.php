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

/* admin/tab-config-admins.twig */
class __TwigTemplate_c63f9706d0a2cc53d09280bff0356527 extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade show active\" id=\"tab-config-admins\" role=\"tabpanel\" aria-labelledby=\"tab-config-admins\">
  <div class=\"card mb-4\">
    <div class=\"card-header bg-danger text-white d-flex fs-5\">
      <button class=\"btn d-md-none text-white flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-admins\" data-bs-toggle=\"collapse\" aria-controls=\"collapse-tab-config-admins\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "admin_details", [], "any", false, false, false, 5), "html", null, true);
        echo "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "admin_details", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
    </div>
    <div id=\"collapse-tab-config-admins\" class=\"card-body collapse show\" data-bs-parent=\"#admin-content\">
      <table id=\"adminstable\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-admin mb-4\">
        <div class=\"btn-group\">
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"admins\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 13), "toggle_all", [], "any", false, false, false, 13), "html", null, true);
        echo "</a>
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 14), "quick_actions", [], "any", false, false, false, 14), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"admins\" data-api-url='edit/admin' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 16), "activate", [], "any", false, false, false, 16), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"admins\" data-api-url='edit/admin' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "deactivate", [], "any", false, false, false, 17), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"admins\" data-api-url='edit/admin' data-api-attr='{\"disable_tfa\":\"1\"}' href=\"#\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 19), "disable_tfa", [], "any", false, false, false, 19), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"admins\" data-api-url='delete/admin' href=\"#\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 21), "remove", [], "any", false, false, false, 21), "html", null, true);
        echo "</a></li>
          </ul>
          <a class=\"btn btn-sm d-block d-sm-inline btn-success\" data-id=\"add_admin\" data-bs-toggle=\"modal\" data-bs-target=\"#addAdminModal\" href=\"#\"><i class=\"bi bi-person-plus-fill\"></i> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 23), "add_admin", [], "any", false, false, false, 23), "html", null, true);
        echo "</a>
        </div>
      </div>

      ";
        // line 28
        echo "      <legend style=\"margin-top:20px\">
        ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 29), "tfa", [], "any", false, false, false, 29), "html", null, true);
        echo "
      </legend>
      <hr />
      <div class=\"row\">
        <div class=\"col-sm-3 col-5 text-end\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 33), "tfa", [], "any", false, false, false, 33), "html", null, true);
        echo ":</div>
        <div class=\"col-sm-9 col-7\">
          ";
        // line 35
        $this->loadTemplate("tfa_keys.twig", "admin/tab-config-admins.twig", 35)->display($context);
        // line 36
        echo "          <br>
        </div>
      </div>
      <div class=\"row mb-3\">
        <div class=\"col-sm-3 col-5 text-end\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 40), "set_tfa", [], "any", false, false, false, 40), "html", null, true);
        echo ":</div>
        <div class=\"col-sm-9 col-7\">
          <select data-style=\"btn btn-sm dropdown-toggle bs-placeholder btn-secondary\" data-width=\"fit\" id=\"selectTFA\" class=\"selectpicker\" title=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 42), "select", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
            <option value=\"yubi_otp\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 43), "yubi_otp", [], "any", false, false, false, 43), "html", null, true);
        echo "</option>
            <option value=\"webauthn\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 44), "webauthn", [], "any", false, false, false, 44), "html", null, true);
        echo "</option>
            <option value=\"totp\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 45), "totp", [], "any", false, false, false, 45), "html", null, true);
        echo "</option>
            <option value=\"none\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 46), "none", [], "any", false, false, false, 46), "html", null, true);
        echo "</option>
          </select>
        </div>
      </div>

      ";
        // line 52
        echo "      <legend style=\"margin-top:20px\">
        <i class=\"bi bi-shield-fill-check\"></i>
        ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 54), "fido2_auth", [], "any", false, false, false, 54), "html", null, true);
        echo "</legend><hr />
      <div class=\"row mb-3\">
        <div class=\"col-sm-3 col-12 text-sm-end text-start mb-4\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 56), "known_ids", [], "any", false, false, false, 56), "html", null, true);
        echo ":</div>
        <div class=\"col-sm-9 col-12\">
          <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover table-condensed\" id=\"fido2_keys\">
              <tr>
                <th>ID</th>
                <th style=\"min-width:240px;text-align: right\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 62), "action", [], "any", false, false, false, 62), "html", null, true);
        echo "</th>
              </tr>
              ";
        // line 64
        $this->loadTemplate("fido2.twig", "admin/tab-config-admins.twig", 64)->display($context);
        // line 65
        echo "            </table>
          </div>
        </div>
        <br>
      </div>

      <div class=\"row\">
        <div class=\"offset-sm-3 col-sm-9\">
          <div class=\"btn-group nowrap mass-actions-admin\">
            <button class=\"btn btn-sm btn-primary d-block d-sm-inline\" id=\"register-fido2\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 74), "set_fido2", [], "any", false, false, false, 74), "html", null, true);
        echo "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-lg btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" href=\"#\" id=\"register-fido2-touchid\"><i class=\"bi bi-apple\"></i> ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 77), "set_fido2_touchid", [], "any", false, false, false, 77), "html", null, true);
        echo "</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class=\"row mb-3\" id=\"status-fido2\">
        <div class=\"col-sm-3 col-5 text-end\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "fido2", [], "any", false, false, false, 84), "register_status", [], "any", false, false, false, 84), "html", null, true);
        echo ":</div>
        <div class=\"col-sm-9 col-7\">
          <div id=\"fido2-alerts\">-</div>
        </div>
        <br>
      </div>

      <legend style=\"cursor:pointer;margin-top:20px\" data-bs-target=\"#admin_api\" unselectable=\"on\" data-bs-toggle=\"collapse\">
        <i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> API
      </legend>
      <hr />
      <div id=\"admin_api\" class=\"collapse\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <p class=\"text-muted\">";
        // line 98
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 98), "api_info", [], "any", false, false, false, 98);
        echo "</p>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"card mb-3\">
              <div class=\"card-header\">
                <h4 class=\"card-title\"><i class=\"bi bi-file-earmark-arrow-down\"></i> ";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 103), "api_read_only", [], "any", false, false, false, 103), "html", null, true);
        echo "</h4>
              </div>
              <div class=\"card-body\">
                <form class=\"form-horizontal\" autocapitalize=\"none\" autocorrect=\"off\" role=\"form\" method=\"post\">
                  <div class=\"row mb-4\">
                    <label class=\"control-label col-sm-3\" for=\"allow_from_ro\">";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 108), "api_allow_from", [], "any", false, false, false, 108), "html", null, true);
        echo ":</label>
                    <div class=\"col-sm-9\">
                      <textarea class=\"form-control textarea-code\" rows=\"7\" name=\"allow_from\" id=\"allow_from_ro\" ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["api"] ?? null), "ro", [], "any", false, false, false, 110), "skip_ip_check", [], "any", false, false, false, 110)) {
            echo "disabled";
        }
        echo " required>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["api"] ?? null), "ro", [], "any", false, false, false, 110), "allow_from", [], "any", false, false, false, 110), "html", null, true);
        echo "</textarea>
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <div class=\"offset-sm-3 col-sm-9\">
                      <label>
                        <input type=\"checkbox\" name=\"skip_ip_check\" id=\"skip_ip_check_ro\" ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["api"] ?? null), "ro", [], "any", false, false, false, 116), "skip_ip_check", [], "any", false, false, false, 116)) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 116), "api_skip_ip_check", [], "any", false, false, false, 116), "html", null, true);
        echo "
                      </label>
                    </div>
                  </div>
                  <div class=\"row mb-4\">
                    <label class=\"control-label col-sm-3\">";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 121), "api_key", [], "any", false, false, false, 121), "html", null, true);
        echo ":</label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" class=\"form-control\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["api"] ?? null), "ro", [], "any", false, true, false, 123), "api_key", [], "any", true, true, false, 123)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["api"] ?? null), "ro", [], "any", false, true, false, 123), "api_key", [], "any", false, false, false, 123), "-")) : ("-")), "html", null, true);
        echo "\" readonly />
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <div class=\"offset-sm-3 col-sm-9\">
                      <label>
                        <input type=\"checkbox\" name=\"active\" ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["api"] ?? null), "ro", [], "any", false, false, false, 129), "active", [], "any", false, false, false, 129)) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 129), "activate_api", [], "any", false, false, false, 129), "html", null, true);
        echo "
                      </label>
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <div class=\"offset-sm-3 col-sm-9\">
                      <div class=\"btn-group\">
                        <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" name=\"admin_api[ro]\" type=\"submit\" href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 136), "save", [], "any", false, false, false, 136), "html", null, true);
        echo "</button>
                        <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary admin-ays-dialog\" name=\"admin_api_regen_key[ro]\" type=\"submit\" href=\"#\" ";
        // line 137
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["api"] ?? null), "ro", [], "any", false, false, false, 137), "api_key", [], "any", false, false, false, 137)) {
            echo "disabled";
        }
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 137), "regen_api_key", [], "any", false, false, false, 137), "html", null, true);
        echo "</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class=\"col-lg-6\">
            <div class=\"card mb-3\">
              <div class=\"card-header\">
                <h4 class=\"card-title\"><i class=\"bi bi-file-earmark-diff\"></i> ";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 148), "api_read_write", [], "any", false, false, false, 148), "html", null, true);
        echo "</h4>
              </div>
              <div class=\"card-body\">
                <form class=\"form-horizontal\" autocapitalize=\"none\" autocorrect=\"off\" role=\"form\" method=\"post\">
                  <div class=\"row mb-4\">
                    <label class=\"control-label col-sm-3\" for=\"allow_from_rw\">";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 153), "api_allow_from", [], "any", false, false, false, 153), "html", null, true);
        echo ":</label>
                    <div class=\"col-sm-9\">
                      <textarea class=\"form-control textarea-code\" rows=\"7\" name=\"allow_from\" id=\"allow_from_rw\" ";
        // line 155
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["api"] ?? null), "rw", [], "any", false, false, false, 155), "skip_ip_check", [], "any", false, false, false, 155)) {
            echo "disabled";
        }
        echo " required>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["api"] ?? null), "rw", [], "any", false, false, false, 155), "allow_from", [], "any", false, false, false, 155), "html", null, true);
        echo "</textarea>
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <div class=\"offset-sm-3 col-sm-9\">
                      <label>
                        <input type=\"checkbox\" name=\"skip_ip_check\" id=\"skip_ip_check_rw\" ";
        // line 161
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["api"] ?? null), "rw", [], "any", false, false, false, 161), "skip_ip_check", [], "any", false, false, false, 161)) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 161), "api_skip_ip_check", [], "any", false, false, false, 161), "html", null, true);
        echo "
                      </label>
                    </div>
                  </div>
                  <div class=\"row mb-4\">
                    <label class=\"control-label col-sm-3\" for=\"admin_api_key\">";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 166), "api_key", [], "any", false, false, false, 166), "html", null, true);
        echo ":</label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" class=\"form-control\" value=\"";
        // line 168
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["api"] ?? null), "rw", [], "any", false, true, false, 168), "api_key", [], "any", true, true, false, 168)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["api"] ?? null), "rw", [], "any", false, true, false, 168), "api_key", [], "any", false, false, false, 168), "-")) : ("-")), "html", null, true);
        echo "\" readonly />
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <div class=\"offset-sm-3 col-sm-9\">
                      <label>
                        <input type=\"checkbox\" name=\"active\" ";
        // line 174
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["api"] ?? null), "rw", [], "any", false, false, false, 174), "active", [], "any", false, false, false, 174)) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 174), "activate_api", [], "any", false, false, false, 174), "html", null, true);
        echo "
                      </label>
                    </div>
                  </div>
                  <div class=\"row mb-2\">
                    <div class=\"offset-sm-3 col-sm-9\">
                      <div class=\"btn-group\">
                        <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" name=\"admin_api[rw]\" type=\"submit\" href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 181), "save", [], "any", false, false, false, 181), "html", null, true);
        echo "</button>
                        <button class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary admin-ays-dialog\" name=\"admin_api_regen_key[rw]\" type=\"submit\" ";
        // line 182
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["api"] ?? null), "rw", [], "any", false, false, false, 182), "api_key", [], "any", false, false, false, 182)) {
            echo "disabled";
        }
        echo " href=\"#\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 182), "regen_api_key", [], "any", false, false, false, 182), "html", null, true);
        echo "</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-dadmins\" data-bs-toggle=\"collapse\" aria-controls=\"ollapse-tab-config-dadmins\">
        ";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 198), "domain_admins", [], "any", false, false, false, 198), "html", null, true);
        echo "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 200), "domain_admins", [], "any", false, false, false, 200), "html", null, true);
        echo "</span>
    </div>
    <div id=\"collapse-tab-config-dadmins\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <table id=\"domainadminstable\" class=\"table table-striped dt-responsive w-100\"></table>
      <div class=\"mass-actions-admin\">
        <div class=\"btn-group\">
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"domain_admins\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 206), "toggle_all", [], "any", false, false, false, 206), "html", null, true);
        echo "</a>
          <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 207), "quick_actions", [], "any", false, false, false, 207), "html", null, true);
        echo "</a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"domain_admins\" data-api-url='edit/domain-admin' data-api-attr='{\"active\":\"1\"}' href=\"#\">";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 209), "activate", [], "any", false, false, false, 209), "html", null, true);
        echo "</a></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"domain_admins\" data-api-url='edit/domain-admin' data-api-attr='{\"active\":\"0\"}' href=\"#\">";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 210), "deactivate", [], "any", false, false, false, 210), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"edit_selected\" data-id=\"domain_admins\" data-api-url='edit/domain-admin' data-api-attr='{\"disable_tfa\":\"1\"}' href=\"#\">";
        // line 212
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "tfa", [], "any", false, false, false, 212), "disable_tfa", [], "any", false, false, false, 212), "html", null, true);
        echo "</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" data-action=\"delete_selected\" data-id=\"domain_admins\" data-api-url='delete/domain-admin' href=\"#\">";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 214), "remove", [], "any", false, false, false, 214), "html", null, true);
        echo "</a></li>
          </ul>
          <a class=\"btn btn-sm d-block d-sm-inline btn-success\" data-id=\"add_domain_admin\" data-bs-toggle=\"modal\" data-bs-target=\"#addDomainAdminModal\" href=\"#\"><i class=\"bi bi-person-plus-fill\"></i> ";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 216), "add_domain_admin", [], "any", false, false, false, 216), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/tab-config-admins.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 216,  439 => 214,  434 => 212,  429 => 210,  425 => 209,  420 => 207,  416 => 206,  407 => 200,  402 => 198,  379 => 182,  375 => 181,  361 => 174,  352 => 168,  347 => 166,  335 => 161,  322 => 155,  317 => 153,  309 => 148,  291 => 137,  287 => 136,  273 => 129,  264 => 123,  259 => 121,  247 => 116,  234 => 110,  229 => 108,  221 => 103,  213 => 98,  196 => 84,  186 => 77,  180 => 74,  169 => 65,  167 => 64,  162 => 62,  153 => 56,  148 => 54,  144 => 52,  136 => 46,  132 => 45,  128 => 44,  124 => 43,  120 => 42,  115 => 40,  109 => 36,  107 => 35,  102 => 33,  95 => 29,  92 => 28,  85 => 23,  80 => 21,  75 => 19,  70 => 17,  66 => 16,  61 => 14,  57 => 13,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/tab-config-admins.twig", "/web/templates/admin/tab-config-admins.twig");
    }
}
