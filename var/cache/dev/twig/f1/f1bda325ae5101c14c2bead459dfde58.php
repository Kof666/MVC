<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* card/test/test_page.html.twig */
class __TwigTemplate_194ccaa4ecc7fc8ab6a61ab540d3c8e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/test/test_page.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/test/test_page.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/test/test_page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<h1>Testsida för kort klasser</h1>
";
        // line 5
        echo twig_include($this->env, $context, "card/card_nav.html.twig");
        echo "
<div class=\"game\">
    ";
        // line 30
        echo "</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "card/test/test_page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  76 => 30,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block main %}
<h1>Testsida för kort klasser</h1>
{{ include('card/card_nav.html.twig') }}
<div class=\"game\">
    {# <p>Här har jag i test routen skapat olika instanser av dom olika klasserna och kallat på olika metoder/funktioner för att se att dessa funkar. Nedan är utskrifter/var_dumps för att kontrollera att det jag vill ska hända händer</p>
    <p>Här testas klassen Card som ges 3 instanser</p>
    <p>{{ dump(cards) }}</p>
    
    <p>
    {{ cards }}
    </p>
    <p>Här testas klassen DeckOfCards</p>
    <p>deck1 bör innehålla en oblandad kortlek</p>
    <p>{{ dump(deckGraphic) }}</p>
    
    <p>deck2 bör innehålla en blandad kortlek</p>
    <p>{{ dump(deck2) }}</p>
    
    <p>Här skapas en tredje kortlek deck3 som delar ut 2 kort. Den bör vara oblandad och sakna dom två första korten</p>
    <p>{{ dump(deck3) }}</p>
    
    <p>Här skapas deck4 som delar ut 2 kort och blandas om vilket bör resultera i att den har 52 kort blandade</p>
    <p>{{ dump(deck4) }}</p>
    
    <p>Här skapas \$deck5 som delar ut två kort till \$hand via klassen CardHand</p>
    <p>{{ dump(deck5) }}</p>
    <p>{{ dump(hand) }}</p> #}
</div>

{% endblock %}", "card/test/test_page.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/card/test/test_page.html.twig");
    }
}
