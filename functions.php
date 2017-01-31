<?php 

function deluxe_theme_styles() {

	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/dexluxe.css', array(), '1.0.0', 'all' );
	
}

add_action( 'wp_enqueue_scripts', 'deluxe_script_enqueue' );


	// wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	
	//wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
	
	//wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

//}

//add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

?>