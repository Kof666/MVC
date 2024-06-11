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

/* card/draw_cards.html.twig */
class __TwigTemplate_24bcc71f4174bad25fce0f082604082f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/draw_cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/draw_cards.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/draw_cards.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["deck"]) || array_key_exists("deck", $context) ? $context["deck"] : (function () { throw new RuntimeError('Variable "deck" does not exist.', 6, $this->source); })()));
        echo "
    ";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 7, $this->source); })()));
        echo "
    <ul class=\"ul-game\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["str_deck"]) || array_key_exists("str_deck", $context) ? $context["str_deck"] : (function () { throw new RuntimeError('Variable "str_deck" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 10
            echo "        <div class=\"card\">
            <li class=\"card-topp\">";
            // line 11
            echo twig_escape_filter($this->env, $context["card"], "html", null, true);
            echo "</li>
            <li class=\"card-mid\"><img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bth.png"), "html", null, true);
            echo "\" alt=\"bth-logo\"></li>
            <li class=\"card-bottom\">";
            // line 13
            echo twig_escape_filter($this->env, $context["card"], "html", null, true);
            echo "</li>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ul>



    <form method=\"post\" action=\"\">
        <p>
            <input type=\"submit\" name=\"dra kort\" value=\"draw\"
                onClick=\"this.form.action='";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_post");
        echo "';\"
            >
            <input type=\"submit\" name=\"draw_shuffle\" value=\"blanda leken\"
                onClick=\"this.form.action='";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_shuffle");
        echo "';\"
            >
        </p>
    </form>

    <p>Vill du dra fler kort?</p>
    <form method=\"post\" action=\"\">
        <input type=\"number\" name=\"num_cards\" min=\"1\" max=\"52\" value=\"1\">
        <input type=\"submit\" name=\"do_it\" value=\"dra korten\">
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
        return "card/draw_cards.html.twig";
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
        return array (  120 => 26,  114 => 23,  105 => 16,  96 => 13,  92 => 12,  88 => 11,  85 => 10,  81 => 9,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block main %}
<div class=\"game\">
    <h1>Dra ett kort</h1>
    {{ dump(deck) }}
    {{ dump(num) }}
    <ul class=\"ul-game\">
        {% for card in str_deck %}
        <div class=\"card\">
            <li class=\"card-topp\">{{ card }}</li>
            <li class=\"card-mid\"><img src=\"{{ asset('img/bth.png') }}\" alt=\"bth-logo\"></li>
            <li class=\"card-bottom\">{{ card }}</li>
        </div>
        {% endfor %}
    </ul>



    <form method=\"post\" action=\"\">
        <p>
            <input type=\"submit\" name=\"dra kort\" value=\"draw\"
                onClick=\"this.form.action='{{ path('draw_post') }}';\"
            >
            <input type=\"submit\" name=\"draw_shuffle\" value=\"blanda leken\"
                onClick=\"this.form.action='{{ path('draw_shuffle') }}';\"
            >
        </p>
    </form>

    <p>Vill du dra fler kort?</p>
    <form method=\"post\" action=\"\">
        <input type=\"number\" name=\"num_cards\" min=\"1\" max=\"52\" value=\"1\">
        <input type=\"submit\" name=\"do_it\" value=\"dra korten\">
    </form>
</div>
{% endblock %}
", "card/draw_cards.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/card/draw_cards.html.twig");
    }
}
