<?php

  session_start();
  $id = $_GET['var'];
  require_once('../Crud/sala_conteudo.php');
  require_once('../Crud/select_dono_sala.php');
  require_once('../Crud/salaParticipaCheck.php');

  $dono = donoSala($id);
  $id_sessao = $_SESSION['id'];

  $participa = participaSalaCheck($id_sessao, $id);


?>





<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Sala</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">

                    <a class="navbar-brand" href="#">Navbar</a>

                
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                            <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="../Scripts/sair.php">sair</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="user_secao.php">home</a>
                            </li>
                    </div>
            
        </div>

    </nav>
    <div class="wrapper pt-4 px-4">
      <?php
        
        
        if(($id_sessao !== $dono) && ($participa == 0)){
            echo '
            <form action="../Crud/participarSala.php" method="get">
            <button type="submit" name="var" value=" ',$id,' ">entre na sala</button>
            </form>';
        }
        


      ?>
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        
          <?php

            nome($id);

          ?>
        
        </div>
        <div class="col-md-3">
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <?php


            comentario($id);


          ?>
        </div>
        <div class="col-md-6 border">

          <h3>arquivos:</h3>
        </div>
        <div class="col-md-3">
          <h3>coloque um arquivo:</h3>
          <a href="upload_arquivo.php"><button>upload</button></a>
        </div>
      </div>
      <div class="wrapper pt-4 px-4">
          <h3>Fórum:</h3>
          <div class="wrapper border">
            <a href="topico.php"><p>topico 1</p></a>         
            <a href="topico.php"><p>topico 1</p></a>
          </div>
          <div class="botao pt-4 " align="center">
            <a href="criar_topico.php"><button class="btn btn-primary">Criar Tópico</button></a>
          </div>
      </div>
    </div>
    
    
    
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>