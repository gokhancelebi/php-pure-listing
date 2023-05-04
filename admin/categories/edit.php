<?php

require_once __DIR__ . '/../../libs/bootstrap.php';

auth_check();


if (isset($_POST['new_category']))
    update_category($_GET['id'], $_POST['name']);


$category = get_category($_GET['id']);

if (!$category) {
    redirect(home_url('admin/categories/index.php'));
}

template_part('admin/header');


template_part('admin/categories/edit', [
    'category' => $category
]);

template_part('admin/footer');
