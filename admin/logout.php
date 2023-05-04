<?php
require_once __DIR__ . '/../libs/bootstrap.php';

auth_check();

unset($_SESSION['admin']);

header('Location: '.HOME_URL.'/admin/login.php');