<?php

require_once __DIR__ . '/../../libs/bootstrap.php';

auth_check();

if (isset($_POST['new_category'])){
    create_category($_POST['name']);
    redirect(home_url('admin/categories/index.php'));
}

template_part('admin/header');

template_part('admin/categories/edit',[
    'category' => null
]);

template_part('admin/footer');
