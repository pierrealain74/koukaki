<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

/////////////////////////////////////////////////////////////////////
//Ajout du script menu.js
function enqueue_menu()
{
    wp_enqueue_script('menu', get_stylesheet_directory_uri() . '/js/menu.js', array(), '1.0', true); //afficher au tout debut du header
}
add_action('wp_enqueue_scripts', 'enqueue_menu'); //le 1 = afficher au tout debut du header

/////////////////////////////////////////////////////////////////////
//Ajout de JQuery // En fait pas besoin...
/* function enqueue_jquery() {

    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . 'node_modules/jquery/dist/jquery.min.js', array(), '1.0', false );
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_jquery' ); */

/////////////////////////////////////////////////////////////////////
//Ajout de simpleparallax.js pour le bg video et logo
function enqueue_simpleparallax()
{

    wp_enqueue_script('simpleparallax', get_stylesheet_directory_uri() . '/node_modules/simple-parallax-js/dist/simpleParallax.min.js', array(), false, true);

    wp_enqueue_script('simpleparallax-config', get_stylesheet_directory_uri() . '/js/simpleparallax.js', array(), false, true);
}
add_action('wp_footer', 'enqueue_simpleparallax');

/////////////////////////////////////////////////////////////////////
//Ajout du script JS Swipeeeeeeer
function enqueue_swiper()
{
    // Charge le fichier CSS du Swiper
    wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/js/swiper9_swiper-bundle.min.css');
}
function enqueue_swiper_init()
{

    wp_enqueue_script('swiper-init', get_stylesheet_directory_uri() . '/js/swiper-init.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper');
add_action('wp_footer', 'enqueue_swiper_init');

/////////////////////////////////////////////////////////////////////

//Ajout des script en fin de front-page pour skroll, slide-in, fade-in. Permet de faire le fadein sur les titre H2, le parallax clouds, les fade-in sections
function enqueue_skroll_fade_slide()
{

    wp_enqueue_script('fade-slide-skroll', get_stylesheet_directory_uri() . '/js/scroll-slide-and-fade.js', array(), false, true);
}

add_action('wp_footer', 'enqueue_skroll_fade_slide');

/* if (!wp_is_mobile() && !wp_script_is('fade-slide-skroll', 'enqueued')) {
    add_action('wp_footer', 'enqueue_skroll_fade_slide');
} */
//Ajout de la bibliotheque Skroll.js (pour les nuages)

/* function enqueue_skroll() {

    wp_enqueue_script( 'skroll', get_stylesheet_directory_uri() . '/js/skrollr-master/dist/skrollr.min.js', array(), '1.0', false );

  }
  
add_action( 'wp_enqueue_scripts', 'enqueue_skroll' ); */

/*   if( !wp_is_mobile() && !wp_script_is('skroll', 'enqueued')){
  add_action( 'wp_enqueue_scripts', 'enqueue_skroll' );
} */

/////////////////////////////////////////////////////////////////////
//Test de création d'une section dans le customizer
function theme_customizer_sections($wp_customize)
{
    // Créer une nouvelle section
    $wp_customize->add_section('my_custom_section', array(
        'title'    => 'Section test',
        'priority' => 30,
    ));

    // Ajouter des paramètres à la section
    $wp_customize->add_setting('my_custom_setting', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Ajouter un contrôle pour le paramètre
    $wp_customize->add_control('my_custom_setting', array(
        'label'    => 'Mon Paramètre Personnalisé',
        'section'  => 'my_custom_section',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'theme_customizer_sections');
