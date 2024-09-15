<?php
    if (! hasUser()) {
        header('Location: /');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1>Página Inicial Patinhas IFRN</h1>
    <p>Olá, <?= $_SESSION['user'] ?>!</p>
    <a href="/logout"><button type="button" class="">Sair</button></a>
</body>
</html>