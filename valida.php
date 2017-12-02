<?php
  session_start();

  $email = htmlspecialchars(trim($_POST['email']));
  $senha = sha1(htmlspecialchars(trim($_POST['senha'])));
  if(isset($_POST['nome'])){
    $nome = htmlspecialchars(trim($_POST['nome']));
    $senha2 = sha1(htmlspecialchars(trim($_POST['senha2'])));
  }

  $_SESSION['msg'] = '';

// Define uma função que poderá ser usada para validar e-mails usando regexp
function validaEmail($email) {
  $conta = "/^[a-zA-Z0-9\._-]+@";
  $dominio = "[a-zA-Z0-9\._-]+.";
  $extensao = "([a-zA-Z]{2,4})$/";
  $pattern = $conta.$dominio.$extensao;
  if (preg_match($pattern, $email))
    return true;
  else
    return false;
}

if(isset($nome)){
  function validaNome($nome){
    $nome2 = "/(?=^.{2,60}$)^[A-ZÀÁÂĖÈÉÊÌÍÒÓÔÕÙÚÛÇ][a-zàáâãèéêìíóôõùúç]+(?:[ ](?:das?|dos?|de|e|[A-Z][a-z]+))*$/";

    if (preg_match($nome2, $nome))
    return true;
    else
    return false;
  }

  if(!validaNome($nome)){
    $_SESSION['msg'] .= "Nome inválido<br>";
  }
}

function validaSenha($senha,$senha2){
  if(empty($senha)){
    return false;
    //echo 'senha vazia';
  }else if(strlen($senha)<=5){
    return false;
    //echo 'senha curta';
  }
  return true;
}

function comparaSenha($senha, $senha2){
  if($senha != $senha2 ){
    return false;
    //echo 'senhas diferentes';
  }
  return true;
}

if(!validaSenha($senha){
  $_SESSION['msg'] .= "Senha inválida<br>";
  if(isset($senha2)){
    if(!comparaSenha($senha,$senha2)){
      $_SESSION['msg'] .= "Senha inválida<br>";
    }
  }
}

if (!validaEmail($email)){
  $_SESSION['msg'] .= "O e-mail inserido é invalido<br>";
}

if(empty($_SESSION['msg'] == '')){
  $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">'.$_SESSION['msg'].'</div>';
  if(isset($nome)){
    header('Location: cadastro.php');
  }
  else{
    header('Location: index.php');
  }
}else{
  if(isset($nome)){
    require_once('connection.php');

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($mysqli,$sql);
    if(mysqli_num_rows($resultado) == 0){
      $sql = "INSERT INTO usuarios VALUES ('$email','$nome', '$senha')";

      $query = $mysqli->query($sql);

      $_SESSION['msg'] = '<div class="alert alert-success text-center" role="alert">Usuário cadastrado com sucesso</div>';
      header('Location: index.php');
    }
    else{
      $_SESSION['msg'] = '<div class="alert alert-danger" role="alert"> Email já está sendo usado</div>';
      header('Location: cadastro.php');
    }
  }
}
?>
