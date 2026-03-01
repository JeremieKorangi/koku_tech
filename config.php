<?php

// config.php
session_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'fickin_db');

//define('DB_HOST', 'db5019915564.hosting-data.io');
//define('DB_USER', 'dbu1371380');
//define('DB_PASS', '9KLbER3NNkM@7Xc');
//define('DB_NAME', 'dbs15381844');

function getDB() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if ($conn->connect_error) {
        die("Connexion échouée: " . $conn->connect_error);
    }
    
    $conn->set_charset("utf8mb4");
    
    return $conn;
}


function isAdmin() {
    return isset($_SESSION['admin_id']);
}
?>