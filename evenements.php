<?php include("inc/head.php") ?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-6" style="background-image: url(assets/img/bg-6.jpg);">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Nos Événements</h2>
                            <ul>
                                <li><a href="index.html">Accueil</a></li>
                                <li>Événements</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Events Intro Area 
        <section class="events-intro-area pt-100 pb-50">
            <div class="container">
                <div class="section-title">
                    <h2>Notre histoire à travers les événements</h2>
                    <p>Depuis sa création en 1969, la FICKIN a accueilli d'innombrables manifestations internationales, des éditions nationales et des festivals culturels qui ont marqué la mémoire collective.</p>
                </div>
            </div>
        </section>
        <!-- End Events Intro Area -->

        <!-- Start Featured Event Area - Salon International Multisectoriel 2025 -->
        <!--<section class="featured-event-area pb-50">
            <div class="container">
                <div class="featured-event-card">
                    <div class="row g-0">
                        <div class="col-lg-8">
                            <div class="featured-event-content">
                                <span class="event-badge">Événement à venir</span>
                                <h2>Salon International Multisectoriel FICKIN 2025</h2>
                                <div class="event-meta">
                                    <span><i class="far fa-calendar-alt"></i> Initialement prévu : 01 - 05 novembre 2025</span>
                                    <span><i class="far fa-map-marker-alt"></i> Kinshasa, RDC</span>
                                </div>
                                <p class="event-description">Initialement prévu du 01 au 05 novembre à Kinshasa, le Salon International Multisectoriel FICKIN 2025 a été reporté à une date ultérieure. Nous vous tiendrons informés dès qu'une nouvelle date sera confirmée.</p>
                                
                                 Countdown Timer 
                                <div class="countdown-container">
                                    <h4>Nouvelle date à venir</h4>
                                    <div class="countdown-timer" id="countdown">
                                        <div class="countdown-box">
                                            <span class="days">00</span>
                                            <span class="label">Jours</span>
                                        </div>
                                        <div class="countdown-box">
                                            <span class="hours">00</span>
                                            <span class="label">Heures</span>
                                        </div>
                                        <div class="countdown-box">
                                            <span class="minutes">00</span>
                                            <span class="label">Minutes</span>
                                        </div>
                                        <div class="countdown-box">
                                            <span class="seconds">00</span>
                                            <span class="label">Secondes</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="event-actions">
                                    <button class="btn-notify" onclick="openNotifyModal()">
                                        <i class="far fa-bell"></i> Me notifier
                                    </button>
                                    <a href="#past-events" class="btn-explore">
                                        Explorer nos éditions passées <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="featured-event-image">
                                <img src="assets/img/archives/foraine25.jpg" alt="Salon International Multisectoriel 2025">
                                <div class="image-overlay">
                                    <span class="overlay-text">FICKIN 2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- End Featured Event Area -->

        <!-- Start Past Events Area -->
        <section id="past-events" class="past-events-area pb-100"  style="padding-top: 150px;">
            <div class="container">
                <div class="section-title">
                    <h2>Éditions Passées</h2>
                    <p>Redécouvrez les moments forts qui ont marqué l'histoire de la FICKIN à travers nos éditions précédentes.</p>
                </div>

                <!-- Conteneur des cartes avec ID pour la pagination -->
                <div class="events-grid" id="events-grid-container">
                    <!-- Event Card 1: 1969 -->
                    <div class="event-card">
                        <div class="event-card-media">
                            <img src="assets/img/archives/img22.jpg" alt="Première édition 1969">
                            <!--<div class="event-year-badge">2024</div>-->
                            <div class="media-overlay">
                                <button class="btn-view-gallery" onclick="openEventGallery(1969)">
                                    <i class="fas fa-images"></i> Voir la galerie
                                </button>
                            </div>
                        </div>
                        <div class="event-card-content">
                            <h3>Première édition internationale</h3>
                            <div class="event-meta">
                                <span><i class="far fa-calendar-alt"></i> 30 juin - 14 juillet 1969</span>
                            </div>
                            <p class="event-description">La toute première édition internationale de la Foire Internationale de Kinshasa est officiellement inaugurée par le feu président Joseph Désiré Mobutu. Cet événement historique marque la naissance d'une institution qui allait devenir le poumon économique du pays.</p>
                            <div class="event-gallery-preview">
                                <div class="preview-images">
                                    <img src="assets/img/archives/1969-1.jpg" alt="Preview 1" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/1969-2.jpg" alt="Preview 2" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/1969-3.jpg" alt="Preview 3" onclick="openLightbox(this)">
                                    <span class="more-images">+3</span>
                                </div>
                               <a href="single-blog.php" class="btn-view-all">Voir tout</a>
                            </div>
                        </div>
                    </div>

                    <!-- Event Card 2: 1973 -->
                    <div class="event-card">
                        <div class="event-card-media">
                            <img src="assets/img/archives/img13.jpg" alt="Adhésion UFI 1973">
                            <!--<div class="event-year-badge">2024</div>-->
                            <div class="media-overlay">
                                <button class="btn-view-gallery" onclick="openEventGallery(1973)">
                                    <i class="fas fa-images"></i> Voir la galerie
                                </button>
                            </div>
                        </div>
                        <div class="event-card-content">
                            <h3>Adhésion à l'Union des Foires Internationales</h3>
                            <div class="event-meta">
                                <span><i class="far fa-calendar-alt"></i> 2024</span>
                            </div>
                            <p class="event-description">La FIKIN devient membre de l'Union des foires internationales (UFI), une reconnaissance prestigieuse qui confirme son rayonnement sur la scène mondiale et son engagement à respecter les standards internationaux les plus élevés.</p>
                            <div class="event-gallery-preview">
                                <div class="preview-images">
                                    <img src="assets/img/archives/img8.jpg" alt="Preview 1" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/img16.jpg" alt="Preview 2" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/img17.jpg" alt="Preview 3" onclick="openLightbox(this)">
                                    <span class="more-images">+1</span>
                                </div>
                                <a href="single-blog.php" class="btn-view-all">Voir tout</a>
                            </div>
                        </div>
                    </div>

                    <!-- Event Card 3: 1991-1993 -->
                    <div class="event-card">
                        <div class="event-card-media">
                            <img src="assets/img/archives/chantier2.jpg" alt="Pillages 1991-1993">
                            <!--<div class="event-year-badge">2024</div>-->
                            <div class="media-overlay">
                                <button class="btn-view-gallery" onclick="openEventGallery(1991)">
                                    <i class="fas fa-images"></i> Voir la galerie
                                </button>
                            </div>
                        </div>
                        <div class="event-card-content">
                            <h3>Les années sombres : pillages de 1991 et 1993</h3>
                            <div class="event-meta">
                                <span><i class="far fa-calendar-alt"></i> 1991 et 1993</span>
                            </div>
                            <p class="event-description">En 1991, puis à nouveau en 1993, la FIKIN est victime des pillages qui frappent la ville de Kinshasa. L'édition nationale est gravement perturbée et les infrastructures subissent d'importants dégâts.</p>
                            <div class="event-gallery-preview">
                                <div class="preview-images">
                                    <img src="assets/img/archives/1991-1.jpg" alt="Preview 1" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/1991-2.jpg" alt="Preview 2" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/1993-1.jpg" alt="Preview 3" onclick="openLightbox(this)">
                                    <span class="more-images">+1</span>
                                </div>
                                <a href="single-blog.php" class="btn-view-all">Voir tout</a>
                            </div>
                        </div>
                    </div>

                    <!-- Event Card 4: Festivals de musique -->
                    <div class="event-card">
                        <div class="event-card-media">
                            <img src="assets/img/archives/foire_paris2.png" alt="Festivals de musique">
                            <!--<div class="event-year-badge">2024</div>-->
                            <div class="media-overlay">
                                <button class="btn-view-gallery" onclick="openEventGallery('festival')">
                                    <i class="fas fa-images"></i> Voir la galerie
                                </button>
                            </div>
                        </div>
                        <div class="event-card-content">
                            <h3>Festivals de musique africaine</h3>
                            <div class="event-meta">
                                <span><i class="far fa-calendar-alt"></i> 2000 - 2010</span>
                            </div>
                            <p class="event-description">Malgré les difficultés, la FIKIN reste vivante et accueille durant l'été l'un des plus grands festivals de musique africaine, attirant des artistes et des mélomanes de tout le continent.</p>
                            <div class="event-gallery-preview">
                                <div class="preview-images">
                                    <img src="assets/img/archives/festival-1.jpg" alt="Preview 1" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/festival-2.jpg" alt="Preview 2" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/festival-3.jpg" alt="Preview 3" onclick="openLightbox(this)">
                                    <span class="more-images">+3</span>
                                </div>
                               <a href="single-blog.php" class="btn-view-all">Voir tout</a>
                            </div>
                        </div>
                    </div>

                    <!-- Event Card 5: 2014 - Festival du Cinéma -->
                    <div class="event-card">
                        <div class="event-card-media">
                            <img src="assets/img/archives/cinema-2014-main.jpg" alt="Festival du Cinéma 2014">
                            <!--<div class="event-year-badge">2024</div>-->
                            <div class="media-overlay">
                                <button class="btn-view-gallery" onclick="openEventGallery(2014)">
                                    <i class="fas fa-images"></i> Voir la galerie
                                </button>
                            </div>
                        </div>
                        <div class="event-card-content">
                            <h3>Création du Festival International du Cinéma</h3>
                            <div class="event-meta">
                                <span><i class="far fa-calendar-alt"></i> 2014</span>
                            </div>
                            <p class="event-description">Le Festival International du Cinéma de Kinshasa, également appelé FICKIN, est créé par Tshoper Kabambi pour promouvoir l'éclosion d'une industrie du film en RDC.</p>
                            <div class="event-gallery-preview">
                                <div class="preview-images">
                                    <img src="assets/img/archives/cinema-2014-1.jpg" alt="Preview 1" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/cinema-2014-2.jpg" alt="Preview 2" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/cinema-2014-3.jpg" alt="Preview 3" onclick="openLightbox(this)">
                                    <span class="more-images">+1</span>
                                </div>
                               <a href="single-blog.php" class="btn-view-all">Voir tout</a>
                            </div>
                        </div>
                    </div>

                    <!-- Event Card 6: 2016 - FICKIN 3 -->
                    <div class="event-card">
                        <div class="event-card-media">
                            <img src="assets/img/archives/cinema-2016-main.jpg" alt="FICKIN 3 - 2016">
                            <!--<div class="event-year-badge">2024</div>-->
                            <div class="media-overlay">
                                <button class="btn-view-gallery" onclick="openEventGallery(2016)">
                                    <i class="fas fa-images"></i> Voir la galerie
                                </button>
                            </div>
                        </div>
                        <div class="event-card-content">
                            <h3>FICKIN 3 : Le festival qui ose</h3>
                            <div class="event-meta">
                                <span><i class="far fa-calendar-alt"></i> 5 - 9 juillet 2016</span>
                            </div>
                            <p class="event-description">53 films venus du monde entier, dont 17 films congolais. Innovation : des ciné-concerts avec Charlie Chaplin "parlant" en tshiluba. Prix du meilleur film : "Calvaire" d'Austin Kashala.</p>
                            <div class="event-gallery-preview">
                                <div class="preview-images">
                                    <img src="assets/img/archives/cinema-2016-1.jpg" alt="Preview 1" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/cinema-2016-2.jpg" alt="Preview 2" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/cinema-2016-3.jpg" alt="Preview 3" onclick="openLightbox(this)">
                                    <span class="more-images">+3</span>
                                </div>
                                <a href="single-blog.php" class="btn-view-all">Voir tout</a>
                            </div>
                        </div>
                    </div>

                    <!-- Event Card 7: 2024 - Changement de nom -->
                    <div class="event-card">
                        <div class="event-card-media">
                            <img src="assets/img/archives/2024-main.jpg" alt="Changement de nom 2024">
                            <!--<div class="event-year-badge">2024</div>-->
                            <div class="media-overlay">
                                <button class="btn-view-gallery" onclick="openEventGallery(2024)">
                                    <i class="fas fa-images"></i> Voir la galerie
                                </button>
                            </div>
                        </div>
                        <div class="event-card-content">
                            <h3>Naissance de la Foire Internationale du Congo Kinshasa</h3>
                            <div class="event-meta">
                                <span><i class="far fa-calendar-alt"></i> 22 novembre 2024</span>
                            </div>
                            <p class="event-description">Le gouvernement officialise la transformation de la FIKIN en FICKIN (Foire Internationale du Congo Kinshasa), élargissant son champ d'action au-delà de la capitale.</p>
                            <div class="event-gallery-preview">
                                <div class="preview-images">
                                    <img src="assets/img/archives/2024-1.jpg" alt="Preview 1" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/2024-2.jpg" alt="Preview 2" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/2024-3.jpg" alt="Preview 3" onclick="openLightbox(this)">
                                    <span class="more-images">+1</span>
                                </div>
                                <a href="single-blog.php" class="btn-view-all">Voir tout</a>
                            </div>
                        </div>
                    </div>

                    <!-- Event Card 8: 2025 - 47e édition -->
                    <div class="event-card">
                        <div class="event-card-media">
                            <img src="assets/img/archives/2025-main.jpg" alt="47e édition 2025">
                            <div class="event-year-badge">2025</div>
                            <div class="media-overlay">
                                <button class="btn-view-gallery" onclick="openEventGallery(2025)">
                                    <i class="fas fa-images"></i> Voir la galerie
                                </button>
                            </div>
                        </div>
                        <div class="event-card-content">
                            <h3>47e édition : La Foire de la Paix</h3>
                            <div class="event-meta">
                                <span><i class="far fa-calendar-alt"></i> 2 août - 2 septembre 2025</span>
                            </div>
                            <p class="event-description">Édition placée sous le thème "Foire de la paix et de l'unité nationale". Réadmission à l'UFI, arrivée des délégués chinois pour la modernisation, et annonce d'un plan de développement sur 36 mois.</p>
                            <div class="event-gallery-preview">
                                <div class="preview-images">
                                    <img src="assets/img/archives/2025-1.jpg" alt="Preview 1" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/2025-2.jpg" alt="Preview 2" onclick="openLightbox(this)">
                                    <img src="assets/img/archives/2025-3.jpg" alt="Preview 3" onclick="openLightbox(this)">
                                    <span class="more-images">+5</span>
                                </div>
                                <a href="single-blog.php" class="btn-view-all">Voir tout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination dynamique -->
                <div class="pagination-area">
                    <ul class="pagination" id="pagination"></ul>
                    <p class="pagination-info" id="pagination-info"></p>
                </div>
            </div>
        </section>
        <!-- End Past Events Area -->

        <!-- Start Cultural Emblem Area 
        <section class="cultural-emblem-area pb-100">
            <div class="container">
                <div class="emblem-card">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="emblem-image">
                                <img src="assets/img/archives/batteur-tamtam.jpg" alt="Le Batteur de tam-tam" class="rounded-image">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="emblem-content">
                                <span class="emblem-badge">Symbole de la FICKIN</span>
                                <h3>Le Batteur de tam-tam</h3>
                                <p>Depuis son inauguration jusqu'à ce jour, la FICKIN a comme référence le « Batteur de tam-tam », réalisé par le célèbre sculpteur congolais André Lufwa Mawidi. Cette statue emblématique, située à l'entrée principale, est devenue le symbole de l'institution et un repère pour tous les Kinois.</p>
                                <p>Photographiée dès 1972, elle témoigne de la richesse culturelle et artistique de la RDC et accueille depuis plus d'un demi-siècle les visiteurs de la foire.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- End Cultural Emblem Area -->

        <!-- Start Lightbox Modal -->
        <div id="lightbox-modal" class="lightbox-modal">
            <span class="close-lightbox" onclick="closeLightbox()">&times;</span>
            <img class="lightbox-content" id="lightbox-image">
            <div id="lightbox-caption"></div>
            <a class="lightbox-prev" onclick="changeImage(-1)">&#10094;</a>
            <a class="lightbox-next" onclick="changeImage(1)">&#10095;</a>
        </div>
        <!-- End Lightbox Modal -->

        <!-- Start Gallery Modal -->
        <div id="gallery-modal" class="gallery-modal">
            <div class="gallery-modal-content">
                <span class="close-gallery-modal" onclick="closeGalleryModal()">&times;</span>
                <h3 id="gallery-modal-title">Galerie complète</h3>
                <div id="gallery-modal-images" class="gallery-modal-images">
                    <!-- Images will be loaded dynamically -->
                </div>
            </div>
        </div>
        <!-- End Gallery Modal -->

        <!-- Start Notify Modal -->
        <div id="notify-modal" class="notify-modal">
            <div class="notify-modal-content">
                <span class="close-notify-modal" onclick="closeNotifyModal()">&times;</span>
                <div class="notify-icon">
                    <i class="far fa-bell"></i>
                </div>
                <h3>Notification</h3>
                <p>Laissez-nous votre email pour recevoir une notification dès que la nouvelle date du Salon International Multisectoriel 2025 sera annoncée.</p>
                <form id="notify-form">
                    <input type="email" placeholder="Votre adresse email" required>
                    <button type="submit">M'alerter</button>
                </form>
            </div>
        </div>
        <!-- End Notify Modal -->

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
/* Styles pour la page Événements FICKIN - Style Carte Moderne */
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
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.section-title p {
    color: #666;
    max-width: 700px;
    margin: 0 auto;
    font-size: 16px;
}

