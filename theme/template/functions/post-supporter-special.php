<?php

add_action('init', function () {
  register_post_type(SUPPORTER_SPECIAL_POST_TYPE, array(
    'labels' => array(
      'name' => 'Supporters (Special)',
      'singular_name' => 'Supporter (Special)'
    ),
    'public' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'capability_type' => 'post',
    'menu_position' => 5,
    'show_in_rest' => true,
    'supports' => ['title', 'editor', 'custom-fields', 'thumbnail', 'excerpt']
  ));
});
