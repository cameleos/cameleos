<?php
if ( ! function_exists( 'cameleos_setup' ) ) :

function cameleos_setup() {
	load_theme_textdomain( 'cameleos', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'primary' => esc_html__( 'Cameleos', 'cameleos' ),
	) );
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'cameleos_setup' );


function cameleos_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'cameleos' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'cameleos' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'cameleos_widgets_init' );


function cameleos_scripts() {
    wp_enqueue_style( 'cameleos-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'cameleos-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.10.2/css/all.css' );
    wp_enqueue_style( 'cameleos-style', get_stylesheet_uri() );
    wp_enqueue_style( 'cameleos-lora-font', 'https://fonts.googleapis.com/css?family=Lora:400,700' );
    wp_enqueue_style( 'cameleos-merriweather-font', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900' );
    wp_enqueue_style( 'cameleos-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    wp_enqueue_style( 'cameleos-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' );
    wp_enqueue_style( 'cameleos-opensans-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' );
    wp_enqueue_style( 'cameleos-oswald-font', 'https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700' );
    wp_enqueue_style( 'cameleos-muli-font', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800' );
    wp_enqueue_style( 'cameleos-montserrat-font', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800' );
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'html5hiv', get_template_directory_uri().'/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );
    wp_enqueue_script('cameleos-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.15.0/dist/umd/popper.min.js', array(), '', true );
    wp_enqueue_script('cameleos-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script('cameleos-themejs', get_template_directory_uri() . '/js/theme-script.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'cameleos_scripts' );


function cameleos_preload( $hints, $relation_type ){
    $hints[] = [
        'href'        => 'https://cdn.jsdelivr.net/',
        'crossorigin' => 'anonymous',
    ];
    $hints[] = [
        'href'        => 'https://use.fontawesome.com/',
        'crossorigin' => 'anonymous',
    ];
    return $hints;
} 
add_filter( 'wp_resource_hints', 'cameleos_preload', 10, 2 );


if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/navwalker.php');
}