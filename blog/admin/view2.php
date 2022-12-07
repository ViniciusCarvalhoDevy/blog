<?php
require 'config.php';

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

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
           </div> 
             
    </div> 
<div class="d-block" style="padding-right: 0cm;">
    <h1 class="">Meus Posts</h1>
        <div class="container">
          
           
            <table class="table" style="margin: 0 auto;" id="contacts-table" >
                
                <thead>
                    
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Ações</th>

                </thead>
               
                
                <tbody >
                        <?php foreach($results as $_POST): ?>
                    <tr >
                        <td scope="row"><?php echo $_POST['id'];?></td>
                        <td scope="row"><?php echo $_POST['title'];?></td>
                        <td scope="row"><?php echo $_POST['descriptions'];?></td>
                        <td class="actions">
                            <a class="view-edit" style="text-decoration: none; " href="viewsBlog.php?id=<?=$_POST["id"]?>">
                            <ion-icon name="eye"></ion-icon>
                            </a>
                            <a style="text-decoration: none;" class="view-edit" href="editar.php?id=<?=$_POST["id"]?>">
                            <ion-icon name="create"></ion-icon>
                            </a>
                            <a style="text-decoration: none;  "id="delet" href="delete.php?id=<?=$_POST["id"]?>">
                            <ion-icon name="close-circle"></ion-icon>
                            </a>
                        </td>

                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
</div>
       
</div>
  
    </main>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>
</html>