<?php

add_action('after_setup_theme', function () {
	register_nav_menus([
		'main-menu'   => esc_html__('Primary', 'hoclaixe'),
		'footer-menu' => esc_html__('Footer Menu', 'hoclaixe'),
		'terms-menu'  => esc_html__('Terms Menu', 'hoclaixe'),
		'discover-menu'  => esc_html__('Discover Menu', 'hoclaixe')
	]);
});

/**
 * @param $classes
 * @param $item
 * @param $args
 *
 * @return mixed
 */
add_filter('nav_menu_css_class', 'filter_bootstrap_nav_menu_css_class', 10, 3);
function filter_bootstrap_nav_menu_css_class($classes, $item, $args)
{
	if (isset($args->bootstrap)) {
		$classes[] = ($item->object_id == get_the_ID()) ? 'nav-item current' : 'nav-item';

		if (in_array('menu-item-has-children', $classes)) {
			$classes[] = 'dropdown';
		}

		if (in_array('dropdown-header', $classes)) {
			unset($classes[array_search('dropdown-header', $classes)]);
		}
	}

	return $classes;
}

/**
 * Add bootstrap attributes to individual link elements.
 *
 * @param $atts
 * @param $item
 * @param $args
 * @param $depth
 *
 * @return mixed
 */

add_filter('nav_menu_link_attributes', 'filter_bootstrap_nav_menu_link_attributes', 10, 4);
function filter_bootstrap_nav_menu_link_attributes($atts, $item, $args, $depth)
{
	if (isset($args->bootstrap)) {
		if (!isset($atts['class'])) {
			$atts['class'] = '';
		}

		if ($depth > 0) {
			if (in_array('dropdown-header', $item->classes)) {
				$atts['class'] = 'dropdown-header';
			} else {
				$atts['class'] .= 'dropdown-item';
			}

			if ($item->description) {
				$atts['class'] .= ' has-description';
			}
		} else {
			$atts['class'] .= 'nav-link';

			if (in_array('menu-item-has-children', $item->classes)) {
				$atts['class']         .= ' dropdown-toggle';
				$atts['role']          = 'button';
				$atts['data-toggle']   = 'dropdown';
				$atts['aria-haspopup'] = 'true';
				$atts['aria-expanded'] = 'false';
			}
		}
	}

	return $atts;
}

/**
 * Add bootstrap classes to dropdown menus.
 *
 * @param $classes
 * @param $args
 * @param $depth
 *
 * @return mixed
 */

add_filter('nav_menu_submenu_css_class', 'filter_bootstrap_nav_menu_submenu_css_class', 10, 3);
function filter_bootstrap_nav_menu_submenu_css_class($classes, $args, $depth)
{
	if (isset($args->bootstrap)) {
		$classes[] = 'dropdown-menu';
	}

	return $classes;
}



function hoclaixe_wp_nav_menu_objects($items, $args)
{
	if ($args->theme_location == 'discover-menu') {
		foreach ($items as &$item) {
			$id_post          = $item->object_id;
			$featured_img_url = get_the_post_thumbnail_url($id_post, 'full');
			$logo             = __get_field('discover_logo', $id_post);
			$menu_title       = $item->title;
			$external_url     = get_field("external_url_discover", $id_post);
			$target_external_url = isset($external_url['target_link']) ? '_blank' : '';
			$item->title      = '';
			$item->title .= '<span class="menu-item-img">';
			if ($featured_img_url) {
				$item->title .= '<img src="' . $featured_img_url . '" alt="' . $menu_title . '"/>';
			}
			if ($logo) {
				$item->title .= '<img src="' . $logo . '" alt="' . $menu_title . '"/>';
			}
			$item->title .= '</span>';
			$item->title  .= '<span class="menu-item-text">' . $menu_title . '</span>';
			$item->url     = !empty($external_url['url']) ? $external_url['url'] : $item->url;
			$item->target .= !empty($external_url['url']) ? $target_external_url : '';
		}
	}
	return $items;
}
add_filter('wp_nav_menu_objects', 'hoclaixe_wp_nav_menu_objects', 10, 2);
