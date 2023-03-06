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

/* debug.twig */
class __TwigTemplate_f84e4dfd258a361dc0fcbef98b537080 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "debug.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<ul class=\"nav nav-tabs\" role=\"tablist\">
  <li role=\"presentation\" class=\"nav-item\"><button class=\"nav-link active\" data-bs-target=\"#tab-containers\" aria-controls=\"tab-containers\" role=\"tab\" data-bs-toggle=\"tab\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 5), "system_containers", [], "any", false, false, false, 5), "html", null, true);
        echo "</button></li>
  <li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 7), "logs", [], "any", false, false, false, 7), "html", null, true);
        echo "</a>
    <ul class=\"dropdown-menu\">
      <li role=\"presentation\"><span class=\"dropdown-header fs-6\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 9), "in_memory_logs", [], "any", false, false, false, 9), "html", null, true);
        echo "</span></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-postfix-logs\" aria-selected=\"false\" aria-controls=\"tab-postfix-logs\" role=\"tab\" data-bs-toggle=\"tab\">Postfix</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-dovecot-logs\" aria-selected=\"false\" aria-controls=\"tab-dovecot-logs\" role=\"tab\" data-bs-toggle=\"tab\">Dovecot</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-sogo-logs\" aria-selected=\"false\" aria-controls=\"tab-sogo-logs\" role=\"tab\" data-bs-toggle=\"tab\">SOGo</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-netfilter-logs\" aria-selected=\"false\" aria-controls=\"tab-netfilter-logs\" role=\"tab\" data-bs-toggle=\"tab\">Netfilter</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-autodiscover-logs\" aria-selected=\"false\" aria-controls=\"tab-autodiscover-logs\" role=\"tab\" data-bs-toggle=\"tab\">Autodiscover</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-watchdog-logs\" aria-selected=\"false\" aria-controls=\"tab-watchdog-logs\" role=\"tab\" data-bs-toggle=\"tab\">Watchdog</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-acme-logs\" aria-selected=\"false\" aria-controls=\"tab-acme-logs\" role=\"tab\" data-bs-toggle=\"tab\">ACME</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-api-logs\" aria-selected=\"false\" aria-controls=\"tab-api-logs\" role=\"tab\" data-bs-toggle=\"tab\">API</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-api-rl\" aria-selected=\"false\" aria-controls=\"tab-api-rl\" role=\"tab\" data-bs-toggle=\"tab\">Ratelimits</button></li>
      <li role=\"presentation\"><span class=\"dropdown-header fs-6\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 19), "external_logs", [], "any", false, false, false, 19), "html", null, true);
        echo "</span></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-rspamd-history\" aria-selected=\"false\" aria-controls=\"tab-rspamd-history\" role=\"tab\" data-bs-toggle=\"tab\">Rspamd</button></li>
      <li role=\"presentation\"><span class=\"dropdown-header fs-6\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 21), "static_logs", [], "any", false, false, false, 21), "html", null, true);
        echo "</span></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-ui\" aria-selected=\"false\" aria-controls=\"tab-ui\" role=\"tab\" data-bs-toggle=\"tab\">Mailcow UI</button></li>
      <li role=\"presentation\"><button class=\"dropdown-item\" data-bs-target=\"#tab-sasl\" aria-selected=\"false\" aria-controls=\"tab-sasl\" role=\"tab\" data-bs-toggle=\"tab\">SASL</button></li>
    </ul>
  </li>
</ul>

