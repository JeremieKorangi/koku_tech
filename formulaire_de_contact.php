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
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Nom">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Adresse mail">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Numero de telephone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Sujet">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Votre message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input
                                                name="gridCheck"
                                                value="I agree to the terms and privacy policy."
                                                class="form-check-input"
                                                type="checkbox"
                                                id="gridCheck"
                                                required
                                            >
                                    
                                            <label class="form-check-label" for="gridCheck">
J'accepte les conditions générales et la politique de confidentialité                                            </label>
                                            <div class="help-block with-errors gridCheck-error"></div>
                                        </div>
                                    </div>
                                </div>  

                                <div class="col-lg-12 col-md-12">
                                    <div class="send-btn">
                                        <button type="submit" class="default-btn">
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
        </section>
        <!-- End Contact Area -->
     <?php include("inc/footer.php") ?>