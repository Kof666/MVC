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

/* pig/play.html.twig */
class __TwigTemplate_fc9098ad08b374fefa2a3c3e4a43c7cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pig/play.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pig/play.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pig/play.html.twig", 1);
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
        echo "<div class=\"pig\">
    <h1>Pig game [PLAYING]</h1>

    <p>Roll the dices or save the points you have.</p>

    ";
        // line 9
        echo twig_include($this->env, $context, "flash.html.twig");
        echo "
    
    <p>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diceValues"]) || array_key_exists("diceValues", $context) ? $context["diceValues"] : (function () { throw new RuntimeError('Variable "diceValues" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 13
            echo "            <span class=\"dice\">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </p>
    
    <form method=\"post\" action=\"\">
        <p>
            <input type=\"submit\" name=\"roll\" value=\"Roll\"
                onClick=\"this.form.action='";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pig_roll");
        echo "';\"
            >
            <input type=\"submit\" name=\"save\" value=\"Save\"
                onClick=\"this.form.action='";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pig_save");
        echo "';\"
            >
            <input type=\"submit\" name=\"restart\" value=\"Restart\"
                onClick=\"this.form.action='";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pig_init_get");
        echo "';this.form.method='get';\"
            >
        </p>
    </form>
    
    <p>You are playing with ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["pigDices"]) || array_key_exists("pigDices", $context) ? $context["pigDices"] : (function () { throw new RuntimeError('Variable "pigDices" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " dices.</p>
    
    <p>Round: ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["pigRound"]) || array_key_exists("pigRound", $context) ? $context["pigRound"] : (function () { throw new RuntimeError('Variable "pigRound" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "</p>
    <p>Total: ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["pigTotal"]) || array_key_exists("pigTotal", $context) ? $context["pigTotal"] : (function () { throw new RuntimeError('Variable "pigTotal" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</p>
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
        return "pig/play.html.twig";
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
        return array (  130 => 34,  126 => 33,  121 => 31,  113 => 26,  107 => 23,  101 => 20,  94 => 15,  85 => 13,  81 => 12,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block main %}
<div class=\"pig\">
    <h1>Pig game [PLAYING]</h1>

    <p>Roll the dices or save the points you have.</p>

    {{ include('flash.html.twig') }}
    
    <p>
        {% for value in diceValues %}
            <span class=\"dice\">{{ value }}</span>
        {% endfor %}
    </p>
    
    <form method=\"post\" action=\"\">
        <p>
            <input type=\"submit\" name=\"roll\" value=\"Roll\"
                onClick=\"this.form.action='{{ path('pig_roll') }}';\"
            >
            <input type=\"submit\" name=\"save\" value=\"Save\"
                onClick=\"this.form.action='{{ path('pig_save') }}';\"
            >
            <input type=\"submit\" name=\"restart\" value=\"Restart\"
                onClick=\"this.form.action='{{ path('pig_init_get') }}';this.form.method='get';\"
            >
        </p>
    </form>
    
    <p>You are playing with {{ pigDices }} dices.</p>
    
    <p>Round: {{ pigRound }}</p>
    <p>Total: {{ pigTotal }}</p>
</div>
{% endblock %}", "pig/play.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/pig/play.html.twig");
    }
}
