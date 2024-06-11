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

/* card/home.html.twig */
class __TwigTemplate_b93370b3939449fc1b3710ab33944e17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Card Game";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "<div class=\"game\">
    <h1>Startsida för kortlek</h1>
    ";
        // line 8
        echo twig_include($this->env, $context, "card/card_nav.html.twig");
        echo "

    <p>
        Här kan man hitta lite olika slags hantering av klasserna som hanterar kort. klicka runt och testa.
    </p>
    <h2>Kort klasser</h2>
    <p>
        Nu ska vi se om jag får till begreppen rätt här. Jag har i alla fall gjort några olika klasser som hanterar korten på den här sidan. Först och främst har vi klassen Card, denna klass hanterar värden för varje kort. Varje kort har två olika värden, value som ger kortets värde och suit som ger kortets färg. För att utskriften ska kunna bli trevligare har jag även gjort en klass CardGraphic som ärver Cards egenskaper och specialiserar/lägger till en snyggare utf8 utskrift av suit. Alltså istället för att det skrivs ut hearts så får man utf8 tecknet för ett hjärta. 
    </p>
    <p>
        Utöver dessa klasser så har jag gjort två till som hanterar korten, DeckOfCards och CardHand. Hittills (kmom02) har jag egentligen bara skapat CardHand, det slutade med att jag hanterade uppgifterna utan att behöva använda denna klass än men misstänker att den kan komma väl till pass i senare kursmoment. Som det är nu, att Card skickas som argument i någon funktion tyder väl om jag förstått det hela på att förhållandet kan liknas vid aggretion men vi får väl se om detta kanske ändras i senare skede. DeckOfCards hanterar som namnet kanske avslöjar en kortlek, alltså ett flertal (i detta fall 52) CardGraphic instanser. Eftersom CardGraphic skapas i DeckOfCards konstruktor och därmed ger en stark relation mellan klasserna så skulle jag vilja kalla deras relation för komposition. 
    </p>
    <p>
        Även om jag är osäker på aggretion och kompositions förhållandet så kan man ju ändå tycka att principen att ett kort från kortleken inte kan existera om kortleken försvinner men att kortet fortfarande kan existera även när en giv(CardHand) slutar existera. Den förhållningen stärker ju tankarna kring att förhållandet mellan klasserna kan stämma så som jag beskrivit ovan. Här nedan ser ni även mitt försök till UML diagram över klasserna som jag förstår det just nu. Detta kan ju kanske ändras i senare kursmoment även det.
    </p>
    <img class=\"uml_pic\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/UML_Cards.png"), "html", null, true);
        echo "\" width=\"600\" alt=\"uml\">
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "card/home.html.twig";
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
        return array (  110 => 23,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Card Game{% endblock %}

{% block main %}
<div class=\"game\">
    <h1>Startsida för kortlek</h1>
    {{ include('card/card_nav.html.twig') }}

    <p>
        Här kan man hitta lite olika slags hantering av klasserna som hanterar kort. klicka runt och testa.
    </p>
    <h2>Kort klasser</h2>
    <p>
        Nu ska vi se om jag får till begreppen rätt här. Jag har i alla fall gjort några olika klasser som hanterar korten på den här sidan. Först och främst har vi klassen Card, denna klass hanterar värden för varje kort. Varje kort har två olika värden, value som ger kortets värde och suit som ger kortets färg. För att utskriften ska kunna bli trevligare har jag även gjort en klass CardGraphic som ärver Cards egenskaper och specialiserar/lägger till en snyggare utf8 utskrift av suit. Alltså istället för att det skrivs ut hearts så får man utf8 tecknet för ett hjärta. 
    </p>
    <p>
        Utöver dessa klasser så har jag gjort två till som hanterar korten, DeckOfCards och CardHand. Hittills (kmom02) har jag egentligen bara skapat CardHand, det slutade med att jag hanterade uppgifterna utan att behöva använda denna klass än men misstänker att den kan komma väl till pass i senare kursmoment. Som det är nu, att Card skickas som argument i någon funktion tyder väl om jag förstått det hela på att förhållandet kan liknas vid aggretion men vi får väl se om detta kanske ändras i senare skede. DeckOfCards hanterar som namnet kanske avslöjar en kortlek, alltså ett flertal (i detta fall 52) CardGraphic instanser. Eftersom CardGraphic skapas i DeckOfCards konstruktor och därmed ger en stark relation mellan klasserna så skulle jag vilja kalla deras relation för komposition. 
    </p>
    <p>
        Även om jag är osäker på aggretion och kompositions förhållandet så kan man ju ändå tycka att principen att ett kort från kortleken inte kan existera om kortleken försvinner men att kortet fortfarande kan existera även när en giv(CardHand) slutar existera. Den förhållningen stärker ju tankarna kring att förhållandet mellan klasserna kan stämma så som jag beskrivit ovan. Här nedan ser ni även mitt försök till UML diagram över klasserna som jag förstår det just nu. Detta kan ju kanske ändras i senare kursmoment även det.
    </p>
    <img class=\"uml_pic\" src=\"{{ asset('img/UML_Cards.png') }}\" width=\"600\" alt=\"uml\">
</div>
{% endblock %}
", "card/home.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/card/home.html.twig");
    }
}
