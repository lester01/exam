<?php

function sports_script_enqueue() {

	wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/style.css');

	wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' ); 

}

add_action('wp_enqueue_scripts', 'sports_script_enqueue');

function sports_enqueue_jquery() {

    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), true); 

    wp_enqueue_script( 'jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array('jquery'), true); 
}
add_action('wp_enqueue_scripts', 'sports_enqueue_jquery');

?>