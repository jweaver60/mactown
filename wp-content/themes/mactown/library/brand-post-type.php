<?php

// let's create the function for the custom type
function create_brand_post_type() { 
	// creating (registering) the custom type 
	register_post_type( 'brand', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Brands', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Brand', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Brands', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Brand', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Brands', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Brand', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Brand', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Brand', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Custom post type for brands', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/box.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'brand', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'brand', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'thumbnail' )
	 	) /* end of options */
	); /* end of register post type */
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'create_brand_post_type');
?>
