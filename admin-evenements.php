<?php
require_once 'config.php';

// Vérifier si l'admin est connecté
if (!isAdmin()) {
    header('Location: admin-login.php');
    exit();
}

$conn = getDB();
$message = '';

// Supprimer un événement
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    // Récupérer l'image principale pour la supprimer
    $sql = "SELECT image_principale FROM evenements WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $event = $result->fetch_assoc();
    
    if ($event && file_exists($event['image_principale'])) {
        unlink($event['image_principale']);
    }
    
    // Supprimer l'événement (les images multiples seront supprimées automatiquement par ON DELETE CASCADE)
    $sql = "DELETE FROM evenements WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $message = '<div class="alert alert-success">Événement supprimé avec succès</div>';
    } else {
        $message = '<div class="alert alert-danger">Erreur lors de la suppression</div>';
    }
}

// Récupérer tous les événements
$sql = "SELECT * FROM evenements ORDER BY date_debut DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des événements - FICKIN</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: #f8f9fa;
        }
        .sidebar {
            background: linear-gradient(135deg, #000000 0%, #F15A24 100%);
            min-height: 100vh;
            color: white;
            padding: 20px;
        }
        .sidebar h4 {
            color: white;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            border-radius: 8px;
            margin-bottom: 5px;
            transition: background 0.3s;
        }
        .sidebar a:hover, .sidebar a.active {
            background: rgba(255,255,255,0.1);
        }
        .sidebar i {
            margin-right: 10px;
            width: 20px;
        }
        .content {
            padding: 30px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .btn-add {
            background: linear-gradient(135deg, #000000 0%, #F15A24 100%);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-add:hover {
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 5px 15px rgba(241,90,36,0.3);
        }
        .event-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .event-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }
        .event-info {
            flex: 1;
        }
        .event-info h4 {
            margin-bottom: 5px;
            color: #333;
        }
        .event-info .meta {
            color: #666;
            font-size: 14px;
            margin-bottom: 5px;
        }
        .event-info .meta i {
            color: #F15A24;
            margin-right: 5px;
        }
        .event-actions {
            display: flex;
            gap: 10px;
        }
        .btn-edit, .btn-delete {
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s;
        }
        .btn-edit {
            background: #F15A24;
            color: white;
        }
        .btn-edit:hover {
            background: #d44d1f;
            color: white;
        }
        .btn-delete {
            background: #dc3545;
            color: white;
        }
        .btn-delete:hover {
            background: #bb2d3b;
            color: white;
        }
        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        .badge-passe { background: #6c757d; color: white; }
        .badge-en_cours { background: #28a745; color: white; }
        .badge-a_venir { background: #F15A24; color: white; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 p-0">
                <div class="sidebar">
                    <h4><i class="fas fa-cog"></i> Administration</h4>
                    <a href="admin-evenements.php" class="active"><i class="fas fa-calendar-alt"></i> Événements</a>
                    <a href="admin-logout.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
                </div>
            </div>
            
            <!-- Contenu -->
            <div class="col-md-10 p-0">
                <div class="content">
                    <div class="header">
                        <h2>Gestion des événements</h2>
                        <a href="admin-evenement-ajouter.php" class="btn-add">
                            <i class="fas fa-plus"></i> Ajouter un événement
                        </a>
                    </div>
                    
                    <?php echo $message; ?>
                    
                    <?php if ($result->num_rows > 0): ?>
                        <?php while($row = $result->fetch_assoc()): ?>
                            <div class="event-card">
                                <img src="<?php echo $row['image_principale'] ?: 'assets/img/default-event.jpg'; ?>" class="event-image" alt="<?php echo $row['titre']; ?>">
                                <div class="event-info">
                                    <h4><?php echo htmlspecialchars($row['titre']); ?></h4>
                                    <div class="meta">
                                        <i class="fas fa-calendar-alt"></i> 
                                        <?php 
                                        if ($row['date_debut']) {
                                            echo date('d/m/Y', strtotime($row['date_debut']));
                                            if ($row['date_fin']) {
                                                echo ' - ' . date('d/m/Y', strtotime($row['date_fin']));
                                            }
                                        } else {
                                            echo 'Date non définie';
                                        }
                                        ?>
                                    </div>
                                    <div class="meta">
                                        <i class="fas fa-map-marker-alt"></i> <?php echo $row['lieu']; ?>
                                    </div>
                                    <span class="badge badge-<?php echo $row['statut']; ?>">
                                        <?php 
                                        switch($row['statut']) {
                                            case 'passe': echo 'Passé'; break;
                                            case 'en_cours': echo 'En cours'; break;
                                            case 'a_venir': echo 'À venir'; break;
                                        }
                                        ?>
                                    </span>
                                </div>
                                <div class="event-actions">
                                    <a href="admin-evenement-modifier.php?id=<?php echo $row['id']; ?>" class="btn-edit">
                                        <i class="fas fa-edit"></i> Modifier
                                    </a>
                                    <a href="?delete=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')">
                                        <i class="fas fa-trash"></i> Supprimer
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="alert alert-info">Aucun événement trouvé. Commencez par en ajouter un !</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>