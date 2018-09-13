<?php  

function register_enqueue_style() {
	$theme_data = wp_get_theme();

	wp_register_style ('bootstrap_css', get_theme_file_uri('/assets/vendor/css/bootstrap.min.css'), 'null', '4.1.3', 'screen');
	wp_register_style ('googleFonts', get_theme_file_uri('https://fonts.googleapis.com/css?family=Alex+Brush|Lato:300,400,700'), 'null', '1.0', 'screen');
	wp_register_style ('fontawesome', get_theme_file_uri('/assets/css/fontawesome.min.css'), 'null', '1.0', 'screen');
	wp_register_style ('csspropio', get_theme_file_uri('/assets/css/style.css'), 'normalize', '1.0', 'screen');

	//estilos en cola
	wp_enqueue_style('bootstrap_css');
	wp_enqueue_style('googleFonts');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('csspropio');
}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );



function register_enqueue_scripts() {
		$theme_data = wp_get_theme();
		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		// wp_deregister_script( 'jquery-migrate' );
		
		/* Registrando Scripts */
		wp_register_script('jQuery3', 
			get_parent_theme_file_uri('/assets/vendor/js/jquery.min.js'), null, '3.2.1', true);
		wp_register_script('jQuery_migrate', 
			get_parent_theme_file_uri('/assets/vendor/js/jQuery-migrate.js'), array('jQuery3'), '3.0.0', true);
		wp_register_script('bootstrap_js', 
			get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'), array('jQuery_migrate'), '4.1.3', true);
		wp_register_script('scripts', 
			get_parent_theme_file_uri('/assets/js/scripts.js'), array('jQuery3'), '4.1.3', true);
		
		/* Enqueue Scripts */
		wp_enqueue_script('jQuery3');
		wp_enqueue_script('jQuery_migrate');
		wp_enqueue_script('bootstrap_js');
		wp_enqueue_script('scripts');
		
	}
	add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );


	//Remove error wp-includes/functions.php
	remove_action ('shutdown', 'wp_ob_end_flush_all', 1);


	// registro widget footer
	function dl_widgets() {
   		register_sidebar( array(
    	'name' => 'Widget Footer',
    	'id' => 'widget_footer'
   		));
 	}
 
 add_action('widgets_init', 'dl_widgets');


 ?>

