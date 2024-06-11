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

/* /metrics.html.twig */
class __TwigTemplate_fe9d5fda46ae146d462bf20668c824fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/metrics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/metrics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/metrics.html.twig", 1);
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

        echo "Rapporter";
        
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
        echo "<div class=\"flex-container\">
    <div class=\"flex1\">
        <ul>
            <li><a href=\"#Introduktion\">Introduktion</a></li>
            <li><a href=\"#Phpmetrics\">Phpmetrics</a></li>
            <li><a href=\"#Scrutinizer\">Scrutinizer</a></li>                
            <li><a href=\"#Förbättringar\">Förbättringar</a></li>
            <li><a href=\"#Analys\">Analys</a></li>
            <li><a href=\"#Diskussion\">Diskussion</a></li>
        </ul>
    </div>
    <div class=\"flex2\">
        <h1 id=\"Introduktion\">Introduktion</h1>
        <p>
            I kursmoment 6 har vi installerat olika verktyg för att hitta mätvärden och analysera våran kod. De verktyg vi testar här är phpmetrics och scrutinizer. Med hjälp av dessa kan vi hitta både problematiska och svagare delar som kanske inte är direkta problem men som ändå kan förbättras. Allt detta handlar mycket om god kodkvalitet som gör koden både mer förståelig för andra än dej själv men kan även handla om att göra koden enklare att uppdatera och underhålla eller vidareutveckla. Helt enkelt bra snygg kod! Det finns några olika saker vi kan titta på här som kan sammanfattas med 6C (eller kanske 7..), delar som ger en snygg och bra skriven kod.
        </p>

        <h3>Codestyle</h3>
        <p>
            Code style handlar om hur du skriver din kod och att vi håller oss till den standard som sammanhanget förhåller sig till. Till exempel hur du namnger olika klasser och metoder, en vanlig regel är Camelcase som betyder att första bokstaven i varje nytt ord är stor bokstav istället för mellanrum. Även vilka indrag man väljer att ha och vart gör koden mer lättläst. Allt detta gör att koden hänger ihop och blir mer lättläst.
        </p>  
        
        <h3>Coverage</h3>
        <p>
            Om man använder verktyg som till exempel phpunit så skriver man egna test filer till sin egen kod. På det sättet får man en extra test att koden faktiskt gör det man vill och tror att den ska. Här kan man generera test-sidor som redovisar filer som är testade och i vilken utsträckning. Nedan ser ni en bild på den här webplatsens coverage från phpunit. Och som ni kan se har jag bara gjort tester på klasserna inom Dice och Card.
        </p>
        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/phpunit_coverage.png"), "html", null, true);
        echo "\" alt=\"coverage\">
        
        <h3>Complexity</h3>
        <p>
            Complexity handlar om hur komplicerad logik koden har. Ju mer komplex ju svårare att förstå och svårare att underhålla och vidareutveckla. Här vill man sträva efter så enkel logik som möjligt.
        </p>

        <h3>Cohesion</h3>
        <p>
            Man vill helst dela upp sin kod i olika block som hänger ihop. Det vill säga att man vill att koden i klassen ska ha med klassen att göra och koden i metoden med det metoden ska göra. Här kan man se i analysen om det kanske kan va läge att dela upp en metod som utför flera uppgifter till flera mindre metoder eller dela upp en klass i flera specifika delar eller liknande.
        </p>

        <h3>Coupling</h3>
        <p>
            Om jag förstått rätt här så visar coupling hur beroende olika klasser är till varandra. Även här strävar man kanske efter en enkelhet, även om vissa klasser kanske av naturen behöver många kopplingar till andra klasser och då kan få ett sämre mätvärde. Till exempel en route-klass eller en game-klass har ju ofta rollen att sitta i centrum och använda sig av många andra klasser.
        </p>

        <h3>CRAP</h3>
        <p>
            Detta är en metod som används i vissa automatiserade test verktyg som kombinerar analysen av komplexitet och kodtäckning(coverage) för att hitta kod som kan vara extra svår att förstå, testa och underhålla. 
        </p>

        <h2 id=\"Phpmetrics\">Phpmetrics</h2>
        <p>Jag börjar att titta på phpmetrics overview för att försöka få en uppfattning om var jag kan hitta svagheter i koden.</p>
        <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/overview.png"), "html", null, true);
        echo "\" alt=\"overview\">

        <p>Det jag först ser är 10 stycken violations. Detta känns för mej som något man bör titta närmare på. När jag tittar närmare så är det 9 stycken varningar och 1 styck error. Varningarna är från mina controllers som ju kanske normalt blir lite komplexare. Jag får även förslaget att titta på mina unit tests för dessa klasser. Vilket jag kan förstå då jag ju inte har gjort några test till dem. Den som fått error är min productController. Det är från en övning inför biblietekts uppgiften. Här får jag förslaget att reducera antalet metoder som delar objektet till flera sub objekt. Lite oklart vad det betyder för mej men även intressant att det är controllern från övningen och inte själva uppgiften. Det kan ju tyda på att jag eventuellt lagt mer tid och energi på uppgiften kanske. </p>
        <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/violations.png"), "html", null, true);
        echo "\" alt=\"violations\">

        <p>Jag ser även bilden under Maintainability / complexity som visualiserar olika delar av koden i form av cirklar. Där är 2 stycken cirklar som är röda och ett antal gula och gröna. De röda indikerar att dessa delar kan vara lite onödigt komplexa. Dom två röda är 2 stycken controllers igen. Även här kommer productControllern men även den controller som hanterar kortspelet 21, Card21Controller.  </p>
        <p>Jag tittar vidare på komplexiteten under fliken Complexity & defects. Här toppar klassen Play21 som är min klass som hanterar kortspelet 21. Intressant här kan ju vara att jag tidigare hittat controllern till kortspelet som en för komplex del också, kanske kan hänga ihop att dessa två har lite för invecklad kod. Och går jag vidare och tittar på size and volume så toppas även denna lista av klassen Play21. Klassen är alltså både stor och komplex.</p>
        <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/complexity.png"), "html", null, true);
        echo "\" alt=\"complexity\">
        <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/size.png"), "html", null, true);
        echo "\" alt=\"size\">

        <p>Så sammanfattningsvis känner jag att det kan vara läge att titta på följande delar som kanske skulle kunna förbättras.</p>
        <p>skapa testklasser för controllers</p>
        <p>Förenkla / korta ner / snygga till klassen Play21 och eventuellt även Card21Controllern.</p>
        <p>Titta på om productController kan reducera sina metoder som delar objekt till sub objekt eller om detta kanske faktiskt egentligen bara är helt enkelt överflödig kod som bara ska tas bort. Det är ju faktiskt bara en övning som kanske inte behöver finnas kvar men kan ju va intressant att se om jag lyckas lösa det ändå.</p>
        
        <h2 id=\"Scrutinizer\">Scrutinizer</h2>
        <p>Även här börjar jag med att titta på översikten. Här var det ju goda nyheter att vi fått betyget 9.91 very good. Kul. Ni kan även se att jag gjort några olika inspektioner. Detta är från när jag startade upp och då hade jag ett issue som gjorde att inspektionen inte kunde genomföras. Även här är det klassen Play21 som spökar som vi såg tidigare hade varningar om komplexiteten. På mina badges ser det grönt och fint ut förutom på coverage som är röd. Endast 23% kodtäckning. Inte så bra siffra kanske men även förståeligt då jag inte gjort så mycket testklasser.</p>
        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/scrutinizer_overview.png"), "html", null, true);
        echo "\" alt=\"overview\">

        <p>Tittar vi vidare på coverage så ser vi full täckning på dom olika Card och Dice klasserna men i övrigt helt otestat. Här finns ju mycket förbättringspotential.</p>
        <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/scrutinizer_coverage.png"), "html", null, true);
        echo "\" alt=\"coverage\">

        <p>Under fliken issues hittar jag även många tips på detaljer som skulle kunna förbättras. Lite mer konkreta förslag på rader i koden som är mer eller mindre bra. En intressant del är ju till exempel att jag tydligen har 12 stycken ställen med oanvänd kod vilket ju självklart känns onödigt att ha kvar. Även intressant med best practice där man kanske kan få lite hjälp att förfina sina kodrader.</p>
        <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/scrutinizer_issues.png"), "html", null, true);
        echo "\" alt=\"issues\">

        <p>Sammanfattningsvis ser jag här att jag framförallt bör testa min kod bättre, precis som även phpmetrics pekade mot. Men även lägga lite tid på att titta igenom issues kan vara en god idé. Där känns det som man kan få ganska tydliga förslag på förbättrade detaljer.</p>
        
        <div class=\"ram\">
            <p>Här är mina badges från scrutinizer om du vill titta mer detaljerat</p>
            <div class=\"flex-container\">
                <a href=\"https://scrutinizer-ci.com/g/Kof666/MVC/?branch=main\" target=\"_blank\"><img src=\"https://scrutinizer-ci.com/g/Kof666/MVC/badges/quality-score.png?b=main\" alt=\"coverage\"></a>
                <a href=\"https://scrutinizer-ci.com/g/Kof666/MVC/code-structure/main/code-coverage/src/\" target=\"_blank\"><img src=\"https://scrutinizer-ci.com/g/Kof666/MVC/badges/coverage.png?b=main\" alt=\"coverage\"></a>
                <a href=\"https://scrutinizer-ci.com/g/Kof666/MVC/inspections/58b84745-c2c7-4664-a6af-99b7fcf5d078/log\" target=\"_blank\"><img src=\"https://scrutinizer-ci.com/g/Kof666/MVC/badges/build.png?b=main\" alt=\"coverage\"></a>
            </div>
        </div>
        <br>
        <h2 id=\"Förbättringar\">Förbättringar</h2>

        <p>De förbättringar jag avser göra är följande:</p>
        <div class=\"ram\">
            <ul class=\"ul-metrics\">
                <li class=\"li-metrics\">Fixa så många issues jag kan i scrutinizer</li>
                <li class=\"li-metrics\">Öka min kodtäckning till ok nivå</li>
                <li class=\"li-metrics\">Försöka minska komplexiteten i klassen Play21 och Card21Controller</li>
                <li class=\"li-metrics\">Se om jag kan öka betyget på Worst rated PHP Operations i scrutinizer</li>
            </ul>
        </div>

        <p>Det jag kommer fram till som är mest eftersatt är kodtäckningen. Det är återkommande varningar att det saknas tester på mycket kod. Även att coverage är den badge som är röd och dessutom endast 23% tyder ju på att det är här jag bör lägga fokus. Med det sagt så är jag även intresserad av både förenkling av komplexiteten och issues i scrutinizer. Jag känner mej själv och börjar inse att logiken ofta kan bli lite onödigt komplex vilket ju här är en möjlighet att jobba lite  på. Även de olika issues som scrutinizer pekar på kan ju ge en insikt i hur jag framöver kan skriva mera clean code i framtiden kanske. Det är i alla fall min förhoppning. </p>

        <br><p>Mitt mål här är att få en grön badge på coverage och även något bättre värden på komplexiteten.</p>

        <br>
        <h2 id=\"Analys\">Analys</h2>
        <p>Efter visst arbete med att försöka förbättra koden enligt ovan kommer följande analys.</p>
        <h2 id=\"Diskussion\">Diskussion</h2>
        <p>
            Avsluta med ett stycke “Diskussion” där du diskuterar kort kring det du nyss gjort.
        </p>
        <p>
            Kan man aktivt jobba med kodkvalitet och “clean code” på detta sättet?
            Finns det fördelar och kanske nackdelar?
            Ser du andra möjligheter att jobba mot “clean code”?
        </p>
    </div>
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
        return "/metrics.html.twig";
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
        return array (  184 => 79,  178 => 76,  172 => 73,  160 => 64,  156 => 63,  149 => 59,  143 => 56,  116 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rapporter{% endblock %}

{% block main %}
<div class=\"flex-container\">
    <div class=\"flex1\">
        <ul>
            <li><a href=\"#Introduktion\">Introduktion</a></li>
            <li><a href=\"#Phpmetrics\">Phpmetrics</a></li>
            <li><a href=\"#Scrutinizer\">Scrutinizer</a></li>                
            <li><a href=\"#Förbättringar\">Förbättringar</a></li>
            <li><a href=\"#Analys\">Analys</a></li>
            <li><a href=\"#Diskussion\">Diskussion</a></li>
        </ul>
    </div>
    <div class=\"flex2\">
        <h1 id=\"Introduktion\">Introduktion</h1>
        <p>
            I kursmoment 6 har vi installerat olika verktyg för att hitta mätvärden och analysera våran kod. De verktyg vi testar här är phpmetrics och scrutinizer. Med hjälp av dessa kan vi hitta både problematiska och svagare delar som kanske inte är direkta problem men som ändå kan förbättras. Allt detta handlar mycket om god kodkvalitet som gör koden både mer förståelig för andra än dej själv men kan även handla om att göra koden enklare att uppdatera och underhålla eller vidareutveckla. Helt enkelt bra snygg kod! Det finns några olika saker vi kan titta på här som kan sammanfattas med 6C (eller kanske 7..), delar som ger en snygg och bra skriven kod.
        </p>

        <h3>Codestyle</h3>
        <p>
            Code style handlar om hur du skriver din kod och att vi håller oss till den standard som sammanhanget förhåller sig till. Till exempel hur du namnger olika klasser och metoder, en vanlig regel är Camelcase som betyder att första bokstaven i varje nytt ord är stor bokstav istället för mellanrum. Även vilka indrag man väljer att ha och vart gör koden mer lättläst. Allt detta gör att koden hänger ihop och blir mer lättläst.
        </p>  
        
        <h3>Coverage</h3>
        <p>
            Om man använder verktyg som till exempel phpunit så skriver man egna test filer till sin egen kod. På det sättet får man en extra test att koden faktiskt gör det man vill och tror att den ska. Här kan man generera test-sidor som redovisar filer som är testade och i vilken utsträckning. Nedan ser ni en bild på den här webplatsens coverage från phpunit. Och som ni kan se har jag bara gjort tester på klasserna inom Dice och Card.
        </p>
        <img src=\"{{ asset('img/phpunit_coverage.png') }}\" alt=\"coverage\">
        
        <h3>Complexity</h3>
        <p>
            Complexity handlar om hur komplicerad logik koden har. Ju mer komplex ju svårare att förstå och svårare att underhålla och vidareutveckla. Här vill man sträva efter så enkel logik som möjligt.
        </p>

        <h3>Cohesion</h3>
        <p>
            Man vill helst dela upp sin kod i olika block som hänger ihop. Det vill säga att man vill att koden i klassen ska ha med klassen att göra och koden i metoden med det metoden ska göra. Här kan man se i analysen om det kanske kan va läge att dela upp en metod som utför flera uppgifter till flera mindre metoder eller dela upp en klass i flera specifika delar eller liknande.
        </p>

        <h3>Coupling</h3>
        <p>
            Om jag förstått rätt här så visar coupling hur beroende olika klasser är till varandra. Även här strävar man kanske efter en enkelhet, även om vissa klasser kanske av naturen behöver många kopplingar till andra klasser och då kan få ett sämre mätvärde. Till exempel en route-klass eller en game-klass har ju ofta rollen att sitta i centrum och använda sig av många andra klasser.
        </p>

        <h3>CRAP</h3>
        <p>
            Detta är en metod som används i vissa automatiserade test verktyg som kombinerar analysen av komplexitet och kodtäckning(coverage) för att hitta kod som kan vara extra svår att förstå, testa och underhålla. 
        </p>

        <h2 id=\"Phpmetrics\">Phpmetrics</h2>
        <p>Jag börjar att titta på phpmetrics overview för att försöka få en uppfattning om var jag kan hitta svagheter i koden.</p>
        <img src=\"{{ asset('img/overview.png') }}\" alt=\"overview\">

        <p>Det jag först ser är 10 stycken violations. Detta känns för mej som något man bör titta närmare på. När jag tittar närmare så är det 9 stycken varningar och 1 styck error. Varningarna är från mina controllers som ju kanske normalt blir lite komplexare. Jag får även förslaget att titta på mina unit tests för dessa klasser. Vilket jag kan förstå då jag ju inte har gjort några test till dem. Den som fått error är min productController. Det är från en övning inför biblietekts uppgiften. Här får jag förslaget att reducera antalet metoder som delar objektet till flera sub objekt. Lite oklart vad det betyder för mej men även intressant att det är controllern från övningen och inte själva uppgiften. Det kan ju tyda på att jag eventuellt lagt mer tid och energi på uppgiften kanske. </p>
        <img src=\"{{ asset('img/violations.png') }}\" alt=\"violations\">

        <p>Jag ser även bilden under Maintainability / complexity som visualiserar olika delar av koden i form av cirklar. Där är 2 stycken cirklar som är röda och ett antal gula och gröna. De röda indikerar att dessa delar kan vara lite onödigt komplexa. Dom två röda är 2 stycken controllers igen. Även här kommer productControllern men även den controller som hanterar kortspelet 21, Card21Controller.  </p>
        <p>Jag tittar vidare på komplexiteten under fliken Complexity & defects. Här toppar klassen Play21 som är min klass som hanterar kortspelet 21. Intressant här kan ju vara att jag tidigare hittat controllern till kortspelet som en för komplex del också, kanske kan hänga ihop att dessa två har lite för invecklad kod. Och går jag vidare och tittar på size and volume så toppas även denna lista av klassen Play21. Klassen är alltså både stor och komplex.</p>
        <img src=\"{{ asset('img/complexity.png') }}\" alt=\"complexity\">
        <img src=\"{{ asset('img/size.png') }}\" alt=\"size\">

        <p>Så sammanfattningsvis känner jag att det kan vara läge att titta på följande delar som kanske skulle kunna förbättras.</p>
        <p>skapa testklasser för controllers</p>
        <p>Förenkla / korta ner / snygga till klassen Play21 och eventuellt även Card21Controllern.</p>
        <p>Titta på om productController kan reducera sina metoder som delar objekt till sub objekt eller om detta kanske faktiskt egentligen bara är helt enkelt överflödig kod som bara ska tas bort. Det är ju faktiskt bara en övning som kanske inte behöver finnas kvar men kan ju va intressant att se om jag lyckas lösa det ändå.</p>
        
        <h2 id=\"Scrutinizer\">Scrutinizer</h2>
        <p>Även här börjar jag med att titta på översikten. Här var det ju goda nyheter att vi fått betyget 9.91 very good. Kul. Ni kan även se att jag gjort några olika inspektioner. Detta är från när jag startade upp och då hade jag ett issue som gjorde att inspektionen inte kunde genomföras. Även här är det klassen Play21 som spökar som vi såg tidigare hade varningar om komplexiteten. På mina badges ser det grönt och fint ut förutom på coverage som är röd. Endast 23% kodtäckning. Inte så bra siffra kanske men även förståeligt då jag inte gjort så mycket testklasser.</p>
        <img src=\"{{ asset('img/scrutinizer_overview.png') }}\" alt=\"overview\">

        <p>Tittar vi vidare på coverage så ser vi full täckning på dom olika Card och Dice klasserna men i övrigt helt otestat. Här finns ju mycket förbättringspotential.</p>
        <img src=\"{{ asset('img/scrutinizer_coverage.png') }}\" alt=\"coverage\">

        <p>Under fliken issues hittar jag även många tips på detaljer som skulle kunna förbättras. Lite mer konkreta förslag på rader i koden som är mer eller mindre bra. En intressant del är ju till exempel att jag tydligen har 12 stycken ställen med oanvänd kod vilket ju självklart känns onödigt att ha kvar. Även intressant med best practice där man kanske kan få lite hjälp att förfina sina kodrader.</p>
        <img src=\"{{ asset('img/scrutinizer_issues.png') }}\" alt=\"issues\">

        <p>Sammanfattningsvis ser jag här att jag framförallt bör testa min kod bättre, precis som även phpmetrics pekade mot. Men även lägga lite tid på att titta igenom issues kan vara en god idé. Där känns det som man kan få ganska tydliga förslag på förbättrade detaljer.</p>
        
        <div class=\"ram\">
            <p>Här är mina badges från scrutinizer om du vill titta mer detaljerat</p>
            <div class=\"flex-container\">
                <a href=\"https://scrutinizer-ci.com/g/Kof666/MVC/?branch=main\" target=\"_blank\"><img src=\"https://scrutinizer-ci.com/g/Kof666/MVC/badges/quality-score.png?b=main\" alt=\"coverage\"></a>
                <a href=\"https://scrutinizer-ci.com/g/Kof666/MVC/code-structure/main/code-coverage/src/\" target=\"_blank\"><img src=\"https://scrutinizer-ci.com/g/Kof666/MVC/badges/coverage.png?b=main\" alt=\"coverage\"></a>
                <a href=\"https://scrutinizer-ci.com/g/Kof666/MVC/inspections/58b84745-c2c7-4664-a6af-99b7fcf5d078/log\" target=\"_blank\"><img src=\"https://scrutinizer-ci.com/g/Kof666/MVC/badges/build.png?b=main\" alt=\"coverage\"></a>
            </div>
        </div>
        <br>
        <h2 id=\"Förbättringar\">Förbättringar</h2>

        <p>De förbättringar jag avser göra är följande:</p>
        <div class=\"ram\">
            <ul class=\"ul-metrics\">
                <li class=\"li-metrics\">Fixa så många issues jag kan i scrutinizer</li>
                <li class=\"li-metrics\">Öka min kodtäckning till ok nivå</li>
                <li class=\"li-metrics\">Försöka minska komplexiteten i klassen Play21 och Card21Controller</li>
                <li class=\"li-metrics\">Se om jag kan öka betyget på Worst rated PHP Operations i scrutinizer</li>
            </ul>
        </div>

        <p>Det jag kommer fram till som är mest eftersatt är kodtäckningen. Det är återkommande varningar att det saknas tester på mycket kod. Även att coverage är den badge som är röd och dessutom endast 23% tyder ju på att det är här jag bör lägga fokus. Med det sagt så är jag även intresserad av både förenkling av komplexiteten och issues i scrutinizer. Jag känner mej själv och börjar inse att logiken ofta kan bli lite onödigt komplex vilket ju här är en möjlighet att jobba lite  på. Även de olika issues som scrutinizer pekar på kan ju ge en insikt i hur jag framöver kan skriva mera clean code i framtiden kanske. Det är i alla fall min förhoppning. </p>

        <br><p>Mitt mål här är att få en grön badge på coverage och även något bättre värden på komplexiteten.</p>

        <br>
        <h2 id=\"Analys\">Analys</h2>
        <p>Efter visst arbete med att försöka förbättra koden enligt ovan kommer följande analys.</p>
        <h2 id=\"Diskussion\">Diskussion</h2>
        <p>
            Avsluta med ett stycke “Diskussion” där du diskuterar kort kring det du nyss gjort.
        </p>
        <p>
            Kan man aktivt jobba med kodkvalitet och “clean code” på detta sättet?
            Finns det fördelar och kanske nackdelar?
            Ser du andra möjligheter att jobba mot “clean code”?
        </p>
    </div>
</div>
{% endblock %}
", "/metrics.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/metrics.html.twig");
    }
}
