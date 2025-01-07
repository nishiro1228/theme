<?php get_header(); ?>
<style>
body.customize-support {
  background-color: #408f95;
}
</style>
<main>
  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- error-404 -->
  <div class="error-404 layout-error-404">
    <div class="error-404__inner">
      <div class="error-404__wrap">
        <div class="error-404__title">404</div>
        <p class="error-404__text">申し訳ありません。<br>
          お探しのページが見つかりません。
        </p>
        <div class="error-404__button">
          <a href="index.html" class="commom-button commom-button--invert">Page TOP<span
              class="arrow arrow--invert"></span></a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>