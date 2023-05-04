<?php

function get_categories()
{
    $db = gc_db(); // PDO instance
    $sql = "SELECT * FROM categories";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_category($category_id){
    $db = gc_db(); // PDO instance
    $sql = "SELECT * FROM categories WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        ':id' => $category_id
    ]);
    if ($stmt->rowCount() === 0) {
        return false;
    }
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function delete_category($category_id){
    $db = gc_db(); // PDO instance
    $sql = "DELETE FROM categories WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        ':id' => $category_id
    ]);
    return $stmt->rowCount() > 0;
}

function create_category($name){
    $db = gc_db(); // PDO instance
    $sql = "INSERT INTO categories (name,parent_id) VALUES (:name,:parent_id)";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':parent_id' => 0
    ]);
    return $stmt->rowCount() > 0;
}

function update_category($id,$name){
    $db = gc_db(); // PDO instance
    $id = (int) $id;
    $sql = "UPDATE categories SET name = :name WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':id' => $id
    ]);
    return $stmt->rowCount() > 0;
}