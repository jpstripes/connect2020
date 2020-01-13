<?php require_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php'); ?>

<?php get_header(); ?>

<header class="header header--subpage">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="subpage__hero">
          <h1 class="subpage__hero-title">
            Some News Article
          </h1>

          <footer class="subpage__footer">
            <?php include(get_template_directory().'/_includes/social.php'); ?>
          </footer>
        </section>
      </div>
    </div>
  </div>
</header>

<section class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1">

        <main class="article">
          <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">

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

          <h3>H3 tag</h3>
          <p>
            <? for($i=0; $i<=wp_rand(5, 20); $i++): ?>
              Lorem ipsum dot dot dot. Lorem ipsum dot dot dot.
            <?php endfor; ?>
          </p>

          <ul>
            <li>List Item</li>
            <li>List Item</li>
            <li>List Item</li>
          </ul>

          <ol>
            <li>List Item</li>
            <li>List Item</li>
            <li>List Item</li>
          </ol>

          <p>
            <? for($i=0; $i<=wp_rand(5, 20); $i++): ?>
              Lorem ipsum dot dot dot. Lorem ipsum dot dot dot.
            <?php endfor; ?>
          </p>
        </main>

        <footer class="text-center">
          <?php include(get_template_directory().'/_includes/social.php'); ?>
        </footer>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
