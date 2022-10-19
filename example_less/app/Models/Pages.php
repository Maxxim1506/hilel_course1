<?php
namespace App\Models;
class Pages
{
    public function getAll (): array {
        return $arr_pages =  [
            'page1'=>'auto',
            'page2'=>'moto',
            'page3'=>'house',
            'page4'=>'fasenda',
        ];
    }
}
