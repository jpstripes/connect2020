<section class="wrapper">
  <?php include get_template_directory() . '/_includes/notification.php'; ?>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <main class="article">
          <?= apply_filters('the_content', $post->post_content) ?>
        </main>
      </div>
    </div>
  </div>
</section>
