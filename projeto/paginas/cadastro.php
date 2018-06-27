<?php

    $var = isset($_GET['var']) ? $_GET['var'] : 0 ;

?>









<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Cadastro</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">

                
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                            <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cadastro.php">Cadastre-se</a>
                            </li>
                           <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                           </li>
                        </ul>
                    </div>
            
        </div>

    </nav>
      <div class="container">
        <header>
            <div class="pb-2 mt-4 mb-2 border-bottom">
                <div class="row">
                        <div class="col-md-12">
                            <div class="logo" align="center">
                                <h1>ShareFiles</h1>
                            </div>
                            <div class="menu">

                            </div>
                        </div> 
                </div>
            </div>
        </header>
        <section>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <h3>Cadastro</h3>
                    <form action="../Scripts/registraUsuario.php" method="post">

                        <div class="form-group">
                            <label for="Nome">Nome</label>
                            <input type="text" name="Nome_input" class="form-control" id="Nome">
                        </div>

                        <div class="form-group">
                            <label for="E-mail">E-mail</label>
                            <input type="text" name="E-mail_input" class="form-control" id="E-mail">
                        </div>

                        <div class="form-group">
                            <label for="Password">Senha</label>
                            <input type="text" name="password_input" class="form-control" id="Password">
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        
                    </form>
                    <?php

                        if($var == 1){
                            echo '<font color="#FF0000"> *Usuário registrado</font>';
                        }
                    ?>
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </section>


      </div>

    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>