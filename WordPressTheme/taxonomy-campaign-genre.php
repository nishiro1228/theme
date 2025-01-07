<?php get_header(); ?>
<main>
  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <h1 class="sub-mv__title sub-section-title">Campaign</h1>
      <picture class="sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-campaign-mv.jpg"
          media="(min-width: 769px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-campaign-mv-sp.jpg" alt="黄色い魚が二匹泳いでいる様子"
          loading="lazy" decoding="async">
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <?php
// タクソノミーのターム（カテゴリ）を取得
$tab_categories = get_terms(array(
    'taxonomy' => 'campaign-genre', // タクソノミーのスラッグ
    'hide_empty' => true, // 投稿がないタームを除外
));
?>

  <!-- タブ -->
  <div class="tab layout-tab">
    <div class="tab__inner inner">
      <ul class="tab__menu">
        <!-- "ALL" タブ -->
        <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" data-number="ALL">
          <li class="tab__menu-item js-tab-menu <?php echo !is_tax('campaign-genre') ? 'is-active__tab' : ''; ?>">
            ALL
          </li>
        </a>

        <!-- 各タームのタブ -->
        <?php foreach ($tab_categories as $category): ?>
        <a href="<?php echo esc_url(get_term_link($category)); ?>"
          data-number="<?php echo esc_attr($category->slug); ?>">
          <li
            class="tab__menu-item js-tab-menu <?php echo is_tax('campaign-genre', $category->slug) ? 'is-active__tab' : ''; ?>">
            <?php echo esc_html($category->name); ?>
          </li>
        </a>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>



  <div class="tab-content">
    <?php
  // 投稿一覧の出力（ALL または特定のタクソノミーの選択に応じて変化）
  $args = array(
      'post_type' => 'campaign', // カスタム投稿タイプ 'campaign'
      'posts_per_page' => -1, // すべての投稿を取得
  );

  // 特定のタクソノミーが選択されている場合、絞り込み条件を追加
  if (is_tax('campaign-genre')) {
      $current_term = get_queried_object(); // 現在表示中のタームを取得
      $args['tax_query'] = array(
          array(
              'taxonomy' => 'campaign-genre',
              'field' => 'slug',
              'terms' => $current_term->slug, // 現在のタームに絞り込み
          ),
      );
  }

  $query = new WP_Query($args);

  // 投稿が存在する場合、ループで出力
  if ($query->have_posts()):
      while ($query->have_posts()): $query->the_post(); ?>
    <?php endwhile;
      wp_reset_postdata(); // 投稿データをリセット
  else: ?>
    <p>投稿が見つかりません。</p>
    <?php endif; ?>
  </div>





  <!-- Campaign -->
  <section class="sub-campaign layout-sub-campaign">
    <div class="sub-campaign__inner inner">
      <div class="sub-campaign__container">
        <div class="sub-campaign__cards cards">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="cards__item cards__item--small">
            <a href="#" class="card">
              <div class="card__item">
                <div class="card__img">
                  <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('custom-size'); ?>
                  <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.png" alt="">
                  <?php endif; ?>
                </div>
                <div class="card__wrap">
                  <div class="card__meta">
                    <p class="card__category"><?php
  // 投稿のタクソノミー情報を取得（'campaign-genre' はタクソノミーのスラッグ）
  $terms = get_the_terms(get_the_ID(), 'campaign-genre');
  if ($terms && !is_wp_error($terms)) {
      // 最初のタクソノミー名を表示
      echo esc_html($terms[0]->name);
  } else {
      // タクソノミーがない場合のデフォルト表示
      echo '未分類';
  }
  ?></p>
                    <p class="card__title card__title--large"><?php the_title(); ?></p>
                  </div>
                  <p class="card__text card__text--campaign">全部コミコミ(お一人様)</p>
                  <div class="card__body">
                    <p class="card__price1">¥<?php echo esc_html(get_field('price1')); ?></p>
                    <p class="card__price2">¥<?php echo esc_html(get_field('price2')); ?></p>
                  </div>
                  <p class="card__sub-text text is-sp">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                  <div class="card__container">
                    <div class="card__time is-sp">2023/6/1-9/30</div>
                    <div class="card__contact is-sp">ご予約・お問い合わせはコチラ</div>
                  </div>
                  <div class="campaign__button campaign__button--card is-sp">
                    <a href="contact.html" class="commom-button">View more<span class="arrow"></span></a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

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