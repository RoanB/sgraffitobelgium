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

/* _default/menu.admin.twig */
class __TwigTemplate_6dafc2f0ebb55af0101b0acb52e7225b extends Template
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
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"/sgraffito\">
\t\t\t<span class=\"nav-link-title\">
\t\t\t\t";
        // line 6
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 6, $this->getSourceContext())->macro_icon(...["palette"]);
        yield "
\t\t\t\t";
        // line 7
        echo $context['env']['translation']->translate("Sgraffito");
        // line 8
        yield "\t\t\t</span>
\t\t</a>
\t</li>
\t<li class=\"nav-item dropdown\">
\t\t<a class=\"nav-link dropdown-toggle\" href=\"#navbar-base\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\">
\t\t\t<span class=\"nav-link-title\">";
        // line 13
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 13, $this->getSourceContext())->macro_icon(...["building-community"]);
        yield "
\t\t\t\t";
        // line 14
        echo $context['env']['translation']->translate("Locations");
        // line 15
        yield "\t\t\t</span>
\t\t</a>
\t\t<div class=\"dropdown-menu\">
\t\t\t<div class=\"dropdown-menu-columns\">
\t\t\t\t<div class=\"dropdown-menu-column\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/province\">
\t\t\t\t\t\t";
        // line 21
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 21, $this->getSourceContext())->macro_icon(...["location-pin"]);
        yield "
\t\t\t\t\t\t";
        // line 22
        echo $context['env']['translation']->translate("Provinces");
        // line 23
        yield "\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/building\">
\t\t\t\t\t\t";
        // line 25
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 25, $this->getSourceContext())->macro_icon(...["building"]);
        yield "
\t\t\t\t\t\t";
        // line 26
        echo $context['env']['translation']->translate("Buildings");
        // line 27
        yield "\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"/actor\">
\t\t\t<span class=\"nav-link-title\">
\t\t\t\t";
        // line 35
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 35, $this->getSourceContext())->macro_icon(...["users"]);
        yield "
\t\t\t\t";
        // line 36
        echo $context['env']['translation']->translate("Actors");
        // line 37
        yield "\t\t\t</span>
\t\t</a>
\t</li>
\t<li class=\"nav-item dropdown\">
\t\t<a class=\"nav-link dropdown-toggle\" href=\"#navbar-base\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\">
\t\t\t<span class=\"nav-link-title\">";
        // line 42
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 42, $this->getSourceContext())->macro_icon(...["list"]);
        yield "
\t\t\t\t";
        // line 43
        echo $context['env']['translation']->translate("General objects");
        // line 44
        yield "\t\t\t</span>
\t\t</a>
\t\t<div class=\"dropdown-menu\">
\t\t\t<div class=\"dropdown-menu-columns\">
\t\t\t\t<div class=\"dropdown-menu-column\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/building/type\">
\t\t\t\t\t\t";
        // line 50
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 50, $this->getSourceContext())->macro_icon(...["building"]);
        yield "
\t\t\t\t\t\t";
        // line 51
        echo $context['env']['translation']->translate("Building type");
        // line 52
        yield "\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/province\">
\t\t\t\t\t\t";
        // line 54
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 54, $this->getSourceContext())->macro_icon(...["location-pin"]);
        yield "
\t\t\t\t\t\t";
        // line 55
        echo $context['env']['translation']->translate("To Add");
        // line 56
        yield "\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"/subscription\">
\t\t\t<span class=\"nav-link-title\">
\t\t\t\t";
        // line 64
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 64, $this->getSourceContext())->macro_icon(...["photo-scan"]);
        yield "
\t\t\t\t";
        // line 65
        echo $context['env']['translation']->translate("Media");
        // line 66
        yield "\t\t\t</span>
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
        return "_default/menu.admin.twig";
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
        return array (  162 => 66,  160 => 65,  156 => 64,  146 => 56,  144 => 55,  140 => 54,  136 => 52,  134 => 51,  130 => 50,  122 => 44,  120 => 43,  116 => 42,  109 => 37,  107 => 36,  103 => 35,  93 => 27,  91 => 26,  87 => 25,  83 => 23,  81 => 22,  77 => 21,  69 => 15,  67 => 14,  63 => 13,  56 => 8,  54 => 7,  50 => 6,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"_default/macro.tabler.twig\" as tabler %}
<ul class=\"navbar-nav\">
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"/sgraffito\">
\t\t\t<span class=\"nav-link-title\">
\t\t\t\t{{ tabler.icon('palette') }}
\t\t\t\t{% trans \"Sgraffito\" %}
\t\t\t</span>
\t\t</a>
\t</li>
\t<li class=\"nav-item dropdown\">
\t\t<a class=\"nav-link dropdown-toggle\" href=\"#navbar-base\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\">
\t\t\t<span class=\"nav-link-title\">{{ tabler.icon('building-community') }}
\t\t\t\t{% trans \"Locations\" %}
\t\t\t</span>
\t\t</a>
\t\t<div class=\"dropdown-menu\">
\t\t\t<div class=\"dropdown-menu-columns\">
\t\t\t\t<div class=\"dropdown-menu-column\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/province\">
\t\t\t\t\t\t{{ tabler.icon('location-pin') }}
\t\t\t\t\t\t{% trans \"Provinces\" %}
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/building\">
\t\t\t\t\t\t{{ tabler.icon('building') }}
\t\t\t\t\t\t{% trans \"Buildings\" %}
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"/actor\">
\t\t\t<span class=\"nav-link-title\">
\t\t\t\t{{ tabler.icon('users') }}
\t\t\t\t{% trans \"Actors\" %}
\t\t\t</span>
\t\t</a>
\t</li>
\t<li class=\"nav-item dropdown\">
\t\t<a class=\"nav-link dropdown-toggle\" href=\"#navbar-base\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\">
\t\t\t<span class=\"nav-link-title\">{{ tabler.icon('list') }}
\t\t\t\t{% trans \"General objects\" %}
\t\t\t</span>
\t\t</a>
\t\t<div class=\"dropdown-menu\">
\t\t\t<div class=\"dropdown-menu-columns\">
\t\t\t\t<div class=\"dropdown-menu-column\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/building/type\">
\t\t\t\t\t\t{{ tabler.icon('building') }}
\t\t\t\t\t\t{% trans 'Building type' %}
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/province\">
\t\t\t\t\t\t{{ tabler.icon('location-pin') }}
\t\t\t\t\t\t{% trans \"To Add\" %}
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"/subscription\">
\t\t\t<span class=\"nav-link-title\">
\t\t\t\t{{ tabler.icon('photo-scan') }}
\t\t\t\t{% trans \"Media\" %}
\t\t\t</span>
\t\t</a>
\t</li>
</ul>

", "_default/menu.admin.twig", "/web/roanbuysse/buysse.io/sgraffitobelgium/app/admin/template/_default/menu.admin.twig");
    }
}
