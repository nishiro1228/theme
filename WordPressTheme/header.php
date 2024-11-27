<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- header -->
  <header class="header layout-header js-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="./index.html"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg"
            alt="CodeUps" loading="lazy" decoding="async"></a>
      </h1>
      <nav class="header__nav is-sp">
        <ul class="header__nav-items">
          <li class="header__nav-item">
            <a href="campaign.html">Campaign<span>キャンペーン</span></a>
          </li>
          <li class="header__nav-item">
            <a href="about.html">About us<span>私たちについて</span></a>
          </li>
          <li class="header__nav-item">
            <a href="information.html">Information<span>ダイビング情報</span></a>
          </li>
          <li class="header__nav-item">
            <a href="blog.html">Blog<span>ブログ</span></a>
          </li>
          <li class="header__nav-item">
            <a href="voice.html">Voice<span>お客様の声</span></a>
          </li>
          <li class="header__nav-item">
            <a href="price.html">Price<span>料金一覧</span></a>
          </li>
          <li class="header__nav-item">
            <a href="faq.html">FAQ<span>よくある質問</span></a>
          </li>
          <li class="header__nav-item">
            <a href="contact.html">Contact<span>お問合せ</span></a>
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
            <a href="campaign.html" class="menu-item__title menu-item__title--bold">キャンペーン</a>
            <a href="campaign.html" class="menu-item__title">ライセンス取得</a>
            <a href="campaign.html" class="menu-item__title">貸切体験ダイビング</a>
            <a href="campaign.html" class="menu-item__title">ナイトダイビング</a>
            <a href="about.html" class="menu-item__title menu-item__title--bold">私たちについて</a>
          </li>
          <li class="menu-list__item menu-item">
            <a href="information.html" class="menu-item__title menu-item__title--bold">ダイビング情報</a>
            <a href="information.html?tab=tab01" class="menu-item__title">ライセンス講習</a>
            <a href="information.html?tab=tab02" class="menu-item__title">体験ダイビング</a>
            <a href="information.html?tab=tab03" class="menu-item__title">ファンダイビング</a>
            <a href="blog.html" class="menu-item__title menu-item__title--bold">ブログ</a>
          </li>
          <li class="menu-list__item menu-item">
            <a href="voice.html" class="menu-item__title menu-item__title--bold">お客様の声</a>
            <a href="price.html" class="menu-item__title menu-item__title--bold">料金一覧</a>
            <a href="price.html" class="menu-item__title">ライセンス講習</a>
            <a href="price.html" class="menu-item__title">体験ダイビング</a>
            <a href="price.html" class="menu-item__title">ファンダイビング</a>
          </li>
          <li class="menu-list__item menu-item">
            <a href="faq.html" class="menu-item__title menu-item__title--bold">よくある質問</a>
            <a href="privacy-policy.html" class="menu-item__title menu-item__title--bold">プライバシー<br>ポリシー</a>
            <a href="Terms-of-Service.html" class="menu-item__title menu-item__title--bold">利用規約</a>
            <a href="contact.html" class="menu-item__title menu-item__title--bold">おい問わ合せ</a>
          </li>
        </ul>
      </div>
    </div>
  </div>