<?php
session_start();
?>
<html lang="pt-br">
  <head>
  <meta charset="utf-8">
    <title>LibrasTec</title>

    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar" id="home">
      <div class="container-fluid">
         <ul class="nav navbar-nav navbar-right">
         <a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> Login</a>
         <a data-toggle="modal" data-target="#login"><span class="fa fa-sign-in"></span> Cadastre-se</a>
       </ul>
      </div>
    </nav>
    <!-- Modal -->
      <div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog">
          <!-- Modal conteúdo-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Login</h4>
            </div>
            <div class="modal-body">
              <form action="login.php" method="post" name="form2">
                  <div class="form-group">
                    <input type="email" class="form-control inscricao-input" id="email" name="email" placeholder="E-mail" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control inscricao-input" id="senha" name="senha" placeholder="Senha" required>
                  </div>
                  <button type="submit" name="submit" class="btn btn-me-inscrever center-block">Entrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Fim Modal -->

      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
          <?php
          if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
          }
          ?>
        </div>
          <div class="col-md-2"></div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
          <p style="font-size:40px;">Faça uma busca:</p>
        </div>
      <div class="col-md-4"></div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Buscar" />
                    <span class="input-group-btn">
                        <button class="btn btn-primary btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
          <div class="col-md-2"></div>
      </div>
    </div>
		<script src="js/bootstrap.min.js"></script>
  </body>
</html>
