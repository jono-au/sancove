<?php

namespace Roots\Sage\Forms;

// Register Custom Post Type
function forms_post_type()
{

  $labels = array(
    'name'                  => _x('Forms', 'Post Type General Name', 'sage'),
    'singular_name'         => _x('Forms', 'Post Type Singular Name', 'sage'),
    'menu_name'             => __('Forms PDF', 'sage'),
    'name_admin_bar'        => __('Forms PDF', 'sage'),
    'archives'              => __('Forms Archives', 'sage'),
    'attributes'            => __('Forms Attributes', 'sage'),
    'parent_item_colon'     => __('Parent Item:', 'sage'),
    'all_items'             => __('Forms', 'sage'),
    'add_new_item'          => __('Add New Forms', 'sage'),
    'add_new'               => __('Add New Forms', 'sage'),
    'new_item'              => __('New Forms', 'sage'),
    'edit_item'             => __('Edit Forms', 'sage'),
    'update_item'           => __('Update Forms', 'sage'),
    'view_item'             => __('View Forms', 'sage'),
    'view_items'            => __('View Forms', 'sage'),
    'search_items'          => __('Search Forms', 'sage'),
    'not_found'             => __('Not found', 'sage'),
    'not_found_in_trash'    => __('Not found in Trash', 'sage'),
    'featured_image'        => __('Featured Image', 'sage'),
    'set_featured_image'    => __('Set featured image', 'sage'),
    'remove_featured_image' => __('Remove featured image', 'sage'),
    'use_featured_image'    => __('Use as featured image', 'sage'),
    'insert_into_item'      => __('Insert into Forms', 'sage'),
    'uploaded_to_this_item' => __('Uploaded to this Forms', 'sage'),
    'items_list'            => __('Forms', 'sage'),
    'items_list_navigation' => __('Forms navigation', 'sage'),
    'filter_items_list'     => __('Filter Forms', 'sage'),
  );
  $rewrite = array(
		'slug'                  => 'forms',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Forms', 'sage' ),
		'description'           => __( 'Find community Forms around your area', 'sage' ),
    'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'forms-category' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
		'capability_type'       => 'post',
    'show_in_rest'          => true,
    'menu_icon'             => 'dashicons-media-document',
	);

  
  register_post_type('forms', $args);
}
add_action('init', __NAMESPACE__ . '\\forms_post_type', 0);

// Register Forms Category Taxonomy
function forms_category_taxonomy()
{

  $labels = array(
    'name'                       => _x('Forms Categories', 'Taxonomy General Name', 'sage'),
    'singular_name'              => _x('Forms Category', 'Taxonomy Singular Name', 'sage'),
    'menu_name'                  => __('Forms Categories', 'sage'),
    'all_items'                  => __('All Forms Categories', 'sage'),
    'parent_item'                => __('Parent Forms Category', 'sage'),
    'parent_item_colon'          => __('Parent Forms Category:', 'sage'),
    'new_item_name'              => __('New Forms Category Name', 'sage'),
    'add_new_item'               => __('Add New Forms Category', 'sage'),
    'edit_item'                  => __('Edit Forms Category', 'sage'),
    'update_item'                => __('Update Forms Category', 'sage'),
    'view_item'                  => __('View Forms Category', 'sage'),
    'separate_items_with_commas' => __('Separate items with commas', 'sage'),
    'add_or_remove_items'        => __('Add or remove items', 'sage'),
    'choose_from_most_used'      => __('Choose from the most used', 'sage'),
    'popular_items'              => __('Popular Forms Category', 'sage'),
    'search_items'               => __('Search Forms Category', 'sage'),
    'not_found'                  => __('Not Found', 'sage'),
    'no_terms'                   => __('No items', 'sage'),
    'items_list'                 => __('Forms Category list', 'sage'),
    'items_list_navigation'      => __('Forms Category list navigation', 'sage'),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'has_archive'                => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'show_in_rest'               => true,
    'rewrite'                    => array(
      'slug'       => 'form-category',
    ),
  );
  register_taxonomy('forms-category', array('forms'), $args);
}
add_action('init', __NAMESPACE__ . '\\forms_category_taxonomy', 0);
