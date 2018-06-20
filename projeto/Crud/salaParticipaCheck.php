<?php

function participaSalaCheck($x, $y){

    require_once('../Bd_connect/classe_db.php');


    $idUser = $x;
    $idSala = $y;


    $sql =" SELECT * FROM usuarios_em_sala WHERE usuarioID = '$idUser' AND salaId = '$idSala'";

    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $resultado_id = mysqli_query($link,$sql);

    if (mysqli_num_rows($resultado_id) > 0) {
        return 1;
    }else{
        return 0;
    }

}





?>