<div class="breadcrumb <?php if (is_404()) echo 'breadcrumb--404'; ?> layout-breadcrumb">
  <div class="breadcrumb__inner inner">
    <!-- Breadcrumb NavXTで出力される部分 ここから -->
    <?php if (function_exists('bcn_display')) {
    bcn_display();
} ?>

    <!-- Breadcrumb NavXTで出力される部分 ここまで -->
  </div>
</div>