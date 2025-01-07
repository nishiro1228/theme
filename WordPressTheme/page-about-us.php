<?php get_header(); ?>
<main>
  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <h1 class="sub-mv__title sub-section-title">About us</h1>
      <picture class="sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-mv.jpg"
          media="(min-width: 769px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-mv-sp.jpg" alt="シーサーが写っている様子"
          loading="lazy" decoding="async">
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- about -->
  <section class="sub-about sub-layout-about">
    <div class="sub-about__inner inner">
      <div class="sub-about__container">
        <div class="sub-about__img-wrap">
          <div class="sub-about__img1">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about2.jpg" alt="黄色い魚が二匹泳いでいる様子" width=""
              height="" loading="lazy" decoding="async">
          </div>
          <div class="sub-about__img2 is-sp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about1.jpg" alt="家の屋根のシーサーを写している様子"
              width="" height="" loading="lazy" decoding="async">
          </div>
        </div>
        <div class="sub-about__wrap">
          <p class="sub-about__title">Dive into<br>
            the Ocean</p>
          <div class="sub-about__wrap-body">
            <p class="sub-about__text text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <div class="gallery layout-gallery">
    <div class="gallery__inner inner">
      <div class="gallery__title section-title">
        <span class="section-title__main">Gallery</span>
        <h2 class="section-title__sub">フォト</h2>
      </div>
      <ul class="gallery__list gallery-list">
        <?php
      // SCFでギャラリー画像を取得
      $gallery_images = SCF::get('gallery_images'); // 繰り返しフィールドの名前
      if (!empty($gallery_images)) :
        foreach ($gallery_images as $index => $gallery_image) :
          $image_url = wp_get_attachment_image_url($gallery_image['about-image'], 'full'); // 画像URL取得
          $alt_text = $gallery_image['about-alt_text']; // alt属性取得
      ?>
        <li class="gallery-list__item">
          <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt_text); ?>" class="js-modal-open"
            data-target="<?php echo $index + 1; ?>">
          <div class="gallery-list__modal modal js-modal" id="<?php echo $index + 1; ?>">
            <div class="modal__inner">
              <div class="modal__img">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt_text); ?>">
              </div>
            </div>
          </div>
        </li>
        <?php
        endforeach;
      endif;
      ?>
      </ul>
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