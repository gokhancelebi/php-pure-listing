<?php

require_once __DIR__ . '/../../libs/bootstrap.php';

auth_check();


if (!isset($_GET['id'])) {
    redirect(home_url('admin/blogs/index.php'));
}

$blog_id = (int)$_GET['id'];

if (isset($_POST['new_blog'])){
    update_blog_post($blog_id,$_POST['title'],$_POST['description']);
}

# if blog_thumbnail file uploaded
if (isset($_FILES['blog_thumbnail'])) {
    $file = $_FILES['blog_thumbnail'];
    $file_name = time() . '-'. $file['name'];
    $file_tmp_name = $file['tmp_name'];
    $file_error = $file['error'];
    $file_size = $file['size'];
    $file_type = $file['type'];
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $file_name = pathinfo($file_name, PATHINFO_FILENAME);
    $file_name = $file_name . '_' . time() . '.' . $file_ext;
    $file_path = __DIR__ . '/../../uploads/images/blog/' . $file_name;
    $file_url = home_url('uploads/blog/' . $file_name);
    $file_allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($file_ext, $file_allowed_ext)) {
        if ($file_error === 0) {

            if (move_uploaded_file($file_tmp_name, $file_path)) {
                update_blog_thumbnail($blog_id, $file_name);
            }

        }
    }
}


$blog = get_blog_post($blog_id);

template_part('admin/header');

template_part('admin/blogs/edit', [
    'blog' => $blog
]);

template_part('admin/footer');