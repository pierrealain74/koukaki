<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}
//Ajout du script JS Fade-In
function enqueue_fade_in_script() {//wp_enqueue_script() : Fonction WordPress pour ajouter des scripts
    wp_enqueue_script( 'fade-in-script', get_stylesheet_directory_uri() . 'js/fade-in.js', array(), '1.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_fade_in_script' );

  //Ajout de JQuery
function enqueue_jquery() {
    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . 'node_modules/jquery/dist/jquery.min.js', array(), '1.0', false );
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_jquery' );

  //Ajout du script JS Swiper
function enqueue_swiper_styles() {
    wp_enqueue_style( 'swiper', get_stylesheet_directory_uri() . '/swiper9_swiper-bundle.min.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_styles' );


//Ajout du script Skroll.js (pour les nuages)
function enqueue_skroll() {
    wp_enqueue_script( 'skroll', get_stylesheet_directory_uri() . '/js/skrollr-master/dist/skrollr.min.js', array(), '1.0', false );
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_skroll' );

/* function enqueue_skroll_init() {
    wp_enqueue_script( 'skroll-init', get_stylesheet_directory_uri() . 'js/skrollr-master/skrollr-init.js', array(), '1.0', false );
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_skroll_init' ); */


//Test de création d'une section dans le customizer
function theme_customizer_sections( $wp_customize ) {
    // Créer une nouvelle section
    $wp_customize->add_section( 'my_custom_section', array(
        'title'    => 'Section test',
        'priority' => 30,
    ) );

    // Ajouter des paramètres à la section
    $wp_customize->add_setting( 'my_custom_setting', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    // Ajouter un contrôle pour le paramètre
    $wp_customize->add_control( 'my_custom_setting', array(
        'label'    => 'Mon Paramètre Personnalisé',
        'section'  => 'my_custom_section',
        'type'     => 'text',
    ) );
}
add_action( 'customize_register', 'theme_customizer_sections' );

  