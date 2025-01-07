<?php get_header(); ?>
<main>
  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <h1 class="sub-mv__title sub-section-title">Contact</h1>
      <picture class="sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-mv.webp"
          media="(min-width: 769px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-mv-sp.webp" alt="波が立つ砂浜を真上から撮った写真"
          loading="lazy" decoding="async">
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>


  <!-- thanks -->
  <div class="thanks layout-thanks">
    <div class="thanks__inner">
      <p class="thanks__text">お問い合わせ内容を送信完了しました。</p>
      <p class="thanks__text-body">このたびは、お問い合わせ頂き<br class="is-pc">誠にありがとうございます。<br>
        お送り頂きました内容を確認の上、<br class="is-pc">3営業日以内に折り返しご連絡させて頂きます。<br>
        また、ご記入頂いたメールアドレスへ、<br class="is-pc">自動返信の確認メールをお送りしております。
      </p>
    </div>
  </div>
</main>
<?php get_footer(); ?>