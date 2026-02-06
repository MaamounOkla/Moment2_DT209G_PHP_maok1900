<?php

$title = "Bucketlist";

// Kopplar upp databasen och ger $pdo
require_once "includes/db.php";

// Skapar ett objekt som hanterar CRUD mot tabellen
$bucket = new BucketItem($pdo);

// Variabler för formulär + felmeddelanden
$errors = [];
$name = "";
$description = "";
$priority = "";

// RADERA
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete_id"])) {
    $deleteId = (int)($_POST["delete_id"] ?? 0);
    $bucket->deleteItem($deleteId);

   // Redirect för att undvika dubbelpost vid refresh
    header("Location: bucketlist.php");
    exit;
}

// SPARA
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["save_item"])) {
    // Hämtar och trimmar input
    $name = trim($_POST["name"] ?? "");
    $description = trim($_POST["description"] ?? "");
    $priority = trim($_POST["priority"] ?? "");

    // Validering
    if ($name === "") $errors["name"] = "Fyll i ett namn.";
    if ($description === "") $errors["description"] = "Fyll i en beskrivning.";

    // Prioritet måste vara en siffra 1–5
    if ($priority === "" || !ctype_digit($priority)) {
        $errors["priority"] = "Välj en prioritet (siffra).";
    } else {
        $p = (int)$priority;
        if ($p < 1 || $p > 5) $errors["priority"] = "Prioritet måste vara 1–5.";
    }

    // Om allt är OK, spara i databasen
    if (empty($errors)) {
        $bucket->addItem($name, $description, (int)$priority);

       // Redirect efter insert
        header("Location: bucketlist.php");
        exit;
    }
}

// Hämta alla items från databasen 
$items = $bucket->getAll();

// Skyddar mot XSS när vi skriver ut data i HTML
function e(string $str): string {
    return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}

include "includes/header.php";
?>

<h1>Bucketlist</h1>
<hr>

<h2>Lägg till</h2>
<form method="post" action="bucketlist.php">
    <input type="hidden" name="save_item" value="1">

    <label>Namn</label><br>
    <input name="name" value="<?= e($name) ?>"><br>
    <?php if (isset($errors["name"])): ?>
        <small class="error"><?= e($errors["name"]) ?></small><br>
    <?php endif; ?>

    <label>Beskrivning</label><br>
    <textarea name="description"><?= e($description) ?></textarea><br>
    <?php if (isset($errors["description"])): ?>
        <small class="error"><?= e($errors["description"]) ?></small><br>
    <?php endif; ?>

    <label>Prioritet (1–5)</label><br>
    <input type="number" name="priority" min="1" max="5" value="<?= e($priority) ?>"><br>
    <?php if (isset($errors["priority"])): ?>
        <small class="error"><?= e($errors["priority"]) ?></small><br>
    <?php endif; ?>

    <button type="submit">Spara</button>
</form>

<hr>

<h2>Min Bucketlist</h2>
<?php if (empty($items)): ?>
    <p>Inga saker än.</p>
<?php else: ?>
    <ul>
        <?php foreach ($items as $row): ?>
            <li class="bucketli">
                (prio <?= (int)$row["priority"] ?>)
                <strong><?= e($row["name"]) ?></strong><br>
                <?= e($row["description"]) ?><br>
                <small><?= e($row["created_at"]) ?></small>

                <!-- Eget formulär för radering av just detta item -->
                <form method="post" action="bucketlist.php" style="display:inline;">
                    <input type="hidden" name="delete_id" value="<?= (int)$row["id"] ?>">
                    <button type="submit" onclick="return confirm('Radera?')">Radera</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php include "includes/footer.php"; ?>
