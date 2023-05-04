<?php

function get_thumbnail_url($product_id){
    $db = gc_db(); // get PDO instance
    $sql = "SELECT * FROM images WHERE product_id = '".(int) $product_id."' ORDER BY id ASC  LIMIT 1 ";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if($result) {
        return home_url('uploads/images/products/' . $result['name']);
    } else {
        return home_url('assets/images/no-image.jpg');
    }
}