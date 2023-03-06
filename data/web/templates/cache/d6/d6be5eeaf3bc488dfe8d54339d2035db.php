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

/* admin.twig */
class __TwigTemplate_4ae169a2ea7fd556844cfaac56f077b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.twig", "admin.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div id=\"admin-content\" class=\"responsive-tabs\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle active\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "access", [], "any", false, false, false, 7), "html", null, true);
        echo "</a>
      <ul class=\"dropdown-menu\">
        <li><button class=\"dropdown-item active\" data-bs-target=\"#tab-config-admins\" aria-selected=\"false\" aria-controls=\"tab-config-admins\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 9), "admins", [], "any", false, false, false, 9), "html", null, true);
        echo "</button></li>
        <!-- <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-ldap-admins\" aria-controls=\"tab-config-ldap-admins\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 10), "admins_ldap", [], "any", false, false, false, 10), "html", null, true);
        echo "</button></li> -->
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-oauth2\" aria-selected=\"false\" aria-controls=\"tab-config-oauth2\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 11), "oauth2_apps", [], "any", false, false, false, 11), "html", null, true);
        echo "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-rspamd\" aria-selected=\"false\" aria-controls=\"tab-config-rspamd\" role=\"tab\" data-bs-toggle=\"tab\">Rspamd UI</button></li>
      </ul>
    </li>

    <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 17), "options", [], "any", false, false, false, 17), "html", null, true);
        echo "</a>
      <ul class=\"dropdown-menu\">
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-dkim\" aria-selected=\"false\" aria-controls=\"tab-config-dkim\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 19), "dkim_keys", [], "any", false, false, false, 19), "html", null, true);
        echo "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-fwdhosts\" aria-selected=\"false\" aria-controls=\"tab-config-fwdhosts\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 20), "forwarding_hosts", [], "any", false, false, false, 20), "html", null, true);
        echo "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-f2b\" aria-selected=\"false\" aria-controls=\"tab-config-f2b\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 21), "f2b_parameters", [], "any", false, false, false, 21), "html", null, true);
        echo "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-quarantine\" aria-selected=\"false\" aria-controls=\"tab-config-quarantine\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 22), "quarantine", [], "any", false, false, false, 22), "html", null, true);
        echo "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-quota\" aria-selected=\"false\" aria-controls=\"tab-config-quota\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 23), "quota_notifications", [], "any", false, false, false, 23), "html", null, true);
        echo "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-rsettings\" aria-selected=\"false\" aria-controls=\"tab-config-rsettings\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 24), "rspamd_settings_map", [], "any", false, false, false, 24), "html", null, true);
        echo "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-password-policy\" aria-selected=\"false\" aria-controls=\"tab-config-password-policy\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 25), "password_policy", [], "any", false, false, false, 25), "html", null, true);
        echo "</button></li>
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-config-customize\" aria-selected=\"false\" aria-controls=\"tab-config-customize\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 26), "customize", [], "any", false, false, false, 26), "html", null, true);
        echo "</button></li>
      </ul>
    </li>
    <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-target=\"#tab-routing\" aria-selected=\"false\" aria-controls=\"tab-routing\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 29), "routing", [], "any", false, false, false, 29), "html", null, true);
        echo "</button></li>
    <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link\" data-bs-target=\"#tab-sys-mails\" aria-selected=\"false\" aria-controls=\"tab-sys-mails\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 30), "sys_mails", [], "any", false, false, false, 30), "html", null, true);
        echo "</button></li>
    <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 32), "rspamd_global_filters", [], "any", false, false, false, 32), "html", null, true);
        echo "</a>
      <ul class=\"dropdown-menu\">
        <li><button class=\"dropdown-item\" data-bs-target=\"#tab-globalfilter-regex\" aria-selected=\"false\" aria-controls=\"tab-globalfilter-regex\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 34), "regex_maps", [], "any", false, false, false, 34), "html", null, true);
        echo "</button></li>
      </ul>
    </li>
  </ul>

  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tab-content\" style=\"padding-top:20px\">
        ";
        // line 42
        $this->loadTemplate("admin/tab-config-admins.twig", "admin.twig", 42)->display($context);
        // line 43
        echo "        ";
        // line 44
        echo "        ";
        $this->loadTemplate("admin/tab-config-oauth2.twig", "admin.twig", 44)->display($context);
        // line 45
        echo "        ";
        $this->loadTemplate("admin/tab-config-rspamd.twig", "admin.twig", 45)->display($context);
        // line 46
        echo "        ";
        $this->loadTemplate("admin/tab-routing.twig", "admin.twig", 46)->display($context);
        // line 47
        echo "        ";
        $this->loadTemplate("admin/tab-config-dkim.twig", "admin.twig", 47)->display($context);
        // line 48
        echo "        ";
        $this->loadTemplate("admin/tab-config-fwdhosts.twig", "admin.twig", 48)->display($context);
        // line 49
        echo "        ";
        $this->loadTemplate("admin/tab-config-f2b.twig", "admin.twig", 49)->display($context);
        // line 50
        echo "        ";
        $this->loadTemplate("admin/tab-config-quarantine.twig", "admin.twig", 50)->display($context);
        // line 51
        echo "        ";
        $this->loadTemplate("admin/tab-config-quota.twig", "admin.twig", 51)->display($context);
        // line 52
        echo "        ";
        $this->loadTemplate("admin/tab-config-rsettings.twig", "admin.twig", 52)->display($context);
        // line 53
        echo "        ";
        $this->loadTemplate("admin/tab-config-customize.twig", "admin.twig", 53)->display($context);
        // line 54
        echo "        ";
        $this->loadTemplate("admin/tab-config-password-policy.twig", "admin.twig", 54)->display($context);
        // line 55
        echo "        ";
        $this->loadTemplate("admin/tab-sys-mails.twig", "admin.twig", 55)->display($context);
        // line 56
        echo "        ";
        $this->loadTemplate("admin/tab-globalfilter-regex.twig", "admin.twig", 56)->display($context);
        // line 57
        echo "      </div>
    </div> <!-- /col-md-12 -->
  </div> <!-- /row -->
</div>

";
        // line 62
        $this->loadTemplate("modals/admin.twig", "admin.twig", 62)->display($context);
        // line 63
        echo "
<script type='text/javascript'>
var lang = ";
        // line 65
        echo ($context["lang_admin"] ?? null);
        echo ";
var lang_datatables = ";
        // line 66
        echo ($context["lang_datatables"] ?? null);
        echo ";
var admin_username = '";
        // line 67
        echo twig_escape_filter($this->env, ($context["mailcow_cc_username"] ?? null), "html", null, true);
        echo "';
var csrf_token = '";
        // line 68
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "';
var pagination_size = Math.trunc('";
        // line 69
        echo twig_escape_filter($this->env, ($context["pagination_size"] ?? null), "html", null, true);
        echo "');
var log_pagination_size = Math.trunc('";
        // line 70
        echo twig_escape_filter($this->env, ($context["log_pagination_size"] ?? null), "html", null, true);
        echo "');
</script>
";
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 70,  213 => 69,  209 => 68,  205 => 67,  201 => 66,  197 => 65,  193 => 63,  191 => 62,  184 => 57,  181 => 56,  178 => 55,  175 => 54,  172 => 53,  169 => 52,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  154 => 47,  151 => 46,  148 => 45,  145 => 44,  143 => 43,  141 => 42,  130 => 34,  125 => 32,  120 => 30,  116 => 29,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  77 => 17,  68 => 11,  64 => 10,  60 => 9,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin.twig", "/web/templates/admin.twig");
    }
}
