<!-- header  -->
<?php get_header(); ?>
<!-- header  -->

<!-- main -->
<section class="works-web">
  <div class="wrapper">
    <div class="section-title-center">
      <h2 class="section-title">作品紹介</h2>
    </div>
    <div class="works-flex">
      <?php the_post_thumbnail(); ?>
      <!-- <img src="img/works1-fv.png" alt="実績1" class="worksPage-image"> -->
      <p class="sub-title"><?php the_title(); ?></p>
      <dl class="works-summary">
        <dt class="works-heading">
          <span class="material-symbols-outlined">done 概要</span>
        </dt>
        <dd class="works-text"><?php the_field('acf_concept'); ?></dd>
        <dt class="works-heading">
          <span class="material-symbols-outlined">search 担当範囲/機能</span>
        </dt>
        <dd class="works-text"><?php the_field('acf_skill'); ?></dd>
        <dt class="works-heading">
          <span class="material-symbols-outlined">edit 使用言語</span>
        </dt>
        <dd class="works-text"><?php the_field('acf_language'); ?></dd>
        <dt class="works-heading">
          <span class="material-symbols-outlined">volunteer_activism 特徴</span>
        </dt>
        <dd class="works-text"><?php the_field('acf_feature'); ?></dd>
        <dt class="works-heading">
          <span class="material-symbols-outlined">computer サイト</span>
        </dt>
        <dd class="works-text">
          <a href="https://haruna0214.github.io/74_CafeSite/" target="_blank" rel="noopener"><?php the_field('acf_site'); ?></a>
        </dd>

      </dl>
      <div class="works-btn">
        <?php if (get_previous_post()) : ?>
          <?php previous_post_link('%link', '前の作品へ'); ?>
        <?php endif; ?>

        <?php if (get_next_post()) : ?>
          <?php next_post_link('%link', '次の作品へ'); ?>
        <?php endif; ?>
      </div>

      <!-- <div class="works-btn">
            <a href="works5.html" class="item-btn">PREV</a>
            <a href="works2.html" class="item-btn">NEXT</a>
          </div> -->
      <div class="works-lists">
        <div class="left-pc">
          <p>PC</p>
          <div class="list">
            <?php
            $pic = get_field('acf_pc');
            $pic_url = $pic['sizes']['medium'];
            ?>
            <img src="<?php echo $pic_url; ?>" alt="Webサイト制作PC版">
          </div>
        </div>
        <div class="right-sp">
          <p>SP</p>
          <div class="list">
            <?php
            $pic = get_field('acf_sp');
            $pic_url = $pic['sizes']['medium'];
            ?>
            <img src="<?php echo $pic_url; ?>" alt="Webサイト制作SP版">
          </div>
        </div>
      </div>

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
