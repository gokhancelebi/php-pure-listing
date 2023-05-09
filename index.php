<?php
require_once __DIR__ . '/libs/bootstrap.php';


$data['title'] = "Ana Sayfa";
$data['slider_images'] = get_slider_images('home_slider');
$data['blogs'] = get_blog_posts();
template_part('home', $data);

?>

