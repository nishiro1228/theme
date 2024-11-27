<?php get_header(); ?>
<main>
  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <h1 class="sub-mv__title sub-section-title">Price</h1>
      <picture class="sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price-mv.webp"
          media="(min-width: 769px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price-mv-sp.webp" alt="海面をダイバーが泳いでいる様子"
          loading="lazy" decoding="async">
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
      <!-- Breadcrumb NavXTで出力される部分 ここから -->
      <span>
        <a href="index.html">
          <span>TOP</span>
        </a>
      </span>
      &nbsp;&gt;&nbsp;
      <span>
        <span class="breadcrumb__item">料金一覧</span>
      </span>
      <!-- Breadcrumb NavXTで出力される部分 ここまで -->
    </div>
  </div>


  <!-- sub-price -->
  <!-- PC用テーブル -->
  <div class="sub-price layout-sub-price">
    <div class="sub-price__inner">
      <table class="sub-price__list sub-price-list is-sp" border="1">
        <tr>
          <td rowspan="3" class="sub-price-list__head">
            <p class="sub-price-list__title">ライセンス講習</p>
          </td>
          <td class="sub-price-list__data">オープンウォーターダイバーコース</td>
          <td class="sub-price-list__fee">¥50,000</td>
        </tr>
        <tr>
          <td class="sub-price-list__data">アドバンスドオープンウォーターコース</td>
          <td class="sub-price-list__fee">¥60,000</td>
        </tr>
        <tr>
          <td class="sub-price-list__data">レスキュー＋EFRコース</td>
          <td class="sub-price-list__fee">¥70,000</td>
        </tr>
      </table>
      <table class="sub-price__list sub-price-list is-sp" border="1">
        <tr>
          <td rowspan="4" class="sub-price-list__head">
            <p class="sub-price-list__title">体験ダイビング</p>
          </td>
          <td class="sub-price-list__data">ビーチ体験ダイビング(半日)</td>
          <td class="sub-price-list__fee">¥7,000</td>
        </tr>
        <tr>
          <td class="sub-price-list__data">ビーチ体験ダイビング(1日)</td>
          <td class="sub-price-list__fee">¥14,000</td>
        </tr>
        <tr>
          <td class="sub-price-list__data">ボート体験ダイビング(半日)</td>
          <td class="sub-price-list__fee">¥10,000</td>
        </tr>
        <tr>
          <td class="sub-price-list__data">ボート体験ダイビング(1日)</td>
          <td class="sub-price-list__fee">¥18,000</td>
        </tr>
      </table>
      <table class="sub-price__list sub-price-list is-sp" border="1">
        <tr>
          <td rowspan="4" class="sub-price-list__head">
            <p class="sub-price-list__title">ファンダイビング</p>
          </td>
          <td class="sub-price-list__data">ビーチダイビング(2ダイブ)</td>
          <td class="sub-price-list__fee">¥14,000</td>
        </tr>
        <tr>
          <td class="sub-price-list__data">ボートダイビング(2ダイブ)</td>
          <td class="sub-price-list__fee">¥18,000</td>
        </tr>
        <tr>
          <td class="sub-price-list__data">スペシャルダイビング(2ダイブ)</td>
          <td class="sub-price-list__fee">¥24,000</td>
        </tr>
        <tr>
          <td class="sub-price-list__data">ナイトダイビング(1ダイブ)</td>
          <td class="sub-price-list__fee">¥10,000</td>
        </tr>
      </table>
      <table class="sub-price__list sub-price-list is-sp" border="1">
        <tr>
          <td rowspan="3" class="sub-price-list__head">
            <p class="sub-price-list__title">スペシャルダイビング</p>
          </td>
          <td class="sub-price-list__data">貸切ダイビング(2ダイブ)</td>
          <td class="sub-price-list__fee">¥24,000</td>
        </tr>
        <tr>
          <td class="sub-price-list__data">1日ダイビング(3ダイブ)</td>
          <td class="sub-price-list__fee">¥32,000</td>
        </tr>
        <tr>
          <td class="sub-price-list__data">ナイトダイビング(2ダイブ)</td>
          <td class="sub-price-list__fee">¥14,000</td>
        </tr>
      </table>

      <!-- スマホ用テーブル -->
      <table class="sub-price__list-sp sub-price-list-sp is-pc" border="1">
        <tr>
          <td colspan="2" class="sub-price-list-sp__head">
            <p class="sub-price-list-sp__title">ライセンス講習</p>
          </td>
        </tr>
        <tr>
          <td class="sub-price-list-sp__date">オープンウォーター<br>
            ダイバーコース</td>
          <td class="sub-price-list-sp__fee">¥50,000</td>
        </tr>
        <tr>
          <td class="sub-price-list-sp__date">アドバンスド<br>
            オープンウォーターコース</td>
          <td class="sub-price-list-sp__fee">¥60,000</td>
        </tr>
        <tr>
          <td class="sub-price-list-sp__date">レスキュー＋EFRコース</td>
          <td class="sub-price-list-sp__fee">¥70,000</td>
        </tr>
      </table>
      <table class="sub-price__list-sp sub-price-list-sp is-pc" border="1">
        <tr>
          <td colspan="2" class="sub-price-list-sp__head">
            <p class="sub-price-list-sp__title">体験ダイビング</p>
          </td>
        </tr>
        <tr>
          <td class="sub-price-list-sp__date">ビーチ体験ダイビング<br>(半日)
          </td>
          <td class="sub-price-list-sp__fee">¥7,000</td>
        </tr>
        <tr>
          <td class="sub-price-list-sp__date">ビーチ体験ダイビング<br>(1日)
          </td>
          <td class="sub-price-list-sp__fee">¥14,000</td>
        </tr>
        <tr>
          <td class="sub-price-list-sp__date">ボート体験ダイビング<br>(半日)
          </td>
          <td class="sub-price-list-sp__fee">¥10,000</td>
        </tr>
        <tr>
          <td class="sub-price-list-sp__date">ボート体験ダイビング<br>(1日)
          </td>
          <td class="sub-price-list-sp__fee">¥18,000</td>
        </tr>
      </table>
      <table class="sub-price__list-sp sub-price-list-sp is-pc" border="1">
        <tr>
          <td colspan="2" class="sub-price-list-sp__head">
            <p class="sub-price-list-sp__title">ファンダイビング</p>
          </td>
        </tr>
        <tr>
          <td class="sub-price-list-sp__date">ビーチダイビング<br>(2ダイブ)
          </td>
          <td class="sub-price-list-sp__fee">¥14,000</td>
        </tr>
        <tr>
          <td class="sub-price-list-sp__date">ボートダイビング<br>(2ダイブ)
          </td>
          <td class="sub-price-list-sp__fee">¥18,000</td>
        </tr>
        <tr>
          <td class="sub-price-list-sp__date">スペシャルダイビング<br>(2ダイブ)
          </td>
          <td class="sub-price-list-sp__fee">¥24,000</td>
        </tr>
        <tr>
          <td class="sub-price-list-sp__date">ナイトダイビング<br>(1ダイブ)
          </td>
          <td class="sub-price-list-sp__fee">¥10,000</td>
        </tr>
      </table>
      <table class="sub-price__list-sp sub-price-list-sp is-pc" border="1">
        <tr>
          <td colspan="2" class="sub-price-list-sp__head">
            <p class="sub-price-list-sp__title">スペシャルダイビング</p>
          </td>
        </tr>
        <tr>
          <td class="sub-price-list-sp__date">貸切ダイビング<br>(2ダイブ)
          </td>
          <td class="sub-price-list-sp__fee">¥24,000</td>
        </tr>
        <tr>
          <td class="sub-price-list-sp__date">1日ダイビング<br>(3ダイブ)
          </td>
          <td class="sub-price-list-sp__fee">¥32,000</td>
        </tr>
        <tr>
          <td class="sub-price-list-sp__date">ナイトダイビング<br>(2ダイブ)
          </td>
          <td class="sub-price-list-sp__fee">¥14,000</td>
        </tr>
      </table>
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