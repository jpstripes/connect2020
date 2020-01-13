<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php'; ?>

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
      <div class="col-12">
        <h1 class="speaker__header">
          Sponsored Speakers
        </h1>
      </div>
    </div>

    <div class="row speaker__list">
      <?php for ($i = 0; $i < 4; $i++): ?>
        <div class="col-12 col-sm-3">
          <a class="speaker__summary" href="speaker.php">
            <img class="speaker__summary-image img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">

            <p class="speaker__summary-name">
              speaker A
            </p>

            <p class="speaker__summary-message">
              Some Company limited, Inc.,
              Some Company limited, Inc.,
            </p>
          </a>
        </div>
      <?php endfor; ?>
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
      <?php for ($i = 0; $i < 30; $i++): ?>
        <div class="col-12 col-sm-3">
          <a class="speaker__summary" href="speaker.php">
            <img class="speaker__summary-image img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">

            <p class="speaker__summary-name">
              speaker A
            </p>

            <p class="speaker__summary-message">
              Some Company limited, Inc.,
              Some Company limited, Inc.,
            </p>
          </a>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
