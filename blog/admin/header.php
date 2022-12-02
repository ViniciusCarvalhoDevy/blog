<?php
require 'config.php';

session_start();
    if($_SESSION['logado'] == true){
        header('Location: view2.php');
       
    }

    if(isset($_GET['sair'])){
        session_destroy();
        header('Location: index.php');
        die();
    }

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

include_once('header.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
  <!--  slide 23-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/blog/CSS/view2.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Posts-Views</title>
</head>
<body>
      
    <main >
<div  class="d-flex">
    <div class="conteiner-fluid">
        
           <div class="row">
            <nav id="sidebarMenu" style="  height:316px" class="col-md-10  text-white bg-dark pt-5  ">
                <h2>Bom dia,<?php echo $_SESSION['nome'];?>
                </h2>
                <p><a href="header.php">Deslogar</a></p>
               
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="" class="nav-item">Controlar Posts</a></li>
                    <li class="nav-item"><a href="">Controlar Slides</a></li>
                </ul>
            </nav>

