<?php get_header(); ?>
<main>
  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <h1 class="sub-mv__title sub-section-title">Voice</h1>
      <picture class="sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice-mv.webp"
          media="(min-width: 769px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice-mv-sp.webp"
          alt="澄んだ海を5人のダイバーが泳いでいる様子" loading="lazy" decoding="async">
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>


  <?php
// タクソノミーのターム（カテゴリ）を取得
$tab_categories = get_terms(array(
    'taxonomy' => 'voice-genre', // タクソノミーのスラッグ
    'hide_empty' => false, // 投稿がないタームを除外
));
?>

  <!-- タブ -->
  <div class="tab layout-tab">
    <div class="tab__inner inner">
      <ul class="tab__menu">
        <!-- "ALL" タブ -->
        <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" data-number="ALL">
          <li class="tab__menu-item js-tab-menu <?php echo !is_tax('voice-genre') ? 'is-active__tab' : ''; ?>">
            ALL
          </li>
        </a>

        <!-- 各タームのタブ -->
        <?php foreach ($tab_categories as $category): ?>
        <a href="<?php echo esc_url(get_term_link($category)); ?>"
          data-number="<?php echo esc_attr($category->slug); ?>">
          <li
            class="tab__menu-item js-tab-menu <?php echo is_tax('voice-genre', $category->slug) ? 'is-active__tab' : ''; ?>">
            <?php echo esc_html($category->name); ?>
          </li>
        </a>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <!-- sub-voice -->
  <div class="voice layout-voice voice--sub layout-voice--sub">
    <div class="voice__inner inner">
      <div class="voice__cards voice-cards voice-cards--sub">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="voice-cards__item voice-card">
          <div class="voice-card__wrap">
            <div class="voice-card__head">
              <div class="voice-card__body">
                <div class="voice-card__detail">20代(女性)</div>
                <div class="voice-card__category">
                  <?php
  // 投稿のタクソノミー情報を取得（'voice-genre' はタクソノミーのスラッグ）
  $terms = get_the_terms(get_the_ID(), 'voice-genre');
  if ($terms && !is_wp_error($terms)) {
      // 最初のタクソノミー名を表示
      echo esc_html($terms[0]->name);
  } else {
      // タクソノミーがない場合のデフォルト表示
      echo '未分類';
  }
  ?>
                </div>
              </div>
              <div class="voice-card__title">ここにタイトルが入ります。ここにタイトル</div>
            </div>
            <div class="voice-card__wrap-img colorbox">
              <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('custom-size'); ?>
              <?php else: ?>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Voice1.jpg" alt="麦わら帽子をかぶっている女性"
                width="" height="" loading="lazy" decoding="async">
              <?php endif; ?>
            </div>
          </div>
          <div class="voice-card__text text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。</div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>


  <!-- ページネーション -->
  <div class="pagenavi layout-pagenavi">
    <div class="pagenavi__inner">
      <!-- WP-PageNaviで出力される部分 ここから -->
      <?php wp_pagenavi(); ?>
      <!-- WP-PageNaviで出力される部分 ここまで -->
    </div>
  </div>
</main>

<?php get_footer(); ?>