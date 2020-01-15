<?php require_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php'); ?>

<?php get_header(); ?>

<header class="header header--subpage">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="subpage__hero">
          <h1 class="subpage__hero-title">
            Session
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

          <h2>登壇者</h2>

          <?php // Using Microformats2 here ?>
          <section class="row h-card speaker__profile">
            <div class="col-12 col-sm-4">
              <img class="u-photo speaker__profile-image" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">
            </div>

            <div class="col-12 col-sm-8">
              <header class="speaker__profile-header">
                <div>
                  <div class="p-name speaker__profile-name">
                    Yamada Taro
                  </div>

                  <div class="p-org speaker__profile-company">
                    Corporation ABC Inc.
                  </div>
                   
                </div>

                <div class="speaker__profile-header-icons">
                  <a class="u-url speaker__profile-icon speaker__profile-icon--twitter" target="_blank" href="#"></a>
                  <a class="u-url speaker__profile-icon speaker__profile-icon--facebook" target="_blank" href="#"></a>
                </div>
              </header>

              <div class="p-note speaker__profile-detail">
                Lorem ipsum dot dot dot. Lorem ipsum dot dot dot.
                Lorem ipsum dot dot dot. Lorem ipsum dot dot dot.
                Lorem ipsum dot dot dot. Lorem ipsum dot dot dot.
                Lorem ipsum dot dot dot. Lorem ipsum dot dot dot.
                Lorem ipsum dot dot dot. Lorem ipsum dot dot dot.
                Lorem ipsum dot dot dot. Lorem ipsum dot dot dot.
                Lorem ipsum dot dot dot. Lorem ipsum dot dot dot.
              </div>
            </div>
          </section>
        </main>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
