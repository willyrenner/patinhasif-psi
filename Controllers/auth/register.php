<?php
if (hasUser()) {
    header('Location: /dashboard');
    exit; 
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: /users/register"');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user'], $_POST['email'], $_POST['password'], $_POST['verify'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verify = $_POST['verify'];

    $model = new User(connection());
    $dataUser = $model->findUser($user);
    $dataEmail = $model->findEmail($email);

    if ($dataUser && $dataUser['user'] === $user) {
        echo 'Nome de usuário em uso';
        echo '<button><a href="/users/register" style="text-decoration: none">Voltar ao formulário</a></button>';
    } else if ($dataEmail && $dataEmail['email'] === $email) {
        echo 'Email em uso';
        echo '<button><a href="/users/register" style="text-decoration: none">Voltar ao formulário</a></button>';
    }
    else if (empty($user)) {
        echo 'Você não informou o nome de usuário. <br> <br>';
        echo '<button><a href="/users/register" style="text-decoration: none">Voltar ao formulário</a></button>';
    } else if (empty($password)) {
        echo 'Você não informou a senha de usuário <br> <br>';
        echo '<button><a href="/users/register" style="text-decoration: none">Voltar ao formulário</a></button>';
    } else if ($verify !== $password) {
        echo 'As senhas não coincidem <br> <br>';
        echo '<button><a href="/users/register" style="text-decoration: none">Voltar ao formulário</a></button>';
    } else if (empty($email)) {
        echo 'Sem email <br> <br>';
        echo '<button><a href="/users/register" style="text-decoration: none">Voltar ao formulário</a></button>';
    } else {
        echo '<script> console.log("Usuário cadastrado com sucesso!")</script>';
        $model->save($user, $email, $password);
        header('Location: /login');
    }
}
?>
