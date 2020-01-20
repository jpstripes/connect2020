<?php

add_action('init', function () {
  register_post_type(SUPPORTER_GOLD_POST_TYPE, array(
    'labels' => array(
      'name' => 'Supporters (Gold)',
      'singular_name' => 'Supporter (Gold)'
    ),
    'public' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'capability_type' => 'post',
    'menu_position' => 6,
    'show_in_rest' => true,
    'supports' => ['title', 'editor', 'custom-fields', 'thumbnail', 'excerpt']
  ));
});
