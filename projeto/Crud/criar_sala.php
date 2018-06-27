<?php

    require_once('../Classes/usuario.php');

    $user = new usuario();

    $nome =  $_POST['Nome_sala'];
    $comentario = $_POST['comentario'];


    $user->criarSala($nome, $comentario);








?>