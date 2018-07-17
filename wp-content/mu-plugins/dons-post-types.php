<?php

function dons_post_types() {
  // Workshop post type
  register_post_type('workshop', array(
    'supports' => array('title', 'editor', 'excerpt'),
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

  // Publications post type
  register_post_type('publication', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array('slug' => 'publications'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Publications',
      'add_new_item' => 'Add New Publication',
      'edit_item' => 'Edit Publication',
      'all_items' => 'All Publications',
      'singular_name' => 'Publication'
    ),
    'menu_icon' => 'dashicons-format-aside'
  ));
}

add_action('init', 'dons_post_types');

