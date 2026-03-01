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

<!-- Start News Area (version modernisée) -->
<section class="news-section pt-100 pb-160">
    <div class="container">
        <!-- En-tête de section avec badge -->
        <div class="section-title">
            <h2>Dernières nouvelles</h2>
            <p>Suivez-nous et restez au cœur des nouveautés, expositions et temps forts de la FICKIN.</p>
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
            
            // Récupérer les actualités avec pagination (ajout du champ categorie)
            $sql = "SELECT id, titre, contenu, date_publication, categorie, type_media, chemin_media, image_apercu 
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
                    // Formatage de la date en français (ex: 20 mars 2024)
                    $date = new DateTime($row['date_publication']);
                    $mois = [
                        'January' => 'janvier', 'February' => 'février', 'March' => 'mars',
                        'April' => 'avril', 'May' => 'mai', 'June' => 'juin',
                        'July' => 'juillet', 'August' => 'août', 'September' => 'septembre',
                        'October' => 'octobre', 'November' => 'novembre', 'December' => 'décembre'
                    ];
                    $date_formatee = $date->format('j F Y');
                    $date_formatee = strtr($date_formatee, $mois);
                    
                    // Extraire un extrait du contenu
                    $extrait = substr(strip_tags($row['contenu']), 0, 120) . '...';
                    
                    // Gestion du média (image ou vidéo)
                    if ($row['type_media'] == 'video') {
                        $video_src = htmlspecialchars($row['chemin_media']);
                        $poster = !empty($row['image_apercu']) ? htmlspecialchars($row['image_apercu']) : 'assets/img/blog/video-placeholder.jpg';
                        $media_html = '
                        <div class="image video-container">
                            <video class="video-thumb" autoplay muted loop playsinline poster="' . $poster . '">
                                <source src="' . $video_src . '" type="video/mp4">
                            </video>
                            <div class="video-indicator"><i class="fas fa-play"></i></div>
                        </div>';
                    } else {
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
                        <!-- Meta informations : date et catégorie -->
                        <div class="meta">
                            <span class="date"><i class="far fa-calendar-alt"></i> <?php echo $date_formatee; ?></span>
                            <span class="category"><?php echo htmlspecialchars($row['categorie'] ?? 'Actualité'); ?></span>
                        </div>

                        <h3>
                            <a href="actualite.php?id=<?php echo $row['id']; ?>">
                                <?php echo htmlspecialchars($row['titre']); ?>
                            </a>
                        </h3>
                        <p><?php echo $extrait; ?></p>

                        <!-- Lien "Lire la suite" avec flèche -->
                        <a href="actualite.php?id=<?php echo $row['id']; ?>" class="read-more">
                            Lire la suite <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>     
            <?php 
                }
            } else {
                echo '<div class="col-12 text-center"><p>Aucune actualité pour le moment.</p></div>';
            }
            
            $stmt->close();
            $conn->close();
            ?>

            <!-- Pagination dynamique -->
            <?php if ($total_pages > 1): ?>
            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <?php if ($page > 1): ?>
                        <a href="?page=<?php echo $page - 1; ?>" class="prev page-numbers">
                            <i class="flaticon-left"></i>
                        </a>
                    <?php else: ?>
                        <span class="prev page-numbers disabled">
                            <i class="flaticon-left"></i>
                        </span>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <?php if ($i == $page): ?>
                            <span class="page-numbers current" aria-current="page"><?php echo $i; ?></span>
                        <?php else: ?>
                            <a href="?page=<?php echo $i; ?>" class="page-numbers"><?php echo $i; ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>

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

    <!-- Formes décoratives (reprises du style) -->
    <div class="default-shape">
        <div class="shape-1"><img src="assets/img/shape/4.png" alt="image"></div>
        <div class="shape-2 rotateme"><img src="assets/img/shape/5.svg" alt="image"></div>
        <div class="shape-3"><img src="assets/img/shape/6.svg" alt="image"></div>
        <div class="shape-4"><img src="assets/img/shape/7.png" alt="image"></div>
        <div class="shape-5"><img src="assets/img/shape/8.png" alt="image"></div>
    </div>
    <div class="schedule-shape" style="z-index:0;">
        <div class="shape-1"><img src="assets/img/subscribe/shape-2.png" alt="image"></div>
        <div class="shape-2"><img src="assets/img/schedule/shape-1.png" alt="image"></div>
    </div>
</section>
<!-- End News Area -->

<?php include("inc/footer.php"); ?>

<style>


    
/* Styles additionnels pour la version améliorée */
:root {
    --primary-gradient: linear-gradient(135deg, #000000 0%, #F15A24 100%);
    --secondary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --text-color: #333;
    --text-light: #666;
}


/* Director Quote */
.director-quote {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    margin: 20px 0;
    font-style: italic;
    border-left: 4px solid #8b540b;
}

.director-quote i {
    color: #9c8f71;
    font-size: 20px;
    margin-right: 10px;
    opacity: 0.5;
}

/* News amélioré */
.meta {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
    font-size: 13px;
    color: #666;
}

.meta .date i {
    margin-right: 5px;
    color: #667eea;
}

.meta .category {
    background: #f8f9fa;
    padding: 3px 10px;
    border-radius: 30px;
    color: #e79d58;
    font-weight: 600;
}

.video-container {
    position: relative;
}



.read-more {
    color: #333;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.read-more:hover {
    color: #333;
}



/* Responsive */
@media only screen and (max-width: 768px) {
    .schedule-item {
        flex-direction: column;
        gap: 15px;
    }
    
    .about-features {
        justify-content: center;
    }
    
    .newsletter-form .form-group {
        flex-direction: column;
    }
    
    .sponsorship-list {
        gap: 20px;
    }
    
    .sponsorship-item {
        padding: 20px 30px;
    }
    
    .optional-btn {
        margin-left: 0;
        margin-top: 15px;
        display: block;
        text-align: center;
    }
}


</style>