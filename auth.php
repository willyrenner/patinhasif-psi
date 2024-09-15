<?php
function hasUser() : bool{   
    return isset($_SESSION['user']);
}

function logout () : void {
    unset($_SESSION['name']);
    session_destroy();
}

function hasAdmin () : bool {
    $model = new User(connection());    
    $dataAdmin = $model->findUser($_SESSION['user']);

    if ($dataAdmin['typeUser'] === null) {
        header('Location: /dashboard');
    }
    return true;
}

?>