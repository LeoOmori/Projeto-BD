<?php


function download(){


    $s = $_SESSION['salaID'];
    require_once('../Bd_connect/classe_db.php');

    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $sql ="SELECT nome, path, idarquivos FROM arquivos WHERE idsala = '$s'";


    $result = mysqli_query($link, $sql);


    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        while($row = mysqli_fetch_assoc($result)) {
            $var = $row['nome'];
            $arq = $row['path'];
            $idArq = $row['idarquivos'];
            echo '<tr>'; 

            echo '<td>'; echo "$var";       echo '</td>';
            echo '<td>'; echo "<a href=\"$arq\">download</a>";       echo '</td>';  

            echo '<td>'; echo "<a href=\"../paginas/Comentários.php?var=$idArq\">  comentários</a>";       echo '</td>';


            echo ' </tr>';





        }
        echo '</table>';
    }

}



?>