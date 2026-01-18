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

/* _default/macro.tabler.twig */
class __TwigTemplate_913a68ffff4be2aff2218005dcd0a6ce extends Template
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
        // line 6
        yield "
";
        // line 8
        yield "
";
        // line 10
        yield "
";
        // line 39
        yield "

";
        // line 48
        yield "
";
        // line 65
        yield "
";
        // line 73
        yield "
";
        // line 87
        yield "
";
        yield from [];
    }

    // line 1
    public function macro_icon_svg($name = null, $class = null, $extra = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "class" => $class,
            "extra" => $extra,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "\t<svg height=\"24\" class=\"icon icon-tabler mx-0 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" ";
            yield ($context["extra"] ?? null);
            yield ">
\t\t<use xlink:href=\"/tabler--icons/tabler-sprite.svg#tabler-";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" />
\t</svg>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 7
    public function macro_icon($name = null, $class = null, $extra = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "class" => $class,
            "extra" => $extra,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield "<i class=\"ti ti-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            if ((($context["class"] ?? null) != "icon-xl")) {
                yield " icon";
            }
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" ";
            yield ($context["extra"] ?? null);
            yield "></i>";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 11
    public function macro_alert($type = null, $message = null, $secondary_message = "", $dismissable = false, $margin = true, $row = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "type" => $type,
            "message" => $message,
            "secondary_message" => $secondary_message,
            "dismissable" => $dismissable,
            "margin" => $margin,
            "row" => $row,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "\t";
            if ((($context["type"] ?? null) == "success")) {
                // line 13
                yield "\t\t";
                $context["icon_name"] = "circle-check";
                // line 14
                yield "\t";
            } elseif ((($context["type"] ?? null) == "danger")) {
                // line 15
                yield "\t\t";
                $context["icon_name"] = "alert-circle";
                // line 16
                yield "\t";
            } elseif ((($context["type"] ?? null) == "info")) {
                // line 17
                yield "\t\t";
                $context["icon_name"] = "info-circle";
                // line 18
                yield "\t";
            } elseif ((($context["type"] ?? null) == "warning")) {
                // line 19
                yield "\t\t";
                $context["icon_name"] = "alert-triangle";
                // line 20
                yield "\t";
            }
            // line 21
            yield "
\t<div class=\"";
            // line 22
            if ((($context["row"] ?? null) == true)) {
                yield "row ";
            }
            yield "alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            if ((($context["margin"] ?? null) == false)) {
                yield " m-0";
            }
            if ((($tmp = ($context["dismissable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " alert-dismissible";
            }
            yield "\" role=\"alert\">
\t\t<div class=\"alert-icon\">
\t\t\t<i class=\"ti ti-";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon_name"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "\"></i>
\t\t</div>
\t\t\t";
            // line 26
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["secondary_message"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 27
                yield "\t\t\t\t<div>
\t\t\t\t\t<h4 class=\"alert-heading\">";
                // line 28
                yield ($context["message"] ?? null);
                yield "</h4>
\t\t\t\t\t<div class=\"alert-description\">";
                // line 29
                yield ($context["secondary_message"] ?? null);
                yield "</div>
\t\t\t\t</div>
\t\t\t";
            } else {
                // line 32
                yield "\t\t\t\t";
                yield ($context["message"] ?? null);
                yield "
\t\t\t";
            }
            // line 34
            yield "\t\t";
            if ((($tmp = ($context["dismissable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 35
                yield "\t\t\t<a class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"close\"></a>
\t\t";
            }
            // line 37
            yield "\t</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 41
    public function macro_show_errors($errors = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "errors" => $errors,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 42
            yield "\t<ul class=\"mb-0\">
\t\t";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                // line 44
                yield "\t\t\t<li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield ": ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('trans')->getCallable()($this->env, $context["message"]), "html", null, true);
                yield "</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "\t</ul>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function macro_star_rating($score = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "score" => $score,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 50
            yield "\t";
            $context["score"] = ($this->extensions['Skeleton\Template\Twig\Extension\Common']->round_filter(($context["score"] ?? null)) / 2);
            // line 51
            yield "\t<div class=\"col-auto text-purple\">
\t\t";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 53
                yield "\t\t\t";
                $context["icon"] = "star";
                // line 54
                yield "\t\t\t";
                if ((($context["score"] ?? null) >= $context["i"])) {
                    // line 55
                    yield "\t\t\t\t";
                    $context["icon"] = "star-filled";
                    // line 56
                    yield "\t\t\t";
                } elseif ((((($context["score"] ?? null) + 1) - $context["i"]) == 0.5)) {
                    // line 57
                    yield "\t\t\t\t";
                    $context["icon"] = "star-half-filled";
                    // line 58
                    yield "\t\t\t";
                }
                // line 59
                yield "\t\t\t<svg width=\"24\" height=\"24\" class=\"icon icon-tabler ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
                yield "\">
\t\t\t\t<use xlink:href=\"/tabler--icons/tabler-sprite.svg#tabler-";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield "\" />
\t\t\t</svg>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "\t</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function macro_progress_bar($step = null, $total_steps = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "step" => $step,
            "total_steps" => $total_steps,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 67
            yield "\t<ul class=\"steps steps-counter mt-3\">
\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["total_steps"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["step_counter"]) {
                // line 69
                yield "\t\t\t<li class=\"step-item ";
                if ((($context["step"] ?? null) == $context["step_counter"])) {
                    yield " active ";
                }
                yield "\"></li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['step_counter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "\t</ul>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 74
    public function macro_progress_bar_vertical($step = null, $step_titles = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "step" => $step,
            "step_titles" => $step_titles,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 75
            yield "\t<div class=\"card-body\">
\t\t<ul class=\"steps steps-counter steps-vertical\">
\t\t\t";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["step_titles"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["step_item"]) {
                // line 78
                yield "\t\t\t\t<li class=\"step-item  ";
                if ((($context["step"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 78))) {
                    yield " active ";
                }
                yield "\">
\t\t\t\t<p class=\"text-truncate\">
\t\t\t\t\t";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('trans')->getCallable()($this->env, $context["step_item"]), "html", null, true);
                yield "
\t\t\t\t</p>
\t\t\t\t</li>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['step_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            yield "\t\t</ul>
\t</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 88
    public function macro_not_found($properties = null, $title = null, $sub_title = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "properties" => $properties,
            "title" => $title,
            "sub_title" => $sub_title,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 89
            yield "\t<div class=\"empty\">
\t\t<p class=\"empty-title\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('trans')->getCallable()($this->env, ($context["title"] ?? null)), "html", null, true);
            yield "</p>
\t\t<p class=\"empty-subtitle text-secondary\">
\t\t\t";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('trans')->getCallable()($this->env, ($context["sub_title"] ?? null)), "html", null, true);
            yield "
\t\t</p>
\t\t<div class=\"empty-action\">
\t\t\t<div class=\"nav-item dropdown d-none d-md-flex me-3\">
\t\t\t\t<a href=\"#\" class=\"btn dropdown-toggle text-muted\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t<i class=\"fa-solid fa-home\"></i>
\t\t\t\t\t<span id=\"active-property\">
\t\t\t\t\t\t";
            // line 99
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 99), "selected_property", [], "any", false, false, false, 99))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 100
                yield "\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 100), "selected_property", [], "any", false, false, false, 100), "name", [], "any", false, false, false, 100), "html", null, true);
                yield "
\t\t\t\t\t\t";
            } else {
                // line 102
                yield "\t\t\t\t\t\t\t";
                echo $context['env']['translation']->translate("None selected");
                // line 103
                yield "\t\t\t\t\t\t";
            }
            // line 104
            yield "\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-arrow\">
\t\t\t\t\t<a class=\"dropdown-item mt-1 property-selector ";
            // line 107
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["loop"] ?? null), "last", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " mb-1 ";
            }
            yield " ";
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 107), "selected_property", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107))) {
                yield " fw-bold ";
            }
            yield "\" data-property-id=\"\" href=\"#\">
\t\t\t\t\t\t";
            // line 108
            echo $context['env']['translation']->translate("None selected");
            // line 109
            yield "\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["properties"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 111
                yield "\t\t\t\t\t\t<a class=\"dropdown-item mt-1 property-selector ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " mb-1 ";
                }
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 111), "selected_property", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111) == CoreExtension::getAttribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 111))) {
                    yield " fw-bold ";
                }
                yield "\" data-property-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 111), "html", null, true);
                yield "\" href=\"#\">
