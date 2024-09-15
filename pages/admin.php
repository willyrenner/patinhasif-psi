<?php
! hasAdmin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Olá, <?= $_SESSION['user'] ?>!</p>
    <h1>Painel de Admin</h1>

    <a href="/logout"><button type="button">Sair</button></a>

</body>

</html>