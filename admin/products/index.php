<?php
require_once __DIR__ . '/../../libs/bootstrap.php';

auth_check();

$db = gc_db(); // PDO instance

$products = get_products(null,1);

template_part('admin/header', [
    'title' => 'Ürünler'
]);

template_part('admin/products/index', [
    'products' => $products
]);

?>