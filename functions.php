<?php
/* Employees -- Custom Post Type */
add_action( 'init', 'register_cpt_staff' );
function register_cpt_staff() {
$labels = array(
'name' => _x( 'Staff', 'staff' ),
'singular_name' => _x( 'Staff Member', 'staff member' ),
'add_new' => _x( 'Add Staff Member', 'add staff member' ),
'add_new_item' => _x( 'Add Staff Member', 'add staff member' ),
'edit_item' => _x( 'Edit Staff', 'edit staff' ),
'new_item' => _x( 'New Staff Member', 'new staff member' ),
'view_item' => _x( 'View Staff Member', 'view staff member' ),
'search_items' => _x( 'Search Staff', 'search staff' ),
'not_found' => _x( 'There are currently no staff members.', 'there are currently no staff members.' ),
'not_found_in_trash' => _x( 'Not found in Trash', 'not found in trash' ),
'parent_item_colon' => _x( 'Staff:', 'staff:' ),
'menu_name' => _x( 'Staff', 'staff' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Custom post type for Staff.',
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
register_post_type( 'staff', $args );
}

/* Resources -- Custom Post Type */
add_action( 'init', 'register_cpt_resources' );
function register_cpt_resources() {
$labels = array(
'name' => _x( 'Resources', 'resources' ),
'singular_name' => _x( 'Resource', 'resource' ),
'add_new' => _x( 'Add New Resource', 'add new resource' ),
'add_new_item' => _x( 'Add New Resource', 'add new resource' ),
'edit_item' => _x( 'Edit Resources', 'edit resources' ),
'new_item' => _x( 'New Resource', 'new resource' ),
'view_item' => _x( 'View Resource', 'view resource' ),
'search_items' => _x( 'Search Resources', 'search resources' ),
'not_found' => _x( 'Resource was Not Found', 'resource was not found' ),
'not_found_in_trash' => _x( 'Not found in Trash', 'not found in trash' ),
'parent_item_colon' => _x( 'Parent Resource:', 'parent resource:' ),
'menu_name' => _x( 'Resources', 'resources' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Custom post type for Resources.',
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
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'menu_icon' => 'dashicons-book',
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
register_post_type( 'resources', $args );
}

/* Change the preset Wordpress sidebar label */
/* 'Posts'  --> 'Announcements' */
function change_post_menu_label() {
    	global $menu;
    	global $submenu;
    	$menu[5][0] = 'Announcements';
    	$submenu['edit.php'][5][0] = 'Announcements';
    	$submenu['edit.php'][10][0] = 'Add Announcement';
    	$submenu['edit.php'][15][0] = NULL; // Change name for categories
    	$submenu['edit.php'][16][0] = NULL; // Change name for tags
    	echo '';
}
function change_post_object_label() {
    	global $wp_post_types;
    	$labels = &$wp_post_types['post']->labels;
    	$labels->name = 'Announcements';
    	$labels->singular_name = 'Announcement';
    	$labels->add_new = 'Add New Announcement';
    	$labels->add_new_item = 'Add New Announcement';
    	$labels->edit_item = 'Edit Announcements';
    	$labels->new_item = 'New Announcement';
    	$labels->view_item = 'View Announcement';
    	$labels->search_items = 'Search Announcements';
    	$labels->not_found = 'No Announcements found';
    	$labels->not_found_in_trash = 'No Announcements found in Trash';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

// CUSTOMIZE ADMIN MENU ORDER
function custom_menu_order($menu_ord) {
      if (!$menu_ord) return true;
      return array(
      'index.php', // dashboard tab
      'edit.php', // posts tab
      'edit.php?post_type=employees',  // employees tab
      'edit.php?post_type=resources',  // resources tab
      'upload.php', // media tab
    	);
}

// Remove the option to add new user or media item from top bar in wp-admin
function remove_topbar_new_items ( $wp_admin_bar ) {
    	$wp_admin_bar->remove_node( 'new-user' );
    	$wp_admin_bar->remove_node( 'new-media' );
    	$wp_admin_bar->remove_node( 'new-post' );
    	$wp_admin_bar->remove_node( 'new-page' );
}
add_action( 'admin_bar_menu', 'remove_topbar_new_items', 999 );

// Removes the 'Advanced Custom Fields-Sidebar-Item' in WPAdmin
function remove_acf_menu() {
	remove_menu_page('edit.php?post_type=acf');
}
add_action( 'admin_menu', 'remove_acf_menu', 999);

//  Remove Unwanted Menu Bar Items from WPAdmin
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');

function remove_admin_menu_items() {
	$remove_menu_items = array(__('Media'),__('Plugins'),__('Comments'),__('Dashboard'),__('Users'),__('Tools'),__('Pages'),__('Appearance'),__('Settings'),/*__(''),*/);
	global $menu;
	end ($menu);
	while (prev($menu)){
		$item = explode(' ',$menu[key($menu)][0]);
		if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
		unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_admin_menu_items');
?>