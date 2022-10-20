<?php

namespace App\Controllers;
use App\Models\Pages;
use Core\View;

class Home implements ControllerInterface {

    public function index()
    {
       $obj = new Pages;
        $path = 'view_1';
        $data['people'] = $obj->getAll();
        View::generate($path, $data);
    }

    public function edit()
    {
         var_dump('i am home\edit');
    }
}
