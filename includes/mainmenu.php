<?php
// Array med undersidor
$pages = array(
    "index.php" => "Hem",
    "bucketlist.php" => "Bucket List",
    "aimodels.php" => "Ai Modeller"
);
?>

<nav id="main-menu">
    <ul>
        <?php
        // Loopa igenom arrayen
        foreach ($pages as $url => $title) {

            // Kolla om undersidan är aktiv
            $current = basename($_SERVER["SCRIPT_FILENAME"]);

            // Skriv ut en länk för varje undersida - kolla om det är aktiv sida
            if ($url == $current) {
                echo "<li class='current'><a href='$url'>$title</a></li>";
            } else {
                echo "<li><a href='$url'>$title</a></li>";
            }
        }
        ?>
    </ul>
</nav>