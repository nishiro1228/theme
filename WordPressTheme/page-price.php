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
  <?php get_template_part('parts/breadcrumb') ?>

  <?php 
  $top = esc_url( home_url( '/top/' ) );
  $contact = esc_url( home_url( '/contact/' ) );
   ?>

  <!-- sub-price -->
  <div class="sub-price layout-sub-price">
    <div class="sub-price__inner">

      <?php
    // グループ名一覧を設定
    $price_tables = [
        'ライセンス講習' => [
            'group_name' => 'price-table1',
            'data_key' => 'price-data_license',
            'fee_key' => 'price-fee_license',
        ],
        '体験ダイビング' => [
            'group_name' => 'price-table2',
            'data_key' => 'price-data_experience',
            'fee_key' => 'price-fee_experience',
        ],
        'ファンダイビング' => [
            'group_name' => 'price-table3',
            'data_key' => 'price-data_fan',
            'fee_key' => 'price-fee_fan',
        ],
        'スペシャルダイビング' => [
            'group_name' => 'price-table4',
            'data_key' => 'price-data_special',
            'fee_key' => 'price-fee_special',
        ],
    ];

    // テーブルループ開始
    foreach ($price_tables as $title => $keys) :
        // SCFのデータ取得
        $price_data = SCF::get($keys['group_name']);

        // データが空の場合はスキップ
        if (empty($price_data)) continue;
    ?>

      <!-- PC用テーブル -->
      <table class="sub-price__list sub-price-list is-sp" border="1">
        <tr>
          <td rowspan="<?php echo count($price_data); ?>" class="sub-price-list__head">
            <p class="sub-price-list__title"><?php echo esc_html($title); ?></p>
          </td>
          <?php
        // データループ
        foreach ($price_data as $index => $data) :
          $price_content = isset($data[$keys['data_key']]) ? esc_html($data[$keys['data_key']]) : 'データがありません';
          $price_fee_raw = isset($data[$keys['fee_key']]) ? $data[$keys['fee_key']] : '0';
          $price_fee_cleaned = (int) preg_replace('/[^\d]/', '', $price_fee_raw); // 数値以外を削除
          $price_fee = number_format($price_fee_cleaned);
        ?>
          <?php if ($index > 0) : ?>
        </tr>
        <tr><?php endif; // 2行目以降 ?>
          <td class="sub-price-list__data"><?php echo $price_content; ?></td>
          <td class="sub-price-list__fee">¥<?php echo $price_fee; ?></td>
          <?php endforeach; ?>
        </tr>
      </table>

      <!-- スマホ用テーブル -->
      <table class="sub-price__list-sp sub-price-list-sp is-pc" border="1">
        <tr>
          <td colspan="2" class="sub-price-list-sp__head">
            <p class="sub-price-list-sp__title"><?php echo esc_html($title); ?></p>
          </td>
        </tr>
        <?php 
      foreach ($price_data as $data) : 
        $price_content = isset($data[$keys['data_key']]) ? esc_html($data[$keys['data_key']]) : 'データがありません';
        $price_fee_raw = isset($data[$keys['fee_key']]) ? $data[$keys['fee_key']] : '0';
        $price_fee_cleaned = (int) preg_replace('/[^\d]/', '', $price_fee_raw); // 数値以外を削除
        $price_fee = number_format($price_fee_cleaned);
      ?>
        <tr>
          <td class="sub-price-list-sp__date"><?php echo $price_content; ?></td>
          <td class="sub-price-list-sp__fee">¥<?php echo $price_fee; ?></td>
        </tr>
        <?php endforeach; ?>
      </table>

      <?php endforeach; ?>

    </div>
  </div>


  <!-- contact -->
  <section class="contact layout-contact">
    <div class="contact__inner inner">
      <div class="contact__container">
        <div class="contact__left">
          <div class="contact__logo">
            <a href="<?php echo $top; ?>">
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
            <a href="<?php echo $contact; ?>" class="commom-button">View more <span class="arrow"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>