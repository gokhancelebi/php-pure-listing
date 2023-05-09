<?php

require_once __DIR__ . '/libs/bootstrap.php';

$id = (int) $_GET['id'];

$blog = get_blog_post($id);

template_part('header',['title' => $blog['title']]);

template_part('blog-detail',['blog' => $blog]);

template_part('footer');