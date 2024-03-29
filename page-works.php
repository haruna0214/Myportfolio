<!-- header  -->
<?php get_header(); ?>
<!-- header  -->

<!-- main -->
<!-- 実績一覧 -->
<section class="worksPage">
  <div class="wrapper">
    <div class="works-flex">
      <div class="section-title-center">
        <h2 class="section-title">制作実績</h2>
      </div>
      <div class="works-items">
        <?php
        $args = array(
          // 'post_type' => 'post', //投稿タイプを指定
          'category_name' => 'products', //カテゴリースラッグ指定
          'posts_per_page' => 6, //1ページあたりの件数表示
          'order'   => 'ASC', //記事の順番変更
        );
        $post_query = new WP_Query($args);
        if ($post_query->have_posts()) :
        ?>

          <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
            <div class="works-item">
              <div class="works-img">
                <a href="<?php the_permalink(); ?>" class="works_box">
                  <figure>
                    <!-- 投稿にアイキャッチ画像がなかった場合、Noimage画像を表示させる記述-->
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?><img src="<?php echo get_template_directory_uri(); ?>/img/Noimage-fv.jpg" alt="制作実績イメージ画準備中" width="360">
                    <?php endif; ?>
                    <figcaption class="hover-mask">詳細を見る</figcaption>
                  </figure>
                </a>
              </div>
              <div class="works-text">
                <dl>
                  <dt><?php the_title(); ?></dt>
                  <dd><?php the_content(); ?></dd>
                </dl>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <p>ページは見つかりません。</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- 実績一覧 -->
<!-- main -->

<!--  section お問い合わせ-->
<section class="contact wrapper" id="contact">
  <div class="section-title-center">
    <h2 class="section-title">お問い合わせ</h2>
  </div>
  <div class="contact-contents">
    <p class="contact-text">ご質問などありましたら下記よりお気軽にお問い合わせください</p>
    <!--  section お問い合わせ Contact Form7直接埋め込み -->
    <?php echo do_shortcode('[contact-form-7 id="212" title="お問い合わせフォーム"]'); ?>
  </div>
</section>
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
