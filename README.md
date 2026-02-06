# Moment 2 – BucketList 
## Webbutveckling för WordPress (DT209G)

**Författare:** Maamoun Okla  
**HT2025**

## Beskrivning
Detta repository innehåller en enklare webbplats byggd med HTML, CSS och objektorienterad PHP.  
Webbplatsen är en **Bucketlist** där man kan lägga till, visa och radera saker man vill göra. All data lagras i en **MySQL/MariaDB**-databas.

## Demo
- [Live demo](https://studenter.miun.se/~maok1900/writeable/DT209G%20/moment2/index.php)

## Funktionalitet
- Visa alla bucketlist-items (SELECT)
- Lägga till nya items via formulär (INSERT)
- Radera items (DELETE)
- Validering: inga tomma fält + tydliga felmeddelanden
- Datum sparas automatiskt (created_at)

## Programstruktur
- `index.php` – info om uppgiften + reflektioner
- `bucketlist.php` – formulär + lista (CRUD)
- `aimodels.php` – hur AI användes i momentet
- `includes/` – header, footer, meny, config och db-anslutning
- `includes/classes/` – klasser (t.ex. `BucketItem.class.php`)
- `db/` – SQL-script för tabell
- `diagrams/` – ER-diagram + UML-diagram
- `css/` – stylesheets

## Teknik
- PHP (OOP)
- PDO + MySQL/MariaDB
- HTML / CSS
- XAMPP under utveckling.
- Filezilla för publicering på MIUN
