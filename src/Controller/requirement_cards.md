Föreslagna klasser
-----------------------


- Card, ett kort
- CardHand, en giv av kort, en korthand
- DeckOfCards, en kortlek

Krav
-------------

Kraven är uppdelade i sektioner.
Skapa klasser och använd dem i webbsidor

Börja med att utveckla dina klasser och testa dem i webbsidor enligt följande.
------------------------------------------------------------------------------------

    ✔ Skapa en kontroller i Symfony där du kan skapa routes för denna delen av uppgiften.

     ✔ Gör en landningssida session som skriver ut innehållet i sessionen så det blir enkelt att debugga vad sessionen innehåller.

    ✔ Lägg till routen session/delete som raderar allt innehåll i sessionen. Det är dessutom bra att ha när du utvecklar och vill testa att du initierar sessionen på rätt sätt.

    ✔ Använd flash-meddelande för att ge användaren feedback om att “nu är sessionen raderad”.

    ✔ Gör en förstasida card som länkar till samtliga undersidor för denna uppgiften. Detta är din “landningssida” för denna uppgiften. Placera länken till sidan i din navbar så den är lätt att nå.

    ✔ Kortleken skall hanteras i sessionen. Alla routes som är beroende av sessionen måste se till att det finns en giltig session, eller starta en sådan session.

    På din landdningssida, berätta kort om strukturen på dina klasser, vilka klasser har du och hur är de relaterade till varandra. Rita ett UML klass diagram och visa i sidan.

    ✔ Skapa en sida card/deck som visar samtliga kort i kortleken sorterade per färg och värde.

    ✔ Skapa en sida card/deck/shuffle som visar samtliga kort i kortleken när den har blandats.

    ✔ Skapa en sida card/deck/draw som drar ett kort från kortleken och visar upp det. Visa även antalet kort som är kvar i kortleken.

    ✔ Skapa en sida card/deck/draw/:number som drar :number kort från kortleken och visar upp dem. Visa även antalet kort som är kvar i kortleken.

    ✔ Kortleken skall sparas i sessionen så om man anropar sidorna draw och draw/:number så skall hela tiden antalet kort från korleken minskas tills kortleken är slut. När man gör card/deck/shuffle så kan kortleken återställas.

    [OPTIONELLT] Skapa en sida card/deck/deal/:players/:cards som delar ut ett antal :cards från kortleken till ett antal :players och visar upp de korten som respektive spelare har fått. Visa även antalet kort som är kvar i kortleken.

Bygg JSON API
------------------

Denna delen gäller främst JSON API krav.

    ✔ Bygg vidare på din landningssida api/ som visar en webbsida med en sammanställning av alla JSON routes som din webbplats erbjuder. Varje route skall ha en förklaring vad den gör.

    ✔ Skapa en kontroller i Symfony där du kan skapa routes för ett JSON API för denna delen av uppgiften.

    ✔ Skapa en route GET api/deck som returnerar en JSON struktur med hela kortleken sorterad per färg och värde.

    ✔ Skapa en route POST api/deck/shuffle som blandar kortleken och därefter returnerar en JSON struktur med kortleken. Den blandade kortleken sparas i sessionen.

    Skapa route POST api/deck/draw och POST api/deck/draw/:number som drar 1 eller :number kort från kortleken och visar upp dem i en JSON struktur samt antalet kort som är kvar i kortleken. Kortleken sparas i sessionen så om man anropar dem flera gånger så minskas antalet kort i kortleken.

    [OPTIONELLT] Skapa en route POST api/deck/deal/:players/:cards som delar ut ett antal :cards från kortleken till ett antal :players och visar upp de korten som respektive spelare har fått i en JSON struktur. Visa även antalet kort som är kvar i kortleken.

    text till home cards
    Till de här kortspelen har jag gjort 4st klasser, Card, CardGraphic, DeckOfCards och CardHand. Nedan ser ni ett UML diagram över klasserna. Klassen Card innehåller värden för varje enskilt kort dvs två värden färg(suit) och värde(value). De andra klasserna hanterar dessa kort på olika sätt. CardGraphic är en utveckling/specialicering av klassen Card och ger då kortet en utf bild av färgen istället för en text. Förhållandet mellan dessa klasser kallas för arv. 

    Om jag förstår allt rätt så skulle vi kunna benämna DeckOfCards och CardHands relation till Card som 

    DeckOfCard komposition - ägda objektet skapas i ägarens konstruktor
    cardHand aggretion -  ägda objektet skickas som ett argument till konstruktorn

