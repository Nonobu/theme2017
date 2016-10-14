<?php

// STYLES
wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
wp_enqueue_style( 'style', get_template_directory_uri() . '/css/master.css' );

// SCRIPTS
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/master.js', ['jquery']);

// MENUS
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
