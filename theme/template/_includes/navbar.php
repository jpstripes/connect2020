<?php
/**
 * Retrieve primary nav menus.
 * Make sure to set Custom Menu to `primary`.
 */
$menus = wp_get_nav_menu_items('primary'); ?>
<section class="navbar-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="/">
            <img src="<?= get_template_directory_uri() ?>/assets/images/logo.svg" alt="JP_Stripes Logo">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-custom-text">
              メニュー
            </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <?php foreach ($menus as $m): ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?= $m->url ?>">
                    <?= $m->title ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>

<script>
$(document).ready(function() {
  var wrapper = '.navbar-wrapper';
  var toggler = '.navbar-toggler';

  var toggleSignal = 'toggled';
  var scrollSignal = 'scrolled';

  $(toggler).click(function() {
    $(wrapper).toggleClass(toggleSignal);
  });

  $(document).scroll(function() {
    var $nav = $(wrapper);

    // Attach/remove class on scroll.
    $nav.toggleClass(scrollSignal, $(this).scrollTop() > $nav.height());
  });

  // Apply effect on current page.
  (function() {
    var link = '.nav-link';
    var path = window.location.pathname;

    $(link).each(function(_, el) {
      $target = $(el);

      if ($target.attr('href') === path) {
        $target.addClass('active');
      }
    });
  })();
});
</script>
