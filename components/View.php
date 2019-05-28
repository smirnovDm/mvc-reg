<?php



namespace components;


class View {
       public function render($content_view, $template_view = 'template_main_view') {
	$path = ROOT . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $template_view . '.php';
        include_once $path;
    }
}
