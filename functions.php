<?php
function enqueue_custom_styles() {
    wp_register_style('custom-style', get_stylesheet_directory_uri() . '/css/custom-style.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-style');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

?>

