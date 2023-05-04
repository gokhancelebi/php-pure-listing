<?php

function auth_check(){
    if (!isset($_SESSION['admin'])){
        header('Location: '.home_url('admin/login.php'));
        exit;
    }
}