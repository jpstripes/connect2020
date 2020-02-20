<?php
/**
 * Get either speaker or speakers.
 */
$speaker = get_speaker_metas($post->ID);
$speakers = get_speakers_metas($post->ID);

if (empty($speaker->name)) {
  $speaker = null;
}

if (!count($speakers)) {
  $speakers = null;
}
?>

<?php get_header(); ?>

<header class="header header--subpage">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="subpage__hero">
          <h1 class="subpage__hero-title">
            <?= $post->post_title ?>
          </h1>

          <nav class="subpage__hero-share">
            <a class="btn btn-small btn-outline-light display--inline mr-1" href="<?= tweet_url(
              $post
            ) ?>" target="_blank">
              ツイート
            </a>

            <a class="btn btn-small btn-outline-light display--inline ml-1" href="<?= facebook_url(
              $post
            ) ?>" target="_blank">
              Facebookに投稿
            </a>
          </nav>
        </section>
      </div>
    </div>
  </div>
</header>

<section class="wrapper">
  <?php include get_template_directory() . '/_includes/notification.php'; ?>

  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <main class="article">
          <?= apply_filters('the_content', $post->post_content) ?>

          <? if ($speaker): ?>
            <h2>
              登壇者について
            </h2>

            <section class="row h-card speaker__profile">
              <div class="col-12 col-sm-4">
                <?php if ($speaker->iconUrl): ?>
                  <img class="u-photo speaker__profile-image" src="<?= $speaker->iconUrl ?>">
                <?php else: ?>
                  <img class="u-photo speaker__profile-image" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">
                <?php endif; ?>
              </div>

              <div class="col-12 col-sm-8">
                <header class="speaker__profile-header">
                  <div>
                    <div class="p-name speaker__profile-name">
                      <?= $speaker->name ?>
                    </div>

                    <div class="p-org speaker__profile-company">
                      <?= $speaker->company ?>
                    </div>
                  </div>

                  <div class="speaker__profile-header-icons">
                    <?php if ($speaker->twitter): ?>
                      <a class="u-url speaker__profile-icon speaker__profile-icon--twitter" target="_blank" href="<?= $speaker->twitter ?>"></a>
                    <?php endif; ?>

                    <?php if ($speaker->facebook): ?>
                      <a class="u-url speaker__profile-icon speaker__profile-icon--facebook" target="_blank" href="<?= $speaker->facebook ?>"></a>
                    <?php endif; ?>
                  </div>
                </header>

                <div class="p-note speaker__profile-detail">
                  <?= $speaker->profile ?>
                </div>
              </div>
            </section>
          <? endif; ?>

          <? if ($speakers): ?>
            <h2>
              パネルディスカッションの登壇者
            </h2>

            <? foreach($speakers as $s): ?>
              <section class="row h-card speaker__profile mb-4">
                <div class="col-12 col-sm-4">
                  <?php if ($s->iconUrl): ?>
                    <img class="u-photo speaker__profile-image" src="<?= $s->iconUrl ?>">
                  <?php else: ?>
                    <img class="u-photo speaker__profile-image" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">
                  <?php endif; ?>
                </div>

                <div class="col-12 col-sm-8">
                  <header class="speaker__profile-header">
                    <div>
                      <div class="p-name speaker__profile-name">
                        <?= $s->name ?>
                      </div>

                      <div class="p-org speaker__profile-company">
                        <?= $s->company ?>
                      </div>
                    </div>

                    <div class="speaker__profile-header-icons">
                      <?php if ($s->twitter): ?>
                        <a class="u-url speaker__profile-icon speaker__profile-icon--twitter" target="_blank" href="<?= $s->twitter ?>"></a>
                      <?php endif; ?>

                      <?php if ($s->facebook): ?>
                        <a class="u-url speaker__profile-icon speaker__profile-icon--facebook" target="_blank" href="<?= $s->facebook ?>"></a>
                      <?php endif; ?>
                    </div>
                  </header>

                  <div class="p-note speaker__profile-detail">
                    <?= $s->profile ?>
                  </div>
                </div>
              </section>
            <? endforeach; ?>
          <? endif; ?>

          <nav class="article__social">
            <?php include get_template_directory() . '/_includes/social.php'; ?>
          </nav>

          <a href="/<?= TIMETABLE_PAGE ?>">
            一覧に戻る
          </a>
        </main>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
