<?php

    class db {
    // host
        private $host = 'localhost';
    //usuario
        private $usuario = 'root';
    //senha
        private $senha = '';
    //bd
        private $database ='db_tables';

    // met

        public function conecta_mysql(){

    //criar conexao
            $con =mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);
    //ajuste charset
            mysqli_set_charset($con,'utf8');
            if( mysqli_connect_errno()){
                echo 'erro:'.mysql_connect_error();
            }
            return $con;
        }
    }
?>