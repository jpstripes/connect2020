<?php
/**
 * List of Speakers
 */

$cats = [
  SPEAKER_SPONSORED => get_category_by_slug(SPEAKER_SPONSORED),
  SPEAKER_COMMUNITY => get_category_by_slug(SPEAKER_COMMUNITY)
];

// Retrieve all posts.
$posts = [
  SPEAKER_SPONSORED => get_posts([
    'category' => $cats[SPEAKER_SPONSORED]->cat_ID
  ]),
  SPEAKER_COMMUNITY => get_posts([
    'category' => $cats[SPEAKER_COMMUNITY]->cat_ID
  ])
];
?>
<section class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="speaker__header">
          Sponsored Speakers
        </h1>
      </div>
    </div>

    <div class="row speaker__list">
      <?php foreach ($posts[SPEAKER_SPONSORED] as $p): ?>
        <div class="col-6 col-sm-3">
          <a class="speaker__summary" href="<?= get_permalink($p->ID) ?>">
            <img class="speaker__summary-image img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">

            <p class="speaker__summary-name">
              <?= $p->post_title ?>
            </p>

            <p class="speaker__summary-message">
              <?= wp_strip_all_tags($p->post_content) ?>
            </p>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="speaker__header">
          Community Speakers
        </h1>
      </div>
    </div>

    <div class="row speaker__list">
      <?php foreach ($posts[SPEAKER_COMMUNITY] as $p): ?>
        <div class="col-6 col-sm-3">
          <a class="speaker__summary" href="<?= get_permalink($p->ID) ?>">
            <img class="speaker__summary-image img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">

            <p class="speaker__summary-name">
              <?= $p->post_title ?>
            </p>

            <p class="speaker__summary-message">
              <?= wp_strip_all_tags($p->post_content) ?>
            </p>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
