<?php
require_once __DIR__ . '/libs/bootstrap.php';


$data = [];

$data['title'] = 'İletişim';


template_part('header',$data);

template_part('contact',$data);

template_part('footer');