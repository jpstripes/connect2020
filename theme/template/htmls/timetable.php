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
      <div class="col-12 col-sm-12">
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-sm-12">
        <section class="timetable">
          <table class="table">
            <thead>
              <tr>
                <th></th>
                <th class="timetable__lane">A</th>
                <th class="timetable__lane">B</th>
                <th class="timetable__lane">C</th>
                <th class="timetable__lane">D</th>
                <th class="timetable__lane">E</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>10:00</td>
                <td class="timetable__cell">
                  <a class="timetable__title" href="#">
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
                <td class="timetable__cell">
                  <a class="timetable__title" href="#">
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
        </section>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
