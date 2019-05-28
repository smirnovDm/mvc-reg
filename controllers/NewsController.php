<?php

include_once ROOT . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'News.php';
include_once ROOT . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'View.php';
use components\View;

class NewsController {

    public function actionIndex() {
  

        $view = new View();
        $view->newsList = News::getNewsList();
        $view->render('news_index_view');
        return true;
    }

    public function actionView($category, $id) {
        echo '<br>' . $category;
        echo '<br>' . $id;
        return true;
    }

}
