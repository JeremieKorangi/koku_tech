<?php include("inc/head.php"); ?>

<!-- Start Page Title Area -->
<div class="page-title-area item-bg-6" style="background-image: url(assets/img/bg-6.jpg);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Actualités</h2>
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li>Actualités</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start News Area -->
<section class="news-section pt-100 pb-160">
    <div class="container">
        <div class="section-title">
            <h2>Actualités</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
        </div>

        <div class="row">
            <?php
            // Connexion à la base de données
            require_once 'config.php';
            $conn = getDB();
            
            // Pagination
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $limit = 6;
            $offset = ($page - 1) * $limit;
            
            // Compter le nombre total d'actualités publiées
            $count_sql = "SELECT COUNT(*) as total FROM actualites WHERE statut = 'publie'";
            $count_result = $conn->query($count_sql);
            $total_row = $count_result->fetch_assoc();
            $total_news = $total_row['total'];
            $total_pages = ceil($total_news / $limit);
            
            // Récupérer les actualités avec pagination
            $sql = "SELECT id, titre, contenu, date_publication, type_media, chemin_media, image_apercu 
                    FROM actualites 
                    WHERE statut = 'publie' 
                    ORDER BY date_publication DESC 
                    LIMIT ? OFFSET ?";
            
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ii", $limit, $offset);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Formatage de la date
                    $date = new DateTime($row['date_publication']);
                    $formatted_date = $date->format('d F, Y'); // Exemple : 20 March, 2024
                    
                    // Extraire un extrait du contenu
                    $extrait = substr(strip_tags($row['contenu']), 0, 120) . '...';
                    
                    // Déterminer le type de média et construire le HTML correspondant
                    if ($row['type_media'] == 'video') {
                        // C'est une vidéo : on utilise la balise <video> avec autoplay, muted, loop
                        $video_src = htmlspecialchars($row['chemin_media']);
                        // Image d'aperçu (poster) si disponible, sinon placeholder vidéo
                        if (!empty($row['image_apercu'])) {
                            $poster = htmlspecialchars($row['image_apercu']);
                        } else {
                            $poster = 'assets/img/blog/video-placeholder.jpg'; // Image par défaut pour les vidéos
                        }
                        $media_html = '
                        <div class="image video-container">
                            <video class="video-thumb" autoplay muted loop playsinline poster="' . $poster . '">
                                <source src="' . $video_src . '" type="video/mp4">
                                Votre navigateur ne supporte pas la balise vidéo.
                            </video>
                        </div>';
                    } else {
                        // C'est une image
                        $image_src = !empty($row['chemin_media']) ? htmlspecialchars($row['chemin_media']) : 'assets/img/blog/default.jpg';
                        $media_html = '
                        <div class="image">
                            <img src="' . $image_src . '" alt="' . htmlspecialchars($row['titre']) . '">
                        </div>';
                    }
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="news-item">
                    <?php echo $media_html; ?>

                    <div class="content">
                        <ul>
                            <li><?php echo $formatted_date; ?></li>
                            <li><a href="actualite.php?id=<?php echo $row['id']; ?>">By Admin</a></li>
                        </ul>

                        <h3>
                            <a href="actualite.php?id=<?php echo $row['id']; ?>">
                                <?php echo htmlspecialchars($row['titre']); ?>
                            </a>
                        </h3>
                        <p><?php echo $extrait; ?></p>

                        <div class="news-btn">
                            <a href="actualite.php?id=<?php echo $row['id']; ?>" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                }
            } else {
                echo '<div class="col-12 text-center"><p>Aucune actualité trouvée.</p></div>';
            }
            
            $stmt->close();
            $conn->close();
            ?>

            <!-- Pagination dynamique -->
            <?php if ($total_pages > 1): ?>
            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <!-- Lien précédent -->
                    <?php if ($page > 1): ?>
                        <a href="?page=<?php echo $page - 1; ?>" class="prev page-numbers">
                            <i class="flaticon-left"></i>
                        </a>
                    <?php else: ?>
                        <span class="prev page-numbers disabled">
                            <i class="flaticon-left"></i>
                        </span>
                    <?php endif; ?>

                    <!-- Numéros de page -->
                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <?php if ($i == $page): ?>
                            <span class="page-numbers current" aria-current="page"><?php echo $i; ?></span>
                        <?php else: ?>
                            <a href="?page=<?php echo $i; ?>" class="page-numbers"><?php echo $i; ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <!-- Lien suivant -->
                    <?php if ($page < $total_pages): ?>
                        <a href="?page=<?php echo $page + 1; ?>" class="next page-numbers">
                            <i class="flaticon-right-1"></i>
                        </a>
                    <?php else: ?>
                        <span class="next page-numbers disabled">
                            <i class="flaticon-right-1"></i>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="default-shape">
        <div class="shape-1">
            <img src="assets/img/shape/4.png" alt="image">
        </div>
        <div class="shape-2 rotateme">
            <img src="assets/img/shape/5.svg" alt="image">
        </div>
        <div class="shape-3">
            <img src="assets/img/shape/6.svg" alt="image">
        </div>
        <div class="shape-4">
            <img src="assets/img/shape/7.png" alt="image">
        </div>
        <div class="shape-5">
            <img src="assets/img/shape/8.png" alt="image">
        </div>
    </div>
</section>
<!-- End News Area -->

<?php include("inc/footer.php"); ?>