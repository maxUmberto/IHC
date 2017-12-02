<?php
// inicio da sessão
  session_start();
?>

<html>
<head>
  <meta charset="utf-8">
  <title>LibrasTEC - Cadastro</title>
  <!-- chamando o css do bootsrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/estilo.css" rel="stylesheet">
</head>

<body>
  <!--Div do titulo da pagina-->
  <header class="ccheader">
    <h1>Formulário de cadastro</h1>
  </header>
  <div class="wrapper"><!-- Div container -->

      <form method="post" action="valida.php" class="ccform">
        <?php
              //Mensagens de erro de cadastro
              if(isset($_SESSION['msg'])){
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
          }
        ?>
      <div class="ccfield-prepend"><!--Campo do NOME -->
          <span class="ccform-addon" aria-hidden="true"><i class="fa fa-user fa-2x"></i></span>
          <input class="ccformfield" type="text" placeholder="Nome completo" name="nome">
      </div>
      <div class="ccfield-prepend"><!-- Campo do E-MAIL -->
          <span class="ccform-addon" aria-hidden="true"><i class="fa fa-envelope fa-2x"></i></span>
          <input class="ccformfield" type="email" placeholder="Email" name="email">
      </div>
      <div class="ccfield-prepend"><!-- Campo da senha -->
          <span class="ccform-addon" aria-hidden="true"><i class="fa fa-key fa-2x"></i></span>
          <input class="ccformfield" type="password" placeholder="Senha" name="senha">
      </div>
      <div class="ccfield-prepend"><!--Campo da confirmação de senha -->
          <span class="ccform-addon"><i class="fa fa-key fa-2x"></i></span>
          <input class="ccformfield" type="password" placeholder="Confirme sua senha" name="senha2">
      </div>
      <!-- Div dos botões-->
      <div class="ccfield-prepend row" style="margin-left:0px;">
        <div class="col-md-ofset-0"></div>
          <button type="submit" class="ccbtn">
            Cadastrar <i class="fa fa-sign-in" aria-hidden="true"></i>
          </button>
          <div class="col-md-0" style="margin-left:10px"></div>
      <!--<button type="button" class="ccbtn">-->
        <a href="index.php" class="ccbtn" style="text-decoration:none">Voltar <i class="fa fa-undo" aria-hidden="true"></i></a>
      </button>
    </div><!-- fim da div dos botões>
      </form>
  </div><!-- fim da div container-->
  <script src="js/bootstrap.min.cs"></script>
</body>
</html>
