<?php

function get_blog_posts($limit = 10){

    $db = gc_db(); // PDO instance


    $sql = "SELECT * FROM blog ORDER BY id DESC LIMIT :limit";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;


}

function get_blog_post($id){
    $db = gc_db(); // PDO instance
    $sql = "SELECT * FROM blog WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }else{
        return null;
    }
}

function create_blog_post($data){
    $db = gc_db(); // PDO instance
    // title,description,image
    $sql = "INSERT INTO blog (title,description,image) VALUES (:title,:description,:image)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':title', $data['title'], PDO::PARAM_STR);
    $stmt->bindParam(':description', $data['description'], PDO::PARAM_STR);
    $stmt->bindParam(':image', $data['image'], PDO::PARAM_STR);
    $stmt->execute();

    return $db->lastInsertId();
}

function update_blog_thumbnail($id,$image){
    $db = gc_db(); // PDO instance
    // title,description,image
    $sql = "UPDATE blog SET image = :image WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':image', $image, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    return $db->lastInsertId();
}

function update_blog_post($id,$title,$descripion){
    $db = gc_db(); // PDO instance
    // title,description
    $sql = "UPDATE blog SET title = :title, description = :description WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':description', $descripion, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        return true;
    }else{
        return false;
    }

}

function delete_blog_post($id){
    $db = gc_db(); // PDO instance
    $sql = "DELETE FROM blog WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        return true;
    }else{
        return false;
    }
}