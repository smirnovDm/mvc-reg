<?php

define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');

$router = new Router();
$router->run();

//-------------------------------------------------------

abstract class Names {

    public $name;


    public function __construct($name) {
        $this->name = $name;

    }

}

class Vasya extends Names {

}

class Petya extends Names {

}

class View {
    private $pupa;
    
    public function __construct(Vasya $vasya) {
        $this->pupa = $vasya->name;
    }
    public function render(){
        echo $this->pupa;
    }
}

$vasya = new Vasya('Vasya');
$petya = new Petya('Petya');
$view = new View($vasya);
//$view->render();






//class Render {
//
//    private $pupa;
//
//    public function __construct($name) {
//        $this->pupa = $name;
////        $this->email = $email;
//    }
//
//    public function view() {
//        echo $this->pupa;
//    }
//
//}
//
//$petya = new Petya('Petya', 'Petya@mail.com');
//$vasya = new Vasya('Vasya', 'Vasya@mail.com');
//
//
//var_dump($vasya);
//
//
//$render = new Render($vasya->name);
//Render::view();


