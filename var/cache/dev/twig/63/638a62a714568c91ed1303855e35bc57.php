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

/* card/draw.html.twig */
class __TwigTemplate_fe81ba3ddfe61cef896b9ffa68bf63b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/draw.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/draw.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/draw.html.twig", 1);
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
        echo "<div class=\"game\">
    <h1>Dra ett kort</h1>
    ";
        // line 6
        echo twig_include($this->env, $context, "card/card_nav.html.twig");
        echo "
    <p>Det är ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["card_count"]) || array_key_exists("card_count", $context) ? $context["card_count"] : (function () { throw new RuntimeError('Variable "card_count" does not exist.', 7, $this->source); })()), "html", null, true);
        echo " kort kvar i leken</p>
    ";
        // line 8
        echo twig_include($this->env, $context, "card/flash.html.twig");
        echo "

    <ul class=\"ul-game\">
        <div class=\"back-card\"></div>
    ";
        // line 12
        if ( !(null === (isset($context["str_draw"]) || array_key_exists("str_draw", $context) ? $context["str_draw"] : (function () { throw new RuntimeError('Variable "str_draw" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["str_draw"]) || array_key_exists("str_draw", $context) ? $context["str_draw"] : (function () { throw new RuntimeError('Variable "str_draw" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 14
                echo "        <div class=\"card\">
            <li class=\"card-topp\">";
                // line 15
                echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                echo "</li>
            <li class=\"card-mid\"><img src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bth.png"), "html", null, true);
                echo "\" alt=\"bth-logo\"></li>
            <li class=\"card-bottom\">";
                // line 17
                echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                echo "</li>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        }
        // line 21
        echo "    </ul>

    <form method=\"post\" action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_cards");
        echo "\">
        <p>
            <input type=\"submit\" name=\"dra_kort\" value=\"dra\"
                onClick=\"this.form.action='";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_post");
        echo "';\"
            >
            <input type=\"submit\" name=\"blanda_lek\" value=\"blanda leken\"
                onClick=\"this.form.action='";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_shuffle");
        echo "';\"
            >
            <input type=\"number\" name=\"num_cards\" min=\"1\" max=\"52\" value=\"1\">
            <input type=\"submit\" name=\"do_it\" value=\"dra fler kort\">
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
        return "card/draw.html.twig";
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
        return array (  133 => 29,  127 => 26,  121 => 23,  117 => 21,  114 => 20,  105 => 17,  101 => 16,  97 => 15,  94 => 14,  89 => 13,  87 => 12,  80 => 8,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block main %}
<div class=\"game\">
    <h1>Dra ett kort</h1>
    {{ include('card/card_nav.html.twig') }}
    <p>Det är {{ card_count }} kort kvar i leken</p>
    {{ include('card/flash.html.twig') }}

    <ul class=\"ul-game\">
        <div class=\"back-card\"></div>
    {% if str_draw is not null %}
    {% for card in str_draw %}
        <div class=\"card\">
            <li class=\"card-topp\">{{ card }}</li>
            <li class=\"card-mid\"><img src=\"{{ asset('img/bth.png') }}\" alt=\"bth-logo\"></li>
            <li class=\"card-bottom\">{{ card }}</li>
        </div>
    {% endfor %}
    {% endif %}
    </ul>

    <form method=\"post\" action=\"{{ path('draw_cards') }}\">
        <p>
            <input type=\"submit\" name=\"dra_kort\" value=\"dra\"
                onClick=\"this.form.action='{{ path('draw_post') }}';\"
            >
            <input type=\"submit\" name=\"blanda_lek\" value=\"blanda leken\"
                onClick=\"this.form.action='{{ path('draw_shuffle') }}';\"
            >
            <input type=\"number\" name=\"num_cards\" min=\"1\" max=\"52\" value=\"1\">
            <input type=\"submit\" name=\"do_it\" value=\"dra fler kort\">
        </p>
    </form>
</div>
{% endblock %}
", "card/draw.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/card/draw.html.twig");
    }
}
