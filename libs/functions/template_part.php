<?php

function template_part($name,$data = []){
    extract($data);
    require __DIR__ . '/../../template-parts/' . $name . '.php';
}