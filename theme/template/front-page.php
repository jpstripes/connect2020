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
            <a class="btn btn-lg btn-danger display--inline" href="/news/notice-of-postpone/">
              開催延期のお知らせ
            </a>
          </p>
        </section>
      </div>
    </div>
  </div>
</header>

<? include get_template_directory() . '/pages/supporters.php'; ?>

<?php get_footer(); ?>
