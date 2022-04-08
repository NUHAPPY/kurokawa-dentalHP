<?php include 'header.php'; ?>
<section class="form wrapperContents">
    <h2 class="title"><span>お問合せ</span></h2>
    <!-- /.title -->
    <div class="pageContainer">
    <p><span class="red">※</span>必須項目</p>
<p><span class="red"><small>（株）、（有）や丸囲み数字などの機種依存文字は、文字化けの原因となりますので、使用しないようお願いいたします。</small></span></p>
    </div>
    <!-- /.pageContainer -->
    <div class="form__container">
        <div class="form__item">
            <label for="namae">お名前<span class="required">必須</span></label>
            <input type="text" name="namae" id="namae">
        </div>
        <div class="form__item">
            <label for="kana">お名前（フリガナ）<span class="required">必須</span></label>
            <input type="text" name="kana" id="kana">
        </div>
<div class="form__item">
            <label for="zip">郵便番号</label>
            <input type="text" name="zip" id="zip">
        </div>
        <div class="form__item">
            <label for="address">ご住所</label>
            <input type="text" name="addr" id="addr">
        </div>
        <div class="form__item">
            <label for="tel">連絡先電話番号（携帯可）</label>
            <input type="tel" name="tel" id="tel" placeholder="ハイフンなし半角英数">
        </div>
        <div class="form__item">
            <label for="email">メールアドレス<span class="required">必須</span></label>
            <input type="email" name="email" id="email" placeholder="半角英数">
        </div>
        <div class="form__item">
            <label for="memo">お問合せ内容<span class="required">必須</span></label>
            <textarea name="memo" id="memo" cols="30" rows="10"></textarea>
            <!-- /# -->
        </div>
        <!-- /.form__item -->
        <div class="form__item_submit">
        <input type="submit" value="送信する">
        <div>
    </div>
</section>
<?php include 'footer.php'; ?>