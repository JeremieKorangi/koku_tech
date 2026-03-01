<?php include("inc/head.php"); ?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-6" style="background-image: url(assets/img/bg-6.jpg);">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Actualité</h2>
                            <ul>
                                <li><a href="index.html">Accueil</a></li>
                                <li><a href="actualites.php">Actualités</a></li>
                                <li>Détail</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <?php
        // Connexion à la base de données
        require_once 'config.php';
        
        // Récupérer l'ID de l'actualité depuis l'URL
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        
        if ($id > 0) {
            $conn = getDB();
            
            // Requête pour récupérer l'actualité
            $sql = "SELECT * FROM actualites WHERE id = ? AND statut = 'publie'";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                
                // Formatage de la date
                $date = new DateTime($row['date_publication']);
                $date_formatee = $date->format('j F Y');
                
                // Conversion en français
                $mois = [
                    'January' => 'janvier', 'February' => 'février', 'March' => 'mars',
                    'April' => 'avril', 'May' => 'mai', 'June' => 'juin',
                    'July' => 'juillet', 'August' => 'août', 'September' => 'septembre',
                    'October' => 'octobre', 'November' => 'novembre', 'December' => 'décembre'
                ];
                $date_formatee = strtr($date_formatee, $mois);
                
                // Déterminer le type de média
                $type_media = isset($row['type_media']) ? $row['type_media'] : 'image';
                $chemin_media = $row['chemin_media'];
                $image_apercu = isset($row['image_apercu']) ? $row['image_apercu'] : 'assets/img/default-news.jpg';
        ?>

        <!-- Start News Detail Area -->
        <section class="news-detail-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="news-detail-card">
                            <!-- Media (Image ou Vidéo avec aperçu) -->
                            <div class="news-detail-media">
                                <?php if ($type_media == 'video'): ?>
                                <div class="video-container">
                                    <video class="detail-video" controls poster="<?php echo htmlspecialchars($image_apercu); ?>">
                                        <source src="<?php echo htmlspecialchars($chemin_media); ?>" type="video/mp4">
                                        Votre navigateur ne supporte pas la lecture de vidéos.
                                    </video>
                                    <!-- Afficher l'image d'aperçu si la vidéo ne charge pas -->
                                    <noscript>
                                        <img src="<?php echo htmlspecialchars($image_apercu); ?>" alt="<?php echo htmlspecialchars($row['titre']); ?>" class="detail-image fallback-image">
                                    </noscript>
                                </div>
                                <?php else: ?>
                                <img src="<?php echo htmlspecialchars($chemin_media); ?>" alt="<?php echo htmlspecialchars($row['titre']); ?>" class="detail-image">
                                <?php endif; ?>
                            </div>

                            <!-- Meta informations -->
                            <div class="news-detail-meta">
                                <div class="meta-left">
                                    <span class="meta-date">
                                        <i class="far fa-calendar-alt" style="color: #F15A24;"></i> 
                                        <?php echo $date_formatee; ?>
                                    </span>
                                    <span class="meta-category" style="background: rgba(241,90,36,0.1); color: #F15A24;">
                                        <?php echo htmlspecialchars($row['categorie']); ?>
                                    </span>
                                </div>
                                <div class="meta-right">
                                    <span class="meta-views">
                                        <i class="far fa-eye"></i> <?php echo isset($row['vues']) ? $row['vues'] : '0'; ?> vues
                                    </span>
                                </div>
                            </div>

                            <!-- Titre -->
                            <h1 class="news-detail-title"><?php echo htmlspecialchars($row['titre']); ?></h1>

                            <!-- Contenu -->
                            <div class="news-detail-content">
                                <?php echo nl2br($row['contenu']); ?>
                            </div>

                            <!-- Footer avec partage -->
                            <div class="news-detail-footer">
                                <div class="tags">
                                    <span>Tags:</span>
                                    <a href="actualites.php?categorie=<?php echo urlencode($row['categorie']); ?>"><?php echo htmlspecialchars($row['categorie']); ?></a>
                                </div>
                                <div class="share">
                                    <span>Partager:</span>
                                    <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(window.location.href), 'facebook-share', 'width=550,height=435'); return false;">
                                        <i class="fab fa-facebook-f" style="color: #3b5998;"></i>
                                    </a>
                                    <a href="#" onclick="window.open('https://twitter.com/intent/tweet?text=<?php echo urlencode($row['titre']); ?>&url='+encodeURIComponent(window.location.href), 'twitter-share', 'width=550,height=235'); return false;">
                                        <i class="fab fa-twitter" style="color: #1da1f2;"></i>
                                    </a>
                                    <a href="#" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent(window.location.href)+'&title=<?php echo urlencode($row['titre']); ?>', 'linkedin-share', 'width=550,height=435'); return false;">
                                        <i class="fab fa-linkedin-in" style="color: #0077b5;"></i>
                                    </a>
                                    <a href="#" onclick="window.open('whatsapp://send?text=<?php echo urlencode($row['titre'] . ' - ' . $_SERVER['REQUEST_URI']); ?>'); return false;">
                                        <i class="fab fa-whatsapp" style="color: #25d366;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <!-- Sidebar -->
                        <aside class="news-sidebar">
                            <!-- Widget Recherche -->
                            <div class="sidebar-widget search-widget">
                                <h3 class="widget-title">Rechercher</h3>
                                <form action="actualites.php" method="GET" class="search-form">
                                    <input type="text" name="search" placeholder="Rechercher une actualité..." required>
                                    <button type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>

                            <!-- Widget Catégories -->
                            <div class="sidebar-widget categories-widget">
                                <h3 class="widget-title">Catégories</h3>
                                <ul>
                                    <?php
                                    // Récupérer les catégories avec le nombre d'articles
                                    $cat_sql = "SELECT categorie, COUNT(*) as nombre FROM actualites WHERE statut = 'publie' GROUP BY categorie ORDER BY categorie";
                                    $cat_result = $conn->query($cat_sql);
                                    while($cat = $cat_result->fetch_assoc()):
                                    ?>
                                    <li>
                                        <a href="actualites.php?categorie=<?php echo urlencode($cat['categorie']); ?>">
                                            <?php echo htmlspecialchars($cat['categorie']); ?>
                                            <span>(<?php echo $cat['nombre']; ?>)</span>
                                        </a>
                                    </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>

                            <!-- Widget Articles Récents -->
                            <div class="sidebar-widget recent-posts-widget">
                                <h3 class="widget-title">Articles récents</h3>
                                <?php
                                // Récupérer les 3 dernières actualités (sauf l'actuelle)
                                $recent_sql = "SELECT id, titre, date_publication, chemin_media, type_media, image_apercu 
                                               FROM actualites 
                                               WHERE statut = 'publie' AND id != ? 
                                               ORDER BY date_publication DESC 
                                               LIMIT 3";
                                $recent_stmt = $conn->prepare($recent_sql);
                                $recent_stmt->bind_param("i", $id);
                                $recent_stmt->execute();
                                $recent_result = $recent_stmt->get_result();
                                
                                while($recent = $recent_result->fetch_assoc()):
                                    $recent_date = new DateTime($recent['date_publication']);
                                    $recent_date_formatee = $recent_date->format('d M Y');
                                    $image_a_afficher = ($recent['type_media'] == 'video' && !empty($recent['image_apercu'])) ? $recent['image_apercu'] : $recent['chemin_media'];
                                ?>
                                <article class="recent-post-item">
                                    <a href="actualite.php?id=<?php echo $recent['id']; ?>" class="recent-post-thumb">
                                        <?php if ($recent['type_media'] == 'video'): ?>
                                        <i class="fas fa-play-circle" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #F15A24; font-size: 24px; z-index: 2;"></i>
                                        <?php endif; ?>
                                        <img src="<?php echo htmlspecialchars($image_a_afficher); ?>" alt="<?php echo htmlspecialchars($recent['titre']); ?>">
                                    </a>
                                    <div class="recent-post-info">
                                        <h4>
                                            <a href="actualite.php?id=<?php echo $recent['id']; ?>"><?php echo htmlspecialchars(substr($recent['titre'], 0, 60)) . '...'; ?></a>
                                        </h4>
                                        <span class="post-date">
                                            <i class="far fa-calendar-alt" style="color: #F15A24;"></i> <?php echo $recent_date_formatee; ?>
                                        </span>
                                    </div>
                                </article>
                                <?php endwhile; ?>
                                <?php $recent_stmt->close(); ?>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End News Detail Area -->

        <?php
            } else {
                // Actualité non trouvée
                echo '
                <section class="error-area ptb-100">
                    <div class="container">
                        <div class="error-content">
                            <img src="assets/img/404.png" alt="error">
                            <h3>Actualité non trouvée</h3>
                            <p>Désolé, l\'actualité que vous recherchez n\'existe pas ou a été supprimée.</p>
                            <a href="actualites.php" class="default-btn" style="background: #F15A24;">Retour aux actualités</a>
                        </div>
                    </div>
                </section>';
            }
            
            $stmt->close();
            $conn->close();
            
        } else {
            // ID invalide
            header('Location: actualites.php');
            exit();
        }
        ?>

        <style>
        /* Styles pour la page de détail d'actualité */
        .news-detail-card {
            background: #fff;
            padding: 30px;
        }

        .news-detail-media {
            margin-bottom: 30px;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .detail-image {
            width: 100%;
            height: auto;
            max-height: 500px;
            object-fit: cover;
            border-radius: 10px;
        }

        .detail-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            height: 0;
            overflow: hidden;
            border-radius: 10px;
            background: #f0f0f0; /* Fond gris pendant le chargement */
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .fallback-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .news-detail-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .meta-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .meta-date {
            color: #666;
            font-size: 14px;
        }

        .meta-date i {
            margin-right: 5px;
        }

        .meta-category {
            padding: 5px 15px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 600;
        }

        .meta-right {
            color: #999;
            font-size: 14px;
        }

        .meta-right i {
            margin-right: 5px;
        }

        .news-detail-title {
            font-size: 32px;
            color: #333;
            margin-bottom: 25px;
            line-height: 1.3;
        }

        .news-detail-content {
            color: #666;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .news-detail-content p {
            margin-bottom: 20px;
        }

        .news-detail-content h2, 
        .news-detail-content h3, 
        .news-detail-content h4 {
            color: #333;
            margin: 30px 0 15px;
        }

        .news-detail-content img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin: 20px 0;
        }

        .news-detail-content blockquote {
            background: #f8f9fa;
            padding: 25px;
            border-left: 4px solid #F15A24;
            font-style: italic;
            margin: 20px 0;
            border-radius: 5px;
        }

        .news-detail-content ul, 
        .news-detail-content ol {
            margin: 15px 0;
            padding-left: 20px;
        }

        .news-detail-content li {
            margin-bottom: 10px;
        }

        .news-detail-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 25px;
            border-top: 1px solid #eee;
        }

        .tags {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .tags span {
            color: #666;
            font-weight: 600;
        }

        .tags a {
            color: #F15A24;
            text-decoration: none;
            font-size: 14px;
            padding: 5px 15px;
            background: rgba(241,90,36,0.1);
            border-radius: 30px;
            transition: all 0.3s;
        }

        .tags a:hover {
            background: #F15A24;
            color: #fff;
        }

        .share {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .share span {
            color: #666;
            font-weight: 600;
        }

        .share a {
            color: #333;
            font-size: 18px;
            transition: color 0.3s;
        }

        .share a:hover {
            color: #F15A24;
        }

        /* Sidebar */
        .news-sidebar {
            margin-left: 20px;
        }

        .sidebar-widget {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .widget-title {
            font-size: 20px;
            color: #333;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #F15A24;
            position: relative;
        }

        .widget-title:after {
            display: none;
        }

        /* Widget recherche */
        .search-form {
            display: flex;
            gap: 10px;
        }

        .search-form input {
            flex: 1;
            padding: 12px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s;
        }

        .search-form input:focus {
            border-color: #F15A24;
        }

        .search-form button {
            padding: 12px 20px;
            background: #F15A24;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .search-form button:hover {
            background: #d44d1f;
        }

        /* Widget catégories */
        .categories-widget ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .categories-widget ul li {
            margin-bottom: 10px;
        }

        .categories-widget ul li a {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #666;
            text-decoration: none;
            padding: 8px 0;
            transition: color 0.3s;
        }

        .categories-widget ul li a:hover {
            color: #F15A24;
        }

        .categories-widget ul li a span {
            color: #999;
            font-size: 12px;
        }

        /* Widget articles récents */
        .recent-post-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .recent-post-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .recent-post-thumb {
            position: relative;
            flex: 0 0 80px;
            height: 80px;
            border-radius: 5px;
            overflow: hidden;
        }

        .recent-post-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .recent-post-thumb:hover img {
            transform: scale(1.1);
        }

        .recent-post-info {
            flex: 1;
        }

        .recent-post-info h4 {
            font-size: 15px;
            margin-bottom: 8px;
            line-height: 1.4;
        }

        .recent-post-info h4 a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }

        .recent-post-info h4 a:hover {
            color: #F15A24;
        }

        .post-date {
            font-size: 12px;
            color: #999;
        }

        .post-date i {
            margin-right: 5px;
        }

        /* Responsive */
        @media only screen and (max-width: 768px) {
            .news-detail-card {
                padding: 20px;
            }

            .news-detail-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .news-detail-title {
                font-size: 24px;
            }

            .news-detail-footer {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .news-sidebar {
                margin-left: 0;
                margin-top: 30px;
            }
        }

        @media only screen and (max-width: 576px) {
            .meta-left {
                flex-direction: column;
                align-items: flex-start;
            }
        }
        </style>

        <!-- Font Awesome pour les icônes -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <?php include("inc/footer.php"); ?>