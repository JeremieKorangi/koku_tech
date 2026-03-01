<?php
require_once 'config.php';

// Vérifier si l'admin est connecté
if (!isAdmin()) {
    header('Location: admin-login.php');
    exit();
}

$conn = getDB();
$message = '';

// Désinscrire un utilisateur
if (isset($_GET['unsubscribe'])) {
    $id = (int)$_GET['unsubscribe'];
    $sql = "UPDATE newsletter_inscriptions SET statut = 'desinscrit' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $message = '<div class="alert alert-success">Utilisateur désinscrit avec succès</div>';
    }
}

// Réactiver un utilisateur
if (isset($_GET['reactivate'])) {
    $id = (int)$_GET['reactivate'];
    $sql = "UPDATE newsletter_inscriptions SET statut = 'actif' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $message = '<div class="alert alert-success">Utilisateur réactivé avec succès</div>';
    }
}

// Supprimer un utilisateur
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $sql = "DELETE FROM newsletter_inscriptions WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $message = '<div class="alert alert-success">Inscription supprimée avec succès</div>';
    }
}

// Pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 20;
$offset = ($page - 1) * $limit;

// Compter le total
$count_sql = "SELECT COUNT(*) as total FROM newsletter_inscriptions";
$count_result = $conn->query($count_sql);
$total_row = $count_result->fetch_assoc();
$total_items = $total_row['total'];
$total_pages = ceil($total_items / $limit);

// Récupérer les inscriptions
$sql = "SELECT * FROM newsletter_inscriptions ORDER BY date_inscription DESC LIMIT ? OFFSET ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $limit, $offset);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Newsletter - FICKIN</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background: #f8f9fa; }
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
        }
        .sidebar a:hover, .sidebar a.active {
            background: rgba(255,255,255,0.1);
        }
        .sidebar i { margin-right: 10px; }
        .content { padding: 30px; }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .stats-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .stats-number {
            font-size: 32px;
            font-weight: 700;
            color: #F15A24;
        }
        .table {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .badge-actif {
            background: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }
        .badge-desinscrit {
            background: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }
        .btn-export {
            background: #F15A24;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn-export:hover { background: #d44d1f; color: white; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 p-0">
                <div class="sidebar">
                    <h4><i class="fas fa-cog"></i> Administration</h4>
                    <a href="admin-evenements.php"><i class="fas fa-calendar-alt"></i> Événements</a>
                    <a href="admin-newsletter.php" class="active"><i class="fas fa-envelope"></i> Newsletter</a>
                    <a href="admin-logout.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
                </div>
            </div>
            
            <!-- Contenu -->
            <div class="col-md-10 p-0">
                <div class="content">
                    <div class="header">
                        <h2>Gestion de la Newsletter</h2>
                        <a href="export-newsletter.php" class="btn-export">
                            <i class="fas fa-download"></i> Exporter en CSV
                        </a>
                    </div>
                    
                    <?php echo $message; ?>
                    
                    <!-- Statistiques -->
                    <div class="row">
                        <?php
                        $stats_sql = "SELECT 
                            COUNT(*) as total,
                            SUM(CASE WHEN statut = 'actif' THEN 1 ELSE 0 END) as actifs
                            FROM newsletter_inscriptions";
                        $stats_result = $conn->query($stats_sql);
                        $stats = $stats_result->fetch_assoc();
                        ?>
                        <div class="col-md-6">
                            <div class="stats-card">
                                <h5>Total inscriptions</h5>
                                <div class="stats-number"><?php echo $stats['total']; ?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="stats-card">
                                <h5>Inscrits actifs</h5>
                                <div class="stats-number" style="color: #28a745;"><?php echo $stats['actifs']; ?></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tableau des inscriptions -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Date d'inscription</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($result->num_rows > 0): ?>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                                    <td><?php echo date('d/m/Y H:i', strtotime($row['date_inscription'])); ?></td>
                                    <td>
                                        <span class="badge-<?php echo $row['statut']; ?>">
                                            <?php echo $row['statut'] == 'actif' ? 'Actif' : 'Désinscrit'; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?php if ($row['statut'] == 'actif'): ?>
                                            <a href="?unsubscribe=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning" onclick="return confirm('Désinscrire ?')">
                                                <i class="fas fa-ban"></i>
                                            </a>
                                        <?php else: ?>
                                            <a href="?reactivate=<?php echo $row['id']; ?>" class="btn btn-sm btn-success" onclick="return confirm('Réactiver ?')">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        <?php endif; ?>
                                        <a href="?delete=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ?')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr><td colspan="4" class="text-center">Aucune inscription</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    
                    <!-- Pagination -->
                    <?php if ($total_pages > 1): ?>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $page - 1; ?>">Précédent</a>
                            </li>
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                            <?php endfor; ?>
                            <li class="page-item <?php echo ($page >= $total_pages) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $page + 1; ?>">Suivant</a>
                            </li>
                        </ul>
                    </nav>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php $conn->close(); ?>