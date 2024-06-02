<?php
if ( ! function_exists( 'code_havoc' ) ) :
function code_havoc() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	register_nav_menus( array(
	    'primary'   => __( 'Primary Menu', 'template Header' )
	) );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' ); 
	add_theme_support( 'wc-product-gallery-lightbox' ); 
	add_theme_support( 'wc-product-gallery-slider' );
}
endif; 
add_action( 'after_setup_theme', 'code_havoc' );

function enqueue_tailwind() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/src/output.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_tailwind');
