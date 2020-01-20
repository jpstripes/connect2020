<?php

add_action('init', function () {
  register_post_type(SUPPORTER_SILVER_POST_TYPE, array(
    'labels' => array(
      'name' => 'Supporters (Silver)',
      'singular_name' => 'Supporter (Silver)'
    ),
    'public' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'capability_type' => 'post',
    'menu_position' => 7,
    'show_in_rest' => true,
    'supports' => ['title', 'editor', 'custom-fields', 'thumbnail', 'excerpt']
  ));
});
