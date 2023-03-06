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

/* mailbox.twig */
class __TwigTemplate_c3298b80231345a81a8426569d2074d2 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "mailbox.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div id=\"mail-content\" class=\"responsive-tabs\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    <li class=\"nav-item dropdown\" role=\"presentation\">
      <a class=\"nav-link dropdown-toggle active\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 7), "domains", [], "any", false, false, false, 7), "html", null, true);
        echo "</a>
      <ul class=\"dropdown-menu\">
        <li><button class=\"dropdown-item\" aria-selected=\"false\" aria-controls=\"tab-domains\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-domains\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 9), "domains", [], "any", false, false, false, 9), "html", null, true);
        echo "</button></li>
        <li><button class=\"dropdown-item ";
        // line 10
        if ((($context["mailcow_cc_role"] ?? null) != "admin")) {
            echo " d-none";
        }
        echo "\" aria-selected=\"false\" aria-controls=\"tab-templates-domains\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-templates-domains\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 10), "templates", [], "any", false, false, false, 10), "html", null, true);
        echo "</button></li>
      </ul>
    </li>
    <li class=\"nav-item dropdown\" role=\"presentation\">
      <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 14), "mailboxes", [], "any", false, false, false, 14), "html", null, true);
        echo "</a>
      <ul class=\"dropdown-menu\">
        <li><button class=\"dropdown-item\" aria-selected=\"false\" aria-controls=\"tab-mailboxes\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-mailboxes\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 16), "mailboxes", [], "any", false, false, false, 16), "html", null, true);
        echo "</button></li>
        <li><button class=\"dropdown-item ";
        // line 17
        if ((($context["mailcow_cc_role"] ?? null) != "admin")) {
            echo " d-none";
        }
        echo "\" aria-selected=\"false\" aria-controls=\"tab-templates-mbox\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-templates-mbox\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 17), "templates", [], "any", false, false, false, 17), "html", null, true);
        echo "</button></li>
      </ul>
    </li>
    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" aria-controls=\"tab-resources\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-resources\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 20), "resources", [], "any", false, false, false, 20), "html", null, true);
        echo "</button></li>
    <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" data-bs-target=\"#\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 22), "aliases", [], "any", false, false, false, 22), "html", null, true);
        echo "</a>
      <ul class=\"dropdown-menu\">
        <li role=\"presentation\"><button class=\"dropdown-item\" aria-selected=\"false\" aria-controls=\"tab-mbox-aliases\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-mbox-aliases\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 24), "aliases", [], "any", false, false, false, 24), "html", null, true);
        echo "</button></li>
        <li role=\"presentation\"><button class=\"dropdown-item\" aria-selected=\"false\" aria-controls=\"tab-domain-aliases\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-domain-aliases\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 25), "domain_aliases", [], "any", false, false, false, 25), "html", null, true);
        echo "</button></li>
      </ul>
    </li>
    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" aria-selected=\"false\" aria-controls=\"tab-syncjobs\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-syncjobs\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 28), "sync_jobs", [], "any", false, false, false, 28), "html", null, true);
        echo "</button></li>
    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" aria-selected=\"false\" aria-controls=\"tab-filters\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-filters\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 29), "filters", [], "any", false, false, false, 29), "html", null, true);
        echo "</button></li>
    <li class=\"nav-item\" role=\"presentation\"><button class=\"nav-link\" aria-selected=\"false\" aria-controls=\"tab-bcc\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-bcc\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 30), "address_rewriting", [], "any", false, false, false, 30), "html", null, true);
        echo "</button></li>
    <li class=\"nav-item\" role=\"presentation\"";
        // line 31
        if ((($context["mailcow_cc_role"] ?? null) != "admin")) {
            echo " class=\"d-none\"";
        }
        echo "><button class=\"nav-link\" aria-selected=\"false\" aria-controls=\"tab-tls-policy\" role=\"tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-tls-policy\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 31), "tls_policy_maps", [], "any", false, false, false, 31), "html", null, true);
        echo "</button></li>
  </ul>

  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"tab-content\" style=\"padding-top:20px\">
        ";
        // line 37
        $this->loadTemplate("mailbox/tab-domains.twig", "mailbox.twig", 37)->display($context);
        // line 38
        echo "        ";
        $this->loadTemplate("mailbox/tab-templates-domains.twig", "mailbox.twig", 38)->display($context);
        // line 39
        echo "        ";
        $this->loadTemplate("mailbox/tab-mailboxes.twig", "mailbox.twig", 39)->display($context);
        // line 40
        echo "        ";
        $this->loadTemplate("mailbox/tab-templates-mbox.twig", "mailbox.twig", 40)->display($context);
        // line 41
        echo "        ";
        $this->loadTemplate("mailbox/tab-resources.twig", "mailbox.twig", 41)->display($context);
        // line 42
        echo "        ";
        $this->loadTemplate("mailbox/tab-domain-aliases.twig", "mailbox.twig", 42)->display($context);
        // line 43
        echo "        ";
        $this->loadTemplate("mailbox/tab-mbox-aliases.twig", "mailbox.twig", 43)->display($context);
        // line 44
        echo "        ";
        $this->loadTemplate("mailbox/tab-syncjobs.twig", "mailbox.twig", 44)->display($context);
        // line 45
        echo "        ";
        $this->loadTemplate("mailbox/tab-filters.twig", "mailbox.twig", 45)->display($context);
        // line 46
        echo "        ";
        $this->loadTemplate("mailbox/tab-bcc.twig", "mailbox.twig", 46)->display($context);
        // line 47
        echo "        ";
        $this->loadTemplate("mailbox/tab-tls-policy.twig", "mailbox.twig", 47)->display($context);
        // line 48
        echo "      </div> <!-- /tab-content -->
    </div> <!-- /col-md-12 -->
  </div> <!-- /row -->
