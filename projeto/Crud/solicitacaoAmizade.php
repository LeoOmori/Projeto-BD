<?php


function conviteMostrar(){
    require_once('../bd_connect/classe_db.php');
    require_once('../Crud/usuarioPorId.php');

    $id = $_SESSION['id'];
    
    $sql =" SELECT * FROM usuario_amigos WHERE usuario_id2 = '$id' AND aceito = 0" ;


    $objdb = new db();
    $link = $objdb->conecta_mysql();


    $resultado_id = mysqli_query($link,$sql);

    $result = mysqli_query($link, $sql);
    $nome;
    $email;

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {   
            $div = '"pt-4"';
            $var = $row["usuario_id1"];
            $usuario_nome = usuarioPorId($var);
            echo "<div class=$div>
            <td>
                <tr>
                    <p>$usuario_nome</p>
                </tr>
                <tr>
                    <a href=\"aceitarConvite.php\">Aceitar</a>
                </tr>
                <tr>
                    <a href=\"recusarConvite.php\">recusar</a>
                </tr>
           </td>
        </div>   ";


        }
    }
}
?>

<tr></tr>