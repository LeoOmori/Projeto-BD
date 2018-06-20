<?php
        session_start();
        require_once('../Bd_connect/classe_db.php');

        $usuarioID = $_SESSION['id'];
        $salaID = $_GET['var'];

        $objdb = new db();
        $link = $objdb->conecta_mysql();
        
        $sql = "insert  into  usuarios_em_sala(usuarioID, Salaid) values ('$usuarioID','$salaID')";
        if(mysqli_query($link,$sql)){
            header('Location: ../paginas/user_secao.php');
        }else{
            echo 'erro ao registrar o usuário';
            }





?>