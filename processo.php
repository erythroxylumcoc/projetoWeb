<?php
session_start();
include_once("conexao.php");

$nome_usuario = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'tele', FILTER_SANITIZE_NUMBER_INT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$create_user = "INSERT INTO carrinho (nome, cpf, endereco, tele, senha) VALUES ('$nome_usuario', '$cpf', '$endereco', '$telefone', '$senha')";
$created_user = mysqli_query($conexao, $create_user);
