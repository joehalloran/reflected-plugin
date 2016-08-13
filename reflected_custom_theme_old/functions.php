<?php 

function reflected_scripts() {
    // Deregister jquery to load in footer
    wp_deregister_script( 'jquery' );
    // Register and load jquery in footer
    wp_register_script( 'jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"), false, NULL, true );
    // Load google fonts stylesheet.
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Ubuntu:400,500,700' );
}
add_action( 'wp_enqueue_scripts', 'reflected_scripts' );

