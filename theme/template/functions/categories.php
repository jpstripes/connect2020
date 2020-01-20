<?php
/**
 * Initializer script to add categories.
 * You must visit WP admin screen to run this step.
 */
function setup_categories()
{
  // Predefined categories.
  $categories = [
    (object) [
      'slug' => NEWS_CATEGORY,
      'title' => 'News'
    ],
    (object) [
      'slug' => SUPPORTER_PLATINUM,
      'title' => 'Supporters (Platinum)'
    ],
    (object) [
      'slug' => SUPPORTER_GOLD,
      'title' => 'Supporters (Gold)'
    ],
    (object) [
      'slug' => SUPPORTER_SILVER,
      'title' => 'Supporters (Silver)'
    ],
    (object) [
      'slug' => SUPPORTER_OPERATION,
      'title' => 'Supporters (Operation)'
    ]
  ];

  foreach ($categories as $c) {
    $exists = get_category_by_slug($c->slug);

    if ($exists) {
      continue;
    }

    $params = [
      'cat_name' => $c->title,
      'category_nicename' => $c->slug,
      'category_parent' => ''
    ];

    $got = wp_insert_category($params, true);

    if ($got->errors) {
      print_r($got);
      die(
        'failed to create category {$c->slug}, see theme functions/categories.php for more information'
      );
    }
  }
}

add_action('admin_init', 'setup_categories');
