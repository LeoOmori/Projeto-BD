<?php

require_once('../bd_connect/classe_db.php');

function buscaSala(){


    require_once('../bd_connect/classe_db.php');

    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $busca = $_GET['procura_perfil'];


    $sql ="SELECT nome, idsala FROM sala WHERE nome LIKE '%$busca%'";


    $result = mysqli_query($link, $sql);


    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $var = $row['nome'];
            $id = $row['idsala'];
            echo "<a href=\"sala.php?var=$id\"><p>$var</p></a> </br>";

        }
    }
}



?>
