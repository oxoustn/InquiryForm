<!DOCTYPE html>
<html lang="ja">
    <?php
        echo '（・ｘ・）<br/>';
        echo 'お問い合わせフォーム';
    ?>
    <form action="Views/DoneInquiryView.php" method="post">
        <label for="name">お名前<br/>
            <input type="text" name="name">
        </label>
        <br/>
        <label for="mail">メールアドレス<br/>
            <input type="text" name="mail">
        </label><br/>
        <label for="inquiry">お問い合わせ内容<br/>
            <textarea name="inquiry"></textarea>
        </label><br/>
        <input type="submit" value="送信する">
    </form>
</html>
