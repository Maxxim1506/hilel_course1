<?php
namespace App\Models;
use Core\orm\Select;
use Core\orm\Insert;
// homework
class User
{
    public function getAll (): array {

    $select = new Select();
    $select->setTableName('users');
    $data = $select->execute();
    $rows = $data->fetchAll(\PDO::FETCH_ASSOC);
    // var_dump($rows); die();
    return $rows;
    }
    public function createUser($data): void
    {
        $objInsert = new Insert();
        $objInsert->setColumn(array_keys($data));
        $objInsert->setValues(array_values($data));
        $objInsert->setTableName('users'); 
        $objInsert->execute();
    }

    public function auth($email, $password): bool
    {
        $objSelect =  new Select();
        $objSelect->setWhere("email='" . $email . "' AND password = '" .$password . "'");
        $objSelect->setTableName('users');
        $data = $objSelect->execute();
        $result = $data->
        fetchAll(\PDO::FETCH_ASSOC);
        return !empty($result);
    }
}


