<?php get_header(); ?>

<section class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <main class="article">
          <?= apply_filters('the_content', $post->post_content) ?>
        </main>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
