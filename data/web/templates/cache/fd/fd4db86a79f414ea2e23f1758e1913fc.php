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

/* edit/mailbox.twig */
class __TwigTemplate_d4e95d385a5a876f833fb792509e708b extends Template
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
        $this->parent = $this->loadTemplate("edit.twig", "edit/mailbox.twig", 1);
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
  <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#medit\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 6), "mailbox", [], "any", false, false, false, 6), "html", null, true);
            echo "</button></li>
  <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#mpushover\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 7), "pushover", [], "any", false, false, false, 7), "html", null, true);
            echo "</button></li>
  <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#macl\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 8), "acl", [], "any", false, false, false, 8), "html", null, true);
            echo "</button></li>
  <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#mrl\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 9), "ratelimit", [], "any", false, false, false, 9), "html", null, true);
            echo "</button></li>
</ul>
<hr>
<div class=\"tab-content\">
  <div id=\"medit\" class=\"tab-pane fade show active\" role=\"tabpanel\" aria-labelledby=\"mailbox-edit\">
    <form class=\"form-horizontal\" data-id=\"editmailbox\" role=\"form\" method=\"post\">
      <input type=\"hidden\" value=\"default\" name=\"sender_acl\">
      <input type=\"hidden\" value=\"0\" name=\"force_pw_update\">
      <input type=\"hidden\" value=\"0\" name=\"sogo_access\">
      <input type=\"hidden\" value=\"0\" name=\"protocol_access\">
      <div class=\"row mb-2\">
        <label class=\"control-label col-sm-2\" for=\"name\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 20), "full_name", [], "any", false, false, false, 20), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "name", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
        </div>
      </div>
      <div class=\"row mb-4\">
        <label class=\"control-label col-sm-2\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "add", [], "any", false, false, false, 26), "tags", [], "any", false, false, false, 26), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
          <div class=\"form-control tag-box\">
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mailbox_details"] ?? null), "tags", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 30
                echo "              <span data-action='delete_selected' data-item=\"";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "\" data-id=\"mailbox_tag_";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "\" data-api-url='delete/mailbox/tag/";
                echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
                echo "' class=\"badge bg-primary tag-badge btn-badge\">
                <i class=\"bi bi-tag-fill\"></i> 
                ";
                // line 32
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "
              </span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            <input type=\"text\" class=\"tag-input\">
            <span class=\"btn tag-add\"><i class=\"bi bi-plus-lg\"></i></span>
            <input type=\"hidden\" value=\"\" name=\"tags\" class=\"tag-values\" />
          </div>
        </div>
      </div>
      <div class=\"row mb-2\">
        <label class=\"control-label col-sm-2\" for=\"quota\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 42), "quota_mb", [], "any", false, false, false, 42), "html", null, true);
            echo "
          <br><span id=\"quotaBadge\" class=\"badge bg-info\">max. ";
            // line 43
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "max_new_quota", [], "any", false, false, false, 43) / 1048576), "html", null, true);
            echo " MiB</span>
        </label>
        <div class=\"col-sm-10\">
          <input type=\"number\" name=\"quota\" style=\"width:100%\" min=\"0\" max=\"";
            // line 46
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "max_new_quota", [], "any", false, false, false, 46) / 1048576), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "quota", [], "any", false, false, false, 46) / 1048576), "html", null, true);
            echo "\" class=\"form-control\">
          <small class=\"text-muted\">0 = ∞</small>
        </div>
      </div>
      <div class=\"row mb-2\">
        <label class=\"control-label col-sm-2\" for=\"sender_acl\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 51), "sender_acl", [], "any", false, false, false, 51), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
          <select data-live-search=\"true\" data-width=\"100%\" style=\"width:100%\" id=\"editSelectSenderACL\" name=\"sender_acl\" size=\"10\" multiple>
            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "sender_acl_domains", [], "any", false, false, false, 54), "ro", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 55
                echo "              <option data-subtext=\"Admin\" value=\"";
                echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
                echo "\" disabled selected>
                ";
                // line 56
                echo twig_escape_filter($this->env, twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 56), "dont_check_sender_acl", [], "any", false, false, false, 56), $context["domain"]), "html", null, true);
                echo "
              </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "sender_acl_addresses", [], "any", false, false, false, 59), "ro", [], "any", false, false, false, 59));
            foreach ($context['_seq'] as $context["_key"] => $context["alias"]) {
                // line 60
                echo "              <option data-subtext=\"Admin\" disabled selected>
                ";
                // line 61
                echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
                echo "
              </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alias'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "fixed_sender_aliases", [], "any", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["alias"]) {
                // line 65
                echo "              <option data-subtext=\"Alias\" disabled selected>";
                echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alias'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "sender_acl_domains", [], "any", false, false, false, 67), "rw", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 68
                echo "              <option value=\"";
                echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
                echo "\" selected>
                ";
                // line 69
                echo twig_escape_filter($this->env, twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 69), "dont_check_sender_acl", [], "any", false, false, false, 69), $context["domain"]), "html", null, true);
                echo "
              </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "sender_acl_domains", [], "any", false, false, false, 72), "selectable", [], "any", false, false, false, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 73
                echo "              <option value=\"";
                echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
                echo "\">
                ";
                // line 74
                echo twig_escape_filter($this->env, twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 74), "dont_check_sender_acl", [], "any", false, false, false, 74), $context["domain"]), "html", null, true);
                echo "
              </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "sender_acl_addresses", [], "any", false, false, false, 77), "rw", [], "any", false, false, false, 77));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 78
                echo "              <option selected>";
                echo twig_escape_filter($this->env, $context["address"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "sender_acl_addresses", [], "any", false, false, false, 80), "selectable", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 81
                echo "              <option>";
                echo twig_escape_filter($this->env, $context["address"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "          </select>
          <div id=\"sender_acl_disabled\"><i class=\"bi bi-shield-exclamation\"></i> ";
            // line 84
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 84), "sender_acl_disabled", [], "any", false, false, false, 84);
            echo "</div>
          <small class=\"text-muted d-block\">";
            // line 85
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 85), "sender_acl_info", [], "any", false, false, false, 85);
            echo "</small>
        </div>
      </div>
      <div class=\"row mb-2\">
        <label class=\"control-label col-sm-2\" for=\"relayhost\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 89), "relayhost", [], "any", false, false, false, 89), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
          <select data-acl=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "mailbox_relayhost", [], "any", false, false, false, 91), "html", null, true);
            echo "\" data-live-search=\"true\" id=\"relayhost\" name=\"relayhost\" class=\"form-control mb-4\">
            ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rlyhosts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rlyhost"]) {
                // line 93
                echo "              <option
                style=\"";
                // line 94
                if ((twig_get_attribute($this->env, $this->source, $context["rlyhost"], "active", [], "any", false, false, false, 94) != "1")) {
                    echo "background: #ff4136; color: #fff";
                }
                echo "\"
                ";
                // line 95
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 95), "relayhost", [], "any", false, false, false, 95) == twig_get_attribute($this->env, $this->source, $context["rlyhost"], "id", [], "any", false, false, false, 95))) {
                    echo " selected";
                }
                // line 96
                echo "                value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rlyhost"], "id", [], "any", false, false, false, 96), "html", null, true);
                echo "\">
              ID ";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rlyhost"], "id", [], "any", false, false, false, 97), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rlyhost"], "hostname", [], "any", false, false, false, 97), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rlyhost"], "username", [], "any", false, false, false, 97), "html", null, true);
                echo ")
              </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rlyhost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "            <option value=\"\"";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 100), "relayhost", [], "any", false, false, false, 100)) {
                echo " selected";
            }
            echo ">
              ";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 101), "none_inherit", [], "any", false, false, false, 101), "html", null, true);
            echo "
            </option>
          </select>
          <p class=\"d-block d-sm-none\" style=\"margin: 0;padding: 0\">&nbsp;</p>
          <small class=\"text-muted d-block\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 105), "mailbox_relayhost_info", [], "any", false, false, false, 105), "html", null, true);
            echo "</small>
        </div>
      </div>
      <div class=\"row mb-2\">
        <label class=\"control-label col-sm-2\">";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 109), "quarantine_notification", [], "any", false, false, false, 109), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
          <div class=\"btn-group\" data-acl=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "quarantine_notification", [], "any", false, false, false, 111), "html", null, true);
            echo "\">
            <button type=\"button\" class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary";
            // line 112
            if ((($context["quarantine_notification"] ?? null) == "never")) {
                echo " active";
            }
            echo "\"
            data-action=\"edit_selected\"
            data-item=\"";
            // line 114
            echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
            echo "\"
            data-id=\"quarantine_notification\"
            data-api-url='edit/quarantine_notification'
            data-api-attr='{\"quarantine_notification\":\"never\"}'>";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 117), "never", [], "any", false, false, false, 117), "html", null, true);
            echo "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary";
            // line 118
            if ((($context["quarantine_notification"] ?? null) == "hourly")) {
                echo " active";
            }
            echo "\"
            data-action=\"edit_selected\"
            data-item=\"";
            // line 120
            echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
            echo "\"
            data-id=\"quarantine_notification\"
            data-api-url='edit/quarantine_notification'
            data-api-attr='{\"quarantine_notification\":\"hourly\"}'>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 123), "hourly", [], "any", false, false, false, 123), "html", null, true);
            echo "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary";
            // line 124
            if ((($context["quarantine_notification"] ?? null) == "daily")) {
                echo " active";
            }
            echo "\"
            data-action=\"edit_selected\"
            data-item=\"";
            // line 126
            echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
            echo "\"
            data-id=\"quarantine_notification\"
            data-api-url='edit/quarantine_notification'
            data-api-attr='{\"quarantine_notification\":\"daily\"}'>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 129), "daily", [], "any", false, false, false, 129), "html", null, true);
            echo "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-quart d-block d-sm-inline btn-secondary";
            // line 130
            if ((($context["quarantine_notification"] ?? null) == "weekly")) {
                echo " active";
            }
            echo "\"
            data-action=\"edit_selected\"
            data-item=\"";
            // line 132
            echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
            echo "\"
            data-id=\"quarantine_notification\"
            data-api-url='edit/quarantine_notification'
            data-api-attr='{\"quarantine_notification\":\"weekly\"}'>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 135), "weekly", [], "any", false, false, false, 135), "html", null, true);
            echo "</button>
          </div>
          <p class=\"text-muted\"><small>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 137), "quarantine_notification_info", [], "any", false, false, false, 137), "html", null, true);
            echo "</small></p>
        </div>
      </div>
      <div class=\"row mb-2\">
        <label class=\"control-label col-sm-2\">";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 141), "quarantine_category", [], "any", false, false, false, 141), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
          <div class=\"btn-group\" data-acl=\"";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "quarantine_category", [], "any", false, false, false, 143), "html", null, true);
            echo "\">
            <button type=\"button\" class=\"btn btn-sm btn-xs-third d-block d-sm-inline btn-secondary";
            // line 144
            if ((($context["quarantine_category"] ?? null) == "reject")) {
                echo " active";
            }
            echo "\"
            data-action=\"edit_selected\"
            data-item=\"";
            // line 146
            echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
            echo "\"
            data-id=\"quarantine_category\"
            data-api-url='edit/quarantine_category'
            data-api-attr='{\"quarantine_category\":\"reject\"}'>";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 149), "q_reject", [], "any", false, false, false, 149), "html", null, true);
            echo "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-third d-block d-sm-inline btn-secondary";
            // line 150
            if ((($context["quarantine_category"] ?? null) == "add_header")) {
                echo " active";
            }
            echo "\"
            data-action=\"edit_selected\"
            data-item=\"";
            // line 152
            echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
            echo "\"
            data-id=\"quarantine_category\"
            data-api-url='edit/quarantine_category'
            data-api-attr='{\"quarantine_category\":\"add_header\"}'>";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 155), "q_add_header", [], "any", false, false, false, 155), "html", null, true);
            echo "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-third d-block d-sm-inline btn-secondary";
            // line 156
            if ((($context["quarantine_category"] ?? null) == "all")) {
                echo " active";
            }
            echo "\"
            data-action=\"edit_selected\"
            data-item=\"";
            // line 158
            echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
            echo "\"
            data-id=\"quarantine_category\"
            data-api-url='edit/quarantine_category'
            data-api-attr='{\"quarantine_category\":\"all\"}'>";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 161), "q_all", [], "any", false, false, false, 161), "html", null, true);
            echo "</button>
          </div>
          <p class=\"text-muted\"><small>";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 163), "quarantine_category_info", [], "any", false, false, false, 163), "html", null, true);
            echo "</small></p>
        </div>
      </div>
      <div class=\"row mb-4\">
        <label class=\"control-label col-sm-2\" for=\"sender_acl\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 167), "tls_policy", [], "any", false, false, false, 167), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
          <div class=\"btn-group\" data-acl=\"";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "tls_policy", [], "any", false, false, false, 169), "html", null, true);
            echo "\">
            <button type=\"button\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary";
            // line 170
            if ((twig_get_attribute($this->env, $this->source, ($context["get_tls_policy"] ?? null), "tls_enforce_in", [], "any", false, false, false, 170) == "1")) {
                echo " active\"";
            }
            echo "\"
              data-action=\"edit_selected\"
              data-item=\"";
            // line 172
            echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
            echo "\"
              data-id=\"tls_policy\"
              data-api-url='edit/tls_policy'
              data-api-attr='{\"tls_enforce_in\": ";
            // line 175
            if ((twig_get_attribute($this->env, $this->source, ($context["get_tls_policy"] ?? null), "tls_enforce_in", [], "any", false, false, false, 175) == "1")) {
                echo "0";
            } else {
                echo "1";
            }
            echo " }'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 175), "tls_enforce_in", [], "any", false, false, false, 175), "html", null, true);
            echo "</button>
            <button type=\"button\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary";
            // line 176
            if ((twig_get_attribute($this->env, $this->source, ($context["get_tls_policy"] ?? null), "tls_enforce_out", [], "any", false, false, false, 176) == "1")) {
                echo " active\"";
            }
            echo "\"
              data-action=\"edit_selected\"
              data-item=\"";
            // line 178
            echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
            echo "\"
              data-id=\"tls_policy\"
              data-api-url='edit/tls_policy'
              data-api-attr='{\"tls_enforce_out\": ";
            // line 181
            if ((twig_get_attribute($this->env, $this->source, ($context["get_tls_policy"] ?? null), "tls_enforce_out", [], "any", false, false, false, 181) == "1")) {
                echo "0";
            } else {
                echo "1";
            }
            echo " }'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 181), "tls_enforce_out", [], "any", false, false, false, 181), "html", null, true);
            echo "</button>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <label class=\"control-label col-sm-2\" for=\"password\">";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 186), "password", [], "any", false, false, false, 186), "html", null, true);
            echo " (<a href=\"#\" class=\"generate_password\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 186), "generate", [], "any", false, false, false, 186), "html", null, true);
            echo "</a>)</label>
        <div class=\"col-sm-10\">
          <input type=\"password\" data-pwgen-field=\"true\" data-hibp=\"true\" class=\"form-control\" name=\"password\" placeholder=\"";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 188), "unchanged_if_empty", [], "any", false, false, false, 188), "html", null, true);
            echo "\" autocomplete=\"new-password\">
        </div>
      </div>
      <div class=\"row mb-4\">
        <label class=\"control-label col-sm-2\" for=\"password2\">";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 192), "password_repeat", [], "any", false, false, false, 192), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"password\" data-pwgen-field=\"true\" class=\"form-control\" name=\"password2\" autocomplete=\"new-password\">
        </div>
      </div>
      <div data-acl=\"";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "extend_sender_acl", [], "any", false, false, false, 197), "html", null, true);
            echo "\" class=\"row mb-4\">
        <label class=\"control-label col-sm-2\" for=\"extended_sender_acl\">";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 198), "extended_sender_acl", [], "any", false, false, false, 198), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
          ";
            // line 200
            if (twig_get_attribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "external_sender_aliases", [], "any", false, false, false, 200)) {
                // line 201
                echo "            ";
                $context["ext_sender_acl"] = twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["sender_acl_handles"] ?? null), "external_sender_aliases", [], "any", false, false, false, 201), ", ");
                // line 202
                echo "          ";
            }
            // line 203
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "extend_sender_acl", [], "any", false, false, false, 203) && (twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "extend_sender_acl", [], "any", false, false, false, 203) == 1))) {
                // line 204
                echo "            <input type=\"text\" class=\"form-control\" name=\"extended_sender_acl\" value=\"";
                echo twig_escape_filter($this->env, ($context["ext_sender_acl"] ?? null), "html", null, true);
                echo "\" placeholder=\"user1@example.com, user2@example.org, @example.com, ...\">
            <small class=\"text-muted\">";
                // line 205
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 205), "extended_sender_acl_info", [], "any", false, false, false, 205);
                echo "</small>
          ";
            }
            // line 207
            echo "        </div>
      </div>
      <div class=\"row\">
        <label class=\"control-label col-sm-2\" for=\"protocol_access\">";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 210), "allowed_protocols", [], "any", false, false, false, 210), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
          <select data-acl=\"";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "protocol_access", [], "any", false, false, false, 212), "html", null, true);
            echo "\" name=\"protocol_access\" multiple class=\"form-control\">
            <option value=\"imap\"";
            // line 213
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 213), "imap_access", [], "any", false, false, false, 213) == "1")) {
                echo " selected";
            }
            echo ">IMAP</option>
            <option value=\"pop3\"";
            // line 214
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 214), "pop3_access", [], "any", false, false, false, 214) == "1")) {
                echo " selected";
            }
            echo ">POP3</option>
            <option value=\"smtp\"";
            // line 215
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 215), "smtp_access", [], "any", false, false, false, 215) == "1")) {
                echo " selected";
            }
            echo ">SMTP</option>
            <option value=\"sieve\"";
            // line 216
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 216), "sieve_access", [], "any", false, false, false, 216) == "1")) {
                echo " selected";
            }
            echo ">Sieve</option>
          </select>
        </div>
      </div>
      <div hidden data-acl=\"";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "smtp_ip_access", [], "any", false, false, false, 220), "html", null, true);
            echo "\" class=\"row\">
        <label class=\"control-label col-sm-2\" for=\"allow_from_smtp\">";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 221), "allow_from_smtp", [], "any", false, false, false, 221), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"text\" class=\"form-control\" name=\"allow_from_smtp\" value=\"";
            // line 223
            echo twig_escape_filter($this->env, ($context["allow_from_smtp"] ?? null), "html", null, true);
            echo "\" placeholder=\"1.1.1.1, 10.2.0.0/24, ...\">
          <small class=\"text-muted\">";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 224), "allow_from_smtp_info", [], "any", false, false, false, 224), "html", null, true);
            echo "</small>
        </div>
      </div>
      <hr>
      <div class=\"row\">
        <div class=\"offset-sm-2 col-sm-10\">
          <select name=\"active\" class=\"form-control\">
            <option value=\"1\"";
            // line 231
            if ((twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "active", [], "any", false, false, false, 231) == "1")) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 231), "active", [], "any", false, false, false, 231), "html", null, true);
            echo "</option>
            <option value=\"2\"";
            // line 232
            if ((twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "active", [], "any", false, false, false, 232) == "2")) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 232), "disable_login", [], "any", false, false, false, 232), "html", null, true);
            echo "</option>
            <option value=\"0\"";
            // line 233
            if ((twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "active", [], "any", false, false, false, 233) == "0")) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 233), "inactive", [], "any", false, false, false, 233), "html", null, true);
            echo "</option>
          </select>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"offset-sm-2 col-sm-10\">
          <div class=\"checkbox\">
            <label><input type=\"checkbox\" value=\"1\" name=\"force_pw_update\"";
            // line 240
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 240), "force_pw_update", [], "any", false, false, false, 240) == "1")) {
                echo " checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 240), "force_pw_update", [], "any", false, false, false, 240), "html", null, true);
            echo "</label>
            <small class=\"text-muted\">";
            // line 241
            echo twig_escape_filter($this->env, twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 241), "force_pw_update_info", [], "any", false, false, false, 241), twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 241)), "html", null, true);
            echo "</small>
          </div>
        </div>
      </div>
      ";
            // line 245
            if ( !($context["skip_sogo"] ?? null)) {
                // line 246
                echo "      <div data-acl=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "sogo_access", [], "any", false, false, false, 246), "html", null, true);
                echo "\" class=\"row\">
        <div class=\"offset-sm-2 col-sm-10\">
          <div class=\"checkbox\">
            <label><input type=\"checkbox\" value=\"1\" name=\"sogo_access\"";
                // line 249
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "attributes", [], "any", false, false, false, 249), "sogo_access", [], "any", false, false, false, 249) == "1")) {
                    echo " checked";
                }
                echo "> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 249), "sogo_access", [], "any", false, false, false, 249), "html", null, true);
                echo "</label>
            <small class=\"text-muted\">";
                // line 250
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 250), "sogo_access_info", [], "any", false, false, false, 250), "html", null, true);
                echo "</small>
          </div>
        </div>
      </div>
      ";
            }
            // line 255
            echo "      <div class=\"row mb-2\">
        <div class=\"offset-sm-2 col-sm-10\">
          <button class=\"btn btn-xs-lg d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-id=\"editmailbox\" data-item=\"";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "username", [], "any", false, false, false, 257), "html", null, true);
            echo "\" data-api-url='edit/mailbox' data-api-attr='{}' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 257), "save", [], "any", false, false, false, 257), "html", null, true);
            echo "</button>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"offset-sm-2 col-sm-10\">
          <small class=\"fst-italic d-block\">";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 262), "created_on", [], "any", false, false, false, 262), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "created", [], "any", false, false, false, 262), "html", null, true);
            echo "</small>
          <small class=\"fst-italic d-block\">";
            // line 263
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 263), "last_modified", [], "any", false, false, false, 263), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "modified", [], "any", false, false, false, 263), "html", null, true);
            echo "</small>
        </div>
      </div>
    </form>
  </div>
  <div id=\"mpushover\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"mailbox-pushover\">
    <form data-id=\"pushover\" class=\"form well\" method=\"post\">
      <input type=\"hidden\" value=\"0\" name=\"evaluate_x_prio\">
      <input type=\"hidden\" value=\"0\" name=\"only_x_prio\">
      <input type=\"hidden\" value=\"0\" name=\"active\">
      <div class=\"row\">
        <div class=\"col-sm-1\">
          <p class=\"text-muted\"><a href=\"https://pushover.net\" target=\"_blank\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAACglBMVEUAAAAAAAEAAAAilecFGigAAAAAAAAAAAAAAAANj+c3n+Ypm+oeYI4KWI4MieAtkdQbleoJcLcjmeswmN4Rit4KgdMKUYQJKUAQSnILL0kMNlMSTngimOoNPF0hlOQBBgkNOlkRS3MHIjUhk+IPf8wKLUYsjM0AAAASTngAAAAAAAAPfckbdLIbdrYUWIgegsgce70knfEAAAAknfENOVkGHi8YaaIjnvEdgMUhkuAQSG8aca0hleQUh9YLjOM4nOEMgtMcbaYWa6YemO02ltkKhNktgLodYZEPXJEyi8kKesktfLUzj84cWYMiluckZ5YJXJYeW4Y0k9YKfs4yjs0pc6YHZaUviskLfMkqmugak+cqkNcViNcqeK4Iaq4XRmYGPmYMKDsFJTstgr0LdL0ti84CCQ4BCQ4Qgc8rlt8XjN8shcQsi8wZSGgEP2cRMEUDKkUAAAD///8dmvEamfExo/EXmPEWl/ERlvElnvEsofEjnfETl/Enn/Ezo/E4pvEvovEfm/E1pPEzpPEvofEOlfEpoPEamPEQlfEYmfE6p/EgnPEVlvEroPE3pfE2pfENk/Ern/E3pPEcmfEfmvEnnvBlufT6/P0soPAknPDd7/zs9vzo9PxBqfItofAqoPD9/f3B4/q43/mx2/l/xfZ6w/Vxv/VtvfVgt/RXtPNTsfNEq/L3+/31+v3a7fvR6vvH5fqs2vmc0/jx+P3v9/3h8fzW7PvV7PvL5/q13fmo1/mh1PiY0fiNy/aHyfZ2wfVou/Vdt/RPsPM3oeoQkuowmeAgjdgcgMQbeLrw9/3k8vy74Pm63/mX0PdYtfNNr/Ikm+4wnOchkuAVjOAfdrMVcrOdoJikAAAAcnRSTlMAIQ8IzzweFwf+/fvw8P79+/Xt7e3p6eji4d7U08y8qZyTiIWDgn53bWxqaWBKQ0JBOjUwMCkoJCEfHBkT/vz8/Pv7+vr69/b29PTy7ezm5ubm5N7e29vQ0M/Pv7+4uLW1pqaWloWDg3x7e21mUVFFRUXdPracAAAEbElEQVRIx4WUZbvaQBCFF+ru7u7u7u7u7t4mvVwSoBC0JIUCLRQolLq7u7vr/+nMLkmQyvlwyfPcd86e3ZldUqwyQ/p329J+XfutPQYOLUP+q55rFtQJRvY79+xxlZTUWbKpz7/xrrMr2+3BoNPpdLn2lJQ4HEeqLOr1d7z7XNkesQed4A848G63Oy4Gmg/6Mz542QvZbqe8C/Ig73CLYiYTrtLmT3zfqbIcAR7y4wIqH/B6M9Fo0+Ldb6sM9ph/v4ozPuz12mxRofaAAr7jCNkuoz/jNf9AGHibkBCm51fsGKvxsAGWx4H+jBcEi6V2birDpCL/9Klrd1KHbiSvPWP8V0tTnTfO03iXi57P6WNHOVUf44IFdFDRz6pV5fw8Zy5z3JVH5+R48OwxqDiGvKJIY9R+9JsCuJ5HPg74OVEMpz+nbdEPUHEWeEk6IDUnTC1l5r+f8uffc0cfxc8fS17kLso24SwUPFDA/6DE82xKDOPliJ7n/GGOOyWK9zD9CdjvOfg9Dv6AH+AX04LW9gj2i8W/APx1UbxwCAu+wPmcpgUKL/EHdvtq4uwaZwCuznPJVY5LHhED15G/isd5Hz4eKui/e/du02YoKFeD5mHzHIN/nxEDe25gQQwKorAid04CfyzwL4XutXvl1Pt1guMOwwKPkU8mYIFT8JHK+vv8prpDScUVL+j8s3lOctw1GIhbWHAS+HgKPk7xPM/4UtNAYmzizJkf6NgTb/gM8jePQLsewMdthS3g95tMpT1IhVm6v1s8fYmLeb13Odwp8Fh5KY048y/d14WUrwrb1e/X/rNp73nkD8kWS+wi/MZ4XuetG4mhKubJm3/WNEvi8SHwB56nPKjUam0LBdp9ARwupFemTYudvgN/L1+A/Ko/LGBuS8pPy+YR1fuCTWNKnUyoeUyYx2o2dyEVGmr5xTD42xzvkD16+Pb9WIIH6fmt1r3mbsTY7Bvw+n23naT8BUWh86bz6G/e259UXPUK3gfAxQDlo7Rpx3Geqb2e3wp83SGEdKpB7zvwYbzvT2n65xLwbH6YP+M9C8vA8E1wxLU8gkCbdhXGUyrMgwVrcbzLHonr78lzDvWM3q/C/HtDlXoSUIe3YkblhRPIX4E8Oo/9siLv8dRjV7SBlkdgTXvKS7nzsA/9AfeEuhKq9T8zWIDv1Sd6ETAP4D6/H/1V+1BojvruNa4SZXz4JhY84dV5MOF5agUvu5OsOo+KRpG30KalEnoeDccFlutPZYs38D5n3zcpr1/0fBhfb3DOY1z2tSAgLxWezz6zuoHhfUmOejf6blHQH/sFuJYfcMZX307ytKvRa3ifoV/586P5j+tICtS77BuJxzxYAPZsntX8k3eSIhlajK4p8b7iefCEKs03kD/I2LnxL9ovH+43y4fAv1YrI/mzDBsavAX/UppfzVOrZT/ydxk6lJ047MfLfVbcb6hS9ZEzWxekKQ5WrtPqZg3rV6tWrX6Tle3KQZj/q6KxQnmDoXwFY0VSrN9e8FRXBCTAvwAAAABJRU5ErkJggg==\" class=\"img img-fluid\"></a></p>
        </div>
        <div class=\"col-sm-10\">
          <p class=\"text-muted\">";
            // line 278
            echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "user", [], "any", false, false, false, 278), "pushover_info", [], "any", false, false, false, 278), ($context["mailbox"] ?? null));
            echo "</p>
          <p class=\"text-muted\">";
            // line 279
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 279), "pushover_vars", [], "any", false, false, false, 279);
            echo ": <code>{SUBJECT}</code>, <code>{SENDER}</code>, <code>{SENDER_ADDRESS}</code>, <code>{SENDER_NAME}</code>, <code>{TO_NAME}</code>, <code>{TO_ADDRESS}</code>, <code>{MSG_ID}</code></p>
          <div class=\"row\">
            <div class=\"col-sm-6 mb-2\">
              <label for=\"token\">API Token/Key (Application)</label>
              <input type=\"text\" class=\"form-control\" name=\"token\" maxlength=\"30\" value=\"";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "token", [], "any", false, false, false, 283), "html", null, true);
            echo "\" required>
            </div>
            <div class=\"col-sm-6 mb-2\">
              <label for=\"key\">User/Group Key</label>
              <input type=\"text\" class=\"form-control\" name=\"key\" maxlength=\"30\" value=\"";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "key", [], "any", false, false, false, 287), "html", null, true);
            echo "\" required>
            </div>
            <div class=\"col-sm-6 mb-4\">
              <label for=\"title\">";
            // line 290
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 290), "pushover_title", [], "any", false, false, false, 290), "html", null, true);
            echo "</label>
              <input type=\"text\" class=\"form-control\" name=\"title\" value=\"";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "title", [], "any", false, false, false, 291), "html", null, true);
            echo "\" placeholder=\"Mail\">
            </div>
            <div class=\"col-sm-6 mb-4\">
              <label for=\"text\">";
            // line 294
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 294), "pushover_text", [], "any", false, false, false, 294), "html", null, true);
            echo "</label>
              <input type=\"text\" class=\"form-control\" name=\"text\" value=\"";
            // line 295
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "text", [], "any", false, false, false, 295), "html", null, true);
            echo "\" placeholder=\"You've got mail 📧\">
            </div>
            <div class=\"col-sm-12 mb-4\">
              <label for=\"text\">";
            // line 298
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 298), "pushover_sender_array", [], "any", false, false, false, 298);
            echo "</label>
              <input type=\"text\" class=\"form-control\" name=\"senders\" value=\"";
            // line 299
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "senders", [], "any", false, false, false, 299), "html", null, true);
            echo "\" placeholder=\"sender1@example.com, sender2@example.com\">
            </div>
            <div class=\"col-sm-12 mb-2\">
                <div class=\"form-group\">
                  <label for=\"sound\">";
            // line 303
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 303), "pushover_sound", [], "any", false, false, false, 303), "html", null, true);
            echo "</label><br>
                  <select name=\"sound\" class=\"form-control\">
                    <option value=\"pushover\"";
            // line 305
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 305), "sound", [], "any", false, false, false, 305) == "pushover")) {
                echo " selected";
            }
            echo ">Pushover (default)</option>
                    <option value=\"bike\"";
            // line 306
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 306), "sound", [], "any", false, false, false, 306) == "bike")) {
                echo " selected";
            }
            echo ">Bike</option>
                    <option value=\"bugle\"";
            // line 307
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 307), "sound", [], "any", false, false, false, 307) == "bugle")) {
                echo " selected";
            }
            echo ">Bugle</option>
                    <option value=\"cashregister\"";
            // line 308
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 308), "sound", [], "any", false, false, false, 308) == "cashregister")) {
                echo " selected";
            }
            echo ">Cash Register</option>
                    <option value=\"classical\"";
            // line 309
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 309), "sound", [], "any", false, false, false, 309) == "classical")) {
                echo " selected";
            }
            echo ">Classical</option>
                    <option value=\"cosmic\"";
            // line 310
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 310), "sound", [], "any", false, false, false, 310) == "cosmic")) {
                echo " selected";
            }
            echo ">Cosmic</option>
                    <option value=\"falling\"";
            // line 311
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 311), "sound", [], "any", false, false, false, 311) == "falling")) {
                echo " selected";
            }
            echo ">Falling</option>
                    <option value=\"gamelan\"";
            // line 312
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 312), "sound", [], "any", false, false, false, 312) == "gamelan")) {
                echo " selected";
            }
            echo ">Gamelan</option>
                    <option value=\"incoming\"";
            // line 313
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 313), "sound", [], "any", false, false, false, 313) == "incoming")) {
                echo " selected";
            }
            echo ">Incoming</option>
                    <option value=\"intermission\"";
            // line 314
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 314), "sound", [], "any", false, false, false, 314) == "intermission")) {
                echo " selected";
            }
            echo ">Intermission</option>
                    <option value=\"magic\"";
            // line 315
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 315), "sound", [], "any", false, false, false, 315) == "magic")) {
                echo " selected";
            }
            echo ">Magic</option>
                    <option value=\"mechanical\"";
            // line 316
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 316), "sound", [], "any", false, false, false, 316) == "mechanical")) {
                echo " selected";
            }
            echo ">Mechanical</option>
                    <option value=\"pianobar\"";
            // line 317
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 317), "sound", [], "any", false, false, false, 317) == "pianobar")) {
                echo " selected";
            }
            echo ">Piano Bar</option>
                    <option value=\"siren\"";
            // line 318
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 318), "sound", [], "any", false, false, false, 318) == "siren")) {
                echo " selected";
            }
            echo ">Siren</option>
                    <option value=\"spacealarm\"";
            // line 319
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 319), "sound", [], "any", false, false, false, 319) == "spacealarm")) {
                echo " selected";
            }
            echo ">Space Alarm</option>
                    <option value=\"tugboat\"";
            // line 320
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 320), "sound", [], "any", false, false, false, 320) == "tugboat")) {
                echo " selected";
            }
            echo ">Tug Boat</option>
                    <option value=\"alien\"";
            // line 321
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 321), "sound", [], "any", false, false, false, 321) == "alien")) {
                echo " selected";
            }
            echo ">Alien Alarm (long)</option>
                    <option value=\"climb\"";
            // line 322
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 322), "sound", [], "any", false, false, false, 322) == "climb")) {
                echo " selected";
            }
            echo ">Climb (long)</option>
                    <option value=\"persistent\"";
            // line 323
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 323), "sound", [], "any", false, false, false, 323) == "persistent")) {
                echo " selected";
            }
            echo ">Persistent (long)</option>
                    <option value=\"echo\"";
            // line 324
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 324), "sound", [], "any", false, false, false, 324) == "echo")) {
                echo " selected";
            }
            echo ">Pushover Echo (long)</option>
                    <option value=\"updown\"";
            // line 325
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 325), "sound", [], "any", false, false, false, 325) == "updown")) {
                echo " selected";
            }
            echo ">Up Down (long)</option>
                    <option value=\"vibrate\"";
            // line 326
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 326), "sound", [], "any", false, false, false, 326) == "vibrate")) {
                echo " selected";
            }
            echo ">Vibrate Only</option>
                    <option value=\"none\"";
            // line 327
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 327), "sound", [], "any", false, false, false, 327) == "none")) {
                echo " selected";
            }
            echo "> None (silent) </option>
                  </select>
                </div>
              </div>
              <div class=\"col-sm-12\">
              <div class=\"checkbox\">
                <label><input type=\"checkbox\" value=\"1\" name=\"active\"";
            // line 333
            if ((twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "active", [], "any", false, false, false, 333) == "1")) {
                echo " checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 333), "active", [], "any", false, false, false, 333), "html", null, true);
            echo "</label>
              </div>
            </div>
            <div class=\"col-sm-12\">
              <legend style=\"cursor:pointer;margin-top:10px\" data-bs-target=\"#po_advanced\" unselectable=\"on\" data-bs-toggle=\"collapse\">
                <i class=\"bi bi-plus\"></i> ";
            // line 338
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 338), "advanced_settings", [], "any", false, false, false, 338), "html", null, true);
            echo "
              </legend>
              <hr />
            </div>
            <div class=\"col-sm-12 mb-4\">
              <div id=\"po_advanced\" class=\"collapse\">
                <label for=\"text\">";
            // line 344
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 344), "pushover_sender_regex", [], "any", false, false, false, 344), "html", null, true);
            echo "</label>
                <input type=\"text\" class=\"form-control mt-2\" name=\"senders_regex\" value=\"";
            // line 345
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "senders_regex", [], "any", false, false, false, 345), "html", null, true);
            echo "\" placeholder=\"/(.*@example\\.org\$|^foo@example\\.com\$)/i\" regex=\"true\">
                <div class=\"checkbox mt-4\">
                  <label><input type=\"checkbox\" value=\"1\" name=\"evaluate_x_prio\"";
            // line 347
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 347), "evaluate_x_prio", [], "any", false, false, false, 347) == "1")) {
                echo " checked";
            }
            echo "> ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 347), "pushover_evaluate_x_prio", [], "any", false, false, false, 347);
            echo "</label>
                </div>
                <div class=\"checkbox mt-2\">
                  <label><input type=\"checkbox\" value=\"1\" name=\"only_x_prio\"";
            // line 350
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pushover_data"] ?? null), "attributes", [], "any", false, false, false, 350), "only_x_prio", [], "any", false, false, false, 350) == "1")) {
                echo " checked";
            }
            echo "> ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 350), "pushover_only_x_prio", [], "any", false, false, false, 350);
            echo "</label>
                </div>
              </div>
            </div>
          </div>
          <div class=\"btn-group\" data-acl=\"";
            // line 355
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["acl"] ?? null), "pushover", [], "any", false, false, false, 355), "html", null, true);
            echo "\">
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-success\" data-action=\"edit_selected\" data-id=\"pushover\" data-item=\"";
            // line 356
            echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
            echo "\" data-api-url='edit/pushover' data-api-attr='{}' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 356), "save", [], "any", false, false, false, 356), "html", null, true);
            echo "</a>
            <a class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\" data-action=\"edit_selected\" data-id=\"pushover-test\" data-item=\"";
            // line 357
            echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
            echo "\" data-api-url='edit/pushover-test' data-api-attr='{}' href=\"#\"><i class=\"bi bi-check-lg\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 357), "pushover_verify", [], "any", false, false, false, 357), "html", null, true);
            echo "</a>
            <a id=\"pushover_delete\" class=\"btn btn-sm d-block d-sm-inline btn-danger\" data-action=\"edit_selected\" data-id=\"pushover-delete\" data-item=\"";
            // line 358
            echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
            echo "\" data-api-url='edit/pushover' data-api-attr='{\"delete\":\"true\"}' href=\"#\"><i class=\"bi bi-trash\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 358), "remove", [], "any", false, false, false, 358), "html", null, true);
            echo "</a>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div id=\"macl\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"mailbox-acl\">
    <form data-id=\"useracl\" class=\"form-inline well\" method=\"post\">
      <div class=\"row\">
        <div class=\"col-sm-1\">
          <p class=\"text-muted\">ACL</p>
        </div>
        <div class=\"col-sm-10\">
          <select id=\"user_acl\" name=\"user_acl\" size=\"10\" multiple>
            ";
            // line 372
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["user_acls"] ?? null));
            foreach ($context['_seq'] as $context["acl"] => $context["val"]) {
                // line 373
                echo "              <option value=\"";
                echo twig_escape_filter($this->env, $context["acl"], "html", null, true);
                echo "\"";
                if (($context["val"] == 1)) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 373)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["acl"]] ?? null) : null), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['acl'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 375
            echo "          </select>
          <button class=\"btn btn-xs-lg d-block d-sm-inline btn-secondary\" data-action=\"edit_selected\" data-id=\"useracl\" data-item=\"";
            // line 376
            echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
            echo "\" data-api-url='edit/user-acl' data-api-attr='{}' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 376), "save", [], "any", false, false, false, 376), "html", null, true);
            echo "</button>
        </div>
      </div>
    </form>
  </div>
  <div id=\"mrl\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"mailbox-rl\">
    <form data-id=\"mboxratelimit\" class=\"form-inline well\" method=\"post\">
      <div class=\"row\">
        <div class=\"col-sm-1\">
          <p class=\"text-muted\">";
            // line 385
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "acl", [], "any", false, false, false, 385), "ratelimit", [], "any", false, false, false, 385), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-sm-10\">
          <input name=\"rl_value\" type=\"number\" autocomplete=\"off\" value=\"";
            // line 388
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rl"] ?? null), "value", [], "any", false, false, false, 388), "html", null, true);
            echo "\" class=\"form-control mb-4\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 388), "disabled", [], "any", false, false, false, 388), "html", null, true);
            echo "\">
          <select name=\"rl_frame\" class=\"form-control\">
            ";
            // line 390
            $this->loadTemplate("mailbox/rl-frame.twig", "edit/mailbox.twig", 390)->display($context);
            // line 391
            echo "          </select>
          <button class=\"btn btn-xs-lg d-block d-sm-inline btn-secondary\" data-action=\"edit_selected\" data-id=\"mboxratelimit\" data-item=\"";
            // line 392
            echo twig_escape_filter($this->env, ($context["mailbox"] ?? null), "html", null, true);
            echo "\" data-api-url='edit/rl-mbox' data-api-attr='{}' href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 392), "save", [], "any", false, false, false, 392), "html", null, true);
            echo "</button>
          <p class=\"text-muted mt-3\">";
            // line 393
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "edit", [], "any", false, false, false, 393), "mbox_rl_info", [], "any", false, false, false, 393), "html", null, true);
            echo "</p>
        </div>
      </div>
    </form>
  </div>
