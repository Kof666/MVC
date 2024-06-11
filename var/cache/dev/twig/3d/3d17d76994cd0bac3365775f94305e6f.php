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

/* base.html.twig */
class __TwigTemplate_51d8245071b8ecb66969689691076354 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <script src=\"https://kit.fontawesome.com/4c8b6b3b50.js\" crossorigin=\"anonymous\"></script>
        <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/dice2.jpg"), "html", null, true);
        echo "\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        ";
        // line 16
        echo "    </head>
    <body>
        <header>
            <h1>MVC Rapporter</h1>
            <nav>
                <ul>
                    <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("me");
        echo "\">Hem</a></li>
                    <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">| Om</a></li>
                    <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report");
        echo "\">| Rapporter</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lucky");
        echo "\">| Lucky number</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api");
        echo "\">| api</a></li>
                    <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pig_start");
        echo "\">| Pig Game</a></li>
                    <li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_start");
        echo "\">| Card Game</a></li>
                    <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_21");
        echo "\">| Kortspelet 21</a></li>
                    <li><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library_index");
        echo "\">| Library</a></li>
                    <li><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("metrics");
        echo "\">| Metrics</a></li>
                </ul>
            </nav>
            ";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "        </header>
        <main>
            ";
        // line 37
        $this->displayBlock('main', $context, $blocks);
        // line 38
        echo "        </main>        
        <footer>
                <div class=\"flex-footer\">
                    <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bth.png"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bth.png"), "html", null, true);
        echo "\" alt=\"bth-logo\">
                    </a>
                </div>
                <div class=\"flex-footer\">
                    <h2>Länkar till denna webplats</h2>
                    <ul class=\"ul_foot\">
                        <li class=\"ul_foot\">";
        // line 48
        echo twig_include($this->env, $context, "card/session/session_link.html.twig");
        echo "</li>
                    </ul>
                    <h3>Test Rapporter</h3>
                    <ul class=\"ul_foot\">
                        <li class=\"ul_foot\"><a href=\"../docs/coverage/index.html\" target=\"_blank\">coverage</a></li>
                        <li class=\"ul_foot\"><a href=\"../docs/metrics/index.html\" target=\"_blank\">metrics</a></li>
                    </ul>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p>Denna sidan är Copyright &copy; av Kristoffer Berg.</p>                </div class=\"flex-footer\">
                <div>
                    <h2>länkar</h2>
                    <a href=\"https://github.com/dbwebb-se/mvc\" target=\"_blank\">Kursens repo</a><br>
                    <a href=\"https://github.com/Kof666/MVC\" target=\"_blank\">Mitt git repo</a><br>
                    <a href=\"https://www.bth.se/\" target=\"_blank\">BTH</a><br>
                </div>
        </footer>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Välkomen!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  236 => 37,  218 => 34,  205 => 9,  195 => 8,  176 => 5,  143 => 48,  134 => 42,  130 => 41,  125 => 38,  123 => 37,  119 => 35,  117 => 34,  111 => 31,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  67 => 16,  64 => 11,  62 => 8,  58 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Välkomen!{% endblock %}</title>
        <script src=\"https://kit.fontawesome.com/4c8b6b3b50.js\" crossorigin=\"anonymous\"></script>
        <link rel=\"icon\" href=\"{{ asset('img/dice2.jpg') }}\">
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {# {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
            {% block importmap %}{{ importmap('app') }}{% endblock %}
        {% endblock %} #}
    </head>
    <body>
        <header>
            <h1>MVC Rapporter</h1>
            <nav>
                <ul>
                    <li><a href=\"{{ path('me') }}\">Hem</a></li>
                    <li><a href=\"{{ path('about') }}\">| Om</a></li>
                    <li><a href=\"{{ path('report') }}\">| Rapporter</a></li>
                    <li><a href=\"{{ path('lucky') }}\">| Lucky number</a></li>
                    <li><a href=\"{{ path('api') }}\">| api</a></li>
                    <li><a href=\"{{ path('pig_start') }}\">| Pig Game</a></li>
                    <li><a href=\"{{ path('card_start') }}\">| Card Game</a></li>
                    <li><a href=\"{{ path('card_21') }}\">| Kortspelet 21</a></li>
                    <li><a href=\"{{ path('library_index') }}\">| Library</a></li>
                    <li><a href=\"{{ path('metrics') }}\">| Metrics</a></li>
                </ul>
            </nav>
            {% block header %}{% endblock %}
        </header>
        <main>
            {% block main %}{% endblock %}
        </main>        
        <footer>
                <div class=\"flex-footer\">
                    <a href=\"{{ asset('img/bth.png') }}\">
                        <img src=\"{{ asset('img/bth.png') }}\" alt=\"bth-logo\">
                    </a>
                </div>
                <div class=\"flex-footer\">
                    <h2>Länkar till denna webplats</h2>
                    <ul class=\"ul_foot\">
                        <li class=\"ul_foot\">{{ include('card/session/session_link.html.twig') }}</li>
                    </ul>
                    <h3>Test Rapporter</h3>
                    <ul class=\"ul_foot\">
                        <li class=\"ul_foot\"><a href=\"../docs/coverage/index.html\" target=\"_blank\">coverage</a></li>
                        <li class=\"ul_foot\"><a href=\"../docs/metrics/index.html\" target=\"_blank\">metrics</a></li>
                    </ul>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p>Denna sidan är Copyright &copy; av Kristoffer Berg.</p>                </div class=\"flex-footer\">
                <div>
                    <h2>länkar</h2>
                    <a href=\"https://github.com/dbwebb-se/mvc\" target=\"_blank\">Kursens repo</a><br>
                    <a href=\"https://github.com/Kof666/MVC\" target=\"_blank\">Mitt git repo</a><br>
                    <a href=\"https://www.bth.se/\" target=\"_blank\">BTH</a><br>
                </div>
        </footer>
    </body>
</html>
", "base.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/base.html.twig");
    }
}
