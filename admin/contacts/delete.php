<?php

require_once __DIR__ . '/../../libs/bootstrap.php';

auth_check();


if (!isset($_GET['id'])) {
    redirect(home_url('admin/contacts/index.php'));
}

$id = (int)$_GET['id'];

$db = gc_db(); // PDO instance

$message = get_contect_messages($id);


if ($message == null) {
    echo 'Mesaj bulunamadı';
    exit;
    redirect(home_url('admin/contacts/index.php'));
}

delete_contact_message($id);


redirect(home_url('admin/contacts/index.php'));

