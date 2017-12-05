<?php
// inicio da sessão
  session_start();
?>

<html>
<head>
  <meta charset="utf-8">
  <title>LibrasTEC - Adicionar Video</title>
  <!-- chamando o css do bootsrap -->
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

  <!--Div do titulo da pagina-->
  <header class="ccheader">
    <h1 style="margin-left:400px;">Adicionar Video</h1>
  </header>
  <div class="wrapper"><!-- Div container -->
    <form method="post" action="valida_video.php" class="ccform">
      <?php
        //Mensagens de erro de Login
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
      ?>
      <div class="ccfield-prepend"><!-- Campo do E-MAIL -->
        <span class="ccform-addon" aria-hidden="true"><i class="fa fa-video-camera fa-2x"></i></span>
        <input class="ccformfield" type="text" placeholder="Nome do Vídeo" name="nome_video">
      </div>
      <div class="ccfield-prepend"><!-- Campo da senha -->
        <span class="ccform-addon" aria-hidden="true"><i class="fa fa-pencil-square-o fa-2x"></i></span>
        <input class="ccformfield" type="text" placeholder="Descrição" name="descricao">
      </div>
      <div class="ccfield-prepend"><!-- Campo da senha -->
        <span class="ccform-addon" aria-hidden="true"><i class="fa fa-lightbulb-o fa-2x"></i></span>
        <input class="ccformfield" type="text" placeholder="Conceito" name="conceito">
      </div>
      <div class="ccfield-prepend"><!-- Campo da senha -->
        <span class="ccform-addon" aria-hidden="true"><i class="fa fa-link fa-2x"></i></span>
        <input class="ccformfield" type="Text" placeholder="Link do Vídeo" name="link">
      </div>
      <!-- Div dos botões-->
      <div class="ccfield-prepend row" style="margin-left:0px;">
        <div class="col-md-ofset-0"></div>
        <button type="submit" class="ccbtn">
          Adicionar <i class="fa fa-plus-circle" aria-hidden="true"></i>
        </button>
        <div class="col-md-0" style="margin-left:10px"></div>
        <!--<button type="button" class="ccbtn">-->
        <a href="index.php" class="ccbtn" style="text-decoration:none">Voltar <i class="fa fa-undo" aria-hidden="true"></i></a>
      </div><!-- fim da div dos botões-->
    </form>
  </div><!-- fim da div container-->
  <script src="js/bootstrap.min.cs"></script>
</body>
</html>