/* Featured Event Card */
.featured-event-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    margin-bottom: 60px;
    border: 1px solid #f0f0f0;
    transition: transform 0.3s;
}

.featured-event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12);
}

.featured-event-content {
    padding: 50px 40px;
}

.event-badge {
    display: inline-block;
    background: linear-gradient(135deg, #aaa4a4 0%, #d30d0d 100%);
    color: #fff;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 20px;
    letter-spacing: 0.5px;
}

.featured-event-content h2 {
    font-size: 32px;
    margin-bottom: 20px;
    color: #333;
    line-height: 1.3;
}

.event-meta {
    margin-bottom: 20px;
}

.event-meta span {
    display: inline-block;
    margin-right: 25px;
    color: #666;
    font-size: 15px;
}

.event-meta i {
    margin-right: 8px;
    color: #667eea;
}

.event-description {
    color: #666;
    line-height: 1.8;
    margin-bottom: 30px;
    font-size: 16px;
}

/* Countdown Timer */
.countdown-container {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 15px;
    margin-bottom: 30px;
}

.countdown-container h4 {
    font-size: 16px;
    color: #666;
    margin-bottom: 15px;
    font-weight: 400;
}

.countdown-timer {
    display: flex;
    gap: 15px;
}

.countdown-box {
    background: #fff;
    border-radius: 10px;
    padding: 15px;
    min-width: 80px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.countdown-box span:first-child {
    display: block;
    font-size: 28px;
    font-weight: 700;
    color: #333;
    line-height: 1;
    margin-bottom: 5px;
}

.countdown-box .label {
    font-size: 12px;
    color: #999;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.event-actions {
    display: flex;
    gap: 15px;
    align-items: center;
}

.btn-notify {
  background: linear-gradient(135deg, #080808 0%, #7c726b 100%);
    color: #fff;
    border: none;
    padding: 14px 30px;
    border-radius: 10px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 16px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-notify:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(214, 129, 59, 0.3);
}

.btn-explore {
    color: #fcb64f;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s;
}

.btn-explore:hover {
    color: #a24b4b;
}

.featured-event-image {
    height: 100%;
    min-height: 400px;
    position: relative;
    overflow: hidden;
}

.featured-event-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(22, 22, 22, 0.3) 0%, rgba(100, 99, 98, 0.3) 100%);
    display: flex;
    align-items: flex-end;
    padding: 30px;
}

.overlay-text {
    color: #fff;
    font-size: 24px;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

/* Events Grid */
.events-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

@media (max-width: 992px) {
    .events-grid {
        grid-template-columns: 1fr;
    }
}

/* Event Card */
.event-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    transition: all 0.3s;
    border: 1px solid #f0f0f0;
    display: flex;
    flex-direction: column;
}

.event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.event-card-media {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.event-card-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s;
}

.event-card:hover .event-card-media img {
    transform: scale(1.05);
}

.event-year-badge {
    position: absolute;
    top: 20px;
    left: 20px;
    background: linear-gradient(135deg, #f8f8fa 0%, #f9fbfd 100%);
    color: #fff;
    padding: 8px 15px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 16px;
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    z-index: 2;
}

.media-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s;
    z-index: 3;
}

.event-card-media:hover .media-overlay {
    opacity: 1;
}

.btn-view-gallery {
    background: #fff;
    color: #333;
    border: none;
    padding: 12px 25px;
    border-radius: 50px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 8px;
}

.btn-view-gallery:hover {
    background: linear-gradient(135deg, #db953a 0%, #e0761f 100%);
    color: #fff;
    transform: scale(1.05);
}

.event-card-content {
    padding: 25px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.event-card-content h3 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #333;
    line-height: 1.4;
}

.event-card-content .event-meta {
    margin-bottom: 15px;
}

.event-card-content .event-meta span {
    margin-right: 0;
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
}

.event-card-content .event-description {
    font-size: 14px;
    margin-bottom: 20px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Gallery Preview */
.event-gallery-preview {
    margin-top: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-top: 1px solid #f0f0f0;
    padding-top: 20px;
}

.preview-images {
    display: flex;
    align-items: center;
    gap: 8px;
}

.preview-images img {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    object-fit: cover;
    cursor: pointer;
    transition: transform 0.3s;
    border: 2px solid transparent;
}

.preview-images img:hover {
    transform: scale(1.1);
    border-color: #667eea;
}

.more-images {
    width: 40px;
    height: 40px;
    background: #f0f0f0;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 600;
    color: #666;
}

.btn-view-all {
    background: transparent;
    border: 1px solid #302f2d;
    color: #070707;
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
}

.btn-view-all:hover {
    border: 1px solid #fcb64e;
    color: #fcb64e;
}

/* Cultural Emblem Card */
.emblem-card {
    background: #fff;
    border-radius: 20px;
    padding: 50px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
    border: 1px solid #f0f0f0;
}

.emblem-badge {
    display: inline-block;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
    padding: 6px 15px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 15px;
    letter-spacing: 0.5px;
}

.emblem-content h3 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333;
}

.emblem-content p {
    color: #666;
    line-height: 1.8;
    margin-bottom: 15px;
}

.emblem-image img {
    border-radius: 15px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    width: 100%;
}

/* Lightbox Modal */
.lightbox-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    padding-top: 50px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.95);
}

