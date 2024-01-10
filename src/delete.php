<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php require 'db-connect.php';?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>削除画面</title>
	</head>
	<body>
        <table>
    <tr><th>アニメID</th><th>アニメ名</th><th>アニメ詳細</th></tr>
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from anime') as $row) {
        echo '<tr>';
        echo '<td>',$row['anime_id'], '</td>';
        echo '<td>',$row['anime_name'], '</td>';
        echo '<td>',$row['anime_shosai'], '</td>';
        echo '<td>';
        echo '<a href="deleteok.php?id=', $row['anime_id'], '">削除</a>';
        echo '</td>';
        echo '</tr>';
        echo "\n";
    }

?>
    </table>
    </body>
</html>