</div>
";
        } else {
            // line 400
            echo "  ";
            $this->displayParentBlock("inner_content", $context, $blocks);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "edit/mailbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1149 => 400,  1139 => 393,  1133 => 392,  1130 => 391,  1128 => 390,  1121 => 388,  1115 => 385,  1101 => 376,  1098 => 375,  1083 => 373,  1079 => 372,  1060 => 358,  1054 => 357,  1048 => 356,  1044 => 355,  1032 => 350,  1022 => 347,  1017 => 345,  1013 => 344,  1004 => 338,  992 => 333,  981 => 327,  975 => 326,  969 => 325,  963 => 324,  957 => 323,  951 => 322,  945 => 321,  939 => 320,  933 => 319,  927 => 318,  921 => 317,  915 => 316,  909 => 315,  903 => 314,  897 => 313,  891 => 312,  885 => 311,  879 => 310,  873 => 309,  867 => 308,  861 => 307,  855 => 306,  849 => 305,  844 => 303,  837 => 299,  833 => 298,  827 => 295,  823 => 294,  817 => 291,  813 => 290,  807 => 287,  800 => 283,  793 => 279,  789 => 278,  769 => 263,  763 => 262,  753 => 257,  749 => 255,  741 => 250,  733 => 249,  726 => 246,  724 => 245,  717 => 241,  709 => 240,  695 => 233,  687 => 232,  679 => 231,  669 => 224,  665 => 223,  660 => 221,  656 => 220,  647 => 216,  641 => 215,  635 => 214,  629 => 213,  625 => 212,  620 => 210,  615 => 207,  610 => 205,  605 => 204,  602 => 203,  599 => 202,  596 => 201,  594 => 200,  589 => 198,  585 => 197,  577 => 192,  570 => 188,  563 => 186,  549 => 181,  543 => 178,  536 => 176,  526 => 175,  520 => 172,  513 => 170,  509 => 169,  504 => 167,  497 => 163,  492 => 161,  486 => 158,  479 => 156,  475 => 155,  469 => 152,  462 => 150,  458 => 149,  452 => 146,  445 => 144,  441 => 143,  436 => 141,  429 => 137,  424 => 135,  418 => 132,  411 => 130,  407 => 129,  401 => 126,  394 => 124,  390 => 123,  384 => 120,  377 => 118,  373 => 117,  367 => 114,  360 => 112,  356 => 111,  351 => 109,  344 => 105,  337 => 101,  330 => 100,  317 => 97,  312 => 96,  308 => 95,  302 => 94,  299 => 93,  295 => 92,  291 => 91,  286 => 89,  279 => 85,  275 => 84,  272 => 83,  263 => 81,  258 => 80,  249 => 78,  244 => 77,  235 => 74,  230 => 73,  225 => 72,  216 => 69,  211 => 68,  206 => 67,  197 => 65,  192 => 64,  183 => 61,  180 => 60,  175 => 59,  166 => 56,  161 => 55,  157 => 54,  151 => 51,  141 => 46,  135 => 43,  131 => 42,  122 => 35,  113 => 32,  103 => 30,  99 => 29,  93 => 26,  86 => 22,  81 => 20,  67 => 9,  63 => 8,  59 => 7,  55 => 6,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "edit/mailbox.twig", "/web/templates/edit/mailbox.twig");
    }
}
