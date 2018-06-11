<?php

    session_start();
    require_once('../Classes/usuario.php');

    $user = new usuario;
    $user->logar($_POST['Nome_input'], $_POST['senha_input']);

    ///validacao de senhar ao tentar logar







?>