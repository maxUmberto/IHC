<?php
  session_start();

  $nome_video = $_POST['nome_video'];
  $descricao = $_POST['descricao'];
  $conceito = $_POST['conceito'];
  $link = $_POST['link'];

  $_SESSION['msg'] = '';

  /*function validaNome($nome_video){
    $string = "/(?=^.{2,70}$)^[a-zàáâãèéêìíóôõùúç][A-ZÀÁÂĖÈÉÊÌÍÒÓÔÕÙÚÛÇ]+(?:[ ](?:das?|dos?|de|e|[A-Z][a-z]+))*$/";

    if (preg_match($string, $nome_video))
      return true;
    else
      return false;
  }

  function validaDescricao($descricao){
    $string = "/(?=^.{2,300}$)^[a-zàáâãèéêìíóôõùúç][A-ZÀÁÂĖÈÉÊÌÍÒÓÔÕÙÚÛÇ]+(?:[ ](?:das?|dos?|de|e|[A-Z][a-z]+))*$/";

    if (preg_match($string, $descricao))
      return true;
    else
      return false;
  }

  if(!validaNome($nome_video)){
    $_SESSION['msg'] .= "Nome do vídeo inválido<br>";
  }

  if(!validaNome($descricao)){
    $_SESSION['msg'] .= "Descrição inválida<br>";
  }

  if(!validaNome($conceito)){
    $_SESSION['msg'] .= "Conceito inválido<br>";
  }*/

  if(empty($nome_video)){
    $_SESSION['msg'] .= "Nome do vídeo inválido<br>";
  }

  if(empty($conceito)){
    $_SESSION['msg'] .= "Conceito inválido<br>";
  }

  if(empty($descricao)){
    $_SESSION['msg'] .= "Descrição inválida<br>";
  }

  if(empty($link)){
    $_SESSION['msg'] .= "Link em branco<br>";
  }

  if(empty($_SESSION['msg'] == '')){
    $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">'.$_SESSION['msg'].'</div>';
    header('Location: addvideo.php');
  }else{
    require_once('connection.php');

    function convertYoutube($string) {
    	return preg_replace(
    		"/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
    		"<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
    		$string
    	);
    }

    $link = convertYoutube($link);

    $sql = "INSERT INTO videos VALUES ('$nome_video','$conceito', '$descricao', '$link')";

    $mysqli->query($sql) or die(mysqli_error($mysqli));

    $_SESSION['msg'] = '<div class="alert alert-success text-center" role="alert">Vídeo enviado com sucesso</div>';
    header('Location: addvideo.php');
  }
?>
