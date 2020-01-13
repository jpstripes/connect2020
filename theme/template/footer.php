<?php
/**
 * Retrieve primary nav menus.
 * Make sure to set Custom Menu to `primary`.
 */
$footer_menus = get_pages([
  'sort_column' => 'menu_order'
]);
?>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="footer__nav">
          <?php foreach ($footer_menus as $m): ?>
            <li class="footer__nav-item">
              <a class="footer__nav-link" href="<?= get_permalink($m->ID) ?>">
                <?= $m->post_title ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-12 text-center">
        <a href="#">
          <img class="footer__logo" src="<?= get_template_directory_uri() ?>/assets/images/logo.svg" alt="JP_Stripes Logo">
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-12 text-center">
        <cite class="footer__copyright">
          All Rights Reserved.
        </cite>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<script src="<?= get_template_directory_uri() ?>/dist/app.js"></script>
</body>
</html>
