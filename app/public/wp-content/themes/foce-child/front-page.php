<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section id="banner" class="banner fade-in-section">
            <video autoplay muted loop>
                <source src="<?php echo get_template_directory_uri() . '/assets/videos/video-studio-koukaki.mp4'; ?>" type="video/mp4">
            </video>
            <img class="fallback-image" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants" id="logo"> 
        </section>
        <section id="story" class="story fade-in-section">
            <h2 class="slide-in">L'histoire</h2>
            <!-- 
            <section id="studio" class="fade-in-section">
            <h2 class="slide-in">Studio Koukaki</h2> -->

            <article id="story" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <!--ajout du template swipe cats-->
            <?php get_template_part('template-parts/cats_swipe'); ?>

             <article id="place" class="fade-in-section">
                <div class="clouds">
                    <img class="little-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png' ?>" alt="petit nuage" data-1233="transform: translateX(0px);" data-2500="transform: translateX(-600px);">

                    <img class="big-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png' ?>" alt="grand nuage" data-1233="transform: translateX(0px);" data-2500="transform: translateX(-400px);">
                </div>
                
                <div class="place">
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>
        <section id="studio" class="fade-in-section">
            <h2 class="slide-in">Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>

            </section>
    </main>
<?php
get_footer();
