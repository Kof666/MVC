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

/* card21/start_21_surface.html.twig */
class __TwigTemplate_11eca5cdf57bb38ea88904867e29a06d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card21/start_21_surface.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card21/start_21_surface.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card21/start_21_surface.html.twig", 1);
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

        // line 8
        echo "<div class=\"game\">
    ";
        // line 9
        echo twig_include($this->env, $context, "card21/card21_score.html.twig");
        echo "
    <div class=\"card_flex\">
        <div class=\"game_info\">
            <h2>House</h2>
            <p>points: ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["bank_score"]) || array_key_exists("bank_score", $context) ? $context["bank_score"] : (function () { throw new RuntimeError('Variable "bank_score" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</p>
        </div>
        <ul class=\"ul-game\">
            <div class=\"back-card\"></div>
        ";
        // line 17
        if ( !(null === (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 17, $this->source); })()))) {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 19
                echo "            <div class=\"card\">
                <li class=\"card-topp\">";
                // line 20
                echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                echo "</li>
                <li class=\"card-mid\"><img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bth.png"), "html", null, true);
                echo "\" alt=\"bth-logo\"></li>
                <li class=\"card-bottom\">";
                // line 22
                echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                echo "</li>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
        }
        // line 26
        echo "        </ul>
    </div>
    <div class=\"space\">
        ";
        // line 29
        echo twig_include($this->env, $context, "card/flash.html.twig");
        echo "
    </div>
    <div class=\"card_flex\">
        <div class=\"game_info\">
            <h2>Player</h2>
            <p>points: ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["player_score"]) || array_key_exists("player_score", $context) ? $context["player_score"] : (function () { throw new RuntimeError('Variable "player_score" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</p>
        </div>
        <ul class=\"ul-game\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["playerHand"]) || array_key_exists("playerHand", $context) ? $context["playerHand"] : (function () { throw new RuntimeError('Variable "playerHand" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 38
            echo "                <div class=\"card\">
                    <li class=\"card-topp\">";
            // line 39
            echo twig_escape_filter($this->env, $context["card"], "html", null, true);
            echo "</li>
                    <li class=\"card-mid\"><img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bth.png"), "html", null, true);
            echo "\" alt=\"bth-logo\"></li>
                    <li class=\"card-bottom\">";
            // line 41
            echo twig_escape_filter($this->env, $context["card"], "html", null, true);
            echo "</li>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </ul>
    </div>
    <form class=\"form_card21\" method=\"post\" action=\"\">
        <p>
            <input type=\"submit\" name=\"quit\" value=\"quit\"
            onClick=\"this.form.action='";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_21");
        echo "';\"
            >
            <input type=\"submit\" name=\"done\" value=\"Stand\"
                onClick=\"this.form.action='";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bankHand_21");
        echo "';\"
            >
            <input type=\"submit\" name=\"draw_card\" value=\"draw\"
                onClick=\"this.form.action='";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("start_21_post");
        echo "';\"
            >
        </p>
    </form>
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
        return "card21/start_21_surface.html.twig";
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
        return array (  197 => 55,  191 => 52,  185 => 49,  178 => 44,  169 => 41,  165 => 40,  161 => 39,  158 => 38,  154 => 37,  148 => 34,  140 => 29,  135 => 26,  132 => 25,  123 => 22,  119 => 21,  115 => 20,  112 => 19,  107 => 18,  105 => 17,  98 => 13,  91 => 9,  88 => 8,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Card21 Game{% endblock %}

{% block main %}
{# {{ dump(game) }}
{{ dump(draw) }} #}
<div class=\"game\">
    {{ include('card21/card21_score.html.twig') }}
    <div class=\"card_flex\">
        <div class=\"game_info\">
            <h2>House</h2>
            <p>points: {{ bank_score }}</p>
        </div>
        <ul class=\"ul-game\">
            <div class=\"back-card\"></div>
        {% if game is not null %}
        {% for card in game %}
            <div class=\"card\">
                <li class=\"card-topp\">{{ card }}</li>
                <li class=\"card-mid\"><img src=\"{{ asset('img/bth.png') }}\" alt=\"bth-logo\"></li>
                <li class=\"card-bottom\">{{ card }}</li>
            </div>
        {% endfor %}
        {% endif %}
        </ul>
    </div>
    <div class=\"space\">
        {{ include('card/flash.html.twig') }}
    </div>
    <div class=\"card_flex\">
        <div class=\"game_info\">
            <h2>Player</h2>
            <p>points: {{ player_score }}</p>
        </div>
        <ul class=\"ul-game\">
            {% for card in playerHand %}
                <div class=\"card\">
                    <li class=\"card-topp\">{{ card }}</li>
                    <li class=\"card-mid\"><img src=\"{{ asset('img/bth.png') }}\" alt=\"bth-logo\"></li>
                    <li class=\"card-bottom\">{{ card }}</li>
                </div>
            {% endfor %}
        </ul>
    </div>
    <form class=\"form_card21\" method=\"post\" action=\"\">
        <p>
            <input type=\"submit\" name=\"quit\" value=\"quit\"
            onClick=\"this.form.action='{{ path('card_21') }}';\"
            >
            <input type=\"submit\" name=\"done\" value=\"Stand\"
                onClick=\"this.form.action='{{ path('bankHand_21') }}';\"
            >
            <input type=\"submit\" name=\"draw_card\" value=\"draw\"
                onClick=\"this.form.action='{{ path('start_21_post') }}';\"
            >
        </p>
    </form>
</div>

{% endblock %}
", "card21/start_21_surface.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/card21/start_21_surface.html.twig");
    }
}
