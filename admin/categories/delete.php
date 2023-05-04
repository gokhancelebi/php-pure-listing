<?php

require_once __DIR__ . '/../../libs/bootstrap.php';

auth_check();

$category = get_category($_GET['id']);

if (!$category) {
    redirect(home_url('/admin/categories'));
}

delete_category($category['id']);

redirect(home_url('/admin/categories/index.php'));