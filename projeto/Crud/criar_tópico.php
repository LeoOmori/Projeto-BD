<?php


        
        require_once('../Bd_connect/classe_db.php');

        session_start();
        $salaid = $_SESSION['salaID'];
        $id = $_SESSION['id'];
        $title = $_GET['nome_topico'];
        $coment = $_GET['comentario'];

        echo "$salaid </br>";
        echo "$id </br>";
        echo "$title";
        echo "$coment";
        
        $objdb = new db();
        $link = $objdb->conecta_mysql();

        $sql = " INSERT  INTO  tópicos(titulo, comentário, salaid, donoid, TópicoID) VALUES ('$title','$coment', '$salaid' , '$id', NULL)";

        $res = mysqli_query($link,$sql);

        if (!$res) {
            die(mysqli_error($link));
        } else  {



        header("Location: ../paginas/sala.php?var=$salaid");

        }







?>