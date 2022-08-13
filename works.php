<?php get_header(); ?>

<!-- main -->
<!-- 実績一覧 -->
<section class="worksPage">
  <div class="wrapper">
    <div class="works-flex">
      <div class="section-title-center">
        <h2 class="section-title">制作実績</h2>
      </div>
      <div class="works-items">
        <div class="works-item">
          <div class="works-img">
            <a href="works1.html" class="works_box">
              <figure>
                <img src="img/works1.png" alt="Webサイト1">
                <figcaption class="hover-mask">詳細を見る</figcaption>
              </figure>
            </a>
          </div>
          <div class="works-text">
            <dl>
              <dt>カフェサイトの制作</dt>
              <dd>制作課題として、模写コーディングしました。<br>
                スクロール時、背景画像に動きをつける(レスポンシブ対応済)</dd>
            </dl>
          </div>
        </div>
        <div class="works-item">
          <div class="works-img">
            <a href="works2.html" class="works_box">
              <figure>
                <img src="img/works2.png" alt="Webサイト2">
                <figcaption class="hover-mask">詳細を見る</figcaption>
              </figure>
            </a>
          </div>
          <div class="works-text">
            <dl>
              <dt>旅行ブログサイト</dt>
              <dd>制作課題として、模写コーディングしました。<br>
                スクロール固定したヘッダーを横にスクロールさせる(レスポンシブ対応済)</dd>
            </dl>
          </div>
        </div>
        <div class="works-item">
          <div class="works-img">
            <a href="works3.html" class="works_box">
              <figure>
                <img src="img/works3.png" alt="Webサイト3">
                <figcaption class="hover-mask">詳細を見る</figcaption>
              </figure>
            </a>
          </div>
          <div class="works-text">
            <dl>
              <dt>ECサイト制作(インテリア)</dt>
              <dd>制作課題として、模写コーディングしました。スクロールしてもヘッダーを上部に表示する、Googleマップの埋め込み</dd>
            </dl>
          </div>
        </div>
        <div class="works-item">
          <div class="works-img">
            <a href="works4.html" class="works_box">
              <figure>
                <img src="img/works4.png" alt="Webサイト4">
                <figcaption class="hover-mask">詳細を見る</figcaption>
              </figure>
            </a>
          </div>
          <div class="works-text">
            <dl>
              <dt>スニーカーサイト</dt>
              <dd>制作課題として、模写コーディングしました。<br>
                動画の埋め込み、スライダー等を学び、実装しております。</dd>
            </dl>
          </div>
        </div>
        <div class="works-item">
          <div class="works-img">
            <a href="works5.html" class="works_box">
              <figure>
                <img src="img/works5.png" alt="Webサイト5">
                <figcaption class="hover-mask">詳細を見る</figcaption>
              </figure>
            </a>
          </div>
          <div class="works-text">
            <dl>
              <dt>ポートフォリオ制作</dt>
              <dd>コメントが入ります。コメントが入ります。コメントが入ります。</dd>
            </dl>
          </div>
        </div>
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

<!-- footer  -->
<footer>
  <ul>
    <li><a href="about.html">私について</a></li>
    <li><a href="works.html">制作実績</a></li>
    <li><a href="#contact">お問い合わせ</a></li>
  </ul>
  <p class="copyright">&copy;Portfolio Haruna Tanaka</p>
</footer>
<!-- footer  -->
<!-- 上に戻るボタン -->
<div class="page-top">
  <a href="#">
    <span class="material-symbols-outlined">arrow_circle_up</span>
  </a>
</div>
<!-- 上に戻るボタン -->
<?php get_footer(); ?>
