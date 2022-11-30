<?php
require 'config.php';

$id = $_GET['id'];

$stmt = $conectar->prepare('SELECT id, title, descriptions FROM posts WHERE id = :id');
$stmt->execute(array('id' =>$id));
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* Parei na pagina 25 */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/blog/CSS/viewsBlog.css">
    <!-- CSS only -->

    <title>ViewsBlog</title>
</head>
<body>
<div class="container">
    <div class="card " style="max-width: 800px; margin-top: 4cm; margin-left:4cm;">
  <div class="row">
    <div class="col">
      <img src="product.jpg"  alt="...">
    </div>
    <div class="coll">
      <div class="card-body">
        <?php foreach($results as $_POST):?> 
            <br>
            <span for="id" class="span" id="span">Codigo:</span>
            <hr>
             <h4 id="" name="id"><?= $_POST["id"]?></h4>
             <br><br>
            <span for="title" >Titulo: </span>
            <hr>
           <h4 id="" name="title"><?= $_POST["title"]?></h4>
           <br>
           
           <br>
            <span class="span" for="des" >Descrição:</span>
            <hr>
            <p id="description-user" name="des"><?=  $_POST["descriptions"]?></p>
           
       <?php endforeach;?>  
      </div>
    </div>
  </div>
</div>
</div>

 
            
            
    


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>