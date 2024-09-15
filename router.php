<?php

$rotas = [
    '/' => '/pages/home.php',
    '/dashboard' => '/pages/dashboard.php',
    '/users/register' => '/pages/users/register.php',
    '/users/login' => '/pages/users/login.php',
    '/admin' => '/pages/admin.php',

    '/users/store' => '/Controllers/auth/register.php',
    '/logout' => '/Controllers/auth/logout.php',
    '/login' => '/Controllers/auth/login.php'
];

function rotear ($uri, $rotas) {   
    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        header("Location: /");
    }
}