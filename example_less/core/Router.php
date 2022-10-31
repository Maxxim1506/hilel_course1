<?php /** @noinspection ALL */

namespace Core;
use App\Controllers\Err404;

class Router {

    private $exp;
    private $config = [];

    public function __construct()
    {
        $this->exp = substr($_SERVER["REQUEST_URI"], 29);
        $this->config = include_once (__DIR__) . '/../app/config/config.php';
        var_dump($_SERVER["REQUEST_URI"]);
    }

    public function run ()
    {
        // array_key_exists($this->exp, $this->config));
        // var_dump($this->exp);

        if (array_key_exists($this->exp, $this->config)) {
            $classPath = 'App\Controllers\\' . $this->getClassName();
        } else {
            $classPath = 'App\Controllers\Err404';
        }

        if (class_exists($classPath)) {
            $obj = new $classPath;
    } else {
            $obj = new Err404();
        }
        $methodName = $this->getMethodName();

        if (method_exists($obj,$methodName)) {
            $obj -> $methodName();
        } else {
            (new Err404)->index();
        }
    }

    private function getMethodName (): string
    {
        $expmethod = '';
        if(isset($this->config[$this->exp])){
            $expmethod = explode(':', $this->config[$this->exp]);
            $expmethod = $expmethod[1];
        }
        return $expmethod;
    }

    private function getClassName (): string
    {
        $exp = explode(':', $this->config[$this->exp]);
        return $exp[0];
    }

}



