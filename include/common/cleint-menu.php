<div class="shop-sidebar mb-30">
    <div class="widget widget-activity" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
        <h6 class="widget-title">Espace client</h6>
        <ul class="radio-filter">
            <li>
                <a href="./client-accueil.php" class="<?= $page == 'profile' ? 'active' : ''; ?>">
                    <i class="fas fa-user me-2"></i> Profil
                </a>
            </li>
            <li>
                <a href="./client-historique.php" class="<?= $page == 'historique' ? 'active' : ''; ?>">
                    <i class="fas fa-history me-2"></i> Historique des commandes
                </a>
            </li>
            <li>
                <a href="./deconnexion.php">
                    <i class="fas fa-power-off me-2"></i> Déconnexion
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="widget widget-cta" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
    <div class="content text-white">
        <span class="h6">Envie d'explorer le monde</span>
        <h3>Visitez nos destinations</h3>
        <a href="destination.php" class="theme-btn style-two bgc-secondary">
            <span data-hover="Visiter maintenant">Visiter maintenant&nbsp;</span>
            <i class="fal fa-arrow-right"></i>
        </a>
    </div>
    <div class="image">
        <img src="assets/images/destinations/OIP1.jpg" alt="CTA">
    </div>
    <div class="cta-shape"><img src="assets/images/widgets/cta-shape2.png" alt="Shape"></div>
</div>