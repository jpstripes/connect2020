<?php

add_action('init', function () {
  register_post_type(SUPPORTER_PLATINUM_POST_TYPE, array(
    'labels' => array(
      'name' => 'Supporters (Platinum)',
      'singular_name' => 'Supporter (Platinum)'
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
