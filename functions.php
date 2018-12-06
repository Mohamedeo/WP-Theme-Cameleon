<?php

if (!function_exists('cameleons_setup')) {
    function cameleons_setup() {
        add_theme_support( 'title-tag' );
        register_nav_menus(array(
            'left-menu' => __('Primary Menu', ''),
            'footer' => __('Secondary Menu', ''),
));
}
}
// J'attache cette fonction de configuration au hook correspondant
add_action('after_setup_theme', 'cameleons_setup');

function cameleons_enqueue_style() {
   wp_enqueue_style( 'core', get_theme_file_uri('/css/style.css'), false );
      wp_enqueue_style( 'reset', get_theme_file_uri('/css/reset.css'), false );
}

add_action( 'wp_enqueue_scripts', 'cameleons_enqueue_style' );

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Sidebar',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

function cameleons_widgets_init() {	
	
		register_sidebar( array(
			'name'			=> __( 'Widget', 'dossierdevotretheme' ),
			'id'			=> 'zone-widgets-1',
			'description'	=> __( 'Ici on insère le widget de notre caméléons / Newsletter / Soummission', 'dossierdevotretheme' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<div class="widget-title th3">',
			'after_title'	=> '</div>',
		) );
}
add_action( 'widgets_init', 'cameleons_widgets_init' );