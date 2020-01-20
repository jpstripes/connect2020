<?php

add_action('init', function () {
  register_post_type(SUPPORTER_OPERATION_POST_TYPE, array(
    'labels' => array(
      'name' => 'Supporters (Operation)',
      'singular_name' => 'Supporter (Operation)'
    ),
    'public' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'capability_type' => 'post',
    'menu_position' => 8,
    'show_in_rest' => true,
    'supports' => [
      'title',
      'editor',
      'custom-fields',
      'thumbnail',
      'excerpt',
    ]
  ));
});
