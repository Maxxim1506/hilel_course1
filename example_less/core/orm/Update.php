<?php 

namespace Core\orm;
use Core\orm\common\Connector;

class Update
{
	private $tableName;
	private $id;
	private $data;

	public function getId(): int
	{
		return $this->id;
	}

	public function setId($id): void
	{
		$this->id = $id;
	}

	public function getTableName(): string 
	{
		return $this->tableName;
	}

	public function setTableName($tableName): void 
	{
		$this->tableName = $tableName;
	}

	public function getData():string
	{
		return $this->data;
	}

	public function setData($data):void 
	{
		$this->data = $data;
	}

	public function update($data)
    {

    	 $str = '';
         
         foreach ($data as $key => $value) {
              
            $str .= $key .'='. "'" . $value. "'";
            $str .= ',';
         }
         $str = mb_substr($str, 0, -1);
         // var_dump($str);die();

        $sql = 'UPDATE ' .$this->tableName. ' SET ' .$str. ' WHERE id = ' .$this->id;
        var_dump($sql);
        return $sql;
    }

    public function execute($data)
	{
		$connect = new Connector();
		$PDO = $connect->connect();
		return $PDO->query($this->update($data));
	}

}