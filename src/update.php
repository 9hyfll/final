<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
		<title>更新画面</title>
	</head>
	<body>
		<div class="th0">アニメ名</div>
		<div class="th1">アニメ詳細</div>
<?php
    $pdo=new PDO($connect, USER, PASS);

	foreach ($pdo->query('select * from anime') as $row) {
		echo '<form action="updateok.php" method="post">';
		echo '<input type="hidden" name="anime_id" value="', $row['anime_id'], '">';
		echo '<div class="td0">';
        echo '<input type="text" name="anime_name" value="', $row['anime_name'], '">';
        echo '</div>';
		echo '<div class="td1">';
		echo '<input type="text" name="anime_shosai" value="', $row['anime_shosai'], '">';
		echo '</div> ';
		echo '<div class="td2"><input type="submit" value="更新"></div>';;
		echo '</form>';
		echo "\n";
	}
?>

    </body>
</html>
