<?php get_header(); ?>
<main>
  <!-- パンくずリスト -->
  <div class="breadcrumb layout-breadcrumb layout-breadcrumb--error-404">
    <div class="breadcrumb__inner inner">
      <!-- Breadcrumb NavXTで出力される部分 ここから -->
      <span>
        <a href="index.html">
          <span>TOP</span>
        </a>
      </span>
      &nbsp;&gt;&nbsp;
      <span>
        <span class="breadcrumb__item">404</span>
      </span>
      <!-- Breadcrumb NavXTで出力される部分 ここまで -->
    </div>
  </div>

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