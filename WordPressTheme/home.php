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
  <div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
      <!-- Breadcrumb NavXTで出力される部分 ここから -->
      <span>
        <a href="index.html">
          <span>TOP</span>
        </a>
      </span>
      &nbsp;&gt;&nbsp;
      <span>
        <span class="breadcrumb__item">ブログ一覧</span>
      </span>
      <!-- Breadcrumb NavXTで出力される部分 ここまで -->
    </div>
  </div>

  <!-- sub-blog -->
  <div class="sub-blog layout-sub-blog">
    <div class="sub-blog__inner inner">
      <div class="sub-blog__container">
        <div class="blog__cards blog-cards blog-cards--sub">
          <div class="blog-cards__item">
            <a href="blog2.html" class="blog-card">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Blog1.jpg" alt="サンゴ礁">
              </div>
              <div class="blog-card__wrap">
                <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
                <p class="blog-card__title">ライセンス取得</p>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </div>
          <div class="blog-cards__item">
            <a href="#" class="blog-card">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Blog2.jpg" alt="ウミガメが泳いでいる様子">
              </div>
              <div class="blog-card__wrap">
                <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
                <p class="blog-card__title">ウミガメと泳ぐ</p>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </div>
          <div class="blog-cards__item">
            <a href="#" class="blog-card">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Blog3.jpg"
                  alt="カクレクマノミがイソギンチャクから顔を出している様子">
              </div>
              <div class="blog-card__wrap">
                <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
                <p class="blog-card__title">カクレクマノミ</p>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </div>
          <div class="blog-cards__item">
            <a href="#" class="blog-card">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery4.webp"
                  alt="黄色い魚が海の中を泳いでいる様子">
              </div>
              <div class="blog-card__wrap">
                <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
                <p class="blog-card__title">カクレクマノミ</p>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </div>
          <div class="blog-cards__item">
            <a href="#" class="blog-card">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Rectangle 9.webp" alt="白い海牛">
              </div>
              <div class="blog-card__wrap">
                <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
                <p class="blog-card__title">カクレクマノミ</p>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </div>
          <div class="blog-cards__item">
            <a href="#" class="blog-card">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.webp"
                  alt="無数のクラゲが海の中を泳いでいる様子">
              </div>
              <div class="blog-card__wrap">
                <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
                <p class="blog-card__title">カクレクマノミ</p>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </div>
          <div class="blog-cards__item">
            <a href="#" class="blog-card">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Blog3.jpg"
                  alt="カクレクマノミがイソギンチャクから顔を出している様子">
              </div>
              <div class="blog-card__wrap">
                <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
                <p class="blog-card__title">カクレクマノミ</p>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </div>
          <div class="blog-cards__item">
            <a href="#" class="blog-card">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery4.webp"
                  alt="黄色い魚が海の中を泳いでいる様子">
              </div>
              <div class="blog-card__wrap">
                <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
                <p class="blog-card__title">カクレクマノミ</p>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </div>
          <div class="blog-cards__item">
            <a href="#" class="blog-card">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Rectangle 9.webp" alt="白い海牛">
              </div>
              <div class="blog-card__wrap">
                <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
                <p class="blog-card__title">カクレクマノミ</p>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </div>
          <div class="blog-cards__item">
            <a href="#" class="blog-card">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.webp"
                  alt="無数のクラゲが海の中を泳いでいる様子">
              </div>
              <div class="blog-card__wrap">
                <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
                <p class="blog-card__title">カクレクマノミ</p>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </div>
        </div>
        <!-- ページネーション -->
        <div class="pagenavi">
          <div class="pagenavi__inner pagenavi__inner--blog">
            <!-- WP-PageNaviで出力される部分 ここから -->
            <div class='wp-pagenavi' role='navigation'>
              <a class="previouspostslink" href="#">＜</a><span class="page-larger current" href="#">1</span><a
                class="page-larger" href="#">2</a><a class="page-larger" href="#">3</a><a class="page-larger"
                href="#">4</a><a class="page-larger is-sp" href="#">5</a><a class="page-larger is-sp" href="#">6</a><a
                class="nextpostslink" href="#">＞</a>
            </div>
            <!-- WP-PageNaviで出力される部分 ここまで -->
          </div>
        </div>
      </div>


      <aside class="sub-blog__sidebar">
        <ul class="sub-blog__sidebar-items">
          <li class="sub-blog__sidebar-item">
            <h2 class="sub-blog__sidebar-title">人気記事</h2>
            <ul class="sub-blog__favorite-items">
              <a href="blog2.html">
                <li class="sub-blog__favorite-item">
                  <div class="sub-blog__favorite-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery4.webp"
                      alt="黄色い魚が海の中を泳いでいる様子" width="" height="" loading="lazy" decoding="async">
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
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Blog2.webp" alt="ウミガメが泳いでいる様子"
                      width="" height="" loading="lazy" decoding="async">
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
              <li class="sub-blog__reviews-item">
                <div class="sub-blog__reviews-img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/口コミ.webp"
                    alt="男性と女性がソファに座って腕を組んでいる様子" width="" height="" loading="lazy" decoding="async">
                </div>
                <div class="sub-blog__reviews-category">30代(カップル)</div>
                <div class="sub-blog__reviews-title">ここにタイトルが入ります。ここにタイトル</div>
              </li>
              <div class="sub-blog__button">
                <a href="" class="commom-button">View more<span class="arrow"></span></a>
              </div>
            </ul>
          </li>
          <li class="sub-blog__sidebar-item">
            <h2 class="sub-blog__sidebar-title">キャンペーン</h2>
            <ul class="sub-blog__campaign-items">
              <li class="cards__item sub-blog__campaign-item">
                <a href="#" class="card">
                  <div class="card__item">
                    <div class="card__img card__img--small">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg"
                        alt="さまざまな魚が泳いでいる様子">
                    </div>
                    <div class="card__wrap card__wrap--small">
                      <div class="card__meta">
                        <p class="card__title card__title--center">ライセンス取得</p>
                      </div>
                      <p class="card__text">全部コミコミ(お一人様)</p>
                      <div class="card__body">
                        <p class="card__price1">¥56,000</p>
                        <p class="card__price2">¥46,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="cards__item sub-blog__campaign-item">
                <a href="#" class="card">
                  <div class="card__item">
                    <div class="card__img card__img--small">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.webp"
                        alt="澄んだ海と青空と船">
                    </div>
                    <div class="card__wrap card__wrap--small">
                      <div class="card__meta">
                        <p class="card__title card__title--center">ライセンス取得</p>
                      </div>
                      <p class="card__text">全部コミコミ(お一人様)</p>
                      <div class="card__body">
                        <p class="card__price1">¥56,000</p>
                        <p class="card__price2">¥46,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <div class="sub-blog__button">
                <a href="" class="commom-button">View more<span class="arrow"></span></a>
              </div>
            </ul>
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
            <a href="contact.html" class="commom-button">View more <span class="arrow"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>