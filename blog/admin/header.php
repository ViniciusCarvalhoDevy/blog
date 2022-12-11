<?php
require 'config.php';

if(isset($_GET['sair'])){
    session_destroy();
    header('Location: index.php');
    die();
}
    header("Location: view2.php");



?>

