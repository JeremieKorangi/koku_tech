
        <!-- Start Footer Area -->
        <section class="footer-section pt-100"  style="background: linear-gradient(135deg, #02010e 0%, #2a2a2b 100%);" >
            <div class="container">
                <div class="subscribe-area" style="background: linear-gradient(135deg, #000000 0%, #F15A24 100%);">
                    <div class="subscribe-title">
                        <h3>Inscrivez-vous à la newsletter</h3>
                        <p>Profitez en avant-première des tendances et événements.</p>
                    </div>
                   <form class="newsletter-form" id="newsletterForm" method="POST">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <input type="email" class="form-control" id="newsletterEmail" placeholder="Entrez votre e-mail" name="EMAIL" required autocomplete="off">
        </div>

        <div class="col-lg-6 col-md-6">
            <button type="submit" id="newsletterSubmitBtn">S'inscrire</button>
            <div id="validator-newsletter" class="form-result"></div>
        </div>
    </div>
</form>


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
                    </div>
                </div>

                <div class="footer-area-content">
                    <img src="assets/img/logo.png" alt="image">

                    <p> La Foire Internationale du Congo Kinshasa <br> La vitrine qui valorise innovation, culture et savoir-faire congolais</p>
                    <ul class="footer-list">
                        <li>
                            <a href="future.html" target="_blank">
                                <i class="flaticon-facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a href="future.html" target="_blank">
                                <i class="flaticon-twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="future.html" target="_blank">
                                <i class="flaticon-linkedin"></i>
                            </a>
                        </li>

                        <li>
                            <a href="future.html" target="_blank">
                                <i class="flaticon-envelope"></i>
                            </a>
                        </li>

                        <li>
                            <a href="future.html" target="_blank">
                                <i class="flaticon-instagram"></i>
                            </a>
                        </li>

                        <li>
                            <a href="future.html" target="_blank">
                                <i class="flaticon-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="copy-right-area">
                <div class="container">

                    <p>Avenue de la foire, Commune de Limete | KINSHASA RD CONGO</a></p>

                    <ul class="copy-right-list">
                        <li>
                            <p>Contact: <a href="#">+243 999 900 748</a></p>
                        </li>
                        <li>
                            <p>E-mail: <a href="#">fikinrdc1969@gmail.com</a></p>
                        </li>

                    </ul>

                    <div class="copy-right-text text-two">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <p>© 2025 FICKIN –  By <a href="#" > Koku_tech</a></p>
                            </div>

                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <p>Termes & Conditions</p>
                                    </li>
                                    <li>
                                        <p>Politique de confidentialité<p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-shape">
                <div class="shape-1">
                    <img src="assets/img/footer/4.png" alt="image">
                </div>

                <div class="shape-2">
                    <img src="assets/img/footer/3.png" alt="image">
                </div>
            </div>

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
            </div>
        </section>
        <!-- End Footer Area -->

        <!-- Start Go Top Section -->
        <div class="go-top">
            <i class="bx bx-chevron-up"></i>
            <i class="bx bx-chevron-up"></i>
        </div>
        <!-- End Go Top Section -->

        <!-- Jquery Slim JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <!-- Owl Carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
        <!-- Owl Magnific JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select JS -->
		<script src="assets/js/jquery.nice-select.min.js"></script>
		<!-- Appear JS --> 
        <script src="assets/js/jquery.appear.min.js"></script>
		<!-- Odometer JS --> 
		<script src="assets/js/odometer.min.js"></script>
        <!-- Image Light Box JS --> 
		<script src="assets/js/imagelightbox.min.js"></script>
		<!-- Form Ajaxchimp JS -->
		<script src="assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Validator JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/main.js"></script>

        <script>
            const modal = document.getElementById('videoModal');
            const modalVideo = document.getElementById('modalVideo');
            const videoThumbs = document.querySelectorAll('.video-thumb');

            // Ouvrir la modal quand on clique sur une vidéo miniature
            videoThumbs.forEach(video => {
              video.addEventListener('click', () => {
                 const src = video.querySelector('source').src;
                 modalVideo.querySelector('source').src = src;
                 modalVideo.load(); // recharge la source
                 modalVideo.play();
                 modal.style.display = 'flex';
              });
            });

            // Fermer la modal si clic en dehors de la vidéo
            modal.addEventListener('click', (e) => {
              if (e.target === modal) {
                  modal.style.display = 'none';
                  modalVideo.pause();
                  modalVideo.currentTime = 0;
              }
            });

        </script>
        <script>
document.getElementById('newsletterForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    var email = document.getElementById('newsletterEmail').value;
    var resultDiv = document.getElementById('validator-newsletter');
    var submitBtn = document.getElementById('newsletterSubmitBtn');
    var originalText = submitBtn.textContent;
    
    // Désactiver le bouton pendant l'envoi
    submitBtn.disabled = true;
    submitBtn.textContent = 'Envoi en cours...';
    resultDiv.innerHTML = '';
    
    // Envoyer la requête AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'newsletter-subscribe.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onload = function() {
        submitBtn.disabled = false;
        submitBtn.textContent = originalText;
        
        try {
            var response = JSON.parse(xhr.responseText);
            resultDiv.innerHTML = response.message;
            
            if (response.success) {
                resultDiv.style.color = 'green';
                document.getElementById('newsletterEmail').value = '';
                
                // Optionnel : Ajouter une classe de succès
                resultDiv.className = 'form-result success-message';
            } else {
                resultDiv.style.color = 'red';
                resultDiv.className = 'form-result error-message';
            }
        } catch(e) {
            resultDiv.innerHTML = 'Une erreur est survenue. Veuillez réessayer.';
            resultDiv.style.color = 'red';
        }
    };
    
    xhr.onerror = function() {
        submitBtn.disabled = false;
        submitBtn.textContent = originalText;
        resultDiv.innerHTML = 'Erreur réseau. Veuillez réessayer.';
        resultDiv.style.color = 'red';
    };
    
    xhr.send('EMAIL=' + encodeURIComponent(email));
});
</script>

<style>
.success-message {
    color: green;
    margin-top: 10px;
    font-size: 14px;
}
.error-message {
    color: red;
    margin-top: 10px;
    font-size: 14px;
}
</style>
    </body>
</html>