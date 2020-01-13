<?php
get_header();

switch ($post->post_name) {
  case NEWS_CATEGORY:
    include get_template_directory() . '/pages/news.php';
    break;

  case SPONSORS_PAGE:
    include get_template_directory() . '/pages/sponsors.php';
    get_footer();
    break;

  default:
    include get_template_directory() . '/pages/default.php';
    get_footer();
    break;
}

get_footer();
