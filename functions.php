<?php


function akash_labs_scripts()
{
  wp_enqueue_style('akash-labs-style', get_stylesheet_uri());
  wp_enqueue_script('akash-labs-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'akash_labs_scripts');




// Adds theme support for featured images
add_theme_support('post-thumbnails');




function create_post_type()
{
  register_post_type(
    'News',
    array(
      'labels' => array(
        'name' => __('News'),
        'singular_name' => __('News')
      ),
      'public' => true,
      'has_archive' => 'news',
      'supports' => array('title', 'editor', 'thumbnail')
    )
  );
}

add_action('init', 'create_post_type');

function create_taxonomies()
{
  $labels = array(
    'name' => _x('Source', 'taxonomy general name'),
    'singular_name' => _x('Source', 'taxonomy singular name'),
    'search_items' =>  __('Search Sources'),
    'all_items' => __('All Sources'),
    'parent_item' => __('Parent Source'),
    'parent_item_colon' => __('Parent Source:'),
    'edit_item' => __('Edit Source'),
    'update_item' => __('Update Source'),
    'add_new_item' => __('Add New Source'),
    'new_item_name' => __('New Source Name'),
    'menu_name' => __('Sources'),
  );

  register_taxonomy('Sources', array('books'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'Source'),
  ));
}

add_action('init', 'create_taxonomies', 0);