<div class=\"row\">
  <div class=\"col-md-12\">
    <div class=\"tab-content\" style=\"padding-top:20px\">
      <div role=\"tabpanel\" class=\"tab-pane active\" id=\"tab-containers\">

        <div class=\"card mb-4\">
          <div class=\"card-header fs-5\">
            <span>";
        // line 35
        echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "title_name", [], "any", false, false, false, 35);
        echo "</span>
          </div>
          <div class=\"card-body\">
            <div class=\"row\">
              <div class=\"col-sm-12 col-md-4 d-flex flex-column\">
                <img class=\"img-responsive my-auto m-auto\" alt=\"mailcow-logo\" style=\"max-width: 85%; max-height: 85%;\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, ((array_key_exists("logo", $context)) ? (_twig_default_filter(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        echo "\">
              </div>
              <div class=\"col-sm-12 col-md-8\">
                <div class=\"table-responsive\" style=\"margin-top: 10px;\">
                  <table class=\"table table-striped table-condensed w-100\">
                    <tbody>
                      <tr>
                        <td>Hostname</td>
                        <td class=\"text-break\"><div>
                          <p><b>";
        // line 49
        echo twig_escape_filter($this->env, ($context["hostname"] ?? null), "html", null, true);
        echo "</b></p>
                        </div></td>
                      </tr>
                      <tr>
                        <td>IPs</td>
                        <td class=\"text-break\">
                          ";
        // line 55
        if ((($context["ip_check"] ?? null) == 1)) {
            // line 56
            echo "                            <span class=\"d-none\" id=\"host_ipv4\">-</span>
                            <span class=\"d-none mb-2\" id=\"host_ipv6\">-</span>
                            <button class=\"d-block btn btn-primary btn-sm\" id=\"host_show_ip\">
                              <span class=\"text\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 59), "show_ip", [], "any", false, false, false, 59), "html", null, true);
            echo "</span>
                              <div class=\"spinner-border spinner-border-sm d-none\" role=\"status\">
                                <span class=\"visually-hidden\">Loading...</span>
                              </div>
                            </button>
                          ";
        } else {
            // line 65
            echo "                            <span class=\"d-block\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 65), "ip_check_disabled", [], "any", false, false, false, 65);
            echo "</span>
                          ";
        }
        // line 67
        echo "                        </td>
                      </tr>
                      <tr>
                        <td>Version</td>
                        <td class=\"text-break\">
                          <div class=\"fw-bolder\">
                            <p ><a href=\"#\" id=\"maiclow_version\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mailcow_info"] ?? null), "version_tag", [], "any", false, false, false, 73), "html", null, true);
        echo "</a></p>
                            <p id=\"mailcow_update\"></p>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 79), "current_time", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
                        <td id=\"host_date\" class=\"text-break\">-</td>
                      </tr>
                      <tr>
                        <td>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 83), "timezone", [], "any", false, false, false, 83), "html", null, true);
        echo "</td>
                        <td class=\"text-break\">";
        // line 84
        echo twig_escape_filter($this->env, ($context["timezone"] ?? null), "html", null, true);
        echo "</td>
                      </tr>
                      <tr>
                        <td>";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 87), "uptime", [], "any", false, false, false, 87), "html", null, true);
        echo "</td>
                        <td id=\"host_uptime\" class=\"text-break\">-</td>
                      </tr>
                      <tr>
                        <td>";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 91), "disk_usage", [], "any", false, false, false, 91), "html", null, true);
        echo "</td>
                        <td class=\"text-break\">
                          <div>
                            <span class=\"d-block\"><i class=\"bi bi-hdd-fill\"></i> ";
        // line 94
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
        echo "</span>
                            <span class=\"d-block\">";
        // line 95
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[2] ?? null) : null), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[4] ?? null) : null), "html", null, true);
        echo ")</span>
                          </div>
                          <div class=\"mt-2 mb-4\">
                            <div class=\"progress\">
                              <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width:";
        // line 99
        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["vmail_df"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[4] ?? null) : null), "html", null, true);
        echo "\"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class=\"col-sm-6 mt-4\">
                <h3>CPU</h3>
                <h5><span id=\"host_cpu_cores\">-</span> ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 111), "cores", [], "any", false, false, false, 111), "html", null, true);
        echo " @ <span id=\"host_cpu_usage\"></span></h5>
                <canvas id=\"host_cpu_chart\" width=\"400\" height=\"200\"></canvas>
              </div>
              <div class=\"col-sm-6 mt-4\">
                <h3>";
        // line 115
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 115), "memory", [], "any", false, false, false, 115)), "html", null, true);
        echo "</h3>
                <h5><span id=\"host_memory_total\">-</span> @ <span id=\"host_memory_usage\"></span></h5>
                <canvas id=\"host_mem_chart\" width=\"400\" height=\"200\"></canvas>
              </div>

              <div class=\"col-sm-12\">
                <legend class=\"mt-4\">
                  ";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 122), "guid_and_license", [], "any", false, false, false, 122), "html", null, true);
        echo "
                </legend>
                <hr />
                <div id=\"license\">
                  <form class=\"form-horizontal\" autocapitalize=\"none\" autocorrect=\"off\" role=\"form\" method=\"post\">
                    <div class=\"row\">
                      <label class=\"control-label col-sm-3\" for=\"guid\">";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 128), "guid", [], "any", false, false, false, 128), "html", null, true);
        echo ":</label>
                      <div class=\"col-sm-9\">
                        <div class=\"input-group\">
                          <span class=\"input-group-text\">
                            <i class=\"bi bi-suit-heart";
        // line 132
        if ((twig_get_attribute($this->env, $this->source, ($context["gal"] ?? null), "valid", [], "any", false, false, false, 132) == true)) {
            echo "-fill text-danger";
        }
        echo "\"></i>
                          </span>
                          <input type=\"text\" id=\"guid\" class=\"form-control\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, ($context["license_guid"] ?? null), "html", null, true);
        echo "\" readonly>
                        </div>
                        <p class=\"text-muted\">
                          ";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 137), "customer_id", [], "any", false, false, false, 137), "html", null, true);
        echo ": ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["gal"] ?? null), "c", [], "any", true, true, false, 137)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["gal"] ?? null), "c", [], "any", false, false, false, 137), "?")) : ("?"));
        echo " -
                          ";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 138), "service_id", [], "any", false, false, false, 138), "html", null, true);
        echo ": ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["gal"] ?? null), "s", [], "any", true, true, false, 138)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["gal"] ?? null), "s", [], "any", false, false, false, 138), "?")) : ("?"));
        echo " -
                          ";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 139), "sal_level", [], "any", false, false, false, 139), "html", null, true);
        echo ": ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["gal"] ?? null), "m", [], "any", true, true, false, 139)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["gal"] ?? null), "m", [], "any", false, false, false, 139), "?")) : ("?"));
        echo "
                        </p>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"offset-sm-3 col-sm-9\">
                        <p class=\"text-muted\">";
        // line 145
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 145), "license_info", [], "any", false, false, false, 145);
        echo "</p>
                        <div class=\"btn-group\">
                          <button class=\"btn btn-sm d-block d-sm-inline btn-success\" name=\"license_validate_now\" type=\"submit\" href=\"#\">";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 147), "validate_license_now", [], "any", false, false, false, 147), "html", null, true);
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



        <!-- container info -->
        <div class=\"card mb-4\">
          <div class=\"card-header fs-5\">
            <span>";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 163), "containers_info", [], "any", false, false, false, 163), "html", null, true);
        echo "</span>
          </div>
          <div class=\"card-body p-0\">
            <div class=\"row mx-0\">
              <!-- solr info -->
              <div class=\"col-md-6 col-sm-12 p-2\">
                <div class=\"list-group-item p-0\">
                  <div class=\"d-flex p-2 list-group-header\">
                    <div>
                      <span class=\"fw-bold\">solr-mailcow</span>
                      ";
        // line 173
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["containers"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["solr-mailcow"] ?? null) : null), "State", [], "any", false, false, false, 173), "Running", [], "any", false, false, false, 173) == 1)) {
            // line 174
            echo "                      <span class=\"d-block d-md-inline\">(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["containers"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["solr-mailcow"] ?? null) : null), "Config", [], "any", false, false, false, 174), "Image", [], "any", false, false, false, 174), "html", null, true);
            echo ")</span>
                      ";
        }
        // line 176
        echo "                      ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["containers"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["solr-mailcow"] ?? null) : null), "State", [], "any", false, false, false, 176), "Running", [], "any", false, false, false, 176) == 1)) {
            // line 177
            echo "                      <small class=\"d-block\">(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 177), "started_on", [], "any", false, false, false, 177), "html", null, true);
            echo " <span class=\"parse_date\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["containers"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["solr-mailcow"] ?? null) : null), "State", [], "any", false, false, false, 177), "StartedAtHR", [], "any", false, false, false, 177), "html", null, true);
            echo "</span>)</small>
                      ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 =         // line 178
