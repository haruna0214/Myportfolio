<?php


// シート管理
function add_files() {
    // リセットcss
    wp_enqueue_style('reset.css',get_theme_file_uri('css/reset.css'));

    // cssファイル(装飾用)
    wp_enqueue_style('style.css', get_theme_file_uri('scss/style.css'));

    // デフォルトcss
    wp_enqueue_style('main-style',get_stylesheet_uri());

    // Googleアイコン
    // wp_enqueue_style('Material-icons1', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200');
    // wp_enqueue_style('Material-icons2', 'https://fonts.googleapis.com/icon?family=Material+Icons');

    // Googleフォント
    // wp_enqueue_style('google-fonts1', 'https://fonts.googleapis.com');
    // wp_enqueue_style('google-fonts2', 'https://fonts.gstatic.com');
    // wp_enqueue_style('google-fonts3', 'https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap');

    // jQuery
    wp_enqueue_script('jQuery', 'https://code.jquery.com/jquery-3.6.0.min.js');

    // slick
    wp_enqueue_style('slick.css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('slick-theme.css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
    wp_enqueue_script('slick.min.js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');


    // JavaScriptファイル
    wp_enqueue_script('slick.js', get_theme_file_uri('js/slick.js'));
    // wp_enqueue_script('main.js', get_theme_file_uri('js/main.js'));

}
add_action('wp_enqueue_scripts','add_files');

function theme_setup() {
    // titleタグの管理
    add_theme_support('title-tag');

    // ナビメニュー表示（有効化）
    add_theme_support('menus');

    // ナビメニューの位置追加
    register_nav_menus(
        array(
            'main-menu' => 'メインメニュー',
            'footer-menu' => 'フッターメニュー',
        )
    );
}
add_action('after_setup_theme', 'theme_setup');
//アイキャッチ画像を有効化
add_theme_support('post-thumbnails');

// reCAPTCHAのロゴをフォームのあるページにだけ表示する
// add_theme_support('post-thumbnails');
// add_action('wp_enqueue_scripts', function () {
//     if (is_page('index')) return;
//     wp_deregister_script('google-recaptcha');
// }, 100, 0);
