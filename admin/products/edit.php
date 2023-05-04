<?php

require_once __DIR__ . '/../../libs/bootstrap.php';

auth_check();


if (!isset($_GET['id'])) {
    redirect(home_url('admin/products/index.php'));
}

$id = (int)$_GET['id'];
$images = [];

if (isset($_POST['new_product'])){
    update_product($id, $_POST['title'], $_POST['category_id'], $_POST['description']);
    if (isset($_POST['uploaded_image_name'])) {
        $images = $_POST['uploaded_image_name'];
    }
    set_product_images($id, $images);
}



$images = get_product_images($id);



$product = get_product($id);

template_part('admin/header');

template_part('admin/products/edit', [
    'product' => $product,
    'categories' => get_categories(),
    'images' => get_product_images($id)
]);

template_part('admin/footer');