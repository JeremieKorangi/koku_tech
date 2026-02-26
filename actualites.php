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

        <!-- Start News Filter Area -->
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
                    <!-- News Item 1 -->
                    <div class="col-lg-4 col-md-6 news-item" data-category="culture">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/img/news/simk25.jpg" alt="SIMK25">
                                <div class="news-date">
                                    <span class="day">25</span>
                                    <span class="month">Oct</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="news-category">Culture & Organisation</div>
                            </div>
                            <div class="news-content">
                                <h3><a href="news-detail.php?id=1">SIMK25 : le rendez-vous de l'excellence congolaise !</a></h3>
                                <p>Sous l'impulsion et la vision du Chef de l'État, Félix Antoine Tshisekedi Tshilombo, qui œuvre pour une RDC forte, moderne et compétitive, la 9ᵉ édition du Salon International Multisectoriel de Kinshasa (SIMK 2025) s'impose comme un rendez-vous stratégique de l'économie congolaise...</p>
                                <a href="news-detail.php?id=1" class="read-more">
                                    Lire la suite <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 2 -->
                    <div class="col-lg-4 col-md-6 news-item" data-category="culture">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/img/news/dg-interview.jpg" alt="DG FICKIN">
                                <div class="news-date">
                                    <span class="day">20</span>
                                    <span class="month">Oct</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="news-category">Culture & Organisation</div>
                            </div>
                            <div class="news-content">
                                <h3><a href="news-detail.php?id=2">NEWS: Salon International Multisectoriel FICKIN25 – le DG Hon. Didier KABAMPELE fait le point.</a></h3>
                                <p>Du 1er au 5 novembre 2025 se tiendra à l'enceinte de la FICKIN, la 9ᵉ édition du Salon International Multisectoriel de Kinshasa (SIMK 2025), placée sous le thème : « Commerce général entre la RDC et l'Égypte : défis ou opportunités ? »</p>
                                <a href="news-detail.php?id=2" class="read-more">
                                    Lire la suite <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 3 -->
                    <div class="col-lg-4 col-md-6 news-item" data-category="innovation">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/img/news/stands-modernes.jpg" alt="Stands modernes">
                                <div class="news-date">
                                    <span class="day">02</span>
                                    <span class="month">Sept</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="news-category">Innovation & Infrastructure</div>
                            </div>
                            <div class="news-content">
                                <h3><a href="news-detail.php?id=3">La modernisation de la FICKIN c'est maintenant!</a></h3>
                                <p>La FICKIN dispose désormais de stands modernes, conçus pour offrir un espace optimal d'exposition, de rencontre et de valorisation des produits et services. Ces installations favorisent la visibilité des exposants, encouragent les échanges professionnels et créent une expérience immersive pour les visiteurs.</p>
                                <a href="news-detail.php?id=3" class="read-more">
                                    Lire la suite <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 4 -->
                    <div class="col-lg-4 col-md-6 news-item" data-category="communication">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/img/news/top-congo.jpg" alt="Interview Radio Top Congo">
                                <div class="news-date">
                                    <span class="day">07</span>
                                    <span class="month">Août</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="news-category">Communication</div>
                            </div>
                            <div class="news-content">
                                <h3><a href="news-detail.php?id=4">Où en sommes-nous avec la modernisation de la Foire Internationale du Congo Kinshasa?</a></h3>
                                <p>Le Directeur Général de la FICKIN répond et rassure l'opinion au micro de Radio Top Congo, affirmant que les travaux avancent à grands pas et que tout se met en place pour faire de cette...</p>
                                <a href="news-detail.php?id=4" class="read-more">
                                    Lire la suite <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 5 -->
                    <div class="col-lg-4 col-md-6 news-item" data-category="culture">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/img/news/ouverture-fickin.jpg" alt="Ouverture FICKIN 2025">
                                <div class="news-date">
                                    <span class="day">05</span>
                                    <span class="month">Août</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="news-category">Culture & Organisation</div>
                            </div>
                            <div class="news-content">
                                <h3><a href="news-detail.php?id=5">FICKIN 2025 : une édition placée sous le signe de l'espoir et de l'espérance</a></h3>
                                <p>Le ministre du Commerce extérieur, Julien Paluku, a placé la 47ᵉ édition de la Foire internationale du Congo-Kinshasa (FICKIN) sous le signe de l'espoir et de l'espérance, marquant ainsi la relance des activités foraines en RDC lors de l'ouverture officielle de la foire, samedi 2 août...</p>
                                <a href="news-detail.php?id=5" class="read-more">
                                    Lire la suite <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 6 -->
                    <div class="col-lg-4 col-md-6 news-item" data-category="culture">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/img/news/preparation-fickin.jpg" alt="Préparation FICKIN">
                                <div class="news-date">
                                    <span class="day">30</span>
                                    <span class="month">Juil</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="news-category">Culture & Organisation</div>
                            </div>
                            <div class="news-content">
                                <h3><a href="news-detail.php?id=6">RDC : La 47ème édition foraine de la FICKIN s'ouvre le samedi 2 août 2025</a></h3>
                                <p>À l'issue de la visite officielle qu'il a effectuée le mardi 29 juillet 2025 sur le site d'exposition pour la 47ème édition foraine à la Foire Internationale du Congo-Kinshasa (FICKIN), le Ministre du Commerce Extérieur...</p>
                                <a href="news-detail.php?id=6" class="read-more">
                                    Lire la suite <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="load-more-btn text-center">
                            <button id="loadMoreBtn" class="default-btn">
                                Charger plus d'actualités
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End News Grid Area -->


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

        <div class="schedule-shape">
                <div class="shape-1">
                    <img src="assets/img/schedule/shape-2.png" alt="image">
                </div>
                <div class="shape-2">
                    <img src="assets/img/schedule/shape-1.png" alt="image">
                </div>
        </div>
        <?php include("inc/footer.php") ?>

