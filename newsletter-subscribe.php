<?php
require_once 'config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée']);
    exit();
}

$email = filter_var($_POST['EMAIL'] ?? '', FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Adresse email invalide']);
    exit();
}

$conn = getDB();

// Vérifier si l'email existe déjà
$check_sql = "SELECT id, statut FROM newsletter_inscriptions WHERE email = ?";
$check_stmt = $conn->prepare($check_sql);
$check_stmt->bind_param("s", $email);
$check_stmt->execute();
$check_result = $check_stmt->get_result();

if ($check_result->num_rows > 0) {
    $existing = $check_result->fetch_assoc();
    
    if ($existing['statut'] === 'desinscrit') {
        // Réactiver l'inscription
        $update_sql = "UPDATE newsletter_inscriptions SET statut = 'actif', date_inscription = CURRENT_TIMESTAMP WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("i", $existing['id']);
        
        if ($update_stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Merci ! Votre inscription a été réactivée.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Une erreur est survenue. Veuillez réessayer.']);
        }
        $update_stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Cet email est déjà inscrit à notre newsletter.']);
    }
} else {
    // Nouvelle inscription
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $insert_sql = "INSERT INTO newsletter_inscriptions (email, ip_address) VALUES (?, ?)";
    $insert_stmt = $conn->prepare($insert_sql);
    $insert_stmt->bind_param("ss", $email, $ip_address);
    
    if ($insert_stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Merci ! Votre inscription a été enregistrée.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Une erreur est survenue. Veuillez réessayer.']);
    }
    $insert_stmt->close();
}

$check_stmt->close();
$conn->close();
?>