<?php  
function verConvite($id1,$id2){
    require_once('../Bd_connect/classe_db.php');             
    $objdb = new db();
    $link = $objdb->conecta_mysql();
    


    $sql = " SELECT* FROM usuario_amigos WHERE ((usuario_id1=$id1 AND usuario_id2=$id2) OR (usuario_id1=$id2 AND usuario_id2=$id1)) AND aceito = 1 "  ;

    $resultado = mysqli_query($link,$sql);
    if ($resultado) {
        $dados = mysqli_fetch_array($resultado);
        if(isset($dados['usuario_id1'] )){
            return 0;
        }
        else if($id1 == $id2) return 0;
        else return 1;
    }
}
