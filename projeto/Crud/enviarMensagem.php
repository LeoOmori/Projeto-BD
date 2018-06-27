<?php


        
        require_once('../Bd_connect/classe_db.php');

        session_start();
        $user2 = $_GET['var'];
        $id = $_SESSION['id'];
        $mensagem = $_POST['mensagem'];
        $File = $_FILES['file'];



        $objdb = new db();
        $link = $objdb->conecta_mysql();

        $sql1 = " INSERT  INTO  mensagem(conteúdo, remetenteID, destinatárioID) VALUES ('$mensagem','$id', '$user2')";


        $resultado = mysqli_query($link,$sql1);



        if (!$resultado) {
            die(mysqli_error($link));
        } else  {

        $mensagemID = mysqli_insert_id ($link);
        
        echo"$mensagemID</br>";

        
        echo "$user2</br>";  

        echo "$mensagem</br>";




























        if(isset($File)){



            $fileName =  $_FILES['file']['name'];
            $fileTmpName =  $_FILES['file']['tmp_name'];
            $fileSize =  $_FILES['file']['size'];
            $fileError =  $_FILES['file']['error'];
            $filetype =  $_FILES['file']['type'];

            echo"$fileName</br>";
        
        
        
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
        
            $allowed = array('jpg', 'jpeg', 'png', 'mp3', 'pdf', 'doc', 'zip', 'rar', 'docx', 'odt');
        
            if(in_array( $fileActualExt, $allowed)){
                if($fileError === 0){
                    if($fileSize < 10000000){
                        $fileNameNew = uniqid('', true).".".$fileActualExt; 
        
                        $fileDestination = '../upload/'.$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination); 
        
                        $sql = " INSERT  INTO  arquivo_mensagem(nome, idmensagem, path) VALUES ('$fileName', '$mensagemID' , '$fileDestination')";   
        
                        $res = mysqli_query($link,$sql);
                        if (!$res) {
                            die(mysqli_error($link));
                        }
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


        
        header("Location: ../paginas/user_secao.php");

        }







?>