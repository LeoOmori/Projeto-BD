<?php

    require_once('classe_db.php');

    $salaNome = $_GET['Nome_sala'];
    $coment = $_GET['comentario'];
    $forumSN = $_GET['radio_forum'];
    $privacidade = $_GET['privacidade_sala'];

    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $sql = "insert  into  sala(nome, coment, forumSN, privacidade) values ('$salaNome','$coment','$forumSN', '$privacidade')";

    if(mysqli_query($link,$sql)){
        header('location: sala.php');
    }


?>