<?php include("inc/head.php") ?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-6" style="background-image: url(assets/img/bg-6.jpg);">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Formulaire de contact</h2>
                            <ul>
                                <li><a href="index.html">Accueil</a></li>
                                <li>Formulaire de contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact Area -->
        <section class="contact-area pt-100 pb-160">
            <div class="container">
                <div class="contact-inner">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required placeholder="Nom">
                                        <div class="help-block with-errors" id="name-error"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required placeholder="Adresse mail">
                                        <div class="help-block with-errors" id="email-error"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required class="form-control" placeholder="Numero de telephone">
                                        <div class="help-block with-errors" id="phone-error"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required placeholder="Sujet">
                                        <div class="help-block with-errors" id="subject-error"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required placeholder="Votre message"></textarea>
                                        <div class="help-block with-errors" id="message-error"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input
                                                name="gridCheck"
                                                value="1"
                                                class="form-check-input"
                                                type="checkbox"
                                                id="gridCheck"
                                                required
                                            >
                                            <label class="form-check-label" for="gridCheck">
                                                J'accepte les conditions générales et la politique de confidentialité
                                            </label>
                                            <div class="help-block with-errors" id="checkbox-error"></div>
                                        </div>
                                    </div>
                                </div>  

                                <div class="col-lg-12 col-md-12">
                                    <div class="send-btn">
                                        <button type="submit" class="default-btn" id="submitBtn">
                                            Envoyer le message
                                            <span></span>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="default-shape">
                <div class="shape-1"><img src="assets/img/shape/4.png" alt="image"></div>
                <div class="shape-2 rotateme"><img src="assets/img/shape/5.svg" alt="image"></div>
                <div class="shape-3"><img src="assets/img/shape/6.svg" alt="image"></div>
                <div class="shape-4"><img src="assets/img/shape/7.png" alt="image"></div>
                <div class="shape-5"><img src="assets/img/shape/8.png" alt="image"></div>
            </div>
            <div class="schedule-shape">
                <div class="shape-1"><img src="assets/img/schedule/shape-2.png" alt="image"></div>
                <div class="shape-2"><img src="assets/img/schedule/shape-1.png" alt="image"></div>
            </div>
        </section>
        <!-- End Contact Area -->
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Réinitialiser les erreurs
    document.querySelectorAll('.help-block').forEach(el => el.innerHTML = '');
    
    // Récupérer les données
    var formData = new FormData(this);
    
    var submitBtn = document.getElementById('submitBtn');
    var originalText = submitBtn.innerHTML;
    var msgDiv = document.getElementById('msgSubmit');
    
    // Désactiver le bouton
    submitBtn.disabled = true;
    submitBtn.innerHTML = 'Envoi en cours... <span></span>';
    msgDiv.className = 'h3 text-center hidden';
    msgDiv.style.display = 'none';
    
    // Envoyer la requête AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'contact-submit.php', true);
    
    xhr.onload = function() {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
        
        console.log('Réponse brute:', xhr.responseText); // Pour déboguer
        
        try {
            var response = JSON.parse(xhr.responseText);
            msgDiv.className = response.success ? 'h3 text-center success-message' : 'h3 text-center error-message';
            msgDiv.innerHTML = response.message;
            msgDiv.style.display = 'block';
            
            if (response.success) {
                document.getElementById('contactForm').reset();
                
                // Optionnel: faire défiler jusqu'au message
                msgDiv.scrollIntoView({ behavior: 'smooth' });
            }
        } catch(e) {
            console.error('Erreur de parsing:', e);
            console.log('Réponse reçue:', xhr.responseText);
            
            msgDiv.className = 'h3 text-center error-message';
            msgDiv.innerHTML = 'Erreur technique. Veuillez réessayer. (Détails dans la console)';
            msgDiv.style.display = 'block';
        }
    };
    
    xhr.onerror = function() {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
        msgDiv.className = 'h3 text-center error-message';
        msgDiv.innerHTML = 'Erreur réseau. Veuillez vérifier votre connexion.';
        msgDiv.style.display = 'block';
    };
    
    xhr.send(formData);
});
</script>

<style>
.success-message {
    color: #28a745;
    margin-top: 20px;
    font-size: 18px;
    padding: 15px;
    background: #d4edda;
    border-radius: 5px;
    border: 1px solid #c3e6cb;
}
.error-message {
    color: #dc3545;
    margin-top: 20px;
    font-size: 18px;
    padding: 15px;
    background: #f8d7da;
    border-radius: 5px;
    border: 1px solid #f5c6cb;
}
.help-block {
    color: #dc3545;
    font-size: 14px;
    margin-top: 5px;
}
</style>

<?php include("inc/footer.php") ?>