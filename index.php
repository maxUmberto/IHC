<?php
session_start();
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>LibrasTec</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

  </head>
  <body>
    <div class="float-right">
        <button class="btn btn-primary btn-lg" id="myBtn"><span class="fa fa-user-o" aria-hidden="true"></span> Login</button>
        <a class="btn btn-primary btn-lg" href="cadastro.php"><span class="fa fa-sign-in" aria-hidden="true"></span> Cadastre-se</a>
    </div>
      <!-- Modal -->
      <div class="modal fade" id="#myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal conteúdo-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Login</h4>
            </div>
            <div class="modal-body">
              <form role="form" action="" method="post" name="form2">
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
      <div class="central" style="position: absolute; height: 50%; top: 38%; width: 100%;">
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
          <p style="text-align:center; font-size:30px;"><b>Faça uma busca</b></p>
        </div>
      <div class="col-md-4"></div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">

                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Buscar" />
                    <span class="input-group-btn">
                        <button class="btn btn-primary btn-lg" type="button">
                            <span class="fa fa-search" aria-hidden="true"></span>
                        </button>
                    </span>
                </div>
              </div>
          <div class="col-md-2"></div>
      </div>
    </div>
  </div>
		<script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
          $("#myBtn").click(function(){
              $("#myModal").modal();
          });
      });
    </script>
  </body>
</html>
