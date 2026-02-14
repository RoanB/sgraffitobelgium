<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @skeleton-pager\bootstrap5-tabler\header.twig */
class __TwigTemplate_7e0aaf07b90a0603f1ab2a34da0f8a0d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if (CoreExtension::inFilter(($context["field_name"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "sort_permissions", [], "any", false, false, false, 1))) {
            // line 2
            yield "\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
            yield "\" class=\"skeleton-pager-header-link\">
\t\t";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["header"] ?? null), "html", null, true);
            yield "
\t\t";
            // line 4
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "get_sort", [], "method", false, false, false, 4) == ($context["field_name"] ?? null))) {
                // line 5
                yield "\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "get_direction", [], "method", false, false, false, 5) == "asc")) {
                    // line 6
                    yield "\t\t\t\t<i class=\"ti ti-arrow-up fw-bold fs-3 mt-1\"></i>
\t\t\t";
                } else {
                    // line 8
                    yield "\t\t\t\t<i class=\"ti ti-arrow-down fw-bold fs-3 mt-1\"></i>
\t\t\t";
                }
                // line 10
                yield "\t\t";
            }
            // line 11
            yield "\t</a>
";
        } else {
            // line 13
            yield "\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["header"] ?? null), "html", null, true);
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@skeleton-pager\\bootstrap5-tabler\\header.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  73 => 13,  69 => 11,  66 => 10,  62 => 8,  58 => 6,  55 => 5,  53 => 4,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if field_name in options.sort_permissions %}
\t<a href=\"{{ url }}\" class=\"skeleton-pager-header-link\">
\t\t{{ header }}
\t\t{% if pager.get_sort() == field_name %}
\t\t\t{% if pager.get_direction() == 'asc' %}
\t\t\t\t<i class=\"ti ti-arrow-up fw-bold fs-3 mt-1\"></i>
\t\t\t{% else %}
\t\t\t\t<i class=\"ti ti-arrow-down fw-bold fs-3 mt-1\"></i>
\t\t\t{% endif %}
\t\t{% endif %}
\t</a>
{% else %}
\t{{ header }}
{% endif %}
", "@skeleton-pager\\bootstrap5-tabler\\header.twig", "/web/roanbuysse/buysse.io/sgraffitobelgium/lib/external/packages/tigron/skeleton-pager/template/bootstrap5-tabler/header.twig");
    }
}
