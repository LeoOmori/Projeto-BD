<?php


function amigosMostrar(){
    require_once('../bd_connect/classe_db.php');
    require_once('../Crud/usuarioPorId.php');

    $id = $_SESSION['id'];
    
    $sql =" SELECT * FROM usuario_amigos WHERE ((usuario_id2 = '$id') OR (usuario_id1 = '$id')) AND aceito = 1" ;


    $objdb = new db();  
    $link = $objdb->conecta_mysql();


    $resultado_id = mysqli_query($link,$sql);

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {   
            $div = '"pt-4 pl-4"';
            $var = $row["usuario_id1"];
            $var2 = $row["usuario_id2"];
            if($var2 == $id){
                $usuario_nome = usuarioPorId($var);
                echo "<div class=$div class=\"col-md-3 \">
                <td>
                    <tr>
                        <p>$usuario_nome</p>
                    </tr>
                    <tr>
                        <a href=\"perfil_usuarios.php?var=$var\">perfil</a>
                    </tr>
                    <tr>
                        <a href=\"../Crud/removerAmigo.php?var2=$var\">desfazer amizade</a>
                    </tr>
                </td>
                </div>   ";
            }else{
                $usuario_nome = usuarioPorId($var2);
                echo "<div class=$div class=\"col-md-3 \">
                <td>
                    <tr>
                        <p>$usuario_nome</p>
                    </tr>
                    <tr>
                        <a href=\"perfil_usuarios.php?var=$var2\">perfil</a>
                    </tr>
                    <tr>
                        <a href=\"../Crud/removerAmigo.php?var2=$var2\">desfazer amizade</a>
                    </tr>
                </td>
                </div>    ";
            }

        }
    }
}
?>
