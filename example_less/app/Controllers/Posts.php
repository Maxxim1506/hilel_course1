<?php

namespace App\Controllers;
use App\Models\Posts as ModelPosts;
use Core\View;
// homework
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
        $result = array_filter($_POST);
        var_dump($result);
        if (!empty($result)) {
            $obj = new ModelPosts();
            $obj->createPost($result);
        }
        $path = 'Posts' . DIRECTORY_SEPARATOR . 'create';
        View::generate($path);
    }
}
