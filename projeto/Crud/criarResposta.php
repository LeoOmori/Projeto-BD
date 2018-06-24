<?php  

    session_start();
    require_once('../Bd_connect/classe_db.php');
                
    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $id = $_SESSION['id'];
    $comentario = $_GET['Resposta'];
    $topico = $_SESSION['id_tp'];




    $sql = " INSERT  INTO  resposta(comentário, idTópicos, Dono) VALUES ('$comentario','$topico' ,'$id')";

    mysqli_query($link,$sql);


    header("Location: ../paginas/topico.php?var=$topico");









?>