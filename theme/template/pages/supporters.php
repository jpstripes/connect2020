<?php
/**
 * List of Supporters
 */

// Retrieve all posts.
$posts = [
  SUPPORTER_PLATINUM_POST_TYPE => get_posts([
    'post_type' => SUPPORTER_PLATINUM_POST_TYPE,
    'post_status' => 'publish',
    'numberposts' => -1
  ]),
  SUPPORTER_GOLD_POST_TYPE => get_posts([
    'post_type' => SUPPORTER_GOLD_POST_TYPE,
    'post_status' => 'publish',
    'numberposts' => -1
  ]),
  SUPPORTER_SILVER_POST_TYPE => get_posts([
    'post_type' => SUPPORTER_SILVER_POST_TYPE,
    'post_status' => 'publish',
    'numberposts' => -1
  ]),
  SUPPORTER_OPERATION_POST_TYPE => get_posts([
    'post_type' => SUPPORTER_OPERATION_POST_TYPE,
    'post_status' => 'publish',
    'numberposts' => -1
  ])
]; ?>
<section class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="supporter__header">
          Platinum Supporters
        </h1>
      </div>
    </div>

    <div class="row supporter__list supporter__list--platinum">
      <?php if ($posts[SUPPORTER_PLATINUM_POST_TYPE]): ?>
        <?php foreach ($posts[SUPPORTER_PLATINUM_POST_TYPE] as $p): ?>
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
      <?php else: ?>
        <a class="btn btn-lg btn-danger" href="/support-us/">
          サポーター募集中！
        </a>
      <?php endif; ?>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="supporter__header">
          Gold Supporters
        </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <div class="row supporter__list supporter__list--gold">
          <?php if ($posts[SUPPORTER_GOLD_POST_TYPE]): ?>
            <?php foreach ($posts[SUPPORTER_GOLD_POST_TYPE] as $p): ?>
              <div class="col-6 col-sm-3">
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
          <?php else: ?>
            <a class="btn btn-lg btn-danger" href="/support-us/">
              サポーター募集中！
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="supporter__header">
          運営協力 Supporters
        </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <div class="row supporter__list supporter__list--gold">
          <?php foreach ($posts[SUPPORTER_OPERATION_POST_TYPE] as $p): ?>
            <div class="col-6 col-sm-3">
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
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="supporter__header">
          Silver Supporters
        </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <div class="row supporter__list supporter__list--gold">
          <?php if ($posts[SUPPORTER_SILVER_POST_TYPE]): ?>
            <?php foreach ($posts[SUPPORTER_SILVER_POST_TYPE] as $p): ?>
              <div class="col-4 col-sm-2">
                <a class="supporter__summary" href="<?= get_permalink($p->ID) ?>">
                  <?php $thumbnail = get_the_post_thumbnail_url($p->ID); ?>
                  <?php if ($thumbnail): ?>
                    <img class="supporter__summary-image img-fluid" src="<?= $thumbnail ?>">
                  <?php else: ?>
                    <img class="supporter__summary-image img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">
                  <?php endif; ?>
                </a>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <a class="btn btn-lg btn-danger" href="/support-us/">
              サポーター募集中！
            </a>
          <?php endif; ?>

          <?php if ($posts[SUPPORTER_SILVER_POST_TYPE]): ?>
            <footer class="col-12">
              <hr>

              <div class="col-12 col-sm-6 offset-sm-3">
                <p class="text-center">
                  サポーターになって一緒にイベントを盛り上げませんか？
                </p>

                <a class="btn btn-block btn-lg btn-primary" href="/supporters">
                  サポーターになる！
                </a>
              </div>
            </footer>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
