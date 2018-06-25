<?php  

    session_start();
    require_once('../Bd_connect/classe_db.php');
                
    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $id = $_SESSION['id'];
    $id_convite = $_GET['id2'];




    $sql = " INSERT  INTO  usuario_amigos(usuario_id1, usuario_id2, aceito) VALUES ('$id','$id_convite',0)";

    mysqli_query($link,$sql);


    header("Location: ../paginas/perfil_usuarios.php?var=$id_convite");









?>