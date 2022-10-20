<?php

namespace App\Controllers;
use App\Models\User as ModelUsers;
use Core\View;

class User implements ControllerInterface {

    public function index()
    {
       $obj = new ModelUsers();
        $path = 'view_1';
        $data['people'] = $obj->getAll();
        View::generate($path, $data);
    }

    public function edit()
    {
         var_dump('i am home\edit');
    }
}
