<?php 

namespace App;

class Error404Controller 
{
	public function showMessage($className)
	{
		echo "$className not found. " . 'Error404';
	}
}
