<?php
namespace App\Models;
use Core\orm\Select;
use Core\orm\Insert;
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
    public function createPost($data): void
    {
        $objInsert = new Insert();
        $objInsert->setColumn(array_keys($data));
        $objInsert->setValues(array_values($data));
        $objInsert->setTableName('posts');
        $objInsert->execute();
    }
}


