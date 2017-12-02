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
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <div class="">

    </div>

    <div class="float-right">
      <?php
        if(isset($_SESSION['nome'])){
          echo '<a href="index.php" class="btn btn-primary btn-lg"><span class="fa fa-user" aria-hidden="true"></span> '.$_SESSION['nome'].'</a>';
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

    <div class="container">
      <div class="row ccheader">
        <div class="col-md-2"></div>
        <div class="col-md-12">
          <form class="" action="pesquisa.php" method="post">
            <div class="input-group col-md-12"style="width:700px; margin-left:30px;">
              <input type="text" class="form-control input-lg"  placeholder="Digite o termo desejado..." name="busca"/>
              <span class="input-group-btn">
                <button type="submit" class="btn btn-primary btn-lg" type="button">
                  <span class="fa fa-search" aria-hidden="true"></span>
                </button>
              </span>
            </div>
          </form>
        </div>

      </div>
    </nav>

  <?php
    for($i = 0; $i < $_SESSION['num']; $i++){
      echo '<div class="row">';
      echo '<div class="col-md-2"></div>';
      echo '<div class="col-md-8">';
      echo    '<a href="visualiza.php?a='.$i.'" class="link_resultado">';
      echo      '<div class="resultado">';
      echo          "<p>".$_SESSION['nome_video']["$i"];
      echo          "<p>".$_SESSION['descricao']["$i"]."</p>";
      echo      '</div>';
      echo    '</a>';

      echo '</div>';
      echo '<div class="col-md-2"></div>';
      echo '</div>';
    }
  ?>

  </div>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
