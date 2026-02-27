<?php include("inc/head.php") ?>

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

        <!-- Start News Intro Area -->
        <section class="news-intro-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Suivez toute l'actualité de la FICKIN</h2>
                    <p>Restez au cœur des nouveautés, expositions et temps forts de la Foire Internationale du Congo Kinshasa.</p>
                </div>
            </div>
        </section>
        <!-- End News Intro Area -->

        <!-- Start News Filter Area -
        <section class="news-filter-area pb-40">
            <div class="container">
                <div class="news-filter">
                    <div class="filter-categories">
                        <button class="filter-btn active" data-filter="all">Toutes les actualités</button>
                        <button class="filter-btn" data-filter="culture">Culture & Organisation</button>
                        <button class="filter-btn" data-filter="innovation">Innovation & Infrastructure</button>
                        <button class="filter-btn" data-filter="communication">Communication</button>
                    </div>
                    
                    <div class="filter-dropdown">
                        <select class="filter-select" id="categorySelect">
                            <option value="all">Toutes les catégories</option>
                            <option value="culture">Culture & Organisation</option>
                            <option value="innovation">Innovation & Infrastructure</option>
                            <option value="communication">Communication</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <!-- End News Filter Area -->

        <!-- Start News Grid Area -->
        <section class="news-grid-area pb-100">
            <div class="container">
                <div class="row" id="newsContainer">
                    <?php
                    // Connexion à la base de données
                    require_once 'config.php';
                    $conn = getDB();
                    
                    // Pagination
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $limit = 6;
                    $offset = ($page - 1) * $limit;
                    
                    // Compter le nombre total d'actualités
                    $count_sql = "SELECT COUNT(*) as total FROM actualites WHERE statut = 'publie'";
                    $count_result = $conn->query($count_sql);
                    $total_row = $count_result->fetch_assoc();
                    $total_news = $total_row['total'];
                    $total_pages = ceil($total_news / $limit);
                    
                    // Récupérer les actualités avec pagination - CORRECTION: on garde type_media et image_apercu
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
                            // Formatage de la date
                            $date = new DateTime($row['date_publication']);
                            $jour = $date->format('d');
                            $mois = $date->format('M');
                            $annee = $date->format('Y');
                            
                            // Extraire un extrait du contenu (120 caractères)
                            $extrait = substr(strip_tags($row['contenu']), 0, 120) . '...';
                            
                            // Déterminer la classe de catégorie
                            $categorie_class = strtolower(str_replace(' & ', '-', $row['categorie']));
                            
                            // Gestion du média - CORRECTION: on utilise la même logique que la page d'accueil
                            if ($row['type_media'] == 'video') {
                                $media_html = '
                                <div class="news-image video-container">
                                    <video class="video-thumb" autoplay muted loop playsinline poster="' . htmlspecialchars($row['image_apercu']) . '">
                                        <source src="' . htmlspecialchars($row['chemin_media']) . '" type="video/mp4">
                                    </video>
                                    <div class="video-indicator"><i class="fas fa-play"></i></div>
                                    <div class="news-date">
                                        <span class="day">' . $jour . '</span>
                                        <span class="month">' . $mois . '</span>
                                        <span class="year">' . $annee . '</span>
                                    </div>
                                    <div class="news-category">' . htmlspecialchars($row['categorie']) . '</div>
                                </div>';
                            } else {
                                $media_html = '
                                <div class="news-image">
                                    <img src="' . htmlspecialchars($row['chemin_media']) . '" alt="' . htmlspecialchars($row['titre']) . '">
                                    <div class="news-date">
                                        <span class="day">' . $jour . '</span>
                                        <span class="month">' . $mois . '</span>
                                        <span class="year">' . $annee . '</span>
                                    </div>
                                    <div class="news-category">' . htmlspecialchars($row['categorie']) . '</div>
                                </div>';
                            }
                    ?>
                    <!-- News Item Dynamique -->
                    <div class="col-lg-4 col-md-6 news-item" data-category="<?php echo $categorie_class; ?>">
                        <div class="news-card">
                            <?php echo $media_html; ?>
                            <div class="news-content">
                                <h3><a href="actualite.php?id=<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['titre']); ?></a></h3>
                                <p><?php echo $extrait; ?></p>
                                <a href="actualite.php?id=<?php echo $row['id']; ?>" class="read-more">
                                    Lire la suite <i class="fas fa-arrow-right"></i>
                                </a>
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
                </div>

                <!-- Pagination -->
                <?php if ($total_pages > 1): ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pagination-area text-center">
                            <ul class="pagination">
                                <!-- Bouton Précédent -->
                                <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
                                    <a class="page-link" href="?page=<?php echo $page - 1; ?>" <?php echo ($page <= 1) ? 'tabindex="-1" aria-disabled="true"' : ''; ?>>
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                                
                                <!-- Numéros de page -->
                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                                <?php endfor; ?>
                                
                                <!-- Bouton Suivant -->
                                <li class="page-item <?php echo ($page >= $total_pages) ? 'disabled' : ''; ?>">
                                    <a class="page-link" href="?page=<?php echo $page + 1; ?>" <?php echo ($page >= $total_pages) ? 'tabindex="-1" aria-disabled="true"' : ''; ?>>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                            
                            <div class="pagination-info">
                                Page <?php echo $page; ?> sur <?php echo $total_pages; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <!-- End News Grid Area -->

        

        <div class="default-shape">
            <div class="shape-1"><img src="assets/img/shape/4.png" alt="image"></div>
            <div class="shape-2 rotateme"><img src="assets/img/shape/5.svg" alt="image"></div>
            <div class="shape-3"><img src="assets/img/shape/6.svg" alt="image"></div>
            <div class="shape-4"><img src="assets/img/shape/7.png" alt="image"></div>
            <div class="shape-5"><img src="assets/img/shape/8.png" alt="image"></div>
        </div>

        <?php include("inc/footer.php") ?>

