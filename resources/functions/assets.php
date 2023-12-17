<?php



add_action( 'wp_enqueue_scripts', function () {

	//wp_enqueue_media();
	wp_enqueue_style( 'primary-font', get_template_directory_uri() . '/resources/assets/fonts/fonts.css', [], FLIP_WP_TOOLKIT_VER );
	wp_enqueue_style( 'app-styles', get_template_directory_uri() . '/dist/css/app.css', [], rand() );
	wp_enqueue_script( 'manifest-scripts', get_template_directory_uri() . '/dist/js/manifest.js', ['jquery'], rand(), true );
	wp_enqueue_script( 'vendor-scripts', get_template_directory_uri() . '/dist/js/vendor.js', ['jquery'], rand(), true );
	wp_enqueue_script( 'app-scripts', get_template_directory_uri() . '/dist/js/app.js', ['jquery'], rand(), true );

	wp_localize_script( 'app-scripts', 'php_data', [
		'admin_logged' => in_array( 'administrator', wp_get_current_user()->roles ) ? 'yes' : 'no',
		'ajax_url'     => admin_url( 'admin-ajax.php' ),
		'tpd_uri'      => get_template_directory_uri(),
		'site_url'     => site_url(),
		'rest_url'     => get_rest_url(),
	] );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

} );


