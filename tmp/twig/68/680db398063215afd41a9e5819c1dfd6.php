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

/* _default/menu.user.twig */
class __TwigTemplate_b9fab7c1859e83a5a434fd97a32cc9f5 extends Template
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
        $macros["tabler"] = $this->macros["tabler"] = $this->load("_default/macro.tabler.twig", 1)->unwrap();
        // line 2
        yield "<ul class=\"navbar-nav\">
\t<li class=\"nav-item dropdown\">
\t\t<a class=\"nav-link dropdown-toggle\" href=\"#navbar-base\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\">
\t\t<span class=\"nav-link-title\">";
        // line 5
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 5, $this->getSourceContext())->macro_icon(...["mail-opened"]);
        yield " ";
        echo $context['env']['translation']->translate("Messages");
        yield " </span>
\t\t</a>
\t\t<div class=\"dropdown-menu\">
\t\t\t<div class=\"dropdown-menu-columns\">
\t\t\t\t<div class=\"dropdown-menu-column\">
\t\t\t\t\t<a class=\"dropdown-item d-block\" href=\"/customer/message?action=inbox&organization=";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 10), "organization", [], "any", false, false, false, 10), "slug", [], "any", false, false, false, 10), "html", null, true);
        yield "\">
\t\t\t\t\t\t";
        // line 11
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 11, $this->getSourceContext())->macro_icon(...["inbox"]);
        yield "
\t\t\t\t\t\t";
        // line 12
        echo $context['env']['translation']->translate("Inbox");
        // line 13
        yield "\t\t\t\t\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["message_counts"] ?? null), "inbox", [], "any", false, false, false, 13) > 0)) {
            // line 14
            yield "\t\t\t\t\t\t\t<span class=\"float-end badge text-bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["message_counts"] ?? null), "inbox", [], "any", false, false, false, 14), "html", null, true);
            yield "</span>
\t\t\t\t\t\t";
        }
        // line 16
        yield "\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/customer/message?action=outbox&organization=";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 17), "organization", [], "any", false, false, false, 17), "slug", [], "any", false, false, false, 17), "html", null, true);
        yield "\">
\t\t\t\t\t\t";
        // line 18
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 18, $this->getSourceContext())->macro_icon(...["mail-share"]);
        yield "
\t\t\t\t\t\t";
        // line 19
        echo $context['env']['translation']->translate("Outbox");
        // line 20
        yield "\t\t\t\t\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["message_counts"] ?? null), "outbox", [], "any", false, false, false, 20) > 0)) {
            // line 21
            yield "\t\t\t\t\t\t\t<span class=\"float-end badge text-bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["message_counts"] ?? null), "outbox", [], "any", false, false, false, 21), "html", null, true);
            yield "</span>
\t\t\t\t\t\t";
        }
        // line 23
        yield "\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/customer/message?action=sent&organization=";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 24), "organization", [], "any", false, false, false, 24), "slug", [], "any", false, false, false, 24), "html", null, true);
        yield "\">
\t\t\t\t\t\t";
        // line 25
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 25, $this->getSourceContext())->macro_icon(...["send"]);
        yield "
\t\t\t\t\t\t";
        // line 26
        echo $context['env']['translation']->translate("Sent");
        // line 27
        yield "\t\t\t\t\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["message_counts"] ?? null), "sent", [], "any", false, false, false, 27) > 0)) {
            // line 28
            yield "\t\t\t\t\t\t\t<span class=\"float-end badge text-bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["message_counts"] ?? null), "sent", [], "any", false, false, false, 28), "html", null, true);
            yield "</span>
\t\t\t\t\t\t";
        }
        // line 30
        yield "\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/customer/message?action=failed&organization=";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 31), "organization", [], "any", false, false, false, 31), "slug", [], "any", false, false, false, 31), "html", null, true);
        yield "\">
\t\t\t\t\t\t";
        // line 32
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 32, $this->getSourceContext())->macro_icon(...["location-broken"]);
        yield "
\t\t\t\t\t\t";
        // line 33
        echo $context['env']['translation']->translate("Failed");
        // line 34
        yield "\t\t\t\t\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["message_counts"] ?? null), "failed", [], "any", false, false, false, 34) > 0)) {
            // line 35
            yield "\t\t\t\t\t\t\t<span class=\"float-end badge text-bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["message_counts"] ?? null), "failed", [], "any", false, false, false, 35), "html", null, true);
            yield "</span>
