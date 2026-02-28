<?php include("inc/head.php") ?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-6" style="background-image: url(assets/img/bg-6.jpg);">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Notre Histoire</h2>
                            <ul>
                                <li><a href="index.html">Accueil</a></li>
                                <li>Historique de la FICKIN</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start About Story Area -->
        <section class="about-story-area pt-100 pb-70" style="padding-bottom:150px;">
            <div class="container">
                <div class="section-title">
                    <h2>Foire Internationale du Congo-Kinshasa «FICKIN» ex FIKIN</h2>
                    <p>Découvrez le parcours exceptionnel de la FICKIN, vitrine de l'économie congolaise et carrefour des échanges internationaux depuis 1969.</p>
                </div>

                <div class="row align-items-center">
        
                    <div class="col-lg-14">
                        <div class="story-content">
                            
                            <p>Ouverte officiellement, le dimanche 29 juin 1969 par le feu président de la République Démocratique du Congo (Zaïre à l'époque), Joseph Désiré Mobutu, la Foire Internationale du Congo Kinshasa, la FICKIN est une manifestation internationale à caractère commercial, industriel, agricole et artisanal, située dans la commune de Limete à Kinshasa.</p>

                            <p>La première édition internationale s'est tenue du 30 juin au 14 juillet 1969. Plusieurs autres manifestations internationales y ont eu lieu. La FICKIN est membre de l'Union des foires internationales (UFI) depuis 1973.</p>

                            <p>Depuis son Inauguration jusqu'à ce jour, la FICKIN a comme référence le « Batteur de tam tam », réalisé par le célèbre sculpteur congolais André Lufwa Mawidi.</p>

                            <p>En 1991, et ensuite en 1993, la FICKIN, dans son édition nationale, est victime des pillages dans la ville de Kinshasa, mais aussi des spoliations de son patrimoine. Depuis ces pillages, elle tourne au ralenti.</p>

                            <p>Appelée depuis sa création Foire Internationale de Kinshasa,FIKIN, elle devient la Foire Internationale du Congo Kinshasa, FICKIN, le 22 novembre 2024.</p>

                            <p>En effet, le gouvernement congolais avait officialisé, lors de sa 23e réunion du Conseil des ministres tenue le vendredi 22 novembre 2024, un projet de décret transformant la Foire Internationale de Kinshasa (FIKIN). Ce texte vise à élargir le champ d'action de cet établissement public au-delà de la capitale.</p>

                            <p>Cette nouvelle appellation, Foire Internationale du Congo Kinshasa (FICKIN), répond à deux enjeux majeurs : élargir le champ d'action de Kinshasa et préserver la résonance culturelle présente dans notre jargon ».</p>

                            <p>Cette initiative s'inscrit dans le cadre d'un projet de relance et de modernisation de la FIKIN. Lors du 15e réunion du Conseil des ministres, le Ministre du Commerce Extérieur, Julien Paluku Kahongya, avait fait état des défis administratifs, financiers, sociaux et infrastructurels auxquels l'établissement fait face.</p>

                            <p>Sa mission est de reconstruire et moderniser la FICKIN en 36 mois, grâce à des partenariats publics-privés, avec l'objectif de réguler toutes les activités foraines à travers la République.</p>

                        </div>
                    </div>
                                
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
        </section>
        <!-- End About Story Area -->
   
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

/* Styles pour la page historique FICKIN */
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

/* Story Section */
.about-story-area {
    background: #fafafa;
}

.story-content {
    padding-right: 30px;
}

.story-content h3 {
    font-size: 32px;
    margin-bottom: 20px;
    color: #333;
}

.story-content p {
    color: #666;
    line-height: 1.8;
    margin-bottom: 20px;
}

.story-signature {
    margin-top: 30px;
}

.story-signature img {
    max-width: 150px;
    margin-bottom: 15px;
}

.story-signature h4 {
    font-size: 18px;
    color: #333;
    margin-bottom: 5px;
}

.story-signature span {
    color: #667eea;
    font-size: 14px;
}

.story-image {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.rounded-image {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s;
}

.story-image:hover .rounded-image {
    transform: scale(1.05);
}

.year-badge {
    position: absolute;
    bottom: 30px;
    right: 30px;
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: #fff;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(245, 87, 108, 0.3);
}

.year-badge span {
    font-size: 48px;
    font-weight: 700;
    display: block;
    line-height: 1;
}

.year-badge p {
    margin: 5px 0 0;
    font-size: 14px;
    opacity: 0.9;
}

/* Timeline */
.timeline-area {
    background: #fff;
}

.timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 0;
}

.timeline-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 30px;
}

