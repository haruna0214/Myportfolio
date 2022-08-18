<!-- header  -->
<?php get_header(); ?>
<!-- header  -->

<!-- section 私について -->
<section class="profile" id="profile">
  <div class="section-title-center">
    <h2 class="section-title">私について</h2>
  </div>
  <div class="profile-flex">
    <div class="profile-text">
      <p>千葉県出身の26歳です。<br>
        前職では、約4年間コールセンター兼事務の現場でお客様対応に加え、作業効率化、生産性向上のための業務改善・課題解決をしておりました。<br>
        前職で培った課題解決に向けた提案と行動力を生かし、常にお客様満足を向上し続けられるWebサイト制作を目指します
      </p>
    </div>
    <div class="profile-img">
      <img src="img/aboutme.XXXX.png" alt="プロフィール画像" class="profile-img">
    </div>
  </div>
</section>

<!-- section 私について -->

<!-- section これまでの経歴 -->
<section class="career">
  <div class="wrapper">
    <div class="section-title-center">
      <h2 class="section-title">これまでの経歴</h2>
    </div>
    <dl class="career-item">
      <dt class="Inner-left">2014年</dt>
      <dd class="Inner-right">学生時代に部活動（陸上競技・サッカー）を通して、<br>栄養学に関心を持ち、佐賀県の大学に進み、国家資格を取得。
      </dd>
    </dl>
    <dl class="career-item">
      <dt class="Inner-left">2018年</dt>
      <dd class="Inner-right">大学卒業後、約4年間コールセンター・事務等のクライアント現場で、<br>お客様対応に加え、業務改善・課題解決をしていました。<br>
        その中で、サイトの利便性上げるために、システム改修ではなく<br>運用のみでユーザビリティを改善する提案をしていく内に、Webサイト制作に興味をもちました。</dd>
    </dl>
    <dl class="career-item">
      <dt class="Inner-left">2022年</dt>
      <dd class="Inner-right">ITの基礎知識を身につけるため、ITパスポート資格取得<br>
        その後、オンライン学習サービスでWebサイト制作に<br>必要なスキルや知識を学んでいます。</dd>
    </dl>
    <dl class="career-item">
      <dt class="Inner-left">現在</dt>
      <dd class="Inner-right">フロントエンドエンジニアとして、転職活動開始</dd>
    </dl>
  </div>
</section>
<!-- section これまでの経歴

  <!-- section 制作への思い -->
<section class="heart">
  <div class="heart-flex">
    <div class="section-title-center">
      <h2 class="section-title">制作への思い</h2>
    </div>
    <div class="heart-item">
      <div class="heart-img">
        <img src="img/heart.png" alt="heartdesign">
      </div>
      <div class="heart-text">
        <p>お客様の思い(課題)を共通理解し、認識齟齬のないよう、しっかりとコミュニケーションをとらせていただき、お客様にとって効果的なWEBサイトをご提案・制作いたします。
        </p>
      </div>
    </div>
    <!-- </div> -->
  </div>
</section>
<!-- section 制作への思い -->
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
