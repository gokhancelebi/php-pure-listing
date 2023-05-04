<?php
require_once __DIR__ . '/libs/bootstrap.php';

$category_id = null;
$page = 1;

if (isset($_GET['category_id'])){
    $category_id = $_GET['category_id'];
}

if (isset($_GET['page'])){
    $page = $_GET['page'];
}

$data['products'] = get_products($category_id,$page);
$data['pagination_html'] = pagination_html($category_id,$page);

template_part('products',$data);
?>