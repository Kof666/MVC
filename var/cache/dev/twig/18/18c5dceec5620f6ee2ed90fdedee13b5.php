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

/* card21/card21_score.html.twig */
class __TwigTemplate_2650840dfc2f93dfacef4d51bb4a371e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card21/card21_score.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card21/card21_score.html.twig"));

        // line 1
        echo "<div class=\"scoure_view\">
    <p>Round: ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["rounds"]) || array_key_exists("rounds", $context) ? $context["rounds"] : (function () { throw new RuntimeError('Variable "rounds" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</p>
    <p>House: ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["bank_rounds"]) || array_key_exists("bank_rounds", $context) ? $context["bank_rounds"] : (function () { throw new RuntimeError('Variable "bank_rounds" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</p>
    <p>Player: ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["player_rounds"]) || array_key_exists("player_rounds", $context) ? $context["player_rounds"] : (function () { throw new RuntimeError('Variable "player_rounds" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</p>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "card21/card21_score.html.twig";
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
        return array (  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"scoure_view\">
    <p>Round: {{ rounds }}</p>
    <p>House: {{ bank_rounds }}</p>
    <p>Player: {{ player_rounds }}</p>
</div>", "card21/card21_score.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/card21/card21_score.html.twig");
    }
}
