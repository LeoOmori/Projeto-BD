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


    $sql ="SELECT conteúdo, remetenteID, idmenssagem FROM mensagem WHERE destinatárioID = '$s'";


    $result = mysqli_query($link, $sql);
    

    

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $var = $row['conteúdo'];
            $aux = $row['remetenteID'];
            $idmen = $row['idmenssagem'];
            $user = user($aux);
            echo "
            
            <h5 class=\"pt-4\">Menssagem</h5>
            <div class=\"border resposta px-4 pt-2\">
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
    
        
            $sql2 ="SELECT nome, path FROM arquivo_mensagem WHERE idmensagem = '$idmen'";   


            $res = mysqli_query($link, $sql2);
            
            if(mysqli_num_rows($res) > 0){
                while($row = mysqli_fetch_assoc($res)) {
                    $arq = $row['path'];
                    $n = $row['nome'];
                    echo "<div class=\"row\">
                    
                    
                    <div class=\"col-md-12 border\">
                        <h5>Arquivo Anexo</h5>
                        <a href=\"$arq\">$n</a>

                    </div>
                    
                    </div>";
                }
            }


        }
    }

}




?>