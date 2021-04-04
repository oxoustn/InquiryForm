<!DOCTYPE html>
<html lang="ja">
    <?php
        echo '（・ｘ・）<br/>';
        echo $_POST['name']."様<br/>";
        echo 'お問い合わせありがとうございます';
    ?>
    <form action="http://localhost:8080" method="post">
        <input type="submit" value="戻る">
    </form>
</html>
