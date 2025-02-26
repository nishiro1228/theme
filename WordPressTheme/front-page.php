<?php get_header(); ?>

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
$privacy_policy = esc_url( home_url( '/privacy_policy/' ) );
$terms_of_service = esc_url( home_url( '/terms_of_service/' ) );
?>

<main>
  <!-- mv -->
  <div class="mv">
    <div class="mv__inner">
      <div class="mv__wrap">
        <p class="mv__title">DIVING</p>
        <p class="mv__text">into the ocean</p>
      </div>
      <div class="mv__slider js-mv-swiper swiper">
        <div class="swiper-wrapper">
          <?php 
        // 画像フィールドを取得
        $images = [
          get_field('slider_image_1'),
          get_field('slider_image_2'),
          get_field('slider_image_3'),
          get_field('slider_image_4')
        ];
        
        // 画像が設定されている場合のみスライダーを生成
        foreach ($images as $image): 
          if ($image): // 画像がセットされているかチェック
            $pc_image = $image['url']; // PC用画像
            $sp_image = $image['sizes']['medium_large']; // SP用画像（適切なサイズを選択）
            $alt_text = $image['alt'] ?: "スライダー画像"; // alt属性（空の場合のデフォルト）
        ?>
          <div class="swiper-slide">
            <picture class="mv__img">
              <source srcset="<?php echo esc_url($pc_image); ?>" media="(min-width: 769px)" />
              <img src="<?php echo esc_url($sp_image); ?>" alt="<?php echo esc_attr($alt_text); ?>">
            </picture>
          </div>
          <?php endif; endforeach; ?>
        </div>
      </div>
    </div>
  </div>


  <!-- Campaign -->
  <section class="campaign layout-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__title section-title">
        <span class="section-title__main">Campaign</span>
        <h2 class="section-title__sub">キャンペーン</h2>
      </div>
      <div class="campaign__swiper">
        <div class="campaign__button-wrap is-sp">
          <div class="swiper-button-prev js-campaign-arrow"></div>
          <div class="swiper-button-next js-campaign-arrow"></div>
        </div>
        <div class="campaign__container swiper js-campaign-swiper">
          <div class="swiper-wrapper campaign__cards cards">
            <div class="cards__item swiper-slide">
              <a href="#" class="card">
                <div class="card__item">
                  <div class="card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg"
                      alt="さまざまな魚が泳いでいる様子">
                  </div>
                  <div class="card__wrap">
                    <div class="card__meta">
                      <p class="card__category">ライセンス講習</p>
                      <p class="card__title">ライセンス取得</p>
                    </div>
                    <p class="card__text">全部コミコミ(お一人様)</p>
                    <div class="card__body">
                      <p class="card__price1">¥56,000</p>
                      <p class="card__price2">¥46,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="cards__item swiper-slide">
              <a href="#" class="card">
                <div class="card__item">
                  <div class="card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg"
                      alt="快晴の空に澄んだ海の様子">
                  </div>
                  <div class="card__wrap">
                    <div class="card__meta">
                      <p class="card__category">体験ダイビング</p>
                      <p class="card__title">貸切体験ダイビング</p>
                    </div>
                    <p class="card__text">全部コミコミ(お一人様)</p>
                    <div class="card__body">
                      <p class="card__price1">¥24,000</p>
                      <p class="card__price2">¥18,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="cards__item swiper-slide">
              <a href="#" class="card">
                <div class="card__item">
                  <div class="card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.jpg" alt="くらい海の
                        中を泳ぐクラゲ">
                  </div>
                  <div class="card__wrap">
                    <div class="card__meta">
                      <p class="card__category">体験ダイビング</p>
                      <p class="card__title">ナイトダイビング</p>
                    </div>
                    <p class="card__text">全部コミコミ(お一人様)</p>
                    <div class="card__body">
                      <p class="card__price1">¥10,000</p>
                      <p class="card__price2">¥8,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="cards__item swiper-slide">
              <a href="#" class="card">
                <div class="card__item">
                  <div class="card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign4.jpg"
                      alt="海でダイビングを楽しんでいる様子">
                  </div>
                  <div class="card__wrap">
                    <div class="card__meta">
                      <p class="card__category">ファンダイビング</p>
                      <p class="card__title">貸切ファンダイビング</p>
                    </div>
                    <p class="card__text">全部コミコミ(お一人様)</p>
                    <div class="card__body">
                      <p class="card__price1">¥20,000</p>
                      <p class="card__price2">¥16,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="cards__item swiper-slide">
              <a href="#" class="card">
                <div class="card__item">
                  <div class="card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg"
                      alt="さまざまな魚が泳いでいる様子">
                  </div>
                  <div class="card__wrap">
                    <div class="card__meta">
                      <p class="card__category">ライセンス講習</p>
                      <p class="card__title">ライセンス取得</p>
                    </div>
                    <p class="card__text">全部コミコミ(お一人様)</p>
                    <div class="card__body">
                      <p class="card__price1">¥56,000</p>
                      <p class="card__price2">¥46,000</p>
                    </div>
                  </div>

                </div>

              </a>
            </div>
            <div class="cards__item swiper-slide">
              <a href="#" class="card">
                <div class="card__item">
                  <div class="card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg"
                      alt="快晴の空に澄んだ海の様子">
                  </div>
                  <div class="card__wrap">
                    <div class="card__meta">
                      <p class="card__category">体験ダイビング</p>
                      <p class="card__title">貸切体験ダイビング</p>
                    </div>
                    <p class="card__text">全部コミコミ(お一人様)</p>
                    <div class="card__body">
                      <p class="card__price1">¥24,000</p>
                      <p class="card__price2">¥18,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="cards__item swiper-slide">
              <a href="#" class="card">
                <div class="card__item">
                  <div class="card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.jpg" alt="くらい海の
                        中を泳ぐクラゲ">
                  </div>
                  <div class="card__wrap">
                    <div class="card__meta">
                      <p class="card__category">体験ダイビング</p>
                      <p class="card__title">ナイトダイビング</p>
                    </div>
                    <p class="card__text">全部コミコミ(お一人様)</p>
                    <div class="card__body">
                      <p class="card__price1">¥10,000</p>
                      <p class="card__price2">¥8,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="cards__item swiper-slide">
              <a href="#" class="card">
                <div class="card__item">
                  <div class="card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign4.jpg"
                      alt="海でダイビングを楽しんでいる様子">
                  </div>
                  <div class="card__wrap">
                    <div class="card__meta">
                      <p class="card__category">ファンダイビング</p>
                      <p class="card__title">貸切ファンダイビング</p>
                    </div>
                    <p class="card__text">全部コミコミ(お一人様)</p>
                    <div class="card__body">
                      <p class="card__price1">¥20,000</p>
                      <p class="card__price2">¥16,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="campaign__button">
        <a href="<?php echo $campaign; ?>" class="commom-button">View more <span class="arrow"></span></a>
      </div>
    </div>
  </section>

  <!-- about -->
  <section class="about layout-about">
    <div class="about__inner inner">
      <div class="about__section-title section-title">
        <span class="section-title__main">About us</span>
        <h2 class="section-title__sub">私たちについて</h2>
      </div>
      <div class="about__container">
        <div class="about__img-wrap">
          <div class="about__img1">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about2.jpg" alt="黄色い魚が二匹泳いでいる様子" width=""
              height="" loading="lazy" decoding="async">
          </div>
          <div class="about__img2">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about1.jpg" alt="家の屋根のシーサーを写している様子"
              width="" height="" loading="lazy" decoding="async">
          </div>
        </div>
        <div class="about__wrap">
          <p class="about__title">Dive into<br>
            the Ocean</p>
          <div class="about__wrap-body">
            <p class="about__text text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            <div class="about__button">
              <a href="<?php echo $about; ?>" class="commom-button">View more <span class="arrow"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- information -->
  <section class="information layout-information">
    <div class="information__inner inner">
      <div class="information__section-title section-title">
        <span class="section-title__main">Information</span>
        <h2 class="section-title__sub">ダイビング情報</h2>
      </div>
      <div class="information__container">
        <div class="information__img colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean3.jpg" alt="黄色や青色の魚が泳いでいる様子" width=""
            height="" loading="lazy" decoding="async">
        </div>
        <div class="information__wrap">
          <p class="information__title">ライセンス講習</p>
          <p class="information__text text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
          <div class="information__button">
            <a href="<?php echo $information; ?>" class="commom-button">View more <span class="arrow"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- blog -->
  <section class="blog">
    <div class="blog__inner inner">
      <div class="blog__section-title section-title">
        <span class="section-title__main section-title__main--white">Blog</span>
        <h2 class="section-title__sub section-title__sub--white">ブログ</h2>
      </div>
      <div class="blog-cards blog-cards__items">
        <div class="blog-cards__item">
          <a href="#" class="blog-card">
            <div class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Blog1.jpg" alt="サンゴ礁">
            </div>
            <div class="blog-card__wrap">
              <div class="blog-card__meta">
                <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
                <p class="blog-card__title">ライセンス取得</p>
              </div>
              <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </div>
          </a>
        </div>
        <div class="blog-cards__item">
          <a href="#" class="blog-card">
            <div class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Blog2.jpg" alt="ウミガメが泳いでいる様子">
            </div>
            <div class="blog-card__wrap">
              <div class="blog-card__meta">
                <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
                <p class="blog-card__title">ウミガメと泳ぐ</p>
              </div>
              <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </div>
          </a>
        </div>
        <div class="blog-cards__item">
          <a href="#" class="blog-card">
            <div class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Blog3.jpg"
                alt="カクレクマノミがイソギンチャクから顔を出している様子">
            </div>
            <div class="blog-card__wrap">
              <div class="blog-card__meta">
                <time class="blog-card__dete" datetime="2023-11-17">2023.11/17</time>
                <p class="blog-card__title">カクレクマノミ</p>
              </div>
              <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </div>
          </a>
        </div>
      </div>
      <div class="blog__button">
        <a href="<?php echo $blog; ?>" class="commom-button">View more<span class="arrow"></span></a>
      </div>
    </div>
  </section>

  <!-- voice -->
  <section class="voice layout-voice">
    <div class="voice__inner inner">
      <div class="voice__section-title section-title">
        <span class="section-title__main">Voice</span>
        <h2 class="section-title__sub">お客様の声</h2>
      </div>
      <div class="voice__cards voice-cards">
        <div class="voice-cards__item voice-card">
          <div class="voice-card__wrap">
            <div class="voice-card__head">
              <div class="voice-card__body">
                <div class="voice-card__detail">20代(女性)</div>
                <div class="voice-card__category">ライセンス講習</div>
              </div>
              <div class="voice-card__title">ここにタイトルが入ります。ここにタイトル</div>
            </div>
            <div class="voice-card__wrap-img colorbox">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Voice1.jpg" alt="麦わら帽子をかぶっている女性"
                width="" height="" loading="lazy" decoding="async">
            </div>
          </div>
          <div class="voice-card__text text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。</div>
        </div>
        <div class="voice-cards__item voice-card">
          <div class="voice-card__wrap">
            <div class="voice-card__head">
              <div class="voice-card__body">
                <div class="voice-card__detail">30代(男性)</div>
                <div class="voice-card__category">ファンダイビング</div>
              </div>
              <div class="voice-card__title">ここにタイトルが入ります。ここにタイトル</div>
            </div>
            <div class="voice-card__wrap-img colorbox">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Voice2.jpg" alt="紺色の服を着た男性" width=""
                height="" loading="lazy" decoding="async">
            </div>
          </div>
          <div class="voice-card__text text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。</div>
        </div>
      </div>
      <div class="voice__button">
        <a href="<?php echo $voice; ?>" class="commom-button">View more <span class="arrow"></span></a>
      </div>
    </div>
  </section>

  <!-- price -->
  <section class="price layout-price">
    <div class="price__inner inner">
      <div class="price__title section-title">
        <span class="section-title__main">Price</span>
        <h2 class="section-title__sub">料金一覧</h2>
      </div>
      <div class="price__container">
        <?php
