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

/* edit/domain.twig */
class __TwigTemplate_0d334f7bb01476cb8e4d361af9ceda3e extends Template
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
        $this->parent = $this->loadTemplate("edit.twig", "edit/domain.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_inner_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (($context["result"] ?? null)) {
            // line 5
            echo "<ul class=\"nav nav-tabs\" role=\"tablist\">
  <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#dedit\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 6), "domain", [], "any", false, false, false, 6), "html", null, true);
            echo "</button></li>
  <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#dratelimit\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 7), "ratelimit", [], "any", false, false, false, 7), "html", null, true);
            echo "</button></li>
  <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#dspamfilter\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 8), "spam_filter", [], "any", false, false, false, 8), "html", null, true);
            echo "</button></li>
  <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#dqwbcc\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 9), "quota_warning_bcc", [], "any", false, false, false, 9), "html", null, true);
            echo "</button></li>
</ul>
<hr>
<div class=\"tab-content\">
  <div id=\"dedit\" class=\"tab-pane fade show active\" role=\"tabpanel\" aria-labelledby=\"domain-edit\">
    <form data-id=\"editdomain\" class=\"form-horizontal\" role=\"form\" method=\"post\">
      <input type=\"hidden\" value=\"0\" name=\"active\">
      <input type=\"hidden\" value=\"0\" name=\"backupmx\">
      <input type=\"hidden\" value=\"0\" name=\"gal\">
      <input type=\"hidden\" value=\"0\" name=\"relay_all_recipients\">
      <input type=\"hidden\" value=\"0\" name=\"relay_unknown_only\">
      <div class=\"row mb-2\" data-acl=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "domain_desc", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
        <label class=\"control-label col-sm-2\" for=\"description\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 21), "description", [], "any", false, false, false, 21), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"text\" class=\"form-control\" name=\"description\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "description", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
        </div>
      </div>
      <div class=\"row mb-4\">
        <label class=\"control-label col-sm-2\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 27), "tags", [], "any", false, false, false, 27), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
          <div class=\"form-control tag-box\">
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["domain_details"] ?? null), "tags", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 31
                echo "              <span data-action='delete_selected' data-item=\"";
                echo twig_escape_filter($this->env, twig_urlencode_filter($context["tag"]), "html", null, true);
                echo "\" data-id=\"domain_tag_";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "\" data-api-url='delete/domain/tag/";
                echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
                echo "' class=\"badge bg-primary tag-badge btn-badge\">
                <i class=\"bi bi-tag-fill\"></i> 
                ";
                // line 33
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "
              </span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            <input type=\"text\" class=\"tag-input\">
            <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
            <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
          </div>
        </div>
      </div>
      <div class=\"row mb-2\">
        <label class=\"control-label col-sm-2\" for=\"relayhost\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 43), "relayhost", [], "any", false, false, false, 43), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
          <select data-acl=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "domain_relayhost", [], "any", false, false, false, 45), "html", null, true);
            echo "\" data-live-search=\"true\" id=\"relayhost\" name=\"relayhost\" class=\"form-control\">
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rlyhosts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rlyhost"]) {
                // line 47
                echo "              <option
                style=\"";
                // line 48
                if ((twig_get_attribute($this->env, $this->source, $context["rlyhost"], "active", [], "any", false, false, false, 48) != "1")) {
                    echo "background: #ff4136; color: #fff";
                }
                echo "\"
                ";
                // line 49
                if ((twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "relayhost", [], "any", false, false, false, 49) == twig_get_attribute($this->env, $this->source, $context["rlyhost"], "id", [], "any", false, false, false, 49))) {
                    echo " selected";
                }
                // line 50
                echo "                value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rlyhost"], "id", [], "any", false, false, false, 50), "html", null, true);
                echo "\">
                ID ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rlyhost"], "id", [], "any", false, false, false, 51), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rlyhost"], "hostname", [], "any", false, false, false, 51), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rlyhost"], "username", [], "any", false, false, false, 51), "html", null, true);
                echo ")
              </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rlyhost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            <option value=\"\"";
            if ( !twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "relayhost", [], "any", false, false, false, 54)) {
                echo " selected";
            }
            echo ">
              ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 55), "none_inherit", [], "any", false, false, false, 55), "html", null, true);
            echo "
            </option>
          </select>
        </div>
      </div>
      ";
            // line 60
            if ((($context["mailcow_cc_role"] ?? null) == "admin")) {
                // line 61
                echo "      <div class=\"row mb-2\">
        <label class=\"control-label col-sm-2\" for=\"aliases\">";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 62), "max_aliases", [], "any", false, false, false, 62), "html", null, true);
                echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"number\" class=\"form-control\" name=\"aliases\" value=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "max_num_aliases_for_domain", [], "any", false, false, false, 64), "html", null, true);
                echo "\">
        </div>
      </div>
      <div class=\"row mb-2\">
        <label class=\"control-label col-sm-2\" for=\"mailboxes\">";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 68), "max_mailboxes", [], "any", false, false, false, 68), "html", null, true);
                echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"number\" class=\"form-control\" name=\"mailboxes\" value=\"";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "max_num_mboxes_for_domain", [], "any", false, false, false, 70), "html", null, true);
                echo "\">
        </div>
      </div>
      <div class=\"row mb-2\">
        <label class=\"control-label col-sm-2\" for=\"defquota\">";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 74), "mailbox_quota_def", [], "any", false, false, false, 74), "html", null, true);
                echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"number\" class=\"form-control\" name=\"defquota\" value=\"";
                // line 76
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "def_quota_for_mbox", [], "any", false, false, false, 76) / 1048576), "html", null, true);
                echo "\">
        </div>
      </div>
      <div class=\"row mb-2\">
        <label class=\"control-label col-sm-2\" for=\"maxquota\">";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 80), "max_quota", [], "any", false, false, false, 80), "html", null, true);
                echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"number\" class=\"form-control\" name=\"maxquota\" value=\"";
                // line 82
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "max_quota_for_mbox", [], "any", false, false, false, 82) / 1048576), "html", null, true);
                echo "\">
        </div>
      </div>
      <div class=\"row mb-4\">
        <label class=\"control-label col-sm-2\" for=\"quota\">";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 86), "domain_quota", [], "any", false, false, false, 86), "html", null, true);
                echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"number\" class=\"form-control\" name=\"quota\" value=\"";
                // line 88
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "max_quota_for_domain", [], "any", false, false, false, 88) / 1048576), "html", null, true);
                echo "\">
        </div>
      </div>
      <div class=\"row mb-2\">
        <label class=\"control-label col-sm-2\">";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 92), "backup_mx_options", [], "any", false, false, false, 92), "html", null, true);
                echo "</label>
        <div class=\"col-sm-10\">
          <div class=\"checkbox\">
            <label><input type=\"checkbox\" value=\"1\" name=\"backupmx\"";
                // line 95
                if ((twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "backupmx", [], "any", false, false, false, 95) == "1")) {
                    echo " checked";
                }
                echo "> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 95), "relay_domain", [], "any", false, false, false, 95), "html", null, true);
                echo "</label>
            <br>
            <label><input type=\"checkbox\" value=\"1\" name=\"relay_all_recipients\"";
                // line 97
                if ((twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "relay_all_recipients", [], "any", false, false, false, 97) == "1")) {
                    echo " checked";
                }
                echo "> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 97), "relay_all", [], "any", false, false, false, 97), "html", null, true);
                echo "</label>
            <p>";
                // line 98
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 98), "relay_all_info", [], "any", false, false, false, 98);
                echo "</p>
            <label><input type=\"checkbox\" value=\"1\" name=\"relay_unknown_only\"";
                // line 99
                if ((twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "relay_unknown_only", [], "any", false, false, false, 99) == "1")) {
                    echo " checked";
                }
                echo "> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 99), "relay_unknown_only", [], "any", false, false, false, 99), "html", null, true);
                echo "</label>
            <br>
            <p>";
                // line 101
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 101), "relay_transport_info", [], "any", false, false, false, 101);
                echo "</p>
            <hr style=\"margin:25px 0px 0px 0px\">
          </div>
        </div>
      </div>
      ";
            }
            // line 107
            echo "      <div class=\"row\">
        <div class=\"offset-sm-2 col-sm-10\">
          <div class=\"checkbox\">
            <label><input type=\"checkbox\" value=\"1\" name=\"gal\"";
            // line 110
            if ((twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "gal", [], "any", false, false, false, 110) == "1")) {
                echo " checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 110), "gal", [], "any", false, false, false, 110), "html", null, true);
            echo "</label>
            <small class=\"text-muted\">";
            // line 111
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 111), "gal_info", [], "any", false, false, false, 111);
            echo "</small>
          </div>
        </div>
      </div>
      <hr>
      <div class=\"row mb-2\">
        <div class=\"offset-sm-2 col-sm-10\">
          <div class=\"checkbox\">
            <label><input type=\"checkbox\" value=\"1\" name=\"active\"";
            // line 119
            if ((twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "active", [], "any", false, false, false, 119) == "1")) {
                echo " checked";
            }
            if ((($context["mailcow_cc_role"] ?? null) != "admin")) {
                echo " disabled";
            }
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 119), "active", [], "any", false, false, false, 119), "html", null, true);
            echo "</label>
          </div>
        </div>
      </div>
      <div class=\"row mb-2\">
        <div class=\"offset-sm-2 col-sm-10\">
          <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-id=\"editdomain\" data-item=\"";
            // line 125
            echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
            echo "\" data-api-url='edit/domain' data-api-attr='{}' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 125), "save", [], "any", false, false, false, 125), "html", null, true);
            echo "</button>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"offset-sm-2 col-sm-10\">
          <small class=\"fst-italic d-block\">";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 130), "created_on", [], "any", false, false, false, 130), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "created", [], "any", false, false, false, 130), "html", null, true);
            echo "</small>
          <small class=\"fst-italic d-block\">";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 131), "last_modified", [], "any", false, false, false, 131), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "modified", [], "any", false, false, false, 131), "html", null, true);
            echo "</small>
        </div>
      </div>
    </form>
    ";
            // line 135
            if (($context["dkim"] ?? null)) {
                // line 136
                echo "    <hr>
    <div class=\"row\">
      <div class=\"col-12 col-sm-2\">
        <p>Domain: <strong>";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "domain_name", [], "any", false, false, false, 139), "html", null, true);
                echo "</strong> (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dkim"] ?? null), "dkim_selector", [], "any", false, false, false, 139), "html", null, true);
                echo "._domainkey)</p>
      </div>
      <div class=\"col-12 col-sm-10\">
        <pre class=\"p-2\">";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dkim"] ?? null), "dkim_txt", [], "any", false, false, false, 142), "html", null, true);
                echo "</pre>
      </div>
    </div>
    ";
            }
            // line 146
            echo "  </div>
  <div id=\"dratelimit\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"domain-ratelimit\">
    <form data-id=\"domratelimit\" class=\"form-inline well\" method=\"post\">
      <div class=\"row\">
        <div class=\"col-12\">
          <label class=\"control-label mb-2\">";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 151), "ratelimit", [], "any", false, false, false, 151), "html", null, true);
            echo "</label>
          <input name=\"rl_value\" type=\"number\" value=\"";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rl"] ?? null), "value", [], "any", false, false, false, 152), "html", null, true);
            echo "\" autocomplete=\"off\" class=\"form-control mb-4\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 152), "disabled", [], "any", false, false, false, 152), "html", null, true);
            echo "\">
          <select name=\"rl_frame\" class=\"form-control\">
            ";
            // line 154
            $this->loadTemplate("mailbox/rl-frame.twig", "edit/domain.twig", 154)->display($context);
            // line 155
            echo "          </select>
          <button data-acl=\"";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "ratelimit", [], "any", false, false, false, 156), "html", null, true);
            echo "\" class=\"btn btn-xs-lg d-block d-sm-inline btn-secondary\" data-action=\"edit_selected\" data-id=\"domratelimit\" data-item=\"";
            echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
            echo "\" data-api-url='edit/rl-domain' data-api-attr='{}' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 156), "save", [], "any", false, false, false, 156), "html", null, true);
            echo "</button>
        </div>
      </div>
    </form>
  </div>
  <div id=\"dspamfilter\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"domain-spamfilter\">
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h4>";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 164), "spamfilter_wl", [], "any", false, false, false, 164), "html", null, true);
            echo "</h4>
        <p>";
            // line 165
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 165), "spamfilter_wl_desc", [], "any", false, false, false, 165);
            echo "</p>
        <form class=\"form-inline mb-4\" data-id=\"add_wl_policy_domain\">
          <div class=\"input-group\" data-acl=\"";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "spam_policy", [], "any", false, false, false, 167), "html", null, true);
            echo "\">
            <input type=\"text\" class=\"form-control\" name=\"object_from\" placeholder=\"*@example.org\" required>
            <span class=\"input-group-btn\">
                      <button class=\"btn btn-secondary\" data-action=\"add_item\" data-id=\"add_wl_policy_domain\" data-api-url='add/domain-policy' data-api-attr='{\"domain\":\"";
            // line 170
            echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
            echo "\",\"object_list\":\"wl\"}' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 170), "spamfilter_table_add", [], "any", false, false, false, 170), "html", null, true);
            echo "</button>
                    </span>
          </div>
        </form>
        <table id=\"wl_policy_domain_table\" class=\"table table-striped dt-responsive w-100\"></table>
        <div class=\"mass-actions-user\">
          <div class=\"btn-group\" data-acl=\"";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "spam_policy", [], "any", false, false, false, 176), "html", null, true);
            echo "\">
            <a class=\"btn btn-xs-half d-block d-sm-inline btn-sm btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"policy_wl_domain\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 177), "toggle_all", [], "any", false, false, false, 177), "html", null, true);
            echo "</a>
            <a class=\"btn btn-xs-half d-block d-sm-inline btn-sm btn-danger\" data-action=\"delete_selected\" data-id=\"policy_wl_domain\" data-api-url='delete/domain-policy' href=\"#\">";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 178), "remove", [], "any", false, false, false, 178), "html", null, true);
            echo "</a>
          </div>
        </div>
      </div>
      <div class=\"col-sm-6\">
        <h4>";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 183), "spamfilter_bl", [], "any", false, false, false, 183), "html", null, true);
            echo "</h4>
        <p>";
            // line 184
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 184), "spamfilter_bl_desc", [], "any", false, false, false, 184);
            echo "</p>
        <form class=\"form-inline mb-4\" data-id=\"add_bl_policy_domain\">
          <div class=\"input-group\" data-acl=\"";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "spam_policy", [], "any", false, false, false, 186), "html", null, true);
            echo "\">
            <input type=\"text\" class=\"form-control\" name=\"object_from\" placeholder=\"*@example.org\" required>
            <span class=\"input-group-btn\">
                      <button class=\"btn btn-secondary\" data-action=\"add_item\" data-id=\"add_bl_policy_domain\" data-api-url='add/domain-policy' data-api-attr='{\"domain\":\"";
            // line 189
            echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
            echo "\",\"object_list\":\"bl\"}' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 189), "spamfilter_table_add", [], "any", false, false, false, 189), "html", null, true);
            echo "</button>
                    </span>
          </div>
        </form>
        <table id=\"bl_policy_domain_table\" class=\"table table-striped dt-responsive w-100\"></table>
        <div class=\"mass-actions-user\">
          <div class=\"btn-group\" data-acl=\"";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "spam_policy", [], "any", false, false, false, 195), "html", null, true);
            echo "\">
            <a class=\"btn btn-xs-half d-block d-sm-inline btn-sm btn-secondary\" id=\"toggle_multi_select_all\" data-id=\"policy_bl_domain\" href=\"#\"><i class=\"bi bi-check-all\"></i> ";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 196), "toggle_all", [], "any", false, false, false, 196), "html", null, true);
            echo "</a>
            <a class=\"btn btn-xs-half d-block d-sm-inline btn-sm btn-danger\" data-action=\"delete_selected\" data-id=\"policy_bl_domain\" data-api-url='delete/domain-policy' href=\"#\">";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 197), "remove", [], "any", false, false, false, 197), "html", null, true);
            echo "</a></li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id=\"dqwbcc\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"domain-qwbcc\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        <h4>";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 206), "quota_warning_bcc", [], "any", false, false, false, 206), "html", null, true);
            echo "</h4>
        <p>";
            // line 207
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 207), "quota_warning_bcc_info", [], "any", false, false, false, 207);
            echo "</p>
        <form class=\"form-horizontal\" data-id=\"quota_bcc\">
          <input type=\"hidden\" value=\"0\" name=\"active\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2\" for=\"script_data\">";
            // line 211
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 211), "target_address", [], "any", false, false, false, 211);
            echo ":</label>
            <div class=\"col-sm-10\">
              <textarea spellcheck=\"false\" autocorrect=\"off\" autocapitalize=\"none\" class=\"form-control\" rows=\"10\" id=\"bcc_rcpt\" name=\"bcc_rcpt\">";
            // line 213
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["quota_notification_bcc"] ?? null), "bcc_rcpts", [], "any", false, false, false, 213), "
"), "html", null, true);
            echo "</textarea>
            </div>
          </div>
          <div class=\"row mb-4\">
            <div class=\"offset-sm-2 col-sm-10\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"active\"";
            // line 219
            if ((twig_get_attribute($this->env, $this->source, ($context["quota_notification_bcc"] ?? null), "active", [], "any", false, false, false, 219) == "1")) {
                echo " checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 219), "active", [], "any", false, false, false, 219), "html", null, true);
            echo "</label>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"offset-sm-2 col-sm-10\">
              <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-id=\"quota_bcc\" data-item=\"quota_bcc\" data-api-url='edit/quota_notification_bcc' data-api-attr='{\"domain\":\"";
            // line 225
            echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
            echo "\"}' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 225), "save", [], "any", false, false, false, 225), "html", null, true);
            echo "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        } else {
            // line 234
            echo "  ";
            $this->displayParentBlock("inner_content", $context, $blocks);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "edit/domain.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  570 => 234,  556 => 225,  543 => 219,  533 => 213,  528 => 211,  521 => 207,  517 => 206,  505 => 197,  501 => 196,  497 => 195,  486 => 189,  480 => 186,  475 => 184,  471 => 183,  463 => 178,  459 => 177,  455 => 176,  444 => 170,  438 => 167,  433 => 165,  429 => 164,  414 => 156,  411 => 155,  409 => 154,  402 => 152,  398 => 151,  391 => 146,  384 => 142,  376 => 139,  371 => 136,  369 => 135,  360 => 131,  354 => 130,  344 => 125,  328 => 119,  317 => 111,  309 => 110,  304 => 107,  295 => 101,  286 => 99,  282 => 98,  274 => 97,  265 => 95,  259 => 92,  252 => 88,  247 => 86,  240 => 82,  235 => 80,  228 => 76,  223 => 74,  216 => 70,  211 => 68,  204 => 64,  199 => 62,  196 => 61,  194 => 60,  186 => 55,  179 => 54,  166 => 51,  161 => 50,  157 => 49,  151 => 48,  148 => 47,  144 => 46,  140 => 45,  135 => 43,  126 => 36,  117 => 33,  107 => 31,  103 => 30,  97 => 27,  90 => 23,  85 => 21,  81 => 20,  67 => 9,  63 => 8,  59 => 7,  55 => 6,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "edit/domain.twig", "/web/templates/edit/domain.twig");
    }
}
