<?php

require_once __DIR__ . '/../../libs/bootstrap.php';

auth_check();

$categories = get_categories();

template_part('admin/header');

template_part('admin/categories/index',[
    'categories' => $categories
]);

template_part('admin/footer');

