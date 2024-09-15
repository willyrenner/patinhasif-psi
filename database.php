<?php
function connection():mysqli {
    $conexao = mysqli_connect('127.0.0.1:3306', 'root', '');
    $conexao -> query("CREATE DATABASE IF NOT EXISTS db_patinhas_ifrn");
    $conexao -> select_db('db_patinhas_ifrn');
    return $conexao;
}

$connection = connection();

$connection->query(
    "CREATE TABLE IF NOT EXISTS users(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        user TEXT,
        email TEXT,
        password TEXT,
        typeUser TEXT)"
);

?>