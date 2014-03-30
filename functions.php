<?php

  function foundation_scripts() {

    // Load jQuery 2.0

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://code.jquery.com/jquery-2.1.0.min.js', false, null );
    wp_enqueue_script( 'jquery' );

    // Load Foundation JS
    wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.js', array( 'jquery' ), false, true );


  }
  if( !is_admin() ) add_action( 'wp_enqueue_scripts', 'foundation_scripts' );

  // Load Foundation CSS

  function foundation_styles() {
    wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.css' );
    wp_enqueue_style( 'foundation_icons', get_template_directory_uri() . '/css/foundation-icons.css' );
    wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/style.css' );

}
  add_action( 'wp_enqueue_scripts', 'foundation_styles' )


?>
