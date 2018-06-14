<?php

    require_once('../Classes/usuario.php');


    $user = new usuario();

    $user->registrar($_POST['Nome_input'], $_POST['E-mail_input'], $_POST['password_input']);
    
    ///usuario registrado no banco de dados


?>