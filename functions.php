<?php
/* sidebar functionality */
function my_custom_theme_scripts() {
    wp_enqueue_script( 'jquery' ); // Make sure jQuery is enqueued
    wp_enqueue_script( 'sidebar', get_template_directory_uri() . '/sidebar.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_scripts' );


/* style.css linked */
function my_custom_theme_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), '1.0.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'my_custom_theme_styles' );

/*  register sidebar menu location on wordpress theme */
function my_custom_theme_menus() {
    register_nav_menus(array(
        'sidebar-menu' => __('Sidebar Menu', 'my_custom_theme'),
    ));
}
add_action('after_setup_theme', 'my_custom_theme_menus'); 

?>
