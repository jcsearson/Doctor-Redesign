<?php
/* Employees -- Custom Post Type */
add_action( 'init', 'register_cpt_employees' );
function register_cpt_employees() {
$labels = array(
'name' => _x( 'Employees', 'employees' ),
'singular_name' => _x( 'Employee', 'employee' ),
'add_new' => _x( 'Add New Employee', 'add new employee' ),
'add_new_item' => _x( 'Add New Employee', 'add new employee' ),
'edit_item' => _x( 'Edit Employees', 'edit employees' ),
'new_item' => _x( 'New Employee', 'new employee' ),
'view_item' => _x( 'View Employee', 'view employee' ),
'search_items' => _x( 'Search Employees', 'search employees' ),
'not_found' => _x( 'Employee was Not Found', 'employee was not found' ),
'not_found_in_trash' => _x( 'Not found in Trash', 'not found in trash' ),
'parent_item_colon' => _x( 'Parent Employee:', 'parent employee:' ),
'menu_name' => _x( 'Employees', 'employee' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Custom post type for Employees.',
'supports' => array( 	'title',
						'editor',
						'excerpt',
						'author',
						'thumbnail',
						'trackbacks',
						'custom-fields',
						'comments',
						'revisions',
						'page-attributes',
						'post-formats'),
'taxonomies' => array( 'category',
						'post_tag',
						'page-category' ),
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'menu_icon' => 'dashicons-groups',
'show_in_nav_menus' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' => true,
'capability_type' => 'post'
);
add_theme_support('post-thumbnails');
register_post_type( 'employees', $args );
}
?>