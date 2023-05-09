<?php

require_once __DIR__ . '/../../libs/bootstrap.php';

auth_check();

$db = gc_db(); // PDO instance

$messages = get_contect_messages();

template_part('admin/header', [
    'title' => 'İletişim'
]);

template_part('admin/contacts/index', [
    'messages' => $messages
]);

?>