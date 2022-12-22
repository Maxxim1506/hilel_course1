<?php

namespace App\Controllers;
use App\Models\User as ModelUsers;
use Core\View;
use Core\orm\Delete;
use Core\orm\Update;
use Core\orm\Select;

class User implements ControllerInterface {
// homework
    public function index()
    {
       $obj = new ModelUsers();
        $path = 'view_1';
        $data['users'] = $obj->getAll();
        View::generate($path, $data);
    }

    public function update()
    {
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'phone' => $_POST['phone']
        ];


        $objUpdate = new Update();
        $objUpdate->setTableName('users');
        $objUpdate->setId($_POST['id']);
        $objUpdate->setData($data);
        $objUpdate->execute($data); 
        header("Location: http://localhost/homework_hilel/example_less/users");  
    }

    public function delete()
    {
        $objDelete = new Delete();
        $objDelete->setTableName('users');
        $objDelete->setId($_POST['id']);

        $objDelete->execute();
        header("Location: http://localhost/homework_hilel/example_less/users");
    }

    public function view()
    {
        $objSelect =  new Select();
        $objSelect->where(" WHERE id=" . $_POST['id']);
        $objSelect->setTableName('users');
        $data = $objSelect->execute();
        $result['user'] = $data->fetchAll(\PDO::FETCH_ASSOC);
        $path = 'userUpdate';
        View::generate($path, $result);
    }

}
