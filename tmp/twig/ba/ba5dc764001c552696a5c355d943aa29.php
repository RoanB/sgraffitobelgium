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

/* _default/layout.login.twig */
class __TwigTemplate_bc91b295f52845befd2e7092526bc0ea extends Template
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
\t<script src=\"/jquery/dist/jquery.min.js\"></script>
</head>
<body>
\t<div class=\"page page-center\">
\t\t<div class=\"page-wrapper\">
\t\t\t<div class=\"page-body\">
\t\t\t\t<div class=\"container container-tight py-5\">
\t\t\t\t\t";
        // line 38
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 39
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
        // line 48
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
            // line 49
            yield "\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "id", [], "any", false, false, false, 49) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 49), "language", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49))) {
                // line 50
                yield "\t\t\t\t\t\t\t\t\t\t<strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name_short", [], "any", false, false, false, 50)), "html", null, true);
                yield "</strong>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 52
                yield "\t\t\t\t\t\t\t\t\t\t<a class=\"link-secondary\" href=\"?language=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name_short", [], "any", false, false, false, 52), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name_short", [], "any", false, false, false, 52)), "html", null, true);
                yield "</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 54
            yield "\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 54) == false)) {
                yield " - ";
            }
            // line 55
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
        // line 56
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

    // line 38
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
        return "_default/layout.login.twig";
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
        return array (  186 => 38,  176 => 29,  153 => 56,  139 => 55,  134 => 54,  126 => 52,  120 => 50,  117 => 49,  100 => 48,  89 => 39,  87 => 38,  77 => 30,  75 => 29,  46 => 2,  44 => 1,);
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

\t<script src=\"/jquery/dist/jquery.min.js\"></script>
</head>
<body>
\t<div class=\"page page-center\">
\t\t<div class=\"page-wrapper\">
\t\t\t<div class=\"page-body\">
\t\t\t\t<div class=\"container container-tight py-5\">
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
", "_default/layout.login.twig", "/web/roanbuysse/buysse.io/sgraffitobelgium/app/admin/template/_default/layout.login.twig");
    }
}
