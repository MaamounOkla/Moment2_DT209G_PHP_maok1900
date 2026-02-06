<?php
require_once __DIR__ . "/config.php";

$host  = $dbConfig["db_host"];
$dbname = $dbConfig["db_name"];
$user  = $dbConfig["db_user"];
$pass  = $dbConfig["db_pass"];
$port  = (int)$dbConfig["db_port"];

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("DB connection failed: " . $e->getMessage());
}
