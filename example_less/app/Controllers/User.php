<?php

namespace App\Controllers;
use App\Models\User as ModelUsers;
use Core\View;

class User implements ControllerInterface {
// homework
    public function index()
    {
       $obj = new ModelUsers();
        $path = 'view_1';
        $data['people'] = $obj->getAll();
        View::generate($path, $data);
    }

    public function edit()
    {
        $result = array_filter($_POST);
        var_dump($result);
        if (!empty($result)) {
            $obj = new ModelUsers();
            $obj->createUser($result);
        }
        $path = 'User' . DIRECTORY_SEPARATOR . 'Insert';
        var_dump($path);
        View::generate($path);
    }
}
