<?php get_header(); ?>
<main>
  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <h1 class="sub-mv__title sub-section-title">FAQ</h1>
      <picture class="sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv.webp"
          media="(min-width: 769px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-sp.webp" alt="青空の下に綺麗な海と白い砂浜"
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

  <!-- faq -->
  <?php if ( have_posts() ) : ?>
  <div class="accordion layout-accordion">
    <div class="accordion__inner">
      <?php
        // SCFで登録された「faq」グループを取得
        $faqs = SCF::get('faq');

        // FAQがある場合のみループで表示
        if (!empty($faqs)) :
          // 最大10件まで表示
          $count = 0;
          foreach ($faqs as $faq) :
            if ($count >= 10) break; // 10件で終了
      ?>
      <div class="accordion__wrap">
        <!-- 質問内容 -->
        <div class="accordion__header active-faq">
          <span><?php echo esc_html($faq['faq_q']); // 質問内容をエスケープして出力 ?></span>
        </div>
        <!-- 質問の答え -->
        <div class="accordion__content" style="display: none;">
          <span><?php echo nl2br(esc_html($faq['faq_a'])); // 質問の答えをエスケープして改行対応 ?></span>
        </div>
      </div>
      <?php
            $count++; // 表示済み件数をカウント
          endforeach;
        else :
      ?>
      <p>FAQがまだ登録されていません。</p>
      <?php endif; ?>
    </div>
  </div>
  <?php endif; ?>

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