<?php
namespace App\Models;
use Core\orm\Select;

class Posts
{
    public function getAll (): array {

    $select = new Select();
    $select->setTableName('posts');
    $data = $select->execute();
    $rows = $data->fetchAll(\PDO::FETCH_ASSOC);
    // var_dump($rows); die();
    return $rows;
    }
}


