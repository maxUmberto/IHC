<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LibrasTec</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Fim - Bootstrap -->

    <!-- jQuery -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Fim - jQuery -->

  </head>
  <body>
    <nav class="navbar" id="home">
      <div class="container-fluid">
         <ul class="nav navbar-nav navbar-right">
         <li class="gly-login"><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> Login</a></li>
         <li class="gly-login"><a data-toggle="modal" data-target="#login"><span class="fa fa-sign-in"></span> Cadastre-se</a></li>
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
        <form action="pesquisa.php" method="post">
            <label class="col-sm-2 col-form-label">Busque uma Palavra:</label>
              <input type="text" id="procurar" name="procurar" style="width:108%;" class="form-control" placeholder="Procurar"/>
              <input type="submit" class="btn btn-primary" value="Procurar"/>
          </form>
        </div>
  </body>
</html>
