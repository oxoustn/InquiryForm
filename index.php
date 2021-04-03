<!DOCTYPE html>
<html>
    <?php
        echo '（・ｘ・）<br/>';
        echo 'お問い合わせフォーム';
    ?>
    <form action="Views/DoneInquiryView.php" method="post">
        お名前<br/>
        <input type="text" name="name"><br/>
        メールアドレス<br/>
        <input type="text" name="mail"><br/>
        お問い合わせ内容<br/>
        <textarea name="inquiry"></textarea><br/>
        <input type="submit" value="送信する">
    </form>
</html>
