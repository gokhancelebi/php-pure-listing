<?php

require_once __DIR__ . '/libs/bootstrap.php';



$images = get_product_images($_GET['id']);
$product = get_product($_GET['id']);
$products = get_products(null,1,4);

template_part('product-detail',[
    'product' => $product,
    'images' => $images,
    'latest_products' => $products,
]);

?>