// 各料金表のグループ名とフィールドキー名の対応表
$price_tables = [
    'ライセンス講習' => [
        'group' => 'price-table1',
        'data_key' => 'price-data_license',
        'fee_key' => 'price-fee_license',
    ],
    '体験ダイビング' => [
        'group' => 'price-table2',
        'data_key' => 'price-data_experience',
        'fee_key' => 'price-fee_experience',
    ],
    'ファンダイビング' => [
        'group' => 'price-table3',
        'data_key' => 'price-data_fan',
        'fee_key' => 'price-fee_fan',
    ],
    'スペシャルダイビング' => [
        'group' => 'price-table4',
        'data_key' => 'price-data_special',
        'fee_key' => 'price-fee_special',
    ],
];

// 現在の投稿IDを取得
$post_id = get_the_ID();
?>

        <ul class="price__list">
          <?php foreach ($price_tables as $title => $info) : ?>
          <?php
        // SCFから該当のカスタムフィールドデータを取得
        $prices = SCF::get($info['group'], $post_id);

        // データが存在する場合のみ表示
        if (!empty($prices) && is_array($prices)) :
        ?>
          <li class="price__list-item">
            <p class="price__item-title"><?php echo esc_html($title); ?></p>
            <?php foreach ($prices as $price) : ?>
            <?php
                    // 正しいキー名でデータを取得
                    $item_text = !empty($price[$info['data_key']]) ? esc_html($price[$info['data_key']]) : '未設定';

                    // 料金の数値変換を追加（カンマを除去し、floatに変換）
                    $item_fee = !empty($price[$info['fee_key']]) 
                        ? '¥' . number_format(floatval(str_replace(',', '', $price[$info['fee_key']]))) 
                        : '¥0';
                    ?>
            <div class="price__item-wrap">
              <p class="price__item-text"><?php echo $item_text; ?></p>
              <div class="price__item-fee"><?php echo $item_fee; ?></div>
            </div>
            <?php endforeach; ?>
          </li>
          <?php else : ?>
          <li class="price__list-item">
            <p class="price__item-title"><?php echo esc_html($title); ?></p>
            <p class="price__item-text">料金情報は現在登録されていません。</p>
          </li>
          <?php endif; ?>
          <?php endforeach; ?>
        </ul>




        <div class="price__colorbox colorbox">
          <picture class="price__container-img">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/Price1.jpg"
              media="(min-width: 767px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Price-sp.jpg" alt="ウミガメが泳いでいる様子">
          </picture>
        </div>
      </div>
      <div class="price__button">
        <a href="<?php echo $price; ?>" class="commom-button">View more <span class="arrow"></span></a>
      </div>
    </div>
  </section>

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