<?php

function dons_post_types() {
  // Workshop post type
  register_post_type('workshop', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array('slug' => 'workshops'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Workshops',
      'add_new_item' => 'Add New Workshop',
      'edit_item' => 'Edit Workshop',
      'all_items' => 'All Workshops',
      'singular_name' => 'Workshop'
    ),
    'menu_icon' => 'dashicons-calendar-alt'
  ));

  // Deutsche post type
  register_post_type('deutsche', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array('slug' => 'deutsch'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Deutsche',
      'add_new_item' => 'Add New Deutsche',
      'edit_item' => 'Edit Deutsche',
      'all_items' => 'All Deutsche',
      'singular_name' => 'Deutsche'
    ),
    'menu_icon' => 'dashicons-format-aside'
  ));

   // Vlog post type
  register_post_type('vlog', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'vlog'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Vlog',
      'add_new_item' => 'Add New Vlog',
      'edit_item' => 'Edit Vlog',
      'all_items' => 'All Vlog',
      'singular_name' => 'Vlog'
    ),
    'menu_icon' => 'dashicons-video-alt2'
  ));

}

add_action('init', 'dons_post_types');

