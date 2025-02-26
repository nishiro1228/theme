<aside class="sub-blog-sidebar sub-blog__sidebar">
  <ul class="sub-blog__sidebar-items">
    <li class="sub-blog__sidebar-item">
      <h2 class="sub-blog__sidebar-title">人気記事</h2>
      <ul class="sub-blog__favorite-items">
        <a href="blog2.html">
          <li class="sub-blog__favorite-item">
            <div class="sub-blog__favorite-img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery4.webp" alt="黄色い魚が海の中を泳いでいる様子"
                width="" height="" loading="lazy" decoding="async">
            </div>
            <div class="sub-blog__heading">
              <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
              <p class="blog-card__title blog-card__title--sub-blog">ライセンス取得</p>
            </div>
          </li>
        </a>
        <a href="">
          <li class="sub-blog__favorite-item">
            <div class="sub-blog__favorite-img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Blog2.webp" alt="ウミガメが泳いでいる様子" width=""
                height="" loading="lazy" decoding="async">
            </div>
            <div class="sub-blog__heading">
              <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
              <p class="blog-card__title blog-card__title--sub-blog">ウミガメと泳ぐ</p>
            </div>
          </li>
        </a>
        <a href="">
          <li class="sub-blog__favorite-item">
            <div class="sub-blog__favorite-img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Blog3.webp"
                alt="カクレクマノミがイソギンチャクから顔を出している様子" width="" height="" loading="lazy" decoding="async">
            </div>
            <div class="sub-blog__heading">
              <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
              <p class="blog-card__title blog-card__title--sub-blog">カクレクマノミ</p>
            </div>
          </li>
        </a>
      </ul>
    </li>
    <li class="sub-blog__sidebar-item">
      <h2 class="sub-blog__sidebar-title">口コミ</h2>
      <ul class="sub-blog__reviews-items">
        <?php
      $reviews_query = new WP_Query(array(
        'post_type'      => 'reviews',
        'posts_per_page' => 3,
      ));
      
      if ($reviews_query->have_posts()) :
        while ($reviews_query->have_posts()) : $reviews_query->the_post();
    ?>
        <li class="sub-blog__reviews-item">
          <div class="sub-blog__reviews-img">
            <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" loading="lazy" decoding="async">
            <?php endif; ?>
          </div>
          <div class="sub-blog__reviews-category">30代(カップル)</div>
          <div class="sub-blog__reviews-title"><?php the_title(); ?></div>
        </li>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </ul>
      <div class="sub-blog__button">
        <a href="<?php echo get_post_type_archive_link('reviews'); ?>" class="commom-button">View more<span
            class="arrow"></span></a>
      </div>
    </li>

    <li class="sub-blog__sidebar-item">
      <h2 class="sub-blog__sidebar-title">キャンペーン</h2>
      <ul class="sub-blog__campaign-items">
        <?php
      $campaigns_query = new WP_Query(array(
        'post_type'      => 'campaign',
        'posts_per_page' => 2,
      ));
      
      if ($campaigns_query->have_posts()) :
        while ($campaigns_query->have_posts()) : $campaigns_query->the_post();
        $price1 = get_post_meta(get_the_ID(), 'price1', true);
        $price2 = get_post_meta(get_the_ID(), 'price2', true);
    ?>
        <li class="cards__item sub-blog__campaign-item">
          <a href="<?php the_permalink(); ?>" class="card">
            <div class="card__item">
              <div class="card__img card__img--small">
                <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
              </div>
              <div class="card__wrap card__wrap--small">
                <div class="card__meta">
                  <p class="card__title card__title--center"><?php the_title(); ?></p>
                </div>
                <p class="card__text">全部コミコミ(お一人様)</p>
                <div class="card__body">
                  <p class="card__price1">¥<?php echo esc_html($price1); ?></p>
                  <p class="card__price2">¥<?php echo esc_html($price2); ?></p>
                </div>
              </div>
            </div>
          </a>
        </li>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </ul>
      <div class="sub-blog__button">
        <a href="<?php echo get_post_type_archive_link('campaigns'); ?>" class="commom-button">View more<span
            class="arrow"></span></a>
      </div>
    </li>


    <li class="sub-blog__sidebar-item">
      <h3 class="sub-blog__sidebar-title">アーカイブ</h3>
      <div class="sub-blog__archive">
        <div class="sub-blog__archive-wrap sub-blog__archive-container">
          <div class="sub-blog__archive-header js-faq-question">2023<div class="i_box"><i class="one_i"></i>
            </div>
          </div>
          <div class="sub-blog__archive-body">
            <div class="sub-blog__archive-container">
              <a href="" class="sub-blog__archive-text">3月<div class="i_box"><i class="one_i"></i></div>
              </a>
            </div>
            <div class="sub-blog__archive-container">
              <a href="" class="sub-blog__archive-text">2月<div class="i_box"><i class="one_i"></i></div>
              </a>
            </div>
            <div class="sub-blog__archive-container">
              <a href="" class="sub-blog__archive-text">1月<div class="i_box"><i class="one_i"></i></div>
              </a>
            </div>
          </div>
        </div>
        <div class="sub-blog__archive-wrap sub-blog__archive-container">
          <div class="sub-blog__archive-header js-faq-question">2022<div class="i_box"><i class="one_i"></i>
            </div>
          </div>
          <div class="sub-blog__archive-body">
            <div class="sub-blog__archive-container">
              <a href="" class="sub-blog__archive-text">3月<div class="i_box"><i class="one_i"></i></div>
              </a>
            </div>
            <div class="sub-blog__archive-container">
              <a href="" class="sub-blog__archive-text">2月<div class="i_box"><i class="one_i"></i></div>
              </a>
            </div>
            <div class="sub-blog__archive-container">
              <a href="" class="sub-blog__archive-text">1月<div class="i_box"><i class="one_i"></i></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</aside>