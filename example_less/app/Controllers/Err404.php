<?php /** @noinspection PhpUndefinedClassInspection */

namespace App\Controllers;

class Err404 implements ControllerInterface{

    public function index()
    {
         var_dump('i am error404');
    }
    public function edit()
    {
        var_dump('i am error\edit');
    }
}

