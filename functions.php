<?php
/* Hours of Operation (Banner on top of Head Image) -- Custom Post Type */
add_action( 'init', 'register_cpt_hours' );
function register_cpt_hours() {
$labels = array(
'name' => _x( 'Hours', 'hours' ),
'singular_name' => _x( 'Hours', 'hours' ),
'add_new' => _x( 'Add New Hours', 'add new hours' ),
'add_new_item' => _x( 'Add New Hours', 'add new hours' ),
'edit_item' => _x( 'Edit Hours', 'edit hours' ),
'new_item' => _x( 'New Hours', 'new hours' ),
'view_item' => _x( 'View Hours', 'view hours' ),
'search_items' => _x( 'Search Hours', 'search hours' ),
'not_found' => _x( 'There are currently no hours of operation set.', 'there are currently no hours of operation set.' ),
'not_found_in_trash' => _x( 'Not found in Trash', 'not found in trash' ),
'parent_item_colon' => _x( 'Hours:', 'hours:' ),
'menu_name' => _x( 'Hours of Operation', 'hours of operation' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Custom post type for Hours.',
'supports' => array(      'title',
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
'menu_icon' => 'dashicons-clock',
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
register_post_type( 'hours', $args );
}

/* Staff -- Custom Post Type */
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

/* Template Page -- Articles (Page Contents) -- Custom Post Type */
add_action( 'init', 'register_cpt_articles' );
function register_cpt_articles() {
$labels = array(
'name' => _x( 'Select a Page to Edit its Contents', 'select a page to edit its contents' ),
'singular_name' => _x( 'Article', 'article' ),
'add_new' => _x( '', '' ),
'add_new_item' => _x( 'Add New Article', 'add new article' ),
'edit_item' => _x( 'Edit Page Contents', 'edit page contents' ),
'new_item' => _x( '', '' ),
'view_item' => _x( 'View Article', 'view article' ),
'search_items' => _x( 'Search Articles', 'search articles' ),
'not_found' => _x( 'There are currently no articles.', 'there are currently no articles.' ),
'not_found_in_trash' => _x( 'Not found in Trash', 'not found in trash' ),
'parent_item_colon' => _x( 'Articles:', 'articles:' ),
'menu_name' => _x( 'Page Content', 'page content' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Custom post type for Page Contents.',
'supports' => array(      'title',
                                    'editor',
                                    'excerpt',
                                    'author',
                                    'thumbnail',
                                    'trackbacks',
                                    'custom-fields',
                                    'comments',
                                    'page-attributes',
                                    'post-formats'),
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'menu_icon' => 'dashicons-edit',
'show_in_nav_menus' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' => false,
'capability_type' => 'post'
);
add_theme_support('post-thumbnails');
register_post_type( 'articles', $args );
}

/* Announcements (Sidebar) -- Custom Post Type */
add_action( 'init', 'register_cpt_announcements' );
function register_cpt_announcements() {
$labels = array(
'name' => _x( 'Announcements', 'announcements' ),
'singular_name' => _x( 'Announcement', 'announcement' ),
'add_new' => _x( 'Add Announcement', 'add new announcement' ),
'add_new_item' => _x( 'Add New Announcement', 'add new announcement' ),
'edit_item' => _x( 'Edit Announcement', 'edit announcement' ),
'new_item' => _x( 'New Announcement', 'new announcement' ),
'view_item' => _x( 'View Announcement', 'view announcement' ),
'search_items' => _x( 'Search Announcements', 'search announcements' ),
'not_found' => _x( 'There are currently no announcements.', 'there are currently no announcements.' ),
'not_found_in_trash' => _x( 'Not found in Trash', 'not found in trash' ),
'parent_item_colon' => _x( 'Announcements:', 'announcements:' ),
'menu_name' => _x( 'Announcements', 'announcements' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Custom post type for Announcements.',
'supports' => array(      'title',
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
'menu_icon' => 'dashicons-megaphone',
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
register_post_type( 'announcements', $args );
}

// CUSTOMIZE ADMIN MENU ORDER
function custom_menu_order($menu_ord) {
            if (!$menu_ord) return true;
            return array(
            'edit.php?post_type=hours', // announcements tab
            'edit.php?post_type=announcements',  // announcements tab
            'edit.php?post_type=articles',  // staff tab
            'edit.php?post_type=staff',  // staff tab
            'edit.php?post_type=resources',  // resources tab
    	);
}

// Remove the option to add new user or media item from top bar in wp-admin
function remove_topbar_new_items ( $wp_admin_bar ) {
    	$wp_admin_bar->remove_node( 'new-user' );
    	$wp_admin_bar->remove_node( 'new-media' );
    	$wp_admin_bar->remove_node( 'new-post' );
            $wp_admin_bar->remove_node( 'new-articles' );
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
	$remove_menu_items = array(__('Posts'),__('Media'),__('Plugins'),__('Comments'),__('Dashboard'),__('Users'),__('Tools'),__('Pages'),__('Appearance'),__('Settings'),/*__(''),*/);
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