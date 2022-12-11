<?php
require 'config.php';
session_start();
$logins = $_POST['logins'];
$passwords = md5($_POST['passwords']);

$stmt = $conectar->prepare("SELECT * FROM users WHERE logins = :logins AND passwords = :passwords");
$stmt->bindParam(":logins",$logins);
$stmt->bindParam(":passwords",$passwords);
$stmt->execute();

if($stmt->rowCount() == 1){
    $info = $stmt->fetch();
    $id = $info['id'];
    $_SESSION['logado'] = true;
    $_SESSION['id'] = $info['id'];
    $_SESSION['nome'] =$info['nome'];
    $_SESSION['logins'] = $info['logins'];
    $_SESSION['passwords'] = $info['passwords'];  
    header("Location:view2.php");
}else{
    echo "Usurário Não Encontrado!";
}

?>