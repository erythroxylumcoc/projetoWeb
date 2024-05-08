<?php
include_once("conexao.php");

$nome_usuario = filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$enderco = filter_input(INPUT_POST, 'enderco', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);
$nascimento = filter_input(INPUT_POST, 'nasc', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$create_user = "INSERT INTO cadastro (nome_usuario, cpf, endereco, telefone, senha) VALUES ('$nome_usuario', '$cpf', '$enderco', '$telefone', '$senha')";
$created_user = mysqli_query($conn, $create_user);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color: green'>Usuário cadastrado com sucesso</p>";
    header("Location: login.html");
} else {
    $_SESSION['msg'] = "<p style='color: red'>Usuário não foi cadastrado com sucesso</p>";
    header("Location: cadastro.html");
}
