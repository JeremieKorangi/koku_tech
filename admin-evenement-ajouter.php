<?php
require_once 'config.php';

// Vérifier si l'admin est connecté
if (!isAdmin()) {
    header('Location: admin-login.php');
    exit();
}

$conn = getDB();
$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $date_debut = !empty($_POST['date_debut']) ? $_POST['date_debut'] : null;
    $date_fin = !empty($_POST['date_fin']) ? $_POST['date_fin'] : null;
    $lieu = $_POST['lieu'];
    $type = $_POST['type'];
    $statut = $_POST['statut'];
    
    // Upload de l'image principale
    $image_principale = '';
    if (isset($_FILES['image_principale']) && $_FILES['image_principale']['error'] == 0) {
        $upload_dir = 'assets/img/evenements/';
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        $extension = pathinfo($_FILES['image_principale']['name'], PATHINFO_EXTENSION);
        $filename = time() . '_' . uniqid() . '.' . $extension;
        $destination = $upload_dir . $filename;
        
        if (move_uploaded_file($_FILES['image_principale']['tmp_name'], $destination)) {
            $image_principale = $destination;
        } else {
            $error = "Erreur lors de l'upload de l'image principale";
        }
    }
    
    if (empty($error)) {
        // Insérer l'événement
        $sql = "INSERT INTO evenements (titre, description, date_debut, date_fin, lieu, type, statut, image_principale) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssss", $titre, $description, $date_debut, $date_fin, $lieu, $type, $statut, $image_principale);
        
        if ($stmt->execute()) {
            $evenement_id = $conn->insert_id;
            
            // Upload des images multiples
            if (isset($_FILES['images_multiples'])) {
                $files = $_FILES['images_multiples'];
                for ($i = 0; $i < count($files['name']); $i++) {
                    if ($files['error'][$i] == 0) {
                        $extension = pathinfo($files['name'][$i], PATHINFO_EXTENSION);
                        $filename = time() . '_' . uniqid() . '_' . $i . '.' . $extension;
                        $destination = $upload_dir . $filename;
                        
                        if (move_uploaded_file($files['tmp_name'][$i], $destination)) {
                            $sql_img = "INSERT INTO evenement_images (evenement_id, image_url) VALUES (?, ?)";
                            $stmt_img = $conn->prepare($sql_img);
                            $stmt_img->bind_param("is", $evenement_id, $destination);
                            $stmt_img->execute();
                        }
                    }
                }
            }
            
            $message = '<div class="alert alert-success">Événement ajouté avec succès</div>';
        } else {
            $error = "Erreur lors de l'ajout de l'événement";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un événement - FICKIN</title>
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
            margin-bottom: 30px;
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .form-label {
            font-weight: 600;
            color: #333;
        }
        .form-control, .form-select {
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            padding: 10px 15px;
        }
        .form-control:focus, .form-select:focus {
            border-color: #F15A24;
            box-shadow: 0 0 0 0.2rem rgba(241,90,36,0.25);
        }
        .btn-save {
            background: linear-gradient(135deg, #000000 0%, #F15A24 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .btn-save:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(241,90,36,0.3);
        }
        .image-preview {
            max-width: 200px;
            max-height: 200px;
            margin-top: 10px;
            border-radius: 8px;
            display: none;
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
                    <a href="admin-evenement-ajouter.php" class="active"><i class="fas fa-plus"></i> Ajouter</a>
                    <a href="admin-logout.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
                </div>
            </div>
            
            <!-- Contenu -->
            <div class="col-md-10 p-0">
                <div class="content">
                    <div class="header">
                        <h2>Ajouter un événement</h2>
                    </div>
                    
                    <?php echo $message; ?>
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    
                    <div class="form-container">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Titre de l'événement</label>
                                    <input type="text" name="titre" class="form-control" required>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Lieu</label>
                                    <input type="text" name="lieu" class="form-control" value="Kinshasa, RDC">
                                </div>
                                
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="5" required></textarea>
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Date de début</label>
                                    <input type="date" name="date_debut" class="form-control">
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Date de fin</label>
                                    <input type="date" name="date_fin" class="form-control">
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Type d'événement</label>
                                    <select name="type" class="form-select">
                                        <option value="foire">Foire</option>
                                        <option value="festival">Festival</option>
                                        <option value="salon">Salon</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Statut</label>
                                    <select name="statut" class="form-select">
                                        <option value="passe">Passé</option>
                                        <option value="en_cours">En cours</option>
                                        <option value="a_venir">À venir</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Image principale</label>
                                    <input type="file" name="image_principale" class="form-control" accept="image/*" onchange="previewImage(this)">
                                    <img id="imagePreview" class="image-preview">
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Images supplémentaires (Ctrl+clic pour multiple)</label>
                                    <input type="file" name="images_multiples[]" class="form-control" accept="image/*" multiple>
                                </div>
                            </div>
                            
                            <div class="text-end">
                                <button type="submit" class="btn-save">
                                    <i class="fas fa-save"></i> Enregistrer l'événement
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function previewImage(input) {
            const preview = document.getElementById('imagePreview');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>