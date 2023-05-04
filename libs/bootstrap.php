<?php

session_start();

function bootstrap()
{
    // Composer Autoloader
    require_once __DIR__ .'/../vendor/autoload.php';

    // Config
    require_once __DIR__ . '/../config.php';
    // Database Connection
    require_once __DIR__ . '/database.php';
    // Functions
    require_once __DIR__ . '/functions.php';

}

bootstrap();