<?php

require_once __DIR__ . '/../../libs/bootstrap.php';


template_part('admin/header');

$data = [];

$images = get_slider_images('home_slider');

$data['images'] = $images;
$data['slider'] = "home_slider";


template_part('admin/sliders/edit',$data);


template_part('admin/footer') ;