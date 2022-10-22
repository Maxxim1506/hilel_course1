<?php
namespace App\Models;
use Core\orm\Select;
use Core\orm\Insert;

class Contacts
{
    public function getAll (): array {

    $select = new Select();
    $select->setTableName('contacts');
    $data = $select->execute();
    $rows = $data->fetchAll(\PDO::FETCH_ASSOC);
    // var_dump($rows); die();
    return $rows;
    }
    public function createContact($data): void
    {
        $objInsert = new Insert();
        $objInsert->setColumn(array_keys($data));
        $objInsert->setValues(array_values($data));
        $objInsert->setTableName('contacts');
        $objInsert->execute();
    }
}


