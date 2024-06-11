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

/* /api.html.twig */
class __TwigTemplate_37c85158023b4db0028d5f33746485f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/api.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/api.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/api.html.twig", 1);
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

        echo "Hem";
        
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
        echo "
<h1>API</h1>

<p>Här är webplatsens olika JSON routes</p>

<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api/quote");
        echo "\" target=\"_blank\">api/quote</a>
<p>Ger slumpmässiga citat, datum och tidsstämpel</p>


<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck");
        echo "\" target=\"_blank\">api_deck</a>
<p>Ger en kortlek sorterad i färg och värde</p>
<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_shuffle");
        echo "\" target=\"_blank\">api_shuffle</a>
<p>Ger en blandad kortlek</p>
<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_draw_post");
        echo "\" target=\"_blank\">api_draw</a>
<p>Den här länken visar en kortlek för api. Här nedan kan du använda dessa knappar att antingen dra ett kort eller välja antal ur api kortleken. väljer du fler så dras samma antal varje gång du uppdaterar sidan</p>

<div class=\"flex-container\">
    <form method=\"post\" action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_draw_post");
        echo "\">
        <p>
            <input type=\"submit\" name=\"dra_kort\" value=\"dra\"
                ";
        // line 27
        echo "            >
        </p>
    </form>
    <form method=\"post\" action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_deck_draw_num");
        echo "\">
        <p>
            <input type=\"number\" name=\"api_num_cards\" min=\"1\" max=\"52\" value=\"1\">
            <input type=\"submit\" name=\"do_it\" value=\"dra fler kort\">
        </p>
    </form>
</div>

<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_game");
        echo "\" target=\"_blank\">api_game21</a>
<p>Här kan du se aktuell ställning i kortspelet 21</p>

<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_library_books");
        echo "\" target=\"_blank\">api_library_books</a>
<p>Här ser du alla böcker som finns sparade i biblioteket</p>

<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_library_book", ["isbn" => "9789155042486"]);
        echo "\" target=\"_blank\">exampel of api_library_book/9789155042486</a>
<p>här är en exempel länk för att se en bok i bibloteket. I detta fall Slumpens Musik med hjälp av ISBN nr. testa att byt ut ISBN i url om du vill se en annan bok.</p>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/api.html.twig";
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
        return array (  153 => 44,  147 => 41,  141 => 38,  130 => 30,  125 => 27,  119 => 23,  112 => 19,  107 => 17,  102 => 15,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Hem{% endblock %}

{% block main %}

<h1>API</h1>

<p>Här är webplatsens olika JSON routes</p>

<a href=\"{{ path('api/quote') }}\" target=\"_blank\">api/quote</a>
<p>Ger slumpmässiga citat, datum och tidsstämpel</p>


<a href=\"{{ path('api_deck') }}\" target=\"_blank\">api_deck</a>
<p>Ger en kortlek sorterad i färg och värde</p>
<a href=\"{{ path('api_shuffle') }}\" target=\"_blank\">api_shuffle</a>
<p>Ger en blandad kortlek</p>
<a href=\"{{ path('api_deck_draw_post') }}\" target=\"_blank\">api_draw</a>
<p>Den här länken visar en kortlek för api. Här nedan kan du använda dessa knappar att antingen dra ett kort eller välja antal ur api kortleken. väljer du fler så dras samma antal varje gång du uppdaterar sidan</p>

<div class=\"flex-container\">
    <form method=\"post\" action=\"{{ path('api_deck_draw_post') }}\">
        <p>
            <input type=\"submit\" name=\"dra_kort\" value=\"dra\"
                {# onClick=\"this.form.action='{{ path('api_deck_draw_post') }}';\" #}
            >
        </p>
    </form>
    <form method=\"post\" action=\"{{ path('api_deck_draw_num') }}\">
        <p>
            <input type=\"number\" name=\"api_num_cards\" min=\"1\" max=\"52\" value=\"1\">
            <input type=\"submit\" name=\"do_it\" value=\"dra fler kort\">
        </p>
    </form>
</div>

<a href=\"{{ path('api_game') }}\" target=\"_blank\">api_game21</a>
<p>Här kan du se aktuell ställning i kortspelet 21</p>

<a href=\"{{ path('api_library_books') }}\" target=\"_blank\">api_library_books</a>
<p>Här ser du alla böcker som finns sparade i biblioteket</p>

<a href=\"{{ path('api_library_book', {'isbn': '9789155042486'})}}\" target=\"_blank\">exampel of api_library_book/9789155042486</a>
<p>här är en exempel länk för att se en bok i bibloteket. I detta fall Slumpens Musik med hjälp av ISBN nr. testa att byt ut ISBN i url om du vill se en annan bok.</p>

{% endblock %}
", "/api.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/api.html.twig");
    }
}
