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
