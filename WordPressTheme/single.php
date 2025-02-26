<?php get_header(); ?>
<main>
  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <h1 class="sub-mv__title sub-section-title">Blog</h1>
      <picture class="sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog-mv.webp"
          media="(min-width: 769px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog-mv-sp.webp" alt="黄色い魚が二匹泳いでいる様子"
          loading="lazy" decoding="async">
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <?php 
  $contact = esc_url( home_url( '/contact/' ) );
   ?>

  <!-- sub-blog2 -->
  <div class="sub-blog layout-sub-blog">
    <div class="sub-blog__inner inner">
      <div class="sub-blog__container">
        <div class="blog__cards blog-cards blog-cards--sub-blog2">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="blog-cards__item">
            <a href="<?php the_permalink(); ?>" class="blog-card blog-card--sub-blog2">
              <div class="blog-card__wrap blog-card__wrap--sub-blog2">
                <time class="blog-card__dete" datetime="<?php echo get_the_date('c'); ?>">
                  <?php echo get_the_date('Y.m/d'); ?>
                </time>
                <p class="blog-card__title blog-card__title--large"><?php the_title(); ?></p>
              </div>
              <div class="blog-card__img blog-card__img--sub-blog2">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['alt' => get_the_title(), 'class' => 'blog-card__img--sub-blog2-img']); ?>
                <?php else : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/placeholder.webp" alt="デフォルト画像"
                  class="blog-card__img--sub-blog2-img">
                <?php endif; ?>
              </div>
              <p class="blog-card__text blog-card__text--sub-blog2">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </a>
          </div>
          <?php endwhile; ?>
          <?php else : ?>
          <p class="blog-card__text blog-card__text--sub-blog2">投稿が見つかりませんでした。</p>
          <?php endif; ?>
        </div>
        <div class="blog__cards blog-cards blog-cards--sub-blog2">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="blog-cards__item">
            <a href="<?php the_permalink(); ?>" class="blog-card blog-card--sub-blog2">
              <div class="blog-card__img blog-card__img--sub-blog2">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['alt' => get_the_title(), 'class' => 'blog-card__img--sub-blog2-img']); ?>
                <?php else : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/placeholder.webp" alt="デフォルト画像"
                  class="blog-card__img--sub-blog2-img">
                <?php endif; ?>
              </div>
              <p class="blog-card__text blog-card__text--sub-blog2">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </a>
          </div>
          <?php endwhile; ?>
          <?php else : ?>
          <p class="blog-card__text blog-card__text--sub-blog2">投稿が見つかりませんでした。</p>
          <?php endif; ?>
        </div>
        <ul class="sub-blog__items">
          <li class="sub-blog__item">リスト1</li>
          <li class="sub-blog__item">リスト2</li>
          <li class="sub-blog__item">リスト3</li>
        </ul>
        <p class="blog-card__text blog-card__text--sub-blog2">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        </p>
        <!-- ページネーション -->
        <div class="pagenavi layout-pagenavi">
          <div class="pagenavi__inner pagenavi__inner--blog2">
            <!-- WP-PageNaviで出力される部分 ここから -->
            <div class='wp-pagenavi' role='navigation'>
              <a class="previouspostslink" rel="prev" href="#"><span class="pagenavi-arrow"></span></a>
              <a class="nextpostslink" rel="next" href="#"><span class="pagenavi-arrow pagenavi-arrow--next"></span></a>
              </a>
            </div>
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
            <a href="">
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