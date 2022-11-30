<?php
require 'config.php';
session_id();
$logins = $_POST['logins'];
$passwords = $_POST['passwords'];

$stmt = $conectar->prepare("SELECT * FROM users WHERE logins = :logins and passwords = :passwords");
$stmt->bindParam(":logins",$logins);
$stmt->bindParam(":passwords",$passwords);
$stmt->execute();

if($stmt->rowCount() == 1){
    $info = $stmt->fetch();
    $_SESSION['logado'] = true;
    $_SESSION['id'] = $info['id'];
    $_SESSION['nome'] =$info['nome'];
    $_SESSION['logins'] = $info['logins'];
    $_SESSION['passwords'] = $info['passwords'];  
    header("Location:view2.php?name=".$info['nome']);
}else{
    echo "Usurário Não Encontrado!";
}

?>