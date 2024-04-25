<?php
Session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <div class="container">
        <img src="./logo.png" alt="">
        <h2>ReVeste Vintage</h2>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form action="processo.php" method="post">
            <input type="text" name="nome_usuario" placeholder="Nome de usuário" required>
            
            <input type="text" name="cpf" placeholder="Cpf"required><br>
            
            <input type="text" name="endereco" placeholder="Endereço"required><br>
            
            <input type="text" name="tele" placeholder="Telefone"required><br>
            
            <input type="password" name="senha" placeholder="cadastre uma senha" required><br>
             
            <input type="password" name="senha" placeholder="confirme sua senha" required><br>
            
            <input type="submit" 
            value="Cadastre-se">
        </form>
    </div>
</body>
