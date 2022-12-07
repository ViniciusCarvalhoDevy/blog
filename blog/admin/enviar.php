<?php 

require 'config.php';

$title = filter_input(INPUT_POST, 'title');
$datas = filter_input(INPUT_POST, 'datas');
$descriptions = filter_input(INPUT_POST, 'descriptions');
$id_category = filter_input(INPUT_POST, 'category');
$arquivo =  $_FILES['img'];

$sql = $conectar->prepare("INSERT INTO posts(title,datas,descriptions,img,id_category)VALUES(:title, :datas, :descriptions, :img, :id_category)");

move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);
$img = "uploads/".$arquivo['name'];

$sql->bindValue(':title', $title);
$sql->bindValue(':datas',$datas);
$sql->bindValue(':descriptions', $descriptions);
$sql->bindValue(':id_category',$id_category);
$sql->bindValue(':img',$img);
$sql->execute();


    ///uploads 
header("Location: index.php"); 
?>