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
        $result = array_filter($_POST);
        var_dump($result);
        if (!empty($result)) {
            $obj = new ModelContacts();
            $obj->createContact($result);
        }
        $path = 'Contacts' . DIRECTORY_SEPARATOR . 'create';
        var_dump($path);
        View::generate($path);

    }}
