<?php 

require_once(__DIR__ . '/inc/widget-text.php');
require_once(__DIR__ . '/inc/widget-contacts.php');

add_action('after_setup_theme', 'si_setup');
add_action('wp_enqueue_scripts', 'si_scripts');
add_action( 'widgets_init', 'si_register' );

add_filter( 'show_admin_bar', '__return_false' );

function si_setup() {
    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    
    register_nav_menu( 'menuHeader', 'MenuHeader');
    register_nav_menu( 'menuFooter', 'MenuFooter');
}

function si_scripts() {
    wp_enqueue_script(
        'si-script',
        _si_assets_path('js/js.js'),
        [],
        '1.0',
        true
    );

    wp_enqueue_style(
        'si-script',
        _si_assets_path('css/styles.css'),
        [],
        '1.0',
        'all'
    );
}

function si_register() {
    register_sidebar([
        'name' => 'Sidebar tell',
        'id' => 'si-tell',
        'before_widget' => null,
        'after_widget' => null,
    ]);

    register_sidebar([
        'name' => 'Sidebar footer colum 1',
        'id' => 'si-footer-colum-1',
        'before_widget' => null,
        'after_widget' => null,
    ]);

    register_sidebar([
        'name' => 'Sidebar footer colum 2',
        'id' => 'si-footer-colum-2',
        'before_widget' => null,
        'after_widget' => null,
    ]);

    register_sidebar([
        'name' => 'Sidebar footer colum 3',
        'id' => 'si-footer-colum-3',
        'before_widget' => null,
        'after_widget' => null,
    ]);

    register_sidebar([
        'name' => 'Sidebar map',
        'id' => 'si-map',
        'before_widget' => null,
        'after_widget' => null,
    ]);

    register_sidebar([
        'name' => 'Sidebar under map',
        'id' => 'si-under-map',
        'before_widget' => null,
        'after_widget' => null,
    ]);

    register_widget('si_widget_text');
    register_widget('si_widget_contacts');
}

function _si_assets_path( $path ) {
    return get_template_directory_uri() . "/assets/" . $path;
}

?>