<?php 
include "admin/config.php"; 
include "nav.php";

$id = $_GET['id'];

$stmt = $conectar->prepare("SELECT * FROM posts WHERE id = :id");
$stmt->execute(array('id'=>$id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS/viewPost.css">
	<title>Post</title>
</head>
<body>
	<div class="container">
	<?php foreach ($results as $post): ?>
		<h1><?= $post['title'] ?></h1>
		
		<p>
		<img width="600px" height="400px" src="<?= $post['img'] ?>" alt="<?= $post['title'] ?>" >
		</p>
		<p><?= date('d/m/Y', strtotime($post['datas'])); ?></p>
		<p><?= $post['descriptions'] ?></p>
		<p id="text"><?= $post['text'] ?></p>
	<?php endforeach; ?>
</div>

<!-- footer -->
<?php include "footer.php"; ?>


</body>
</html>