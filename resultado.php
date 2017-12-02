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
      <a class="btn btn-primary btn-lg" href="login.php"><span class="fa fa-user-o" aria-hidden="true"></span>Login</a>
      <a class="btn btn-primary btn-lg" href="cadastro.php"><span class="fa fa-sign-in" aria-hidden="true"></span> Cadastre-se</a>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <form class="" action="pesquisa.php" method="post">
          <div class="input-group col-md-12">
            <input type="text" class="form-control input-lg" placeholder="Digite o termo desejado..." />
            <span class="input-group-btn">
              <button type="submit" class="btn btn-primary btn-lg" type="button">
                <span class="fa fa-search" aria-hidden="true"></span>
              </button>
            </span>
          </div>
        </form>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
