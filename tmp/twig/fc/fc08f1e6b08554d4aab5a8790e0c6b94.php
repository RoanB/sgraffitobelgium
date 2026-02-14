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

/* login.twig */
class __TwigTemplate_d2696435dda2d14ca7c26073ac6e5933 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "_default/layout.login.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $macros["tabler"] = $this->macros["tabler"] = $this->load("_default/macro.tabler.twig", 1)->unwrap();
        // line 2
        $this->parent = $this->load("_default/layout.login.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "sticky_session", [], "any", false, false, false, 4), "message", [], "any", false, false, false, 4) == "user_created")) {
            // line 5
            yield "\t\t";
            yield $macros["tabler"]->getTemplateForMacro("macro_alert", $context, 5, $this->getSourceContext())->macro_alert(...["success", (($this->env->getFilter('trans')->getCallable()($this->env, "Your user was successfully created.") . " ") . $this->env->getFilter('trans')->getCallable()($this->env, "You will receive an e-mail to verify your account."))]);
            yield "
\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["env"] ?? null), "sticky_session", [], "any", false, false, false, 6), "message", [], "any", false, false, false, 6) == "verify_success")) {
            // line 7
            yield "\t\t";
            yield $macros["tabler"]->getTemplateForMacro("macro_alert", $context, 7, $this->getSourceContext())->macro_alert(...["success", (($this->env->getFilter('trans')->getCallable()($this->env, "Your account was successfully verified.") . " ") . $this->env->getFilter('trans')->getCallable()($this->env, "You are able to sign in now!"))]);
            yield "
\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["env"] ?? null), "sticky_session", [], "any", false, false, false, 8), "message", [], "any", false, false, false, 8) == "password_reset_success")) {
            // line 9
            yield "\t\t";
            yield $macros["tabler"]->getTemplateForMacro("macro_alert", $context, 9, $this->getSourceContext())->macro_alert(...["success", (($this->env->getFilter('trans')->getCallable()($this->env, "Your new password was successfully stored.") . " ") . $this->env->getFilter('trans')->getCallable()($this->env, "You are able to sign in now!"))]);
            yield "
\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 10
($context["env"] ?? null), "sticky_session", [], "any", false, false, false, 10), "message", [], "any", false, false, false, 10) == "invite_not_active")) {
            // line 11
            yield "\t\t";
            yield $macros["tabler"]->getTemplateForMacro("macro_alert", $context, 11, $this->getSourceContext())->macro_alert(...["warning", (($this->env->getFilter('trans')->getCallable()($this->env, "It seems that the invite you are trying to access is not active anymore.") . " ") . $this->env->getFilter('trans')->getCallable()($this->env, "Please sign in below!"))]);
            yield "
\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 12
($context["env"] ?? null), "sticky_session", [], "any", false, false, false, 12), "message", [], "any", false, false, false, 12) == "invite_accepted")) {
            // line 13
            yield "\t\t";
            yield $macros["tabler"]->getTemplateForMacro("macro_alert", $context, 13, $this->getSourceContext())->macro_alert(...["success", (($this->env->getFilter('trans')->getCallable()($this->env, "You successfully accepted the invitation.") . " ") . $this->env->getFilter('trans')->getCallable()($this->env, "Sign in to access the organization!"))]);
            yield "
\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 14
($context["env"] ?? null), "sticky_session", [], "any", false, false, false, 14), "message", [], "any", false, false, false, 14) == "invite_rejected")) {
            // line 15
            yield "\t\t";
            yield $macros["tabler"]->getTemplateForMacro("macro_alert", $context, 15, $this->getSourceContext())->macro_alert(...["success", $this->env->getFilter('trans')->getCallable()($this->env, "You successfully declined the invitation.")]);
            yield "
\t";
        }
        // line 17
        yield "
\t<div class=\"text-center mb-4\">
\t\t<div class=\"navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3\">
\t\t\t<a href=\"/\">
\t\t\t\t<img src=\"/sgraffito.png\" class=\"navbar-brand-image\" style=\"height: 100px;\">
\t\t\t</a>
\t\t\t<h1>
\t\t\t\tSgraffito Belgium
\t\t\t</h1>
\t\t</div>
\t</div>

