<?php

// let's create the function for the custom type
function create_updates_post_type() { 
	// creating (registering) the custom type 
	register_post_type( 'update', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Updates', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Update', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Updates', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Update', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Updates', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Update', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Update', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Update', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Custom post type for updates', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/flag.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'update', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'update', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor' )
	 	) /* end of options */
	); /* end of register post type */
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'create_updates_post_type');

?>
