<?php


function topicoMostrar(){


    require_once('../bd_connect/classe_db.php');

    $id = $_SESSION['salaID'];
    
    $sql =" SELECT * FROM tópicos WHERE idsala = '$id' " ;


    $objdb = new db();
    $link = $objdb->conecta_mysql();


    $resultado_id = mysqli_query($link,$sql);

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $div = '"pt-4"';
            $var = $row["titulo"];
            $idsala = $row['idTópicos'];
            $href = "'topico.php?var=$idsala'";
            echo "<div class=$div>
            <a href=$href><p>$var</p></a>
        </div>   ";




        }
    }
}









?>