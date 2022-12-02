<?php
require 'config.php';

$id = $_POST['id'];
$title = $_POST['title'];
$descriptions = $_POST['descriptions'];

$stmt = $conectar->prepare('UPDATE posts SET id = :id, title = :title, descriptions = :descriptions WHERE id = :id');

$stmt->bindParam(":title", $title);
$stmt->bindParam(":descriptions", $descriptions);
$stmt->bindParam(":id", $id);

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

header('Location: view2.php');
?>

