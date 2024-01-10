<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>更新完了！</title>
	</head>
	<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('update anime set anime_name=?,anime_shosai=? where anime_id=?');
if (empty($_POST['anime_name'])){
    echo'アニメ名を入力してください。';
}else if (empty($_POST['anime_shosai'])){
    echo'アニメの詳細を入力してください。';
} else if ($sql->execute([htmlspecialchars($_POST['anime_name']),$_POST['anime_shosai'],$_POST['anime_id']])){
        echo '更新に成功しました';
    } else {
        echo '更新に失敗しました';
    }
?>
    </body>
</html>