($context["containers"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["solr-mailcow"] ?? null) : null), "State", [], "any", false, false, false, 178), "Running", [], "any", false, false, false, 178) != 1)) {
            // line 179
            echo "                      <small class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 179), "container_disabled", [], "any", false, false, false, 179), "html", null, true);
            echo "</small>
                      ";
        }
        // line 181
        echo "                      ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["containers"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["solr-mailcow"] ?? null) : null), "State", [], "any", false, false, false, 181), "Running", [], "any", false, false, false, 181) == 1)) {
            // line 182
            echo "                        <span class=\"badge fs-7 bg-success loader\" style=\"min-width:100px\">
                          ";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 183), "container_running", [], "any", false, false, false, 183), "html", null, true);
            echo "
                          <span class=\"loader-dot\">.</span>
                          <span class=\"loader-dot\">.</span>
                          <span class=\"loader-dot\">.</span>
                        </span>
                      ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 =         // line 188
($context["containers"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["solr-mailcow"] ?? null) : null), "State", [], "any", false, false, false, 188), "Running", [], "any", false, false, false, 188) != 1)) {
            // line 189
            echo "                        <span class=\"badge fs-7 bg-danger\" style=\"min-width:100px\">
                          ";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 190), "container_stopped", [], "any", false, false, false, 190), "html", null, true);
            echo "
                          <i class=\"bi-x ms-1\"></i>
                        </span>
                      ";
        }
        // line 194
        echo "                    </div>
                  ";
        // line 195
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["containers"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["solr-mailcow"] ?? null) : null), "State", [], "any", false, false, false, 195), "Running", [], "any", false, false, false, 195) == 1)) {
            // line 196
            echo "                    <div class=\"mt-auto ms-auto\">
                      <button class=\"btn btn-light\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#solr-mailcowCollapse\" aria-expanded=\"false\" aria-controls=\"solr-mailcowCollapse\">
                        <i class=\"bi bi-caret-down-fill caret\"></i>
                      </button>
                    </div>
                  ";
        }
        // line 202
        echo "                  </div>
                  ";
        // line 203
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["containers"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["solr-mailcow"] ?? null) : null), "State", [], "any", false, false, false, 203), "Running", [], "any", false, false, false, 203) == 1)) {
            // line 204
            echo "                  <div class=\"collapse p-0 list-group-details container-details-collapse\" id=\"solr-mailcowCollapse\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = ($context["containers"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["solr-mailcow"] ?? null) : null), "Id", [], "any", false, false, false, 204), "html", null, true);
            echo "\">
                    <div class=\"row p-2 pt-4\">
                      <div class=\"col-sm-3\">
                        <p><img class=\"img-responsive\" alt=\"Solr Logo\" width=\"128px\" src=\"data:image/png;base64,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\" /></p>
                      </div>
                      <div class=\"col-sm-9\">
                        ";
            // line 210
            if ((($context["solr_status"] ?? null) != false)) {
                // line 211
                echo "                        <div class=\"progress\">
                          <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width:";
                // line 212
                echo twig_escape_filter($this->env, twig_round((($__internal_compile_15 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["solr_status"] ?? null), "jvm", [], "any", false, false, false, 212), "memory", [], "any", false, false, false, 212), "raw", [], "any", false, false, false, 212)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["used%"] ?? null) : null)), "html", null, true);
                echo "%\"></div>
                        </div>
                        <p>";
                // line 214
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 214), "jvm_memory_solr", [], "any", false, false, false, 214), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["solr_status"] ?? null), "jvm", [], "any", false, false, false, 214), "memory", [], "any", false, false, false, 214), "total", [], "any", false, false, false, 214) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["solr_status"] ?? null), "jvm", [], "any", false, false, false, 214), "memory", [], "any", false, false, false, 214), "free", [], "any", false, false, false, 214)), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["solr_status"] ?? null), "jvm", [], "any", false, false, false, 214), "memory", [], "any", false, false, false, 214), "total", [], "any", false, false, false, 214), "html", null, true);
                echo "
                          (";
                // line 215
                echo twig_escape_filter($this->env, twig_round((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["solr_status"] ?? null), "jvm", [], "any", false, false, false, 215), "memory", [], "any", false, false, false, 215), "raw", [], "any", false, false, false, 215)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["used%"] ?? null) : null)), "html", null, true);
                echo "%)</p>
                        <hr>
                        <span class=\"d-block\">";
                // line 217
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 217), "uptime", [], "any", false, false, false, 217), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, ($context["solr_uptime"] ?? null), "html", null, true);
                echo "h</span>
                        <span class=\"d-block\">";
                // line 218
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 218), "started_at", [], "any", false, false, false, 218), "html", null, true);
                echo ": <span class=\"parse_date\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["solr_status"] ?? null), "status", [], "any", false, false, false, 218)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["dovecot-fts"] ?? null) : null), "startTime", [], "any", false, false, false, 218), "html", null, true);
                echo "</span></span>
                        <span class=\"d-block\">";
                // line 219
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 219), "last_modified", [], "any", false, false, false, 219), "html", null, true);
                echo ": <span class=\"parse_date\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["solr_status"] ?? null), "status", [], "any", false, false, false, 219)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["dovecot-fts"] ?? null) : null), "index", [], "any", false, false, false, 219), "lastModified", [], "any", false, false, false, 219), "html", null, true);
                echo "</span></span>
                        <span class=\"d-block\">";
                // line 220
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 220), "size", [], "any", false, false, false, 220), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["solr_status"] ?? null), "status", [], "any", false, false, false, 220)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["dovecot-fts"] ?? null) : null), "index", [], "any", false, false, false, 220), "size", [], "any", false, false, false, 220), "html", null, true);
                echo "</span>
                        <span class=\"d-block\"><i class=\"bi bi-file-text\"></i> ";
                // line 221
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 221), "docs", [], "any", false, false, false, 221), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["solr_status"] ?? null), "status", [], "any", false, false, false, 221)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["dovecot-fts"] ?? null) : null), "index", [], "any", false, false, false, 221), "numDocs", [], "any", false, false, false, 221), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 223
                echo "                        <span class=\"d-block\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 223), "solr_dead", [], "any", false, false, false, 223), "html", null, true);
                echo "</span>
                        ";
            }
            // line 225
            echo "                      </div>
                      <div class=\"mt-4 col-sm-12 col-md-6 d-flex flex-column\">
                        <h6>Disk I/O</h6>
                        <div class=\"spinner-border my-4 mx-auto\" role=\"status\">
                          <span class=\"visually-hidden\">Loading...</span>
                        </div>
                        <canvas class=\"d-none\" id=\"solr-mailcow_DiskIOChart\" width=\"400\" height=\"200\"></canvas>
                      </div>
                      <div class=\"mt-4 col-sm-12 col-md-6 d-flex flex-column\">
                        <h6>Net I/O</h6>
                        <div class=\"spinner-border my-4 mx-auto\" role=\"status\">
                          <span class=\"visually-hidden\">Loading...</span>
                        </div>
                        <canvas class=\"d-none\" id=\"solr-mailcow_NetIOChart\" width=\"400\" height=\"200\"></canvas>
                      </div>
                      <div class=\"col-sm-12 d-flex\" style=\"height: 40px\">
                        <a href data-bs-toggle=\"modal\"
                          data-container=\"solr-mailcow\"
                          data-bs-target=\"#RestartContainer\"
                          class=\"btn btn-sm btn-secondary d-flex align-items-center justify-content-center mb-2 ms-auto\"
                          style=\"height: 30px;\">";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 245), "restart_container", [], "any", false, false, false, 245), "html", null, true);
            echo "
                            <i class=\"ms-1 bi
                            ";
            // line 247
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = ($context["containers"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["solr-mailcow"] ?? null) : null), "State", [], "any", false, false, false, 247), "Running", [], "any", false, false, false, 247) == 1)) {
                // line 248
                echo "                            bi-record-fill text-success
                            ";
            } elseif (twig_get_attribute($this->env, $this->source, (($__internal_compile_22 =             // line 249
($context["containers"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["solr-mailcow"] ?? null) : null), "State", [], "any", false, false, false, 249)) {
                // line 250
                echo "                            bi-record-fill text-danger
                            ";
            } else {
                // line 252
                echo "                            default
                            ";
            }
            // line 254
            echo "                            \"
                          ></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  ";
        }
        // line 261
        echo "                </div>
              </div>

              <!-- rest of the containers -->
              ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["containers"] ?? null));
        foreach ($context['_seq'] as $context["container"] => $context["container_info"]) {
            // line 266
            echo "                ";
            if (($context["container"] != "solr-mailcow")) {
                // line 267
                echo "                  <div class=\"col-md-6 col-sm-12 p-2\">
                    <div class=\"list-group-item p-0\">
                      <div class=\"d-flex p-2 list-group-header\">
                        <div>
                          <span class=\"fw-bold\">";
                // line 271
                echo twig_escape_filter($this->env, $context["container"], "html", null, true);
                echo "</span>
                          <span class=\"d-block d-md-inline\">(";
                // line 272
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["container_info"], "Config", [], "any", false, false, false, 272), "Image", [], "any", false, false, false, 272), "html", null, true);
                echo ")</span>
                          <small class=\"d-block\">(";
                // line 273
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 273), "started_on", [], "any", false, false, false, 273), "html", null, true);
                echo " <span class=\"parse_date\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["container_info"], "State", [], "any", false, false, false, 273), "StartedAtHR", [], "any", false, false, false, 273), "html", null, true);
                echo "</span>)</small>
                          ";
                // line 274
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["container_info"], "State", [], "any", false, false, false, 274), "Running", [], "any", false, false, false, 274) == 1)) {
                    // line 275
                    echo "                            <span class=\"badge fs-7 bg-success loader\" style=\"min-width:100px\">
                              ";
                    // line 276
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 276), "container_running", [], "any", false, false, false, 276), "html", null, true);
                    echo "
                              <span class=\"loader-dot\">.</span>
                              <span class=\"loader-dot\">.</span>
                              <span class=\"loader-dot\">.</span>
                            </span>
                          ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 281
