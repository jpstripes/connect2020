<?php
get_header();

switch($post->post_name) {
  case NEWS_CATEGORY: {
    include(get_template_directory().'/template-parts/news.php');
  }

  default: {
    include(get_template_directory().'/template-parts/page-default.php');
  }
}

get_footer();
