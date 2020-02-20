<?php get_header(); ?>

<header class="header header--subpage">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="subpage__hero">
          <div class="subpage__hero-pretitle">
            News
          </div>

          <h1 class="subpage__hero-title">
            <?= $post->post_title ?>
          </h1>
        </section>
      </div>
    </div>
  </div>
</header>

<section class="wrapper">
  <?php include get_template_directory() . '/_includes/notification.php'; ?>

  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <main class="article">
          <?php $thumbnail = get_the_post_thumbnail_url($p->ID); ?>
          <?php if ($thumbnail): ?>
            <img class="img-fluid" src="<?= $thumbnail ?>">
          <?php endif; ?>

          <?= apply_filters('the_content', $post->post_content) ?>

          <nav class="article__social">
            <?php include get_template_directory() . '/_includes/social.php'; ?>
          </nav>
        </main>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