$context["container_info"], "State", [], "any", false, false, false, 281)) {
                    // line 282
                    echo "                            <span class=\"badge fs-7 bg-danger\" style=\"min-width:100px\">
                              ";
                    // line 283
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 283), "container_stopped", [], "any", false, false, false, 283), "html", null, true);
                    echo "
                              <i class=\"bi-x ms-1\"></i>
                            </span>
                          ";
                }
                // line 287
                echo "                        </div>
                        <div class=\"mt-auto ms-auto\">
                          <button class=\"btn btn-light\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
                // line 289
                echo twig_escape_filter($this->env, $context["container"], "html", null, true);
                echo "Collapse\" aria-expanded=\"false\" aria-controls=\"";
                echo twig_escape_filter($this->env, $context["container"], "html", null, true);
                echo "Collapse\">
                            <i class=\"bi bi-caret-down-fill caret\"></i>
                          </button>
                        </div>
                      </div>
                      <div class=\"collapse p-0 list-group-details container-details-collapse\" id=\"";
                // line 294
                echo twig_escape_filter($this->env, $context["container"], "html", null, true);
                echo "Collapse\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["container_info"], "Id", [], "any", false, false, false, 294), "html", null, true);
                echo "\">
                        <div class=\"row p-2 pt-4\">
                          <div class=\"mt-4 col-sm-12 col-md-6 d-flex flex-column\">
                            <h6>Disk I/O</h6>
                            <div class=\"spinner-border my-4 mx-auto\" role=\"status\">
                              <span class=\"visually-hidden\">Loading...</span>
                            </div>
                            <canvas class=\"d-none\" id=\"";
                // line 301
                echo twig_escape_filter($this->env, $context["container"], "html", null, true);
                echo "_DiskIOChart\" width=\"400\" height=\"200\"></canvas>
                          </div>
                          <div class=\"mt-4 col-sm-12 col-md-6 d-flex flex-column\">
                            <h6>Net I/O</h6>
                            <div class=\"spinner-border my-4 mx-auto\" role=\"status\">
                              <span class=\"visually-hidden\">Loading...</span>
                            </div>
                            <canvas class=\"d-none\" id=\"";
                // line 308
                echo twig_escape_filter($this->env, $context["container"], "html", null, true);
                echo "_NetIOChart\" width=\"400\" height=\"200\"></canvas>
                          </div>
                          <div class=\"col-12 d-flex\" style=\"height: 40px\">
                            <a href data-bs-toggle=\"modal\"
                              data-container=\"";
                // line 312
                echo twig_escape_filter($this->env, $context["container"], "html", null, true);
                echo "\"
                              data-bs-target=\"#RestartContainer\"
                              class=\"btn btn-sm btn-secondary d-flex align-items-center justify-content-center mb-2 ms-auto\"
                              style=\"height: 30px;\">";
                // line 315
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 315), "restart_container", [], "any", false, false, false, 315), "html", null, true);
                echo "
                                <i class=\"ms-1 bi
                                ";
                // line 317
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["container_info"], "State", [], "any", false, false, false, 317), "Running", [], "any", false, false, false, 317) == 1)) {
                    // line 318
                    echo "                                bi-record-fill text-success
                                ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 319
$context["container_info"], "State", [], "any", false, false, false, 319)) {
                    // line 320
                    echo "                                bi-record-fill text-danger
                                ";
                } else {
                    // line 322
                    echo "                                default
                                ";
                }
                // line 324
                echo "                                \"
                              ></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                ";
            }
            // line 333
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['container'], $context['container_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 334
        echo "            </div>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-postfix-logs\">
        <div class=\"debug-log-info\">";
        // line 340
        echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 340), "log_info", [], "any", false, false, false, 340), (($context["log_lines"] ?? null) + 1));
        echo "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Postfix</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_postfix_logs\" data-table=\"postfix_log\">";
        // line 345
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 345), "refresh", [], "any", false, false, false, 345), "html", null, true);
        echo "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 349
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 349), "quick_actions", [], "any", false, false, false, 349), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"postfix_log\" data-log-url=\"postfix\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"postfix_log\" data-log-url=\"postfix\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"postfix_log\" data-table=\"postfix_log\" href=\"#\">";
        // line 354
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 354), "expand_all", [], "any", false, false, false, 354), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"postfix_log\" data-table=\"postfix_log\" href=\"#\">";
        // line 355
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 355), "collapse_all", [], "any", false, false, false, 355), "html", null, true);
        echo "</a></li>
            </ul>
            <table id=\"postfix_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-ui\">
        <div class=\"debug-log-info\">";
        // line 363
        echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 363), "log_info", [], "any", false, false, false, 363), (($context["log_lines"] ?? null) + 1));
        echo "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Mailcow UI</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_ui_logs\" data-table=\"ui_logs\">";
        // line 368
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 368), "refresh", [], "any", false, false, false, 368), "html", null, true);
        echo "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 372
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 372), "quick_actions", [], "any", false, false, false, 372), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"mailcow_ui\" data-table=\"ui_logs\" data-log-url=\"ui\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"mailcow_ui\" data-table=\"ui_logs\" data-log-url=\"ui\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"ui_logs\" data-table=\"ui_logs\" href=\"#\">";
        // line 377
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 377), "expand_all", [], "any", false, false, false, 377), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"ui_logs\" data-table=\"ui_logs\" href=\"#\">";
        // line 378
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 378), "collapse_all", [], "any", false, false, false, 378), "html", null, true);
        echo "</a></li>
            </ul>
            <table id=\"ui_logs\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-sasl\">
        <div class=\"debug-log-info\">";
        // line 386
        echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 386), "log_info", [], "any", false, false, false, 386), (($context["log_lines"] ?? null) + 1));
        echo "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">SASL</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_sasl_logs\" data-table=\"sasl_logs\">";
        // line 391
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 391), "refresh", [], "any", false, false, false, 391), "html", null, true);
        echo "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 395
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 395), "quick_actions", [], "any", false, false, false, 395), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"sasl_log_table\" data-table=\"sasl_logs\" data-log-url=\"ui\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"sasl_log_table\" data-table=\"sasl_logs\" data-log-url=\"ui\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"sasl_logs\" data-table=\"sasl_logs\" href=\"#\">";
        // line 400
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 400), "expand_all", [], "any", false, false, false, 400), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"sasl_logs\" data-table=\"sasl_logs\" href=\"#\">";
        // line 401
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 401), "collapse_all", [], "any", false, false, false, 401), "html", null, true);
        echo "</a></li>
            </ul>
            <table id=\"sasl_logs\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-dovecot-logs\">
        <div class=\"debug-log-info\">";
        // line 409
        echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 409), "log_info", [], "any", false, false, false, 409), (($context["log_lines"] ?? null) + 1));
        echo "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Dovecot</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_dovecot_logs\" data-table=\"dovecot_log\">";
        // line 414
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 414), "refresh", [], "any", false, false, false, 414), "html", null, true);
        echo "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 418
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 418), "quick_actions", [], "any", false, false, false, 418), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"dovecot_log\" data-log-url=\"dovecot\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"dovecot_log\" data-log-url=\"dovecot\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"dovecot_log\" data-table=\"dovecot_log\" href=\"#\">";
        // line 423
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 423), "expand_all", [], "any", false, false, false, 423), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"dovecot_log\" data-table=\"dovecot_log\" href=\"#\">";
        // line 424
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 424), "collapse_all", [], "any", false, false, false, 424), "html", null, true);
        echo "</a></li>
            </ul>
            <table id=\"dovecot_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-sogo-logs\">
        <div class=\"debug-log-info\">";
        // line 432
        echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 432), "log_info", [], "any", false, false, false, 432), (($context["log_lines"] ?? null) + 1));
        echo "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">SOGo</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_sogo_logs\" data-table=\"sogo_log\">";
        // line 437
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 437), "refresh", [], "any", false, false, false, 437), "html", null, true);
        echo "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 441
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 441), "quick_actions", [], "any", false, false, false, 441), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"sogo_log\" data-log-url=\"sogo\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"sogo_log\" data-log-url=\"sogo\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"sogo_log\" data-table=\"sogo_log\" href=\"#\">";
        // line 446
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 446), "expand_all", [], "any", false, false, false, 446), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"sogo_log\" data-table=\"sogo_log\" href=\"#\">";
        // line 447
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 447), "collapse_all", [], "any", false, false, false, 447), "html", null, true);
        echo "</a></li>
            </ul>
            <table id=\"sogo_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-netfilter-logs\">
        <div class=\"debug-log-info\">";
        // line 455
        echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 455), "log_info", [], "any", false, false, false, 455), (($context["log_lines"] ?? null) + 1));
        echo "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Netfilter</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_netfilter_logs\" data-table=\"netfilter_log\">";
        // line 460
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 460), "refresh", [], "any", false, false, false, 460), "html", null, true);
        echo "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 464
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 464), "quick_actions", [], "any", false, false, false, 464), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"netfilter_log\" data-log-url=\"netfilter\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"netfilter_log\" data-log-url=\"netfilter\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"netfilter_log\" data-table=\"netfilter_log\" href=\"#\">";
        // line 469
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 469), "expand_all", [], "any", false, false, false, 469), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"netfilter_log\" data-table=\"netfilter_log\" href=\"#\">";
        // line 470
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 470), "collapse_all", [], "any", false, false, false, 470), "html", null, true);
        echo "</a></li>
            </ul>
            <table id=\"netfilter_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-rspamd-history\">
        <div class=\"debug-log-info\">";
        // line 478
        echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 478), "log_info", [], "any", false, false, false, 478), (($context["log_lines"] ?? null) + 1));
        echo "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Rspamd history</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_rspamd_history\" data-table=\"rspamd_history\">";
        // line 483
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 483), "refresh", [], "any", false, false, false, 483), "html", null, true);
        echo "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <legend>";
        // line 487
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 487), "chart_this_server", [], "any", false, false, false, 487), "html", null, true);
        echo "</legend><hr />
            <div id=\"chart-container\">
              <canvas id=\"rspamd_donut\" style=\"width:100%;height:400px\"></canvas>
            </div>
            <legend>";
        // line 491
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 491), "history_all_servers", [], "any", false, false, false, 491), "html", null, true);
        echo "</legend><hr />
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 492
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 492), "quick_actions", [], "any", false, false, false, 492), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"rspamd_history\" data-table=\"rspamd_history\" data-log-url=\"rspamd_history\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"rspamd_history\" data-table=\"rspamd_history\" data-log-url=\"rspamd_history\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"rspamd_history\" data-table=\"rspamd_history\" href=\"#\">";
        // line 497
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 497), "expand_all", [], "any", false, false, false, 497), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"rspamd_history\" data-table=\"rspamd_history\" href=\"#\">";
        // line 498
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 498), "collapse_all", [], "any", false, false, false, 498), "html", null, true);
        echo "</a></li>
            </ul>
            <table id=\"rspamd_history\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-autodiscover-logs\">
        <div class=\"debug-log-info\">";
        // line 506
        echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 506), "log_info", [], "any", false, false, false, 506), (($context["log_lines"] ?? null) + 1));
        echo "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Autodiscover</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_autodiscover_logs\" data-table=\"autodiscover_log\">";
        // line 511
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 511), "refresh", [], "any", false, false, false, 511), "html", null, true);
        echo "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 515
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 515), "quick_actions", [], "any", false, false, false, 515), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"autodiscover_log\" data-table=\"autodiscover_log\" data-log-url=\"autodiscover\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"autodiscover_log\" data-table=\"autodiscover_log\" data-log-url=\"autodiscover\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"autodiscover_log\" data-table=\"autodiscover_log\" href=\"#\">";
        // line 520
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 520), "expand_all", [], "any", false, false, false, 520), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"autodiscover_log\" data-table=\"autodiscover_log\" href=\"#\">";
        // line 521
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 521), "collapse_all", [], "any", false, false, false, 521), "html", null, true);
        echo "</a></li>
            </ul>
            <table id=\"autodiscover_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-watchdog-logs\">
        <div class=\"debug-log-info\">";
        // line 529
        echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 529), "log_info", [], "any", false, false, false, 529), (($context["log_lines"] ?? null) + 1));
        echo "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Watchdog</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_watchdog_logs\" data-table=\"watchdog_log\">";
        // line 534
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 534), "refresh", [], "any", false, false, false, 534), "html", null, true);
        echo "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 538
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 538), "quick_actions", [], "any", false, false, false, 538), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"watchdog\" data-table=\"watchdog_log\" data-log-url=\"watchdog\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"watchdog\" data-table=\"watchdog_log\" data-log-url=\"watchdog\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"watchdog_log\" data-table=\"watchdog_log\" href=\"#\">";
        // line 543
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 543), "expand_all", [], "any", false, false, false, 543), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"watchdog_log\" data-table=\"watchdog_log\" href=\"#\">";
        // line 544
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 544), "collapse_all", [], "any", false, false, false, 544), "html", null, true);
        echo "</a></li>
            </ul>
            <table id=\"watchdog_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-acme-logs\">
        <div class=\"debug-log-info\">";
        // line 552
        echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 552), "log_info", [], "any", false, false, false, 552), (($context["log_lines"] ?? null) + 1));
        echo "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">ACME</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_acme_logs\" data-table=\"acme_log\">";
        // line 557
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 557), "refresh", [], "any", false, false, false, 557), "html", null, true);
        echo "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 561
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 561), "quick_actions", [], "any", false, false, false, 561), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"acme_log\" data-log-url=\"acme\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"general_syslog\" data-table=\"acme_log\" data-log-url=\"acme\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"acme_log\" data-table=\"acme_log\" href=\"#\">";
        // line 566
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 566), "expand_all", [], "any", false, false, false, 566), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"acme_log\" data-table=\"acme_log\" href=\"#\">";
        // line 567
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 567), "collapse_all", [], "any", false, false, false, 567), "html", null, true);
        echo "</a></li>
            </ul>
            <table id=\"acme_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-api-logs\">
        <div class=\"debug-log-info\">";
        // line 575
        echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 575), "log_info", [], "any", false, false, false, 575), (($context["log_lines"] ?? null) + 1));
        echo "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">API</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_api_logs\" data-table=\"api_log\">";
        // line 580
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 580), "refresh", [], "any", false, false, false, 580), "html", null, true);
        echo "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 584
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 584), "quick_actions", [], "any", false, false, false, 584), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"apilog\" data-table=\"api_log\" data-log-url=\"api\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"apilog\" data-table=\"api_log\" data-log-url=\"api\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"api_log\" data-table=\"api_log\" href=\"#\">";
        // line 589
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 589), "expand_all", [], "any", false, false, false, 589), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"api_log\" data-table=\"api_log\" href=\"#\">";
        // line 590
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 590), "collapse_all", [], "any", false, false, false, 590), "html", null, true);
        echo "</a></li>
            </ul>
            <table id=\"api_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

      <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-api-rl\">
        <div class=\"debug-log-info\">";
        // line 598
        echo twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "debug", [], "any", false, false, false, 598), "log_info", [], "any", false, false, false, 598), (($context["log_lines"] ?? null) + 1));
        echo "</div>
        <div class=\"card\">
          <div class=\"card-header d-flex align-items-center fs-5\">
            <span class=\"mt-2 ms-2\">Ratelimits</span>
            <div class=\"btn-group ms-auto\">
              <button class=\"btn btn-sm btn-secondary refresh_table\" data-draw=\"draw_rl_logs\" data-table=\"rl_log\">";
        // line 603
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 603), "refresh", [], "any", false, false, false, 603), "html", null, true);
        echo "</button>
            </div>
          </div>
          <div class=\"card-body\">
            <a class=\"btn btn-sm btn-secondary dropdown-toggle mb-4\" data-bs-toggle=\"dropdown\" href=\"#\">";
        // line 607
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 607), "quick_actions", [], "any", false, false, false, 607), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"rllog\" data-table=\"rl_log\" data-log-url=\"ratelimited\" data-nrows=\"100\" href=\"#\">+ 100</a></li>
              <li><a class=\"dropdown-item add_log_lines\" data-post-process=\"rllog\" data-table=\"rl_log\" data-log-url=\"ratelimited\" data-nrows=\"1000\" href=\"#\">+ 1000</a></li>
              <li class=\"table_collapse_option\"><hr class=\"dropdown-divider\"></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-expand=\"rl_log\" data-table=\"rl_log\" href=\"#\">";
        // line 612
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 612), "expand_all", [], "any", false, false, false, 612), "html", null, true);
        echo "</a></li>
              <li class=\"table_collapse_option\"><a class=\"dropdown-item\" data-datatables-collapse=\"rl_log\" data-table=\"rl_log\" href=\"#\">";
        // line 613
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "datatables", [], "any", false, false, false, 613), "collapse_all", [], "any", false, false, false, 613), "html", null, true);
        echo "</a></li>
            </ul>
            <p class=\"text-muted\">";
        // line 615
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 615), "hash_remove_info", [], "any", false, false, false, 615), "html", null, true);
        echo "</p>
            <table id=\"rl_log\" class=\"table table-striped dt-responsive w-100\"></table>
          </div>
        </div>
      </div>

    </div> <!-- /tab-content -->
  </div> <!-- /col-md-12 -->
