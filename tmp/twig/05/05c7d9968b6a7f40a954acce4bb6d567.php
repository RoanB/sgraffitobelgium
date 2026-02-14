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

/* _default/layout.base.twig */
class __TwigTemplate_7758bd4f4704a2dc4db600fce6b133f8 extends Template
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
            'header_css' => [$this, 'block_header_css'],
            'header_title' => [$this, 'block_header_title'],
            'header_breadcrumb' => [$this, 'block_header_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $macros["tabler"] = $this->macros["tabler"] = $this->load("_default/macro.tabler.twig", 1)->unwrap();
        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>When digital invoicing meets ancient Egypt</title>

\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<meta http-equiv=\"Content-Language\" content=\"en\" />
\t<meta name=\"msapplication-TileColor\" content=\"#2d89ef\">
\t<meta name=\"theme-color\" content=\"#4188c9\">
\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\"/>
\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"HandheldFriendly\" content=\"True\">
\t<meta name=\"MobileOptimized\" content=\"320\">

\t<link rel=\"icon\" href=\"/favicon.ico\" type=\"image/x-icon\"/>
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/favicon.ico\" />

\t<link rel=\"stylesheet\" href=\"/tabler--core/dist/css/tabler.min.css\" />
\t<link rel=\"stylesheet\" href=\"/tabler--core/dist/css/tabler-flags.min.css\" />
\t<link rel=\"stylesheet\" href=\"/tabler--core/dist/css/tabler-payments.min.css\" />
\t<link rel=\"stylesheet\" href=\"/tabler--core/dist/css/tabler-vendors.min.css\" />
\t<link rel=\"stylesheet\" href=\"/tabler-icons.min.css\"/>
\t<link rel=\"stylesheet\" href=\"/base.css\" />

\t";
        // line 29
        yield from $this->unwrap()->yieldBlock('header_css', $context, $blocks);
        // line 30
        yield "
\t<link rel=\"stylesheet\" href=\"/base.css\" />
\t<script src=\"/jquery/dist/jquery.min.js\"></script>
\t<script src=\"/base.js\"></script>
</head>
<body>
\t<div class=\"page\">
\t\t<header class=\"navbar navbar-expand-md d-print-none\">
\t\t\t<div class=\"container-xl\">
\t\t\t\t<button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3\">
\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t<img src=\"/sgraffito.png\" class=\"navbar-brand-image\" style=\"height: 36px;\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"navbar-nav flex-row order-md-last\">
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link d-flex lh-1 p-0 px-2\" data-bs-toggle=\"dropdown\" aria-label=\"Open user menu\">
\t\t\t\t\t\t\t";
        // line 50
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "picture_id", [], "any", false, false, false, 50))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "\t\t\t\t\t\t\t\t<span class=\"avatar avatar-sm\" style=\"background-image: url('/customer/profile/personal?action=picture&tstamp=";
            yield $this->extensions['Skeleton\Template\Twig\Extension\Common']->date_filter($this->env, "now", "U");
            yield "');\"></span>
\t\t\t\t\t\t\t";
        } else {
            // line 53
            yield "\t\t\t\t\t\t\t\t<span class=\"avatar avatar-sm\">
\t\t\t\t\t\t\t\t\t";
            // line 54
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "admin", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "\t\t\t\t\t\t\t\t\t\t";
                yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 55, $this->getSourceContext())->macro_icon(...["user-cog"]);
                yield "
\t\t\t\t\t\t\t\t\t";
            } elseif (            // line 56
array_key_exists("admin_user", $context)) {
                // line 57
                yield "\t\t\t\t\t\t\t\t\t\t";
                yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 57, $this->getSourceContext())->macro_icon(...["user-share", "text-danger"]);
                yield "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 59
                yield "\t\t\t\t\t\t\t\t\t\t";
                yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 59, $this->getSourceContext())->macro_icon(...["user"]);
                yield "
\t\t\t\t\t\t\t\t\t";
            }
            // line 61
            yield "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
        }
        // line 63
        yield "
\t\t\t\t\t\t\t<div class=\"d-none d-xl-block ps-2\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
        // line 66
        if ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 66)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 66)))) {
            // line 67
            yield "\t\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 67), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 69
            yield "\t\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 69), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 69), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t";
        }
        // line 71
        yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-secondary\">
\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["organization"] ?? null), "name", [], "any", false, false, false, 74), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t";
        // line 75
        if (array_key_exists("admin_user", $context)) {
            // line 76
            yield "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"> (";
            yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 76, $this->getSourceContext())->macro_icon(...["user-gear"]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["admin_user"] ?? null), "email", [], "any", false, false, false, 76), "html", null, true);
            yield ")</span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 78
        yield "\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t";
        // line 83
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "admin", [], "any", false, false, false, 83) == 0)) {
            // line 84
            yield "\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/customer/profile\">
\t\t\t\t\t\t\t\t\t";
            // line 85
            yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 85, $this->getSourceContext())->macro_icon(...["id-badge"]);
            yield " ";
            echo $context['env']['translation']->translate("Profile");
            // line 86
            yield "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t";
        }
        // line 89
        yield "\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/login?action=logout\">
