<?php
switch (get_post_type($post->ID)) {
  case SESSION_POST_TYPE:
    include_once get_template_directory() . '/posts/session.php';
    break;

  // TODO: might cause high load when post grows.
  // Consider to refactor to get the post once, then match with the categories.
  case in_category(SPONSOR_PLATINUM, $post->ID):
  case in_category(SPONSOR_GOLD, $post->ID):
  case in_category(SPONSOR_SILVER, $post->ID):
    include_once get_template_directory() . '/posts/sponsor.php';
    break;

  case in_category(NEWS_CATEGORY, $post->ID):
    include_once get_template_directory() . '/posts/news.php';
    break;

  default:
    include_once get_template_directory() . '/_includes/subpage-header.php';
    include_once get_template_directory() . '/posts/default.php';
    break;
}
