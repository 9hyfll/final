<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>追加完了！</title>
</head>
<body>
    <?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into anime(anime_name, anime_shosai) values (?, ?)');
    if (empty($_POST['anime_name'])){
        echo'アニメ名を入力してください。';
    }else if (empty($_POST['anime_shosai'])){
        echo'アニメの詳細を入力してください。';
    }else if($sql->execute([$_POST['anime_name'], $_POST['anime_shosai']])) {
        echo '<font color="red">追加に成功しました</font>';
    }else{
        echo '<font color="red">追加に失敗しました</font>';
    }
    ?>
    <br><hr><br>
    
    </body>
</html>
</body>
</html>