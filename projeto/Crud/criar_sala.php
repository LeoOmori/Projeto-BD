<?php

    require_once('../Classes/usuario.php');

    $user = new usuario();

    $nome =  $_POST['Nome_sala'];
    $comentario = $_POST['comentario'];
    $privacidade  = $_POST['privacidade_sala'];


    $user->criarSala($nome, $comentario, $privacidade);








?>