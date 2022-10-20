<?php

namespace App\Controllers;
use App\Models\Contacts as ModelContacts;
use Core\View;

class Contacts implements ControllerInterface {

    public function index()
    {
       $obj = new ModelContacts();
        $path = 'view_1';
        $data['people'] = $obj->getAll();
        View::generate($path, $data);
    }

    public function edit()
    {
         var_dump('i am home\edit');
    }
}
