<?php 

require 'config.php';

$nome = $_POST['nome'];
$logins = $_POST['logins'];
$passwords = md5($_POST['passwords']);

//preparar
$stmt = $conectar->prepare("INSERT INTO users (nome, logins, passwords) VALUES(:nome, :logins, :passwords)");

//tratar
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':logins', $logins);
$stmt->bindParam(':passwords', $passwords);

//executar
$stmt->execute();

header("Location:view2.php");
?>
