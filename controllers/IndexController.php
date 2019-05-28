<?php

include_once ROOT . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'View.php';
use components\View;

class IndexController {
    
    public function actionIndex(){
        $view = new View();
        $view->render('template_main_view');
        return true;
    }
}