kmom03
----------------

    Krav

Kraven är uppdelade i sektioner.
Landningssida och intro
-------------------------------

    Skapa en landdningssida för spelet game/ där du samlar information om spelet och kan starta spelet. Placera länken i webbplatsens navbar.

    I din landningssida, inled med en kort beskrivning av ditt kortspel och reglerna för hur det fungerar.

    Placera en knapp eller länk som leder till att spelet börjar.

Problemlösning
----------------------

Du skall problemlösa det spelet du valt med flödesschema och pseudokod. Gör din problemlösning innan du påbörjar att implementera spelet.

    Samla all din dokumentation i en webbsida under routen game/doc och länka till dokumentationssidan från din landningssida.

    Skapa ett flödesschema som representerar hur du tänker lösa grunderna i spelet. Resultatet kan du placera som en bild i webbsidan för dokumentationen. Det behöver inte vara en komplett lösning, en dellösning räcker bra.

    Skapa psuedokod som visar hur du tänker lösa delar av spelet. Du kan spara resultatet som text eller bild men visa upp det i webbsidan för dokumentationen. Det behöver inte vara en komplett lösning, en dellösning räcker bra.

    Fundera igenom vilka klasser du behöver för att implementera spelet. Beskriv klasserna i text med klassens namn och en mening som beskriver vad klassens syfte är. Håll det kort och enkelt.

Följande krav är optionella och du gör dem om du har tid och lust.

    Rita ett UML klass diagram som du också visar i webbsidan för dokumentationen.

Kortspel
-------------

Bygg ditt kortspel i Symfony med objektorienterade konstruktioner i PHP och försök tänka till så att du får “snygg kod”.

    All applikationskod placerar du i klasser som din kontroller använder. Se till att du har så lite kod som möjligt i din kontroller. Om du har mycket kod där så flyttar du den till en egen klass. Tänk att kontrollern skall vara tunn (lite kod) och modellerna (applikationens klasser) kan vara tjocka (mycket kod).

    Använd templatefiler för att rendera webbsidorna.

    Bygg spelet så att det fungerar minst enligt de regler som visas i introduktionen ovan.

    Banken behöver inte vara speciellt intelligent i sitt kortspel. Det räcker att den kan utföra sin uppgift och spela spelet. En enkel variant är att banken alltid plockar kort tills den har 17 eller mer, sedan stannar den.

Kortspel valfritt
----------------------

Följande krav är optionella och du gör dem om du har tid och lust.

    Gör så att spelaren kan satsa pengar. Man kan satsa en viss summa vid varje spel. Håll koll på hur mycket pengar som spelaren och banken har.

    Låt banken och spelaren börja med 100 pengar var. När någon har 0 pengar har den spelaren förlorat.

    Korträkning med sannolikhet att få högt/lågt kort. Låt bli att blanda kortleken inför varje ny runda och spela tills kortleken är slut. Visa statistik som berättar sannolikheten för att få ett visst kort. Visa statistiken så att spelaren kan ha hjälp av den. Tex om spelaren har 15, visa sannolikheten för att spelaren inte skall bli tjock om nytt kort tas.

    Bygg en smartare bank som spelar på ett “intelligent sätt”. Låt banken ta hjälp av statistiken.

    Låt spelaren välja om den spelar mot den “dumma” eller den “smarta” banken.

    Förklara taktiken för den “dumma” och den “smarta” banken på dokumentationssidan.

Kortspel JSON
------------------

    I din landningssida för api/ lägger du till routen api/game som visar upp den aktuella ställningen för spelet i en JSON struktur.

