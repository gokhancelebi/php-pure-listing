<?php

function init_functions(){
    $files = glob(__DIR__ . '/functions/*.php');
    foreach ($files as $file) {
        require_once $file;
    }
}

init_functions();