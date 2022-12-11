

<?php 
include "admin/config.php"; 

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");
$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Blog::Vinicius Carvalho</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <header>
<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo.png" width="70px" height="70px" alt="" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/index.php">Admin</a>
        </li>
        <li class="nav-item">
	          <a class="nav-link" href="category.php?cat=Cat-1&id=1">Categoria 1</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="category.php?cat=Cat-2&id=2">Categoria 2</a>
	        </li>

      </ul>
      <form method="POST" action="buscar.php" class="d-flex" role="search">
        <input class="form-control me-2" name="buscar" type="search" placeholder="Buscar" aria-label="Buscar">
        <input class="btn btn-outline-dark" type="submit" value="Buscar">
      </form>
    </div>
  </div>
</nav>