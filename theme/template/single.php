<?php
get_header();

switch (get_post_type($post->ID)) {
  // TODO: might cause high load when post grows.
  // Consider to refactor to get the post once, then match with the categories.
  case in_category(SPONSOR_PLATINUM, $post->ID):
  case in_category(SPONSOR_GOLD, $post->ID):
  case in_category(SPONSOR_SILVER, $post->ID):
    include get_template_directory() . '/posts/sponsor.php';
    break;

  default:
    include get_template_directory() . '/posts/default.php';
    break;
}

get_footer();
