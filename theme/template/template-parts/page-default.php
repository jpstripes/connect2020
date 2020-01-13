<header class="header header--subpage">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="subpage__hero">
          <h1 class="subpage__hero-title">
            <?= $post->post_title; ?>
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
          <?= $post->post_content; ?>
        </main>

        <footer class="text-center">
          <?php include(get_template_directory().'/_includes/social.php'); ?>
        </footer>
      </div>
    </div>
  </div>
</section>
