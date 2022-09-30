<?php 
use App\HomeController;
use App\AdminController;
use App\Error404Controller;
namespace App;
class Router
{
public function run() {
	$str = $_SERVER['REQUEST_URI'];
	$exp = explode("/", $str);
	$className = 'App\\' . end($exp);

if (class_exists($className)) {
	$obj = new $className;
	$obj->showMessage();
} else {
	$obj = new Error404Controller();
	$obj->showMessage($className);
}


	}
}