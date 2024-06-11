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

/* /lucky.html.twig */
class __TwigTemplate_e041e99f3b12b700e602e0d27c5b62e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/lucky.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/lucky.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/lucky.html.twig", 1);
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

        echo "Lucky Number";
        
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
<div class=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\">
    <h1>Lucky?</h1>
    ";
        // line 9
        if (((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 9, $this->source); })()) == "loser")) {
            // line 10
            echo "        <p>Testa din lycka! kasta tärningen och se om du kan få en sexa.</p>
    ";
        } elseif ((        // line 11
(isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 11, $this->source); })()) == "winner")) {
            // line 12
            echo "        <h1> GRATTIS!!! DU FICK EN SEXA!!!!</h1>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 15, $this->source); })()) == 1)) {
            echo " <div class=\"dice\">&#9856;</div> 
    ";
        } elseif ((        // line 16
(isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 16, $this->source); })()) == 2)) {
            echo " <div class=\"dice\">&#9857;</div>
    ";
        } elseif ((        // line 17
(isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 17, $this->source); })()) == 3)) {
            echo " <div class=\"dice\">&#9858;</div>
    ";
        } elseif ((        // line 18
(isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 18, $this->source); })()) == 4)) {
            echo " <div class=\"dice\">&#9859;</div>
    ";
        } elseif ((        // line 19
(isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 19, $this->source); })()) == 5)) {
            echo " <div class=\"dice\">&#9860;</div>
    ";
        } elseif ((        // line 20
(isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 20, $this->source); })()) == 6)) {
            echo " <div class=\"dice\">&#9861;</div>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        if (((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 23, $this->source); })()) == "loser")) {
            // line 24
            echo "        <p>Ledsen, ingen sexa. testa igen..</p>
    ";
        } elseif ((        // line 25
(isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 25, $this->source); })()) == "winner")) {
            // line 26
            echo "        <p>Kan du få en till sexa???</p>
    ";
        }
        // line 28
        echo "
    <button class=\"button\" role=\"button\">
        <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lucky");
        echo "\">Kasta tärningen</a>
    </button>
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
        return "/lucky.html.twig";
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
        return array (  153 => 30,  149 => 28,  145 => 26,  143 => 25,  140 => 24,  138 => 23,  135 => 22,  130 => 20,  126 => 19,  122 => 18,  118 => 17,  114 => 16,  110 => 15,  107 => 14,  103 => 12,  101 => 11,  98 => 10,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Lucky Number{% endblock %}

{% block main %}

<div class=\"{{ tag }}\">
    <h1>Lucky?</h1>
    {% if tag == 'loser' %}
        <p>Testa din lycka! kasta tärningen och se om du kan få en sexa.</p>
    {% elseif tag == 'winner' %}
        <h1> GRATTIS!!! DU FICK EN SEXA!!!!</h1>
    {% endif %}

    {% if number == 1 %} <div class=\"dice\">&#9856;</div> 
    {% elseif number == 2 %} <div class=\"dice\">&#9857;</div>
    {% elseif number == 3 %} <div class=\"dice\">&#9858;</div>
    {% elseif number == 4 %} <div class=\"dice\">&#9859;</div>
    {% elseif number == 5 %} <div class=\"dice\">&#9860;</div>
    {% elseif number == 6 %} <div class=\"dice\">&#9861;</div>
    {% endif %}

    {% if tag == 'loser' %}
        <p>Ledsen, ingen sexa. testa igen..</p>
    {% elseif tag == 'winner' %}
        <p>Kan du få en till sexa???</p>
    {% endif %}

    <button class=\"button\" role=\"button\">
        <a href=\"{{ path('lucky') }}\">Kasta tärningen</a>
    </button>
</div>
{% endblock %}
", "/lucky.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/lucky.html.twig");
    }
}
