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
    <title>Bem Vindo</title>
</head>

<body>
    <h1>Bem vindo ao Projeto Patinhas IFRN</h1>
    <a href="/users/login"><button type="button" class="">Login</button></a>
    <a href="/users/register"><button type="button" class="">Register</button></a>
</body>

</html>