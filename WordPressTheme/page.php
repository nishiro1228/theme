<?php get_header(); ?>
<main>
  <!-- sub-mv -->
  <section class="sub-mv">
    <div class="sub-mv__inner">
      <?php if (is_page('privacypolicy')) : ?>
      <!-- プライバシーポリシー -->
      <h1 class="sub-mv__title sub-section-title">Privacy Policy</h1>
      <picture class="sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/PrivacyPolicy-mv.webp"
          media="(min-width: 769px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/PrivacyPolicy-mv-sp.webp"
          alt="サンゴ礁の近くを無数の魚が泳いでいる様子" loading="lazy" decoding="async">
      </picture>
      <?php elseif (is_page('terms-of-service')) : ?>
      <!-- 利用規約 -->
      <h1 class="sub-mv__title sub-section-title">Terms of Service</h1>
      <picture class="sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/PrivacyPolicy-mv.webp"
          media="(min-width: 769px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/PrivacyPolicy-mv-sp.webp"
          alt="サンゴ礁の近くを無数の魚が泳いでいる様子" loading="lazy" decoding="async">
      </picture>
      <?php endif; ?>
    </div>
  </section>

  <!-- パンくずリスト -->
  <div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
      <span>
        <a href="index.html">
          <span>TOP</span>
        </a>
      </span>
      &nbsp;&gt;&nbsp;
      <span>
        <span class="breadcrumb__item">
          <?php if (is_page('privacypolicy')) : ?>
          プライバシーポリシー
          <?php elseif (is_page('terms-of-service')) : ?>
          利用規約
          <?php endif; ?>
        </span>
      </span>
    </div>
  </div>

  <!-- コンテンツ -->
  <div class="privacy-policy layout-privacy-policy">
    <div class="privacy-policy__inner">
      <?php if (is_page('privacypolicy')) : ?>
      <!-- プライバシーポリシーのコンテンツ -->
      <div class="privacy-policy__title">プライバシーポリシー</div>
      <div class="privacy-policy__items">
        <div class="privacy-policy__item">
          <p class="privacy-policy__text">以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。</p>
        </div>
        <div class="privacy-policy__item">
          <ol class="privacy-policy__numbers">
            <li class="privacy-policy__number">1.概要
              当社は、お客様の個人情報を大切に扱い、個人情報保護に努めています。本プライバシーポリシーには、当社がどのように個人情報を収集し、使用するかについて説明しています。</li>
            <li class="privacy-policy__number">2.収集する情報 当社は、お客様が当社のサービスを利用する際に、お名前、住所、電話番号、メールアドレスなどの個人情報を収集する場合があります。
            </li>
          </ol>
        </div>
        <div class="privacy-policy__item">
          <p class="privacy-policy__text">また、当社のサイトを閲覧する際に、IPアドレス、ブラウザの種類、言語設定、アクセス日時などの情報も収集する場合があります。</p>
          <ol class="privacy-policy__numbers">
            <li class="privacy-policy__number">1.情報の使用 当社は、お客様から収集した個人情報を、以下の目的で使用することがあります。</li>
          </ol>
        </div>
        <div class="privacy-policy__item">
          <p class="privacy-policy__text">・お客様からのお問い合わせやサポートの提供 ・当社のサービスや製品の提供 ・当社のサイトの改善や新しいサービスの開発 ・法律や規制に基づく義務の履行
          </p>
          <ol class="privacy-policy__numbers">
            <li class="privacy-policy__number">1.情報の共有 当社は、お客様から収集した個人情報を、以下の場合に限り第三者に提供することがあります。</li>
          </ol>
        </div>
        <div class="privacy-policy__item">
          <p class="privacy-policy__text">・お客様の同意がある場合 ・法律や規制に基づく場合 ・当社が信頼できると判断した業務委託先に必要な範囲で提供する場合</p>
          <ol class="privacy-policy__numbers">
            <li class="privacy-policy__number">1.セキュリティ
              当社は、お客様の個人情報を適切に保護するために、適切な安全対策を講じます。個人情報への不正アクセス、紛失、改ざん、漏洩等を防止するための措置を講じます。</li>
            <li class="privacy-policy__number">2.Cookieの使用
              当社は、お客様により良いサイトの利用体験を提供するために、Cookieを使用する場合があります。Cookieは、お客様が当社のサイトを訪れた際に、お客様のブラウザに保存される小さなデータファイルです。Cookieには個人情報は含まれません。
            </li>
            <li class="privacy-policy__number">3.お問い合わせ先 当社のプライバシーポリシーに関するご質問やご意見は、以下の連絡先までお問い合わせください。 [会社名] [住所]
              [電話番号] [メールアドレス]</li>
            <li class="privacy-policy__number">4.プライバシーポリシーの変更
              当社は、必要に応じて本プライバシーポリシーを変更することがあります。変更後のプライバシーポリシーは、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。
            </li>
          </ol>
        </div>
        <div class="privacy-policy__item">
          <p class="privacy-policy__text">以上が、当社のプライバシーポリシーの概要です。お客様の個人情報保護のために、常に努めてまいります。</p>
        </div>
      </div>
      <?php elseif (is_page('terms-of-service')) : ?>
      <!-- 利用規約のコンテンツ -->
      <div class="privacy-policy__title privacy-policy__title--no-indent">利用規約</div>
      <div class="privacy-policy__items">
        <div class="privacy-policy__item">
          <p class="privacy-policy__text privacy-policy__text--no-indent">以下は、Webサイトで使用する一般的な利用規約の例です。</p>
        </div>
        <div class="privacy-policy__item">
          <ol class="privacy-policy__numbers">
            <li class="privacy-policy__number">1.概要
              この利用規約は、当社が提供するサービスの利用に関する条件を定めたものです。本規約に同意いただくことで、当社のサービスを利用いただけます。なお、本規約に違反した場合、当社はサービスの提供を中止することがあります。
            </li>
            <li class="privacy-policy__number">2.サービスの利用
              当社のサービスは、お客様が自己責任において利用するものとし、当社はその利用に対して責任を負いません。また、当社はいつでも、サービスの提供を中止することができるものとします。
            </li>
            <li class="privacy-policy__number">3.禁止事項 お客様は、以下の行為を禁止します。
            </li>
          </ol>
          <p class="privacy-policy__text">・当社のサービスに対して不正なアクセスをすること ・当社のサービスにおいて、他のユーザーに対して迷惑をかける行為をすること
            ・当社のサービスを商業目的で利用すること ・当社のサービスに関する知的財産権を侵害する行為をすること ・その他、法律や公序良俗に反する行為をすること</p>
        </div>
        <div class="privacy-policy__item">
          <ol class="privacy-policy__numbers">
            <li class="privacy-policy__number">1.知的財産権
              当社のサービスに関する知的財産権は、当社または当社にライセンスを許諾している者に帰属します。お客様は、当社の事前の承諾なしに、当社のサービスに関する知的財産権を使用することはできません。</li>
            <li class="privacy-policy__number">2.免責事項
              当社は、当社のサービスに関連して発生した損害について、一切の責任を負わないものとします。また、当社は、当社のサービスにより提供される情報の正確性、信頼性、完全性、適時性についても一切保証しません。</li>
            <li class="privacy-policy__number">3.プライバシー 当社は、お客様の個人情報を適切に保護するために、個人情報保護方針に従って適切な取扱いを行います。</li>
            <li class="privacy-policy__number">4.その他の規定
              本規約は、日本法に準拠して解釈されるものとし、当社とお客様は、本規約に関する紛争が生じた場合、東京地方裁判所を第一審の専属的合意管轄裁判所とすることに同意します。</li>
            <li class="privacy-policy__number">5.利用規約の変更
              当社は、必要に応じて本利用規約を変更することがあります。変更後の利用規約は、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。</li>
          </ol>
        </div>
        <div class="privacy-policy__item">
          <p class="privacy-policy__text">以上が、当社の利用規約の概要です。お客様のサービス利用にあたっては、本規約をお読みいただき、同意いただける場合のみサービスをご利用ください。</p>
        </div>
      </div>
      <?php endif; ?>
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