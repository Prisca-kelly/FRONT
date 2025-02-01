<section class="contact-form-area py-70 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="comment-form bgc-lighter z-1 rel mb-30 rmb-55">
                    <form id="contactForm" class="contactForm" name="contactForm" action="assets/php/form-process.php"
                        method="post" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title">
                            <h2>Reservation</h2>
                        </div>
                        <div class="row mt-35">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dateAller">Date d'aller *</label>
                                    <input type="date" id="dateAller" name="dateAller" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dateRetour">Date de retour</label>
                                    <input type="date" id="dateRetour" name="dateRetour" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Destination *</label>
                                    <select id="class" name="class" required aria-required="true">
                                        <option value="" disabled selected>Choisissez une classe</option>
                                        <option value="economique">Économique</option>
                                        <option value="affaires">Affaires</option>
                                        <option value="premiere">Première</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Classe souhaitée *</label>
                                    <select id="class" name="class" required aria-required="true">
                                        <option value="" disabled selected>Choisissez une classe</option>
                                        <option value="economique">Économique</option>
                                        <option value="affaires">Affaires</option>
                                        <option value="premiere">Première</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombrePlace">Nombre de place *</label>
                                    <input type="text" id="nombrePlace" name="nombrePlace" class="form-control"
                                        placeholder="Nombre de place" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Remarque</label>
                                    <textarea name="message" id="message" class="form-control" rows="5"
                                        placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <button type="submit" class="theme-btn style-two">
                                        <span data-hover="Enregistrer">Enregistrer</span> &nbsp;
                                        <i class="fal fa-arrow-right"></i>
                                    </button>
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-images-part" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="row">
                        <div class="col-12">
                            <img src="assets/images/contact/contact1.jpg" alt="Contact">
                        </div>
                        <div class="col-6">
                            <img src="assets/images/contact/contact2.jpg" alt="Contact">
                        </div>
                        <div class="col-6">
                            <img src="assets/images/contact/contact3.jpg" alt="Contact">
                        </div>
                    </div>
                    <div class="circle-logo">
                        <img src="assets/images/contact/icon.png" alt="Logo">
                        <span class="title h2">Ravelo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>