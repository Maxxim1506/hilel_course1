<?php

namespace App\Core;

use App\Controllers\Admin;
use App\Controllers\Home;
use App\Controllers\Error404;



class Router
{
    private $exp = [];

   public function __construct()
    {
        $str = substr($_SERVER["REQUEST_URI"],1);
        $this->exp = explode("/", $str);
    }

    public function run(): void
    {
        $classPath = 'App\Controllers\\' . $this->getClassName();
            if (class_exists($classPath)) {
                $obj = new $classPath;
            } else {
                $obj = new Error404();
                echo $obj->showMessage();
            }
            $methodName = $this->getMethodName();

            if (method_exists($obj, $methodName)) {
               echo $obj->$methodName();
            } else {
               $obj = new Error404();
               echo $obj->showMessage();
            }
    }

    private function getMethodName(): string
    {
        $classMessage = count($this->exp) - 1;
        return $this->exp[$classMessage];
    }

    private function getClassName(): string
    {
        $classMessage = count($this->exp) - 2;
        $className = $this->exp[$classMessage];
        return ucfirst($className);
    }
}

?>
