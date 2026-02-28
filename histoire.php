









<?php include("inc/head.php") ?>

<style>
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f4f6f9;
    color: #333;
}

/* Section générale */
.history-section {
    max-width: 1200px;
    margin: 80px auto;
    padding: 0 20px;
}

/* Bloc ligne */
.history-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 60px;
    margin-bottom: 100px;
}

/* Inversion automatique */
.history-row.reverse {
    flex-direction: row-reverse;
}

/* Texte */
.history-text {
    flex: 1;
}

.history-text h2 {
    font-size: 32px;
    margin-bottom: 20px;
    color: #140d01;
}

.history-text p {
    font-size: 17px;
    line-height: 1.7;
    color: #555;
}

/* Image */
.history-image {
    flex: 1;
}

.history-image img {
    width: 100%;
    /*border-radius: 12px;*/
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

/* Responsive */
@media (max-width: 900px) {
    .history-row {
        flex-direction: column;
        text-align: center;
    }

    .history-row.reverse {
        flex-direction: column;
    }

    .history-text h2 {
        font-size: 26px;
    }
}
</style>

 <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-6" style="background-image: url(assets/img/bg-6.jpg);">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Notre Histoire</h2>
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




<!-- Start About Story Area -->
<section class="about-story-area pt-100 pb-70" style="padding-bottom:150px;">
    <div class="container">

        <div class="section-title">
            <h2>Foire Internationale du Congo-Kinshasa «FICKIN» ex FIKIN</h2>
            <p>
                Découvrez le parcours exceptionnel de la FICKIN, vitrine de l'économie congolaise 
                et carrefour des échanges internationaux depuis 1969.
            </p>
        </div>

        <div class="history-section">

            <!-- SECTION 2 -->
            <div class="history-row reverse">
                <div class="history-text">
                    <h2>Transition démocratique (1997–2006)</h2>
                    <p>
                        La Foire internationale de Kinshasa (FIKIN) a ouvert ses portes le jour 
                        de l'indépendance du Congo, le 30 juin 1969. Située dans la commune de 
                        Limete, au rond-point « Échangeur » près du boulevard Lumumba, 
                        l'installation de 18 hectares présentait des exposants de 20 pays et, 
                        pendant ses trois semaines d'ouverture, a accueilli un total de 
                        600 000 visiteurs.
                    </p>
                </div>

                <div class="history-image">
                    <img src="assets/img/history/fikin_69.jpg" 
                         alt="Transition"
                         style="width:300px; height:auto; display:block; margin:auto;">
                </div>
            </div>

            <!-- SECTION 1 -->
            <div class="history-row">
                <div class="history-text">
                    <h2>Ère du Zaïre (1971–1997)</h2>
                    <p>
                        L'événement visait à présenter une image nouvelle et positive du Congo 
                        sous la direction du Président Mobutu. Son organisation symbolisait 
                        également un rapprochement et une collaboration avec l'ancienne 
                        puissance coloniale belge, comme en témoignait la clôture de la Foire 
                        le 21 juillet, jour de la fête nationale belge. 
                    </p>    
                    <p>    
                        L'invitation du Congo au monde entier à participer à la foire était symbolisée à l'entrée 
                        par une statue colossale du « Batteur du Tam-Tam », œuvre du sculpteur André Lufwa Mawidi.
                    </p>
                </div>

                <div class="history-image">
                    <img src="assets/img/history/tam_tam2.png" 
                         alt="Mobutu"
                         style="width:400px; height:450px; display:block; margin:auto;">
                </div>
            </div>

             <!-- SECTION 2 -->
            <div class="history-row reverse">
                <div class="history-text">
                    <h2>Transition démocratique (1997–2006)</h2>
                    <p>
                       L'idée d'organiser une foire commerciale à Kinshasa fut proposée lors des réunions de l'OUA qui se tinrent dans la capitale en septembre 1967, quelques semaines seulement après qu'une seconde rébellion de mercenaires à Kisangani et Bukavu eut de nouveau terni la réputation internationale du Congo.  
                     </p> 
                     <p>
                         Le 7 mai 1968, le Président Mobutu signa un décret portant création de la foire et, le même mois, un consultant arriva sur place pour concevoir le projet et établir un budget.
                         En octobre, le contrat de construction fut attribué à la coentreprise CCC/Safricas et les travaux de préparation du site, qui avait auparavant servi de terrain d'entraînement pour les parachutistes, commencèrent.   <!--Les entrepreneurs employèrent 700 ouvriers, nivelèrent 150 000  m³ de terre, creusèrent 20 kilomètres de canalisations, coulèrent 20 000 m³ de béton, pavant 50 000 m² de rues et de parkings et érigèrent 40 000 m² de halls d'exposition couverts de toitures en cuivre lamellé-collé du Congo.-->
                     </p>
                    <p>
                         Le complexe commercial était complété par une Cité Fikin de 100 unités (construite par ONL, bien qu'elle fût encore en construction le jour de l'ouverture).
                    </p>
                </div>

                <div class="history-image">
                    <img src="assets/img/history/fikin_topo2.png" 
                         alt="Transition"
                         style="width:auto; height:auto; display:block; margin:auto;">
                </div>
          
            </div>


            <!-- SECTION 1 -->
            <div class="history-row">
                <div class="history-text">
                    <h2>Ère du Zaïre (1971–1997)</h2>
                    <p>
                       Le succès inattendu de la Foire internationale de 1969 (FIKIN'69) incita les autorités à la formaliser et à instaurer un programme d'alternance bisannuelle de foires internationales et nationales.   La Foire nationale, qui se tint du 24 juin au 12 juillet 1970, à l' occasion du 10e anniversaire de l'indépendance, avait pour thème « Le Congo au travail ».   Le complexe fut agrandi de deux hectares et un parc d'attractions y fut aménagé.   
                    </p>   

                    <p>
                       Le roi Baudouin et le président Mobutu inaugurèrent conjointement la foire.   Mobutu et son épouse firent un tour à bord du « Mobembo », le petit train du Far West qui faisait le tour du parc. Le parc d'attractions comprenait un carrousel, des autos tamponneuses, un tunnel de l'amour, des montagnes russes et un palais des glaces. Des restaurants accueillant des centaines de clients et des brasseries en plein air avec pistes de danse accueillaient des milliers de personnes.   Un cinéma en plein air de 600 places projetait des films.   Dix buvettes, des toilettes publiques et un marché aux puces complétaient l'offre de divertissements jusque-là inaccessible au public habituel.   La Foire nationale a été un succès !
                    </p>
                </div>

                <div class="history-image">
                    <img src="assets/img/history/fikin_entry1.png" 
                         alt="Mobutu"
                         style="width:auto; height:auto; display:block; margin:auto;">
                </div>
            </div>

             <!-- SECTION 2 -->
            <div class="history-row reverse">
                <div class="history-text">
                    <h2>Transition démocratique (1997–2006)</h2>
                    <p>
                         L'Exposition internationale de 1971 a surpassé les éditions précédentes.   Cinquante pays étaient représentés, avec 2 500 exposants, et en moyenne 48 000 visiteurs par jour s'acquittaient de 30 makutas pour y assister.   La surface d'exposition, tant couverte qu'en plein air, a été agrandie, dont 4 000 m² réservés aux participants congolais.   Le pavillon des États-Unis, d'une superficie de 1 000 m², présentait des expositions organisées par les ministères du Commerce et de l'Agriculture, ainsi que par l'Agence d'information des États-Unis.  
                    </p>    
                    
                    <p>
                         Lorsque le président Mobutu a inauguré la troisième édition internationale le 23 juin 1973, l'Exposition s'étendait sur plus de 86 hectares, quatre nouveaux pavillons avaient été ajoutés et 42 000 m² d'espace d'exposition en plein air étaient disponibles.   
                    </p>     

                  
                </div>

                <div class="history-image">
                    <img src="assets/img/history/fikin_mobutu1.png" 
                         alt="Transition"
                         style="width:auto; height:auto; display:block; margin:auto;">
                </div>
          
            </div>

             <p>     
                 Reflet de l'évolution des politiques économiques et politiques du pays, la République populaire de Chine, l'Argentine et le Brésil étaient présents pour la première fois.   La Chine et les États-Unis disposaient des plus grands pavillons, celui de ces derniers présentant Texaco, Gulf, Mobil, Westinghouse, Goodyear et Constructors Inga-Shaba, qui construisait la ligne de transport d'électricité de 1700 kilomètres reliant le barrage d'Inga à la région productrice de cuivre de Shaba.ngo.  
             </p> 

              <p>En 1991, et ensuite en 1993, la FICKIN, dans son édition nationale, est victime des pillages dans la ville de Kinshasa, mais aussi des spoliations de son patrimoine. Depuis ces pillages, elle tourne au ralenti.</p>

              <p>Appelée depuis sa création Foire Internationale de Kinshasa,FIKIN, elle devient la Foire Internationale du Congo Kinshasa, FICKIN, le 22 novembre 2024.</p>

              <p>En effet, le gouvernement congolais avait officialisé, lors de sa 23e réunion du Conseil des ministres tenue le vendredi 22 novembre 2024, un projet de décret transformant la Foire Internationale de Kinshasa (FIKIN). Ce texte vise à élargir le champ d'action de cet établissement public au-delà de la capitale.</p>
              <p>Cette nouvelle appellation, Foire Internationale du Congo Kinshasa (FICKIN), répond à deux enjeux majeurs : élargir le champ d'action de Kinshasa et préserver la résonance culturelle présente dans notre jargon ».</p>

              <p>Cette initiative s'inscrit dans le cadre d'un projet de relance et de modernisation de la FIKIN. Lors du 15e réunion du Conseil des ministres, le Ministre du Commerce Extérieur, Julien Paluku Kahongya, avait fait état des défis administratifs, financiers, sociaux et infrastructurels auxquels l'établissement fait face.</p>

              <p>Sa mission est de reconstruire et moderniser la FICKIN en 36 mois, grâce à des partenariats publics-privés, avec l'objectif de réguler toutes les activités foraines à travers la République.</p>

                    

        </div>

        <div class="schedule-shape">
            <div class="shape-1">
                <img src="assets/img/schedule/shape-2.png" alt="image">
            </div>
            <div class="shape-2">
                <img src="assets/img/schedule/shape-1.png" alt="image">
            </div>
        </div>

    </div>
</section>
<!-- End About Story Area -->


<?php include("inc/footer.php") ?> 




























