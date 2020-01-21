<?php get_header(); ?>

<header class="header header--home">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="home-tagline">
          <div class="home-tagline__symbol"></div>

          <p class="home-tagline__message">
            Stripeを使っているエンジニアとビジネス関係者が集まる
            <br>
            <strong>
              日本最大級の決済系イベント
            </strong>
          </p>

          <p class="home-tagline__nav">
            2020年4月18日 (土)
            <br>
            10:00-19:00
          </p>

          <div class="mb-4">
            <a class="btn btn-lg btn-danger display--inline" target="_blank" href="#">
              &nbsp;&nbsp;
              チケット申し込み
              &nbsp;&nbsp;
            </a>
          </div>

          <div>
            <a class="home-tagline__calendar" target="_blank" href="<?= calendar_url() ?>">
              Googleカレンダーに登録
            </a>
          </div>
        </section>
      </div>
    </div>
  </div>
</header>

<? include get_template_directory() . '/pages/supporters.php'; ?>

<?php get_footer(); ?>
