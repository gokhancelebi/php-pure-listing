<?php

require_once __DIR__ . '/../../libs/bootstrap.php';

auth_check();

$db = gc_db(); // PDO instance

if (isset($_POST['id']) && isset($_POST['checked'])) {
    $id = $_POST['id'];
    $checked = $_POST['checked'];
    $query = $db->prepare('update products set show_home = :show_home where id = :id');
    $query->execute([
        'show_home' => $checked,
        'id' => $id,
    ]);
    if ($query->rowCount()) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}