<style>
/* ===== STYLES MODERNISÉS POUR LA PAGE ACTUALITÉS ===== */
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

:root {
    --primary-gradient: linear-gradient(135deg, #000000 0%, #F15A24 100%);
    --primary-color: #F15A24;
    --dark-color: #000000;
    --text-color: #333;
    --text-light: #666;
    --bg-light: #f8f9fa;
    --white: #ffffff;
    --shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
    --shadow-hover: 0 20px 40px rgba(241, 90, 36, 0.15);
}

/* Section Title */
.section-title {
    text-align: center;
    margin-bottom: 50px;
}

.section-subtitle {
    display: inline-block;
    background: var(--primary-gradient);
    color: var(--white);
    padding: 6px 18px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

.section-title h2 {
    font-size: 36px;
    margin-bottom: 15px;
    color: var(--dark-color);
    position: relative;
    padding-bottom: 20px;
}

.section-title h2:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: var(--primary-gradient);
    border-radius: 3px;
}

.section-title p {
    color: var(--text-light);
    max-width: 700px;
    margin: 0 auto;
    font-size: 16px;
    line-height: 1.8;
}

/* Filter Area */
.news-filter {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
    flex-wrap: wrap;
    gap: 20px;
}

.filter-categories {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.filter-btn {
    padding: 12px 24px;
    background: var(--white);
    border: 1px solid #e0e0e0;
    border-radius: 50px;
    color: var(--text-light);
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s;
    box-shadow: 0 2px 5px rgba(0,0,0,0.03);
}

.filter-btn:hover {
    border-color: var(--primary-color);
    color: var(--primary-color);
    transform: translateY(-2px);
}

.filter-btn.active {
    background: var(--primary-gradient);
    color: var(--white);
    border-color: transparent;
    box-shadow: 0 5px 15px rgba(241, 90, 36, 0.3);
}

.filter-dropdown {
    display: none;
}

.filter-select {
    padding: 12px 25px;
    background: var(--white);
    border: 2px solid #e0e0e0;
    border-radius: 10px;
    color: var(--text-light);
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    width: 250px;
    outline: none;
    transition: border-color 0.3s;
}

.filter-select:focus {
    border-color: var(--primary-color);
}

/* News Cards */
.news-card {
    background: var(--white);
    border-radius: 15px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: all 0.3s ease;
    margin-bottom: 30px;
    height: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
}

.news-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-hover);
}

.news-image {
    position: relative;
    height: 240px;
    overflow: hidden;
}

.news-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s;
}

.news-card:hover .news-image img {
    transform: scale(1.1);
}

/* Styles spécifiques pour les vidéos */
.news-image.video-container {
    background: #000;
}

