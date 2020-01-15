<?php

add_action('init', function () {
  register_post_type('session', array(
    'labels' => array(
      'name' => 'Sessions',
      'singular_name' => 'Session'
    ),
    'public' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'capability_type' => 'post',
    'menu_position' => 3,
    'show_in_rest' => true,
    'supports' => ['title', 'editor', 'custom-fields'],
    'template' => [
      [
        'core/heading',
        [
          'content' => '講演内容'
        ]
      ],
      ['core/paragraph'],
      ['events/speaker']
    ]
  ));
});
