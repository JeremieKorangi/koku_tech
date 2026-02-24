<?php include("inc/head.php") ?>

<?php
// Exemple de variables à définir avant d'inclure cette page
// $eventTitle = "Première édition internationale";
// $eventDate = "30 juin - 14 juillet 1969";
// $eventLocation = "Kinshasa, RDC";
// $eventDescription = "La toute première édition internationale de la Foire Internationale de Kinshasa...";
// $eventImages = ["1969-1.jpg", "1969-2.jpg", ...]; // tableau des noms de fichiers
// $eventYear = "1969";
// $backLink = "evenements.php"; // lien de retour
?>

<!-- Start Page Title Area -->
<!--<div class="page-title-area item-bg-6" style="background-image: url(assets/img/archives/img13.jpg);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2><?php echo $eventTitle ?? 'Détails de l\'événement'; ?></h2>
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="<?php echo $backLink ?? 'evenements.php'; ?>">Événements</a></li>
                        <li><?php echo $eventTitle ?? 'Événement'; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- End Page Title Area -->

<!-- Start Event Detail Area -->
<section class="event-detail-area pb-100" style="padding-top: 200px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="event-detail-main">
                    <!-- Image principale -->
                    <div class="event-detail-image mb-4">
                        <img src="assets/img/archives/<?php echo $eventMainImage ?? 'default-event.jpg'; ?>" alt="<?php echo $eventTitle; ?>" class="img-fluid rounded">
                    </div>

                    <!-- Informations -->
                    <div class="event-detail-info">
                        <h2><?php echo $eventTitle; ?></h2>
                        <div class="event-meta mb-3">
                            <span class="me-4"><i class="far fa-calendar-alt"></i> <?php echo $eventDate; ?></span>
                            <span><i class="far fa-map-marker-alt"></i> <?php echo $eventLocation ?? 'Kinshasa, RDC'; ?></span>
                        </div>
                        <div class="event-description">
                            <?php echo $eventDescription; ?>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sidebar (optionnelle) -->
            <div class="col-lg-4">
                <div class="event-sidebar">
                    <div class="sidebar-widget">
                        <h4>Informations</h4>
                        <ul class="list-unstyled">
                            <li><strong>Année :</strong> <?php echo $eventYear ?? 'N/A'; ?></li>
                            <li><strong>Type :</strong> <?php echo $eventType ?? 'Événement principal'; ?></li>
                            <li><strong>Organisateur :</strong> FICKIN</li>
                        </ul>
                    </div>
                    <div class="sidebar-widget mt-4">
                        <h4>Partager</h4>
                        <div class="social-share">
                            <a href="#" class="btn btn-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-social"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-social"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="btn btn-social"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="sidebar-widget mt-4">
                        <a href="<?php echo $backLink ?? 'evenements.php'; ?>" class="btn-back">
                            <i class="fas fa-arrow-left"></i> Retour aux événements
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Event Detail Area -->


  <!-- Start Top Event Area -->
        <section class="event-section pt-100"   style="padding-bottom: 200px; padding-top: 50px;">
            <div class="section-title">
                <p> Casual texte tiendrons informés dès qu’une nouvelle date sera confirmée</p>
            </div>

            <div class="container-fluid p-0">
                <div class="event-slider owl-carousel owl-theme">

                   <div class="event-item">
                        <img src="assets/img/archives/img13.jpg" alt="image">

                    </div>


                    <div class="event-item">
                        <img src="assets/img/archives/img16.jpg" alt="image">

                    </div>

                    <div class="event-item">
                        <img src="assets/img/archives/img17.jpg" alt="image">

                    </div>

                    <div class="event-item">
                        <img src="assets/img/archives/img8.jpg" alt="image">       

                    </div>
                     <div class="event-item">
                        <img src="assets/img/archives/img16.jpg" alt="image">

                    </div>

                    <div class="event-item">
                        <img src="assets/img/archives/img17.jpg" alt="image">

                    </div>

                    <div class="event-item">
                        <img src="assets/img/archives/img8.jpg" alt="image">       

                    </div>

                </div>
            </div>
        </section>
        <!-- End Top Event Area -->


