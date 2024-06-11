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

/* /report.html.twig */
class __TwigTemplate_0fd44fb3bd7972f1c87a5ae8631569fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/report.html.twig", 1);
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
            <li><a href=\"#kmom01\">kmom01</a></li>
            <li><a href=\"#kmom02\">kmom02</a></li>
            <li><a href=\"#kmom03\">kmom03</a></li>                
            <li><a href=\"#kmom04\">kmom04</a></li>
            <li><a href=\"#kmom05\">kmom05</a></li>
            <li><a href=\"#kmom06\">kmom06</a></li>
            <li><a href=\"#kmom10\">kmom10</a></li>
        </ul>
    </div>
    <div class=\"flex2\">
        <h1>Rapporter</h1>
        <h2 id=\"kmom01\">kmom01</h2>
        <p>
            Ja, då va vi igång. Innan jag började med det här kurspaketet har läst nån fristående grundkurs i java på universitetsnivå och programmering med c# på gymnasial nivå. Med det sagt så känner jag ju igen ramarna för objektorienterad programmering vilket ju underlättar en del. 
            </p>
            <p>
            Om jag jämför med PHP så känns ju grundstrukturen för klasserna väldigt lika bara lite uttryck och syntax som ändras. Varje klass innehåller variabler specifika för klassen, olika metoder/funktioner som uträttar olika saker, konstruktor som kallas när man skapar en instans av klassen etc. PHP pratar om medlemsvariabler medan i java lärde vi oss kalla dem för klassvariabler och så vidare. Några saker som kan vara bra att kolla lite extra på i början tycker jag kan vara tex autoloading. Känns smart att automatisera så alla olika filer hittar varandra utan att behöva inkludera dem en efter en. Destructor var lite nytt för mej oxå vilket ju också kan va smart. Pil operatorn -> som används för att få tillgång till klassens metoder tycker jag är en vital del att lägga på minnet(tex object->function eller Person->getAge()). Jag tycker även att det kan vara värt lite extra tid att ordna sin config fil och lägga in den kod som hjälper oss att se felutskrifter.
            </p>
            <p>
            Ramverket vi använder oss av påminner ju i stort om det javascript ramverk vi använde i databas kursen på det sättet att man arbetar med routes som länkas till olika sökvägar och templates. Detta ramverk känns av någon anledning enklare att förstå sig på för mej. Kanske är det för att jag känner mej mer hemma med PHP (databaskursen var mitt första möte med javascript). Det är nog egentligen twig delen som jag tyvärr fortfarande är lite långsam med. Jag övervägde att köra stylen med sass men insåg att det framför allt är variablerna jag eftersöker därifrån och det kan jag ju faktiskt få med css oxå. dessutom fungerar då scriptet npm run watch direkt oxå. visserligen tyckte jag jag läste nånstans att det var ganska enkelt att ändra till sass, typ bara ändra namnet på style/app.css till style/app.sass men jag valde att lägga tiden på andra saker denna gången helt enkelt.
            </p>
            <p>
            Det kändes som det fanns väldigt mycket information i artikeln “PHP The Right Way”. Svårt att säga om något är mer värdefullt än något annat. Jag tror det beror ganska mycket på vilken nivå av kunskap man har och vad man kan ta till sig på ett bra sätt. Jag fastnade mest i delarna “Coding Practices” och \"Databases\", antagligen för det ligger närmast för mig just nu kanske. Det är lite dumt då det borde vara smartare att läsa mer om de saker man inte har koll alls på nu när jag tänker efter. 
            </p>
            <p>
            Någon TIL den här veckan…börjar vänja sig vid olika ramverk nu..och att allt tar mer tid än man tänkt sig börjar man ju vänja sig vid..men min TIL får nog bli att stack overflow tar mer tid än rätt dokumentation även om man inte tror det först..
            </p>
            
        <h2 id=\"kmom02\">kmom02</h2>
        <h3>Förklara kort de objektorienterade konstruktionerna arv, komposition, interface och trait och hur de används i PHP.</h3><br>
            
            <p>Dessa begrepp förklarar olika relationer mellan klasserna. Dom olika konstruktionerna fungerar lite olika och är lite olika starka.</p>
            
            <p>Arv som jag kanske tycker är lättast att förklara kan ses som en specialisering av en klass. Här kommer jag såklart att tänka på CardGraphic som ärver alla egenskaper av Card och sedan lägger till en grafisk representation.</p>
            
            <p>Komposition har en stark relation mellan klasserna då den ena klassen har en instans av den andra klassen i sin konstruktor. Detta gör att när ägar objektet slutar existera så slutar även det ägda objektet existera.</p>
            
            <p>I PHP kan en klass inte ärva från flera olika klasser. Istället finns det som kallas trait. Man skulle kunna säga att man använder/kopierar in delar i klassen snarare än ärver.</p>
           
            <p>Och sist men inte minst då interface. Som jag förstår det kan en klass implementera olika traits som i sin tur ger det traits api. Osäker på om det bara är trait eller även olika interface i interfacen. Så mycke mer än så vet jag faktiskt inte</p>
             
        <h3>Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden och dina klasser?</h3><br>
            
            <p>Jag är hyfsat nöjd ändå. Jag är inte nöjd med hastigheten jag har i mitt programmerade, det tar alldeles för lång tid att förstå och komma in i nya ramverk etc. Jag känner nog att det finns ganska mycke förbättringspotential här. Känns som det är för mycke kod i vissa routes. Kanske skulle jag byggt upp klasserna på ett bättre sätt, kanske kan lägga till någon funktion så man inte behöver skriva samma kod flera gånger etc. Sen har det hamnat en hel det i sessionen också vilket i sin tur gör att jag måste hämta och spara ner till sessionen ganska mycket. Detta är för att jag vill separera de olika kortlekarna med mera till de olika kraven för att få bättre kontroll när jag felsöker mej fram. På en färdig webbplats skulle man nog kunna använda sig av samma kortlek på flera ställen kanske.</p>
            
            <p>Ja, nu började jag kanske i den negativa änden. Det roliga är ju att jag faktiskt kommer framåt och att det känns roligt att jobba med.</p>
             
             
        <h3>Vilka är dina reflektioner så här långt med att jobb i Symfony med applikationskod enligt MVC?</h3><br>
            <p>Min första känsla med Symfony var att det kändes enklare och roligare än till exempel Express som vi hade i databas. Men sen blev det ju ändå lite krångligt i början. Både att platsen på studentservern tog slut (vilket ju egentligen inte har med Symfony att göra..tog bara ett tag att fatta det) och sen strulade även bakgrundsbilden. Och det retar mej ganska mycket men man får väl släppa det när även lärarteamet har svårigheter att hitta lösningen helt enkelt och försöka fokusera på lite mer rätt saker. Det känns även kanske lite enklare med Symfony för att man känner igen strukturen med routes och templates från tidigare ramverk. Det är ju inte exakt lika men liknande. Jag känner nog också att twig är en del där jag tappar flytet ibland. Men i stort så känns Symfony enligt MVC kul.</p>
             
        <h3>Vilken är din TIL för detta kmom?</h3><br>

            <p>Min till borde vara prioriteringslista. Tyvärr verkar jag inte lära mig det så då tar det ju lite mer tid än beräknat..</p>            
        <h2 id=\"kmom03\">kmom03</h2>
        <h3>Berätta hur det kändes att modellera ett kortspel med flödesdiagram och psuedokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?</h3>
            <p>Det kändes helt ok att modellera flödesschema och psuedokod. För egen del tror jag flödesschemat kändes som det hjälpte mej mer att strukturera upp projektet i huvudet. Det klarnade lite vilka routes jag kommer behöva och vad dom kommer behöva göra. Psuedokoden blir svår för min slags hjärna då det inte finns några standards eller ramar för hur det ska se ut samtidigt som det då ändå fanns ganska mycke regler om vad som är bra och dålig psuedokod. Det har jag svårt för, antingen finns en ram eller inte liksom. Och samtidigt som den ska va förståelig för andra än programmerare så ska man helst skriva den mer med programmeringsspråk så programmerare förstår vilka slags loopar etc man använder. Detta gör den ju mindre begriplig för andra. Det är väl något med detta jag missat att förstå kanske helt enkelt.</p>
        
        <h3>Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden, dina klasser och applikationen som helhet?</h3>
            <p>Jag tyckte detta var riktigt roligt och jag är glad att jag fått ihop ett litet kortspel. Med det sagt känner jag att det finns mycke som kan förbättras. Den största förändring jag skulle vilja göra här, som jag insåg kanske halvvägs in, är att jag skulle gjort en klass som hanterar spelare. Jag har gjort en klass som hanterar själva spelet men den klassen hanterar även spelarnas rundor och dom poäng korten spelarna har för tillfället. Nu i slutet insåg jag också att jag ju faktiskt gjort en klass CardHand som jag i princip glömde att använda och gjorde arrayer i Play21(den som hanterar själva spelet). Men då jag ligger illa till tidsmässigt här (som egentligen tyvärr handlar om annat än kursen. Alltså mitt jobb jag har utöver skolan) har jag fått välja att se dessa saker som framtida förbättringsmöjligheter. Så som ni förstår är jag tyvärr inte jättenöjd och det känns ju lite tråkigt när det samtidigt är så roligt att jobba med. Även tidsnöd har ju tyvärr gjort att jag nöjt mej med en lägre nivå med PHPstan än jag vill vara på.</p>
        
        <h3>Vilken är din känsla för att koda i ett ramverk som Symfony, så här långt in i kursen?</h3>
            <p>Med Symfony känns som det som det klarnar mer och mer ju mer jag arbetar. Det tog en stund innan jag insåg att det ju räcker att spara instansen av spelets spel klass i session för att få tillgång till allt vilket va ett av tillfällena man kanske inte kände sig så smart. Jag har verkligen försökt få ner storleken på routerna och försökt göra klasserna ”tjockare” men känner ändå att det ju blir ganska många rader kod ändå. Skulle va intressant om det kanske kunde finnas nåt ännu bättre sätt att jobba här. Även mina html.twig filer känns det som det skulle kunna finnas en förbättrings potential i. Känns som jag skulle kunna byggt upp dom i mindre moduler och använt include bättre här.</p>

        <h3>Vilken är din TIL för detta kmom?</h3>
            <p>Jag har börjat försöka sitta flera gånger kortare tider. Känns som det blir effektivare ibland då jag kanske inte fastnar länge i vissa problem utan att komma framåt. Även att försöka lära mej att släppa ett problem olöst och komma vidare i en annan del för att senare gå tillbaka verkar ju också bli mer effektivt. Hur nu hjärnan liksom kan lösa problem utan att man tänker på dom när man gör annat är en gåta för mej men jag är ändå väldigt tacksam att den gör det.</p>
        <h2 id=\"kmom04\">kmom04</h2>
        <h3>Berätta hur du upplevde att skriva kod som testar annan kod med PHPUnit och hur du upplever phpunit rent allmänt.</h3>
            <p>Det känns väl lite både lätt och svårt på samma gång. Det gäller ju att man faktiskt testar det som är väsentligt att testa av koden egentligen. Vissa test kan ju kännas lite onödiga nästan som tex om det är en int eller om variabeln har ett värde eller liknande. Samtidigt är det ju egentligen det ända att testa ibland. Så ja enkelt att testa sig fram och klara kraven om jag förstått dom rätt men också ett arbete som jag mycke väl förstår att man kan nörda in sig i och som kan sluka ofantliga mängder tid. Och då också få ganska mycke bättre tester.</p>

        <h3>Hur väl lyckades du med kodtäckningen av din kod, lyckades du nå mer än 90% kodtäckning?</h3>
            <p>Jag tycker jag lyckades bra med mina kort klasser. Jag har ju två stycken klasser som jag faktiskt inte använder än Player och CardHand. Dessa har varken kod eller tester. Dessa är kvar för jag tänker att jag antagligen kommer använda dom i slut projektet i kursen. Övriga klasser har full kodtäckning. Men med det sagt kan man ju fundera på vad jag testar för att få den kodtäckningen. Här finns ju potential att förbättra testerna ganska mycke. </p>

        <h3>Upplever du din egen kod som “testbar kod” eller finns det delar i koden som är mer eller mindre testbar och finns det saker som kan göras för att förbättra kodens testbarhet?</h3>
            <p>Större delen av koden var lätt testad. Det fanns några funktioner i spelklassen som jag kallat Play21 som var lite knepigare. Jag märker ju att ju mindre och enklare varje funktion är i sig själv ju lättare blir ju testningen. Några funktioner har jag som gör fler saker tex drar kort och sparar undan poäng med mera och ju mer komplicerat det blir ju svårare är det ju sen också att testa såklart.</p>

        <h3>Valde du att skriva om delar av din kod för att förbättra den eller göra den mer testbar, om så berätta lite hur du tänkte.</h3>
            <p>Vi kan titta på funktionen getWinner() som exempel. Dels innehåller funktionen en hel del if satser och returnerar olika svar beroende på spelarnas poäng och sen har jag inte haft någon enkel setScore funktion för varken banken eller player. Detta har sköts i playerDraw() och bankDraw() där spelare och bank drar kort och även då får sina poäng. I getWinner har större delen av if satserna villkor där poängen hämtas med hjälp av getPlayerScore och getBankScore. Dessa fylls ju på när man spelar men jag har ju inte behövt set funktioner tidigare. Detta blev ju komplicerat under testningen då poängen i spelet blir slumpmässigt och man inte har kontroll på hur man ska kunna testa dom olika villkoren. Jag löste det genom att göra varsin ny set funktion för bank och player för att enklare kunna genomföra testerna. Detta ger ju ett publikt sätt att ändra spelets ställning vilket ju kanske inte är jätte bra men testningen blev betydligt enklare. Ett alternativ som kanske så här i efterhand hade varit bättre kanske kunde va att mocka objektet Play21 istället. Så hade jag nog löst det nästa gång.</p>
        
        <h3>Fundera över om du anser att testbar kod är något som kan identifiera “snygg och ren kod”.</h3>
            <p>Jag skulle nog vilja säga att all kod på nåt sätt skulle kunna va testbar snygg och ren som ful och krånglig egentligen. Men klart att om din kod är kortare enklare och strukturerad på ett bra sätt verkar det ju onekligen bli lättare att även testa den. Det jag funderar på här blir ju att man kanske får fundera på vad man faktiskt vill sina funktioner/metoder ska utföra och vad du vill ha dom till. Är det rätt att göra metoderna mindre komplicerade och tappa saker man vill ska utföras och hur kan man strukturera om för att inte ”tappa” metodens syfte. Hur som så tror jag nog att ju mer erfaren programmerare man blir ju lättare håller man nog sin kod både snygg, ren och kort och det blir nog enklare och enklare att förstå hur och varför.</p>

        <h3>Vilken är din TIL för detta kmom?</h3>
            <p>Kanske inte är något jag direkt lärt mej men det slår mej att det finns två sidor med white box testing. Å ena sidan vet man ju själv vad man vill att koden ska genomföra å andra sidan känns det ju som man själv ganska lätt kan missa att se koden från ett annat perspektiv. Känns som man lätt kan missa vissa saker. Kanske egentligen inte har att göra med att man faktiskt har tillgång till källkoden utan mer att man är en enda person i och för sig.</p>
        <h2 id=\"kmom05\">kmom05</h2>
        <h3>Gick det bra att jobba igenom övningen med Symfony och Doctrine. Något särskilt du tänkte/reagerade på under övningen? </h3>
            <p>Jag tycker övningen flöt på bra. Kändes nästan som fusk med den här sortens färdigt paket på sätt och vis. Kanske också lite obekvämt att det skapas så mycket automatiskt fast det börjar jag nog ändå vänja mej vid lite nu med alla olika paket av olika slag. </p>

        <h3>Berätta om din applikation och hur du tänkte när du byggde upp den. Tänkte du något speciellt på användargränssnittet? </h3>
            <p>Jag tänkte lite på eshopen ifrån databaskursen och att jag antagligen kan ha ett liknande tänk här med gränssnittet. Jag har försökt att göra det användarvänligt med en startsida och egentligen en sida som listar bibliotekets böcker där man även kan hantera dom dvs read, update och delete. Själva c:t i CRUD hamnade ihop med bibliotekets reset på landnings sidan. Jag har även försökt att lägga till knappar för att ta sig tillbaka på olika ställen för att få ett bra flöde för användaren och även lagt in olika flash meddelanden som berättar för användaren vad som händer, tex att du updaterat en bok eller liknande. </p>

        <h3>Gick det bra att jobba med ORM i CRUD eller vad anser du om det, jämför gärna med andra sätt att jobba med databaser? </h3>
            <p>Jag tycker ORM i CRUD kändes enklare och mer lättförståeligt än tidigare försök med databaser jag haft. Jag hade kämpigt med databas kursen tidigare och valde därför att stanna med sqlite och inte använda mariadb. Kanske är det en förklaring till det. Känns lite tråkigt att ta den ”lättare” vägen här på ett sätt men tyvärr får jag prioritera och det känns som rätt prioritering i denna kurs just nu. </p>

        <h3>Vad är din uppfattning om ORM så här långt och relatera gärna till andra sätt att jobba med applikationskod mot databaser? </h3>
            <p>Det känns ju ganska smart att göra databasen objektorienterad eller hur man ska uttrycka sig. Känns som det öppnar upp även för programmerare som inte är experter på databaser att hantera just en databas. </p>

        <h3>Vilken är din TIL för detta kmom? </h3>
            <p>Jo men min TIL den här gången måste nog ändå va att databasprogrammering ju faktiskt är riktigt kul när man får grepp om det. Nån gång i framtiden ska jag försöka bli riktigt grym på det. </p>
        <h2 id=\"kmom06\">kmom06</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>
        <h2 id=\"kmom07\">kmom07</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>
        <h2 id=\"kmom08\">kmom08</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>
        <h2 id=\"kmom09\">kmom09</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>
        <h2 id=\"kmom10\">kmom10</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

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
        return "/report.html.twig";
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rapporter{% endblock %}

