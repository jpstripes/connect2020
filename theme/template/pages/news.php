<?php
/**
 * News page
 */

// Resolve `news` category.
$cat = get_category_by_slug(NEWS_CATEGORY);

// Retrieve all posts.
$posts = get_posts([
  'category' => $cat->cat_ID
]);
?>
<section class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <?php foreach ($posts as $p): ?>
          <div class="row teaser">
            <div class="col-12 col-sm-2 teaser__aside">
              <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">

              <div class="teaser__date">
                <?= mb_substr(wp_date($p->post_date), 0, 10) ?>
              </div>
            </div>

            <div class="col-12 col-sm-10">
              <h2 class="teaser__title">
                <?= $p->post_title ?>
              </h2>

              <p class="teaser__summary">
                <?= wp_strip_all_tags($p->post_content) ?>
              </p>

              <a class="btn btn-primary" href="<?= get_permalink($p->ID) ?>">
                Read more..
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>