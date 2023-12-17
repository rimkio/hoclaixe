<?php

/**
 * Use this file to register any custom post types you wish to create.
 */
if (!function_exists('hoclaixe_create_custom_post_type')) {
	// Register Custom Post Type
	function hoclaixe_create_custom_post_type()
	{
		register_post_type('events', array(
			'label'               => __('Events', 'hoclaixe'),
			'description'         => __('Events', 'hoclaixe'),
			//'labels'                => $labels,
			'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
			'taxonomies'          => array(''),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'		  => 'dashicons-calendar',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest'        => true,
		));

	}
	//sadd_action('init', 'hoclaixe_create_custom_post_type', 0); 
}

if (!function_exists('hoclaixe_create_custom_taxonomy')) {
	function hoclaixe_create_custom_taxonomy()
	{
		register_taxonomy('venues', array('events'), array(
			'labels'            => array(
				'name'          => _x('Venues', 'Taxonomy General Name', 'hoclaixe'),
				'singular_name' => _x('Venues', 'Taxonomy Singular Name', 'hoclaixe'),
				'menu_name'     => __('Venues', 'hoclaixe'),
				'all_items'         => __('All Venues', 'hoclaixe'),
				'edit_item'         => __('Edit Venues', 'hoclaixe'),
				'update_item'       => __('Update Venues', 'hoclaixe'),
				'add_new_item'      => __('Add New Venues', 'hoclaixe'),
			),
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_in_rest'      => true,

		));
	}

	//add_action('init', 'hoclaixe_create_custom_taxonomy', 0);
}
