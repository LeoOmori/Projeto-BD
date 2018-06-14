<?php

    class sala{

        public $nome;
        public $comentario;
        public $privado;
        public $dono;

        

        function __construct($n, $c, $p, $d){

            $nome = $n;
            $comentario = $c;
            $privado = $p
            $dono = $d;
            
        }

        public function criarTopico ();
        
        public function deletarTopico();

        public function uparArquivo();


    }





?>