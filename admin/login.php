<?php

require_once __DIR__ . '/../libs/bootstrap.php';

$errors = [];

if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email == ADMIN_EMAIL && $password == ADMIN_PASSWORD){
        $_SESSION['admin'] = true;
        if (isset($_GET['redirect'])){
            header('Location: '.$_GET['redirect']);
            exit;
        }
        header('Location: '.HOME_URL.'/admin');
    }else{
        $errors[] = "Email or password is incorrect";
    }
}

template_part('admin/login',[
    'errors' => $errors
]);