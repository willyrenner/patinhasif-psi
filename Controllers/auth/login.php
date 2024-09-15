<?php 
    if (hasUser()) {
        header("Location: /dashboard");
    }

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method !== "POST") {
        header("Location: /");
    }

    if (isset($_POST['user'], $_POST['password'])) {
        $user = $_POST['user'];
        $password = $_POST['password'];

        $model = new User(connection());    
        $data = $model->findUser($user);
        $dataAdmin = $model->findAdmin($user);

        if ($data['typeUser'] !== null && password_verify($password, $data['password'])) {
            $_SESSION['user'] = $data['user'];
            header('Location: /admin');
        } else if ($data && password_verify($password, $data['password'])) {
            $_SESSION['user'] = $data['user'];
            header('Location: /dashboard');
        } else {
            header('Location: /users/login');
        }
    } else {
        header('Location: /users/login');
    }
?>