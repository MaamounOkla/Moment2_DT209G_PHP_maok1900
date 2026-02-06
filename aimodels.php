<?php
$title = "AI-stöd";
include("includes/header.php");
?>

<h1>AI-stöd i Moment 2</h1>
<hr>


<section class="report">

        <h2>1. Hur jag använde AI</h2>
        <p>
                Jag byggde första delen av lösningen själv genom att följa lärarens videogenomgångar steg för steg,
                vilket hjälpte mig att bli “värm i kläderna” med PHP-syntax och logik för denna uppgift. Efter det
                använde jag ChatGPT för
                att få förslag på en bra filstruktur och hur man kan bygga ett enkelt bucketlist-formulär i PHP som
                kopplas till en SQL-databas för en sådan uppgift. Jag använde också AI för att få förslag på kodstruktur
                och implementation, samt för att upptäcka olika sätt att lösa samma problem.
                AI använde jag mest som ett stöd när jag fastnade
                eller ville få en snabb överblick, till exempel för att förklara en kodsnutt, hjälpa mig förstå en
                feltext och debugga problem, eller ge förslag på hur jag kunde formulera validering och kommentarer.
                I vissa fall använde jag även AI för att få tips om WordPress/PHP best practices och hur jag kunde
                förbättra eller optimera delar av min befintliga kod. Själva strukturen och
                implementationen gjorde jag dock själv, och jag anpassade alltid AI-förslag till min egen kod.
        </p>


        <br><br>

        <h2>2. När AI hjälpte mest</h2>
        <p>
                Det AI hjälpte mest med var att:
        <ul>


                <li>Förklara kodsnuttar som jag inte förstod helt (vad varje del gör och varför)</li>
                <li>Förstå felmeddelanden och debugga problem när något inte fungerade som tänkt</li>
                <li>Ge exempel på hur man kan koppla PHP till MySQL med PDO och köra SELECT/INSERT/DELETE</li>
                <li>Ge förslag på kodstruktur och implementation (t.ex. hur filer kan delas upp och ansvar separeras)
                </li>
                <li>Hjälpa med validering och tydliga felmeddelanden i formulär.</li>
                <li>Hjälpa med kommentarer i koden.</li>
        </ul>
        </p>

        <p>
                Just kommentarer var faktiskt en sak jag märkte är nyttig. När man är väldigt inne i sin egen kod så
                känns allt “självklart” och då är det lätt att skriva för dåliga kommentarer, eller inga alls. Där kunde
                AI hjälpa till att formulera enklare och tydligare kommentarer som någon annan faktiskt kan förstå. Men
                det är viktigt att läsa kommentarerna så man granskar om man är nöjd med kommentaren.
                <br><br>
                Ett konkret exempel på när AI hjälpte mycket var när min MySQL i XAMPP fortsatte krascha strax efter
                start. Jag testade själv i ungefär en timme (omstart, kolla loggar, reinstall osv), men inget hjälpte.
                Efter att jag beskrev problemet för ChatGPT fick jag ett förslag som faktiskt löste det: det handlade
                tydligen om att någon fil i MySQLs datafiler var korrupt. Lösningen var att gå in i XAMPP-mappen (typ
                xampp/mysql/) och byta namn på backup-mappen/filerna och återställa från backup (t.ex. döpa om data och
                använda något från backup). Efter det startade MySQL igen och allt funkade. Det var lite en sån “magisk”
                grej som man annars lätt fastnar på väldigt länge.
        </p>

        <br><br>

        <h2>3. Dokumentation vs AI</h2>
        <p>
                Samtidigt tycker jag fortfarande att dokumentation ofta är bättre när man vill få den större bilden. Om
                man bara söker ett “direkt svar” så kan man missa varför saker fungerar. För mig är det ofta när man gör
                misstag, får fel, och sen letar sig fram via dokumentation och flera källor + gå tillbaka till
                föreläsningar och lärarens instruktioner, som man lär sig ett nytt språk på riktigt. Det är så jag har lärt mig under mina år som webbutvecklarstudent.
        </p>

        <br><br>

        <h2>4. Fördelar och nackdelar med AI </h2>
        <p>
                Den stora fördelen är att AI gör saker snabbare. Man kan få ett exempel direkt och sen anpassa det till
                sin egen kod, eller få alternativa sätt att lösa samma problem. Men jag märkte också en nackdel: ibland
                tar AI en annan väg än den jag tänkte, och då kan
                det nästan bli jobbigare att “rätta tillbaka” än att bara lösa det själv från början.
        </p>
        <br>
        <p>
                Det gjorde också att jag fattade hur viktigt det är med prompts. Om man skriver otydligt eller missar
                detaljer så får man ofta ett svar som är “nästan rätt”, men inte helt. När jag istället skrev mer exakt
                (filstruktur, vad jag redan har testat, vad som ska vara minimalt osv) så blev svaren mycket bättre.
        </p>
        <br>
        <p>
                Jag märkte också att det hjälper att “ställa in” AI så att den svarar mer rakt, logiskt och utan onödig
                text. Antingen kan man göra det direkt i prompten (t.ex. be om korta, tydliga svar), eller genom att
                använda anpassningar/inställningar där man kan ange hur man vill att AI ska svara. Då blir svaren mer
                användbara, speciellt när man sitter och felsöker och bara vill komma vidare.
        </p>

        <p>
                Jag hade gärna testat fler AI-verktyg också, men jag hade inte så mycket tid. För den här uppgiften
                kändes ChatGPT mer än tillräckligt som stöd.
        </p>

        <br><br>

        <h2>5. Slutsats</h2>
        <p>
                AI kan spara mycket tid och är ett bra stöd när man kör fast, till exempel för att få en snabb
                förklaring eller ett exempel att utgå ifrån. Samtidigt försöker jag alltid kolla i dokumentationen och
                inte luta mig helt mot AI, eftersom den kan göra misstag och ibland låta väldigt säker även när det blir
                fel. För mig är det fortfarande eget problemlösande som gör att man lär sig på riktigt.
                <br><br> Jag upplever att AI fungerar bäst när jag redan har koll på vad jag håller på med och kan
                skriva
                bra prompts, då blir det som en virtuell kodmentor och en trygg “playground” där jag kan testa idéer,
                få snabb feedback, förstå felmeddelanden, och debugga varför något fungerar eller inte. Men om man inte
                är tydlig, eller om man
                själv inte har grundkoll, kan AI lätt bli missvisande och leda en in på en annan väg än den man
                egentligen borde ta. <br><br>
                Samtidigt märker jag att jag blir lite mer skeptisk när AI kommer med “större” och mer riskfyllda
                förslag, typ att ändra eller byta namn på SQL-datafiler i XAMPP för att lösa en krasch. Sådant kan
                funka, men om man gör fel kan det också skapa fler problem eller göra att man tappar data. Därför
                försöker jag alltid ha bra magkänsla och inte bara köra på, utan dubbelkolla med säkra källor (t.ex.
                dokumentation, loggar, forum från pålitliga källor) och förstå vad steget faktiskt gör innan jag testar.
                Annars finns risken att man hamnar i en ond spiral där man bara följer nästa AI-svar och gör ännu
                djupare fel istället för att hitta grundorsaken.
                <br><br>
                Framöver kommer Chatgpt och andra AI-modeller säkert bli ännu bättre, och utvecklingen går snabbt. Men
                just nu ser jag det som ett
                komplement. Jag tänker så: dokumentation, föreläsningar, och kursteori/kurslitteratur för helheten och
                förståelsen, och AI som en snabb hjälp för smådetaljer,
                förklaringar, testexmpel och ibland hjälp med tydligare kommentarer.
        </p>


        <br><br>
        <hr>
</section>
<?php include("includes/footer.php"); ?>