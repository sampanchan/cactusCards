<?php
include ('includes/post-type-reviews.php');
function cfc_theme_setup(){
    register_nav_menus(
        array(
            'primary' => 'Primary Menu',
            'footer' => __('Footer Menu', 'cactus-fruit-cards')
        )
    );
    register_sidebar( array(
        'name'          => __( 'Footer Menu', 'theme_name' ),
        'id'            => 'footer-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action('after_setup_theme', 'cfc_theme_setup');

function cfc_load_scripts() {
    wp_enqueue_style('cfc-main-styles', get_template_directory_uri() . '/assets/css/main.css', array('cfc-styles'));
    wp_enqueue_style('cfc-styles', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('cfc-main-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
    // wp_enqueue_script('cfc-scripts', get_template_directory_uri() . '/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'cfc_load_scripts');