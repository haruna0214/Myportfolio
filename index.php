<!-- header  -->
<?php get_header(); ?>
<!-- header  -->

<!-- section fv -->
<section class="fv wrapper">
    <div class="fv-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/fv.jpg">
    </div>
</section>
<!-- section fv -->


<!-- section 私について -->
<section class="aboutme">
    <div class="wrapper">
        <div class="section-title-center">
            <h2 class="section-title">私について</h2>
        </div>
        <div class="aboutme-content">
            <div class="aboutme-left">
                <p class="name">Haruna Tanaka</p>
                <p class="remarks">はじめまして。
                    前職で、ホームページの改修相談する中で、自分でできることがないか探し始めたのをきっかけに、Web制作に惹かれ学習スタート。<br>
                    未経験からジョブチェンジするため、
                    お客様の抱える問題/課題について、前職の顧客の課題解決で身につけた経験を生かし、お客様の要望を汲み取りながら
                    一緒に作品を生み出していきたいです。</p>
                <div class="btn">
                    <a href="<?php echo home_url('/about'); ?>">詳細へ</a>
                </div>
            </div>
            <div class="aboutme-right">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Noimage-fv.jpg" alt="プロフィール画像準備中">
            </div>
        </div>
    </div>
</section>
<!-- section 私について -->

<!--  section 制作実績-->
<section class="works wrapper" id="works">
    <div class="section-title-center">
        <h2 class="section-title">制作実績</h2>
    </div>
    <div class="slider" id="slider">
        <ul class="slider-lists">
            <li class="slider-list">
                <a href="<?php echo home_url('/works1'); ?>" class="slider-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_slider_works01.png" alt="スライド画像1">
                    <div class="slider-hov">
                        <p class="works-menu">Web design</p>
                        <p class="works-menu-viewmore">さらに詳しく</p>
                    </div>
                </a>
            </li>
            <li class="slider-list">
                <a href="<?php echo home_url('/works2'); ?>" class="slider-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_slider_works02.png" alt="スライド画像2">
                    <div class="slider-hov">
                        <p class="works-menu">Web design</p>
                        <p class="works-menu-viewmore">さらに詳しく</p>
                    </div>
                </a>
            </li>
            <li class="slider-list">
                <a href="<?php echo home_url('/works3'); ?>" class="slider-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_slider_works03.png" alt="スライド画像3">
                    <div class="slider-hov">
                        <p class="works-menu">Web design</p>
                        <p class="works-menu-viewmore">さらに詳しく</p>
                    </div>
                </a>
            </li>
            <li class="slider-list">
                <a href="<?php echo home_url('/works4'); ?>" class="slider-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_slider_works04.png" alt="スライド画像4">
                    <div class="slider-hov">
                        <p class="works-menu">Web design</p>
                        <p class="works-menu-viewmore">さらに詳しく</p>
                    </div>
                </a>
            </li>
            <li class="slider-list">
                <a href="<?php echo home_url('/works5'); ?>" class="slider-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_slider_works05.png" alt="スライド画像5">
                    <div class="slider-hov">
                        <p class="works-menu">Web design</p>
                        <p class="works-menu-viewmore">さらに詳しく</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>
<!--  section 制作実績-->

<!--  section できること-->
<section class="service wrapper">
    <div class="section-title-center">
        <h2 class="section-title">できること</h2>
    </div>
    <div class="service-content">
        <div class="service-item">
            <div class="service-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service1.png" alt="イラスト画像1">
            </div>
            <div class="service-text">
                <h3>Webサイトのコーディング</h3>
                <p>HTML・CSSを使い、保守しやすいサイトを作ることを意識してコーディングしています。<br>
                    例えば、適切なクラス名やコメントの記述などを心がけています。<br>
                    また、GitHub上に公開可能です。</p>
            </div>
        </div>
        <div class="service-item">
            <div class="service-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service2.png" alt="イラスト画像2">
            </div>
            <div class="service-text">
                <h3>Webサイトに動きをつける</h3>
                <p>現時点では簡単な動きのみですが、JavaScriptのjQueryを使い、<br>数秒ごとに画像が切り替わる動きなど実装することができます</p>
            </div>
        </div>
        <div class="service-item">
            <div class="service-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service3.png" alt="イラスト画像3">
            </div>
            <div class="service-text">
                <h3>WordPressでWebサイト制作</h3>
                <p>オリジナルサイトをWordpressに構築できます。投稿を指定されたカテゴリーに分けたり、お問い合わせ機能を実装することができます</p>
            </div>
        </div>
    </div>
</section>
<!--  section できること-->

<!--  section お問い合わせ部分の読み込み -->
<?php get_template_part("template-parts/contact"); ?>
<!--  section お問い合わせ-->


<!-- 上に戻るボタン -->
<div class="page-top">
    <a href="#">
        <span class="material-symbols-outlined">arrow_circle_up</span>
    </a>
</div>
<!-- 上に戻るボタン -->

<!-- footer  -->
<?php get_footer(); ?>
<!-- footer  -->
