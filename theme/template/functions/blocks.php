<?php
/**
 * Register custom blocks.
 */
add_action('init', function () {
  /**
   * events/speaker block.
   */
  register_block_type(BLOCKS['events']['speaker']['name'], [
    'editor_script' => BLOCKS['setting']['bundle']
  ]);

  // Register meta attributes.
  foreach (BLOCKS['events']['speaker']['attributes'] as $a) {
    // Registering post meta to `session` post type.
    // Using the block in the default post will not save any data
    // unless you explicitly call register_post_meta('post'..)
    register_post_meta(SESSION_POST_TYPE, $a, [
      'show_in_rest' => true,
      'single' => true,
      'type' => 'string'
    ]);
  }

  /**
   * events/speaker block.
   */
  register_block_type(BLOCKS['events']['opengraph']['name'], [
    'editor_script' => BLOCKS['setting']['bundle']
  ]);

  // Register meta attributes.
  foreach (BLOCKS['events']['opengraph']['attributes'] as $a) {
    // The first argument is blank, means this attributes are available
    // to all post types.
    register_post_meta('', $a, [
      'show_in_rest' => true,
      'single' => true,
      'type' => 'string'
    ]);
  }
});

/**
 * Inject custom block categories.
 */
add_filter(
  'block_categories',
  function ($categories, $post) {
    array_unshift($categories, [
      'slug' => BLOCKS['setting']['category'],
      'title' => 'Events',
      'icon' => 'dashicons-admin-site-alt3'
    ]);

    return $categories;
  },
  1,
  2
);

/**
 * Retrieve speaker metadata.
 */
function get_speaker_metas($id = null)
{
  $got = get_post_meta($id, null, true);

  return (object) [
    'name' => $got['name'][0],
    'company' => $got['company'][0],
    'profile' => $got['profile'][0],
    'iconUrl' => $got['iconUrl'][0],
    'twitter' => $got['twitter'][0],
    'facebook' => $got['facebook'][0]
  ];
}

/**
 * Retrieve opengraph metadata.
 */
function get_opengraph_metas($id = null)
{
  $got = get_post_meta($id, null, true);

  return (object) [
    'imageUrl' => $got['imageUrl'][0],
    'facebookMessage' => $got['facebookMessage'][0],
    'twitterMessage' => $got['twitterMessage'][0]
  ];
}
