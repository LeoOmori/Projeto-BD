<?php

    require_once('../bd_connect/classe_db.php');



    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $busca = $_GET['procura_perfil'];

    $sql ="SELECT usuario, id FROM usuarios WHERE usuario LIKE '%$busca%'";


    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $var = $row['usuario'];
            echo "$var";
        }
    }



?>

