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
                    <?php else : ?><img src="<?php echo get_template_directory_uri(); ?>/img/Noimage-fv.jpg" alt="制作実績イメージ画">
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
    <p class="contact-text">
      ご質問などありましたら下記よりお気軽にお問い合わせください
      <br><span>*</span>は入力必須項目となります
    </p>
    <form action="" method="post">
      <div class="form-item">
        <label for="name">名前<span>*</span></label>
        <input type="text" id="name" name="name">
      </div>
      <div class="form-item">
        <label for="company">会社名</label>
        <input type="company" id="company" name="company">
      </div>
      <div class="form-item">
        <label for="email">メールアドレス<span>*</span></label>
        <input type="mail" id="email" name="email">
      </div>
      <div class="form-item">
        <label for="category">カテゴリ</label>
        <input type="category" id="category" name="category">
        <select class="selectBox" name="selectBox">
          <option value="">選択してください</option>
          <option value="selectBox1">ご質問</option>
          <option value="selectBox2">ご相談</option>
          <option value="selectBox3">その他</option>
        </select>
      </div>
      <div class="form-item">
        <label for="message">お問い合わせ内容<span>*</span></label>
        <textarea id="message" name="message" placeholder="お問い合わせ内容をご入力ください"></textarea>
      </div>
      <div class="form-btn">
        <input type="submit" value="送信">
      </div>
    </form>
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
