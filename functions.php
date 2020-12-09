<?php
add_action('wp_enqueue_scripts', 'ttc_enqueue_scripts');

function ttc_enqueue_scripts() {
	wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
	wp_enqueue_script( 'counter', get_theme_file_uri() . '/js/counter.js', array(), true );
}