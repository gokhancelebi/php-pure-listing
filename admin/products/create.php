<?php

require_once __DIR__ . '/../../libs/bootstrap.php';

auth_check();

template_part('admin/header');

$product = null;


$images = [];

if (isset($_POST['new_product'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];

    # images from uploaded_image_name
    if (isset($_POST['uploaded_image_name'])){
        $images = $_POST['uploaded_image_name'];

    }

    $product_id = create_product([
        'title' => $title,
        'description' => $description,
        'category_id' => $category_id,
        'images' => $images
    ]);



    if ($product_id) {
        redirect(home_url('admin/products/edit.php?id=' . $product_id . '&message=success_created'));
    }

}


$categories = get_categories();

template_part('admin/products/edit', [
    'categories' => $categories,
    'product' => $product,
    'images' => $images
]);

template_part('admin/footer');