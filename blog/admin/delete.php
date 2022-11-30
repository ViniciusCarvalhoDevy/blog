<?php 
require 'config.php';

$stmt = $conectar->prepare("DELETE FROM posts WHERE id = :id");
$id =$_GET['id'];
$stmt->bindParam(":id",$id);
$stmt->execute();

echo "Registro apagado!";
?>