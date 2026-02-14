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

/* building/type.twig */
class __TwigTemplate_0aaacfbd98aaa23143c92fb04894eaf1 extends Template
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

        $this->blocks = [
            'header_title' => [$this, 'block_header_title'],
            'header_breadcrumb' => [$this, 'block_header_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "_default/layout.base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $macros["tabler"] = $this->macros["tabler"] = $this->load("_default/macro.tabler.twig", 1)->unwrap();
        // line 2
        $this->parent = $this->load("_default/layout.base.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        echo $context['env']['translation']->translate("Building types");
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "\t<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        echo $context['env']['translation']->translate("Building types");
        yield "</a></li>
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "sticky_session", [], "any", false, false, false, 11), "message", [], "any", false, false, false, 11) == "created")) {
            // line 12
            yield "        ";
            yield $macros["tabler"]->getTemplateForMacro("macro_alert", $context, 12, $this->getSourceContext())->macro_alert(...["success", $this->env->getFilter('trans')->getCallable()($this->env, "The building type has been created successfully."), "", true]);
            yield "
    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 13
($context["env"] ?? null), "sticky_session", [], "any", false, false, false, 13), "message", [], "any", false, false, false, 13) == "expired_session")) {
            // line 14
            yield "        ";
            yield $macros["tabler"]->getTemplateForMacro("macro_alert", $context, 14, $this->getSourceContext())->macro_alert(...["danger", $this->env->getFilter('trans')->getCallable()($this->env, "The session has been expired. Please try again."), "", true]);
            yield "
    ";
        }
        // line 16
        yield "\t\t<div class=\"row row-cards\">
\t\t\t<div id=\"filter-card\" class=\"";
        // line 17
        if ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 17), "advanced_search", [], "any", false, false, false, 17)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 17), "advanced_search", [], "any", false, false, false, 17) == "false"))) {
            yield " d-none ";
        }
        yield " col-lg-3  pull-right \">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header border-bottom\" style=\"height: 60px\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<div class=\"text-secondary col-12\">
\t\t\t\t\t\t\t\t<btn class=\"btn  btn-primary btn-sm\" onclick=\"toggle_advanced(this)\">";
        // line 22
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 22, $this->getSourceContext())->macro_icon(...["adjustments-horizontal"]);
        yield "</btn>
\t\t\t\t\t\t\t\t";
        // line 23
        echo $context['env']['translation']->translate("Search");
        yield ": <span class=\"text-muted fs-5\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "item_count", [], "any", false, false, false, 23), "html", null, true);
        yield " ";
        echo $context['env']['translation']->translate("results");
        yield "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<form id=\"filter-form\" class=\"form\" action=\"/building/type\" method=\"post\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<label class=\"col-form-label py-0\">";
        // line 29
        echo $context['env']['translation']->translate("Search");
        yield "</label>
\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"";
        // line 32
        echo $context['env']['translation']->translate("Search");
        yield "\" aria-label=\"";
        echo $context['env']['translation']->translate("Search building type");
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "get_search", [], "method", false, false, false, 32), "html", null, true);
        yield "\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t<label class=\"col-form-label py-0\">";
        // line 36
        echo $context['env']['translation']->translate("Customer");
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<select name=\"customer_uuid\" class=\"form-control select-ajax\" data-placeholder=\"";
        // line 38
        echo $context['env']['translation']->translate("Search a customer...");
        yield "\" data-ajax-url=\"/administrative/customer?action=ajax_search\">
\t\t\t\t\t\t\t\t\t\t";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "customer", [], "any", true, true, false, 39)) {
            // line 40
            yield "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "customer", [], "any", false, false, false, 40), "uuid", [], "any", false, false, false, 40), "html", null, true);
            yield "\" selected=\"selected\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "customer", [], "any", false, false, false, 40), "get_display_name", [], "method", false, false, false, 40), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 42
        yield "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t<label class=\"col-md-2 col-6  col-form-label py-0\">";
        // line 46
        echo $context['env']['translation']->translate("Paid");
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<select name=\"paid\" class=\"form-select\" data-placeholder=\"---\">
\t\t\t\t\t\t\t\t\t\t<option value=\"none\">---</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 50
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "has_condition", ["paid", 0], "method", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " selected ";
        }
        yield ">";
        echo $context['env']['translation']->translate("Unpaid");
        yield "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 51
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "has_condition", ["paid", 1], "method", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " selected ";
        }
        yield ">";
        echo $context['env']['translation']->translate("Paid");
        yield "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-form-label py-0\">";
        // line 55
        echo $context['env']['translation']->translate("Date");
        yield "</label>
