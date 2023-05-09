<?php
require_once __DIR__ . '/../../libs/bootstrap.php';

auth_check();

$db = gc_db(); // PDO instance

$blogs = get_blog_posts();

template_part('admin/header', [
    'title' => 'Bloglar'
]);

template_part('admin/blogs/index', [
    'blogs' => $blogs
]);

?>