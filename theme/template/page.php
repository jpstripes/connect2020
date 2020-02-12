<?php
get_header();
include_once get_template_directory() . '/_includes/subpage-header.php';

switch ($post->post_name) {
  case NEWS_CATEGORY:
    include_once get_template_directory() . '/pages/news.php';
    break;

  case MEMBERS_PAGE:
    include_once get_template_directory() . '/pages/members.php';
    get_footer();
    break;

  case SUPPORTERS_PAGE:
    include_once get_template_directory() . '/pages/supporters.php';
    get_footer();
    break;

  case SUPPORTERS_PAGE:
    include_once get_template_directory() . '/pages/supporters.php';
    get_footer();
    break;

  case TIMETABLE_PAGE:
    include_once get_template_directory() . '/pages/timetable.php';
    break;

  default:
    include_once get_template_directory() . '/pages/default.php';
    get_footer();
    break;
}

get_footer();
