<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>追加画面</title>
</head>
<body>
    <p>追加したいアニメとアニメの詳細を入力してください</p>
    <form action="addok.php" method="post">
        アニメ名<input type="text" name="anime_name"><br>
        アニメ詳細<input type="text" name="anime_shosai"><br>
        <button type="submit">登録</button>
</form>
</body>
</html>