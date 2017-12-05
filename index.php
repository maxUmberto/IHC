<?php
session_start();
?>
<!DOCTYPE html>
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
    <?php
      if(isset($_SESSION['nome'])){
        echo '<button class="btn btn-primary btn-lg" disabled><span class="fa fa-user" aria-hidden="true"></span> '.$_SESSION['nome'].'</button>';
        ?>
        <a class="btn btn-primary btn-lg" href="addvideo.php"><span class="fa fa-upload" aria-hidden="true"></span> Enviar vídeo</a>
        <a class="btn btn-primary btn-lg" href="logout.php"><span class="fa fa-sign-out" aria-hidden="true"></span>Sair</a>
      <?php
    }else{
      ?>
      <a class="btn btn-primary btn-lg" href="login.php"><span class="fa fa-user-o" aria-hidden="true"></span>Login</a>
      <a class="btn btn-primary btn-lg" href="cadastro.php"><span class="fa fa-sign-in" aria-hidden="true"></span> Cadastre-se</a>
      <?php
    }
    ?>
  </div>

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
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <p style="text-align:center; font-size:30px;"><b>Faça uma busca</b></p>
        </div>
        <div class="col-md-3"></div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <form class="" action="pesquisa.php" method="post">
            <div class="input-group col-md-12">
              <input type="text" class="form-control input-lg" placeholder="Digite o termo desejado..." name="busca"/>
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
  </div>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
