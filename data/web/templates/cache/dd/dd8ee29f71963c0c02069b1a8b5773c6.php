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

/* modals/queue.twig */
class __TwigTemplate_299e77b59b08f6da2be344901d8d37e4 extends Template
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
        echo "<!-- show queue item modal -->
<div class=\"modal fade\" id=\"showQueuedMsg\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h3 class=\"modal-title\"><i class=\"bi bi-card-checklist\" style=\"font-size:18px\"></i> ID <span id=\"queue_id\"></span></h3>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <textarea class=\"form-control\" id=\"queue_msg_content\" name=\"content\" rows=\"40\"></textarea>
      </div>
    </div>
  </div>
</div><!-- show queue item modal -->";
    }

    public function getTemplateName()
    {
        return "modals/queue.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modals/queue.twig", "/web/templates/modals/queue.twig");
    }
}