\t\t\t\t\t\t\t";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 112), "html", null, true);
                yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default/macro.tabler.twig";
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
        return array (  549 => 115,  532 => 112,  519 => 111,  502 => 110,  499 => 109,  497 => 108,  487 => 107,  482 => 104,  479 => 103,  476 => 102,  470 => 100,  468 => 99,  458 => 92,  453 => 90,  450 => 89,  436 => 88,  428 => 84,  410 => 80,  402 => 78,  385 => 77,  381 => 75,  368 => 74,  361 => 71,  350 => 69,  346 => 68,  343 => 67,  330 => 66,  323 => 63,  314 => 60,  309 => 59,  306 => 58,  303 => 57,  300 => 56,  297 => 55,  294 => 54,  291 => 53,  287 => 52,  284 => 51,  281 => 50,  269 => 49,  262 => 46,  251 => 44,  247 => 43,  244 => 42,  232 => 41,  225 => 37,  221 => 35,  218 => 34,  212 => 32,  206 => 29,  202 => 28,  199 => 27,  197 => 26,  190 => 24,  175 => 22,  172 => 21,  169 => 20,  166 => 19,  163 => 18,  160 => 17,  157 => 16,  154 => 15,  151 => 14,  148 => 13,  145 => 12,  128 => 11,  100 => 7,  91 => 3,  84 => 2,  70 => 1,  64 => 87,  61 => 73,  58 => 65,  55 => 48,  51 => 39,  48 => 10,  45 => 8,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro icon_svg(name, class, extra) %}
