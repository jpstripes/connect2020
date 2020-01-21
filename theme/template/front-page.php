<?php get_header(); ?>

<?php
// Generating add-to-calendar link.
$calendar = implode([
  'https://www.google.com/calendar/event?action=TEMPLATE',
  'text=JP_Stripes+Connect+2020',
  'dates=20200418T010000Z/20200418T100000Z',
  'location='.urlencode('東京都港区南青山3-8-38 南青山東急ビル'),
  'details='.urlencode(implode([
    'Website',
    'https://connect2020.jpstripes.com',
  ], "\n")),
], '&');
?>

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
            <a class="home-tagline__calendar" target="_blank" href="<?= $calendar ?>">
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