.lightbox-content {
    margin: auto;
    display: block;
    max-width: 80%;
    max-height: 80%;
    border-radius: 10px;
}

#lightbox-caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
}

.close-lightbox {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    cursor: pointer;
}

.close-lightbox:hover {
    color: #667eea;
}

.lightbox-prev,
.lightbox-next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    background-color: rgba(0, 0, 0, 0.5);
}

.lightbox-next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

.lightbox-prev:hover,
.lightbox-next:hover {
    background-color: #667eea;
}

/* Gallery Modal */
.gallery-modal {
    display: none;
    position: fixed;
    z-index: 9998;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.9);
    overflow: auto;
}

.gallery-modal-content {
    background: #fff;
    margin: 50px auto;
    padding: 30px;
    width: 90%;
    max-width: 1200px;
    border-radius: 20px;
    position: relative;
}

.close-gallery-modal {
    position: absolute;
    top: 15px;
    right: 25px;
    color: #333;
    font-size: 35px;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s;
}

.close-gallery-modal:hover {
    color: #667eea;
}

#gallery-modal-title {
    margin-bottom: 30px;
    color: #333;
    font-size: 24px;
    padding-right: 40px;
}

.gallery-modal-images {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 15px;
}

.gallery-modal-images img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    cursor: pointer;
    transition: transform 0.3s;
}

