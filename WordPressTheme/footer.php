<!-- トップへ戻るボタン -->
<div class="layout-page-top page-top js-page-top">
  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-top.svg">
</div>

<?php 
$top = esc_url( home_url( '/top/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$contact = esc_url( home_url( '/contact/' ) );
$privacypolicy = esc_url( home_url( '/privacypolicy/' ) );
$termsofservice = esc_url( home_url( '/termsofservice/' ) );
?>

<!-- footer -->
<footer class="footer layout-footer">
  <div class="footer__inner inner">
    <div class="footer__head">
      <div class="footer__logo">
        <a href="<?php echo $top; ?>">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logobig.svg" alt="CodeUps" width=""
            height="" loading="lazy" decoding="async">
        </a>
      </div>
      <div class="footer__sns">
        <div class="footer__sns-icon1">
          <a href="https://www.facebook.com/login/?locale=ja_JP" target=_blank>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.svg" alt="Facebook" width=""
              height="" loading="lazy" decoding="async">
          </a>
        </div>
        <div class="footer__sns-icon2">
          <a href="https://www.instagram.com/accounts/login/" target=_blank>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/InstagramLogo.svg" alt="Instagram"
              width="" height="" loading="lazy" decoding="async">
          </a>
        </div>
      </div>
    </div>
    <div class="footer__container">
      <ul class="footer__list menu-list">
        <li class="menu-list__item menu-item">
          <a href="<?php echo $campaign; ?>" class="menu-item__title menu-item__title--bold">キャンペーン</a>
          <a href="<?php echo $campaign; ?>" class="menu-item__title">ライセンス取得</a>
          <a href="<?php echo $campaign; ?>" class="menu-item__title">貸切体験ダイビング</a>
          <a href="<?php echo $campaign; ?>" class="menu-item__title">ナイトダイビング</a>
          <a href="<?php echo $about; ?>" class="menu-item__title menu-item__title--bold">私たちについて</a>
        </li>
        <li class="menu-list__item menu-item">
          <a href="<?php echo $information; ?>" class="menu-item__title menu-item__title--bold">ダイビング情報</a>
          <a href="<?php echo $information; ?>?tab=tab01" class="menu-item__title">ライセンス講習</a>
          <a href="<?php echo $information; ?>?tab=tab02" class="menu-item__title">体験ダイビング</a>
          <a href="<?php echo $information; ?>?tab=tab03" class="menu-item__title">ファンダイビング</a>
          <a href="<?php echo $blog; ?>" class="menu-item__title menu-item__title--bold">ブログ</a>
        </li>
        <li class="menu-list__item menu-item">
          <a href="<?php echo $voice; ?>" class="menu-item__title menu-item__title--bold">お客様の声</a>
          <a href="<?php echo $price; ?>" class="menu-item__title menu-item__title--bold">料金一覧</a>
          <a href="<?php echo $price; ?>" class="menu-item__title">ライセンス講習</a>
          <a href="<?php echo $price; ?>" class="menu-item__title">体験ダイビング</a>
          <a href="<?php echo $price; ?>" class="menu-item__title">ファンダイビング</a>
        </li>
        <li class="menu-list__item menu-item">
          <a href="<?php echo $faq; ?>" class="menu-item__title menu-item__title--bold">よくある質問</a>
          <a href="<?php echo $privacypolicy; ?>" class="menu-item__title menu-item__title--bold">プライバシー<br
              class="is-pc">ポリシー</a>
          <a href="<?php echo $termsofservice; ?>" class="menu-item__title menu-item__title--bold">利用規約</a>
          <a href="<?php echo $contact; ?>" class="menu-item__title menu-item__title--bold">お問い合わせ</a>
        </li>
      </ul>
    </div>
    <small class="footer__copyright">Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>