<style>
/* Styles pour la page Actualités FICKIN */
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

/* Section Title */
.section-title {
    text-align: center;
    margin-bottom: 50px;
}

.section-title h2 {
    font-size: 36px;
    margin-bottom: 15px;
    color: #333;
    position: relative;
    padding-bottom: 15px;
}

.section-title h2:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
}

.section-title p {
    color: #666;
    max-width: 700px;
    margin: 0 auto;
    font-size: 16px;
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
    padding: 10px 20px;
    background: #f8f9fa;
    border: 1px solid #e0e0e0;
    border-radius: 30px;
    color: #666;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s;
}

.filter-btn:hover {
    background: #f8f9fa;
    color: #666;
    border-color: transparent;
}

.filter-btn.active {
    background: linear-gradient(135deg, #d35d0e 0%, #e79909 100%);
    color: #f0efef;
    border-color: transparent;
}

.filter-dropdown {
    display: none;
}

.filter-select {
    padding: 12px 25px;
    background: #f8f9fa;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    color: #666;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    width: 250px;
}

/* News Cards */
.news-card {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
    transition: all 0.3s ease;
    margin-bottom: 30px;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.news-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

.news-image {
    position: relative;
    height: 220px;
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

.news-date {
    position: absolute;
    top: 15px;
    left: 15px;
    background: rgba(255, 255, 255, 0.95);
    padding: 10px 15px;
    border-radius: 5px;
    text-align: center;
    min-width: 60px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    z-index: 2;
}

.news-date .day {
    display: block;
    font-size: 20px;
    font-weight: 700;
    color: #f5576c;
    line-height: 1;
}

.news-date .month {
    display: block;
    font-size: 12px;
    font-weight: 600;
    color: #666;
    text-transform: uppercase;
}

.news-date .year {
    display: block;
    font-size: 10px;
    color: #999;
}

.news-category {
    position: absolute;
    bottom: 15px;
    right: 15px;
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: #fff;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
    z-index: 2;
    box-shadow: 0 5px 10px rgba(245, 87, 108, 0.3);
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
    line-height: 1.4;
}

.news-content h3 a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s;
}

.news-content h3 a:hover {
    color: #f5576c;
}

.news-content p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: 14px;
    flex-grow: 1;
}

.read-more {
    color: #333;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s;
    margin-top: auto;
}

.read-more i {
    font-size: 12px;
    transition: transform 0.3s;
}

.read-more:hover {
    color: #f5576c;
}

.read-more:hover i {
    transform: translateX(5px);
}

/* Load More Button */
.load-more-btn {
    margin-top: 30px;
}

.default-btn {
    display: inline-block;
    padding: 15px 35px;
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s;
    border: none;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(245, 87, 108, 0.3);
}

.default-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(245, 87, 108, 0.4);
}

/* Newsletter Area */
.newsletter-box {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 50px;
    border-radius: 10px;
    color: #fff;
}

.newsletter-content h3 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #fff;
}

.newsletter-content p {
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 0;
}

.newsletter-form form {
    display: flex;
    gap: 10px;
}

.newsletter-form input {
    flex: 1;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
}

.newsletter-form button {
    padding: 15px 30px;
    background: #fff;
    color: #333;
    border: none;
    border-radius: 5px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
}

.newsletter-form button:hover {
    background: #f8f9fa;
    transform: translateY(-2px);
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
        padding: 30px;
    }
    
    .newsletter-content {
        margin-bottom: 20px;
        text-align: center;
    }
    
    .newsletter-form form {
        flex-direction: column;
    }
    
    .section-title h2 {
        font-size: 28px;
    }
    
    .news-image {
        height: 180px;
    }
}

@media only screen and (max-width: 576px) {
    .news-card {
        margin-left: 15px;
        margin-right: 15px;
    }
}
</style>

<script>
// Filtrage des actualités
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const filterSelect = document.getElementById('categorySelect');
    const newsItems = document.querySelectorAll('.news-item');
    
    // Fonction de filtrage
    function filterNews(category) {
        newsItems.forEach(item => {
            if (category === 'all' || item.dataset.category === category) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
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
    
    // Load More (simulation - à connecter avec PHP plus tard)
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    let currentItems = 6;
    
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            // Ici, vous ajouterez la logique AJAX pour charger plus d'articles
            alert('Fonctionnalité à venir : chargement de plus d\'actualités via AJAX');
        });
    }
});
</script>