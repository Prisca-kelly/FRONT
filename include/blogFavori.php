<?php

$sql2 = $bdd->query("SELECT * FROM articleblog WHERE statut = 'publié' ORDER BY id_article ASC LIMIT 3");
$FavoritBlogs = $sql2->fetchAll();
$totalFavorit = $sql2->rowCount();

if ($totalFavorit > 0) { ?>
    <div class="widget widget-news mt-80" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
        <h5 class="widget-title">Les plus lus</h5>
        <ul>
            <?php
            //$FavoritBlogs = $sql2->fetchAll();
            foreach ($FavoritBlogs as $FavoritBlog) { ?>
                <li>
                    <div class="image">
                        <img src="assets/images/widgets/news1.jpg" alt="News">
                    </div>
                    <div class="content">
                        <h6>
                            <a href="blog-details.php?article=<?php echo $FavoritBlog['id_article']; ?>">
                                <?php echo $FavoritBlog['titre']; ?>
                            </a>
                        </h6>
                        <span class="date">
                            <i class="far fa-calendar-alt"></i>
                            <?php echo $FavoritBlog['date_publication']; ?>
                        </span>
                    </div>
                </li>
            <?php }
            ?>
        </ul>
    </div>
<?php } ?>