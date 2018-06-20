<?php

function donoSala($x){

    require_once('../Bd_connect/classe_db.php');


    $id = $x;


    $sql =" SELECT * FROM sala WHERE idsala = '$id' ";

    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $resultado_id = mysqli_query($link,$sql);

    if($resultado_id){

        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['usuario_id'])){
            $dono =$dados_usuario['usuario_id'];
            return $dono;
        }
    }else{
        echo 'erro na consulta ao banco de dado, entrar em contato com o admin do site';
    }

}





?>