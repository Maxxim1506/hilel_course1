<?php 

namespace App\Controllers;

use App\Models\User;
use Core\View;

class AuthController 
{
	public function login()
	{
		$data = array_filter($_POST);
		
		if (!empty($data))
		{
			$obj = new User();
			$result = $obj->auth($data['email'], $data['password']);
			var_dump($result);
		}

		$path = 'Auth' . DIRECTORY_SEPARATOR . 'login';
        View::generate($path);
	}

	public function register()
	{
		$result = array_filter($_POST);
		var_dump($result);
        if (!empty($result)) {
        $obj = new User();
        $obj->createUser($result);
    }
        $path = 'Auth' . DIRECTORY_SEPARATOR . 'register';
        View::generate($path);
	}
}