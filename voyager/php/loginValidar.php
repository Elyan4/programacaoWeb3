<?php

session_start();
include('conexao.php');

if((isset($_POST['email'])) && (isset($_POST['senha']))){
  $usuario = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
  $senha = mysqli_real_escape_string($conn, $_POST['senha']);
  $senha = md5($senha);
    
  //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
  $result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
  $resultado_usuario = mysqli_query($conn, $result_usuario);
  $resultado = mysqli_fetch_assoc($resultado_usuario);
  
  //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
  if(isset($resultado)){
    $_SESSION['usuarioId'] = $resultado['id'];
    $_SESSION['usuarioNome'] = $resultado['nome'];
    $_SESSION['usuarioEmail'] = $resultado['email'];
      header("Location: http://localhost/voyager/index.html");
  } else {
  $_SESSION['loginErro'] = "Usuário ou senha inválido";
  header("Location: http://localhost/voyager/php/login.php");
}
?>

/*
if(empty($_POST['email']) || empty($_POST['senha'])){
header("Location: index.php");
exit;
}
$usuario = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT * FROM 'usuarios' WHERE 'email' = 'elyanleao4@gmail.com' AND 'senha' ='asas'";
echo $query; exit;

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1){
$_SESSION['usuario'] = $usuario;
header("Location: index.php");
exit;
} else{
  header("Location: painel.php");
  exit;
}*/
?>