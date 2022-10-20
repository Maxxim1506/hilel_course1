<?php 
require __DIR__ . '/vendor/autoload.php';
use App\HomeController;
use App\AdminController;
use App\Error404Controller;
use App\Router;

// $str = $_SERVER['REQUEST_URI'];
// $exp = explode("/", $str);
// $className = 'App\\' . end($exp);
// // var_dump(class_exists($className));
// // var_dump($className);

// if (class_exists($className)) {
// 	$obj = new $className;
// 	$obj->showMessage();
// } else {
// 	$obj = new Error404Controller();
// 	$obj->showMessage($className);
// }
$obj = new Router();
$obj->run();
// var_dump($obj);



