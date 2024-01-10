<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php require 'db-connect.php';?>
<hr>
<?php
echo '<table>';
echo '<tr><th>アニメID</th><th>アニメ名</th><th>アニメ詳細</th></tr>';
$pdo=new PDO($connect,USER,PASS);
if (isset($_POST['keyword'])) {
    $sql=$pdo->prepare('select * from anime where name like ?');
    $sql->execute(['%'.$_POST['keyword'].'%']);
}else{
    $sql=$pdo->query('select * from anime');
}
foreach ($sql as $row) {
    $id=$row['anime_id'];
    echo '<tr>';
    echo '<td>',$id, '</td>';
    echo '<td>';
    echo '<a>',$row['anime_name'], '</a>';
    echo '</td>';
    echo '<td>', $row['anime_shosai'], '</td>';
    echo '<tr>';
}
echo '</table>';
?>
<?php require 'footer.php'; ?>