<?php get_header(); ?>
<main>
  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <h1 class="sub-mv__title sub-section-title">Blog</h1>
      <picture class="sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog-mv.webp"
          media="(min-width: 769px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog-mv-sp.webp" alt="無数の青い魚が海の中を泳いでいる様子"
          loading="lazy" decoding="async">
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <?php 
  $top = esc_url( home_url( '/top/' ) );
  $contact = esc_url( home_url( '/contact/' ) );
   ?>

  <!-- sub-blog -->
  <div class="sub-blog layout-sub-blog">
    <div class="sub-blog__inner inner">
      <div class="sub-blog__container">
        <div class="blog__cards blog-cards blog-cards--sub">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <article class="blog-card">
            <a href="<?php echo esc_url(get_the_permalink()); ?>" class="blog-card__link">
              <div class="blog-card__img">
                <?php if (has_post_thumbnail()) : ?>
                <!-- アイキャッチ画像がある場合 -->
                <?php the_post_thumbnail('medium', [
              'class' => 'blog-card__thumbnail',
              'alt' => esc_attr(get_the_title()),
              'loading' => 'lazy'
            ]); ?>
                <?php else : ?>
                <!-- アイキャッチ画像がない場合のデフォルト画像 -->
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/default-image.jpg')); ?>"
                  alt="デフォルト画像" class="blog-card__thumbnail" loading="lazy">
                <?php endif; ?>
              </div>
              <div class="blog-card__body">
                <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" class="blog-card__date">
                  <?php echo esc_html(get_the_date('Y.m/d')); ?>
                </time>
                <h3 class="blog-card__title"><?php echo esc_html(get_the_title()); ?></h3>
                <p class="blog-card__text"><?php echo esc_html(get_the_excerpt()); ?></p>
              </div>
            </a>
          </article>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <div class="pagenavi layout-pagenavi">
          <div class="pagenavi__inner">
            <!-- WP-PageNaviで出力される部分 ここから -->
            <?php wp_pagenavi(); ?>
            <!-- WP-PageNaviで出力される部分 ここまで -->
          </div>
        </div>
      </div>
      <!-- サイドバー -->
      <?php get_sidebar(); ?>
    </div>
  </div>

  <!-- contact -->
  <section class="contact layout-contact">
    <div class="contact__inner inner">
      <div class="contact__container">
        <div class="contact__left">
          <div class="contact__logo">
            <a href="<?php echo $top; ?>">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-logo.svg" alt="CodeUps"
                width="" height="" loading="lazy" decoding="async">
            </a>
          </div>
          <div class="contact__left-wrap">
            <div class="contact__information">
              <p class="contact__information-text text">沖縄県那覇市1-1</p>
              <p class="contact__information-text text"><a href="tel:+0120-000-0000">TEL:0120-000-0000</a></p>
              <p class="contact__information-text text">営業時間:8:30-19:00</p>
              <p class="contact__information-text text">定休日:毎週火曜日</p>
            </div>
            <div class="contact__googlemap">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6479.313569841215!2d139.8081254764495!3d35.71006267257801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ed0d12f9adf%3A0x7d1d4fb31f43f72a!2z5p2x5Lqs44K544Kr44Kk44OE44Oq44O8!5e0!3m2!1sja!2sjp!4v1716632957968!5m2!1sja!2sjp"
                width="460" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>
        </div>
        <div class="contact__right">
          <div class="contact__title section-title">
            <span class="section-title__main section-title__main--contact">Contact</span>
            <h2 class="section-title__sub">お問い合わせ</h2>
          </div>
          <div class="contact__right-text">ご予約・お問い合わせはコチラ</div>
          <div class="contact__button">
            <a href="<?php echo $contact; ?>" class="commom-button">View more <span class="arrow"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>