<?php 

require 'config.php';

$title = filter_input(INPUT_POST, 'title');
$datas = filter_input(INPUT_POST, 'datas');
$descriptions = filter_input(INPUT_POST, 'descriptions');
$text = $_POST['text'];
$idcategory = filter_input(INPUT_POST, 'category');
$arquivo =  $_FILES['img'];

$sql = $conectar->prepare("INSERT INTO posts(title,datas,descriptions,img,idcategory,text)VALUES(:title, :datas, :descriptions, :img, :idcategory, :text)");

move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);
$img = "uploads/".$arquivo['name'];

$sql->bindValue(':title', $title);
$sql->bindValue(':datas',$datas);
$sql->bindValue(':descriptions', $descriptions);
$sql->bindValue(':idcategory',$idcategory);
$sql->bindValue(':img',$img);
$sql->bindValue(':text',$text);
$sql->execute();


    ///uploads 
header("Location: index.php"); 
?>