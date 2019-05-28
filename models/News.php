<?php

include_once ROOT . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'Db.php';

use components\Db;

class News {

    public static function getNewsList() {
        $db = Db::getConnection();
        $query = "SELECT * FROM " . 'news' . ";";
        $result = $db->query($query);

        if (!$result) {
            return false;
        }
      return $result->fetchAll((PDO::FETCH_ASSOC));
    }

}
