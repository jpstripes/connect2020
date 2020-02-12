<?php
/**
 * Selectively hide admin menus.
 */
add_action('admin_init', function () {
  remove_menu_page('edit-comments.php');

  // Disable Theme Editor to make the deployment idempotent.
  remove_submenu_page('themes.php', 'theme-editor.php');
});

/**
 * Enable featured image metabox.
 */
add_theme_support('post-thumbnails', [
  'page',
  'post',
  // Custom post types must listed here to enable featured images.
  MEMBER_POST_TYPE,
  SESSION_POST_TYPE,
  SUPPORTER_GOLD_POST_TYPE,
  SUPPORTER_OPERATION_POST_TYPE,
  SUPPORTER_PLATINUM_POST_TYPE,
  SUPPORTER_SILVER_POST_TYPE,
  SUPPORTER_SPECIAL_POST_TYPE
]);

/**
 * Register custom script on admin.
 */
add_action('init', function () {
  wp_register_script(
    BLOCKS['setting']['bundle'],
    get_template_directory_uri() . '/dist/admin.js',
    ['wp-blocks', 'wp-element', 'wp-data', 'wp-editor']
  );
});

/**
 * Add excerpt on pages.
 */
add_post_type_support('page', 'excerpt');