.gallery-modal-images img:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

/* Notify Modal */
.notify-modal {
    display: none;
    position: fixed;
    z-index: 9997;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    overflow: auto;
}

.notify-modal-content {
    background: #fff;
    margin: 100px auto;
    padding: 40px;
    width: 90%;
    max-width: 500px;
    border-radius: 20px;
    position: relative;
    text-align: center;
}

.close-notify-modal {
    position: absolute;
    top: 15px;
    right: 25px;
    color: #999;
    font-size: 30px;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s;
}

.close-notify-modal:hover {
    color: #b3932b;
}

.notify-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #080808 0%, #7c726b 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    color: #fff;
    font-size: 32px;
}

.notify-modal-content h3 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #333;
}

.notify-modal-content p {
    color: #666;
    margin-bottom: 25px;
    line-height: 1.6;
}

#notify-form input {
    width: 100%;
    padding: 15px;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    margin-bottom: 15px;
    font-size: 16px;
    transition: border-color 0.3s;
}

#notify-form input:focus {
    outline: none;
    border-color: #667eea;
}

#notify-form button {
    width: 100%;
    padding: 15px;
    background: linear-gradient(135deg, #080808 0%, #7c726b 100%);
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.3s;
}

#notify-form button:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
}

/* Pagination */
.pagination-area {
    text-align: center;
    margin-top: 50px;
}

