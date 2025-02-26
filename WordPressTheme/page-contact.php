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


  <!-- sub-contact -->
  <div class="sub-contact layout-sub-contact">
    <div class="sub-contact__inner">
      <?php echo do_shortcode('[contact-form-7 id="a07b792" title="お問い合わせ"]'); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>