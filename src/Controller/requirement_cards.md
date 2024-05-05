kmom04
----------------

Installera och konfigurera
----------------------------------

    ✓ Installera phpunit och lägg till det som ett skript composer phpunit.

    ✓ Gör så att kodtäckningsrapport för HTML genereras till katalogen docs/coverage.

Bygg en test suite
-------------------------

    Skapa en test suite för ditt kortspel.

    Dina modellklasser är dina testobjekt och varje modellklass skall ha minst en testklass med testfall.

    Varje testfall har minst en assertion.

    Du har en kodtäckning som överträffar 70% på varje testobjekt men sikta mot att nå över 90% kodtäckning.

    Det är helt okey om du vill uppdatera din källkod för att göra den bättre eller mer testbar. Code refactoring (att skriva om sin kod för att förbättra den) är ofta ett bra alternativ.

    ✓ Kör enhetstesterna med composer phpdoc.

[OPTIONELLT] Som en extra utmaning kan du se om dina controllers är testbara med phpunit och i vilken mån du kan testa dem eller vad som krävs för att du skall kunna testa dem.
Dokumentera kod

    ✓ Välj ut minst en av dina klasser och lägg till kommentarer med PHP DockBlock. Dina kommentarer skall minst innehålla en rads beskrivning av vad metoderna och klassen gör.

    ✓ Generera dokumentationen till katalogen docs/api med kommandot composer phpdoc.

Utvecklingsmiljö
---------------------------

    ✓ Fixa till din kod enligt den kodstil du kör genom att köra composer csfix.

    ✓ Kolla din kod hur den matchar dina linters genom att köra composer lint.

    Dubbelkolla att dina testfall passerar med composer phpunit.

    ✓ Generera documentation av din kod med composer phpdoc.

