<?php
session_start();
include_once("conexao.php");

$nome_usuario = filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'tele', FILTER_SANITIZE_NUMBER_INT);
// $nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$create_user = "INSERT INTO cadastro (nome_usuario, cpf, endereco, tele, nome, senha) VALUES ('$nome_usuario', '$cpf', '$enderco', '$telefone', '$nome', '$senha')";
$created_user = mysqli_query($conn, $create_user);
