<?php
require 'config.php';


$id =$_GET['id'];
$stmt = $conectar->prepare("SELECT id, title, descriptions FROM posts WHERE id = :id" );
$stmt->execute(array('id'=>$id));

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


include('session.php');
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
<style>
    
</style>
    <title>Posts-Views</title>
    
</head>
<body>
      
    <main >

    <div class="d-flex">
         <div class="conteiner-fluid ">
        
           <div class="row">
            <nav id="sidebarMenu" style=" margin-right:5cm; height:312px;" class="col-md-10  text-white bg-dark pt-5  ">
                <h2>Bom dia,<?php echo $_SESSION['nome']?>
                </h2>
                <br>
                <br>
                <p class="text-decoration-none"><a  href="header.php?sair">Deslogar</a></p>
                <ul class="nav flex-column">
                    <li class="nav-item"><a  href="insert.php">Inserir</a></li>
                </ul>
            </nav>
           </div> 
            
    </div>
        <div class="container" >
            
            <form action="editar-fim.php"  method="post" enctype="multipart/form-data">
                <h1 class="main-title ">Editar Postagem</h1>
                <?php foreach($results as $post): ?>
                    <p ><input type="hidden" value="<?= $post["id"] ?>" name="id"></p>
                    <p><input type="text" value="<?= $post["title"] ?>" name="title"></p>
                    <p><input type="text" value="<?= $post["descriptions"] ?>" name="descriptions"></p>
                <?php endforeach; ?>
	            <input type="submit" value="EDITAR">
            </form>

           
        </div>
    </div>
     
    </main>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>
</html>