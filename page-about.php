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
        前職で培った課題解決に向けた提案と行動力を生かし、常にお客様満足を向上し続けられるWebサイト制作を目指します。
      </p>
    </div>
    <div class="profile-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/about_fv.png" alt="プロフィール画像" class="profile-img" width="300">
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
        その中で、サイトの利便性上げるために、システム改修ではなく<br>運用のみでユーザビリティを改善提案をしていく内に、Webデザインに興味をもちました。</dd>
    </dl>
    <dl class="career-item">
      <dt class="Inner-left">2022年</dt>
      <dd class="Inner-right">ITの基礎知識を身につけるため、ITパスポート資格取得<br>
        その後、Webデザインに必要な基本スキル(HTML CSS JavaScript PHP Figma WordPress等)を学びました。</dd>
    </dl>
    <dl class="career-item">
      <dt class="Inner-left">現在</dt>
      <dd class="Inner-right">転職活動中です。<br>技術を上げるためにインプットとアウトプットを繰り返し、実務に活かせるよう積極的に学んでいます。</dd>
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
        <img src="<?php echo get_template_directory_uri(); ?>/img/heart.png" alt="制作への思い" width="320">
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
