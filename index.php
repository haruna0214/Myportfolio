<!-- header  -->
<?php get_header(); ?>
<!-- header  -->

<!-- section fv -->
<section class="fv wrapper">
    <div class="fv-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/fv.jpg" alt="メインビジュアル" width="850">
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
                    未経験でWeb制作を学び、IT業界へキャリアチェンジを目指しております。<br>
                    前職では、エンドユーザー向けのお問い合わせ対応、クライアント向けの業務改善・課題解決に取り組んでいました。<br>
                    Webを使ってよりお客様のお困りごとを解決できないないか考え始めた事をきっかけに、
                    Web制作に惹かれました。</p>
                <div class="btn">
                    <a href="<?php echo home_url('/about'); ?>">詳細へ</a>
                </div>
            </div>
            <div class="aboutme-right">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top_about_fv.png" alt="プロフィール画像" width="300">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_slider_works01.png" alt="スライド画像1" width="1080">
                    <div class="slider-hov">
                        <p class="works-menu">Web design</p>
                        <p class="works-menu-viewmore">さらに詳しく</p>
                    </div>
                </a>
            </li>
            <li class="slider-list">
                <a href="<?php echo home_url('/works2'); ?>" class="slider-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_slider_works02.png" alt="スライド画像2" width="1080">
                    <div class="slider-hov">
                        <p class="works-menu">Web design</p>
                        <p class="works-menu-viewmore">さらに詳しく</p>
                    </div>
                </a>
            </li>
            <li class="slider-list">
                <a href="<?php echo home_url('/works3'); ?>" class="slider-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_slider_works03.png" alt="スライド画像3" width="1080">
                    <div class="slider-hov">
                        <p class="works-menu">Web design</p>
                        <p class="works-menu-viewmore">さらに詳しく</p>
                    </div>
                </a>
            </li>
            <li class="slider-list">
                <a href="<?php echo home_url('/works4'); ?>" class="slider-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_slider_works04.png" alt="スライド画像4" width="1080">
                    <div class="slider-hov">
                        <p class="works-menu">Web design</p>
                        <p class="works-menu-viewmore">さらに詳しく</p>
                    </div>
                </a>
            </li>
            <li class="slider-list">
                <a href="<?php echo home_url('/works5'); ?>" class="slider-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_slider_works05.png" alt="スライド画像5" width="1080">
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/service1.png" alt="Webサイトのコーディング" width="280">
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/service2.png" alt="Webサイトに動きをつける" width="280">
            </div>
            <div class="service-text">
                <h3>Webサイトに動きをつける</h3>
                <p>現時点では簡単な動きのみですが、JavaScriptのjQueryを使い、<br>数秒ごとに画像が切り替わる動きなど実装することができます。</p>
            </div>
        </div>
        <div class="service-item">
            <div class="service-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service3.png" alt="WordPressでWebサイト制作" width="280">
            </div>
            <div class="service-text">
                <h3>WordPressでWebサイト制作</h3>
                <p>オリジナルサイトをWordpressに構築できます。プラグインの導入やカスタムフィールドを使って、より自由にWordPressをカスタマイズすることができます。</p>
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
