<?php get_header(); ?>

<header class="header header--home">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="home-tagline">
          <div class="home-tagline__symbol"></div>

          <p class="home-tagline__message">
            最新サブスク/SaaS/EC決済事例とトレンドが1日でわかる
            <br>
            <strong>
              Stripeのユーザーカンファレンス
            </strong>
          </p>

          <p class="home-tagline__nav">
            2020年4月18日 (土)
            <br>
            10:00-19:00

            <a class="home-tagline__nav-access" href="https://goo.gl/maps/wX9QCeNf7LpuSayC9" target="_blank">
              東京都港区南青山3-8-38 南青山東急ビル🧭
            </a>
          </p>

          <div class="mb-4">
            <a class="btn btn-lg btn-danger display--inline" target="_blank" href="/tickets/">
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
