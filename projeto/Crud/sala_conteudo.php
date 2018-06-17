<?php


    function comentario($s){
        require_once('../Bd_connect/classe_db.php');

        $objdb = new db();
        $link = $objdb->conecta_mysql();

        $busca = $s;


        $sql ="SELECT comentario FROM sala WHERE idsala = '$s'";


        $result = mysqli_query($link, $sql);


        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $var = $row['comentario'];
                echo "<p>$var</br>";

            }
        }
    }
    function nome($s){
        require_once('../Bd_connect/classe_db.php');

        $objdb = new db();
        $link = $objdb->conecta_mysql();

        $busca = $s;


        $sql ="SELECT nome FROM sala WHERE idsala = '$s'";


        $result = mysqli_query($link, $sql);


        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $var = $row['nome'];
                echo "<h3>$var</h3>";

            }
        }
    }




?>