<?php
/**
 * OpenGraph Metadata
 */
$sitename = get_bloginfo('name');
$pagename = is_front_page() ? get_bloginfo('name') : get_the_title();

// Fallback to sitename.
if (!$pagename) {
  $pagename = $sitename;
}

$og_url = get_the_post_thumbnail_url(null, 'full');

// Fallback to placeholder.
if (!$og_url) {
  $og_url =
    get_template_directory_uri() . '/assets/images/opengraph/default.png';
}

// Ensure Open Graph image has FQDN, since it may start with absolute path.
if (strpos($og_url, 'http') === false) {
  $og_url = get_bloginfo('url') . $og_url;
}

$description = is_front_page()
  ? get_bloginfo('description')
  : get_the_excerpt();

if (!$description) {
  $description = get_bloginfo('description');
}

$page_url = is_front_page() ? get_bloginfo('url') : get_permalink();

$datetime = 'Y-m-d\TH:i:s';
$published_at = get_post_time($datetime, false, $post->ID) . '+00:00';
$updated_at = get_post_modified_time($datetime, false, $post->ID) . '+00:00';
?>
<meta property="og:type" content="article">
<meta property="og:locale" content="ja_JP">
<meta property="og:site_name" content="<?= $sitename ?>">
<meta property="og:title" content="<?= $pagename ?>">
<meta property="og:description" content="<?= $description ?>">
<meta property="og:url" content="<?= $page_url ?>">
<meta property="og:image" content="<?= $og_url ?>">
<meta property="og:image:url" content="<?= $og_url ?>">
<meta property="og:updated_time" content="<?= $updated_at ?>">
<meta property="article:published_time" content="<?= $published_at ?>">
<meta property="article:modified_time" content="<?= $updated_at ?>">

<?php
// Twitter Cards
?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@jpstripes">

<?php
// Facebook Card
?>
<meta name="fb:app_id" content="1826257457627959">
