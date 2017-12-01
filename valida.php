<?php
  session_start();

  $email = $_POST['email'];
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $senha2 = $_POST['senha2'];

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

function validaNome($nome){
  $nome2 = "/(?=^.{2,60}$)^[A-ZÀÁÂĖÈÉÊÌÍÒÓÔÕÙÚÛÇ][a-zàáâãèéêìíóôõùúç]+(?:[ ](?:das?|dos?|de|e|[A-Z][a-z]+))*$/";

  if (preg_match($nome2, $nome))
    return true;
  else
    return false;
}

function validaSenha($senha,$senha2){
  if(empty($senha))
    return false;
  else if(strlen($senha)<=5)
    return false;
  else if($senha != $senha2 )
    return false;
}

if (!validaSenha($senha,$senha2))
  $_SESSION['msg'] .= "Senha inválida<br>";

if(!validaNome($nome))
  $_SESSION['msg'] .= "Nome inválido<br>";

if (!validaEmail($email))
  $_SESSION['msg'] .= "O e-mail inserido é invalido<br>";

if(isset($_SESSION['msg'])){
  header('Location: cadastro.php');
}
?>
