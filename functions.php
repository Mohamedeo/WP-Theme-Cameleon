<?php

if (!function_exists('oblog_setup')) {
    function oblog_setup() {
        // https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/themes/setup-theme.md#title-tag
        // Je demande à WordPress de gérer tout seul les titres de mes pages
        add_theme_support( 'title-tag' );

        // https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/themes/setup-theme.md#menus-de-navigation
        // add_theme_support( 'menus' );

        register_nav_menus(array(
'left-menu' => __('Primary Menu', 'vertulab'),
'footer' => __('Secondary Menu', 'vertulab'),
));
    
    }
}
// J'attache cette fonction de configuration au hook correspondant
add_action('after_setup_theme', 'oblog_setup');

function oblog_enqueue_style() {
   wp_enqueue_style( 'core', get_theme_file_uri('/css/style.css'), false );
      wp_enqueue_style( 'reset', get_theme_file_uri('/css/reset.css'), false );
}

add_action( 'wp_enqueue_scripts', 'oblog_enqueue_style' );

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Sidebar',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

function notux_widgets_init() {	
	// Mon widget sur mesure
		register_sidebar( array(
			'name'			=> __( 'Nom de ma zone de widgets', 'dossierdevotretheme' ),
			'id'			=> 'zone-widgets-1',
			'description'	=> __( 'Description de la zone de widgets.', 'dossierdevotretheme' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<div class="widget-title th3">',
			'after_title'	=> '</div>',
		) );
}
add_action( 'widgets_init', 'notux_widgets_init' );