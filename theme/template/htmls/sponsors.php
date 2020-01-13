<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php'; ?>

<?php get_header(); ?>

<header class="header header--subpage">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="subpage__hero">
          <h1 class="subpage__hero-title">
            Sponsors
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
        <h1 class="sponsor__header">
          Platinum Sponsors
        </h1>
      </div>
    </div>

    <div class="row sponsor__list sponsor__list--platinum">
      <?php for ($i = 0; $i < 4; $i++): ?>
        <div class="col-12 col-sm-3">
          <a class="sponsor__summary" href="sponsor.php">
            <img class="sponsor__summary-image img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">

            <p class="sponsor__summary-name">
              Sponsor A
            </p>

            <p class="sponsor__summary-message">
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
        <h1 class="sponsor__header">
          Gold Sponsors
        </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <div class="row sponsor__list sponsor__list--gold">
          <?php for ($i = 0; $i < 8; $i++): ?>
            <div class="col-6 col-sm-3">
              <a class="sponsor__summary" href="sponsor.php">
                <img class="sponsor__summary-image img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">

                <p class="sponsor__summary-name">
                  Sponsor A
                </p>

                <p class="sponsor__summary-message">
                  Some Company limited, Inc.,
                  Some Company limited, Inc.,
                </p>
              </a>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="sponsor__header">
          Silver Sponsors
        </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <div class="row sponsor__list sponsor__list--gold">
          <?php for ($i = 0; $i < 30; $i++): ?>
            <div class="col-4 col-sm-2">
              <a class="sponsor__summary" href="sponsor.php">
                <img class="sponsor__summary-image img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">
              </a>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-sm-6 offset-3">
        <a class="btn btn-block btn-lg btn-primary" href="#">
          Become a Sponsor
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