\t\t\t\t\t\t\t<div class=\"mb-0 row\">
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"col form-control datepicker\" name=\"filter[from]\" placeholder=\"";
        // line 58
        echo $context['env']['translation']->translate("From");
        yield "\" value=\"";
        if ((($tmp =  !(null === (($_v0 = ($context["filter"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["from"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Skeleton\Template\Twig\Extension\Common']->date_filter($this->env, (($_v1 = ($context["filter"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["from"] ?? null) : null));
        }
        yield "\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"col form-control datepicker\" name=\"filter[till]\" placeholder=\"";
        // line 61
        echo $context['env']['translation']->translate("Till");
        yield "\" value=\"";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v2 = ($context["filter"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["till"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Skeleton\Template\Twig\Extension\Common']->date_filter($this->env, (($_v3 = ($context["filter"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["till"] ?? null) : null));
        }
        yield "\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-form-label py-0\">";
        // line 64
        echo $context['env']['translation']->translate("Expiration date");
        yield "</label>
\t\t\t\t\t\t\t<div class=\"mb-0 row\">
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"col form-control datepicker\" name=\"filter[from_expiration]\" placeholder=\"";
        // line 67
        echo $context['env']['translation']->translate("From");
        yield "\" value=\"";
        if ((($tmp =  !(null === (($_v4 = ($context["filter"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["from_expiration"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Skeleton\Template\Twig\Extension\Common']->date_filter($this->env, (($_v5 = ($context["filter"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["from_expiration"] ?? null) : null));
        }
        yield "\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"col form-control datepicker\" name=\"filter[till_expiration]\" placeholder=\"";
        // line 70
        echo $context['env']['translation']->translate("Till");
        yield "\" value=\"";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v6 = ($context["filter"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["till_expiration"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Skeleton\Template\Twig\Extension\Common']->date_filter($this->env, (($_v7 = ($context["filter"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["till_expiration"] ?? null) : null));
        }
        yield "\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-4 w-100\">";
        // line 74
        echo $context['env']['translation']->translate("Search");
        yield "</button>
\t\t\t\t\t\t\t\t<button id=\"reset-button\" class=\"btn btn-link btn-3 w-100\">
\t\t\t\t\t\t\t\t\t";
        // line 76
        echo $context['env']['translation']->translate("Reset to defaults");
        // line 77
        yield "\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t";
        // line 84
        $context["conditions"] = CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "get_conditions", [], "method", false, false, false, 84);
        // line 85
        yield "\t\t\t<div class=\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 85), "advanced_search", [], "any", false, false, false, 85) == "true")) {
            yield " col-lg-9 ";
        } else {
            yield " col-12 ";
        }
        yield "\" id=\"result-card\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header border-bottom\" style=\"height: 60px\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<div class=\"text-secondary col-12 ";
        // line 89
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 89), "advanced_search", [], "any", false, false, false, 89) == "true")) {
            yield " d-none ";
        }
        yield "\" id=\"small-search\" >
\t\t\t\t\t\t\t<btn class=\"btn btn-primary btn-sm\" onclick=\"toggle_advanced(this)\">";
        // line 90
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 90, $this->getSourceContext())->macro_icon(...["adjustments-horizontal"]);
        yield "</btn>
\t\t\t\t\t\t\t\t";
        // line 91
        echo $context['env']['translation']->translate("Search");
        yield ":
\t\t\t\t\t\t\t\t<div class=\"ms-2 d-inline-block\">
\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"/building/type\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-0\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" class=\"form-control form-control-sm\" aria-label=\"";
        // line 95
        echo $context['env']['translation']->translate("Search building type");
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "get_search", [], "method", false, false, false, 95), "html", null, true);
        yield "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-action dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t";
        // line 104
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 104, $this->getSourceContext())->macro_icon(...["dots-vertical"]);
        yield "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/building/type?action=create_step1\">";
        // line 107
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 107, $this->getSourceContext())->macro_icon(...["plus", "me-1"]);
        echo $context['env']['translation']->translate("Add building type");
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table card-table table-vcenter text-nowrap datatable table-striped table-hover\">
\t\t\t\t\t\t\t";
        // line 115
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "items", [], "any", false, false, false, 115)) > 0)) {
            // line 116
            yield "\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>";
            // line 118
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "create_header", [$this->env->getFilter('trans')->getCallable()($this->env, "Name"), "identifier"], "method", false, false, false, 118);
            yield "</th>
\t\t\t\t\t\t\t\t\t<th>";
            // line 119
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "create_header", [$this->env->getFilter('trans')->getCallable()($this->env, "Created"), "created"], "method", false, false, false, 119);
            yield "</th>
\t\t\t\t\t\t\t\t\t<th class=\"w-1\">&nbsp;</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t";
        }
        // line 124
        yield "\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "items", [], "any", false, false, false, 125));
        foreach ($context['_seq'] as $context["_key"] => $context["building_type"]) {
            // line 126
            yield "\t\t\t\t\t\t\t\t<tr";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["building_type"], "is_expired", [], "method", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " class=\"table-warning\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Expired\"";
            }
            yield ">
\t\t\t\t\t\t\t\t\t<td>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["building_type"], "text_en_name", [], "any", false, false, false, 127), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 128
            yield $this->extensions['Skeleton\Template\Twig\Extension\Common']->date_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["building_type"], "created", [], "any", false, false, false, 128));
            yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/building/type/detail?number=";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["building_type"], "number", [], "any", false, false, false, 130), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 131
            yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 131, $this->getSourceContext())->macro_icon(...["edit"]);
            yield "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['building_type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer text-end d-flex align-items-center\">
