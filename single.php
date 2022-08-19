<!-- header  -->
<?php get_header(); ?>
<!-- header  -->

<!-- main -->
<section class="works-web">
  <div class="wrapper">
    <div class="section-title-center">
      <h2 class="section-title">作品紹介</h2>
    </div>
    <?php get_template_part('template-parts/breadcrumbs'); ?>
    <div class="works-flex">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <img src="img/works1-fv.png" alt="実績1" class="worksPage-image">
          <p class="sub-title"><?php the_title(); ?></p>
          <dl class="works-summary">
            <dt class="works-heading">
              <span class="material-symbols-outlined">done 概要</span>
            </dt>
            <dd class="works-text">オンライン学習サービスでの制作課題として模写コーディングしました。</dd>
            <dt class="works-heading">
              <span class="material-symbols-outlined">search 担当範囲/機能</span>
            </dt>
            <dd class="works-text">コーディング・レスポンシブ対応・Googleマップ埋め込み</dd>
            <dt class="works-heading">
              <span class="material-symbols-outlined">edit 使用言語</span>
            </dt>
            <dd class="works-text">HTML・SCSS</dd>
            <dt class="works-heading">
              <span class="material-symbols-outlined">volunteer_activism 特徴</span>
            </dt>
            <dd class="works-text">スクロールした際、背景画像に動きをつけたり、ホバーするとボタンの色が変わるエフェクトを実装しました。</dd>
            <dt class="works-heading">
              <span class="material-symbols-outlined">computer サイト</span>
            </dt>
            <dd class="works-text">
              <a href="https://haruna0214.github.io/74_CafeSite/" target="_blank" rel="noopener">https://haruna0214.github.io/74_CafeSite/</a>
            </dd>
          </dl>
          <div class="works-btn">
            <a href="works5.html" class="item-btn">PREV</a>
            <a href="works2.html" class="item-btn">NEXT</a>
          </div>
          <div class="works-lists">
            <div class="left-pc">
              <p>PC</p>
              <div class="list">
                <img src="img/works01(pc).png" alt="Webサイト制作PC版">
              </div>
            </div>
            <div class="right-sp">
              <p>SP</p>
              <div class="list">
                <img src="img/works01(sp).png" alt="Webサイト制作SP版">
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- main -->

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