</div> <!-- /row -->

<script type='text/javascript'>
  var lang = ";
        // line 626
        echo ($context["lang_admin"] ?? null);
        echo ";
  var lang_debug = ";
        // line 627
        echo ($context["lang_debug"] ?? null);
        echo ";
  var lang_datatables = ";
        // line 628
        echo ($context["lang_datatables"] ?? null);
        echo ";
  var csrf_token = '";
        // line 629
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "';
  var log_pagination_size = Math.trunc('";
        // line 630
        echo twig_escape_filter($this->env, ($context["log_pagination_size"] ?? null), "html", null, true);
        echo "');
</script>
";
    }

    public function getTemplateName()
    {
        return "debug.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1166 => 630,  1162 => 629,  1158 => 628,  1154 => 627,  1150 => 626,  1136 => 615,  1131 => 613,  1127 => 612,  1119 => 607,  1112 => 603,  1104 => 598,  1093 => 590,  1089 => 589,  1081 => 584,  1074 => 580,  1066 => 575,  1055 => 567,  1051 => 566,  1043 => 561,  1036 => 557,  1028 => 552,  1017 => 544,  1013 => 543,  1005 => 538,  998 => 534,  990 => 529,  979 => 521,  975 => 520,  967 => 515,  960 => 511,  952 => 506,  941 => 498,  937 => 497,  929 => 492,  925 => 491,  918 => 487,  911 => 483,  903 => 478,  892 => 470,  888 => 469,  880 => 464,  873 => 460,  865 => 455,  854 => 447,  850 => 446,  842 => 441,  835 => 437,  827 => 432,  816 => 424,  812 => 423,  804 => 418,  797 => 414,  789 => 409,  778 => 401,  774 => 400,  766 => 395,  759 => 391,  751 => 386,  740 => 378,  736 => 377,  728 => 372,  721 => 368,  713 => 363,  702 => 355,  698 => 354,  690 => 349,  683 => 345,  675 => 340,  667 => 334,  661 => 333,  650 => 324,  646 => 322,  642 => 320,  640 => 319,  637 => 318,  635 => 317,  630 => 315,  624 => 312,  617 => 308,  607 => 301,  595 => 294,  585 => 289,  581 => 287,  574 => 283,  571 => 282,  569 => 281,  561 => 276,  558 => 275,  556 => 274,  550 => 273,  546 => 272,  542 => 271,  536 => 267,  533 => 266,  529 => 265,  523 => 261,  514 => 254,  510 => 252,  506 => 250,  504 => 249,  501 => 248,  499 => 247,  494 => 245,  472 => 225,  466 => 223,  459 => 221,  453 => 220,  447 => 219,  441 => 218,  435 => 217,  430 => 215,  422 => 214,  417 => 212,  414 => 211,  412 => 210,  402 => 204,  400 => 203,  397 => 202,  389 => 196,  387 => 195,  384 => 194,  377 => 190,  374 => 189,  372 => 188,  364 => 183,  361 => 182,  358 => 181,  352 => 179,  350 => 178,  343 => 177,  340 => 176,  334 => 174,  332 => 173,  319 => 163,  300 => 147,  295 => 145,  284 => 139,  278 => 138,  272 => 137,  266 => 134,  259 => 132,  252 => 128,  243 => 122,  233 => 115,  226 => 111,  211 => 99,  200 => 95,  196 => 94,  190 => 91,  183 => 87,  177 => 84,  173 => 83,  166 => 79,  157 => 73,  149 => 67,  143 => 65,  134 => 59,  129 => 56,  127 => 55,  118 => 49,  106 => 40,  98 => 35,  81 => 21,  76 => 19,  63 => 9,  58 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "debug.twig", "/web/templates/debug.twig");
    }
}
