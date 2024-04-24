<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastre-se</title>
    <style>
       
    </style>
</head>
<body>
    <div class="container">
       
        <h2>ReVeste Vintage</h2>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Nome de usuário" required>
            
            <input type="text" name="cpf" id="cpfjs" placeholder="Cpf"required><br>
            
            <input type="text"name="end" placeholder="Endereço"required><br>
            
            <input type="text" name="tel" placeholder="Telefone"required><br>
            
            <input type="password" name="senha" placeholder="cadastre uma senha" required><br>
             
            <input type="password" name="senha" placeholder="confirme sua senha" required><br>
            
            <input type="submit" value="Cadastre-se" onclick="cadastro()">
        </form> 
        
        <script src="cadastro.js"></script>
</body>
</html>

    
  