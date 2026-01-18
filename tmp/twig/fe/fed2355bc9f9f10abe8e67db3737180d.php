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
class __TwigTemplate_93b33b46c336a13505aa859b5240587d extends Template
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
\t<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t<!-- Dashboard Core -->
\t<link href=\"/tabler--core/dist/css/tabler.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"/tabler-icons.min.css\"/>
\t<link rel=\"stylesheet\" href=\"/select2/dist/css/select2.min.css\" />
\t<link rel=\"stylesheet\" href=\"/select2-bootstrap-5-theme/dist/select2-bootstrap-5-theme.min.css\" />
\t<link rel=\"stylesheet\" href=\"/intl-tel-input/build/css/intlTelInput.css\">
\t<link rel=\"stylesheet\" href=\"/base.css?v=20250612\">
\t<title>When digital invoicing meets ancient Egypt</title>
\t<script src=\"/jquery/dist/jquery.min.js\"></script>

</head>
<body>
\t<div class=\"page page-center\">
\t\t<div class=\"container container-tight py-4\">
\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t<a href=\"\" class=\"navbar-brand navbar-brand-autodark\">
\t\t\t\t\t<img src=\"/peppyrus.png\" style=\"height: 48px;\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t";
        // line 25
        if ((($context["environment"] ?? null) != "production")) {
            // line 26
            yield "\t\t\t\t<div class=\"alert alert-warning text-center rounded-0 text-center d-block\" role=\"alert\">
\t\t\t\t\t<strong>";
            // line 27
            echo $context['env']['translation']->translate("Notice");
            yield "</strong>: ";
            echo $context['env']['translation']->translate("You are currently working in a test environment.");
            // line 28
            yield "\t\t\t\t\t<br>
\t\t\t\t\t";
            // line 29
            echo $context['env']['translation']->translate("All data and actions performed here are for testing purposes only and will not affect the live system.");
            // line 30
            yield "\t\t\t\t</div>
\t\t\t";
        }
        // line 32
        yield "\t\t\t";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 33
        yield "\t\t</div>
\t</div>
\t<script src=\"/tigron-confirm-modal/js/bootstrap.confirm-modal.js\"></script>
\t<script src=\"/select2/dist/js/select2.full.min.js\"></script>
\t<script src=\"/tabler--core/dist/js/tabler.min.js\"></script>
\t<script src=\"/intl-tel-input/build/js/intlTelInput.min.js\"></script>
\t<script src=\"/base.js?v=20250612\"></script>
\t<script>
\t\tfunction toggle_password() {
\t\t\tif (\$('#password').attr('type') == 'password') {
\t\t\t\t\$('#password').attr('type', 'text');
\t\t\t\t\$('#show_password').html('";
        // line 44
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 44, $this->getSourceContext())->macro_icon(...["eye-off"]);
        yield "');
\t\t\t} else {
\t\t\t\t\$('#password').attr('type', 'password');
\t\t\t\t\$('#show_password').html('";
        // line 47
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 47, $this->getSourceContext())->macro_icon(...["eye"]);
        yield "');
\t\t\t}
\t\t}
\t</script>
\t";
        // line 51
        if (((($context["environment"] ?? null) != "development") &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, true, false, 51), "admin_user", [], "any", true, true, false, 51))) {
            // line 52
            yield "\t\t<script>
\t\t\t(function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
\t\t\t\tw[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
\t\t\t\tm=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
\t\t\t})(window,document,'script','https://mautic.tigron.be/mtc.js','mt');

\t\t\t";
            // line 58
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, true, false, 58), "user", [], "any", true, true, false, 58)) {
                // line 59
                yield "\t\t\t\tmt('send', 'pageview', {firstname: '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 59), "user", [], "any", false, false, false, 59), "firstname", [], "any", false, false, false, 59), "html", null, true);
                yield "', lastname: '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 59), "user", [], "any", false, false, false, 59), "lastname", [], "any", false, false, false, 59), "html", null, true);
                yield "', email: '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "session", [], "any", false, false, false, 59), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59), "html", null, true);
                yield "', tags: 'peppyrus' });
\t\t\t";
            } else {
                // line 61
                yield "\t\t\t\tmt('send', 'pageview', { tags: 'peppyrus' });
\t\t\t";
            }
            // line 63
            yield "\t\t</script>
