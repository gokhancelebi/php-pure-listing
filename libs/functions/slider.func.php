<?php

function get_slider_images($slider_name)
{
    $db = gc_db();

    $query = $db->prepare('SELECT * FROM slider_images WHERE slider_name = :slider_name ORDER BY image_order asc');
    $query->execute([
        'slider_name' => $slider_name
    ]);

    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function update_slider_images($slider_name,$order,$files){

    $current_images = get_slider_images($slider_name);
    $current_images = array_column($current_images, 'image_url');


    if (isset($files['name'])){
        foreach ($files['name'] as $key => $file) {
            if ($files['error'][$key] === 0) {
                $tmp = $files['tmp_name'][$key];
                $image_order = $order[$key];
                $filename = $image_order  . '-'. time() . '-' . $files['name'][$key];
                $destination = __DIR__ . '/../../uploads/images/slider_images/'.$filename;
                move_uploaded_file($tmp, $destination);
                $db = gc_db();
                $query = $db->prepare('INSERT INTO slider_images (slider_name,image_url,image_order) VALUES (:slider_name,:image_url,:image_order)');
                $query->execute([
                    'slider_name' => 'home_slider',
                    'image_url' => $filename,
                    'image_order' => $image_order
                ]);
                unset($order[$key]);
            }
        }
    }

    foreach ($order as $key => $value){
        $db = gc_db();
        $query = $db->prepare('UPDATE slider_images SET image_order = :image_order WHERE image_url = :image_url');
        $query->execute([
            'image_order' => $value,
            'image_url' => $key
        ]);
        if (in_array($key,$current_images)){
            $current_images = array_diff($current_images,[$key]);
        }
    }

    foreach ($current_images as $current_image){
        $db = gc_db();
        $query = $db->prepare('DELETE FROM slider_images WHERE image_url = :image_url');
        $query->execute([
            'image_url' => $current_image
        ]);
        unlink(__DIR__ . '/../../uploads/images/slider_images/'.$current_image);
    }

}