<?php
// config.php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'fickin_db');

function getDB() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if ($conn->connect_error) {
        die("Connexion échouée: " . $conn->connect_error);
    }
    
    // Définir l'encodage UTF-8
    $conn->set_charset("utf8mb4");
    
    return $conn;
}
?>