.timeline-item {
    width: 48%;
    position: relative;
}

.timeline-content {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 10px;
    position: relative;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s;
}

.timeline-content:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.timeline-content.left {
    margin-right: 15px;
}

.timeline-content.right {
    margin-left: 15px;
}

.timeline-year {
    display: inline-block;
    background: linear-gradient(135deg, #080808 0%, #7c726b 100%);
    color: #fff;
    padding: 8px 20px;
    border-radius: 30px;
    font-weight: 600;
    margin-bottom: 15px;
}

.timeline-content h3 {
    font-size: 22px;
    margin-bottom: 10px;
    color: #333;
}

.timeline-content p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 0;
}

.timeline-icon {
    position: absolute;
    top: 30px;
    right: 30px;
    width: 40px;
    height: 40px;
    background: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #f5576c;
    font-size: 18px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
}

@media only screen and (max-width: 768px) {
    .timeline-row {
        flex-direction: column;
    }
    
    .timeline-item {
        width: 100%;
        margin-bottom: 20px;
    }
    
    .timeline-content.left,
    .timeline-content.right {
        margin: 0;
    }
}

/* Project Section */
.project-content h3 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333;
}

.project-content p {
    color: #666;
    line-height: 1.8;
    margin-bottom: 25px;
}

.project-list {
    margin: 30px 0;
}

.project-item {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
    align-items: flex-start;
}

.project-item i {
    color: #f5576c;
    font-size: 24px;
    flex-shrink: 0;
}

.project-item h4 {
    font-size: 18px;
    margin-bottom: 5px;
    color: #333;
}

.project-item p {
    margin-bottom: 0;
    color: #666;
}

.project-budget {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 10px;
    margin-top: 30px;
    border-left: 4px solid #f5576c;
}

.project-budget p {
    margin-bottom: 10px;
    color: #333;
}

.project-budget p:last-child {
    margin-bottom: 0;
}

.project-image {
    position: relative;
}

.image-caption {
    margin-top: 15px;
    font-size: 14px;
    color: #999;
    font-style: italic;
}

/* Festivals Section 
.festivals-area {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
}

.festivals-content {
    padding-left: 30px;
}

.festivals-content h3 {
    font-size: 32px;
    margin-bottom: 20px;
    color: #fff;
}

.festivals-content p {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.8;
    margin-bottom: 20px;
}

.festivals-quote {
    background: rgba(255, 255, 255, 0.1);
    padding: 25px;
    border-radius: 10px;
    margin-top: 30px;
}

.festivals-quote i {
    font-size: 24px;
    margin-bottom: 10px;
    opacity: 0.7;
}

.festivals-quote p {
    font-size: 18px;
    font-style: italic;
    margin-bottom: 15px;
}

.festivals-quote h4 {
    font-size: 16px;
    color: #fff;
    opacity: 0.9;
}

.festivals-image img {
    border-radius: 10px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
}

@media only screen and (max-width: 768px) {
    .festivals-content {
        padding-left: 0;
        margin-top: 30px;
    }
}

/* Milestones 
.milestones-box {
    text-align: center;
    padding: 30px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s;
    margin-bottom: 30px;
}

.milestones-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.milestones-box .icon {
    width: 70px;
    height: 70px;
    line-height: 70px;
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    border-radius: 50%;
    margin: 0 auto 20px;
    color: #fff;
    font-size: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.milestones-box h3 {
    font-size: 36px;
    font-weight: 700;
    color: #333;
    margin-bottom: 5px;
}

.milestones-box p {
    color: #666;
    margin-bottom: 0;
    font-size: 16px;
}

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
</style>