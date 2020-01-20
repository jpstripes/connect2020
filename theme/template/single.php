<?php
switch (get_post_type($post->ID)) {
  case SESSION_POST_TYPE:
    include_once get_template_directory() . '/posts/session.php';
    break;

  case SUPPORTER_PLATINUM_POST_TYPE:
  case SUPPORTER_GOLD_POST_TYPE:
  case SUPPORTER_SILVER_POST_TYPE:
  case SUPPORTER_OPERATION_POST_TYPE:
    include_once get_template_directory() . '/posts/supporter.php';
    break;

  case in_category(NEWS_CATEGORY, $post->ID):
    include_once get_template_directory() . '/posts/news.php';
    break;

  default:
    include_once get_template_directory() . '/_includes/subpage-header.php';
    include_once get_template_directory() . '/posts/default.php';
    break;
}
