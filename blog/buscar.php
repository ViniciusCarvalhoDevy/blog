<?php
require 'admin/config.php';

$buscar = $_POST['buscar'];
$stmt = $conectar->prepare("SELECT * FROM posts WHERE title LIKE '%$buscar%'");
$stmt->execute();
$search = $stmt->fetchAll();
$confirma = false;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/blog/CSS/buscar.css">
    <!-- CSS only -->

    <title>Busca do Produto</title>
</head>
<body>
	<main>


<h2>Resultado da busca</h2>   
		<br>
		<?php if ($search != null) {
	        foreach ($search as $key => $value): ?>		 				
        <div class="container">  
				<hr>				
				<h5 class="cardP">
				<a href="admin/viewsBlog.php?id=<?= $value["id"] ?>">
					<div class="card">
					<?= $value["title"] ?>
					</div>
				</a>				  
				</h5>				
				<hr>               
        </div>
		
		<?php endforeach; }else{ echo "<h1>Nenhum Item Encontrado!!</h1>";} ?>
       
	       
		
	</div>  

  
    </main>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>
</html>
