<?php  
function verUsuario($id1,$id2){
    require_once('../Bd_connect/classe_db.php');             
    $objdb = new db();
    $link = $objdb->conecta_mysql();
    


    $sql = " SELECT* FROM usuario_amigos WHERE usuario_id1=$id1 AND usuario_id2=$id2" ;

    $resultado = mysqli_query($link,$sql);
    if ($resultado) {
        $dados = mysqli_fetch_array($resultado);
        if(isset($dados['usuario_id1'])){
            return 0;
        }
        else return 1;
    }



    header("Location: ../paginas/perfil_usuarios.php?var=$id2");








}
?>