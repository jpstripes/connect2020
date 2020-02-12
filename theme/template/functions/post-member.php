<?php

add_action('init', function () {
  register_post_type(MEMBER_POST_TYPE, array(
    'labels' => array(
      'name' => 'Members',
      'singular_name' => 'Member'
    ),
    'public' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'capability_type' => 'post',
    'menu_position' => 4,
    'show_in_rest' => true,
    'supports' => ['title', 'editor', 'custom-fields', 'thumbnail', 'excerpt']
  ));
});
