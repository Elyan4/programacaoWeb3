<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha1', FILTER_SANITIZE_STRING);


$result_usuarios = "INSERT INTO usuarios (nome, sobrenome, email, cpf, telefone, senha, criação) VALUES('$nome', '$sobrenome', '$email', '$cpf', '$telefone', '$senha', NOW())";

$res = mysqli_query($conn, $result_usuarios);
?>