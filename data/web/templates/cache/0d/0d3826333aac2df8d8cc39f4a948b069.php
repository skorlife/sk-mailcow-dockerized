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

/* admin/tab-config-dkim.twig */
class __TwigTemplate_f3b75ab0c91959c8684cd88431dc4095 extends Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab-config-dkim\" role=\"tabpanel\" aria-labelledby=\"tab-config-dkim\">
  <div class=\"card mb-4\">
    <div class=\"card-header d-flex fs-5\">
      <button class=\"btn d-md-none flex-grow-1 text-start\" data-bs-target=\"#collapse-tab-config-dkim\" data-bs-toggle=\"collapse\" aria-controls=\"ollapse-tab-config-dkim\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 5), "dkim_keys", [], "any", false, false, false, 5), "html", null, true);
        echo "
      </button>
      <span class=\"d-none d-md-block\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 7), "dkim_keys", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
    </div>
    <div id=\"collapse-tab-config-dkim\" class=\"card-body collapse\" data-bs-parent=\"#admin-content\">
      <div class=\"btn-group my-4\" role=\"group\">
        <input type=\"checkbox\" id=\"check-dkim_key_valid\" class=\"btn-check\" autocomplete=\"off\" data-bs-toggle=\"collapse\" data-bs-target=\".dkim_key_valid\" checked>
        <label class=\"btn btn-outline-secondary btn-check-label\" for=\"check-dkim_key_valid\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 12), "dkim_key_valid", [], "any", false, false, false, 12), "html", null, true);
        echo "</label>

        <input type=\"checkbox\" id=\"check-dkim_key_unused\" class=\"btn-check\" autocomplete=\"off\" data-bs-toggle=\"collapse\" data-bs-target=\".dkim_key_unused\" checked>
        <label class=\"btn btn-outline-secondary btn-check-label\" for=\"check-dkim_key_unused\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 15), "dkim_key_unused", [], "any", false, false, false, 15), "html", null, true);
        echo "</label>

        <input type=\"checkbox\" id=\"check-dkim_key_missing\" class=\"btn-check\" autocomplete=\"off\" data-bs-toggle=\"collapse\" data-bs-target=\".dkim_key_missing\" checked>
        <label class=\"btn btn-outline-secondary btn-check-label\" for=\"check-dkim_key_missing\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 18), "dkim_key_missing", [], "any", false, false, false, 18), "html", null, true);
        echo "</label>
      </div>
      ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dkim_domains"] ?? null));
        foreach ($context['_seq'] as $context["domain"] => $context["domain_data"]) {
            // line 21
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["domain_data"], "dkim", [], "any", false, false, false, 21)) {
                // line 22
                echo "          <div class=\"row collapse show dkim_key_valid\">
            <div class=\"col-md-1\"><input type=\"checkbox\" data-id=\"dkim\" name=\"multi_select\" value=\"";
                // line 23
                echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
                echo "\"></div>
            <div class=\"col-md-3\">
              <p>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 25), "domain", [], "any", false, false, false, 25), "html", null, true);
                echo ": <strong>";
                echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
                echo "</strong>
              <p class=\"dkim-label\"><span class=\"badge fs-6 bg-success\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 26), "dkim_key_valid", [], "any", false, false, false, 26), "html", null, true);
                echo "</span></p>
              <p class=\"dkim-label\"><span class=\"badge fs-6 bg-primary\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 27), "dkim_domains_selector", [], "any", false, false, false, 27), "html", null, true);
                echo " '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["domain_data"], "dkim", [], "any", false, false, false, 27), "dkim_selector", [], "any", false, false, false, 27), "html", null, true);
                echo "'</span></p>
              <p class=\"dkim-label\"><span class=\"badge fs-6 bg-info\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["domain_data"], "dkim", [], "any", false, false, false, 28), "length", [], "any", false, false, false, 28), "html", null, true);
                echo " bit</span></p>
              </p>
            </div>
            <div class=\"col-md-8\">
              <textarea class=\"form-control\" rows=\"6\" readonly>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["domain_data"], "dkim", [], "any", false, false, false, 32), "dkim_txt", [], "any", false, false, false, 32), "html", null, true);
                echo "</textarea>
              <small>
                <i class=\"bi bi-arrow-return-right\"></i> 
                <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#showDKIMprivKey\" id=\"dkim_priv\" data-priv-key=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["domain_data"], "dkim", [], "any", false, false, false, 35), "privkey", [], "any", false, false, false, 35), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 35), "dkim_private_key", [], "any", false, false, false, 35), "html", null, true);
                echo "</a>
              </small>
            </div>
            <hr class=\"d-block d-md-none\">
          </div>
        ";
            } else {
                // line 41
                echo "          <div class=\"row collapse in dkim_key_missing\">
            <div class=\"col-md-1\"><input class=\"dkim_missing\" type=\"checkbox\" data-id=\"dkim\" name=\"multi_select\" value=\"";
                // line 42
                echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
                echo "\" disabled></div>
            <div class=\"col-md-3\">
              <p>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 44), "domain", [], "any", false, false, false, 44), "html", null, true);
                echo ": <strong>";
                echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
                echo "</strong><br><span class=\"badge fs-6 bg-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 44), "dkim_key_missing", [], "any", false, false, false, 44), "html", null, true);
                echo "</span></p>
            </div>
            <div class=\"col-md-8\"><pre>-</pre></div>
            <hr class=\"d-block d-md-none\">
          </div>
        ";
            }
            // line 50
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["domain_data"], "alias_domains", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["alias_domain"] => $context["alias_domain_data"]) {
                // line 51
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["alias_domain_data"], "dkim", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "            <div class=\"row collapse in dkim_key_valid\">
              <div class=\"col-md-1\"><input type=\"checkbox\" data-id=\"dkim\" name=\"multi_select\" value=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $context["alias_domain"], "html", null, true);
                    echo "\"></div>
              <div class=\"col-md-2 offset-md-1\">
                <p><small>↳ Alias-Domain: <strong>";
                    // line 55
                    echo twig_escape_filter($this->env, $context["alias_domain"], "html", null, true);
                    echo "</strong></small>
                <p class=\"dkim-label\"><span class=\"badge fs-6 bg-success\">";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 56), "dkim_key_valid", [], "any", false, false, false, 56), "html", null, true);
                    echo "</span></p>
                <p class=\"dkim-label\"><span class=\"badge fs-6 bg-primary\">Selector '";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["alias_domain_data"], "dkim", [], "any", false, false, false, 57), "dkim_selector", [], "any", false, false, false, 57), "html", null, true);
                    echo "'</span></p>
                <p class=\"dkim-label\"><span class=\"badge fs-6 bg-info\">";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["alias_domain_data"], "dkim", [], "any", false, false, false, 58), "length", [], "any", false, false, false, 58), "html", null, true);
                    echo " bit</span></p>
                </p>
              </div>
              <div class=\"col-md-8\">
                <pre>";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["alias_domain_data"], "dkim", [], "any", false, false, false, 62), "dkim_txt", [], "any", false, false, false, 62), "html", null, true);
                    echo "</pre>
                <p data-bs-toggle=\"modal\" data-bs-target=\"#showDKIMprivKey\" id=\"dkim_priv\" style=\"cursor:pointer;margin-top:-8pt\" data-priv-key=\"";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["alias_domain_data"], "dkim", [], "any", false, false, false, 63), "privkey", [], "any", false, false, false, 63), "html", null, true);
                    echo "\"><small><i class=\"bi bi-arrow-return-right\"></i> Private key</small></p>
              </div>
              <hr class=\"d-block d-md-none\">
            </div>
          ";
                } else {
                    // line 68
                    echo "            <div class=\"row collapse in dkim_key_missing\">
              <div class=\"col-md-1\"><input class=\"dkim_missing\" type=\"checkbox\" data-id=\"dkim\" name=\"multi_select\" value=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $context["alias_domain"], "html", null, true);
                    echo "\" disabled></div>
              <div class=\"col-md-2 offset-md-1\">
                <p><small>↳ Alias-Domain: <strong>";
                    // line 71
                    echo twig_escape_filter($this->env, $context["alias_domain"], "html", null, true);
                    echo "</strong><br></small><span class=\"badge fs-6 bg-danger\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 71), "dkim_key_missing", [], "any", false, false, false, 71), "html", null, true);
                    echo "</span></p>
              </div>
              <div class=\"col-md-8\"><pre>-</pre></div>
              <hr class=\"d-block d-md-none\">
            </div>
          ";
                }
                // line 77
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias_domain'], $context['alias_domain_data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['domain'], $context['domain_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["dkim_blind_domains"] ?? null), function ($__data__) use ($context, $macros) { $context["data"] = $__data__; return  !(null === twig_get_attribute($this->env, $this->source, $context["data"], "dkim", [], "any", false, false, false, 79)); }));
        foreach ($context['_seq'] as $context["blind"] => $context["data"]) {
            // line 80
            echo "        <div class=\"row collapse in dkim_key_unused\">
          <div class=\"col-md-1\"><input type=\"checkbox\" data-id=\"dkim\" name=\"multi_select\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, $context["blind"], "html", null, true);
            echo "\"></div>
          <div class=\"col-md-3\">
            <p>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 83), "domain", [], "any", false, false, false, 83), "html", null, true);
            echo ": <strong>";
            echo twig_escape_filter($this->env, $context["blind"], "html", null, true);
            echo "</strong>
            <p class=\"dkim-label\"><span class=\"badge fs-6 bg-warning\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 84), "dkim_key_unused", [], "any", false, false, false, 84), "html", null, true);
            echo "</span></p>
            <p class=\"dkim-label\"><span class=\"badge fs-6 bg-primary\">Selector '";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "dkim", [], "any", false, false, false, 85), "dkim_selector", [], "any", false, false, false, 85), "html", null, true);
            echo "'</span></p>
            <p class=\"dkim-label\"><span class=\"badge fs-6 bg-info\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "dkim", [], "any", false, false, false, 86), "length", [], "any", false, false, false, 86), "html", null, true);
            echo " bit</span></p>
            </p>
          </div>
          <div class=\"col-md-8\">
            <pre>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "dkim", [], "any", false, false, false, 90), "dkim_txt", [], "any", false, false, false, 90), "html", null, true);
            echo "</pre>
            <p data-bs-toggle=\"modal\" data-bs-target=\"#showDKIMprivKey\" id=\"dkim_priv\" style=\"cursor:pointer;margin-top:-8pt\" data-priv-key=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "dkim", [], "any", false, false, false, 91), "privkey", [], "any", false, false, false, 91), "html", null, true);
            echo "\"><small><i class=\"bi bi-arrow-return-right\"></i> Private key</small></p>
          </div>
          <hr class=\"d-block d-md-none\">
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['blind'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
      <div class=\"mass-actions-admin\">
        <div class=\"btn-group btn-group-sm\">
          <button type=\"button\" id=\"toggle_multi_select_all\" data-id=\"dkim\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-secondary\"><i class=\"bi bi-check-all\"></i> ";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "mailbox", [], "any", false, false, false, 99), "toggle_all", [], "any", false, false, false, 99), "html", null, true);
        echo "</button>
          <button type=\"button\" data-action=\"delete_selected\" name=\"delete_selected\" data-id=\"dkim\" data-api-url=\"delete/dkim\" class=\"btn btn-sm btn-xs-half d-block d-sm-inline btn-danger\"><i class=\"bi bi-trash\"></i> ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 100), "remove", [], "any", false, false, false, 100), "html", null, true);
        echo "</button>
        </div>
      </div>

      <legend style=\"margin-top:40px\">";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 104), "dkim_add_key", [], "any", false, false, false, 104), "html", null, true);
        echo "</legend><hr />
      <form class=\"form\" data-id=\"dkim\" role=\"form\" method=\"post\">
        <div class=\"mb-4\">
          <label for=\"dkim_add_domains\">";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 107), "domain_s", [], "any", false, false, false, 107), "html", null, true);
        echo "</label>
          <input class=\"form-control input-sm\" id=\"dkim_add_domains\" name=\"domains\" placeholder=\"example.org, example.com\" required>
          <small><i class=\"bi bi-arrow-return-right\"></i> <a href=\"#\" id=\"dkim_missing_keys\">";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 109), "dkim_domains_wo_keys", [], "any", false, false, false, 109), "html", null, true);
        echo "</a></small>
        </div>
        <div class=\"mb-2\">
          <label for=\"dkim_selector\">";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 112), "dkim_domains_selector", [], "any", false, false, false, 112), "html", null, true);
        echo "</label>
          <input class=\"form-control input-sm\" id=\"dkim_selector\" name=\"dkim_selector\" value=\"dkim\" required>
        </div>
        <div class=\"row mb-4\">
          <div class=\"col-12 col-md-6 col-lg-4 col-xl-3\">
            <select data-style=\"btn btn-secondary btn-sm\" class=\"form-control\" id=\"key_size\" name=\"key_size\" title=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 117), "dkim_key_length", [], "any", false, false, false, 117), "html", null, true);
        echo "\" required>
              <option data-subtext=\"bits\">1024</option>
              <option data-subtext=\"bits\">2048</option>
            </select>
          </div>
        </div>
        <button class=\"btn btn-sm d-block d-sm-inline btn-success\" data-action=\"add_item\" data-id=\"dkim\" data-api-url='add/dkim' data-api-attr='{}' href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 123), "add", [], "any", false, false, false, 123), "html", null, true);
        echo "</button>
      </form>

      <legend data-bs-target=\"#import_dkim\" style=\"margin-top:40px;cursor:pointer\" unselectable=\"on\" data-bs-toggle=\"collapse\">
        <i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> ";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 127), "import_private_key", [], "any", false, false, false, 127), "html", null, true);
        echo "
      </legend>
      <hr />
      <div id=\"import_dkim\" class=\"collapse\">
        <form class=\"form\" data-id=\"dkim_import\" role=\"form\" method=\"post\">
          <div class=\"mb-2\">
            <label for=\"dkim_import_domain\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 133), "domain", [], "any", false, false, false, 133), "html", null, true);
        echo ":</label>
            <input class=\"form-control input-sm\" id=\"dkim_import_domain\" name=\"domain\" placeholder=\"example.org\" required>
          </div>
          <div class=\"mb-2\">
            <label for=\"dkim_import_selector\">";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 137), "dkim_domains_selector", [], "any", false, false, false, 137), "html", null, true);
        echo ":</label>
            <input class=\"form-control input-sm\" id=\"dkim_import_selector\" name=\"dkim_selector\" value=\"dkim\" required>
          </div>
          <div class=\"mb-4\">
            <label for=\"private_key_file\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 141), "private_key", [], "any", false, false, false, 141), "html", null, true);
        echo ": (RSA PKCS#8)</label>
            <textarea class=\"form-control input-sm\" rows=\"10\" name=\"private_key_file\" id=\"private_key_file\" required placeholder=\"-----BEGIN RSA KEY-----\"></textarea>
          </div>
          <div class=\"mb-2\">
            <label>
              <input type=\"checkbox\" name=\"overwrite_existing\" value=\"1\"> ";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 146), "dkim_overwrite_key", [], "any", false, false, false, 146), "html", null, true);
        echo "
            </label>
          </div>
          <button class=\"btn btn-sm d-block d-sm-inline btn-secondary\" data-action=\"add_item\" data-id=\"dkim_import\" data-api-url='add/dkim_import' data-api-attr='{}' href=\"#\"><i class=\"bi bi-plus-lg\"></i> ";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 149), "import", [], "any", false, false, false, 149), "html", null, true);
        echo "</button>
        </form>
      </div>

      <legend data-bs-target=\"#duplicate_dkim\" style=\"margin-top:40px;cursor:pointer\" unselectable=\"on\" data-bs-toggle=\"collapse\">
        <i style=\"font-size:10pt;\" class=\"bi bi-plus-square\"></i> ";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 154), "duplicate_dkim", [], "any", false, false, false, 154), "html", null, true);
        echo "
      </legend>
      <hr />
      <div id=\"duplicate_dkim\" class=\"collapse\">
        <form class=\"form-horizontal\" data-id=\"dkim_duplicate\" role=\"form\" method=\"post\">
          <div class=\"row mb-2\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"from_domain\">";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 160), "dkim_from", [], "any", false, false, false, 160), "html", null, true);
        echo ":</label>
            <div class=\"col-sm-10 col-md-6 col-lg-4 col-xl-3\">
              <select data-style=\"btn btn-secondary btn-sm\"
                      data-live-search=\"true\"
                      data-id=\"dkim_duplicate\"
                      title=\"";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 165), "dkim_from_title", [], "any", false, false, false, 165), "html", null, true);
        echo "\"
                      name=\"from_domain\" id=\"from_domain\" class=\"full-width-select form-control\" required>
                ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dkim_domains_with_keys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dkim_domain"]) {
            // line 168
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $context["dkim_domain"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["dkim_domain"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dkim_domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "              </select>
            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"control-label col-sm-2 text-sm-end\" for=\"to_domain\">";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 174), "dkim_to", [], "any", false, false, false, 174), "html", null, true);
        echo ":</label>
            <div class=\"col-sm-10 col-md-6 col-lg-4 col-xl-3\">
              <select
                data-live-search=\"true\"
                data-style=\"btn btn-secondary btn-sm\"
                data-id=\"dkim_duplicate\"
                title=\"";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 180), "dkim_to_title", [], "any", false, false, false, 180), "html", null, true);
        echo "\"
                name=\"to_domain\" id=\"to_domain\" class=\"full-width-select form-control\" multiple required>
                ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_domains"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 183
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "              </select>
            </div>
          </div>
          <button class=\"btn btn-sm d-block d-sm-inline btn-secondary\" data-action=\"add_item\" data-id=\"dkim_duplicate\" data-api-url='add/dkim_duplicate' data-api-attr='{}' href=\"#\"><i class=\"bi bi-clipboard-plus\"></i> ";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "admin", [], "any", false, false, false, 188), "duplicate", [], "any", false, false, false, 188), "html", null, true);
        echo "</button>
        </form>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/tab-config-dkim.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 188,  450 => 185,  439 => 183,  435 => 182,  430 => 180,  421 => 174,  415 => 170,  404 => 168,  400 => 167,  395 => 165,  387 => 160,  378 => 154,  370 => 149,  364 => 146,  356 => 141,  349 => 137,  342 => 133,  333 => 127,  326 => 123,  317 => 117,  309 => 112,  303 => 109,  298 => 107,  292 => 104,  285 => 100,  281 => 99,  276 => 96,  265 => 91,  261 => 90,  254 => 86,  250 => 85,  246 => 84,  240 => 83,  235 => 81,  232 => 80,  227 => 79,  221 => 78,  215 => 77,  204 => 71,  199 => 69,  196 => 68,  188 => 63,  184 => 62,  177 => 58,  173 => 57,  169 => 56,  165 => 55,  160 => 53,  157 => 52,  154 => 51,  149 => 50,  136 => 44,  131 => 42,  128 => 41,  117 => 35,  111 => 32,  104 => 28,  98 => 27,  94 => 26,  88 => 25,  83 => 23,  80 => 22,  77 => 21,  73 => 20,  68 => 18,  62 => 15,  56 => 12,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/tab-config-dkim.twig", "/web/templates/admin/tab-config-dkim.twig");
    }
}
