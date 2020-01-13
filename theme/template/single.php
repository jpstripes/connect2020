<?php
get_header();

switch(get_post_type($post->ID)) {
  case 'post': {
    include(get_template_directory().'/template-parts/post.php');
  }
}

get_footer();
?>
