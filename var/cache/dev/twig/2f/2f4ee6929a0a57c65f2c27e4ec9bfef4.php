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

/* card/draw_play.html.twig */
class __TwigTemplate_1fd44d056a13882a32df77fe6bb7378e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/draw_play.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/draw_play.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/draw_play.html.twig", 1);
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
    <h1>Dra ett kort [draw_play]</h1>

    <p>Du drog detta kort</p>

    ";
        // line 9
        echo twig_include($this->env, $context, "flash.html.twig");
        echo "
    
    ";
        // line 16
        echo "    
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
    
    ";
        // line 35
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "card/draw_play.html.twig";
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
        return array (  106 => 35,  98 => 26,  92 => 23,  86 => 20,  80 => 16,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block main %}
<div class=\"pig\">
    <h1>Dra ett kort [draw_play]</h1>

    <p>Du drog detta kort</p>

    {{ include('flash.html.twig') }}
    
    {# <p>
        {% for value in diceValues %}
            <span class=\"dice\">{{ value }}</span>
        {% endfor %}
    </p> #}
    
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
    
    {# <p>You are playing with {{ pigDices }} dices.</p>
    
    <p>Round: {{ pigRound }}</p>
    <p>Total: {{ pigTotal }}</p> #}
</div>
{% endblock %}", "card/draw_play.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/card/draw_play.html.twig");
    }
}
