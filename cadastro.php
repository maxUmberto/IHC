<?php

?>

<html>
<head>
  <meta charset="utf-8">
  <title>Repositorio de TI em Libras - Cadastro</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/estilo.css" rel="stylesheet">
</head>

<body>
  <header class="ccheader">
    <h1>Formulário de cadastro</h1>
  </header>
  <div class="wrapper">
      <form method="post" action="" class="ccform">
      <div class="ccfield-prepend">
          <span class="ccform-addon" aria-hidden="true"><i class="fa fa-user fa-2x"></i></span>
          <input class="ccformfield" type="text" placeholder="Nome completo" required>
      </div>
      <div class="ccfield-prepend">
          <span class="ccform-addon" aria-hidden="true"><i class="fa fa-envelope fa-2x"></i></span>
          <input class="ccformfield" type="email" placeholder="Email" required>
      </div>
      <div class="ccfield-prepend">
          <span class="ccform-addon" aria-hidden="true"><i class="fa fa-key fa-2x"></i></span>
          <input class="ccformfield" type="password" placeholder="Senha" required >
      </div>
      <div class="ccfield-prepend">
          <span class="ccform-addon"><i class="fa fa-key fa-2x"></i></span>
          <input class="ccformfield" type="password" placeholder="Confirme sua senha" required>
      </div>
      <div class="ccfield-prepend">
          <button type="submit" class="ccbtn">
            Cadastrar <i class="fa fa-sign-in" aria-hidden="true"></i>
          </button>
      </div>
      </form>
  </div>
  <script src="js/bootstrap.min.cs"></script>
</body>
</html>
