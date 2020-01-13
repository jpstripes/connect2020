<?php
/**
 * Configure admin UIs.
 */

/**
 * Selectively hide admin menus.
 */
function my_remove_admin_menus()
{
  remove_menu_page('edit-comments.php');
}

add_action('admin_init', 'my_remove_admin_menus');
