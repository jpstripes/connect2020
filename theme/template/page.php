<?php
get_header();

switch($post->post_name) {
  case 'news': {
    include(get_template_directory().'/template-parts/news.php');
  }
}

get_footer();
