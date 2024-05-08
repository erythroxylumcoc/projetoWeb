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
        <img src="./logo-removebg-preview.png">
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form action="processo.php" method="post">
            <input type="text" name="nome" placeholder="Nome de usuário" required>
            
            <input type="number" name="cpf" placeholder="Cpf" required><br>
            
            <input type="text" name="endereco" placeholder="Endereço"required><br>
            
            <input type="number" name="tele" placeholder="Telefone"required><br>
            
            <input type="password" name="senha" placeholder="cadastre uma senha" required><br>
                         
            <a href="login.php"><input type="submit" value="Cadastre-se"></a>
        </form>
    </div>
</body>