\t<div class=\"card card-md\">
\t\t<div class=\"card-body py-4 p-sm-5\">
\t\t\t<h2 class=\"text-center mb-4\">";
        // line 31
        echo $context['env']['translation']->translate("Sign in to the admin interface");
        yield "</h2>
\t\t\t";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", true, true, false, 32) || CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "login", [], "any", true, true, false, 32))) {
            // line 33
            yield "\t\t\t\t";
            yield $macros["tabler"]->getTemplateForMacro("macro_alert", $context, 33, $this->getSourceContext())->macro_alert(...["danger", $this->env->getFilter('trans')->getCallable()($this->env, "Invalid e-mail or password.")]);
            yield "
\t\t\t";
        }
        // line 35
        yield "\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"email\" class=\"form-label\">";
        // line 37
        echo $context['env']['translation']->translate("E-mail address");
        yield "</label>
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" aria-describedby=\"email\" placeholder=\"your@email.com\" name=\"login\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "post", [], "any", false, true, false, 38), "login", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "post", [], "any", false, false, false, 38), "login", [], "any", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "cookie", [], "any", false, false, false, 38), "sgraffito_login", [], "any", false, false, false, 38))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "cookie", [], "any", false, false, false, 38), "sgraffito_login", [], "any", false, false, false, 38))), "html", null, true);
        yield "\"";
        if (Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "post", [], "any", false, true, false, 38), "login", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "post", [], "any", false, false, false, 38), "login", [], "any", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "cookie", [], "any", false, false, false, 38), "sgraffito_login", [], "any", false, false, false, 38))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "cookie", [], "any", false, false, false, 38), "sgraffito_login", [], "any", false, false, false, 38))))) {
            yield " autofocus";
        }
        yield ">
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t<label class=\"form-label\">
\t\t\t\t\t";
        // line 42
        echo $context['env']['translation']->translate("Password");
        // line 43
        yield "\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"input-group input-group-flat\">
\t\t\t\t\t\t<input name=\"password\" id=\"password-input\" type=\"password\" class=\"form-control\" placeholder=\"";
        // line 45
        echo $context['env']['translation']->translate("Your password");
        yield "\" id=\"password\" autocomplete=\"off\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "post", [], "any", false, true, false, 45), "login", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "post", [], "any", false, false, false, 45), "login", [], "any", false, false, false, 45), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "cookie", [], "any", false, false, false, 45), "sgraffito_login", [], "any", false, false, false, 45))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["env"] ?? null), "cookie", [], "any", false, false, false, 45), "sgraffito_login", [], "any", false, false, false, 45))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " autofocus";
        }
        yield ">
\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"link-secondary\" id=\"show-password\">
\t\t\t\t\t\t\t\t";
        // line 48
        yield $macros["tabler"]->getTemplateForMacro("macro_icon", $context, 48, $this->getSourceContext())->macro_icon(...["eye"]);
        yield "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 59
        yield "\t\t\t\t<div class=\"form-footer\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary w-100\">";
        // line 60
        echo $context['env']['translation']->translate("Sign in");
        yield "</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">
