<?php

require_once __DIR__ . '/../../libs/bootstrap.php';

auth_check();


if (!isset($_GET['id'])) {
    redirect(home_url('admin/products/index.php'));
}

$id = (int)$_GET['id'];

$db = gc_db(); // PDO instance

$product = get_blog_posts($id);

if ($product == null) {
    redirect(home_url('admin/blogs/index.php'));
}

$product = delete_blog_post($id);


redirect(home_url('admin/blogs/index.php'));

