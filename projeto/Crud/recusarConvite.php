<?php
session_start();
require_once('../bd_connect/classe_db.php');

$user2 = $_GET['var2'];

$user1 = $_SESSION['id'];


$sql ="DELETE FROM usuario_amigos WHERE usuario_id1 = $user2 AND usuario_id2 = $user1 " ;


$objdb = new db();
$link = $objdb->conecta_mysql();
mysqli_query($link,$sql);

header("location: ../paginas/conviteAmizade.php");



?>