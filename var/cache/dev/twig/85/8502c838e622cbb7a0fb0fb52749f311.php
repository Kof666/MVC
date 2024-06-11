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

/* library/view_all.html.twig */
class __TwigTemplate_27e1ac0bc03c312afd4ffdadf2ab1c8d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/view_all.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/view_all.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "library/view_all.html.twig", 1);
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

        echo "Library";
        
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
<h2>Lista över böcker</h2>
";
        // line 8
        echo twig_include($this->env, $context, "card/flash.html.twig");
        echo "
<table>
    <tr>
        <th>Id</th>
        <th>Titel</th>
        <th>ISBN</th>
        <th>Författare</th>
        <th>Visa</th>
        <th>Uppdatera</th>
        <th>Radera</th>
    </tr>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["library"]) || array_key_exists("library", $context) ? $context["library"] : (function () { throw new RuntimeError('Variable "library" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 20
            echo "    <tr>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "any", false, false, false, 21));
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getTitle", [], "any", false, false, false, 22));
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getIsbn", [], "any", false, false, false, 23));
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 24));
            echo "</td>
        <td>
            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library_by_id", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-circle-info\"></i></a>
        </td>
        <td>
            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library_update_get", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
        </td>
        <td>
            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library_delete_by_id", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-trash\"></i></a>
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</table>

<button class=\"button\" role=\"button\">
    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library_index");
        echo "\">back</a>
</button>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "library/view_all.html.twig";
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
        return array (  157 => 39,  152 => 36,  142 => 32,  136 => 29,  130 => 26,  125 => 24,  121 => 23,  117 => 22,  113 => 21,  110 => 20,  106 => 19,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Library{% endblock %}

{% block main %}

<h2>Lista över böcker</h2>
{{ include('card/flash.html.twig') }}
<table>
    <tr>
        <th>Id</th>
        <th>Titel</th>
        <th>ISBN</th>
        <th>Författare</th>
        <th>Visa</th>
        <th>Uppdatera</th>
        <th>Radera</th>
    </tr>
{% for book in library %}
    <tr>
        <td>{{ book.getId|e }}</td>
        <td>{{ book.getTitle|e }}</td>
        <td>{{ book.getIsbn|e }}</td>
        <td>{{ book.author|e }}</td>
        <td>
            <a href=\"{{ path('library_by_id', {'id': book.getId})}}\"><i class=\"fa-solid fa-circle-info\"></i></a>
        </td>
        <td>
            <a href=\"{{ path('library_update_get', {'id': book.getId})}}\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
        </td>
        <td>
            <a href=\"{{ path('library_delete_by_id', {'id': book.getId})}}\"><i class=\"fa-solid fa-trash\"></i></a>
        </td>
    </tr>
{% endfor %}
</table>

<button class=\"button\" role=\"button\">
    <a href=\"{{ path('library_index')}}\">back</a>
</button>
{% endblock %}
", "library/view_all.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/library/view_all.html.twig");
    }
}
