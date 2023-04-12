<?php

/* style.css linked */
function my_custom_theme_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), '1.0.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'my_custom_theme_styles' );

/*  register menu location on wordpress theme */
function my_custom_theme_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'my_custom_theme'),
    ));
}
add_action('after_setup_theme', 'my_custom_theme_menus');


/*widgets*/

function codecrafters_widgets_init() {
     register_sidebar( array(
        'name'          => __( 'Footer Widgets', 'codecrafters' ),
        'id'            => 'footer-widgets',
        'description'   => __( 'Widgets in this area will be shown in the footer.', 'codecrafters' ),
        'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'codecrafters_widgets_init' );

/*add support for post thumbnails (featured images)  */

add_theme_support('post-thumbnails');



?>