.pagination {
    display: inline-flex;
    list-style: none;
    padding: 0;
    margin: 0;
    gap: 8px;
    flex-wrap: wrap;
    justify-content: center;
}

.page-item {
    display: inline-block;
}

.page-link {
    display: block;
    padding: 10px 18px;
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    color: #666;
    font-weight: 500;
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
    border-color: #e0e0e0;
}

.pagination-info {
    margin-top: 15px;
    color: #999;
    font-size: 14px;
}

/* Responsive */
@media only screen and (max-width: 768px) {
    .section-title h2 {
        font-size: 28px;
    }
    
    .featured-event-content {
        padding: 30px 20px;
    }
    
    .featured-event-content h2 {
        font-size: 24px;
    }
    
    .countdown-timer {
        flex-wrap: wrap;
    }
    
    .countdown-box {
        min-width: calc(50% - 10px);
    }
    
    .event-actions {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .emblem-card {
        padding: 30px 20px;
    }
    
    .emblem-content h3 {
        font-size: 24px;
    }
}
</style>

<script>
// Variables for lightbox
var currentImageIndex = 0;
var currentImages = [];
var currentGalleryId = '';

// Countdown Timer
function updateCountdown() {
    // Set a future date for demo (you can adjust this)
    const targetDate = new Date('2026-06-01T00:00:00').getTime();
    const now = new Date().getTime();
    const distance = targetDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.querySelector('.countdown-box .days').textContent = String(days).padStart(2, '0');
    document.querySelector('.countdown-box .hours').textContent = String(hours).padStart(2, '0');
    document.querySelector('.countdown-box .minutes').textContent = String(minutes).padStart(2, '0');
    document.querySelector('.countdown-box .seconds').textContent = String(seconds).padStart(2, '0');
}

// Update countdown every second
setInterval(updateCountdown, 1000);

// Open lightbox
function openLightbox(img) {
    var lightbox = document.getElementById('lightbox-modal');
    var lightboxImg = document.getElementById('lightbox-image');
    lightbox.style.display = 'block';
    lightboxImg.src = img.src;
    
    // Find all images in the context
    var allImages = document.querySelectorAll('.preview-images img, .gallery-modal-images img');
    currentImages = Array.from(allImages).map(item => item.src);
    currentImageIndex = currentImages.indexOf(img.src);
    
    document.getElementById('lightbox-caption').innerHTML = 'Image ' + (currentImageIndex + 1) + ' sur ' + currentImages.length;
}

// Close lightbox
function closeLightbox() {
    document.getElementById('lightbox-modal').style.display = 'none';
}

// Change image in lightbox
function changeImage(direction) {
    currentImageIndex += direction;
    if (currentImageIndex < 0) {
        currentImageIndex = currentImages.length - 1;
    } else if (currentImageIndex >= currentImages.length) {
        currentImageIndex = 0;
    }
    
    var lightboxImg = document.getElementById('lightbox-image');
    lightboxImg.src = currentImages[currentImageIndex];
    document.getElementById('lightbox-caption').innerHTML = 'Image ' + (currentImageIndex + 1) + ' sur ' + currentImages.length;
}

// Open event gallery
function openEventGallery(year) {
    var modal = document.getElementById('gallery-modal');
    var title = document.getElementById('gallery-modal-title');
    var container = document.getElementById('gallery-modal-images');
    
    title.innerHTML = 'Galerie - Édition ' + year;
    container.innerHTML = '';
    
    // Find images for this year (in production, you would load dynamically)
    // For demo, we'll use placeholder images
    for (var i = 1; i <= 6; i++) {
        var img = document.createElement('img');
        img.src = 'assets/img/archives/' + year + '-' + i + '.jpg';
        img.alt = 'Image ' + i;
        img.onerror = function() { this.style.display = 'none'; };
        img.onclick = function() { openLightboxFromModal(this); };
        container.appendChild(img);
    }
    
    modal.style.display = 'block';
}

// Open lightbox from gallery modal
function openLightboxFromModal(img) {
    closeGalleryModal();
    setTimeout(function() {
        openLightbox(img);
    }, 300);
}

// Close gallery modal
function closeGalleryModal() {
    document.getElementById('gallery-modal').style.display = 'none';
}

// Open notify modal
function openNotifyModal() {
    document.getElementById('notify-modal').style.display = 'block';
}

// Close notify modal
function closeNotifyModal() {
    document.getElementById('notify-modal').style.display = 'none';
}

// Close modals when clicking outside
window.onclick = function(event) {
    var lightbox = document.getElementById('lightbox-modal');
    var galleryModal = document.getElementById('gallery-modal');
    var notifyModal = document.getElementById('notify-modal');
    
    if (event.target == lightbox) {
        lightbox.style.display = 'none';
    }
    if (event.target == galleryModal) {
        galleryModal.style.display = 'none';
    }
    if (event.target == notifyModal) {
        notifyModal.style.display = 'none';
    }
}

// Keyboard navigation
document.onkeydown = function(e) {
    var lightbox = document.getElementById('lightbox-modal');
    var galleryModal = document.getElementById('gallery-modal');
    var notifyModal = document.getElementById('notify-modal');
    
    if (lightbox.style.display === 'block') {
        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowLeft') {
            changeImage(-1);
        } else if (e.key === 'ArrowRight') {
            changeImage(1);
        }
    } else if (galleryModal.style.display === 'block') {
        if (e.key === 'Escape') {
            closeGalleryModal();
        }
    } else if (notifyModal.style.display === 'block') {
        if (e.key === 'Escape') {
            closeNotifyModal();
        }
    }
};

