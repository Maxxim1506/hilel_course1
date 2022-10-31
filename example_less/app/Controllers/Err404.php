<?php /** @noinspection PhpUndefinedClassInspection */

namespace App\Controllers;

class Err404 implements ControllerInterface{

    public function index()
    {
         echo 'Error 404';
    }
}

