<?php
  session_start();
  if(!empty($_POST['busca'])){
    $busca = $_POST['busca'];

    require_once('connection.php');

    $sql = "SELECT * FROM videos WHERE nome_video LIKE '%$busca%'";

    $sql = mysqli_query($mysqli, $sql);

    if(mysqli_num_rows($sql) > 0){
      $i = 0;
      while($resultado = mysqli_fetch_row($sql)){
        $_SESSION["nome_video"]["$i"] = $resultado[0];
        $_SESSION["conceito"]["$i"] = $resultado[1];
        $_SESSION["descricao"]["$i"] = $resultado[2];
        $_SESSION["link"]["$i"] = $resultado[3];

        $i++;
      }
      $_SESSION['num'] = $i;
      header('Location: resultado.php');
    }else{
      $_SESSION['msg'] = '<div class="alert alert-warning text-center" role="alert">Termo buscado não encontrado</div>';
      header('Location: index.php');
    }
  }
  else{
    header('Location: index.php');
  }
?>
