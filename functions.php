<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 *
 */


//Register style in functions
function add_style(){
	wp_enqueue_style('style',get_template_directory_uri()."/styles.css");
}
add_action('wp_enqueue_scripts','add_style');

  //Register Post Type (add imagee)
function add_image(){
	add_theme_support('post-thumbnails');
}


  //Drink
  function drink_post_type() {
   
  // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Drink', 'Post Type General Name', 'drink' ),
          'singular_name'       => _x( 'Drink', 'Post Type Singular Name', 'drink' ),
          'menu_name'           => __( 'Drink', 'drink' ),
          'parent_item_colon'   => __( 'Parent Drink', 'drink' ),
          'all_items'           => __( 'All Drink', 'drink' ),
          'view_item'           => __( 'View Drink', 'drink' ),
          'add_new_item'        => __( 'Add New Drink', 'drink' ),
          'add_new'             => __( 'Add New', 'drink' ),
          'edit_item'           => __( 'Edit Drink', 'drink' ),
          'update_item'         => __( 'Update Drink', 'drink' ),
          'search_items'        => __( 'Search Drink', 'drink' ),
          'not_found'           => __( 'Not Found', 'drink' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'drink' ),
      );
       
  // Set other options for Custom Post Type
       
      $args = array(
          'label'               => __( 'drink', 'drink' ),
          'description'         => __( 'Drink news and reviews', 'drink' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt','custom-fields','page-attributes'),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */ 
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'post',
          //'taxonomies' => array('category','post_tag'),
          'show_in_rest' => true,
   
      );
       
      // Registering your Custom Post Type
      register_post_type( 'drink', $args );
   
  }
   
  /* Hook into the 'init' action so that the function
  * Containing our post type registration is not 
  * unnecessarily executed. 
  */
   
  add_action( 'init', 'drink_post_type', 0 );
  //Drink category
    function drink_taxonomy() {

        register_taxonomy(
            'drink-category',
            'drink',
            array(

                'label' => __( 'Drink category' ),
                'rewrite' => array( 'slug' => 'drink-category' ),
                'hierarchical' => true,
            )
        );
    }
    add_action( 'init', 'drink_taxonomy' );



  //Food
  function food_post_type() {
   
  // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Food', 'Post Type General Name', 'food' ),
          'singular_name'       => _x( 'Food', 'Post Type Singular Name', 'food' ),
          'menu_name'           => __( 'Food', 'food' ),
          'parent_item_colon'   => __( 'Food Partner', 'food' ),
          'all_items'           => __( 'All Food', 'food' ),
          'view_item'           => __( 'View Food', 'food' ),
          'add_new_item'        => __( 'Add New Food', 'food' ),
          'add_new'             => __( 'Add New', 'food' ),
          'edit_item'           => __( 'Edit Food', 'food' ),
          'update_item'         => __( 'Update Food', 'food' ),
          'search_items'        => __( 'Search Food', 'food' ),
          'not_found'           => __( 'Not Found', 'food' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'food' ),
      );
       
  // Set other options for Custom Post Type
       
      $args = array(
          'label'               => __( 'food', 'food' ),
          'description'         => __( 'food news and reviews', 'food' ),
          'labels'              => $labels,
          'menu_icon'          => 'dashicons-star-half',
          'rewrite'            => array( 'slug' => 'food' ),
          // Features this CPT supports in Post Editor
          'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','hierarchical','trackbacks','custom-fields','revisions','page-attributes'),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */ 
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'post',
          'taxonomies' => array('post_tag'),
          'show_in_rest' => true,
   
      );
       
      // Registering your Custom Post Type
      register_post_type( 'food', $args );
   
  }
   
  add_action( 'init', 'food_post_type', 0 );
   
//food page  
  function tr_create_my_taxonomy() {

      register_taxonomy(
          'food-category',
          'food',
          array(
              'label' => __( 'Food category' ),
              'rewrite' => array( 'slug' => 'food-category' ),
              'hierarchical' => true,
          )
      );
  }
  add_action( 'init', 'tr_create_my_taxonomy' );


  

  