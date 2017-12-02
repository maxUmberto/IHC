<?php
  session_start();
  if(!empty($_POST['busca'])){
    $busca = $_POST['busca'];

    require_once('connection.php');

    $sql = "SELECT * FROM videos WHERE nome_video = '$busca'";

    $sql = mysqli_query($mysqli, $sql);

    if(mysqli_num_rows($sql) > 0){
      $i = 0;
      while($resultado = mysqli_fetch_row($sql)){
        $_SESSION['busca']["$i"] = $resultado;
      }
    }else{
      $_SESSION['msg'] = '<div class="alert alert-warning text-center" role="alert">Termo buscado não encontrado</div>';
      header('Location: index.php');
    }
  }
  else{
    header('Location: index.php');
  }
?>