</div>

";
        // line 53
        $this->loadTemplate("modals/mailbox.twig", "mailbox.twig", 53)->display($context);
        // line 54
        echo "
<script type='text/javascript'>
  var acl = '";
        // line 56
        echo ($context["acl_json"] ?? null);
        echo "';
  var lang = ";
        // line 57
        echo ($context["lang_mailbox"] ?? null);
        echo ";
  var lang_rl = ";
        // line 58
        echo ($context["lang_rl"] ?? null);
        echo ";
  var lang_datatables = ";
        // line 59
        echo ($context["lang_datatables"] ?? null);
        echo ";
  var csrf_token = '";
        // line 60
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "';
  var pagination_size = Math.trunc('";
        // line 61
        echo twig_escape_filter($this->env, ($context["pagination_size"] ?? null), "html", null, true);
        echo "');
  var role = '";
        // line 62
        echo twig_escape_filter($this->env, ($context["role"] ?? null), "html", null, true);
        echo "';
  var is_dual = ";
        // line 63
        echo twig_escape_filter($this->env, ($context["is_dual"] ?? null), "html", null, true);
        echo ";
  var ALLOW_ADMIN_EMAIL_LOGIN = ";
        // line 64
        echo twig_escape_filter($this->env, ($context["allow_admin_email_login"] ?? null), "html", null, true);
        echo ";
</script>
";
    }

    public function getTemplateName()
    {
        return "mailbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 64,  212 => 63,  208 => 62,  204 => 61,  200 => 60,  196 => 59,  192 => 58,  188 => 57,  184 => 56,  180 => 54,  178 => 53,  171 => 48,  168 => 47,  165 => 46,  162 => 45,  159 => 44,  156 => 43,  153 => 42,  150 => 41,  147 => 40,  144 => 39,  141 => 38,  139 => 37,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  108 => 25,  104 => 24,  99 => 22,  94 => 20,  84 => 17,  80 => 16,  75 => 14,  64 => 10,  60 => 9,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mailbox.twig", "/web/templates/mailbox.twig");
    }
}
