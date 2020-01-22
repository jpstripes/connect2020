<?php get_header(); ?>

<?php
$thumbnail = get_the_post_thumbnail_url($post->ID);
$url = get_post_meta($post->ID, 'url', true);
?>

<header class="header header--subpage">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="subpage__hero">
          <h1 class="subpage__hero-title">
            サポーター
          </h1>
        </section>
      </div>
    </div>
  </div>
</header>

<section class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-4">
        <?php if ($thumbnail): ?>
          <?php if ($url): ?>
            <a href="<?= $url ?>" target="_blank">
              <img class="img-fluid" src="<?= $thumbnail ?>">
            </a>
          <?php else: ?>
            <img class="img-fluid" src="<?= $thumbnail ?>">
          <?php endif; ?>
        <?php else: ?>
          <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">
        <?php endif; ?>
      </div>

      <div class="col-12 col-sm-8">
        <main class="article">
          <header class="article__header">
            <h1 class="article__header-title">
              <?= get_the_title($post->ID) ?>
            </h1>

            <?php if ($url): ?>
              <a class="article__header-url" href="<?= $url ?>" target="_blank">
                <?= $url ?>
              </a>
            <?php endif; ?>
          </header>

          <?= $post->post_content ?>

          <hr>

          <a href="/<?= SUPPORTERS_PAGE ?>/">
            一覧に戻る
          </a>
        </main>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
