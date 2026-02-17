<?php include("inc/head.php") ?>

<style>
/* Styles additionnels pour la nouvelle section */
.contact-info-box {
    background: #fff;
    padding: 40px 25px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
    transition: all 0.3s ease;
    margin-bottom: 30px;
}

.contact-info-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}

.contact-info-box .icon {
    width: 80px;
    height: 80px;
    line-height: 80px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    margin: 0 auto 25px;
    color: #fff;
    font-size: 32px;
}

.contact-info-box h3 {
    font-size: 22px;
    margin-bottom: 15px;
    color: #333;
}

.contact-info-box p {
    color: #666;
    margin-bottom: 10px;
    line-height: 1.6;
}

.contact-info-box a {
    color: #667eea;
    text-decoration: none;
    transition: color 0.3s;
}

.contact-info-box a:hover {
    color: #764ba2;
}

.info-link {
    display: inline-block;
    margin-top: 15px;
    font-weight: 500;
}

.info-note {
    font-size: 14px;
    color: #999;
    margin-top: 10px;
}

.business-hours-content {
    padding-right: 30px;
}

.business-hours-content h3 {
    font-size: 32px;
    margin-bottom: 15px;
    color: #333;
}

.business-hours-content p {
    color: #666;
    margin-bottom: 30px;
}

.hours-list {
    list-style: none;
    padding: 0;
    margin-bottom: 30px;
}

.hours-list li {
    display: flex;
    justify-content: space-between;
    padding: 15px 0;
    border-bottom: 1px solid #eee;
    color: #666;
}

.hours-list li:first-child {
    padding-top: 0;
}

.hours-list .right {
    font-weight: 600;
    color: #333;
}

.hours-list .special-note {
    color: #667eea;
    font-weight: 500;
}

.emergency-contact {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 30px;
    border-radius: 10px;
    color: #fff;
}

.emergency-contact h4 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #fff;
}

.emergency-contact p {
    margin-bottom: 0;
    color: #fff;
}

.emergency-contact a {
    color: #fff;
    text-decoration: underline;
}

.business-hours-image {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.rounded-image {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s;
}

.business-hours-image:hover .rounded-image {
    transform: scale(1.05);
}

.experience-badge {
    position: absolute;
    bottom: 30px;
    left: 30px;
    background: rgba(255, 255, 255, 0.95);
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
}

.experience-badge span {
    font-size: 36px;
    font-weight: 700;
    color: #667eea;
    display: block;
    line-height: 1;
}

.experience-badge p {
    margin: 5px 0 0;
    color: #333;
    font-weight: 500;
}

.map-container {
    width: 100%;
    height: 450px;
}

.map-container iframe {
    width: 100%;
    height: 100%;
}

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

@media only screen and (max-width: 768px) {
    .business-hours-content {
        padding-right: 0;
        margin-bottom: 30px;
    }
    
    .section-title h2 {
        font-size: 28px;
    }
    
    .contact-info-box {
        padding: 30px 20px;
    }
}
</style>
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-6" style="background-image: url(assets/img/bg-6.jpg);">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Coordonnées</h2>
                            <ul>
                                <li><a href="index.html">Accueil</a></li>
                                <li>Coordonnées</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact Info Area -->
        <section class="contact-info-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Nos Coordonnées</h2>
                    <p>Nous sommes à votre écoute pour répondre à toutes vos questions. N'hésitez pas à nous contacter par l'un des moyens ci-dessous.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h3>Adresse</h3>
                            <p>Avenue de la foire, Commune de Limete | KINSHASA RD CONGO
</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <h3>Téléphone</h3>
                            <p><a href="tel:+243 999 900 748">+243 999 900 748</a></p>
                            <p class="info-note">Lun-Ven : 9h00 - 18h00</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h3>Email</h3>
                            <p><a href="mailto:fikinrdc1969@gmail.com">fikinrdc1969@gmail.com</a></p>
                            <p class="info-note">Réponse sous 24h</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Info Area -->

        <!-- Start Business Hours Area -->
        <section class="business-hours-area pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="business-hours-content">
                            <h3>Horaires d'ouverture</h3>
                            <p>Notre équipe est disponible pour vous accueillir et vous conseiller aux horaires suivants :</p>
                            
                            <ul class="hours-list">
                                <li>
                                    <span>Lundi - Vendredi:</span>
                                    <span class="right">9h00 - 18h00</span>
                                </li>
                                <li>
                                    <span>Samedi:</span>
                                    <span class="right">10h00 - 16h00</span>
                                </li>
                                <li>
                                    <span>Dimanche:</span>
                                    <span class="right">Fermé</span>
                                </li>
                                <li class="special-note">
                                    <span>Jours fériés:</span>
                                    <span class="right">Fermé</span>
                                </li>
                            </ul>
                            
                            <div class="emergency-contact">
                                <h4>Urgence ?</h4>
                                <p>En cas d'urgence, contactez-nous au : <strong><a href="tel:+243 999 900 748">+243 999 900 748</a></strong></p>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <!-- End Business Hours Area -->

        <!-- Start Map Area -->
        <section class="map-area pb-100">
            <div class="container-fluid p-0">
                <div class="map-container">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3998.928385463214!2d15.335419410555836!3d-4.371980995583756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a3717c1960369%3A0x5dbcbc8a89209563!2sFoire%20internationale%20de%20Kinshasa!5e1!3m2!1sfr!2sit!4v1771343365778!5m2!1sfr!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <!-- End Map Area -->

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

