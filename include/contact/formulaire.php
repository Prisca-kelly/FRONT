<section class="contact-form-area py-70 rel z-1">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
                <div class="comment-form bgc-lighter z-1 rel mb-30 rmb-55">
                    <form id="contactForm" class="contactForm" name="contactForm" action="assets/php/form-process.php"
                        method="post" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title">
                            <h2>Contactez-nous</h2>
                        </div>
                        <p>Votre adresse E-mail ne sera pas publiée. Les champs obligatoires sont marqués.*</p>
                        <div class="row mt-35">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nom complet</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Numéro de téléphone</label>
                                    <input type="tel" id="phone_number" name="phone_number" class="form-control"
                                        required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Adresse e-mail</label>
                                    <input type="email" id="email" name="email" class="form-control" required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Votre message</label>
                                    <textarea name="message" id="message" class="form-control" rows="5"
                                        required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <button disabled type="submit" class="theme-btn style-two">
                                        <span data-hover="Envoyer">Envoyez</span>&nbsp;
                                        <i class="fal fa-arrow-right"></i>
                                    </button>
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>