<?php require_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php'); ?>

<?php get_header(); ?>

<header class="header header--subpage">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="subpage__hero">
          <h1 class="subpage__hero-title">
            News
          </h1>
        </section>
      </div>
    </div>
  </div>
</header>

<section class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <?php for ($i=0; $i<=2; $i++): ?>
          <div class="row teaser">
            <div class="col-12 col-sm-2 teaser__aside">
              <img class="img-full" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">

              <div class="teaser__date">
                2020/01/12
              </div>
            </div>

            <div class="col-12 col-sm-10">
              <h2 class="teaser__title">
                News Title
              </h2>

              <p class="teaser__summary">
                Lorem ipsum dot dot queue.
                Lorem ipsum dot dot queue.
                Lorem ipsum dot dot queue.
                Lorem ipsum dot dot queue.
                Lorem ipsum dot dot queue.
              </p>

              <a class="btn btn-primary" href="news-article.php">
                Read more..
              </a>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
