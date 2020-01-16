<?php
/**
 * OpenGraph Metadata
 */
$sitename = get_bloginfo('name');
$pagename = get_the_title();

// Fallback to sitename.
if(!$pagename) {
  $pagename = $sitename;
}

$og_url = get_the_post_thumbnail_url(null, 'large');

// Fallback to placeholder.
if(!$og_url) {
  $og_url = get_stylesheet_directory_uri().'/assets/images/opengraph.png';
}

$description = get_the_excerpt();

if(!$description) {
  $description = get_bloginfo('description');
}
?>
<meta property="og:type" content="website">
<meta property="og:locale" content="ja_JP">
<meta property="og:site_name" content="<?= $sitename; ?>">
<meta property="og:title" content="<?= $pagename; ?>">
<meta property="og:url" content="<?= get_permalink(); ?>">
<meta property="og:description" content="<?= $description ?>">
<meta property="og:image" content="<?= $og_url ?>">
