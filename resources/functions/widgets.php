<?php

/**
 * Load widgets
 */
require( __DIR__ . '/widget/loaded.php' );

/**
 * Register sidebars
 */
add_action( 'widgets_init', 'hoclaixe_widgets_init' );
function hoclaixe_widgets_init() {
	register_sidebar( array(
		'name'          => 'News page',
		'id'            => 'news-sidebar',
		'before_widget' => '<div class="wg-wrap">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="wg-title">',
		'after_title'   => '</h2>',
	) );
}