\t\t\$('#show-password').click(function (e) {
\t\t\te.preventDefault();
\t\t\tpassword_input = \$('#password-input');

\t\t\tif (password_input[0].type === 'password') {
\t\t\t\tpassword_input[0].type = 'text';
\t\t\t} else {
\t\t\t\tpassword_input[0].type = 'password';
\t\t\t}
\t\t});
\t</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login.twig";
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
        return array (  179 => 60,  176 => 59,  168 => 48,  158 => 45,  154 => 43,  152 => 42,  141 => 38,  137 => 37,  133 => 35,  127 => 33,  125 => 32,  121 => 31,  105 => 17,  99 => 15,  97 => 14,  92 => 13,  90 => 12,  85 => 11,  83 => 10,  78 => 9,  76 => 8,  71 => 7,  69 => 6,  64 => 5,  61 => 4,  54 => 3,  49 => 2,  47 => 1,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \"_default/macro.tabler.twig\" as tabler %}
{% extends \"_default/layout.login.twig\" %}
{% block content %}
\t{% if env.sticky_session.message == 'user_created' %}
\t\t{{ tabler.alert('success', 'Your user was successfully created.'|trans ~ ' ' ~ 'You will receive an e-mail to verify your account.'|trans) }}
\t{% elseif env.sticky_session.message == 'verify_success' %}
\t\t{{ tabler.alert('success', 'Your account was successfully verified.'|trans ~ ' ' ~ 'You are able to sign in now!'|trans) }}
\t{% elseif env.sticky_session.message == 'password_reset_success' %}
\t\t{{ tabler.alert('success', 'Your new password was successfully stored.'|trans ~ ' ' ~ 'You are able to sign in now!'|trans) }}
\t{% elseif env.sticky_session.message == 'invite_not_active' %}
\t\t{{ tabler.alert('warning', 'It seems that the invite you are trying to access is not active anymore.'|trans ~ ' ' ~ 'Please sign in below!'|trans) }}
\t{% elseif env.sticky_session.message == 'invite_accepted' %}
\t\t{{ tabler.alert('success', 'You successfully accepted the invitation.'|trans ~ ' ' ~ 'Sign in to access the organization!'|trans) }}
\t{% elseif env.sticky_session.message == 'invite_rejected' %}
\t\t{{ tabler.alert('success', 'You successfully declined the invitation.'|trans) }}
\t{% endif %}

\t<div class=\"text-center mb-4\">
\t\t<div class=\"navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3\">
\t\t\t<a href=\"/\">
\t\t\t\t<img src=\"/sgraffito.png\" class=\"navbar-brand-image\" style=\"height: 100px;\">
\t\t\t</a>
\t\t\t<h1>
\t\t\t\tSgraffito Belgium
\t\t\t</h1>
\t\t</div>
\t</div>

\t<div class=\"card card-md\">
\t\t<div class=\"card-body py-4 p-sm-5\">
\t\t\t<h2 class=\"text-center mb-4\">{% trans 'Sign in to the admin interface' %}</h2>
\t\t\t{% if errors.password is defined or errors.login is defined %}
\t\t\t\t{{ tabler.alert('danger', 'Invalid e-mail or password.'|trans) }}
\t\t\t{% endif %}
\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<label for=\"email\" class=\"form-label\">{% trans 'E-mail address' %}</label>
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" aria-describedby=\"email\" placeholder=\"your@email.com\" name=\"login\" value=\"{{ env.post.login|default(env.cookie.sgraffito_login) }}\"{% if env.post.login|default(env.cookie.sgraffito_login) is empty %} autofocus{% endif %}>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t<label class=\"form-label\">
\t\t\t\t\t{% trans 'Password' %}
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"input-group input-group-flat\">
\t\t\t\t\t\t<input name=\"password\" id=\"password-input\" type=\"password\" class=\"form-control\" placeholder=\"{% trans 'Your password' %}\" id=\"password\" autocomplete=\"off\" {% if env.post.login|default(env.cookie.sgraffito_login) is not empty %} autofocus{% endif %}>
\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"link-secondary\" id=\"show-password\">
\t\t\t\t\t\t\t\t{{ tabler.icon('eye') }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{# <div class=\"mb-2\">
\t\t\t\t\t<label class=\"form-check\">
\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" name=\"remember\"{% if env.cookie.sgraffito_login is not empty %} checked{% endif %}>
\t\t\t\t\t\t<span class=\"form-check-label\">{% trans 'Remember me' %}</span>
\t\t\t\t\t</label>
\t\t\t\t</div> #}
\t\t\t\t<div class=\"form-footer\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary w-100\">{% trans 'Sign in' %}</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">
\t\t\$('#show-password').click(function (e) {
\t\t\te.preventDefault();
\t\t\tpassword_input = \$('#password-input');

\t\t\tif (password_input[0].type === 'password') {
\t\t\t\tpassword_input[0].type = 'text';
\t\t\t} else {
\t\t\t\tpassword_input[0].type = 'password';
\t\t\t}
\t\t});
\t</script>
{% endblock content %}
", "login.twig", "/web/roanbuysse/buysse.io/sgraffitobelgium/app/admin/template/login.twig");
    }
}
