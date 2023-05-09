<?php

require_once __DIR__ . '/../../libs/bootstrap.php';

auth_check();

$files = [];

if (isset($_FILES['file'])){
    $files = $_FILES['file'];
}

$order = [];

if (isset($_POST['order'])){
    $order = $_POST['order'];
}

update_slider_images('home_slider',$order,$files);

echo 'Resimler Güncellendi';




