<?php

namespace components;

use mysqli;
use PDO;

class Db {

    public static function getConnection() {
        $paramsPath = ROOT . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';
        include($paramsPath);
        $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PWD);
//        $db = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
        return $db;
    }

}