\t\t\t\t\t\t<p class=\"m-0 text-secondary\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "item_count", [], "any", false, false, false, 140), "html", null, true);
        yield " ";
        echo $context['env']['translation']->translate("results");
        // line 141
        yield "\t\t\t\t\t\t";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "items", [], "any", false, false, false, 141)) > 0)) {
            // line 142
            yield "\t\t\t\t\t\t\t";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["pager"] ?? null), "links", [], "any", false, false, false, 142);
            yield "
\t\t\t\t\t\t";
        }
        // line 144
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "building/type.twig";
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
        return array (  410 => 144,  404 => 142,  401 => 141,  397 => 140,  391 => 136,  380 => 131,  376 => 130,  371 => 128,  367 => 127,  360 => 126,  356 => 125,  353 => 124,  345 => 119,  341 => 118,  337 => 116,  335 => 115,  323 => 107,  317 => 104,  303 => 95,  296 => 91,  292 => 90,  286 => 89,  274 => 85,  272 => 84,  263 => 77,  261 => 76,  256 => 74,  245 => 70,  235 => 67,  229 => 64,  219 => 61,  209 => 58,  203 => 55,  192 => 51,  184 => 50,  177 => 46,  171 => 42,  163 => 40,  161 => 39,  157 => 38,  152 => 36,  141 => 32,  135 => 29,  122 => 23,  118 => 22,  108 => 17,  105 => 16,  99 => 14,  97 => 13,  92 => 12,  89 => 11,  82 => 10,  74 => 7,  67 => 6,  56 => 4,  51 => 2,  49 => 1,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import '_default/macro.tabler.twig' as tabler %}
{% extends '_default/layout.base.twig' %}

