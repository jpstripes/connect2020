<?php
/**
 * Retrieve primary nav menus.
 * Make sure to set Custom Menu to `primary`.
 */
$footer_menus = get_pages([
  'sort_column' => 'menu_order'
]); ?>

<?php include_once get_template_directory() . '/_includes/action.php'; ?>

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
      <div class="col-4 col-sm-2 offset-2 offset-sm-4">
        <a href="https://www.getshifter.io/" target="_blank">
          <img class="footer__logo" src="<?= get_template_directory_uri() ?>/assets/images/supporters/shifter.png" alt="Shifter Logo">
        </a>
      </div>

      <div class="col-4 col-sm-2">
        <a href="/">
          <img class="footer__logo" src="<?= get_template_directory_uri() ?>/assets/images/logo.svg" alt="JP_Stripes Logo">
        </a>
      </div>

      <div class="col-12">
        <cite class="footer__copyright">
          © JP_Stripes User Group. All Rights Reserved.
        </cite>
      </div>
    </div>

    <div class="row">
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<script src="<?= get_template_directory_uri() ?>/dist/app.js"></script>
</body>
</html>
