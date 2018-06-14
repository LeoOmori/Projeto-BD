<?php

    function sessaoSalaUser(){


        require_once('../bd_connect/classe_db.php');

        $id = $_SESSION['id'];
        
        $sql =" SELECT nome FROM sala WHERE usuario_id = '$id' " ;

        $objdb = new db();
        $link = $objdb->conecta_mysql();


        $resultado_id = mysqli_query($link,$sql);








        
        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $div = '"pt-4"';
                $href = '"sala.php?var=1"';
                $var = $row["nome"];
                echo "<div class=$div>
                <a href=$href><p>$var</p></a>
            </div>   ";




            }
        }



    }

?>