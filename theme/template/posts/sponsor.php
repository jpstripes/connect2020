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
      <div class="col-12 col-sm-4">
        <img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">
      </div>

      <div class="col-12 col-sm-8">
        <main class="article">
          <?= $post->post_content; ?>

          <hr>

          <a href="/<?= SPONSORS_PAGE; ?>/">
            一覧に戻る
          </a>
        </main>
      </div>
    </div>
  </div>
</section>
