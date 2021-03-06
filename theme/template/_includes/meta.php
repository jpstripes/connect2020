<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php if (is_home() || is_front_page()): ?>
  <title><?= get_bloginfo('name') ?></title>
<?php else: ?>
  <title><?= wp_title('') ?></title>
<?php endif; ?>

<?php wp_head(); ?>
<?php include_once dirname(__FILE__) . '/meta/favicon.php'; ?>
<?php include_once dirname(__FILE__) . '/meta/opengraph.php'; ?>

<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/dist/app.css">

<script src="<?= get_template_directory_uri() ?>/assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/popper.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>

<?php
// Google Search Console
?>
<meta name="google-site-verification" content="ydEULsJL4k0PxCq9ZpIkiQOaxFZ1QFOV3QLMeQsj4Uo" />
