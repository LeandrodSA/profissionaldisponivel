<?php
    session_start();
    session_destroy();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    
     <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

    <title>Profissional</title>
  </head>
  <body>
    
    <nav>
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="../index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro.php">Cadastro</a>
        </li>
      </ul>
      
      <div class="row">
            <div class="col-md-12 " style="text-align:center;">
                <form method="post" action="busca.php">
                    <label for="funcao" style="color:#1f1;">Função</label>
                    <input type="text" name="pesquisa" required>
                    
                    <label for="cidade" style="color:#1f1;">Cidade</label>
                    <input type="text" name="cidade" required>
                    
                    <button type="submit"><svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/></svg></button>
                </form>
            </div>
        </div>
    </nav>

    <section>      
        <div class="col-md-12" style="text-align:center;">
            <h1 class="display-4 text-font">Login</h1>
        </div>
    
        <div class="row">
            <div class="col-md-4">
                <img class="card-img" src="../img/back3.jpg">
            </div>
            
            <div class="jumbotron col-md-4" >
                <form action="../controller/controller_login.php" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                    
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control" required>
                    
                    <input type="submit" value="Logar">
                </form>
            </div>
            
            <div class="col-md-4">
                <img class="card-img" src="../img/back4.jpg">
            </div>
        </div>
      
    
        <footer class="text-font">  
            <div class="row" style="padding:3%;text-align:center;">
                <div class="col-md-4">
                    <h6>Author: Leandro Alves</h6>
                </div>
                
                <div class="col-md-4"style="">
                    <a href="https://www.facebook.com/leandro.silviera"><img src="../img/face.png" style="width:15%;"></a>
                </div>
                
                <div class="col-md-4">
                    <h6>Email: big.foot.rpg@gmail.com</h6>
                </div>
            </div>
      </footer>
    </section>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>