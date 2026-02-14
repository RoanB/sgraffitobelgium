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

/* index.twig */
class __TwigTemplate_72da31ac2c2df03557cf16ccfadc4d61 extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "_default/layout.base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["tabler"] = $this->macros["tabler"] = $this->load("_default/macro.tabler.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->load("_default/layout.base.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "\t<div class=\"container container-tight py-4\">
\t\t<div class=\"text-center mb-4\">
\t\t\t<img src=\"/sgraffito.png\" width=\"40\" height=\"40\" alt=\"Tabler\" class=\"\">
\t\t\t<span class=\"h2\">";
        // line 11
        echo $context['env']['translation']->translate("We will create some kind of nice dashboard at the end");
        yield "</span>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">
\t\tdocument.getElementById('password-toggle').addEventListener('click', function() {
\t\t\tpassword_input = document.getElementById('password-input');
\t\t\tif (password_input.type === 'password') {
\t\t\t\tpassword_input.type = 'text';
\t\t\t} else {
\t\t\t\tpassword_input.type = 'password';
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
        return "index.twig";
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
        return array (  77 => 11,  72 => 8,  65 => 7,  55 => 4,  50 => 1,  48 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '_default/layout.base.twig' %}
{% import \"_default/macro.tabler.twig\" as tabler %}

{% block sidebar %}
{% endblock sidebar %}

{% block content %}
\t<div class=\"container container-tight py-4\">
\t\t<div class=\"text-center mb-4\">
\t\t\t<img src=\"/sgraffito.png\" width=\"40\" height=\"40\" alt=\"Tabler\" class=\"\">
\t\t\t<span class=\"h2\">{% trans 'We will create some kind of nice dashboard at the end' %}</span>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">
\t\tdocument.getElementById('password-toggle').addEventListener('click', function() {
\t\t\tpassword_input = document.getElementById('password-input');
\t\t\tif (password_input.type === 'password') {
\t\t\t\tpassword_input.type = 'text';
\t\t\t} else {
\t\t\t\tpassword_input.type = 'password';
\t\t\t}
\t\t});
\t</script>
{% endblock content %}


", "index.twig", "/web/roanbuysse/buysse.io/sgraffitobelgium/app/admin/template/index.twig");
    }
}
