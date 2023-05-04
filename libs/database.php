<?php
// PDO database connection
function gc_db()
{
    static $db = null;

    if ($db instanceof PDO) {
        return $db;
    }
    try {
        $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET NAMES 'utf8';");
        return $db;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}