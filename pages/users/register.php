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
    <title>Página de Registro</title>
</head>
<body>
    <div>
        <form action="/users/store" method="post">
            <h3>Cadastro</h3>
            <div>
                <label for="InputUser">Usuário</label>
                <input type="text" name="user">
            </div>
            <div>
                <label for="InputPassword">Senha</label>
                <input type="password" id="InputPassword" name="password"
                    onkeyup="verifyPass()">
            </div>
            <div>
                <label for="InputCheckPassword">Repetir Senha</label>
                <input type="password" id="InputCheckPassword" name="verify"
                    onkeyup="verifyPass()">
                <p id="verification"></p>
            </div>
            <div>
                <label for="InputEmail">Email</label>
                <input type="email" id="InputEmail" name="email">
            </div>
            <div>
                <button type="submit">Registrar</button>
            </div>
        </form>
    </div>
    <script>
        function verifyPass() {
            var password = document.getElementById('InputPassword').value;
            var check = document.getElementById('InputCheckPassword').value;
            var verification = document.getElementById('verification');

            if (check.length === 0) {
                verification.innerHTML = "";
            } else if (password.length === 0) {
                verification.innerHTML = "";
            } else if (password !== check) {
                verification.innerHTML = "As senhas não coincidem";
            } else {
                verification.innerHTML = "As senhas coincidem";
            }
        }
    </script>
</body>
</html>