\t";
        }
        // line 65
        yield "</body>
</html>";
        yield from [];
    }

    // line 32
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
        return array (  153 => 32,  147 => 65,  143 => 63,  139 => 61,  129 => 59,  127 => 58,  119 => 52,  117 => 51,  110 => 47,  104 => 44,  91 => 33,  88 => 32,  84 => 30,  82 => 29,  79 => 28,  75 => 27,  72 => 26,  70 => 25,  45 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"_default/macro.tabler.twig\" as tabler %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t<!-- Dashboard Core -->
\t<link href=\"/tabler--core/dist/css/tabler.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"/tabler-icons.min.css\"/>
\t<link rel=\"stylesheet\" href=\"/select2/dist/css/select2.min.css\" />
\t<link rel=\"stylesheet\" href=\"/select2-bootstrap-5-theme/dist/select2-bootstrap-5-theme.min.css\" />
\t<link rel=\"stylesheet\" href=\"/intl-tel-input/build/css/intlTelInput.css\">
\t<link rel=\"stylesheet\" href=\"/base.css?v=20250612\">
\t<title>When digital invoicing meets ancient Egypt</title>
\t<script src=\"/jquery/dist/jquery.min.js\"></script>

</head>
<body>
\t<div class=\"page page-center\">
\t\t<div class=\"container container-tight py-4\">
\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t<a href=\"\" class=\"navbar-brand navbar-brand-autodark\">
\t\t\t\t\t<img src=\"/peppyrus.png\" style=\"height: 48px;\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t{% if environment != 'production' %}
\t\t\t\t<div class=\"alert alert-warning text-center rounded-0 text-center d-block\" role=\"alert\">
\t\t\t\t\t<strong>{% trans 'Notice' %}</strong>: {% trans 'You are currently working in a test environment.' %}
\t\t\t\t\t<br>
\t\t\t\t\t{% trans 'All data and actions performed here are for testing purposes only and will not affect the live system.' %}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t{% block content %}{% endblock %}
\t\t</div>
\t</div>
\t<script src=\"/tigron-confirm-modal/js/bootstrap.confirm-modal.js\"></script>
\t<script src=\"/select2/dist/js/select2.full.min.js\"></script>
\t<script src=\"/tabler--core/dist/js/tabler.min.js\"></script>
\t<script src=\"/intl-tel-input/build/js/intlTelInput.min.js\"></script>
\t<script src=\"/base.js?v=20250612\"></script>
\t<script>
\t\tfunction toggle_password() {
\t\t\tif (\$('#password').attr('type') == 'password') {
\t\t\t\t\$('#password').attr('type', 'text');
\t\t\t\t\$('#show_password').html('{{ tabler.icon(\"eye-off\") }}');
\t\t\t} else {
\t\t\t\t\$('#password').attr('type', 'password');
\t\t\t\t\$('#show_password').html('{{ tabler.icon(\"eye\") }}');
\t\t\t}
\t\t}
\t</script>
\t{% if environment != 'development' and env.session.admin_user is not defined %}
\t\t<script>
\t\t\t(function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
\t\t\t\tw[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
\t\t\t\tm=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
\t\t\t})(window,document,'script','https://mautic.tigron.be/mtc.js','mt');

\t\t\t{% if env.session.user is defined %}
\t\t\t\tmt('send', 'pageview', {firstname: '{{ env.session.user.firstname }}', lastname: '{{ env.session.user.lastname }}', email: '{{ env.session.user.email }}', tags: 'peppyrus' });
\t\t\t{% else %}
\t\t\t\tmt('send', 'pageview', { tags: 'peppyrus' });
\t\t\t{% endif %}
\t\t</script>
\t{% endif %}
</body>
</html>", "_default/layout.login.twig", "/web/roanbuysse/buysse.io/vvsjongeren/app/front/template/_default/layout.login.twig");
    }
}
