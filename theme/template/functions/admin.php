<?php
/**
 * Selectively hide admin menus.
 */
add_action('admin_init', function () {
  remove_menu_page('edit-comments.php');
});

/**
 * Enable featured image metabox.
 */
add_theme_support('post-thumbnails', ['page', 'post']);

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
