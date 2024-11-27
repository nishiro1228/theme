<?php get_header(); ?>
<main>
  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <h1 class="sub-mv__title sub-section-title">Site MAP</h1>
      <picture class="sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-mv.webp"
          media="(min-width: 769px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-mv-sp.webp"
          alt="サンゴ礁の近くを無数の魚が泳いでいる様子" loading="lazy" decoding="async">
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
      <!-- Breadcrumb NavXTで出力される部分 ここから -->
      <span>
        <a href="index.html">
          <span>TOPtop</span>
        </a>
      </span>
      &nbsp;&gt;&nbsp;
      <span>
        <span class="breadcrumb__item">サイトマップ</span>
      </span>
      <!-- Breadcrumb NavXTで出力される部分 ここまで -->
    </div>
  </div>


  <!-- sitemap -->
  <div class="sitemap layout-sitemap">
    <div class="sitemap__inner inner">
      <div class="footer__container">
        <ul class="footer__list menu-list">
          <li class="menu-list__item menu-item">
            <a href="contact.html" class="menu-item__title menu-item__title--bold menu-item__title--black">キャンペーン</a>
            <a href="" class="menu-item__title menu-item__title--black">ライセンス取得</a>
            <a href="" class="menu-item__title menu-item__title--black">貸切体験ダイビング</a>
            <a href="" class="menu-item__title menu-item__title--black">ナイトダイビング</a>
            <a href="about.html" class="menu-item__title menu-item__title--bold menu-item__title--black">私たちについて</a>
          </li>
          <li class="menu-list__item menu-item menu-list__item--sitemap">
            <a href="information.html"
              class="menu-item__title menu-item__title--bold menu-item__title--black">ダイビング情報</a>
            <a href="" class="menu-item__title menu-item__title--black">ライセンス講習</a>
            <a href="" class="menu-item__title menu-item__title--black">体験ダイビング</a>
            <a href="" class="menu-item__title menu-item__title--black">ファンダイビング</a>
            <a href="blog.html" class="menu-item__title menu-item__title--bold menu-item__title--black">ブログ</a>
          </li>
          <li class="menu-list__item menu-item menu-list__item--sitemap">
            <a href="voice.html" class="menu-item__title menu-item__title--bold menu-item__title--black">お客様の声</a>
            <a href="price.html" class="menu-item__title menu-item__title--bold menu-item__title--black">料金一覧</a>
            <a href="" class="menu-item__title menu-item__title--black">ライセンス講習</a>
            <a href="" class="menu-item__title menu-item__title--black">体験ダイビング</a>
            <a href="" class="menu-item__title menu-item__title--black">ファンダイビング</a>
          </li>
          <li class="menu-list__item menu-item menu-list__item--sitemap">
            <a href="faq.html" class="menu-item__title menu-item__title--bold menu-item__title--black">よくある質問</a>
            <a href="privacy-policy.html"
              class="menu-item__title menu-item__title--bold menu-item__title--black">プライバシー<br>ポリシー</a>
            <a href="Terms-of-Service.html"
              class="menu-item__title menu-item__title--bold menu-item__title--black">利用規約</a>
            <a href="contact.html" class="menu-item__title menu-item__title--bold menu-item__title--black">おい問わ合せ</a>
          </li>
        </ul>
      </div>
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