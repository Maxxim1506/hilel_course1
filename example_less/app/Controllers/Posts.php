<?php

namespace App\Controllers;
use App\Models\Posts as ModelPosts;
use Core\View;

class Posts implements ControllerInterface {

    public function index()
    {
       $obj = new ModelPosts();
        $path = 'view_1';
        $data['people'] = $obj->getAll();
        View::generate($path, $data);
    }

    public function edit()
    {
         var_dump('i am home\edit');
    }
}