\t\t\t\t\t\t\t\t";
        // line 90
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 90, $this->getSourceContext())->macro_icon(...["logout"]);
        yield " ";
        echo $context['env']['translation']->translate("Log out");
        // line 91
        yield "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div id=\"navbar-menu\" class=\"collapse navbar-collapse\">
\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t";
        // line 97
        yield from $this->load("_default/menu.admin.twig", 97)->unwrap()->yield($context);
        // line 98
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<div class=\"page-wrapper\">
\t\t\t<div class=\"page-header d-print-none\">
\t\t\t\t<div class=\"container-xl\">
\t\t\t\t\t<div class=\"row g-2 align-items-center\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<h2 class=\"page-title\">
\t\t\t\t\t\t\t\t";
        // line 108
        yield from $this->unwrap()->yieldBlock('header_title', $context, $blocks);
        // line 109
        yield "\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"d-none d-md-inline-block col-md-8\" >
\t\t\t\t\t\t";
        // line 113
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "module", [], "any", false, false, false, 113), "get_module_path", [], "method", false, false, false, 113) != "/index")) {
            // line 114
            yield "\t\t\t\t\t\t\t<ol class=\"breadcrumb\" aria-label=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item ms-auto\">
\t\t\t\t\t\t\t\t\t<a href=\"/\">";
            // line 116
            echo $context['env']['translation']->translate("Home");
            yield "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 118
            yield from $this->unwrap()->yieldBlock('header_breadcrumb', $context, $blocks);
            // line 119
            yield "\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t";
        }
        // line 121
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"page-body\">
\t\t\t\t<div class=\"container-xl\">
\t\t\t\t\t";
        // line 128
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 129
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<footer class=\"footer footer-transparent d-print-none\">
\t\t\t<div class=\"container-xl\">
\t\t\t\t<div class=\"row text-center align-items-center flex-row-reverse\">
\t\t\t\t\t<div class=\"col-lg-auto ms-lg-auto\">
\t\t\t\t\t\t<ul class=\"list-inline list-inline-dots mb-0\">
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 139
            yield "\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "id", [], "any", false, false, false, 139) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 139), "language", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139))) {
                // line 140
                yield "\t\t\t\t\t\t\t\t\t\t<strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name_short", [], "any", false, false, false, 140)), "html", null, true);
                yield "</strong>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 142
                yield "\t\t\t\t\t\t\t\t\t\t<a class=\"link-secondary\" href=\"?language=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name_short", [], "any", false, false, false, 142), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name_short", [], "any", false, false, false, 142)), "html", null, true);
                yield "</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 144
            yield "\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 144) == false)) {
                yield " - ";
            }
            // line 145
            yield "\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-lg-auto mt-3 mt-lg-0\">
