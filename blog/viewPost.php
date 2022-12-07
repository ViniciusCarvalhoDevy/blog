<?php 
include "admin/config.php"; 
include "nav.php";

$id = $_GET['id'];

$stmt = $conectar->prepare("SELECT * FROM posts WHERE id = :id");
$stmt->execute(array('id'=>$id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<div class="container">
	<?php foreach ($results as $post): ?>
		<h1><?= $post['title'] ?></h1>
		<p><?= date('d/m/Y', strtotime($post['datas'])); ?></p>
		<p>
		<img src="<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
		</p>
		<p><?= $post['descriptions'] ?></p>
	<?php endforeach; ?>
</div>

<!-- footer -->
<?php include "footer.php"; ?>
