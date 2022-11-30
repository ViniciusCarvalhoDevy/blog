<?php 

require 'config.php';

$title = filter_input(INPUT_POST, 'title');
$datas = filter_input(INPUT_POST, 'datas');
$descriptions = filter_input(INPUT_POST, 'descriptions');
$img = filter_input(INPUT_POST, 'img');

$sql = $conectar->prepare("INSERT INTO posts(title,datas,descriptions,img)VALUES(:title, :datas, :descriptions, :img)");

//move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);
//$img = 'uploads/'.$arquivo['name'];

$sql->bindValue(':title', $title);
$sql->bindValue(':datas',$datas);
$sql->bindValue(':descriptions', $descriptions);
$sql->bindValue(':img',$img);
$sql->execute();


    
header("Locarion: veiw2.php"); 
?>