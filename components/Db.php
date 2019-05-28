<?php



namespace components;
use mysqli;
class Db {



    public static function getConnection() {
        $paramsPath = ROOT . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';
        include($paramsPath);
     $db = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
     return $db;
       
    }

}
