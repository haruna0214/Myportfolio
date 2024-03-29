<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- Wordpressで設定している言語を反映させる -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?php echo bloginfo('name'); ?></title> -->
    <!-- Googleアイコン -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Googleフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap" rel="stylesheet">
    <!-- ファビコン -->
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/Portfolio Favicon.png')); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <!-- header 始まり-->
    <header>
        <div class="nav-box wrapper">
            <h1 class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ" width="160"></a></h1>
            <!-- <div class="pc-nav">
                <nav>
                    <ul class="nav-lists">
                        <li class="nav-list">
                            <a class="uLine" href="<?php echo esc_url(home_url('/about/')); ?>">
                                <span class="uLine-center">私について</span>
                            </a>
                        </li>
                        <li class="nav-list">
                            <a class="uLine" href="<?php echo esc_url(home_url('/works/')); ?>">
                                <span class="uLine-center">制作実績</span>
                            </a>
                        </li>
                        <li class="nav-list">
                            <a class="uLine" href="#contact">
                                <span class="uLine-center">お問い合わせ</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div> -->
            <!-- header 787px以下
        ハンバーガーメニュー 開く-->
            <div class="sp-icon">
                <span class="material-icons" id="open">menu</span>
            </div>

            <!-- メニュー機能を呼び出す -->
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu', //メニュー管理画面で登録したメニュー名
                    'container' => '',
                    'container_class' => 'pc-nav',
                    'menu_class' => 'nav-lists', 'nav-list'
                )
            );
            ?>
    </header>

    <!-- ハンバーガーメニュー 閉じる -->
    <div class="overlay">
        <span class="material-icons" id="close">close</span>
        <!-- ハンバーガーメニュー 内容 -->
        <nav class="sp-menu">
            <ul class="sp-nav">
                <li class="sp-nav-list">
                    <a class="uLine" href="<?php echo esc_url(home_url('/about/')); ?>">
                    <span class=" uLine-center">私について</span>
                    </a>
                </li>
                <li class="sp-nav-list">
                    <a class="uLine" href="<?php echo esc_url(home_url('/works/')); ?>"">
                    <span class=" uLine-center">制作実績</span>
                    </a>
                </li>
                <li class="sp-nav-list">
                    <a class="uLine" href="#contact">
                    <span class=" uLine-center">お問い合わせ</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- header 終わり-->
