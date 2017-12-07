Speedtest
===============================
Den här gången kommer vi att se hur snabba några webbplatser är.

Verktyg: <a href="https://developers.google.com/speed/pagespeed/">PageSpeed</a> och network(devtools).

Check the googlesheet with the results <a href="https://docs.google.com/spreadsheets/d/19JZtFBGsxQkC80mEkAkq7X07OKWJtg9Ad9isFiGDhDs/edit?usp=sharing">here.</a>
<div class="themes-article">
    <h3><a href="https://dbwebb.se">dbwebb</a></h3>
    [FIGURE src="image/websites/dbwebb.png" caption=""]
    <p>Snabbaste sidan och den som fick högsta betyg på både mobile och desktop.</p>

    Det som kan förbättras är nämligen den mobila versionen. Optimeringsmöjligheter till dbwebb.se enligt PageSpeed (Mobile) är att ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten, utnyttja cachelagring i webbläsare , optimera bilder och förminska HTML


    <h3><a href="https://csn.se">CSN</a></h3>
    [FIGURE src="image/websites/csn.png" caption=""]
    <p>CSNs nya webbplatsen fick "Needs work" på desktop och "Poor" på mobile.</p>

     Den här webbsidan fick samma optimeringsmöjligheter som ovanstående och några extra. De borde också, förminska CSS och aktivera komprimering. Webbsidan laddade tre gånger långsammare än <a href="https://dbwebb.se">dbwebb.se</a> men hade bara dubbelt så mycket av resurser.

    <h3><a href="https://antagning.se">Antagning</a></h3>
    [FIGURE src="image/websites/antagning.png" caption=""]
    <p>Antagning.se fick den sämsta betyget av de här webbsidorna. De fick "Poor" på både desktop och mobile.</p>

    Den här webbsidan fick samma optimeringsmöjligheter som ovanstående webbsidor och lite till. Exempelvis, de borde unvika omdirigeringar från målsidan och priorieta synligt innehåll.
    <hr>
    <p><strong>Vanligaste optimeringsmöjligheter:</strong></p>
    <h5>Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten</h5>
    Det gör att renderingen tar längre tid.

    <h5>Utnyttja cachelagring i webbläsare</h5>
    När du anger ett utgångsdatum eller en högsta ålder i HTTP-rubrikerna för statiska resurser instrueras webbläsaren att läsa in tidigare hämtade resurser från hårddisken istället för via nätverket.

    <h5>Optimera bilder</h5>
    Korrekt formatering och komprimering av bilder kan spara många byte.

    <h5>Förminska HTML</h5>
    <p>Om du komprimerar HTML-kod, inklusive JavaScript och CSS som är inbäddat i den, kan du spara många byte och göra så att det går snabbare att hämta och tolka sidan.</p>
    <hr>

    <h3>Sammanfattning:</h3>

    De vanligaste förbättringsåtgärderna för de här webbsidorna finns på den mobila versionen. Alla de fick mindre betyg på den mobila versionen och borde kanske fokusera på det, eftersom allt fler surfar på mobilen nuförtiden.

    </p>I mitt tycke, en webbsida borde inte ta mer än 2-4 sekunder att laddas. Dbwebb.se klarar den här gränsen smidigit! Även om det finns många resurser tycker jag att 2-4 sekunder är rimligt om man applicerar tipsen från PageSpeed.</p>
</div>
