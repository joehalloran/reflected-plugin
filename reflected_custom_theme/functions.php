<?php 

###### Function to load additional scripts ######
function reflected_custom_scripts()
{
	// Deregister jquery to load in footer
	wp_deregister_script( 'jquery' );
    // Register and load jquery in footer
    wp_register_script( 'jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), false, NULL, true );
    wp_enqueue_script( 'jquery' );
	// Register the script like this for a theme:
	wp_enqueue_script( 'reflected_custom_js',  get_template_directory_uri() . '/js/reflected_custom.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' );
}
add_action( 'wp_enqueue_scripts', 'reflected_custom_scripts' );