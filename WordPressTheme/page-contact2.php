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
        <span class="breadcrumb__item">お問い合わせ</span>
      </span>
      &nbsp;&gt;&nbsp;
      <span>
        <span class="breadcrumb__item">お問い合わせエラー</span>
      </span>
      <!-- Breadcrumb NavXTで出力される部分 ここまで -->
    </div>
  </div>


  <!-- sub-contact -->
  <div class="sub-contact layout-sub-contact">
    <div class="sub-contact__inner">
      <p class="sub-contact__error-text">※必須項目が入力されていません。入力してください。</p>
      <form class="sub-contact__form form" action="">
        <dl class="form__wrap">
          <dt class="form__label">お名前<span>必須</span></dt>
          <dd class="form__input form-input form-input--error">
            <input type="text" placeholder="沖縄　太郎">
          </dd>
        </dl>
        <dl class="form__wrap">
          <dt class="form__label">メールアドレス<span>必須</span></dt>
          <dd class="form__input form-input">
            <input type="email" placeholder="aaa000@ggmail.com">
          </dd>
        </dl>
        <dl class="form__wrap">
          <dt class="form__label">電話番号<span>必須</span></dt>
          <dd class="form__input form-input">
            <input type="tel" placeholder="000-0000-0000">
          </dd>
        </dl>
        <dl class="form__wrap">
          <dt class="form__label">お問合せ項目<span>必須</span></dt>
          <dd class="form__checkbox form-checkbox">
            <label><input type="checkbox" name="sns" value="Twitter"><span>ダイビング講習について</span></label>
            <label><input type="checkbox" name="sns" value="Instagram"><span>ファンデイビングについて</span></label>
            <label><input type="checkbox" name="sns" value="Facebook"><span>体験ダイビングについて</span></label>
          </dd>
        </dl>
        <dl class="form__wrap">
          <dt class="form__label">キャンペーン</dt>
          <dd class="form__select form-select form-select--error">
            <select>
              <option hidden>キャンペーン内容を選択</option>
              <option value="東京">東京</option>
              <option value="大阪">大阪</option>
              <option value="福岡">福岡</option>
              <option value="その他">その他</option>
            </select>
          </dd>
        </dl>
        <dl class="form__wrap form__wrap--textarea">
          <dt class="form__label">お問合せ内容<span>必須</span></dt>
          <dd class="form__textarea form-textarea">
            <textarea name="message"></textarea>
          </dd>
        </dl>
        <div class="sub-contact__form-privacy">
          <label>
            <input type="checkbox" name="privacy-policy" value="agree">
            <span><a href="#">個人情報の取り扱いについて同意のうえ送信します。</span>
          </label>
        </div>
        <div class="sub-contact__button">
          <a href="" class="commom-button commom-button--send">Send<span class="arrow arrow--send"></span></a>
        </div>
      </form>
    </div>
  </div>
</main>
<?php get_footer(); ?>