\t\t\t\t\t\t";
        }
        // line 37
        yield "\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/customer/message?action=create&organization=";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 39), "organization", [], "any", false, false, false, 39), "slug", [], "any", false, false, false, 39), "html", null, true);
        yield "\">
\t\t\t\t\t\t";
        // line 40
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 40, $this->getSourceContext())->macro_icon(...["mail-plus"]);
        yield "
\t\t\t\t\t\t";
        // line 41
        echo $context['env']['translation']->translate("New message");
        // line 42
        yield "\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"/customer/organization/detail?organization=";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 48), "organization", [], "any", false, false, false, 48), "slug", [], "any", false, false, false, 48), "html", null, true);
        yield "\">
\t\t\t<span class=\"nav-link-title\">";
        // line 49
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 49, $this->getSourceContext())->macro_icon(...["building"]);
        yield " ";
        echo $context['env']['translation']->translate("Organization");
        yield " </span>
\t\t</a>
\t</li>
</ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default/menu.user.twig";
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
        return array (  170 => 49,  166 => 48,  158 => 42,  156 => 41,  152 => 40,  148 => 39,  144 => 37,  138 => 35,  135 => 34,  133 => 33,  129 => 32,  125 => 31,  122 => 30,  116 => 28,  113 => 27,  111 => 26,  107 => 25,  103 => 24,  100 => 23,  94 => 21,  91 => 20,  89 => 19,  85 => 18,  81 => 17,  78 => 16,  72 => 14,  69 => 13,  67 => 12,  63 => 11,  59 => 10,  49 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"_default/macro.tabler.twig\" as tabler %}
<ul class=\"navbar-nav\">
\t<li class=\"nav-item dropdown\">
\t\t<a class=\"nav-link dropdown-toggle\" href=\"#navbar-base\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\">
\t\t<span class=\"nav-link-title\">{{ tabler.icon('mail-opened') }} {% trans \"Messages\" %} </span>
\t\t</a>
\t\t<div class=\"dropdown-menu\">
\t\t\t<div class=\"dropdown-menu-columns\">
\t\t\t\t<div class=\"dropdown-menu-column\">
\t\t\t\t\t<a class=\"dropdown-item d-block\" href=\"/customer/message?action=inbox&organization={{ env.session.organization.slug }}\">
\t\t\t\t\t\t{{ tabler.icon('inbox') }}
\t\t\t\t\t\t{% trans \"Inbox\" %}
\t\t\t\t\t\t{% if message_counts.inbox > 0 %}
\t\t\t\t\t\t\t<span class=\"float-end badge text-bg-secondary\">{{ message_counts.inbox }}</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/customer/message?action=outbox&organization={{ env.session.organization.slug }}\">
\t\t\t\t\t\t{{ tabler.icon('mail-share') }}
\t\t\t\t\t\t{% trans \"Outbox\" %}
\t\t\t\t\t\t{% if message_counts.outbox > 0 %}
\t\t\t\t\t\t\t<span class=\"float-end badge text-bg-secondary\">{{ message_counts.outbox }}</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/customer/message?action=sent&organization={{ env.session.organization.slug }}\">
\t\t\t\t\t\t{{ tabler.icon('send') }}
\t\t\t\t\t\t{% trans \"Sent\" %}
\t\t\t\t\t\t{% if message_counts.sent > 0 %}
\t\t\t\t\t\t\t<span class=\"float-end badge text-bg-secondary\">{{ message_counts.sent }}</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/customer/message?action=failed&organization={{ env.session.organization.slug }}\">
\t\t\t\t\t\t{{ tabler.icon('location-broken') }}
\t\t\t\t\t\t{% trans \"Failed\" %}
\t\t\t\t\t\t{% if message_counts.failed > 0 %}
\t\t\t\t\t\t\t<span class=\"float-end badge text-bg-secondary\">{{ message_counts.failed }}</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/customer/message?action=create&organization={{ env.session.organization.slug }}\">
\t\t\t\t\t\t{{ tabler.icon('mail-plus') }}
\t\t\t\t\t\t{% trans \"New message\" %}
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"/customer/organization/detail?organization={{ env.session.organization.slug }}\">
\t\t\t<span class=\"nav-link-title\">{{ tabler.icon('building') }} {% trans \"Organization\" %} </span>
\t\t</a>
\t</li>
</ul>
", "_default/menu.user.twig", "/web/roanbuysse/buysse.io/sgraffitobelgium/app/admin/template/_default/menu.user.twig");
    }
}
