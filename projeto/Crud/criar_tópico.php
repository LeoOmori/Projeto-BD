<?php


        
        require_once('../Bd_connect/classe_db.php');

        session_start();
        $salaid = $_SESSION['salaID'];
        $id = $_SESSION['id'];
        $title = $_GET['nome_topico'];
        $coment = $_GET['comentario'];

        
        $objdb = new db();
        $link = $objdb->conecta_mysql();

        $sql = " INSERT  INTO  tópicos(titulo, comentário, idsala, donoid) VALUES ('$title','$coment', '$salaid' , '$id')";

        $res = mysqli_query($link,$sql);

        if (!$res) {
            die(mysqli_error($link));
        } else  {



        header("Location: ../paginas/sala.php?var=$salaid");

        }







?>