<!-- Lightbox Modal (réutilisé) -->
<div id="lightbox-modal" class="lightbox-modal">
    <span class="close-lightbox" onclick="closeLightbox()">&times;</span>
    <img class="lightbox-content" id="lightbox-image">
    <div id="lightbox-caption"></div>
    <a class="lightbox-prev" onclick="changeImage(-1)">&#10094;</a>
    <a class="lightbox-next" onclick="changeImage(1)">&#10095;</a>
</div>

<?php include("inc/footer.php") ?>

<style>
/* Styles supplémentaires pour la page de détail */
.event-detail-main {
    background: #fff;
    padding: 30px;
   
}

.event-detail-image img {
    width: 100%;
    max-height: 500px;
    object-fit: cover;
    border-radius: 10px;
}

.event-detail-info h2 {
    font-size: 32px;
    margin-bottom: 15px;
    color: #333;
}

.event-meta span {
    color: #666;
    font-size: 16px;
    margin-right: 20px;
}

.event-meta i {
    color: #667eea;
    margin-right: 5px;
}

.event-description {
    color: #666;
    line-height: 1.8;
    font-size: 16px;
}

.event-gallery h3 {
    font-size: 24px;
    color: #333;
    border-bottom: 2px solid #f0f0f0;
    padding-bottom: 10px;
}


.event-sidebar {
    background: #fff;
    padding: 30px;

}

.sidebar-widget h4 {
    font-size: 18px;
    margin-bottom: 15px;
    color: #333;
    border-left: 4px solid #667eea;
    padding-left: 10px;
}

.sidebar-widget ul li {
    margin-bottom: 10px;
    color: #666;
}

.btn-social {
    display: inline-block;
    width: 40px;
    height: 40px;
    background: #f0f0f0;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    color: #333;
    margin-right: 8px;
    transition: all 0.3s;
}

.btn-social:hover {
     background: linear-gradient(135deg, #080808 0%, #7c726b 100%);
    color: #fff;
}

.btn-back {
    display: inline-block;
     background: linear-gradient(135deg, #080808 0%, #7c726b 100%);
    color: #fff;
    padding: 12px 25px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: transform 0.3s;
}

.btn-back:hover {
    transform: translateX(-5px);
    color: #fff;
}

/* Lightbox (copié depuis la page événements) */
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

@media (max-width: 768px) {
    .event-detail-info h2 {
        font-size: 26px;
    }
    .event-meta span {
        display: block;
        margin-bottom: 8px;
    }
    .gallery-grid {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    }
}
</style>

<script>
// Lightbox functions (réutilisées)
var currentImageIndex = 0;
var currentImages = [];

function openLightbox(img) {
    var lightbox = document.getElementById('lightbox-modal');
    var lightboxImg = document.getElementById('lightbox-image');
    lightbox.style.display = 'block';
    lightboxImg.src = img.src;
    
    var allImages = document.querySelectorAll('.gallery-item img');
    currentImages = Array.from(allImages).map(item => item.src);
    currentImageIndex = currentImages.indexOf(img.src);
    
    document.getElementById('lightbox-caption').innerHTML = 'Image ' + (currentImageIndex + 1) + ' sur ' + currentImages.length;
}

function closeLightbox() {
    document.getElementById('lightbox-modal').style.display = 'none';
}

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

window.onclick = function(event) {
    var lightbox = document.getElementById('lightbox-modal');
    if (event.target == lightbox) {
        lightbox.style.display = 'none';
    }
}

document.onkeydown = function(e) {
    var lightbox = document.getElementById('lightbox-modal');
    if (lightbox.style.display === 'block') {
        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowLeft') {
            changeImage(-1);
        } else if (e.key === 'ArrowRight') {
            changeImage(1);
        }
    }
};
</script>