<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-DYTEQNYJ0E"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-DYTEQNYJ0E');
  </script>
</head>

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

<body>
  <div class="wrap">
    <!-- header -->
    <header class="header layout-header <?php if (is_404()) echo 'layout-header--404'; ?> js-header">
      <div class="header__inner">
        <?php if (is_front_page()) : ?>
        <h1 class="header__logo">
          <?php else : ?>
          <h2 class="header__logo">
            <?php endif; ?>
            <a href="<?php echo $top; ?>">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="CodeUps" loading="lazy"
                decoding="async">
            </a>
            <?php if (is_front_page()) : ?>
        </h1>
        <?php else : ?>
        </h2>
        <?php endif; ?>


        <nav class="header__nav is-sp">
          <ul class="header__nav-items">
            <li class="header__nav-item">
              <a href="<?php echo $campaign; ?>">Campaign<span>キャンペーン</span></a>
            </li>
            <li class="header__nav-item">
              <a href="<?php echo $about; ?>">About us<span>私たちについて</span></a>
            </li>
            <li class="header__nav-item">
              <a href="<?php echo $information; ?>">Information<span>ダイビング情報</span></a>
            </li>
            <li class="header__nav-item">
              <a href="<?php echo $blog; ?>">Blog<span>ブログ</span></a>
            </li>
            <li class="header__nav-item">
              <a href="<?php echo $voice; ?>">Voice<span>お客様の声</span></a>
            </li>
            <li class="header__nav-item">
              <a href="<?php echo $price; ?>">Price<span>料金一覧</span></a>
            </li>
            <li class="header__nav-item">
              <a href="<?php echo $faq; ?>">FAQ<span>よくある質問</span></a>
            </li>
            <li class="header__nav-item">
              <a href="<?php echo $contact; ?>">Contact<span>お問合せ</span></a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="header__hamburger js-hamburger is-pc">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>

    <!-- ドロワー -->
    <div class="header__drawer-menu drawer-menu js-drawer no-scroll">
      <div class="drawer-menu__inner">
        <div class="drawer-menu__body">
          <ul class="drawer-menu__list menu-list">
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
              <a href="<?php echo $privacypolicy; ?>" class="menu-item__title menu-item__title--bold">プライバシー<br>ポリシー</a>
              <a href="<?php echo $termsofservice; ?>" class="menu-item__title menu-item__title--bold">利用規約</a>
              <a href="<?php echo $contact; ?>" class="menu-item__title menu-item__title--bold">おい問わ合せ</a>
            </li>
          </ul>
        </div>
      </div>
    </div>