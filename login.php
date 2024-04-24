<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
       
        <h2>ReVeste Vintage</h2>
        <form action="login.php" method="post">
            <input type="text" id="username" placeholder="Nome de usuário" required>
            <input type="password" id="password" placeholder="Senha" required>
            <input type="button" value="Login" onclick="login()">
            <a href="cadastro.php"><input type="button" value="Cadastrar"></a>
        </form>
    </div>
    <script src="login.js"></script>
</body>
</html>