<?php
// WordPressのwp_enqueue_scriptsフックを使用してリソースを読み込む
function my_theme_enqueue_scripts() {
    // Google Fontsの読み込み
    wp_enqueue_style(
        'google-fonts', 
        'https://fonts.googleapis.com/css2?family=Gotu&family=Inter:wght@100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', 
        array(), 
        null
    );

    // SwiperのCSS読み込み
    wp_enqueue_style(
        'swiper-style', 
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', 
        array(), 
        null
    );

    // テーマのメインCSSファイルを読み込み
    wp_enqueue_style(
        'theme-style', 
        get_theme_file_uri('/assets/css/style.css?ver=20250103'), 
        array(), 
        '1.0.0'
    );

    // jQueryの読み込み（CDN版）
    wp_enqueue_script(
        'jquery-cdn', 
        'https://code.jquery.com/jquery-3.6.0.js', 
        array(), 
        null, 
        true
    );

    // SwiperのJS読み込み
    wp_enqueue_script(
        'swiper-script', 
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', 
        array(), 
        null, 
        true
    );

    // テーマのメインJSファイルを読み込み
    wp_enqueue_script(
        'theme-script', 
        get_theme_file_uri('/assets/js/script.js'), 
        array('jquery-cdn'), 
        '1.0.0', 
        true
    );
}

// アクションフックに登録
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

// 投稿メニューとラベルのカスタマイズ
function customize_post_labels($new_name = 'ブログ') {
    global $menu, $submenu, $wp_post_types;

    // メニュー名の変更 (admin_menu フックのタイミングで実行)
    add_action('admin_menu', function () use ($new_name) {
        global $menu, $submenu;

        // $menu と $submenu が設定されている場合のみ処理
        if (isset($menu[5], $submenu['edit.php'])) {
            $menu[5][0] = $new_name; // メインメニューの変更
            $submenu['edit.php'][5][0] = "投稿一覧"; // サブメニュー「投稿一覧」
            $submenu['edit.php'][10][0] = "新規投稿を追加"; // サブメニュー「新規追加」
            $submenu['edit.php'][15][0] = "カテゴリー"; // サブメニュー「カテゴリー」
            $submenu['edit.php'][16][0] = "タグ"; // サブメニュー「タグ」
        }
    });

    // 投稿オブジェクトのラベル変更 (init フックのタイミングで実行)
    add_action('init', function () use ($new_name) {
        if (isset($wp_post_types['post'])) {
            $labels = &$wp_post_types['post']->labels;
            $labels->name = $new_name;
            $labels->singular_name = $new_name;
            $labels->add_new = "{$new_name}を追加";
            $labels->add_new_item = "新しい{$new_name}を追加";
            $labels->edit_item = "{$new_name}を編集";
            $labels->new_item = "新しい{$new_name}";
            $labels->view_item = "{$new_name}を表示";
            $labels->search_items = "{$new_name}を検索";
            $labels->not_found = "{$new_name}が見つかりません";
            $labels->not_found_in_trash = "ゴミ箱に{$new_name}はありません";
            $labels->all_items = "すべての{$new_name}";
            $labels->menu_name = $new_name;
            $labels->name_admin_bar = $new_name;
        }
    });
}

// 関数を実行
customize_post_labels('ブログ');

function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

function custom_wp_pagenavi($html) {
    // 生成されたHTMLをカスタマイズする
    $html = str_replace('<span class="pages">', '<span class="pages custom-class">', $html);
    $html = str_replace('class="page larger"', 'class="page larger my-custom-class"', $html);

    // 必要に応じて他のクラスや構造を変更する
    return $html;
}
add_filter('wp_pagenavi', 'custom_wp_pagenavi');

add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
add_image_size('custom-size', 520, 347, true); // 縦横比 333:223 に強制切り抜き

function redirect_single_campaign_to_archive() {
    if (is_singular('campaign')) { // 現在のページが 'campaign' のシングルページの場合
        wp_redirect(get_post_type_archive_link('campaign'), 301); // アーカイブページにリダイレクト
        exit; // 処理を終了
    }
}
add_action('template_redirect', 'redirect_single_campaign_to_archive');

function redirect_single_voice_to_archive() {
    if (is_singular('voice')) { // 現在のページが 'voice' のシングルページの場合
        wp_redirect(get_post_type_archive_link('voice'), 301); // アーカイブページにリダイレクト
        exit; // 処理を終了
    }
}
add_action('template_redirect', 'redirect_single_voice_to_archive');


function display_campaign_tabs() {
    // タクソノミーのターム（カテゴリ）を取得
    $tab_categories = get_terms(array(
        'taxonomy' => 'campaign-genre', // タクソノミーのスラッグ
        'hide_empty' => true, // 投稿がないタームを除外
    ));
    
    // タブのHTMLを出力
    if (!is_wp_error($tab_categories)) {
        echo '<div class="tab layout-tab">';
        echo '<div class="tab__inner inner">';
        echo '<ul class="tab__menu">';
        
        // ALL タブ
        echo '<li class="tab__menu-item js-tab-menu ' . (!is_tax('campaign-genre') ? 'is-active__tab' : '') . '">';
        echo '<a href="' . esc_url(get_post_type_archive_link('campaign')) . '" data-number="ALL">ALL</a>';
        echo '</li>';
        
        // 各タームのタブ
        foreach ($tab_categories as $category) {
            echo '<li class="tab__menu-item js-tab-menu ' . (is_tax('campaign-genre', $category->slug) ? 'is-active__tab' : '') . '">';
            echo '<a href="' . esc_url(get_term_link($category)) . '" data-number="' . esc_attr($category->slug) . '">';
            echo esc_html($category->name);
            echo '</a>';
            echo '</li>';
        }
        
        echo '</ul>';
        echo '</div>';
        echo '</div>';
    }
}

function display_voice_tabs() {
    // タクソノミーのターム（カテゴリ）を取得
    $tab_categories = get_terms(array(
        'taxonomy' => 'voice-genre', // タクソノミーのスラッグ
        'hide_empty' => true, // 投稿がないタームを除外
    ));
    
    // タブのHTMLを出力
    if (!is_wp_error($tab_categories)) {
        echo '<div class="tab layout-tab">';
        echo '<div class="tab__inner inner">';
        echo '<ul class="tab__menu">';
        
        // ALL タブ
        echo '<li class="tab__menu-item js-tab-menu ' . (!is_tax('voice-genre') ? 'is-active__tab' : '') . '">';
        echo '<a href="' . esc_url(get_post_type_archive_link('voice')) . '" data-number="ALL">ALL</a>';
        echo '</li>';
        
        // 各タームのタブ
        foreach ($tab_categories as $category) {
            echo '<li class="tab__menu-item js-tab-menu ' . (is_tax('voice-genre', $category->slug) ? 'is-active__tab' : '') . '">';
            echo '<a href="' . esc_url(get_term_link($category)) . '" data-number="' . esc_attr($category->slug) . '">';
            echo esc_html($category->name);
            echo '</a>';
            echo '</li>';
        }
        
        echo '</ul>';
        echo '</div>';
        echo '</div>';
    }
}