<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php'; ?>

<?php get_header(); ?>

<header class="header header--subpage">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="subpage__hero">
          <h1 class="subpage__hero-title">
            タイムテーブル
          </h1>
        </section>
      </div>
    </div>
  </div>
</header>

<section class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <main class="article">
          <?php
// Managed via WP page
?>
          <p>
            Whatever description comes here.
          </p>

          <table class="table timetable">
            <thead>
              <tr>
                <th></th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th>E</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>10:00</td>
                <td>
                  <a href="#">
                    Some cool presentations that is kind of awesome.
                  </a>

                  <a class="timetable__speaker" href="#">
                    <img class="timetable__speaker-icon" src="<?= get_template_directory_uri() ?>/assets/images/icons/speaker.png">
                    <span class="timetable__speaker-name">
                      Yamada Elizabeth<br>
                      Digital Speaker Inc.
                    </span>
                  </a>
                </td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>E</td>
              </tr>

              <tr>
                <td>11:00</td>
                <td>
                  <a href="#">
                    Some cool presentations that is kind of awesome.
                  </a>

                  <a class="timetable__speaker" href="#">
                    <img class="timetable__speaker-icon" src="<?= get_template_directory_uri() ?>/assets/images/icons/speaker.png">
                    <span class="timetable__speaker-name">
                      Yamada Elizabeth<br>
                      Digital Speaker Inc.
                    </span>
                  </a>
                </td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>E</td>
              </tr>
            </tbody>
          </table>
        </main>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