{% block main %}
<div class=\"flex-container\">
    <div class=\"flex1\">
        <ul>
            <li><a href=\"#kmom01\">kmom01</a></li>
            <li><a href=\"#kmom02\">kmom02</a></li>
            <li><a href=\"#kmom03\">kmom03</a></li>                
            <li><a href=\"#kmom04\">kmom04</a></li>
            <li><a href=\"#kmom05\">kmom05</a></li>
            <li><a href=\"#kmom06\">kmom06</a></li>
            <li><a href=\"#kmom10\">kmom10</a></li>
        </ul>
    </div>
    <div class=\"flex2\">
        <h1>Rapporter</h1>
        <h2 id=\"kmom01\">kmom01</h2>
        <p>
            Ja, då va vi igång. Innan jag började med det här kurspaketet har läst nån fristående grundkurs i java på universitetsnivå och programmering med c# på gymnasial nivå. Med det sagt så känner jag ju igen ramarna för objektorienterad programmering vilket ju underlättar en del. 
            </p>
            <p>
            Om jag jämför med PHP så känns ju grundstrukturen för klasserna väldigt lika bara lite uttryck och syntax som ändras. Varje klass innehåller variabler specifika för klassen, olika metoder/funktioner som uträttar olika saker, konstruktor som kallas när man skapar en instans av klassen etc. PHP pratar om medlemsvariabler medan i java lärde vi oss kalla dem för klassvariabler och så vidare. Några saker som kan vara bra att kolla lite extra på i början tycker jag kan vara tex autoloading. Känns smart att automatisera så alla olika filer hittar varandra utan att behöva inkludera dem en efter en. Destructor var lite nytt för mej oxå vilket ju också kan va smart. Pil operatorn -> som används för att få tillgång till klassens metoder tycker jag är en vital del att lägga på minnet(tex object->function eller Person->getAge()). Jag tycker även att det kan vara värt lite extra tid att ordna sin config fil och lägga in den kod som hjälper oss att se felutskrifter.
            </p>
            <p>
            Ramverket vi använder oss av påminner ju i stort om det javascript ramverk vi använde i databas kursen på det sättet att man arbetar med routes som länkas till olika sökvägar och templates. Detta ramverk känns av någon anledning enklare att förstå sig på för mej. Kanske är det för att jag känner mej mer hemma med PHP (databaskursen var mitt första möte med javascript). Det är nog egentligen twig delen som jag tyvärr fortfarande är lite långsam med. Jag övervägde att köra stylen med sass men insåg att det framför allt är variablerna jag eftersöker därifrån och det kan jag ju faktiskt få med css oxå. dessutom fungerar då scriptet npm run watch direkt oxå. visserligen tyckte jag jag läste nånstans att det var ganska enkelt att ändra till sass, typ bara ändra namnet på style/app.css till style/app.sass men jag valde att lägga tiden på andra saker denna gången helt enkelt.
            </p>
            <p>
            Det kändes som det fanns väldigt mycket information i artikeln “PHP The Right Way”. Svårt att säga om något är mer värdefullt än något annat. Jag tror det beror ganska mycket på vilken nivå av kunskap man har och vad man kan ta till sig på ett bra sätt. Jag fastnade mest i delarna “Coding Practices” och \"Databases\", antagligen för det ligger närmast för mig just nu kanske. Det är lite dumt då det borde vara smartare att läsa mer om de saker man inte har koll alls på nu när jag tänker efter. 
            </p>
            <p>
            Någon TIL den här veckan…börjar vänja sig vid olika ramverk nu..och att allt tar mer tid än man tänkt sig börjar man ju vänja sig vid..men min TIL får nog bli att stack overflow tar mer tid än rätt dokumentation även om man inte tror det först..
            </p>
            
        <h2 id=\"kmom02\">kmom02</h2>
        <h3>Förklara kort de objektorienterade konstruktionerna arv, komposition, interface och trait och hur de används i PHP.</h3><br>
            
            <p>Dessa begrepp förklarar olika relationer mellan klasserna. Dom olika konstruktionerna fungerar lite olika och är lite olika starka.</p>
            
            <p>Arv som jag kanske tycker är lättast att förklara kan ses som en specialisering av en klass. Här kommer jag såklart att tänka på CardGraphic som ärver alla egenskaper av Card och sedan lägger till en grafisk representation.</p>
            
            <p>Komposition har en stark relation mellan klasserna då den ena klassen har en instans av den andra klassen i sin konstruktor. Detta gör att när ägar objektet slutar existera så slutar även det ägda objektet existera.</p>
            
            <p>I PHP kan en klass inte ärva från flera olika klasser. Istället finns det som kallas trait. Man skulle kunna säga att man använder/kopierar in delar i klassen snarare än ärver.</p>
           
            <p>Och sist men inte minst då interface. Som jag förstår det kan en klass implementera olika traits som i sin tur ger det traits api. Osäker på om det bara är trait eller även olika interface i interfacen. Så mycke mer än så vet jag faktiskt inte</p>
             
        <h3>Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden och dina klasser?</h3><br>
            
            <p>Jag är hyfsat nöjd ändå. Jag är inte nöjd med hastigheten jag har i mitt programmerade, det tar alldeles för lång tid att förstå och komma in i nya ramverk etc. Jag känner nog att det finns ganska mycke förbättringspotential här. Känns som det är för mycke kod i vissa routes. Kanske skulle jag byggt upp klasserna på ett bättre sätt, kanske kan lägga till någon funktion så man inte behöver skriva samma kod flera gånger etc. Sen har det hamnat en hel det i sessionen också vilket i sin tur gör att jag måste hämta och spara ner till sessionen ganska mycket. Detta är för att jag vill separera de olika kortlekarna med mera till de olika kraven för att få bättre kontroll när jag felsöker mej fram. På en färdig webbplats skulle man nog kunna använda sig av samma kortlek på flera ställen kanske.</p>
            
            <p>Ja, nu började jag kanske i den negativa änden. Det roliga är ju att jag faktiskt kommer framåt och att det känns roligt att jobba med.</p>
             
             
        <h3>Vilka är dina reflektioner så här långt med att jobb i Symfony med applikationskod enligt MVC?</h3><br>
            <p>Min första känsla med Symfony var att det kändes enklare och roligare än till exempel Express som vi hade i databas. Men sen blev det ju ändå lite krångligt i början. Både att platsen på studentservern tog slut (vilket ju egentligen inte har med Symfony att göra..tog bara ett tag att fatta det) och sen strulade även bakgrundsbilden. Och det retar mej ganska mycket men man får väl släppa det när även lärarteamet har svårigheter att hitta lösningen helt enkelt och försöka fokusera på lite mer rätt saker. Det känns även kanske lite enklare med Symfony för att man känner igen strukturen med routes och templates från tidigare ramverk. Det är ju inte exakt lika men liknande. Jag känner nog också att twig är en del där jag tappar flytet ibland. Men i stort så känns Symfony enligt MVC kul.</p>
             
        <h3>Vilken är din TIL för detta kmom?</h3><br>

            <p>Min till borde vara prioriteringslista. Tyvärr verkar jag inte lära mig det så då tar det ju lite mer tid än beräknat..</p>            
        <h2 id=\"kmom03\">kmom03</h2>
        <h3>Berätta hur det kändes att modellera ett kortspel med flödesdiagram och psuedokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?</h3>
            <p>Det kändes helt ok att modellera flödesschema och psuedokod. För egen del tror jag flödesschemat kändes som det hjälpte mej mer att strukturera upp projektet i huvudet. Det klarnade lite vilka routes jag kommer behöva och vad dom kommer behöva göra. Psuedokoden blir svår för min slags hjärna då det inte finns några standards eller ramar för hur det ska se ut samtidigt som det då ändå fanns ganska mycke regler om vad som är bra och dålig psuedokod. Det har jag svårt för, antingen finns en ram eller inte liksom. Och samtidigt som den ska va förståelig för andra än programmerare så ska man helst skriva den mer med programmeringsspråk så programmerare förstår vilka slags loopar etc man använder. Detta gör den ju mindre begriplig för andra. Det är väl något med detta jag missat att förstå kanske helt enkelt.</p>
        
        <h3>Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden, dina klasser och applikationen som helhet?</h3>
            <p>Jag tyckte detta var riktigt roligt och jag är glad att jag fått ihop ett litet kortspel. Med det sagt känner jag att det finns mycke som kan förbättras. Den största förändring jag skulle vilja göra här, som jag insåg kanske halvvägs in, är att jag skulle gjort en klass som hanterar spelare. Jag har gjort en klass som hanterar själva spelet men den klassen hanterar även spelarnas rundor och dom poäng korten spelarna har för tillfället. Nu i slutet insåg jag också att jag ju faktiskt gjort en klass CardHand som jag i princip glömde att använda och gjorde arrayer i Play21(den som hanterar själva spelet). Men då jag ligger illa till tidsmässigt här (som egentligen tyvärr handlar om annat än kursen. Alltså mitt jobb jag har utöver skolan) har jag fått välja att se dessa saker som framtida förbättringsmöjligheter. Så som ni förstår är jag tyvärr inte jättenöjd och det känns ju lite tråkigt när det samtidigt är så roligt att jobba med. Även tidsnöd har ju tyvärr gjort att jag nöjt mej med en lägre nivå med PHPstan än jag vill vara på.</p>
        
        <h3>Vilken är din känsla för att koda i ett ramverk som Symfony, så här långt in i kursen?</h3>
            <p>Med Symfony känns som det som det klarnar mer och mer ju mer jag arbetar. Det tog en stund innan jag insåg att det ju räcker att spara instansen av spelets spel klass i session för att få tillgång till allt vilket va ett av tillfällena man kanske inte kände sig så smart. Jag har verkligen försökt få ner storleken på routerna och försökt göra klasserna ”tjockare” men känner ändå att det ju blir ganska många rader kod ändå. Skulle va intressant om det kanske kunde finnas nåt ännu bättre sätt att jobba här. Även mina html.twig filer känns det som det skulle kunna finnas en förbättrings potential i. Känns som jag skulle kunna byggt upp dom i mindre moduler och använt include bättre här.</p>

        <h3>Vilken är din TIL för detta kmom?</h3>
            <p>Jag har börjat försöka sitta flera gånger kortare tider. Känns som det blir effektivare ibland då jag kanske inte fastnar länge i vissa problem utan att komma framåt. Även att försöka lära mej att släppa ett problem olöst och komma vidare i en annan del för att senare gå tillbaka verkar ju också bli mer effektivt. Hur nu hjärnan liksom kan lösa problem utan att man tänker på dom när man gör annat är en gåta för mej men jag är ändå väldigt tacksam att den gör det.</p>
        <h2 id=\"kmom04\">kmom04</h2>
        <h3>Berätta hur du upplevde att skriva kod som testar annan kod med PHPUnit och hur du upplever phpunit rent allmänt.</h3>
            <p>Det känns väl lite både lätt och svårt på samma gång. Det gäller ju att man faktiskt testar det som är väsentligt att testa av koden egentligen. Vissa test kan ju kännas lite onödiga nästan som tex om det är en int eller om variabeln har ett värde eller liknande. Samtidigt är det ju egentligen det ända att testa ibland. Så ja enkelt att testa sig fram och klara kraven om jag förstått dom rätt men också ett arbete som jag mycke väl förstår att man kan nörda in sig i och som kan sluka ofantliga mängder tid. Och då också få ganska mycke bättre tester.</p>

        <h3>Hur väl lyckades du med kodtäckningen av din kod, lyckades du nå mer än 90% kodtäckning?</h3>
            <p>Jag tycker jag lyckades bra med mina kort klasser. Jag har ju två stycken klasser som jag faktiskt inte använder än Player och CardHand. Dessa har varken kod eller tester. Dessa är kvar för jag tänker att jag antagligen kommer använda dom i slut projektet i kursen. Övriga klasser har full kodtäckning. Men med det sagt kan man ju fundera på vad jag testar för att få den kodtäckningen. Här finns ju potential att förbättra testerna ganska mycke. </p>

        <h3>Upplever du din egen kod som “testbar kod” eller finns det delar i koden som är mer eller mindre testbar och finns det saker som kan göras för att förbättra kodens testbarhet?</h3>
            <p>Större delen av koden var lätt testad. Det fanns några funktioner i spelklassen som jag kallat Play21 som var lite knepigare. Jag märker ju att ju mindre och enklare varje funktion är i sig själv ju lättare blir ju testningen. Några funktioner har jag som gör fler saker tex drar kort och sparar undan poäng med mera och ju mer komplicerat det blir ju svårare är det ju sen också att testa såklart.</p>

        <h3>Valde du att skriva om delar av din kod för att förbättra den eller göra den mer testbar, om så berätta lite hur du tänkte.</h3>
            <p>Vi kan titta på funktionen getWinner() som exempel. Dels innehåller funktionen en hel del if satser och returnerar olika svar beroende på spelarnas poäng och sen har jag inte haft någon enkel setScore funktion för varken banken eller player. Detta har sköts i playerDraw() och bankDraw() där spelare och bank drar kort och även då får sina poäng. I getWinner har större delen av if satserna villkor där poängen hämtas med hjälp av getPlayerScore och getBankScore. Dessa fylls ju på när man spelar men jag har ju inte behövt set funktioner tidigare. Detta blev ju komplicerat under testningen då poängen i spelet blir slumpmässigt och man inte har kontroll på hur man ska kunna testa dom olika villkoren. Jag löste det genom att göra varsin ny set funktion för bank och player för att enklare kunna genomföra testerna. Detta ger ju ett publikt sätt att ändra spelets ställning vilket ju kanske inte är jätte bra men testningen blev betydligt enklare. Ett alternativ som kanske så här i efterhand hade varit bättre kanske kunde va att mocka objektet Play21 istället. Så hade jag nog löst det nästa gång.</p>
        
        <h3>Fundera över om du anser att testbar kod är något som kan identifiera “snygg och ren kod”.</h3>
            <p>Jag skulle nog vilja säga att all kod på nåt sätt skulle kunna va testbar snygg och ren som ful och krånglig egentligen. Men klart att om din kod är kortare enklare och strukturerad på ett bra sätt verkar det ju onekligen bli lättare att även testa den. Det jag funderar på här blir ju att man kanske får fundera på vad man faktiskt vill sina funktioner/metoder ska utföra och vad du vill ha dom till. Är det rätt att göra metoderna mindre komplicerade och tappa saker man vill ska utföras och hur kan man strukturera om för att inte ”tappa” metodens syfte. Hur som så tror jag nog att ju mer erfaren programmerare man blir ju lättare håller man nog sin kod både snygg, ren och kort och det blir nog enklare och enklare att förstå hur och varför.</p>

        <h3>Vilken är din TIL för detta kmom?</h3>
            <p>Kanske inte är något jag direkt lärt mej men det slår mej att det finns två sidor med white box testing. Å ena sidan vet man ju själv vad man vill att koden ska genomföra å andra sidan känns det ju som man själv ganska lätt kan missa att se koden från ett annat perspektiv. Känns som man lätt kan missa vissa saker. Kanske egentligen inte har att göra med att man faktiskt har tillgång till källkoden utan mer att man är en enda person i och för sig.</p>
        <h2 id=\"kmom05\">kmom05</h2>
        <h3>Gick det bra att jobba igenom övningen med Symfony och Doctrine. Något särskilt du tänkte/reagerade på under övningen? </h3>
            <p>Jag tycker övningen flöt på bra. Kändes nästan som fusk med den här sortens färdigt paket på sätt och vis. Kanske också lite obekvämt att det skapas så mycket automatiskt fast det börjar jag nog ändå vänja mej vid lite nu med alla olika paket av olika slag. </p>

        <h3>Berätta om din applikation och hur du tänkte när du byggde upp den. Tänkte du något speciellt på användargränssnittet? </h3>
            <p>Jag tänkte lite på eshopen ifrån databaskursen och att jag antagligen kan ha ett liknande tänk här med gränssnittet. Jag har försökt att göra det användarvänligt med en startsida och egentligen en sida som listar bibliotekets böcker där man även kan hantera dom dvs read, update och delete. Själva c:t i CRUD hamnade ihop med bibliotekets reset på landnings sidan. Jag har även försökt att lägga till knappar för att ta sig tillbaka på olika ställen för att få ett bra flöde för användaren och även lagt in olika flash meddelanden som berättar för användaren vad som händer, tex att du updaterat en bok eller liknande. </p>

        <h3>Gick det bra att jobba med ORM i CRUD eller vad anser du om det, jämför gärna med andra sätt att jobba med databaser? </h3>
            <p>Jag tycker ORM i CRUD kändes enklare och mer lättförståeligt än tidigare försök med databaser jag haft. Jag hade kämpigt med databas kursen tidigare och valde därför att stanna med sqlite och inte använda mariadb. Kanske är det en förklaring till det. Känns lite tråkigt att ta den ”lättare” vägen här på ett sätt men tyvärr får jag prioritera och det känns som rätt prioritering i denna kurs just nu. </p>

        <h3>Vad är din uppfattning om ORM så här långt och relatera gärna till andra sätt att jobba med applikationskod mot databaser? </h3>
            <p>Det känns ju ganska smart att göra databasen objektorienterad eller hur man ska uttrycka sig. Känns som det öppnar upp även för programmerare som inte är experter på databaser att hantera just en databas. </p>

        <h3>Vilken är din TIL för detta kmom? </h3>
            <p>Jo men min TIL den här gången måste nog ändå va att databasprogrammering ju faktiskt är riktigt kul när man får grepp om det. Nån gång i framtiden ska jag försöka bli riktigt grym på det. </p>
        <h2 id=\"kmom06\">kmom06</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>
        <h2 id=\"kmom07\">kmom07</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>
        <h2 id=\"kmom08\">kmom08</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>
        <h2 id=\"kmom09\">kmom09</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>
        <h2 id=\"kmom10\">kmom10</h2>
        <p>Här kommer redovisningstexten för detta kursmoment.</p>

    </div>
</div>
{% endblock %}
", "/report.html.twig", "/home/kb/dbwebb-kurser/mvc/me/report/templates/report.html.twig");
    }
}
