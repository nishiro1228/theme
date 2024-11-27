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
        get_theme_file_uri('/assets/css/style.css'), 
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