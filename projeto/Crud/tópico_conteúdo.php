<?php


    function nome($s){
        require_once('../Bd_connect/classe_db.php');

        $objdb = new db();
        $link = $objdb->conecta_mysql();


        $sql ="SELECT titulo FROM tópicos WHERE idTópicos = '$s'";


        $result = mysqli_query($link, $sql);

        

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $var = $row['titulo'];
                echo "$var";

            }
        }
    }
    function coment($s){
        require_once('../Bd_connect/classe_db.php');

        $objdb = new db();
        $link = $objdb->conecta_mysql();

        $busca = $s;


        $sql ="SELECT comentário FROM tópicos WHERE idTópicos = '$s'";


        $result = mysqli_query($link, $sql);


        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $var = $row['comentário'];
                echo "$var";

            }
        }
    }




?>