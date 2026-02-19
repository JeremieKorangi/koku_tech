rend la  partie blanche chaque card transparente sombre et ajoute de l'espace au dessus de **Tous les albums photos**:                                                                                    <?php include("inc/head.php") ?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-6" style="background-image: url(assets/img/bg-6.jpg);">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Archives des événements</h2>
                            <ul>
                                <li><a href="index.html">Accueil</a></li>
                                <li>Archives</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Archives Intro -->
        <section class="archives-intro pt-50 pb-50">
            <div class="container">
                <div class="section-title">
                    <h2>Tous les albums photos</h2>
                    <p>Retrouvez l'intégralité des galeries photos de nos événements passés.</p>
                </div>
            </div>
        </section>
        <!-- End Archives Intro -->

        <!-- Start Archives List -->
        <section class="archives-list pb-100">
            <div class="container-fluid p-0">
                <!-- Event Card 1 -->
                <div class="archive-card">
                    <div class="archive-card-image">
                        <img src="assets/img/archives/img22.jpg" alt="Derby de Kinshasa">
                        <div class="image-overlay">
                            <span class="photo-count">22 PHOTOS</span>
                        </div>
                    </div>
                    <div class="archive-card-content">
                        <h3>Une après-midi de derby en images</h3>
                        <p class="event-date">15 octobre 2025</p>
                        <a href="galerie-derby.php" class="btn-archive">Voir la galerie <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div class="archive-card">
                    <div class="archive-card-image">
                        <img src="assets/img/archives/img2.png" alt="Foire Internationale 2025">
                        <div class="image-overlay">
                            <span class="photo-count">45 PHOTOS</span>
                        </div>
                    </div>
                    <div class="archive-card-content">
                        <h3>Foire Internationale 2025 – Édition de la Paix</h3>
                        <p class="event-date">2 août - 2 septembre 2025</p>
                        <a href="galerie-foire-2025.php" class="btn-archive">Voir la galerie <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Event Card 3 -->
                <div class="archive-card">
                    <div class="archive-card-image">
                        <img src="assets/img/archives/img13.jpg" alt="Festival de musique">
                        <div class="image-overlay">
                            <span class="photo-count">30 PHOTOS</span>
                        </div>
                    </div>
                    <div class="archive-card-content">
                        <h3>Festival de musique africaine – Édition 2024</h3>
                        <p class="event-date">Juillet 2024</p>
                        <a href="galerie-festival-2024.php" class="btn-archive">Voir la galerie <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Event Card 4 -->
                <div class="archive-card">
                    <div class="archive-card-image">
                        <img src="assets/img/archives/img29.jpg" alt="Festival du cinéma 2016">
                        <div class="image-overlay">
                            <span class="photo-count">18 PHOTOS</span>
                        </div>
                    </div>
                    <div class="archive-card-content">
                        <h3>FICKIN 3 – Festival international du cinéma</h3>
                        <p class="event-date">5 - 9 juillet 2016</p>
                        <a href="galerie-cinema-2016.php" class="btn-archive">Voir la galerie <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Ajoutez autant de cartes que nécessaire -->
            </div>
        </section>
        <!-- End Archives List -->

        <!-- Start Pagination (optionnel) -->
        <div class="pagination-area pb-100">
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#">Précédent</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
            </ul>
        </div>
        <!-- End Pagination -->

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

        <?php include("inc/footer.php") ?>

<style>
/* Styles spécifiques à la page Archives */
.archives-intro {
    background: #fff;
}

.section-title {
    text-align: center;
    margin-bottom: 40px;
}

.section-title h2 {
    font-size: 36px;
    color: #333;
    margin-bottom: 10px;
}

.section-title p {
    color: #666;
    font-size: 16px;
}

/* Archives List */
.archives-list .container-fluid {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 30px;
}

.archive-card {
    display: flex;
    align-items: center;
    width: 100%;
    margin-bottom: 40px;
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.archive-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.15);
}

.archive-card-image {
    position: relative;
    width: 40%;
    height: 280px;
    overflow: hidden;
}

.archive-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s;
}

.archive-card:hover .archive-card-image img {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    top: 20px;
    left: 20px;
    background: rgba(0,0,0,0.7);
    color: #fff;
    padding: 8px 16px;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.5px;
    backdrop-filter: blur(5px);
    z-index: 2;
}

.archive-card-content {
    width: 60%;
    padding: 30px 40px;
}

.archive-card-content h3 {
    font-size: 26px;
    margin-bottom: 10px;
    color: #333;
    font-weight: 700;
}

.event-date {
    color: #666;
    font-size: 16px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.event-date i {
    color: #667eea;
}

.btn-archive {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
    padding: 12px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s;
    border: none;
    cursor: pointer;
    font-size: 16px;
}

.btn-archive:hover {
    background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(102,126,234,0.4);
}

.btn-archive i {
    transition: transform 0.3s;
}

.btn-archive:hover i {
    transform: translateX(5px);
}

/* Responsive */
@media (max-width: 992px) {
    .archive-card {
        flex-direction: column;
    }
    .archive-card-image,
    .archive-card-content {
        width: 100%;
    }
    .archive-card-image {
        height: 220px;
    }
    .archive-card-content {
        padding: 25px;
    }
    .archive-card-content h3 {
        font-size: 22px;
    }
}

@media (max-width: 576px) {
    .archives-list .container-fluid {
        padding: 0 15px;
    }
    .archive-card-content h3 {
        font-size: 20px;
    }
    .btn-archive {
        padding: 10px 20px;
        font-size: 14px;
    }
}

/* Pagination (réutilisée) */
.pagination-area {
    text-align: center;
    margin-top: 30px;
}

.pagination {
    display: inline-flex;
    list-style: none;
    padding: 0;
    gap: 8px;
}

.page-item .page-link {
    display: block;
    padding: 10px 16px;
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    color: #666;
    text-decoration: none;
    transition: all 0.3s;
}

.page-link:hover {
    background: linear-gradient(135deg, #080808 0%, #252525 100%);
    color: #fff;
    border-color: transparent;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
}

.page-item.active .page-link {
    background: linear-gradient(135deg, #080808 0%, #7c726b 100%);
    color: #fff;
    border-color: transparent;
    font-weight: 600;
}

.page-item.disabled .page-link {
    background: #f8f9fa;
    color: #999;
    pointer-events: none;
}
</style>                                                              