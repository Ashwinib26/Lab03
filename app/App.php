<?php
namespace Company\Utility;

use Company\Utility\Controller\MyMainController;


class App {
    public static function init() {
        $controller = new MyMainController();
        $controller->show();
    }
}