\t<svg height=\"24\" class=\"icon icon-tabler mx-0 {{ class }}\" {{ extra|raw }}>
\t\t<use xlink:href=\"/tabler--icons/tabler-sprite.svg#tabler-{{ name }}\" />
\t</svg>
{% endmacro %}

{% macro icon(name, class, extra) %}<i class=\"ti ti-{{ name }}{% if class != 'icon-xl' %} icon{% endif %} {{ class }}\" {{ extra|raw }}></i>{% endmacro %}

{# {{ tabler.alert('info', 'Already submitted'|trans, 'This report has already been submitted'|trans) }} #}

{% macro alert(type, message, secondary_message = '', dismissable = false, margin = true, row = false) %}
\t{% if type == 'success' %}
\t\t{% set icon_name = 'circle-check' %}
\t{% elseif type == 'danger' %}
\t\t{% set icon_name = 'alert-circle' %}
\t{% elseif type == 'info' %}
\t\t{% set icon_name = 'info-circle' %}
\t{% elseif type == 'warning' %}
\t\t{% set icon_name = 'alert-triangle' %}
\t{% endif %}

\t<div class=\"{% if row == true %}row {% endif %}alert alert-{{ type }}{% if margin == false %} m-0{% endif %}{% if dismissable %} alert-dismissible{% endif %}\" role=\"alert\">
\t\t<div class=\"alert-icon\">
\t\t\t<i class=\"ti ti-{{ icon_name }} {{ type }}\"></i>
\t\t</div>
\t\t\t{% if secondary_message is not empty %}
\t\t\t\t<div>
\t\t\t\t\t<h4 class=\"alert-heading\">{{ message|raw }}</h4>
\t\t\t\t\t<div class=\"alert-description\">{{ secondary_message|raw }}</div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t{{ message|raw }}
\t\t\t{% endif %}
\t\t{% if dismissable %}
\t\t\t<a class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"close\"></a>
\t\t{% endif %}
\t</div>
{% endmacro %}


{% macro show_errors(errors) %}
\t<ul class=\"mb-0\">
\t\t{% for key, message in errors %}
\t\t\t<li>{{ key }}: {{ message|trans }}</li>
\t\t{% endfor %}
\t</ul>
{% endmacro %}

{% macro star_rating(score) %}
\t{% set score = score|round / 2 %}
\t<div class=\"col-auto text-purple\">
\t\t{% for i in 1..5 %}
\t\t\t{% set icon = 'star' %}
\t\t\t{% if score >= i %}
\t\t\t\t{% set icon = 'star-filled' %}
\t\t\t{% elseif score + 1 - i == 0.5 %}
\t\t\t\t{% set icon = 'star-half-filled' %}
\t\t\t{% endif %}
\t\t\t<svg width=\"24\" height=\"24\" class=\"icon icon-tabler {{ action }}\">
\t\t\t\t<use xlink:href=\"/tabler--icons/tabler-sprite.svg#tabler-{{ icon }}\" />
\t\t\t</svg>
\t\t{% endfor %}
\t</div>
{% endmacro %}

{% macro progress_bar(step, total_steps) %}
\t<ul class=\"steps steps-counter mt-3\">
\t\t{% for step_counter in 1..total_steps %}
\t\t\t<li class=\"step-item {% if step == step_counter %} active {% endif %}\"></li>
\t\t{% endfor %}
\t</ul>
{% endmacro %}

{% macro progress_bar_vertical (step, step_titles) %}
\t<div class=\"card-body\">
\t\t<ul class=\"steps steps-counter steps-vertical\">
\t\t\t{% for step_item in step_titles %}
\t\t\t\t<li class=\"step-item  {% if step == loop.index %} active {% endif %}\">
\t\t\t\t<p class=\"text-truncate\">
\t\t\t\t\t{{ step_item|trans }}
\t\t\t\t</p>
\t\t\t\t</li>
\t\t\t{% endfor %}
\t\t</ul>
\t</div>
{% endmacro %}

{% macro not_found (properties, title, sub_title) %}
\t<div class=\"empty\">
\t\t<p class=\"empty-title\">{{ title|trans }}</p>
\t\t<p class=\"empty-subtitle text-secondary\">
\t\t\t{{ sub_title|trans }}
\t\t</p>
\t\t<div class=\"empty-action\">
\t\t\t<div class=\"nav-item dropdown d-none d-md-flex me-3\">
\t\t\t\t<a href=\"#\" class=\"btn dropdown-toggle text-muted\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t<i class=\"fa-solid fa-home\"></i>
\t\t\t\t\t<span id=\"active-property\">
\t\t\t\t\t\t{% if env.session.selected_property is not empty %}
\t\t\t\t\t\t\t{{ env.session.selected_property.name }}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% trans 'None selected' %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-arrow\">
\t\t\t\t\t<a class=\"dropdown-item mt-1 property-selector {% if loop.last %} mb-1 {% endif %} {% if env.session.selected_property.id is empty %} fw-bold {% endif %}\" data-property-id=\"\" href=\"#\">
\t\t\t\t\t\t{% trans 'None selected' %}
\t\t\t\t\t</a>
\t\t\t\t\t{% for property in properties %}
\t\t\t\t\t\t<a class=\"dropdown-item mt-1 property-selector {% if loop.last %} mb-1 {% endif %} {% if env.session.selected_property.id == property.id %} fw-bold {% endif %}\" data-property-id=\"{{ property.id }}\" href=\"#\">
\t\t\t\t\t\t\t{{ property.name }}
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endmacro %}
", "_default/macro.tabler.twig", "/web/roanbuysse/buysse.io/vvsjongeren/app/front/template/_default/macro.tabler.twig");
    }
}
