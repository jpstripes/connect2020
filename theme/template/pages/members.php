<?php
/**
 * List of Supporters
 */

// Retrieve all posts.
$posts = get_posts([
  'post_type' => MEMBER_POST_TYPE,
  'post_status' => 'publish',
  'numberposts' => -1
]); ?>
<section class="wrapper">
  <div class="container">
    <div class="row supporter__list supporter__list--special">
      <?php foreach ($posts as $p): ?>
        <div class="col-12 col-sm-3">
          <a class="supporter__summary" href="<?= get_permalink($p->ID) ?>">
            <?php $thumbnail = get_the_post_thumbnail_url($p->ID); ?>
            <?php if ($thumbnail): ?>
              <img class="supporter__summary-image img-fluid" src="<?= $thumbnail ?>">
            <?php else: ?>
              <img class="supporter__summary-image img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">
            <?php endif; ?>

            <p class="supporter__summary-name">
              <?= $p->post_title ?>
            </p>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
