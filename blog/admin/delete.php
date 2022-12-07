<?php 
require 'config.php';

$stmt = $conectar->prepare("DELETE FROM posts WHERE id = :id");
$id =$_GET['id'];
$stmt->bindParam(":id",$id);
$stmt->execute();

echo "<h1>Registro apagado!</h1>";
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
  <a href="http://localhost/blog/admin/view2.php?name=Vinicius%20Carvalho&id=1" id="bu"> <input  type="button" value="Voltar"></a> 
    
</body>
</html>