<?php
session_start();
require_once('../Classes/usuario.php');

$id = $_SESSION['id'];
$salaid = $_SESSION['salaID'];

$objdb = new db();
$link = $objdb->conecta_mysql();

$salaID = $_SESSION['salaID'];

if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName =  $_FILES['file']['name'];
    $fileTmpName =  $_FILES['file']['tmp_name'];
    $fileSize =  $_FILES['file']['size'];
    $fileError =  $_FILES['file']['error'];
    $filetype =  $_FILES['file']['type'];



    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'mp3', 'pdf', 'doc', 'zip', 'rar', 'docx', 'odt');

    if(in_array( $fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 10000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt; 

                $fileDestination = '../upload/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("location: ../paginas/sala.php?var=$salaID?sucesso");

                $sql = " INSERT  INTO  arquivos(dono,nome, idsala, path) VALUES ('$id','$fileName', '$salaid' , '$fileDestination')";   

                $res = mysqli_query($link,$sql);
            }else{
                echo "Arquivo muito grande!";
            }
        }else{
            echo "Erro ao fazer upload!";
        }

    }else{
        echo "Extensão não permitida!";
    }

}




?>