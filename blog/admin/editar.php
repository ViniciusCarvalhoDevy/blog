<?php
require 'config.php';

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

/*<?php 
require 'config.php';

$stmt = $conectar->prepare("DELETE FROM posts WHERE id = :id");
$id =$_GET['id'];
$stmt->bindParam(":id",$id);
$stmt->execute();

echo "Registro apagado!";
?>*/

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
      
    <main   class=" d-flex">
      <div class="conteiner-fluid">
        
           <div class="row">
            <nav id="sidebarMenu" style=" margin-right:5cm; height:312px;" class="col-md-10  text-white bg-dark pt-5  ">
                <h2>Bom dia,<?php echo $_GET['nome'];?>
                </h2>
                <p><a href="header.php">Deslogar</a></p>
                <?php if(isset($_GET['sair'])){
                session_destroy();
                header("Location: index.php");
                die();
                }?>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="" class="nav-item">Dashboard</a></li>
                    <li class="nav-item"><a href="">Inserir</a></li>
                </ul>
            </nav>
           </div> 
            
    </div>
        <div class="container ">
            <h1 class="main-title">Editar Postagem</h1>
           
        </div>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>
</html>