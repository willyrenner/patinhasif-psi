<?php
if (hasUser()) {
    header('Location: /dashboard');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>
<body>
    <div>
        <form action="/login" method="post">
            <h3>Fazer Login</h3>
            <div>
                <label for="InputUser">Usuário</label>
                <input type="text" id="InputUser" name="user">
            </div>
            <div>
                <label for="InputPassword">Senha</label>
                <input type="password" id="InputPassword" name="password">
            </div>
            <div>
                <button type="submit">ENTRAR</button>
            </div>
            <a href="/users/register">
                <p>Registre-se</p>
            </a>
        </form>
    </div>
</body>
</html>