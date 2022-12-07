<?php
require 'admin/config.php';

$cat = $_GET['cat'];

$stmt = $conectar->prepare('SELECT id, title, img, descriptions, datas FROM posts WHERE id_category = :cat');
    
$stmt->execute(array('cat' => $cat));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC); 
/*
foreach($results as $post): ?>
		<h1><?= $post["title"] ?></h1>
		<p><?= $post["descriptions"] ?></p>
		<p><?= date('d/m/Y', strtotime($post["datas"])); ?></p>
 endforeach; ?>*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/blog/CSS/category.css">
    <!-- CSS only -->

    <title>Categoria</title>
</head>
<body id="main">
<h1>Produdos Da Categoria <?php echo $_GET['id']?></h1>
<?php foreach($results as $post):?> 
<div class="container">
	
    <div class="card " style="max-width: 800px; margin-top: 1cm;">
	
  <div class="row">
    <div class="col">
	<!--<img src="admin/product.jpg"  alt="...">-->
  <img src="<?=$post['img']?>" class="card-img-top" alt="..." height="250px" width="300px"  >
    </div>
    <div class="coll">
      <div class="card-body">
        
            <br>
            <span for="id" class="span" id="span">Titulo:</span>
            <hr class="hr">
			<h2><?= $post["title"] ?></h2>
             <br><br>
            <span for="title">Data:</span>
            <hr class="hr">
			<h4><?= date('d/m/Y', strtotime($post["datas"])); ?></h4>
           <br>
           
           <br>
            <span class="span" for="des" >Descrição:</span>
            <hr>
            <p id="description-user" name="des"><?=$post["descriptions"]?></p>
           
       
      </div>
    </div>
  </div>
</div>
</div>

 <?php endforeach;?>  
            
            
    


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

<!--<p><img src=" //$post["image"]" class="card-img-top" alt="..."></p>-->