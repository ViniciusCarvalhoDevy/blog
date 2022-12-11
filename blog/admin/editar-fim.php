<?php
require 'config.php';

$id = $_POST['id'];
$title = $_POST['title'];
$descriptions = $_POST['descriptions'];

$stmt = $conectar->prepare('UPDATE posts SET id = :id, title = :title, descriptions = :descriptions WHERE id = :id');

$stmt->bindParam(":title", $title);
$stmt->bindParam(":descriptions", $descriptions);
$stmt->bindParam(":id", $id);

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

echo "<h1>Dados Editados Com Sucesso!!!</h1>";


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
            #bu input{
                padding: 5px 20px 5px 20px;
                border: 1px solid #111;
                background: #fff;
                color: #111;
                border-radius: 10px;
                cursor: pointer;

            }
    </style>
</head>
<body>
  <a href="view2.php" id="bu"> <input  type="button" value="Voltar"></a> 
    
</body>
</html>


