<?php


require_once __DIR__ .'/libs/bootstrap.php';

template_part('header',['title' => 'Bloglar']);

$data['blogs'] = get_blog_posts(12);

template_part('blogs',$data);

template_part('footer');