.video-thumb {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.video-indicator {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60px;
    height: 60px;
    background: rgba(241, 90, 36, 0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
    cursor: pointer;
    z-index: 10;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
    transition: all 0.3s;
}

.video-indicator:hover {
    transform: translate(-50%, -50%) scale(1.1);
    background: var(--primary-color);
}

.news-date {
    position: absolute;
    top: 20px;
    left: 20px;
    background: var(--white);
    padding: 12px 15px;
    border-radius: 10px;
    text-align: center;
    min-width: 70px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    z-index: 2;
}

.news-date .day {
    display: block;
    font-size: 24px;
    font-weight: 700;
    color: var(--primary-color);
    line-height: 1;
}

.news-date .month {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: var(--text-color);
    text-transform: uppercase;
}

.news-date .year {
    display: block;
    font-size: 11px;
    color: var(--text-light);
}

.news-category {
    position: absolute;
    bottom: 20px;
    right: 20px;
    background: var(--primary-gradient);
    color: var(--white);
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 500;
    z-index: 2;
    box-shadow: 0 5px 10px rgba(241, 90, 36, 0.3);
}

.news-content {
    padding: 25px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.news-content h3 {
    font-size: 18px;
    margin-bottom: 15px;
    line-height: 1.5;
}

.news-content h3 a {
    color: var(--dark-color);
    text-decoration: none;
    transition: color 0.3s;
    font-weight: 600;
}

.news-content h3 a:hover {
    color: var(--primary-color);
}

.news-content p {
    color: var(--text-light);
    line-height: 1.7;
    margin-bottom: 20px;
    font-size: 14px;
    flex-grow: 1;
}

.read-more {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s;
    margin-top: auto;
}

.read-more i {
    font-size: 12px;
    transition: transform 0.3s;
}

.read-more:hover {
    color: var(--dark-color);
    gap: 12px;
}

.read-more:hover i {
    transform: translateX(5px);
}

/* Pagination */
.pagination-area {
    margin-top: 50px;
}

.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    list-style: none;
    padding: 0;
    margin: 0 0 15px 0;
}

.page-item {
    display: inline-block;
}

.page-item.disabled .page-link {
    opacity: 0.5;
    cursor: not-allowed;
    pointer-events: none;
}

.page-item.active .page-link {
    background: var(--primary-gradient);
    color: var(--white);
    border-color: transparent;
    box-shadow: 0 5px 15px rgba(241, 90, 36, 0.3);
}

.page-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    background: var(--white);
    border: 2px solid #e0e0e0;
    border-radius: 10px;
    color: var(--text-color);
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s;
}

.page-link:hover {
    border-color: var(--primary-color);
    color: var(--primary-color);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.pagination-info {
    text-align: center;
    color: var(--text-light);
    font-size: 14px;
}

/* Newsletter Section */
.newsletter-box {
    padding: 60px;
    border-radius: 20px;
    color: var(--white);
    box-shadow: 0 20px 40px rgba(241, 90, 36, 0.2);
}

.newsletter-content h3 {
    font-size: 28px;
    margin-bottom: 10px;
    color: var(--white);
}

.newsletter-content p {
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 0;
    font-size: 16px;
}

.newsletter-form .form-group {
    display: flex;
    gap: 10px;
}

.newsletter-form input {
    flex: 1;
    padding: 15px 20px;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.newsletter-form button {
    padding: 15px 35px;
    background: var(--dark-color);
    color: var(--white);
    border: none;
    border-radius: 10px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 16px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.newsletter-form button:hover {
    background: #222;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
}

/* Responsive */
@media only screen and (max-width: 768px) {
    .filter-categories {
        display: none;
    }
    
    .filter-dropdown {
        display: block;
        width: 100%;
    }
    
    .filter-select {
        width: 100%;
    }
    
    .newsletter-box {
        padding: 40px 30px;
    }
    
    .newsletter-content {
        margin-bottom: 20px;
        text-align: center;
    }
    
    .newsletter-form .form-group {
        flex-direction: column;
    }
    
    .newsletter-form button {
        width: 100%;
    }
    
    .section-title h2 {
        font-size: 28px;
    }
    
    .news-image {
        height: 200px;
    }
    
    .pagination {
        gap: 5px;
    }
    
    .page-link {
        width: 40px;
        height: 40px;
    }
    
    .video-indicator {
        width: 50px;
        height: 50px;
        font-size: 20px;
    }
}

@media only screen and (max-width: 576px) {
    .news-card {
        margin-left: 10px;
        margin-right: 10px;
    }
    
    .page-link {
        width: 35px;
        height: 35px;
        font-size: 14px;
    }
    
    .video-indicator {
        width: 40px;
        height: 40px;
        font-size: 16px;
    }
}
</style>

<script>
// Filtrage des actualités avec animation
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const filterSelect = document.getElementById('categorySelect');
    const newsItems = document.querySelectorAll('.news-item');
    
    // Fonction de filtrage avec animation
    function filterNews(category) {
        newsItems.forEach((item, index) => {
            if (category === 'all' || item.dataset.category === category) {
                // Animation d'apparition
                item.style.display = 'block';
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, index * 50);
            } else {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 300);
            }
        });
        
        // Mettre à jour les boutons actifs
        filterButtons.forEach(btn => {
            if (btn.dataset.filter === category) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
        
        // Mettre à jour le select
        if (filterSelect) {
            filterSelect.value = category;
        }
    }
    
    // Initialiser les styles pour l'animation
    newsItems.forEach(item => {
        item.style.transition = 'opacity 0.3s, transform 0.3s';
    });
    
    // Event listeners pour les boutons
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.dataset.filter;
            filterNews(category);
        });
    });
    
    // Event listener pour le select
    if (filterSelect) {
        filterSelect.addEventListener('change', function() {
            const category = this.value;
            filterNews(category);
        });
    }
    
    // Animation au scroll pour les cartes
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    newsItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        observer.observe(item);
    });
});
</script>