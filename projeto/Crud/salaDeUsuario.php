<?php

    function salaDeUsuario(){


        require_once('../bd_connect/classe_db.php');

        $id = $_SESSION['id'];
        
        $sql =" SELECT * FROM usuarios_em_sala, sala WHERE usuarioID = '$id' AND salaID = idsala " ;

        $objdb = new db();
        $link = $objdb->conecta_mysql();


        $resultado_id = mysqli_query($link,$sql);

        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $div = '"pt-4"';
                $var = $row["nome"];
                $idsala = $row['idsala'];
                $href = "'sala.php?var=$idsala'";
                echo "<div class=$div>
                <a href=$href><p>$var</p></a>
            </div>   ";




            }
        }



    }


?>