\t\t\t\t\t\t<ul class=\"list-inline list-inline-dots mb-0\">
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\tCopyright © 2025
\t\t\t\t\t\t\t\t<a href=\"http://sgraffitobelgium.be\" class=\"link-secondary\">Sgraffitobelgium</a>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>
\t<script src=\"/tabler--core/dist/js/tabler.min.js\"></script>
</body>
</html>
";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_default/layout.base.twig";
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
        return array (  380 => 128,  370 => 118,  360 => 108,  350 => 29,  327 => 146,  313 => 145,  308 => 144,  300 => 142,  294 => 140,  291 => 139,  274 => 138,  263 => 129,  261 => 128,  252 => 121,  248 => 119,  246 => 118,  241 => 116,  237 => 114,  235 => 113,  229 => 109,  227 => 108,  215 => 98,  213 => 97,  205 => 91,  201 => 90,  198 => 89,  193 => 86,  189 => 85,  186 => 84,  184 => 83,  177 => 78,  169 => 76,  167 => 75,  163 => 74,  158 => 71,  150 => 69,  144 => 67,  142 => 66,  137 => 63,  133 => 61,  127 => 59,  121 => 57,  119 => 56,  114 => 55,  112 => 54,  109 => 53,  103 => 51,  101 => 50,  79 => 30,  77 => 29,  48 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"_default/macro.tabler.twig\" as tabler %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>When digital invoicing meets ancient Egypt</title>

\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t<meta http-equiv=\"Content-Language\" content=\"en\" />
\t<meta name=\"msapplication-TileColor\" content=\"#2d89ef\">
\t<meta name=\"theme-color\" content=\"#4188c9\">
\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\"/>
\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"HandheldFriendly\" content=\"True\">
\t<meta name=\"MobileOptimized\" content=\"320\">

\t<link rel=\"icon\" href=\"/favicon.ico\" type=\"image/x-icon\"/>
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/favicon.ico\" />

\t<link rel=\"stylesheet\" href=\"/tabler--core/dist/css/tabler.min.css\" />
\t<link rel=\"stylesheet\" href=\"/tabler--core/dist/css/tabler-flags.min.css\" />
\t<link rel=\"stylesheet\" href=\"/tabler--core/dist/css/tabler-payments.min.css\" />
\t<link rel=\"stylesheet\" href=\"/tabler--core/dist/css/tabler-vendors.min.css\" />
\t<link rel=\"stylesheet\" href=\"/tabler-icons.min.css\"/>
\t<link rel=\"stylesheet\" href=\"/base.css\" />

\t{% block header_css %}{% endblock header_css %}

\t<link rel=\"stylesheet\" href=\"/base.css\" />
\t<script src=\"/jquery/dist/jquery.min.js\"></script>
\t<script src=\"/base.js\"></script>
</head>
<body>
\t<div class=\"page\">
\t\t<header class=\"navbar navbar-expand-md d-print-none\">
\t\t\t<div class=\"container-xl\">
\t\t\t\t<button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3\">
\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t<img src=\"/sgraffito.png\" class=\"navbar-brand-image\" style=\"height: 36px;\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"navbar-nav flex-row order-md-last\">
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-link d-flex lh-1 p-0 px-2\" data-bs-toggle=\"dropdown\" aria-label=\"Open user menu\">
\t\t\t\t\t\t\t{% if user.picture_id is not empty %}
\t\t\t\t\t\t\t\t<span class=\"avatar avatar-sm\" style=\"background-image: url('/customer/profile/personal?action=picture&tstamp={{ 'now'|date('U') }}');\"></span>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"avatar avatar-sm\">
\t\t\t\t\t\t\t\t\t{% if user.admin %}
\t\t\t\t\t\t\t\t\t\t{{ tabler.icon('user-cog') }}
\t\t\t\t\t\t\t\t\t{% elseif admin_user is defined %}
\t\t\t\t\t\t\t\t\t\t{{ tabler.icon('user-share', 'text-danger') }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{{ tabler.icon('user') }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<div class=\"d-none d-xl-block ps-2\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t{% if user.firstname is empty and user.lastname is empty %}
\t\t\t\t\t\t\t\t\t\t{{ user.email }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{{ user.firstname }} {{ user.lastname }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-secondary\">
\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t{{ organization.name}}
\t\t\t\t\t\t\t\t\t\t{% if admin_user is defined %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"> ({{ tabler.icon('user-gear') }} {{ admin_user.email }})</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t\t\t{% if user.admin == 0 %}
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/customer/profile\">
\t\t\t\t\t\t\t\t\t{{ tabler.icon('id-badge') }} {% trans \"Profile\" %}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/login?action=logout\">
\t\t\t\t\t\t\t\t{{ tabler.icon('logout') }} {% trans \"Log out\" %}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div id=\"navbar-menu\" class=\"collapse navbar-collapse\">
\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t{% include \"_default/menu.admin.twig\" %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<div class=\"page-wrapper\">
\t\t\t<div class=\"page-header d-print-none\">
\t\t\t\t<div class=\"container-xl\">
\t\t\t\t\t<div class=\"row g-2 align-items-center\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<h2 class=\"page-title\">
\t\t\t\t\t\t\t\t{% block header_title %}{% endblock header_title %}
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"d-none d-md-inline-block col-md-8\" >
\t\t\t\t\t\t{% if env.module.get_module_path() != \"/index\" %}
\t\t\t\t\t\t\t<ol class=\"breadcrumb\" aria-label=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item ms-auto\">
\t\t\t\t\t\t\t\t\t<a href=\"/\">{% trans \"Home\" %}</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% block header_breadcrumb %}{% endblock header_breadcrumb %}
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"page-body\">
\t\t\t\t<div class=\"container-xl\">
\t\t\t\t\t{% block content %}{% endblock content %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<footer class=\"footer footer-transparent d-print-none\">
\t\t\t<div class=\"container-xl\">
\t\t\t\t<div class=\"row text-center align-items-center flex-row-reverse\">
\t\t\t\t\t<div class=\"col-lg-auto ms-lg-auto\">
\t\t\t\t\t\t<ul class=\"list-inline list-inline-dots mb-0\">
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t{% for language in languages %}
\t\t\t\t\t\t\t\t\t{% if language.id == env.session.language.id %}
\t\t\t\t\t\t\t\t\t\t<strong>{{ language.name_short|upper }}</strong>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a class=\"link-secondary\" href=\"?language={{ language.name_short }}\">{{ language.name_short|upper }}</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if loop.last == false %} - {% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-lg-auto mt-3 mt-lg-0\">
\t\t\t\t\t\t<ul class=\"list-inline list-inline-dots mb-0\">
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\tCopyright © 2025
\t\t\t\t\t\t\t\t<a href=\"http://sgraffitobelgium.be\" class=\"link-secondary\">Sgraffitobelgium</a>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>
\t<script src=\"/tabler--core/dist/js/tabler.min.js\"></script>
</body>
</html>
", "_default/layout.base.twig", "/web/roanbuysse/buysse.io/sgraffitobelgium/app/admin/template/_default/layout.base.twig");
    }
}
