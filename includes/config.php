<?php
$sitename = "PHP - Moment 2";

 // Dev mode: true lokalt, false på miun
$host = $_SERVER["HTTP_HOST"] ?? "";
$devMode = (strpos($host, "localhost") !== false || strpos($host, "127.0.0.1") !== false);

// Felmeddelanden
if ($devMode) {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
} else {
    error_reporting(0);
    ini_set("display_errors", 0);
}

// Autoload av klasser (från includes/classes)
spl_autoload_register(function ($className) {
    $file = __DIR__ . "/classes/" . $className . ".class.php";
    if (file_exists($file)) {
        require_once $file;
    }
});

// Ladda rätt DB-inställningar
$dbConfig = $devMode
    ? require __DIR__ . "/config.local.php"
    : require __DIR__ . "/config.public.php";
