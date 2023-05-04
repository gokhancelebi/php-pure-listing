<?php

require_once __DIR__ . '/../libs/bootstrap.php';

auth_check();

template_part('admin/header');

template_part('admin/dashboard');

template_part('admin/footer');

?>