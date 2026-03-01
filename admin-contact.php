<?php
require_once 'config.php';

// Vérifier si l'admin est connecté
if (!isAdmin()) {
    header('Location: admin-login.php');
    exit();
}

$conn = getDB();
$message = '';

// Marquer comme lu
if (isset($_GET['mark_read'])) {
    $id = (int)$_GET['mark_read'];
    $sql = "UPDATE contact_messages SET statut = 'lu' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $message = '<div class="alert alert-success">Message marqué comme lu</div>';
    }
}

// Archiver
if (isset($_GET['archive'])) {
    $id = (int)$_GET['archive'];
    $sql = "UPDATE contact_messages SET statut = 'archive' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $message = '<div class="alert alert-success">Message archivé</div>';
    }
}

// Supprimer
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $sql = "DELETE FROM contact_messages WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $message = '<div class="alert alert-success">Message supprimé</div>';
    }
}

// Filtre
$filtre = isset($_GET['filtre']) ? $_GET['filtre'] : 'non_lu';

// Pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 20;
$offset = ($page - 1) * $limit;

// Compter le total
$count_sql = "SELECT COUNT(*) as total FROM contact_messages";
if ($filtre != 'tous') {
    $count_sql .= " WHERE statut = '$filtre'";
}
$count_result = $conn->query($count_sql);
$total_row = $count_result->fetch_assoc();
$total_items = $total_row['total'];
$total_pages = ceil($total_items / $limit);

// Récupérer les messages
$sql = "SELECT * FROM contact_messages";
if ($filtre != 'tous') {
    $sql .= " WHERE statut = '$filtre'";
}
$sql .= " ORDER BY date_envoi DESC LIMIT ? OFFSET ?";
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
    <title>Gestion des contacts - FICKIN</title>
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
        .filters {
            margin-bottom: 20px;
        }
        .filters .btn {
            margin-right: 5px;
        }
        .btn-filter {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            color: #495057;
        }
        .btn-filter.active {
            background: #F15A24;
            color: white;
            border-color: #F15A24;
        }
        .table {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .badge-non_lu {
            background: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }
        .badge-lu {
            background: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }
        .badge-archive {
            background: #6c757d;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }
        .message-preview {
            max-width: 300px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
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
                    <a href="admin-newsletter.php"><i class="fas fa-envelope"></i> Newsletter</a>
                    <a href="admin-contacts.php" class="active"><i class="fas fa-phone-alt"></i> Contacts</a>
                    <a href="admin-logout.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
                </div>
            </div>
            
            <!-- Contenu -->
            <div class="col-md-10 p-0">
                <div class="content">
                    <div class="header">
                        <h2>Gestion des messages de contact</h2>
                    </div>
                    
                    <?php echo $message; ?>
                    
                    <!-- Filtres -->
                    <div class="filters">
                        <a href="?filtre=non_lu" class="btn btn-filter <?php echo $filtre == 'non_lu' ? 'active' : ''; ?>">
                            <i class="fas fa-envelope"></i> Non lus
                        </a>
                        <a href="?filtre=lu" class="btn btn-filter <?php echo $filtre == 'lu' ? 'active' : ''; ?>">
                            <i class="fas fa-envelope-open"></i> Lus
                        </a>
                        <a href="?filtre=archive" class="btn btn-filter <?php echo $filtre == 'archive' ? 'active' : ''; ?>">
                            <i class="fas fa-archive"></i> Archives
                        </a>
                        <a href="?filtre=tous" class="btn btn-filter <?php echo $filtre == 'tous' ? 'active' : ''; ?>">
                            <i class="fas fa-list"></i> Tous
                        </a>
                    </div>
                    
                    <!-- Tableau des messages -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Sujet</th>
                                <th>Message</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($result->num_rows > 0): ?>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo date('d/m/Y H:i', strtotime($row['date_envoi'])); ?></td>
                                    <td><?php echo htmlspecialchars($row['nom']); ?></td>
                                    <td><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></td>
                                    <td><a href="tel:<?php echo $row['telephone']; ?>"><?php echo $row['telephone']; ?></a></td>
                                    <td><?php echo htmlspecialchars($row['sujet']); ?></td>
                                    <td class="message-preview" title="<?php echo htmlspecialchars($row['message']); ?>">
                                        <?php echo htmlspecialchars(substr($row['message'], 0, 50)) . '...'; ?>
                                    </td>
                                    <td>
                                        <span class="badge-<?php echo $row['statut']; ?>">
                                            <?php 
                                            if($row['statut'] == 'non_lu') echo 'Non lu';
                                            elseif($row['statut'] == 'lu') echo 'Lu';
                                            else echo 'Archivé';
                                            ?>
                                        </span>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-info" onclick="viewMessage(<?php echo $row['id']; ?>, '<?php echo addslashes($row['message']); ?>')">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        
                                        <?php if ($row['statut'] == 'non_lu'): ?>
                                            <a href="?mark_read=<?php echo $row['id']; ?>&filtre=<?php echo $filtre; ?>&page=<?php echo $page; ?>" class="btn btn-sm btn-success">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        <?php endif; ?>
                                        
                                        <?php if ($row['statut'] != 'archive'): ?>
                                            <a href="?archive=<?php echo $row['id']; ?>&filtre=<?php echo $filtre; ?>&page=<?php echo $page; ?>" class="btn btn-sm btn-warning">
                                                <i class="fas fa-archive"></i>
                                            </a>
                                        <?php endif; ?>
                                        
                                        <a href="?delete=<?php echo $row['id']; ?>&filtre=<?php echo $filtre; ?>&page=<?php echo $page; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer définitivement ce message ?')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr><td colspan="8" class="text-center">Aucun message trouvé</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    
                    <!-- Pagination -->
                    <?php if ($total_pages > 1): ?>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?filtre=<?php echo $filtre; ?>&page=<?php echo $page - 1; ?>">Précédent</a>
                            </li>
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                                <a class="page-link" href="?filtre=<?php echo $filtre; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                            <?php endfor; ?>
                            <li class="page-item <?php echo ($page >= $total_pages) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?filtre=<?php echo $filtre; ?>&page=<?php echo $page + 1; ?>">Suivant</a>
                            </li>
                        </ul>
                    </nav>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal pour voir le message complet -->
    <div class="modal fade" id="messageModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Message complet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="fullMessage">
                </div>
            </div>
        </div>
    </div>

    <script>
    function viewMessage(id, message) {
        document.getElementById('fullMessage').innerHTML = '<p>' + message.replace(/\n/g, '<br>') + '</p>';
        
        // Marquer comme lu si ce n'est pas déjà fait
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '?mark_read=' + id, true);
        xhr.send();
        
        var modal = new bootstrap.Modal(document.getElementById('messageModal'));
        modal.show();
    }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php $conn->close(); ?>