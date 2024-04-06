Skapa klasser och använd dem i webbsidor
------------------------------------------------

klasser

Card, ett kort
CardHand, en giv av kort, en korthand
DeckOfCards, en kortlek


Börja med att utveckla dina klasser och testa dem i webbsidor enligt följande.

    Skapa en kontroller i Symfony där du kan skapa routes för denna delen av uppgiften.

    Gör en landningssida session som skriver ut innehållet i sessionen så det blir enkelt att debugga vad sessionen innehåller.

    Lägg till routen session/delete som raderar allt innehåll i sessionen. Det är dessutom bra att ha när du utvecklar och vill testa att du initierar sessionen på rätt sätt.

    Använd flash-meddelande för att ge användaren feedback om att “nu är sessionen raderad”.

    Gör en förstasida card som länkar till samtliga undersidor för denna uppgiften. Detta är din “landningssida” för denna uppgiften. Placera länken till sidan i din navbar så den är lätt att nå.

    Kortleken skall hanteras i sessionen. Alla routes som är beroende av sessionen måste se till att det finns en giltig session, eller starta en sådan session.

    På din landdningssida, berätta kort om strukturen på dina klasser, vilka klasser har du och hur är de relaterade till varandra. Rita ett UML klass diagram och visa i sidan.

    Skapa en sida card/deck som visar samtliga kort i kortleken sorterade per färg och värde.

    Skapa en sida card/deck/shuffle som visar samtliga kort i kortleken när den har blandats.

    Skapa en sida card/deck/draw som drar ett kort från kortleken och visar upp det. Visa även antalet kort som är kvar i kortleken.

    Skapa en sida card/deck/draw/:number som drar :number kort från kortleken och visar upp dem. Visa även antalet kort som är kvar i kortleken.

    Kortleken skall sparas i sessionen så om man anropar sidorna draw och draw/:number så skall hela tiden antalet kort från korleken minskas tills kortleken är slut. När man gör card/deck/shuffle så kan kortleken återställas.

    [OPTIONELLT] Skapa en sida card/deck/deal/:players/:cards som delar ut ett antal :cards från kortleken till ett antal :players och visar upp de korten som respektive spelare har fått. Visa även antalet kort som är kvar i kortleken.

Bygg JSON API
-------------------

Denna delen gäller främst JSON API krav.

    Bygg vidare på din landningssida api/ som visar en webbsida med en sammanställning av alla JSON routes som din webbplats erbjuder. Varje route skall ha en förklaring vad den gör.

    Skapa en kontroller i Symfony där du kan skapa routes för ett JSON API för denna delen av uppgiften.

    Skapa en route GET api/deck som returnerar en JSON struktur med hela kortleken sorterad per färg och värde.

    Skapa en route POST api/deck/shuffle som blandar kortleken och därefter returnerar en JSON struktur med kortleken. Den blandade kortleken sparas i sessionen.

    Skapa route POST api/deck/draw och POST api/deck/draw/:number som drar 1 eller :number kort från kortleken och visar upp dem i en JSON struktur samt antalet kort som är kvar i kortleken. Kortleken sparas i sessionen så om man anropar dem flera gånger så minskas antalet kort i kortleken.

    [OPTIONELLT] Skapa en route POST api/deck/deal/:players/:cards som delar ut ett antal :cards från kortleken till ett antal :players och visar upp de korten som respektive spelare har fått i en JSON struktur. Visa även antalet kort som är kvar i kortleken.
