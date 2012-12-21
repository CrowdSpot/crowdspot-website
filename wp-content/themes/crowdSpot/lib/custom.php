<?php

// Custom functions

/* Add this code to functions.php file in your theme */
register_sidebar(array(
'name' => 'Footer Widget 1',
'id'        => 'footer-1',
'description' => 'First footer widget area',
'before_widget' => '<div id="footer-widget1">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
register_sidebar(array(
'name' => 'Footer Widget 2',
'id'        => 'footer-2',
'description' => 'Second footer widget area',
'before_widget' => '<div id="footer-widget2">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
register_sidebar(array(
'name' => 'Footer Widget 3',
'id'        => 'footer-3',
'description' => 'Third footer widget area',
'before_widget' => '<div id="footer-widget3">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

register_sidebar(array(
'name' => 'Footer Widget 4',
'id'        => 'footer-4',
'description' => 'forth footer widget area',
'before_widget' => '<div id="footer-widget4">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

	add_action('init', 'project_custom_init');
	/*-- Custom Post Init Begin --*/
	function project_custom_init()
	{
	  $labels = array(
		'name' => _x('Projects', 'post type general name'),
		'singular_name' => _x('Project', 'post type singular name'),
		'add_new' => _x('Add New', 'project'),
		'add_new_item' => __('Add New Project'),
		'edit_item' => __('Edit Project'),
		'new_item' => __('New Project'),
		'view_item' => __('View Project'),
		'search_items' => __('Search Projects'),
		'not_found' =>  __('No projects found'),
		'not_found_in_trash' => __('No projects found in Trash'),
		'parent_item_colon' => '',
		'menu_name' => 'Project'
	  );
	 $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments')
	  );
	  // The following is the main step where we register the post.
	  register_post_type('project',$args);
	  // Initialize New Taxonomy Labels
	  $labels = array(
		'name' => _x( 'Tags', 'taxonomy general name' ),
		'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Types' ),
		'all_items' => __( 'All Tags' ),
		'parent_item' => __( 'Parent Tag' ),
		'parent_item_colon' => __( 'Parent Tag:' ),
		'edit_item' => __( 'Edit Tags' ),
		'update_item' => __( 'Update Tag' ),
		'add_new_item' => __( 'Add New Tag' ),
		'new_item_name' => __( 'New Tag Name' ),
	  );
		// Custom taxonomy for Project Tags
		register_taxonomy('tagportfolio',array('project'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'tag-portfolio' ),
	  ));
	}
	/*-- Custom Post Init Ends --*/




	add_action('init', 'feature_custom_init');
	/*-- Custom Post Init Begin --*/
	function feature_custom_init()
	{
	  $labels = array(
		'name' => _x('features', 'post type general name'),
		'singular_name' => _x('feature', 'post type singular name'),
		'add_new' => _x('Add New', 'feature'),
		'add_new_item' => __('Add New feature'),
		'edit_item' => __('Edit feature'),
		'new_item' => __('New feature'),
		'view_item' => __('View feature'),
		'search_items' => __('Search features'),
		'not_found' =>  __('No features found'),
		'not_found_in_trash' => __('No features found in Trash'),
		'parent_item_colon' => '',
		'menu_name' => 'Home Feature'
	  );
	 $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments')
	  );
	  // The following is the main step where we register the post.
	  register_post_type('feature',$args);
	  // Initialize New Taxonomy Labels
	  $labels = array(
		'name' => _x( 'Tags', 'taxonomy general name' ),
		'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Types' ),
		'all_items' => __( 'All Tags' ),
		'parent_item' => __( 'Parent Tag' ),
		'parent_item_colon' => __( 'Parent Tag:' ),
		'edit_item' => __( 'Edit Tags' ),
		'update_item' => __( 'Update Tag' ),
		'add_new_item' => __( 'Add New Tag' ),
		'new_item_name' => __( 'New Tag Name' ),
	  );
		
	}
	/*-- Custom Post Init Ends --*/




	function enqueue_filterable()
	{
		wp_register_script( 'filterable', get_template_directory_uri() . '/assets/js/filterable.js', array( 'jquery' ) );
		wp_enqueue_script( 'filterable' );
	}
	add_action('wp_enqueue_scripts', 'enqueue_filterable');



function excerpt($num) {
    $limit = $num+1;
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt)."... (<a href='" .get_permalink($post->ID) ." '>Read more</a>)";
    echo $excerpt;
}
