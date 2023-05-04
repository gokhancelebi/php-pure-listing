<?php

function get_product($product_id)
{
    $db = gc_db(); // PDO instance
    $product_id = (int)$product_id;
    $sql = "SELECT * FROM products WHERE id = :product_id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
    $stmt->execute();
    # check if product exists
    if ($stmt->rowCount() > 0) {
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    return false;
}

function get_products($category_id = null, $page = 1, $limit = CONTENT_PER_PAGE)
{
    $db = gc_db(); // PDO instance
    $category_id = (int)$category_id;
    $page = (int)$page;
    $sql = "SELECT * FROM products";
    if ($category_id) {
        $sql .= " WHERE category_id = :category_id";
    }
    $sql .= " ORDER BY id DESC";
    $sql .= " LIMIT :limit OFFSET :offset";
    $stmt = $db->prepare($sql);
    if ($category_id) {
        $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
    }
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', ($page - 1) * $limit, PDO::PARAM_INT);
    $stmt->execute();
    # check if product exists
    if ($stmt->rowCount() > 0) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return false;
}

function pagination_html($category_id = null, $page = 1)
{
    $db = gc_db(); // PDO instance
    $category_id = (int)$category_id;
    $page = (int)$page;
    $sql = "SELECT COUNT(*) FROM products";
    if ($category_id) {
        $sql .= " WHERE category_id = :category_id";
    }
    $stmt = $db->prepare($sql);
    if ($category_id) {
        $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
    }
    $stmt->execute();
    $total_products = $stmt->fetchColumn();
    $total_pages = ceil($total_products / CONTENT_PER_PAGE);
    $html = '';
    for ($i = 1; $i <= $total_pages; $i++) {
        $html .= '<a href="?page=' . $i;
        if ($category_id) {
            $html .= '&category_id=' . $category_id;
        }
        $html .= '"';
        if ($page == $i) {
            $html .= ' class="active"';
        }
        $html .= '>' . $i . '</a>';
    }
    return $html;

}

function create_product($data)
{
    $db = gc_db(); // PDO instance
    $sql = "INSERT INTO products (title, description, category_id) VALUES (:title, :description, :category_id)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':title', $data['title'], PDO::PARAM_STR);
    $stmt->bindParam(':description', $data['description'], PDO::PARAM_STR);
    $stmt->bindParam(':category_id', $data['category_id'], PDO::PARAM_INT);
    $stmt->execute();
    $product_id = $db->lastInsertId();

    # check if product exists
    if ($stmt->rowCount() > 0) {
        $images = $data['images'];
        set_product_images($product_id, $images);
        return $product_id;
    }
    return false;
}

function get_product_images($product_id)
{
    $db = gc_db(); // PDO instance
    $product_id = (int)$product_id;
    $sql = "SELECT * FROM images WHERE product_id = :product_id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
    $stmt->execute();
    # check if product exists
    if ($stmt->rowCount() > 0) {
        $images = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($images as $key => $image) {
            $images[$key]['image'] = home_url(PRODUCT_IMAGES_DIR . $image['name']);
            $images[$key]['path'] = $image['name'];
        }
        return $images;
    }
    return [];
}

function set_product_images($product_id, $new_images)
{
    $db = gc_db(); // PDO instance
    $product_id = (int)$product_id;
    /* Delete products images from database and disk */
    $images = get_product_images($product_id);

    if ($images) {
        foreach ($images as $image) {
            $image_path = HOME_DIR . PRODUCT_IMAGES_DIR . $image['path'];
            if (file_exists($image_path) && !in_array($image['path'],$new_images)) {
                unlink($image_path);
            }
        }
    }
    $sql = "DELETE FROM images WHERE product_id = :product_id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
    $stmt->execute();
    /* Insert new images */
    foreach ($new_images as $new_image) {

        $is_thumbnail = "No";

        $sql = "INSERT INTO images (product_id, name,is_thumbnail) VALUES (:product_id, :name, :is_thumbnail)";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $new_image, PDO::PARAM_STR);
        $stmt->bindParam(':is_thumbnail', $is_thumbnail, PDO::PARAM_STR);
        $stmt->execute();

    }

}

function delete_product($product_id)
{
    $db = gc_db(); // PDO instance
    $product_id = (int)$product_id;

    # remove images from disk first
    delete_product_images($product_id);

    $sql = "DELETE FROM products WHERE id = :product_id";
    $stmt_product = $db->prepare($sql);
    $stmt_product->bindParam(':product_id', $product_id, PDO::PARAM_INT);
    $stmt_product->execute();

    # check if product exists
    if ($stmt_product->rowCount() > 0) {
        return false;
    }

    return true;
}

function update_product($id, $title, $category_id, $description, $images = null)
{
    $db = gc_db(); // PDO instance
    $id = (int)$id;
    $sql = "UPDATE products SET title = :title, description = :description, category_id = :category_id WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    # check if product exists
    if ($stmt->rowCount() > 0) {
        return true;
    }
    return false;
}

function delete_product_images($product_id){
    $db = gc_db(); // PDO instance
    $product_id = (int)$product_id;

    # remove from disk first
    $images = get_product_images($product_id);
    if ($images) {
        foreach ($images as $image) {
            $image_path = HOME_DIR . PRODUCT_IMAGES_DIR . $image['path'];
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
    }

    $sql = "SELECT * FROM images WHERE product_id = :product_id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
    $stmt->execute();
}