<?php
// contact-submit.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';

// Ajoutez cette ligne pour voir ce qui arrive
file_put_contents('debug.log', print_r($_POST, true), FILE_APPEND);

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée']);
    exit();
}

// Récupérer et nettoyer les données
$nom = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$telephone = trim($_POST['phone_number'] ?? '');
$sujet = trim($_POST['msg_subject'] ?? '');
$message = trim($_POST['message'] ?? '');
$checkbox = isset($_POST['gridCheck']) ? true : false;

// Validation
$errors = [];

if (empty($nom)) {
    $errors[] = "Le nom est requis";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Adresse email invalide";
}

if (empty($telephone)) {
    $errors[] = "Le numéro de téléphone est requis";
}

if (empty($sujet)) {
    $errors[] = "Le sujet est requis";
}

if (empty($message)) {
    $errors[] = "Le message est requis";
}

if (!$checkbox) {
    $errors[] = "Vous devez accepter les conditions générales";
}

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode('<br>', $errors)]);
    exit();
}

try {
    $conn = getDB();
    
    // Insérer le message dans la base de données
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $sql = "INSERT INTO contact_messages (nom, email, telephone, sujet, message, ip_address) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if (!$stmt) {
        throw new Exception("Erreur de préparation: " . $conn->error);
    }
    
    $stmt->bind_param("ssssss", $nom, $email, $telephone, $sujet, $message, $ip_address);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Merci ! Votre message a été envoyé avec succès.']);
    } else {
        throw new Exception("Erreur d'exécution: " . $stmt->error);
    }
    
    $stmt->close();
    $conn->close();
    
} catch (Exception $e) {
    // Log l'erreur
    file_put_contents('debug.log', $e->getMessage() . "\n", FILE_APPEND);
    
    echo json_encode(['success' => false, 'message' => 'Une erreur est survenue: ' . $e->getMessage()]);
}
?>