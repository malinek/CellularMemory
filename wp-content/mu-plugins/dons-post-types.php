<?php

function dons_post_types() {
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
}

add_action('init', 'dons_post_types');

