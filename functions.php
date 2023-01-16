<?php
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style('style', get_template_directory_uri() . "/assets/style/style.css");

		wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), 'null', true);
	}
);

add_theme_support("post-thumbnails");
add_theme_support("title-tag");
add_theme_support("custom-logo");

add_filter('upload_mimes', 'svg_upload_allow');

function svg_upload_allow($mimes)
{
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{
	if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
		$dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
	} else {
		$dosvg = ('.svg' === strtolower(substr($filename, -4)));
	}

	if ($dosvg) {
		if (current_user_can('manage_options')) {

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		} else {
			$data['ext']  = false;
			$data['type'] = false;
		}
	}

	return $data;
}

add_action('after_setup_theme', function () {
	register_nav_menus([
		'header-menu' => 'Верхняя область',
		'footer-menu' => 'Нижняя область',
		'extra-menu' => 'Дополнительная навигация'
	]);
});

add_filter("wp_nav_menu_args", 'filter_wp_menu_args');
add_filter("nav_menu_item_id", "filter_menu_item_css_id", 10, 4);
add_filter('nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4);
add_filter("nav_menu_link_attributes", "filter_nav_menu_link_attributes", 10, 4);

function filter_wp_menu_args($args)
{
	$args["container"] = "nav";
	$args["container_class"] = "nav nav_menu";
	$args["items_wrap"] = '<ul class="%2$s">%3$s</ul>';
	if ($args["theme_location"] === "header-menu") {
		$args["menu_class"] = "nav__list nav__list_horisontal";
	} else {
		$args["menu_class"] = "nav__list nav__list_vertical";
	}
	return $args;
}

function filter_menu_item_css_id($menu_id, $item, $args, $depth)
{
	return $args->theme_location ? "" : $menu_id;
}

function filter_nav_menu_css_classes($classes, $item, $args, $depth)
{
	$classes = [
		"nav__item",
	];
	return $classes;
}
function filter_nav_menu_link_attributes($atts, $item, $args, $depth)
{
	$atts["class"] = "nav__link";
	if ($item->current && $args->theme_location === "header-menu") {
		$atts["class"] .= " nav__link_active";
	}
	return $atts;
}