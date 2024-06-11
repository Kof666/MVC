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

/* pig/test/roll_dices.html.twig */
class __TwigTemplate_c65a04848023d3b9b1acaff9361cb4ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pig/test/roll_dices.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pig/test/roll_dices.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pig/test/roll_dices.html.twig", 1);
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
        echo "<h1>Roll many dice!</h1>

<p>You rolled ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["dice_count"]) || array_key_exists("dice_count", $context) ? $context["dice_count"] : (function () { throw new RuntimeError('Variable "dice_count" does not exist.', 6, $this->source); })()), "html", null, true);
        echo " dices. Here's the values of the dices.</p>

<div class=\"flex-container\">
    <ul class=\"dice-ul\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diceRoll"]) || array_key_exists("diceRoll", $context) ? $context["diceRoll"] : (function () { throw new RuntimeError('Variable "diceRoll" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["roll"]) {
            // line 11
            echo "            <li><div class=\"dice\">";
            echo twig_escape_filter($this->env, $context["roll"], "html", null, true);
            echo "</div></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roll'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ul>
</div>


<p>Try to roll
    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_roll_num_dice", ["num" => 5]);
        echo "\">5</a>
    or
    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_roll_num_dice", ["num" => 10]);
        echo "\">10</a>
    dices...
</p>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pig/test/roll_dices.html.twig";
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
        return array (  104 => 20,  99 => 18,  92 => 13,  83 => 11,  79 => 10,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block main %}
<h1>Roll many dice!</h1>

<p>You rolled {{ dice_count}} dices. Here's the values of the dices.</p>

<div class=\"flex-container\">
    <ul class=\"dice-ul\">
        {% for roll in diceRoll %}
            <li><div class=\"dice\">{{ roll }}</div></li>
        {% endfor %}
    </ul>
</div>


<p>Try to roll
    <a href=\"{{path('test_roll_num_dice', {num: 5})}}\">5</a>
    or
    <a href=\"{{path('test_roll_num_dice', {num: 10})}}\">10</a>
    dices...
</p>

{% endblock %}", "pig/test/roll_dices.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/pig/test/roll_dices.html.twig");
    }
}
