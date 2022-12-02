<?php 
require 'config.php';

$stmt = $conectar->prepare("SELECT * FROM users");


$stmt->execute();
$name = $stmt->fetchAll(PDO::FETCH_ASSOC);
$nameUser = "";
foreach($name as $row){
  foreach($row as $key =>$value){
        if($key === "nome"){
        $nameUser = $value;
        }
  }
 
}