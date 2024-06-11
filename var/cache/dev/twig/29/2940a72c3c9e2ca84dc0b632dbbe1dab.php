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

/* card21/doc.html.twig */
class __TwigTemplate_26d65b044e2b1048de87d60e4dc76cf2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card21/doc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card21/doc.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card21/doc.html.twig", 1);
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

        echo "Card21 Game";
        
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
        echo "    <h1>Dokumentation</h1>

    <p>Detta är min dokumentation för applikationen card21 som är en enkel variant av kortspelet 21.</p>

    <h2>Klasser</h2>
    <h3>Card</h3>
    <p>Den här klassen hanterar varje kort i kortleken och har två stycken variabler, value och suit. Value är kortets värde och suit är kortets färg.</p>

    <h3>DeckOfCards</h3>
    <p>Den här klassen initierar och hanterar en kortlek som består av 52 stycken instanser av klassen GraphicCard. Den skapar en vanlig kortlek med 52 kort och har funktioner som till exempel shuffle som blandar leken, draw som drar översta kortet, cardCount som ger hur många kort som finns kvar.</p>
    
    <h3>CardGraphic</h3>
    <p>Den här klassen är en utveckling av klassen Card. Den ärver alltså Cards egenskaper och ger en specialisering i form av en snyggare utskrift av klassen Cards färg där suit får ett utf8 tecken som representerar färgen istället för en text.</p>
    
    <h3>Play21</h3>
    <p>Den här klassen hanterar själva spelet. När du initierar denna klassen skapas en kortlek som blandas och omgångar för spelare och bank nollställs. Här sparas även spelarens och bankens giv, playerHand och bankHand som varsin array. Här finns även spelets logik.</p>

    <h2>pseudokod</h2>
    <p>Nedan är pseudokod för flödet av spelet som jag tänkte mig det innan jag började programmera.</p>
    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/psuedokod.png"), "html", null, true);
        echo "\" width=\"600\" alt=\"uml\">

    <h2>Flödesschema</h2>
    <p>Här är det flödesschema jag gjorde innan programmeringen.</p>
    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/game21_v2.png"), "html", null, true);
        echo "\" width=\"600\" alt=\"uml\">

    <h2>UML klass diagram</h2>
    <p>Här är ett försök till ett klass diagram</p>
    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/card21UML.png"), "html", null, true);
        echo "\" width=\"600\" alt=\"uml\">


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "card21/doc.html.twig";
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
        return array (  123 => 33,  116 => 29,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Card21 Game{% endblock %}

{% block main %}
    <h1>Dokumentation</h1>

    <p>Detta är min dokumentation för applikationen card21 som är en enkel variant av kortspelet 21.</p>

    <h2>Klasser</h2>
    <h3>Card</h3>
    <p>Den här klassen hanterar varje kort i kortleken och har två stycken variabler, value och suit. Value är kortets värde och suit är kortets färg.</p>

    <h3>DeckOfCards</h3>
    <p>Den här klassen initierar och hanterar en kortlek som består av 52 stycken instanser av klassen GraphicCard. Den skapar en vanlig kortlek med 52 kort och har funktioner som till exempel shuffle som blandar leken, draw som drar översta kortet, cardCount som ger hur många kort som finns kvar.</p>
    
    <h3>CardGraphic</h3>
    <p>Den här klassen är en utveckling av klassen Card. Den ärver alltså Cards egenskaper och ger en specialisering i form av en snyggare utskrift av klassen Cards färg där suit får ett utf8 tecken som representerar färgen istället för en text.</p>
    
    <h3>Play21</h3>
    <p>Den här klassen hanterar själva spelet. När du initierar denna klassen skapas en kortlek som blandas och omgångar för spelare och bank nollställs. Här sparas även spelarens och bankens giv, playerHand och bankHand som varsin array. Här finns även spelets logik.</p>

    <h2>pseudokod</h2>
    <p>Nedan är pseudokod för flödet av spelet som jag tänkte mig det innan jag började programmera.</p>
    <img src=\"{{ asset('img/psuedokod.png') }}\" width=\"600\" alt=\"uml\">

    <h2>Flödesschema</h2>
    <p>Här är det flödesschema jag gjorde innan programmeringen.</p>
    <img src=\"{{ asset('img/game21_v2.png') }}\" width=\"600\" alt=\"uml\">

    <h2>UML klass diagram</h2>
    <p>Här är ett försök till ett klass diagram</p>
    <img src=\"{{ asset('img/card21UML.png') }}\" width=\"600\" alt=\"uml\">


{% endblock %}
", "card21/doc.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/card21/doc.html.twig");
    }
}
