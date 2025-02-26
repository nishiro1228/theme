<?php get_header(); ?>
<main>
  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <h1 class="sub-mv__title sub-section-title">Information</h1>
      <picture class="sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-information-mv.webp"
          media="(min-width: 769px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-information-mv-sp.webp"
          alt="シーサーが写っている様子" loading="lazy" decoding="async">
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <?php 
  $top = esc_url( home_url( '/top/' ) );
  $contact = esc_url( home_url( '/contact/' ) );
   ?>

  <!-- information-tab -->
  <div class="information-tab layout-information-tab">
    <div class="information-tab__inner inner">
      <div class="information-tab__wrap">
        <ul class="information-tab__menu">
          <li class="information-tab__menu-item js-information-tab-menu is-active__information-tab" data-number="tab01">
            ライセンス<br class="is-pc">講習</li>
          <li class="information-tab__menu-item js-information-tab-menu" data-number="tab03">ファン<br class="is-pc">ダイビング
          </li>
          <li class="information-tab__menu-item js-information-tab-menu" data-number="tab02">体験<br class="is-pc">ダイビング
          </li>
        </ul>
        <ul class="information-tab__content">
          <li id="tab01" class="information-tab__content-item js-information-tab-content is-active__information-tab">
            <div class="information-tab__box">
              <div class="information-tab__body">
                <p class="information-tab__title">ライセンス講習</p>
                <p class="information-tab__text">
                  泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                </p>
              </div>
              <div class="information-tab__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-information1.webp" alt="
                  澄んだ海を泳ぐダイバー" width="" height="" loading="lazy" decoding="async">
              </div>
            </div>
          </li>
          <li id="tab03" class="information-tab__content-item js-information-tab-content">
            <div class="information-tab__box">
              <div class="information-tab__body">
                <p class="information-tab__title">ファンダイビング</p>
                <p class="information-tab__text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                </p>
              </div>
              <div class="information-tab__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery5.webp" alt="無数の魚が泳いでいる様子"
                  width="" height="" loading="lazy" decoding="async">
              </div>
            </div>
          </li>
          <li id="tab02" class="information-tab__content-item js-information-tab-content">
            <div class="information-tab__box">
              <div class="information-tab__body">
                <p class="information-tab__title">体験ダイビング</p>
                <p class="information-tab__text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                </p>
              </div>
              <div class="information-tab__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery3.webp" alt="青い二匹の魚が泳いでいる様子"
                  width="" height="" loading="lazy" decoding="async">
              </div>
            </div>
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