<?php require_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php'); ?>

<?php get_header(); ?>

<header class="header header--subpage">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="subpage__hero">
          <h1 class="subpage__hero-title">
            Speakers
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
        <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">
      </div>

      <div class="col-12 col-sm-8">
        <main class="article">
          <h1>H1 tag</h1>
          <p>
            <? for($i=0; $i<=wp_rand(5, 20); $i++): ?>
              Lorem ipsum dot dot dot. Lorem ipsum dot dot dot.
            <?php endfor; ?>
          </p>

          <h2>H2 tag</h2>
          <p>
            <? for($i=0; $i<=wp_rand(5, 20); $i++): ?>
              Lorem ipsum dot dot dot. Lorem ipsum dot dot dot.
            <?php endfor; ?>
          </p>

          <p>
            <? for($i=0; $i<=wp_rand(5, 20); $i++): ?>
              Lorem ipsum dot dot dot. Lorem ipsum dot dot dot.
            <?php endfor; ?>
          </p>

          <h2>Speaker</h2>
        </main>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
