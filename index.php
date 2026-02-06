<?php
$title = "Startsida";
include("includes/header.php");
?>

<h1>Beskrivning av lösningen</h1>
<hr>

<section class="report">

  <div class="personal-information">
    <h2 class="name">Författare: Maamoun Okla</h2>
    <h2 class="kurs">Kurs: DT209G - Webbutveckling med Wordpress</h2>
    <h2 class="termin">Termin: HT25</h2>

    <div class="logo">
      <img src="images/logo.png" alt="Logo">
    </div>
  </div>

  <hr>

  <div class="section1">

    <h2>1. Syfte</h2>
    <p>
      I Moment 2 byggs en enkl webbplats med <strong>HTML</strong>, <strong>CSS</strong> och
      <strong>objektorienterad PHP</strong> där data sparas i en <strong>MySQL/MariaDB</strong>-databas.
      Webbplatsen fungerar som en <strong>Bucketlist</strong> där användaren kan lägga till saker den vill göra,
      se alla poster och radera poster. Målet är att förstå hur PHP kopplas till en databas och hur man bygger en
      tydlig filstruktur med OOP-PHP som är lätt att underhålla samt kunna publicera detta till en online databas.
    </p>

    <br><br>

    <h2>2. Konstruktion och utvecklingsmiljö</h2>

    <p>Teknik och verktyg som användes:</p>
    <ul>
      <li>Visual Studio Code.</li>
      <li>XAMPP (Apache + MariaDB/MySQL) under utveckling.</li>
      <li>phpMyAdmin för att skapa tabell och testa data.</li>
      <li>HTML och CSS för layout och responsiv design.</li>
      <li>PHP (objektorienterat) för logik och databashantering.</li>
      <li>Drawoio för att skapa UML-och ER-Diagram</li>
    </ul>

    <p>Databasen innehåller en enda tabell för bucketlist:</p>
    <ul>
      <li>
        <code>bucket_items</code> med fält: <code>id (PK)</code>, <code>name</code>, <code>description</code>,
        <code>priority</code>, <code>created_at (CURRENT_TIMESTAMP)</code>.
      </li>
    </ul>

    <p>Funktionalitet på webbplatsen:</p>
    <p><i>CRUD-funktionaliteter:</i></p>
    <ul>
      <li><strong>Visa</strong> alla poster (SELECT).</li>
      <li><strong>Lägga till</strong> poster via formulär (INSERT).</li>
      <li><strong>Radera</strong> poster (DELETE).</li>
    </ul>

    <p>Validering:</p>
    <ul>
      <li>Tomma värden kan inte sparas.</li>
      <li>Tydliga felmeddelanden visas vid formuläret.</li>
      <li>Prioritet måste vara en siffra (1–5).</li>
    </ul>

    <!-- info about the class ER diagram -->
    <h3>ER-diagram</h3>
    <p>
      ER-diagrammet visar hur databasen använder en tabell (<code>bucket_items</code>)
      där varje rad är en sak i bucketlist. <code>id</code> är primärnyckel och resten av fälten lagrar namn,
      beskrivning, prioritet och datum när posten skapades. Eftersom lösningen bara behöver en tabell finns inga
      relationer.
    </p>
    <div class="diagram-container">
      <img src="diagrams/ERdiagram.png" alt="ER-diagram">
      <p><i>ER-diagram bucket-items</i></p>
      <br>
    </div>

    <!-- info about the class uml diagram -->
    <h3>UML-diagram</h3>
    <p>
      UML-diagrammet visar hur PHP-klassen är byggd. Klassen <code>BucketItem</code> tar emot en PDO-anslutning i
      konstruktorn och innehåller metoder för att hämta alla poster (<code>getAll()</code>), lägga till en post
      (<code>addItem()</code>) och radera en post (<code>deleteItem()</code>).
    </p>
    <div class="diagram-container">
      <img src="diagrams/UMLDiagram.png" alt="UML-diagram">
      <p><i>UML-diagram bucketItem</i></p>
    </div>

    <br><br>

    <h2>3. Filstruktur</h2>
    <p>Projektet är uppdelat för att hålla koden tydlig:</p>
    <ul>
      <li><code>includes/</code> för gemensamma delar som header, footer och meny.</li>
      <li><code>includes/db.php</code> för databasanslutning (PDO).</li>
      <li><code>bucketlist.php</code> för listan, formulär och databasanrop.</li>
      <li><code>aimodels.php</code> för redovisning av AI-stöd.</li>
    </ul>

    <br><br>

    <h2>4. Reflektioner om PHP</h2>
    <p>
      Jag tyckte att PHP var lite “old school” från början men med tiden upptäkte jag att det är ändå rätt skönt när man
      väl kommer in i det. Det känns praktiskt när man vill
      få saker att hända snabbt på serversidan, speciellt när man jobbar med formulär och databas. Samtidigt märker man
      direkt
      att man måste hålla bra struktur, annars blir det lätt rörigt när HTML och PHP blandas.
      <br><br>

      Det jag gillar mest är att det är lätt att koppla ihop en sida med en databas och bygga enkla funktioner utan att
      behöva
      massa setup. Men man måste också vara noga med säkerhet och validering, annars kan det bli problem.
    </p>

    <p><strong>Fördelar:</strong></p>
    <ul>
      <li>Enkelt att bygga formulär och ta emot data från användaren.</li>
      <li>Fungerar bra med MySQL/MariaDB.</li>
      <li>Passar bra för mindre webbprojekt och är bra grund för att vidareutveckla tema för WordPress.</li>
    </ul>

    <br>

    <p><strong>Nackdelar:</strong></p>
    <ul>
      <li>Det är lätt att blanda logik och HTML och få rörig kod om man inte har struktur.</li>
      <li>Man måste tänka på säkerhet: validering, escaping och prepared statements.</li>
      <li>Större projekt kräver att man planerar filstruktur och jag känner att det kan lätt bli väldigt mycket kod.</li>
    </ul>
  </div>

  <br><br>
  <hr>
</section>

<?php include("includes/footer.php"); ?>
