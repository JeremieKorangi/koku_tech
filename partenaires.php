<?php include("inc/head.php") ?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-6" style="background-image: url(assets/img/bg-6.jpg);">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Nos Partenaires</h2>
                            <ul>
                                <li><a href="index.html">Accueil</a></li>
                                <li>Partenaires</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Partners Intro Area -->
        <section class="partners-intro-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Ils nous accompagnent</h2>
                    <p>La FICKIN est fière de collaborer avec des institutions de renom qui partagent notre vision et soutiennent notre mission de développement économique.</p>
                </div>
            </div>
        </section>
        <!-- End Partners Intro Area -->

        <!-- Start Partners Grid Area -->
        <section class="partners-grid-area pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Partner 1: Ministère du Commerce Extérieur -->
                    <div class="col-lg-4 col-md-6">
                        <div class="partner-card">
                            <div class="partner-logo">
                                <img src="assets/img/sponsorship/ministere_logo.png" alt="Ministère du Commerce Extérieur">
                            </div>
                            <div class="partner-content">
                                <h3>Ministère du Commerce Extérieur</h3>
                                <p class="partner-type">Partenariat Institutionnel</p>
                                <p class="partner-description">Le Ministère du Commerce Extérieur de la République Démocratique du Congo accompagne la FICKIN dans sa mission de promotion des échanges commerciaux et de rayonnement international.</p>
                                <a href="https://www.commerce.gouv.cd" target="_blank" class="partner-link">
                                    Visiter le site <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Partner 2: Union des Foires Internationales (UFI) -->
                    <div class="col-lg-4 col-md-6">
                        <div class="partner-card">
                            <div class="partner-logo">
                                <img src="assets/img/sponsorship/ufi-logo2.png" alt="Union des Foires Internationales">
                            </div>
                            <div class="partner-content">
                                <h3>Union des Foires Internationales</h3>
                                <p class="partner-type">Membre UFI depuis 1973</p>
                                <p class="partner-description">L'UFI est l'association mondiale des professionnels des salons et foires. La FICKIN est fière d'en être membre et de respecter les standards internationaux les plus exigeants.</p>
                                <a href="https://www.ufi.org" target="_blank" class="partner-link">
                                    Visiter le site <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Partner 3: The Global Association of the Exhibition Industry -->
                    <div class="col-lg-4 col-md-6">
                        <div class="partner-card">
                            <div class="partner-logo">
                                <img src="assets/img/sponsorship/ufi_logo.png" alt="The Global Association of the Exhibition Industry">
                            </div>
                            <div class="partner-content">
                                <h3>The Global Association <br>of the Exhibition Industry</h3>
                                <p class="partner-type">Partenariat Stratégique</p>
                                <p class="partner-description">L'association mondiale de l'industrie des salons professionnels accompagne la FICKIN dans son développement et l'organisation d'événements aux normes internationales.</p>
                                <a href="https://www.ufi.org" target="_blank" class="partner-link">
                                    Visiter le site <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Partners Grid Area -->

        <!-- Start Partnership Benefits Area -->
        <section class="partnership-benefits-area pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="benefits-content">
                            <h3>Devenir partenaire de la FICKIN</h3>
                            <p>La FICKIN offre à ses partenaires une visibilité exceptionnelle et l'opportunité de contribuer au développement économique de la RDC. Si vous souhaitez rejoindre ces institutions prestigieuses, contactez-nous.</p>
                            <a href="contact.php" class="default-btn">
                                Devenir partenaire
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="benefits-quote">
                            <i class="fas fa-quote-left"></i>
                            <p>La force de la FICKIN réside dans la qualité de ses partenariats.</p>
                            <h4>- Direction de la FICKIN</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Partnership Benefits Area -->

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
/* Styles pour la page Partenaires FICKIN */
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

/* Partners Intro */
.partners-intro-area {
    background: #fafafa;
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
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
}

.section-title p {
    color: #666;
    max-width: 700px;
    margin: 0 auto;
    font-size: 16px;
}

/* Partner Cards */
.partner-card {
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

.partner-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

.partner-logo {
    padding: 40px 30px 20px;
    text-align: center;
    background: #f8f9fa;
    border-bottom: 1px solid #eee;
    min-height: 180px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.partner-logo img {
    max-width: 180px;
    max-height: 100px;
    width: auto;
    height: auto;
    transition: transform 0.3s;
}

.partner-card:hover .partner-logo img {
    transform: scale(1.05);
}

.partner-content {
    padding: 25px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.partner-content h3 {
    font-size: 20px;
    margin-bottom: 8px;
    color: #333;
    line-height: 1.4;
}

.partner-type {
    color: #f5576c;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.partner-description {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
}

.partner-link {
    color: #333;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s;
    margin-top: auto;
}

.partner-link i {
    font-size: 14px;
    transition: transform 0.3s;
}

.partner-link:hover {
    color: #f5576c;
}

.partner-link:hover i {
    transform: translateX(5px);
}

/* Benefits Section */
.partnership-benefits-area {
    background: #fafafa;
}

.benefits-content h3 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333;
}

.benefits-content p {
    color: #666;
    line-height: 1.8;
    margin-bottom: 30px;
    font-size: 16px;
}

.default-btn {
    display: inline-block;
    padding: 15px 35px;
    background: linear-gradient(135deg, #db953a 0%, #e0761f 100%);
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s;
    border: none;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(214, 129, 59, 0.3);
}

.default-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(12, 12, 12, 0.4);
}

.benefits-quote {
    background: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    border-left: 4px solid #696968;
}

.benefits-quote i {
    color: #f5576c;
    font-size: 24px;
    margin-bottom: 15px;
    opacity: 0.5;
}

.benefits-quote p {
    font-size: 18px;
    font-style: italic;
    color: #333;
    margin-bottom: 15px;
    line-height: 1.6;
}

.benefits-quote h4 {
    color: #666;
    font-size: 16px;
    font-weight: 400;
}

/* Responsive */
@media only screen and (max-width: 768px) {
    .section-title h2 {
        font-size: 28px;
    }
    
    .benefits-content {
        margin-bottom: 30px;
        text-align: center;
    }
    
    .benefits-content .default-btn {
        display: inline-block;
    }
    
    .partner-logo {
        min-height: 150px;
    }
    
    .partner-logo img {
        max-width: 140px;
    }
}

@media only screen and (max-width: 576px) {
    .partner-card {
        margin-left: 15px;
        margin-right: 15px;
    }
}
</style>