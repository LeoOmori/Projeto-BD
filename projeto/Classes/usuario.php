<?php

    require_once('../Bd_connect/classe_db.php');

    class usuario{

        public $usuario;
        public $email;
        public $senha;

    // funcao para registrar usuarios no banco de dados
        public function registrar($x, $y, $z){

            $this->usuario = $x;
            $this->email = $y;
            $this->senha = $z;

            $objdb = new db();
            $link = $objdb->conecta_mysql();
            
            $sql = "insert  into  usuario(usuario, email, senha) values ('$this->usuario','$this->email','$this->senha')";
            if(mysqli_query($link,$sql)){
                header('Location: ../paginas/cadastro.php?var=1');
            }else{
                echo 'erro ao registrar o usuário';
                }

        }
        
    //// funcao de validacao de senha
        public function logar($x, $y){

            require_once('../Bd_connect/classe_db.php');


            $this->usuario = $x;
            $this->senha  =  $y;


            $sql =" SELECT * FROM usuario WHERE usuario = '$this->usuario' AND senha = '$this->senha' ";

            $objdb = new db();
            $link = $objdb->conecta_mysql();

            $resultado_id = mysqli_query($link,$sql);

            if($resultado_id){

                $dados_usuario = mysqli_fetch_array($resultado_id);

                if(isset($dados_usuario['usuario'])){
                    $_SESSION['usuario'] =$dados_usuario['usuario'];
                    $_SESSION['email'] =$dados_usuario['email'];
                    $_SESSION['id'] =$dados_usuario['id'];
                    header('Location: ../paginas/user_secao.php');
                }else{
                    header('Location: ../paginas/login.php?erro=1');
                }

            }else{
                echo 'erro na consulta ao banco de dado, entrar em contato com o admin do site';
            }

        }

        public function criarSala($name, $coment, $priv){

            session_start();
            
            $id = $_SESSION['id'];
            $nome = $name;
            $comentario = $coment;
            $privacidade = $priv;

            require_once('../Bd_connect/classe_db.php');
            
            $objdb = new db();
            $link = $objdb->conecta_mysql();

            $sql = " INSERT  INTO  sala(nome, comentario, privacidade, dono) VALUES ('$nome','$comentario','$privacidade','$id')";

            mysqli_query($link,$sql);


            header('Location: ../paginas/user_secao.php');

        }

        // public function aceitarAmizade();

        // public function enviarConviteAmizade();

        // public function desfazerAmizade();

        // public function enviarMenssagem();


    }





?>