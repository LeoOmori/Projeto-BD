<?php

    require_once('../bd_connect/classe_db.php');



    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $busca = $_GET['procura_perfil'];

    $sql ="SELECT nome, id FROM usuarios WHERE nome LIKE '%$busca%'";

    $resultado_id = mysqli_query($link,$sql);

    $result = mysqli_query($link, $sql);

    $count = mysql_num_rows($result);
    // conta quantos registros encontrados com a nossa especificação
    if ($count == 0) {
        echo "Nenhum resultado!";
    } else {
        // senão
        if ($count == 1) {
            echo "1 resultado encontrado!";
        }
        // se houver um resultado diz que existe um resultado
        if ($count > 1) {
            echo "$count resultados encontrados!";
        }
        // se houver mais de um resultado diz quantos resultados existem
        while ($dados = mysql_fetch_array($result)) {
            // enquanto houverem resultados...
            echo "$dados[nome] $dados[email]<br>";
            // exibir a coluna nome e a coluna email
        }
    }



?>