{% block header_title %}{% trans \"Building types\" %}{% endblock header_title %}

{% block header_breadcrumb %}
\t<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">{% trans \"Building types\" %}</a></li>
{% endblock header_breadcrumb %}

{% block content %}
    {% if env.sticky_session.message == 'created' %}
        {{ tabler.alert('success', 'The building type has been created successfully.'|trans, '', true) }}
    {% elseif env.sticky_session.message == 'expired_session' %}
        {{ tabler.alert('danger', 'The session has been expired. Please try again.'|trans, '', true) }}
    {% endif %}
\t\t<div class=\"row row-cards\">
\t\t\t<div id=\"filter-card\" class=\"{% if env.session.advanced_search is empty or env.session.advanced_search == 'false' %} d-none {% endif %} col-lg-3  pull-right \">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header border-bottom\" style=\"height: 60px\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<div class=\"text-secondary col-12\">
\t\t\t\t\t\t\t\t<btn class=\"btn  btn-primary btn-sm\" onclick=\"toggle_advanced(this)\">{{ tabler.icon('adjustments-horizontal') }}</btn>
\t\t\t\t\t\t\t\t{% trans \"Search\" %}: <span class=\"text-muted fs-5\">{{ pager.item_count }} {% trans 'results' %}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<form id=\"filter-form\" class=\"form\" action=\"/building/type\" method=\"post\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<label class=\"col-form-label py-0\">{% trans \"Search\" %}</label>
\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"{% trans 'Search' %}\" aria-label=\"{% trans \"Search building type\" %}\" value=\"{{ pager.get_search() }}\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t<label class=\"col-form-label py-0\">{% trans \"Customer\" %}</label>
\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<select name=\"customer_uuid\" class=\"form-control select-ajax\" data-placeholder=\"{% trans 'Search a customer...' %}\" data-ajax-url=\"/administrative/customer?action=ajax_search\">
\t\t\t\t\t\t\t\t\t\t{% if filter.customer is defined %}
\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ filter.customer.uuid }}\" selected=\"selected\">{{ filter.customer.get_display_name() }}</option>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t<label class=\"col-md-2 col-6  col-form-label py-0\">{% trans \"Paid\" %}</label>
\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<select name=\"paid\" class=\"form-select\" data-placeholder=\"---\">
\t\t\t\t\t\t\t\t\t\t<option value=\"none\">---</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" {% if pager.has_condition('paid', 0) %} selected {% endif %}>{% trans \"Unpaid\" %}</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" {% if pager.has_condition('paid', 1) %} selected {% endif %}>{% trans \"Paid\" %}</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-form-label py-0\">{% trans \"Date\" %}</label>
\t\t\t\t\t\t\t<div class=\"mb-0 row\">
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"col form-control datepicker\" name=\"filter[from]\" placeholder=\"{% trans \"From\" %}\" value=\"{% if filter['from'] is not null %}{{ filter['from']|date }}{% endif %}\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"col form-control datepicker\" name=\"filter[till]\" placeholder=\"{% trans \"Till\" %}\" value=\"{% if filter['till'] is not empty %}{{ filter['till']|date }}{% endif %}\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"col-form-label py-0\">{% trans \"Expiration date\" %}</label>
\t\t\t\t\t\t\t<div class=\"mb-0 row\">
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"col form-control datepicker\" name=\"filter[from_expiration]\" placeholder=\"{% trans \"From\" %}\" value=\"{% if filter['from_expiration'] is not null %}{{ filter['from_expiration']|date }}{% endif %}\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"col form-control datepicker\" name=\"filter[till_expiration]\" placeholder=\"{% trans \"Till\" %}\" value=\"{% if filter['till_expiration'] is not empty %}{{ filter['till_expiration']|date }}{% endif %}\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-4 w-100\">{% trans \"Search\" %}</button>
\t\t\t\t\t\t\t\t<button id=\"reset-button\" class=\"btn btn-link btn-3 w-100\">
\t\t\t\t\t\t\t\t\t{% trans 'Reset to defaults' %}
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t{% set conditions = pager.get_conditions() %}
\t\t\t<div class=\"{% if env.session.advanced_search == 'true' %} col-lg-9 {% else %} col-12 {% endif %}\" id=\"result-card\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header border-bottom\" style=\"height: 60px\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<div class=\"text-secondary col-12 {% if env.session.advanced_search == 'true' %} d-none {% endif %}\" id=\"small-search\" >
\t\t\t\t\t\t\t<btn class=\"btn btn-primary btn-sm\" onclick=\"toggle_advanced(this)\">{{ tabler.icon('adjustments-horizontal') }}</btn>
\t\t\t\t\t\t\t\t{% trans \"Search\" %}:
\t\t\t\t\t\t\t\t<div class=\"ms-2 d-inline-block\">
\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"/building/type\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-0\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" class=\"form-control form-control-sm\" aria-label=\"{% trans \"Search building type\" %}\" value=\"{{ pager.get_search() }}\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-action dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t{{ tabler.icon('dots-vertical') }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/building/type?action=create_step1\">{{ tabler.icon('plus', 'me-1') }}{% trans \"Add building type\" %}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table card-table table-vcenter text-nowrap datatable table-striped table-hover\">
\t\t\t\t\t\t\t{% if pager.items|length > 0 %}
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>{{ pager.create_header('Name'|trans, 'identifier')|raw }}</th>
\t\t\t\t\t\t\t\t\t<th>{{ pager.create_header('Created'|trans, 'created')|raw }}</th>
\t\t\t\t\t\t\t\t\t<th class=\"w-1\">&nbsp;</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for building_type in pager.items %}
\t\t\t\t\t\t\t\t<tr{% if building_type.is_expired() %} class=\"table-warning\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Expired\"{% endif %}>
\t\t\t\t\t\t\t\t\t<td>{{ building_type.text_en_name }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ building_type.created|date }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/building/type/detail?number={{ building_type.number }}\">
\t\t\t\t\t\t\t\t\t\t\t{{ tabler.icon('edit') }}
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer text-end d-flex align-items-center\">
\t\t\t\t\t\t<p class=\"m-0 text-secondary\">{{ pager.item_count }} {% trans \"results\" %}
\t\t\t\t\t\t{% if pager.items|length > 0 %}
\t\t\t\t\t\t\t{{ pager.links|raw }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
{% endblock %}
", "building/type.twig", "/web/roanbuysse/buysse.io/sgraffitobelgium/app/admin/template/building/type.twig");
    }
}
