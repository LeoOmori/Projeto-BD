<?php  

    session_start();
    require_once('../Bd_connect/classe_db.php');
                
    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $id = $_SESSION['id'];
    $comentario = $_GET['comentario'];
    $arqID = $_SESSION['arqID'];




    $sql = " INSERT  INTO  arquivo_comentário(comentário, idarquivos, dono) VALUES ('$comentario','$arqID' ,'$id')";

    mysqli_query($link,$sql);


    header("Location: ../paginas/comentSala.php?var=$arqID");









?>