// Handle notify form submit
document.getElementById('notify-form')?.addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Merci ! Vous serez notifié dès que la nouvelle date sera annoncée.');
    closeNotifyModal();
});

// ========== PAGINATION ==========
(function() {
    const itemsPerPage = 4; // Nombre de cartes par page
    const gridContainer = document.getElementById('events-grid-container');
    if (!gridContainer) return; // Sécurité
    
    const cards = Array.from(gridContainer.children); // Toutes les cartes
    const totalItems = cards.length;
    const totalPages = Math.ceil(totalItems / itemsPerPage);

    const paginationEl = document.getElementById('pagination');
    const infoEl = document.getElementById('pagination-info');

    if (!paginationEl || !infoEl) return;

    let currentPage = 1;

    // Fonction pour afficher les cartes de la page courante
    function showPage(page) {
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        cards.forEach((card, index) => {
            if (index >= start && index < end) {
                card.style.display = 'flex'; // ou 'block' selon le display original
            } else {
                card.style.display = 'none';
            }
        });

        // Mettre à jour l'info texte
        const startItem = start + 1;
        const endItem = Math.min(end, totalItems);
        infoEl.textContent = `Affichage de ${startItem} à ${endItem} sur ${totalItems} événements`;

        // Mettre à jour les classes actives dans la pagination
        updatePaginationButtons(page);
    }

    // Fonction pour créer les boutons de pagination
    function setupPagination() {
        if (totalPages <= 1) {
            paginationEl.innerHTML = ''; // Pas de pagination si une seule page
            infoEl.textContent = `Affichage de 1 à ${totalItems} sur ${totalItems} événements`;
            return;
        }

        let html = '';

        // Bouton Précédent
        html += `<li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" data-page="prev">Précédent</a>
        </li>`;

        // Numéros de page
        for (let i = 1; i <= totalPages; i++) {
            html += `<li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#" data-page="${i}">${i}</a>
            </li>`;
        }

        // Bouton Suivant
        html += `<li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
            <a class="page-link" href="#" data-page="next">Suivant</a>
        </li>`;

        paginationEl.innerHTML = html;
    }

    // Mettre à jour l'état des boutons sans recréer toute la pagination
    function updatePaginationButtons(page) {
        const items = paginationEl.querySelectorAll('.page-item');
        items.forEach((item, index) => {
            const link = item.querySelector('.page-link');
            if (!link) return;
            const dataPage = link.dataset.page;

            // Gestion du bouton Précédent
            if (dataPage === 'prev') {
                if (page === 1) item.classList.add('disabled');
                else item.classList.remove('disabled');
            }
            // Gestion du bouton Suivant
            else if (dataPage === 'next') {
                if (page === totalPages) item.classList.add('disabled');
                else item.classList.remove('disabled');
            }
            // Gestion des numéros de page
            else {
                if (parseInt(dataPage) === page) item.classList.add('active');
                else item.classList.remove('active');
            }
        });
    }

    // Initialisation
    function initPagination() {
        if (totalItems === 0) return;
        setupPagination(); // Crée les boutons
        showPage(1); // Affiche la première page

        // Délégation d'événement sur le conteneur de pagination
        paginationEl.addEventListener('click', function(e) {
            e.preventDefault();
            const target = e.target.closest('.page-link');
            if (!target) return;
            const page = target.dataset.page;
            if (!page) return;

            let newPage = currentPage;

            if (page === 'prev') {
                newPage = currentPage - 1;
            } else if (page === 'next') {
                newPage = currentPage + 1;
            } else {
                newPage = parseInt(page);
            }

            if (newPage < 1 || newPage > totalPages || newPage === currentPage) return;

            currentPage = newPage;
            showPage(currentPage);
        });
    }

    initPagination();
})();
</script>