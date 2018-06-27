<?php


function user($s){
    require_once('../Bd_connect/classe_db.php');

    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $busca = $s;


    $sql ="SELECT usuario FROM usuario WHERE id = '$s'";


    $result = mysqli_query($link, $sql);


    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $var = $row['usuario'];
            return $var;

        }
    }
}




function name($s){
    require_once('../Bd_connect/classe_db.php');

    $objdb = new db();
    $link = $objdb->conecta_mysql();


    $sql ="SELECT comentário,dono FROM arquivo_comentário WHERE idarquivos = '$s'";


    $result = mysqli_query($link, $sql);
    

    

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $var = $row['comentário'];
            $aux = $row['dono'];
            $user = user($aux);
            echo "<div class=\"border resposta px-4 pt-2\">
            <div class=\"row\">
                <div class=\"col-md6\">
                    <img src=\"img/avatar.jpg\" alt=\"avatar\" height=\"100\" width=\"100\">
                </div>
                <div class=\"col-md6\">
                    <h5 class:\"pt-3\">$user:</h5 >
                </div>
                
            
            </div>

            <p>$var</p>

        </div>";

        }
    }
}

